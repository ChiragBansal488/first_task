function length(usr)
{
    if ((usr.value.length < 5) || (usr.value.length > 15)) {
      
        error = "The username is the wrong length.\n";
       alert(error);
         return false;
   
     } 
     else{
         numeric(usr);
     }
}