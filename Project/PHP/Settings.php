<html lang="en">
<div id="title">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<?php include ("../HTML/show_formatting.html")?>
	<?php include ("header.php")?>
	<h2>Settings</h2>
	<?php include ("header 2.php")?>
</div>
<body>
	<div class="settings_layout">
		<div class="left_settings">
		<style>
			table {
				width: 100%;
			}
			table, th, td {
				border:1px solid black;
				text-align: center;
			}
			td {
				vertical-align: middle;
			}
		</style>
		<h4>Notifications</h4>
		<table>
  			<tr>
				<th></th>
				<th>Email</th>
				<th>Text</th>
				<th>App</th>
			</tr>
			<tr>
				<td>Liked your profile</td>
				<td class="checkbox"><input type="checkbox"></td>
				<td class="checkbox"><input type="checkbox"></td>
				<td class="checkbox"><input type="checkbox"></td>
			</tr>
			<tr>
				<td>A match</td>
				<td class="checkbox"><input type="checkbox"></td>
				<td class="checkbox"><input type="checkbox"></td>
				<td class="checkbox"><input type="checkbox"></td>
			</tr>
			<tr>
				<td>Super match</td>
				<td class="checkbox"><input type="checkbox"></td>
				<td class="checkbox"><input type="checkbox"></td>
				<td class="checkbox"><input type="checkbox"></td>
			</tr>
			<tr>
				<td>New message</td>
				<td class="checkbox"><input type="checkbox"></td>
				<td class="checkbox"><input type="checkbox"></td>
				<td class="checkbox"><input type="checkbox"></td>
			</tr>
		</table>
		<div class="delete">
			<button  class="delete_button" type="button" onclick="alert('Process of deleting account')">Delete Account</button>
		</div>
	</div>
	<div class="right_settings">
		<div class="right_settings_content">
			<form>
				<label for="colour_scheme">Select the type of colour scheme you would like:</label>
					<select id="colour_scheme" type="text" name="colour"/>
						<option value="Light">Light</option>
						<option value="Dark">Dark</option>
					</select>
				<br><br>			
			</form>
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
