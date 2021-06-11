<?php
$conn = mysqli_connect("localhost","root","","customer_db");

//connection
if($conn === false){
    die("ERROR:couldnot connect to database.".mysqli_connect_error());
}

//fetching input
$id = $_POST['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$car = $_POST['car'];
$amount = $_POST['ugx'];
$brief = $_POST['brief'];

//insert query
$sql = "INSERT INTO client (Id,first_name,last_name,car,ugx,brief) VALUES ($id,'$first_name','$last_name','$car',$amount,'$brief')";

if(mysqli_query($conn,$sql)){
    echo "successfull operation";
}else{
    echo "Failed operation".mysqli_error($conn);
}

//close connection
mysqli_close($conn);
?>