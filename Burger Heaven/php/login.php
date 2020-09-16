<?php
session_start();
if (isset($_POST['submit'])) {

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname,"3308");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$un = $_POST["uname"];
$sql=mysqli_query($conn,"SELECT * FROM log_in WHERE username = '".$un."'");
if(mysqli_num_rows($sql)>=1)
{
    $pass = $_POST["password"];
    $sql=mysqli_query($conn,"SELECT * FROM log_in WHERE password = '".$pass."'");
    if(mysqli_num_rows($sql)>=1){
        $_SESSION["User"] = $un;
        echo"<script> location.href = '//localhost/a/index.php'; </script>";
    }
    else{
        $error = "Wrong Password"; 
        }  
    }
else{
    $error = "Sorry! username doesn't exist";
}
$conn->close();
}
?>