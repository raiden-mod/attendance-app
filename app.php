<?php
include_once "./database.php";
// this will fetch all the list of guests in the database

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./style.css">
	<link rel="stylesheet" href="./fontawesome/css/all.css">
	<title>Class Attendance</title>

</head>

<body>
	<?php
	?>
	<div class="about-block">
		<h3>Class Attendance</h3>
		<p>Add Student.</p>
		<form id="form" method="POST">
		<div class="rptf" align='center' style="margin-bottom: 30px;">
			<div style='display:flex;margin-top:20px' align='center'>
				<div class="input-field">
					<input type="text" id="name" name="name" class='input' placeholder="" required>
					<i class="icon fa "></i>
					<label class="input-label" for="name">Student Name</label>
				</div>
				<button class="submit-btn" type="submit">Submit</button>
			</div>
		</div>
		</form>
		<div class="list-guests">
			<p>List of Student.</p>
			<div class="ajax-resault">
				<!-- ajax result -->
			</div>
		</div>
	</div>
</body>
<script src="jquery-3.5.1.js"></script>
<script src="./app.js"></script>

</html>