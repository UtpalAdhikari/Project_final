<?php
	
	include "dbconnect.php";

$id = $_GET['editid'];
$sql = "SELECT * FROM apply WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();
?>

<html>
    <head>
        <title>Update Student</title>
        <style>
            div { background-color: #f2f2f2; width: 30%; margin: auto; border-radius: 7px; padding: 16px; }
            input[type=text], input[type=email], input[type=date], input[type=number] {
                width: 100%; padding: 14px 8px; margin: 5px; border-radius: 5px;
            }
            input[type=submit] {
                width: 100%; padding: 14px 8px; margin: 5px; border-radius: 5px;
                background-color: #2ecc71; color: #ffffff; font-size: 20px;
            }
            input[type=submit]:hover {
                background-color: #27ae60; color: #ffffff;
            }
        </style>
    </head>
    <body>
        <div>
            <h1>Update Student</h1>
            <form action="action_update_list.php" method="POST">
			
			<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $row['name']; ?>">
			<label>Roll</label>
			<input type="text" name="roll" value="<?php echo $row['roll']; ?>">
			<label>Department</label>
			<input type="text" name="department" value="<?php echo $row['department']; ?>">
			<label>Session</label>
			<input type="text" name="session" value="<?php echo $row['session']; ?>">
			<label>Year</label>
			<input type="text" name="year" value="<?php echo $row['year']; ?>">
			<label>Phone</label>
			<input type="text" name="phone" value="<?php echo $row['phone']; ?>">
			
			<label>Select Hall</label><br><br>
			<input type="radio" name="hall" value="<?php echo $row['hall']; ?>"> Bangabandu Hall
			<input type="radio" name="hall" value="<?php echo $row['hall']; ?>">Shere Bangla Hall <br> <br>
			
			
			<input type="submit" value="Update">
			
			
             
                
            </form>
        </div>
    </body>
</html>

<?php
	include "footer.php";
?>