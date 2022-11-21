<html lang="en">
<div id="title">
	<?php include ("header.php")?>
	<?php include ("../HTML/show_formatting.html")?>
	<h2>Create an account</h2>
</div>
<div class="wrap_signup">
	<form action='search.php' method='POST' >
		<div class="account_form">
			<label for="email">Enter email address :</label>
				<input id="email" type="email" name="email" required />
				<span id="check_email_exists"></span><!---Would build checks to see if email address already exists-->		
				<br><br>
			<label for="password">Enter a password:</label>
				<input id="password" type="password" name="password" required /> </span><!---Would build checks to see if it was strong enough-->
				<br><br>
			<label for="date">Enter your date of birth:</label>
				<input id="date" type="date" name="date" required />
				<br><br>
			<label for="gender">Enter your gender:</label><!---Would be a drop down menu with all available options-->
				<input id="gender" type="text" name="gender" required /> 
				<br><br>
			<label for="file">Upload a profile photo or video:</label>
				<input id="file" type="file" name="media" /> 
				<br><br>
			<label for="display_name">Enter a display name:</label>
				<input id="display_name" type="text" name="display_name" required />
				<br><br>
				<input id="sign_up_data" type="submit" value="Create Account" />
	</form>
	<br>
	</div>
	</form>
<div class="instructions">
	<h4>Instructions</h4>
	<p>Please complete the form on the left hand side. Click the 'Create Account' button when complete. This will take you directly to your profile where you can fully set up your profile ready for dating</p>
	<p>Once you have created your profile:
	<ul>
		<li>Search - Find your interest using a filter, you can like, dislike and super like (one a day) this sends an extra notification that you super like them</li>
		<li>Chat - message and call with your matches</li>
		<li>Profile - create your profile and say what you like and what you are looking for</li>
		<li>Settings - Manage notifications, delete your account and more</li>
	</ul>
</div>
</div>
<div class="home_button">
	<form  method="POST" action="../Homepage.php">
		<div class="homepage">
			<input id="submit_box" class="btn btn-warning" type="submit" value="Homepage"/>
		</div>
</div>
<footer id="footer">
	<?php include ("footer.php")?>
</footer>




