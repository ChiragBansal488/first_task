function illegalCharacter(usr){
   if (usr.search(/\W/) == -1) {
        error = 1;
        alert("Please enter one SPECIAL Letter");
        return false;
    }
    else{
        alert(" your number is registered" );
    }
}