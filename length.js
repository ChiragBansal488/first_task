function length(usr)
{
    if (usr.value.length!=10) {
      
        error = "length must be 10 digit.\n";
       alert(error);
         return false;
   
     } 
     else{
        numeric(usr);

     }
}