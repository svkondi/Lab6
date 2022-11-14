
function ValidationEvent() {

    var name = document.getElementById("username").value;
    var email = document.getElementById("password").value;


    var emailReg = /^([w-.]+@([w-]+.)+[w-]{2,4})?$/;


    if (email.match!=(emailReg)) {
        alert("Invalid Gmail Format");
        return false;
    } 
    }
