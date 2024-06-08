<?php
	include "header.php";
	include "dbconnect.php";
	
	$sql="SELECT * FROM detail";
	$result=$conn->query($sql);
	
?>
	<div class="announce">
		<h2> Announcement for application</h2>
		<p>=> Only for 2nd,3rd and 4th year students, Application start:01/06/2024
		and deadline:10/06/2024,<br>University of Barishal.</p><br>
		
		<p>Viva date:12/06/2024</p><br><br>
		
		<h2> Details:</h2>
		
		<h3>Bangabandhu Hall & Shere Bangla Hall</h3>
		<ul>
		<?php
			while($row=$result->fetch_assoc()){
				echo "<li>".$row["description"]."</li>";
			}
		?>
		</ul>

	</div>
		
<?php
	include "footer.php";
?>
