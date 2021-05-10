<?php
$conn = mysqli_connect("localhost","root","","customer_db");

//connection
if($conn === false){
    die("ERROR:couldnot connect to database.".mysqli_connect_error());
}

//fetching input
$fnamenewp = $_POST['fnamenew'];
$lnamenewe = $_POST['lnamenew'];
$id = $_POST['id'];

//insert query
$sql = "UPDATE client 
        SET first_name = '$fnamenewp' , last_name = '$lnamenewe' WHERE Id = $id ";

if(mysqli_query($conn,$sql)){
    echo "successfull operation";
}else{
    echo "Failed operation".mysqli_error($conn);
}

//close connection
mysqli_close($conn);
?>