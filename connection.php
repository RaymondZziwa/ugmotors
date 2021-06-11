<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";

$conn = mysqli_connect($dbhost,$dbuser,$dbpassword) or die("Unable to connect to host");
$sql = mysqli_select_db ("customer_db",$conn) or die ("unable to connect to database");
