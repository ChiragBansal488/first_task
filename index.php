
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


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="javascriptcode.js"></script>
    <script src="generalclass.js"></script>
    <link rel="stylesheet" href="style.css">

  

    </head>

<!--body part-->

<body>
    <p id="demo"></p>

  
    <div id="container">
        <div class="register">
            <h2>Login Page </h2>
        </div>

        

        <!--BUTTON SECTION -->

        <div class="login">
            <table cellspacing="2" align="center" id ="console" >
                <tr>
                    <td id="comment">Enter User Name :</td>

                    <form action="insert.php" method="POST" id="file">
                        <td><input type="text"  name="username"
                                id="usrname" /></td>
                                
                </tr>

                <tr>
                   
                    <td>


                        </form>
                        <input type="button" value="Submit" onclick="test()" class="btn" />
               
             
                        <!-- <div id="console"> -->
                           
                        
                    </td>
                </tr>
            </table>
        </div>
      

</body>
<!--body part ends here-->
</html>