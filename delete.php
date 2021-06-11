<?php
$conn = mysqli_connect("localhost","root","","customer_db");

//connection
if($conn === false){
    die("ERROR:couldnot connect to database.".mysqli_connect_error());
}

//fetching input
$id = $_POST['id'];

//insert query
$sql = "DELETE FROM client 
        WHERE Id = $id ";
if(mysqli_query($conn,$sql)){
    echo "successful operation";
}else{
    echo "Failed operation".mysqli_error($conn);
}

//close connection
mysqli_close($conn);
?>