<?php 
	include "header.php";
	include "dbconnect.php";
	
$sql = "SELECT * FROM apply";
$result = $conn->query($sql);


$conn->close();
?>


<html>
	<head>
		<title>data</title>
		<link rel="stylesheet" href="">
		<style>
			span a{
					text-decoration: none;
					text-align: center;
					background-color: #04AA6D;
					color: white;
					padding: 8px 12px;
					border-radius: 5px;
				}
			.align_button{
					margin-left: 45%;
				}
		</style>
	</head>
	<body>
		<h1 align="center">Applicant List</h1>
		<table>
			<tr>
				<th>Name</th>
				<th>Roll</th>
				<th>Department</th>
				<th>Session</th>
				<th> Year </th>
				<th>Phone</th>
				<th>Hall</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			
		<?php 
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc())
			{ 
				$id=$row["id"];
				echo "<tr>";
					echo "<td>". $row["name"]."</td>";
					echo "<td>". $row["roll"]."</td>";
					echo "<td>". $row["department"]."</td>";
					echo "<td>". $row["session"]."</td>";
					echo "<td>". $row["year"]."</td>";
					echo "<td>". $row["phone"]."</td>";
					echo "<td>". $row["hall"]."</td>";
					echo "<td>"."<a href='update_list.php?editid=$id'>Edit</a>"."</td>";
					echo "<td>"."<a href='delete.php?delid=$id'>Delete</a>"."</td>";
				echo "</tr>";
			}
		}
		else echo "0 results";
		?>
			
		</table><br>
	</body>
</html>

<?php
	include "footer.php";
?>