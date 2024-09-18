// ECS610U -- Miles Hansard

precision highp float;

uniform mat4 modelview, modelview_inv, projection, view_inv;

uniform struct {
    vec4 position, ambient, diffuse, specular;  
} light;

uniform bool render_skybox, render_texture, make_grey;
uniform samplerCube cubemap;
uniform sampler2D texture;

varying vec2 map;
varying vec3 d, m;
varying vec4 p, q;

//float BlackToTransparent(vec3 x){
//    if(length(x) <= 0.5){
//        return 0.0;
//    }
//    else{
//        return length(x);
//    }
//}

vec4 gamma_transform(vec4 colour, float gamma){
    return vec4(pow(colour.rgb, vec3(gamma)), colour.a);
}

float vignette(vec4 x){
    vec4 ImageCenter = vec4(850.0/2.0, 850.0/2.0, 0.0, 1.0);
    float ClampedValue = clamp(length((x - ImageCenter)) / ((850.0*2.0) / 2.0),0.0,1.0);
    return smoothstep(1.0, 0.0, ClampedValue);
}

void main()
{ 
    vec3 n = normalize(m);

    if(render_skybox) {
        gl_FragColor = textureCube(cubemap,vec3(-d.x,d.y,d.z));
    }
    else {

        // object colour
        vec4 material_colour = texture2D(texture,map);

        material_colour = gamma_transform(material_colour, 2.0);
        
        

        // sources and target directions 
        vec3 s = normalize(q.xyz - p.xyz);
        vec3 t = normalize(-p.xyz);

        // reflection vector in world coordinates
        vec3 r = (view_inv * vec4(reflect(-t,n),0.0)).xyz;

        // reflected background colour
        vec4 reflection_colour = textureCube(cubemap,vec3(-r.x,r.y,r.z));

        // blinn-phong lighting

        vec4 ambient = material_colour * light.ambient;
        vec4 diffuse = material_colour * max(dot(s,n),0.0) * light.diffuse;

        // halfway vector
        vec3 h = normalize(s + t);
        vec4 specular = pow(max(dot(h,n), 0.0), 4.0) * light.specular;
        // combined colour
        if(render_texture) {
            // B2 -- MODIFY
            
                gl_FragColor = vec4((0.5 * ambient + 
                                     0.5 * diffuse + 
                                     0.01 * specular + 
                                     0.1 * reflection_colour).rgb, 1.0);
//            gl_FragColor = vec4((0.5 * ambient + 
//                                 0.5 * diffuse + 
//                                 0.01 * specular + 
//                                 0.1 * reflection_colour).rgb, BlackToTransparent((0.5 * ambient + 
//                                 0.5 * diffuse + 
//                                 0.01 * specular + 
//                                 0.1 * reflection_colour).rgb));
//              gl_FragColor = vec4((
//                                vec4(1.0,1.0,1.0,1.0) - (
//                                 0.5 * ambient + 
//                                 0.5 * diffuse + 
//                                 0.01 * specular + 
//                                0.1 * reflection_colour)).rgb, 1.0);
//            if(!gl_FrontFacing) {
//                    // fragment faces away from camera
//                    discard;
//                }
            
        }
        else {
            // reflection only 
            gl_FragColor = reflection_colour;
        }

        if(make_grey){
            gl_FragColor = vec4(0.6,0.6,0.6,1.0);
        }
    

        
    }
    gl_FragColor.rgb *= vignette(gl_FragCoord);
}
