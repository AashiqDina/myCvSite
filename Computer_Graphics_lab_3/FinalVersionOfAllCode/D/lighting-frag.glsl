// ECS610U -- Miles Hansard 2020

precision mediump float;

// light data
uniform struct {
    vec4 position, ambient, diffuse, specular;  
} light;

// material data
uniform struct {
    vec4 ambient, diffuse, specular;
    float shininess;
} material;

// clipping plane depths
uniform float near, far;

// normal, source and taget -- interpolated across all triangles
varying vec3 m, s, t;

vec3 fragment_rgb;

void main()
{   
    // renormalize interpolated normal
    vec3 n = normalize(m);

    // reflection vector
    vec3 r = -normalize(reflect(s,n));

    // phong shading components

    vec4 ambient = material.ambient * 
                   light.ambient;

    vec4 diffuse = material.diffuse * 
                   max(dot(s,n),0.0) * 
                   light.diffuse;

    // B1 -- IMPLEMENT SPECULAR TERM

     vec4 specular = material.specular *
                    pow(max(dot(r,t),0.0), material.shininess) *
                    light.specular;     

    // B3 -- IMPLEMENT BLINN SPECULAR TERM

    fragment_rgb = material.ambient.rgb + material.diffuse.rgb;

    if (dot(s,n) > 0.9){
        fragment_rgb += material.specular.rgb;
    }
    else{ 
        if (dot(s,n) > 0.75){
            fragment_rgb += 0.2 * material.specular.rgb;
        }
    }
    if (dot(t,n) < 0.4){
        fragment_rgb = 0.3 * material.diffuse.rgb;
    }

    gl_FragColor = vec4(fragment_rgb, 1.0);

    // gl_FragColor = vec4((ambient + diffuse + specular).rgb, 1.0);
    
}

