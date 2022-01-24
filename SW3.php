<html>
<head>
	<title>REGISTRATION FORM</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script type="text/javascript" src="jquery.js">
		//INSERT SCRIPT
	</script>

	<style>
	body {
		padding: 15px;
		width: 70%;
		height: 80%;
		margin: 0% 15% 0% 15%;
		background-color: gray;
		font-family: Lato;
	}

	div { padding: 7px 0px 7px 20px; }

	.white-bg { background-color: white; }

	h4 {
		font-size: 22px;
		white-space: pre-wrap;
	}

	h5 {
		font-size: 18px;
		white-space: pre-wrap;
	}

	hr { height: 5px; }

	#header
	{
		background: #98AFC7;
		padding: 20px;
		font-weight: 900;
		font-size: 30px;
	}

	#header2
	{
		background: #98AFC7;
		padding: 10px;
		font-weight: 600;
		font-size: 22px;
	}

	.btn-design
	{
		border: 2px solid #98AFC1;
		background: #98AFC7;
		text-transform: uppercase;
		padding: 5px 5px;
		color: white;
		font-weight: 600px;
		border-radius: 4px;
	}
	</style>
</head>

<body>
	<div class="container-fluid white-bg">

	<hr color="#98AFC7">

		<form id="Upload" action="#" method="POST">
	<center> <div id="header">A. PERSONAL INFORMATION</div> </center>

			<div class="row">
				<div class="col-md-1"><b>First Name:</b></div>
				<div class="col-md-3"> <input type="text" name="firstName" required> </div>
				<div class="col-md-1"><b>Middle Name:</b></div>
				<div class="col-md-3"> <input type="text" name="middleName"> </div>
				<div class="col-md-1"><b>Last Name:</b></div>
				<div class="col-md-2"> <input type="text" name="lastName" required> </div>
			</div>

			<div class="row">
				<div class="col-md-2"><h5><b>Birthday:</h5></b></div>
				<div class="col-md-4"> <input type="date" name="birthday" required> </div>
				<div class="col-md-2"><h5><b>Contact No.:</h5></b></div>
				<div class="col-md-4"> <input type="tel" name="cpNumber" maxlength="11" required> </div>
			</div>

			<div class="row">
				<div class="col-md-2"><h5><b>Home Address:</h5></b></div>
				<div class="col-md-4"><br><input type="text" name="homeAddress" required></div>
				<div class="col-md-2"><h5><b>Email Address:</h5></b></div>
				<div class="col-md-4"><br><input type="email" name="emailAddress" required></div>
			</div>

		<center> <div id="header">B. SECONDARY EDUCATION</div> </center>

			<div class="row">
				<div class="col-md-2">
					<b>School Location:</b>
				</div>
				<div class="col-md-4">
					<input type="text" name="schoolLocation">
				</div>
				<div class="col-md-2">
					<b>High School:</b>
				</div>
				<div class="col-md-2">
					<input type="text" name="school" required>
				</div>
			</div>

			<div class="row">
				<div class="col-md-2">
			<b>Years Attended:</b>
				</div>
				<div class="col-md-1">
					<select list="year_list" name="year_start" >
					<option value="2017" selected> 2017 </option>
						<datalist id="year_list">
				<?php
				$right_now = getdate();
				for ($start_year = 1900; $start_year <= $right_now['year']; $start_year++)
					echo "<option>{$start_year}</option>";
				?>
						</datalist>
					</select>
				</div>

				<div class="col-md-1">
					<center>to</center>
				</div>

				<div class="col-md-2">
					<select list="year_list" name="year_end" >
					<option value="present" selected> present </option>
						<datalist id="year_list">
				<?php
				$right_now = getdate();
				for ($start_year = 1900; $start_year <= $right_now['year']; $start_year++)
					echo "<option>{$start_year}</option>";
				?>
						</datalist>
					</select>
				</div>

				<div class="col-md-2">
					<b>Program:</b>
				</div>
				<div class="col-md-2">
					<input type="text" name="program" required>
				</div>
			</div>

			<div class="row">
				<div class="col-md-2">
			<b>College:</b>
				</div>
				<div class="col-md-2">
					<select name="college">
			<option value="" disabled selected>Select your college</option>
			<option value="Information System">Information System</option>
			<option value="Information Technology">Information Technology</option>
			<option value="Computer Science">Computer Science</option>
					</select>
				</div>
			</div>

			<div class="row">
				<div class="col-md-2 col-md-offset-4">
					<input type="submit" value="Submit" class="btn-design">
				</div>
				<div class="col-md-2">
					<input type="button" value="Reset" class="btn-design">
				</div>
			</div>
		</form>
	</div>
</body>
</html>