<!--Database Connection>
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
// echo "Connected successfully";
include 'insert.php';
?>

<--  HTML CODE -->

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
function  userlength() {
    try {
      username();
    } catch (error) {
        document.getElementById('console').innerHTML =
            "<h3 style='color:red'> Error: </h3>" + error.message;
    }
}

// Global variable.
function username() {
    let username = document.getElementById("usrname").value;
   
       
    if (Username.length < 6 || Username.length > 15) 
 {   error = 1;
    alert("NAME MUST BE GREATER THAN 6 AND SMALLER THAN 15");
    throw  new Error(" Username must be between 6 and 15 ");
       }
    

    else
    {
        userlength() 
    }

}
 </script>
</body>
</html>