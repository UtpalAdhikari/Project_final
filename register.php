<?php
	include "header.php";
	
	
?><br>
<div class="apply">
		<h3 align="center">Register Form</h3>
	    <form action="action_register.php" method="POST">
		
			<label>Name</label>
			<input type="text" name="name" placeholder=" Enter Your name">
			<label>Email</label>
			<input type="text" name="email" placeholder=" Enter Your email">
			<label>Password</label><br>
			<input type="password" style="width:100%; height:40px;" name="password" placeholder="Enter Your Password">
			<input type="submit" value="Register">
			
		  </form>
	</div>
	
<?php
	include "footer.php";
?>