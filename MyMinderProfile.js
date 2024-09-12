
function Check()
{
        if(document.getElementById("OneJob").checked) {
            document.getElementById('OneJobHidden').disabled = true;
        }
        if(document.getElementById("TwoJob").checked) {
            document.getElementById('TwoJobHidden').disabled = true;
        }
        if(document.getElementById("ThreeJob").checked) {
            document.getElementById('ThreeJobHidden').disabled = true;
        }
}