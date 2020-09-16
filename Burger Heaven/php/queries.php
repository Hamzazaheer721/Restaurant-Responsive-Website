<?php 
    $queryName = $_POST['queryName'];
    $queryEmail = $_POST['queryEmail'];
    $query = $_POST['query'];

    $conn = new mysqli('localhost', 'root', '', 'login', 3308);
    $insertQuery = mysqli_query($conn, "INSERT INTO query(fname, email, query) 
    VALUES ('{$queryName}', '{$queryEmail}', '{$query}')");
    echo 'Query submitted successfully!';
?>