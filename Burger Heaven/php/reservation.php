<?php 
    $fname = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $guests = $_POST['guests'];

    $conn = new mysqli('localhost', 'root', '', 'login', 3308);
    $checkQuery = mysqli_query($conn, "SELECT * FROM reservations WHERE phonenumber = '".$phone."'");
    $resultMsg = "";
    if (mysqli_num_rows($checkQuery) >= 1) {
        $resultMsg .= "Table already reserved on this phone number";
    }
    else {
        $insertQuery = mysqli_query($conn, "INSERT INTO reservations(fname, email, phonenumber, reserveDate, reserveTime, reserveGuests) 
        VALUES ('{$fname}', '{$email}', '{$phone}', '{$date}', '{$time}', '{$guests}')");
        $resultMsg .= "Table reserved successfully!";
    }
    echo $resultMsg;
?>