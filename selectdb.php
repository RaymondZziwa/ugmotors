<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";

$conn = mysqli_connect($dbhost,$dbuser,$dbpassword);

$mysqli->select_db("originalcarprices");

if ($result = $mysqli->query("SELECT DATABASE()")) {
    echo "success";
  } else {
    echo "failed";
  }
?>