<?php
$conn = mysqli_connect("localhost","root","","originalcarprices");

//connection
if($conn === false){
    die("ERROR:couldnot connect to database.".mysqli_connect_error());
}

//fetching input
$carbrand = $_POST['carbrand'];
$price = $_POST['price'];


//insert query
$sql = "INSERT INTO carprices (car_brand,price) VALUES ('$carbrand',$price)";

if(mysqli_query($conn,$sql)){
    echo "successfull operation";
}else{
    echo "Failed operation".mysqli_error($conn);
}

//close connection
mysqli_close($conn);
?>