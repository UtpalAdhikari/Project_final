<?php
	include "header.php";
	
	
?><br>
<div class="apply">
		<h3 align="center">Application Form</h3>
	    <form action="action_application.php" method="POST">
		
			<label>Name</label>
			<input type="text" name="name" placeholder=" Enter Your Name">
			<label>Roll</label>
			<input type="text" name="roll" placeholder=" Enter Your Roll">
			<label>Department</label>
			<input type="text" name="department" placeholder=" Enter Your Department">
			<label>Session</label>
			<input type="text" name="session" placeholder=" Enter Your Session">
			<label>Year</label>
			<input type="text" name="year" placeholder=" Enter Your Year">
			<label>Phone</label>
			<input type="text" name="phone" placeholder=" Enter Your Number">
			
			<label>Select Hall</label><br><br>
			<input type="radio" name="hall" value="Bangabandu Hall" > Bangabandu Hall
			<input type="radio" name="hall" value=" Shere Bangla Hall" >  Shere Bangla Hall<br> <br>
			
			
			<input type="submit" value="Apply">
			
		  </form>
	</div>
	
<?php
	include "footer.php";
?>