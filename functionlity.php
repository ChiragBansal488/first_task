<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "user";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

 <script>



   function Blank(Username) {

if (Username == '') {
                error = 1;
                alert("Please Enter Username !!");
                return false;

            }
            else {

 (error == 0) 
    document.getElementById("file").submit();
    return false;
    

}
function Length(Username) {
    if (Username.length < 6 || Username.length>15) {
                error = 1;
                alert("NAME MUST BE GREATER THAN 6 AND SMALLER THAN 15");
                return false;
            }
            else {

(error == 0) {
   document.getElementById("file").submit();
   return false;
   

}
}
function numeric((Username)   {


 if (Username.search(/[0-9]/)==-1){
                error=1;
                alert("Please enter one numeric value");
                return false;
            }
            else {
(error == 0) {
   document.getElementById("file").submit();
   return false;
   
}
}
function Capital((Username)  
if(Username.search(/[A-Z]/)==-1){
                error=1;
                alert("Please enter one Capital Letter");
                return false;
            }
            (error == 0) {
   document.getElementById("file").submit();
   return false;
   }
}
   function small((Username)
   if(Username.search(/[a-z]/)==-1){
                error=1;
                alert("Please enter one small Letter");
                return false;
            }
            (error == 0) {
   document.getElementById("file").submit();
   return false;
   }
}
   function special((Username)
   if(Username.search(/\W/)==-1){
                error=1;
                alert("Please enter one SPECIAL Letter");
                return false;
            }
                    (error == 0) {
   document.getElementById("file").submit();
   return false;
}
                else 
                 alert("u rwrong");


            }


        }

     
   }
}
}
</script>