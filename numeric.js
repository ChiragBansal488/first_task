function numeric(usr){

    if(!/^[0-9]+$/.test(usr.value)) {
 
        error = "The username one numeric value.\n";
       alert(error);
      return false;
        
}
else {
     illegaletter(usr);

}
}