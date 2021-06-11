<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";

$conn = mysqli_connect($dbhost,$dbuser,$dbpassword);

if(! $conn ) {
    die('Could not connect: ' . mysqli_error());
 }
 
 echo 'Connected successfully';
 
//create database
 $sql = 'CREATE DATABASE originalcarprices';
 
 if($conn ->query($sql)===TRUE ) {
    echo "database created successfully";
 }else{
     echo "error creating database". $conn->error;
 }
 
 $conn -> close();
 ?>