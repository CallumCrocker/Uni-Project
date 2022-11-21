<html lang="en">
<div id="title">
	<?php include ("header.php")?>
	<?php include ("../HTML/show_formatting.html")?>
	<h2>Log into your account</h2>
</div>
	<form action='search.php' method='POST' >
		<label for="email">Enter email address :</label>
			<input id="email" type="email" name="email" required />
			<span id="check_email_exists"></span><!---Would build checks to see if email address already exists-->		
		<br><br>
		<label for="password">Enter a password:</label>
			<input id="password" type="password" name="password" required /> </span><!---Would build checks to see if it was strong enough-->
		<br><br>
		<input id="sign_up_data" type="submit" />
	</form>
	<form  method="POST" action="../Homepage.php">
		<div class="homepage">
			<input id="submit_box" class="btn btn-warning" type="submit" value="Homepage"/>
		</div>
	</form>
<footer id="footer">
	<?php include ("footer.php")?>
</footer>




