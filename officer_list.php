<?php
	include "header.php";
	include "dbconnect.php";
	
	$sql="SELECT * FROM officer";
	$result=$conn->query($sql);
	
?>

<h1 align="center">Officer List</h1>
<table>
	<tr>
		<th>Name of Hall</th>
		<th>Officer Name</th>
		<th>Designation</th>
		<th>Department</th>

	</tr>
	<?php
		while($row=$result->fetch_assoc()){
			
			echo "</tr>"; 
			echo "<td>". $row["name_of_hall"] ."</td>";	
			echo "<td>". $row["name"] ."</td>";	
			echo "<td>". $row["hall_designation"]."</td>";	
			echo "<td>". $row["department"]."</td>";	
			echo "</tr>"; 
		}
	
	?>
			
<table>
		
<?php
	include "footer.php";
?>