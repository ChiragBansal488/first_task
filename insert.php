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


if($_SERVER["REQUEST_METHOD"] == "POST"){
   // include 'index.php';
    $username = $_POST["username"];

    
    $exists=false;
    
     $sql = "INSERT INTO `username` (`Name`) VALUES ('$username')";
        $result =  mysqli_query($conn,$sql);
        if ($result){
            $showAlert = true;
            header("location: welcome.php");
        }
   
}


?>










 <!-- if (isset($_POST['email_check'])) {
    $email = $_POST['email'];
    $sql = "SELECT * FROM users WHERE email='$email'";
    $results = mysqli_query($user, $sql);
    if (mysqli_num_rows($results) > 0) {
       echo "taken";	
   echo 'not_taken';
    }
      exit();
   } 

    mysqli_select_db("user") ;
   $username = $_REQUEST['username'];
  $query=mysqli_query("SELECT * from user where name='$username'");
   $row=mysqli_num_rows($query);
   if(row==1){
      echo "true";
} else {
      echo "false";
  } -->