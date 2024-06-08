<?php
	
	include "dbconnect.php";
	
	
$id = $_POST['id'];
$name=$_POST['name'];
$roll=$_POST['roll'];
$depmartment=$_POST['department'];
$session=$_POST['session'];
$year=$_POST['year'];
$phone=$_POST['phone'];
$hall=$_POST['hall'];

	
	
$sql = "UPDATE apply SET name='$name', roll='$roll', department='$department', session='$session', year='$year', phone='$phone', hall='$hall' WHERE id=$id";
$result=$conn->query($sql);

if ($result) {
    header("Location:applicant_list.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();


exit();
?>
