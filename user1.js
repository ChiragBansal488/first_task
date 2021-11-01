
    function uservalidation(usr) {
   var error = "";
      va//r illegalChars = /\W/; // allow letters, numbers, and underscores

 if (usr.value == "") {
  usr.style.background = 'Yellow';
        error = "You didn't enter a username.\n";
        alert(error);
         return false;
   
   } 
   else if (( usr.value.length < 5) || ( usr.value.length > 15)) {
    usr.style.background = 'Yellow';
        error = "The username is the wrong length.\n";
       alert(error);
         return false;
   
     } 
     else if (illegalChars.test(usr.value)) {
      usr.style.background = 'Yellow';
   error = "The username contains illegal characters.\n";
  alert(error);
 return false;
   
    } 
    else {
      usr.style.background = 'White';
      }
      
    }
