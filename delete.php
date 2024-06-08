<?php
$id = $_GET['delid'];

include "dbconnect.php";

$sql = "DELETE FROM apply WHERE id=$id";
$result=$conn->query($sql);
if ($result) {
    header("Location:applicant_list.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();


exit();
?>
