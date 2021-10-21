

<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = "user";
// Create connection

$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


mysql_select_db('user');

if(isset($_POST['username']))
{
 $name=$_POST['username'];

 $checkdata=" SELECT name FROM user WHERE name='$Name' ";

 $query=mysqli_query($checkdata);

 if(mysqli_num_rows($query)>0)
 {
  echo "User Name Already Exist";
 }
 else
 {
  echo "OK";
 }
 exit();
}

