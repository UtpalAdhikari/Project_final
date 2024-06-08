<?php
	
	include "dbconnect.php";
	
// else{
//     echo "Connected Successfully";
// }
$name=$_POST['name'];
$roll=$_POST['roll'];
$department=$_POST['department'];
$session=$_POST['session'];
$year=$_POST['year'];
$phone=$_POST['phone'];
$hall=$_POST['hall'];



$sq="INSERT INTO apply( id, name, roll, department, session, year, phone, hall ) 
VALUES ( NULL, '$name', '$roll', '$department', '$session', '$year', '$phone', '$hall')";

$result=$conn->query($sq);

if($result){
    header('location:register_success.php');
}
else{
    echo "Data not inserted";
}


$conn->close();
?>