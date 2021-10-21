<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<script>
    // Validate Blank
    function blank(Username)
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

// Validate Length
function  length (Username)
if (Username.length < 6 || Username.length>15) {
                error = 1;
                alert("NAME MUST BE GREATER THAN 6 AND SMALLER THAN 15");
                return false;
            }

            else {

(error == 0) 
   document.getElementById("file").submit();
   return false;
   

}

//Validate Numbers
function  length (Username)
if(Username.search(/[0-9]/)==-1){
                error=1;
                alert("Please enter one numeric value");
                return false;
            }
            
            else {

(error == 0) 
   document.getElementById("file").submit();
   return false;
   

}

            // Validate Capital Letters
            if(Username.search(/[A-Z]/)==-1){
                error=1;
                alert("Please enter one Capital Letter");
                return false;
            }
            
            else {

(error == 0) 
   document.getElementById("file").submit();
   return false;
   

}
 // Validate capital letters
if(Username.search(/[a-z]/)==-1){
                error=1;
                alert("Please enter one small Letter");
                return false;
            }
            else {

(error == 0) 
   document.getElementById("file").submit();
   return false;
   

}
 if(Username.search(/\W/)==-1){
                error=1;
                alert("Please enter one SPECIAL Character");
                return false;
            }
         
</body>
</html>
