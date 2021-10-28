function validate(a) {
    if (blank(a)) return;
    
    if (illegalCharacter(a)) return;

    if (length(a)) return;
 
}

function blank(usr) {
   // <div id="validations"></div>
    try {
        if (usr.value == "") {
            error = "You didn't enter a phone number .\n";
            alert(error);
            return true;
        } else {
            return false;
        }
    } catch (error) {
       // var Username = document.getElementById("validations").innerHTML=error; //GET ID WITH VALUE
        console.log(error);
    }
}

function illegalCharacter(usr){
    var illegalCharacter = /\W/;
    try{
        if (illegalCharacter.test(usr.value)) {
             error = 1;
            
             error = "The username is not contain special characters.\n";
             alert(error);
             return true;
         }
         else{
            return false;
           
         }
     }
     catch(error)
     {
       // var Username = document.getElementById("validations").innerHTML=error.msg; //GET ID WITH VALUE
         console.log(error);
     }
    
    }
    

function length(usr) {
    try{
    if (usr.value.length!=10) {
        error = "length must be 10 digit.\n";
        alert(error);
        return true;
    } else {
        
        alert(" your number is registered" );
        return false;
    }
} catch (error) {
    console.log(error);
}
}

