<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";

$conn = mysqli_connect($dbhost,$dbuser,$dbpassword,"customer_db") or die("Unable to connect to host");

if ($conn === false){
    die("Error: couldnot connect.".mysqli_connect_error());
}

$sql = "CREATE TABLE client(
    Id INT NOT NULL PRIMARY KEY ,
    first_name TEXT NOT NULL,
    last_name TEXT NOT NULL,
    car TEXT NOT NULL,
    ugx INT NOT NULL,
    brief TEXT NOT NULL
    )";

if($conn->query($sql)=== TRUE){
    echo "operation successful";
}else{
    echo "failed operation";
    mysqli_error($conn);
}

mysqli_close($conn);

