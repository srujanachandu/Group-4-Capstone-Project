<!DOCTYPE html>
<html lang="en">
<head>				<!-- Builds basis of site. Sets style1 as the CSS for this page. -->
	<meta charset="utf-8">
	<title>Knightly Knowledge - Feedback</title>
	<link rel="stylesheet" href="../_css/bootstrap.min.css" />
	<link href="style1.css" rel="stylesheet" />
	<script src="dashboard.js" type="text/javascript"></script>
<script>
	function validateForm() {
	if (document.forms[0].myEmail.value == "" ) {
		alert("Please enter an e-mail address.");
		return false;
	} // end if
	return true;
	} // end function validateForm
</script>
<style type="text/css" href="ps4.css">
			<!-- Sets up CSS style for the feedback form. -->
.form	{width: 55%;
		margin: auto;
		padding: 100px;
		}
.fieldset	{border-color: #633393;
			border-style: solid;
			width: 55%;
			margin: auto;
		}
</style>
</head>
</head>
	<body>
		<header>
		<a href="facultyDashboard.php">
		<img class="logo" src="images/knight.jpg" alt="MGA Knight Logo" />
		</a>
		</header>

		<div id="purpleBar">
		<span class="lead">Knightly Knowledge - <a href="facultyDashboard.php" style="color: #FFFFFF">Faculty Dashboard</a>
		- <a href="classes.php" style="color: #FFFFFF">Classes</a></span>
		</div>

	<!-- Sets up data for the side navigation bar. -->
		<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="facultyDashboard.php">Home</a>
		<a href="classes.php">Classes</a>
		<a href="yoursurveys.php">Your Surveys</a>
		<!-- <a href="createnew.php">Create New Survey</a> -->
		<a href="settings.php">Settings</a>
		<a href="facultyFeedback.php">Feedback</a>
		<a href="logout.php">Logout</a>
		</div>
		<div>
		<span class="pointer" onclick="openNav()">&#9776; Menu</span>
		</div>

	<!-- Sets up the feedback form. -->
		<div class="form">
		<fieldset class="fieldset">
		<legend>Please leave your feedback on this tool, as this allows us to assess its usefulness.</legend>
		<form action="mailto:john.doe@imagination.biz" method="post" onsubmit="return validateForm();">
		<legend>Were you able to access the information you required?</legend>
			<input type="radio" name="radio" value="option1"/>Yes!<br>
			<input type="radio" name="radio" value="option2"/>No. (Please explain below in the comments.)<br>
		<br>
		<hr>
		<br>
		<legend>To whom should your feedback be sent?</legend>
		<select>
			<option value="Dr. Scott Spangler">Dr. Scott Spangler (Project Stakeholder)</option>
			<option value="Deodrick Baugh">Deodrick Baugh (Project Captain)</option>
			<option value="Alex Bos">Alex Bos (HTML Team)</option>
			<option value="Ronak Brahmbhatt">Ronak Brahmbhatt (Database Team)</option>
			<option value="Theresa Brown">Theresa Brown (HTML Team)</option>
			<option value="Jack Campbell">Jack Campbell (HTML Team)</option>
			<option value="Colby Carr">Colby Carr (HTML Coordinator)</option>
			<option value="Jared Dorminey">Jared Dorminey (HTML Team)</option>
			<option value="Jamie Hampton">Jamie Hampton (Database Team)</option>
			<option value="All">All team members.</option>
		</select>
		<br>
		<br>
		<hr>
		<br>
		<legend>What did you (not) like about the site?</legend>
			<input type="checkbox" name="checkbox1" value="box1"/>Background<br>
			<input type="checkbox" name="checkbox2" value="box2"/>Use of text color<br>
			<input type="checkbox" name="checkbox3" value="box3"/>Navigation method<br>
			<input type="checkbox" name="checkbox4" value="box4"/>Other (Please specify below in the comments.)<br>
		<br>
		<hr>
		<br>
		<label for="myFname">First Name: </label>
		<input type="text" name="myFname" id="myFname">
		<br>
		<br>
		<label for="myLname">Last Name: </label>
		<input type="text" name="myLname" id="myLname">
		<br>
		<br>
		<label for="myEmail">*E-mail: </label>
		<input type="email" name="myEmail" id="myEmail">
		<br>
		<br>
		<label for="myPhone">Phone: </label>
		<input type="tel" name="myPhone" id="myPhone">
		<br>
		<br>
		<label for="myComments">Comments: </label>
		<textarea name="myComments" id="myComments" rows="2" cols="20"></textarea>
		<br>
		<br>
		<input type="submit" id="mySubmit">
		<input type="reset" id="reset">
		</form>
</fieldset>
</div>

	</body>
</html>