<!DOCTYPE html>
<html>
<div id="title">
	<link rel="stylesheet" type="text/css" media="screen" href="CSS/formatting.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
			<?php include ("PHP/header.php")?>
		</div>	

	<body>
<div class="btn-group">
		<form  method="POST" action="PHP/signup.php">
			<div class="signup">
			<input id="submit_box" type="submit" value="Create an account"/>
			</div>
			<div class="signup_hide">Create an account</div>
		</form>
		<form  method="POST" action="PHP/login.php">
			<div class="login">
			<input id="submit_box" type="submit" value="Log in"/>
			</div>
			<div class="login_hide">Log into your account</div>
		</form>
</div>
	</body>
	<footer id="footer">
		<?php include ("PHP/footer.php")?>
	</footer>
</html>