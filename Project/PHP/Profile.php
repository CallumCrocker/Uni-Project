<html lang="en">
<div id="title">
	<?php include ("../HTML/show_formatting.html")?>
	<?php include ("header.php")?>
	<h2>Edit Profile</h2>
	<?php include ("header 2.php")?>
</div>
<body>
	<div class="top_profile">
		<div class="top_left_profile">
			<form>
				<label for="display_name">Enter a display name:</label>
				<input id="display_name" type="text" name="display_name"/>

				<label for="date">Enter your date of birth:</label>
				<input id="date" type="date" name="date"/>
				<br>
				<label for="gender">Enter your gender:</label><!---Would be a drop down menu with all available options-->
				<input id="gender" type="text" name="gender"/> 

				<label for="password">Enter a password:</label>
				<input id="password" type="password" name="password"/><!---Would build checks to see if it was strong enough-->
			</form>
		</div>
		<div class="top_right_profile">
			<div class="social_button">
				<button type="button" onclick="alert('This would open a popup to connect to social media')">Connect to social media</button>
			</div>
		</div>
	</div>
<br><br>
	<div class="bottom_profile">
		<div class="bottom_left_profile">
			<label for="file">Upload a profile photo or video:</label>
			<input id="file" type="file" name="media"/> 
			<div class="photo_box">Photo/video display</div>
			<div class="photo_box">Photo/video display</div>
			<div class="photo_box">Photo/video display</div>
			<div class="photo_box">Photo/video display</div>
			<div class="photo_box">Photo/video display</div>
			<div class="photo_box">Photo/video display</div>
			<div class="photo_box">Photo/video display</div>
			<div class="photo_box">Photo/video display</div>
			<div class="photo_box">Photo/video display</div>
			<div class="photo_box">Photo/video display</div>
		</div>
		<div class="bottom_right_profile">
			<div class="bottom_right_profile_content">
				<form>
					<label for="relationship">Select the type of relationship:</label>
						<select id="relationship" type="text" name="relationship"/>
							<option value="Long-term relationship">Long-term relationship</option>
							<option value="Short-term relationship">Short-term relationship</option>
						</select>
					<br><br>
					<label for="description_type">Select the type of profile:</label>
						<select id="display_name" type="text" name="display_name"/>
							<option value="description">Description</option>
							<option value="questionnaire">Questionnaire</option>
						</select>
				</form>
				<div class="Validate">
					<button type="button" onclick="alert('Would lead to validating account')">Validate account</button>
				</div>
				<div class="Questionnaire">
					<button type="button" onclick="alert('Would lead to the questionnaire')">Questionnaire</button>
				</div>
				<div class="write_description">
					<button type="button" onclick="alert('Would lead to writing description')">Description</button>
				</div>
			<br><br><br><br>
				<div class="popup" onclick="myFunction()"><button>Save profile</button>
					<span class="popuptext" id="myPopup">Profile saved</span>
				</div>
			</div>
		</div>
	</div>
</div>
<footer id="footer">
	<?php include ("footer.php")?>
</footer>
<script>
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>
</body>
</html>
