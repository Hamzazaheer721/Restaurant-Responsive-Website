<?php

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
    $old = $_POST["oldpassword"];
    $sql_old=mysqli_query($conn,"SELECT * FROM log_in WHERE username = '".$un."' and password = '".$old."'");
    if(mysqli_num_rows($sql_old)>=1){
        $new = $_POST["newpassword"];
        $q = mysqli_query($conn, "UPDATE log_in set password = '".$new."' WHERE username = '".$un."' ");
        if($q){
            $error = "Password has been changed";
        }
    }
    else{
        $error = "Incorrect Password";
    }
}
else{
    $error = "Sorry, Username doesn't exist";
  }
  $conn->close();
}
?>