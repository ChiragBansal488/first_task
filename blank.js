function blank(usr)
{
    
 if (usr.value == "") {
    usr.style.background = 'Yellow';
     error = "You didn't enter a username.\n";
     alert(error);
      return false;

}
else
    length(usr);
}