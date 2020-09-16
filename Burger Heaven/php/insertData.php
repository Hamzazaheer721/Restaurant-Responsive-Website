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

//  $sql = "INSERT INTO log_in(firstname,lastname,username,phonenumber,email,password) VALUES ('Hamza','Zaheer','Hamza854',03324432233,'xapper8@gmail.com','Hamza!23')";

// if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//   }
// $un = "Hamza854";
$un = $_POST["uname"];
$sql=mysqli_query($conn,"SELECT * FROM log_in WHERE username = '".$un."'");
if(mysqli_num_rows($sql)>=1)
{
  $error = "Sorry, Username Already taken";
    // echo"Yes name already exists";
    // $new = "Hamza12#";
    // $q = mysqli_query($conn, "UPDATE log_in set username = '".$new."' ");
    // if($q){
    //     echo" okay";
    // }
}
else{
    $num = $_POST["num"];
    $sqlnum=mysqli_query($conn,"SELECT * FROM log_in WHERE phonenumber = '".$num."'");
    if(mysqli_num_rows($sqlnum)>=1){
      $error = "Sorry, This Phone Number is already registered";
    }
    else{
      $sql_insert = "INSERT INTO log_in(firstname,lastname,username,phonenumber,email,password) VALUES ('".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["uname"]."','".$_POST["num"]."','".$_POST["email"]."','".$_POST["password"]."')";
      if (mysqli_query($conn, $sql_insert)) {
        $error = "Account has been made";
      } 
      else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }
  }
  $conn->close();
}
?>