<?php
	
	include "dbconnect.php";
	
// else{
//     echo "Connected Successfully";
// }
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];



$sq="INSERT INTO register( id, name, email, password) 
VALUES ( NULL, '$name', '$email', '$password')";

$result=$conn->query($sq);

if($result){
    header('location:register_success.php');
}
else{
    echo "Data not inserted";
}


$conn->close();
?>