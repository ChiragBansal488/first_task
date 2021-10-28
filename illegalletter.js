function illegalCharacter(usr){
    var illegalCharacter = /\W/;
    try{
        if (illegalCharacter.test(usr.value)) {
             error = 1;
            
             error = "The username contains illegal characters.\n";
             alert(error);
             return true;
         }
         else{
            alert(" your number is registered" );
            return false;
          
         }
     }
     catch(error)
     {
         console.log(error);
     }
    
    }
    