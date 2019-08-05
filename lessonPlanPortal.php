<?php
session_start();
include('connect_db.php');

$_SESSION['username'];

$course = $_GET['course'];
$week = $_GET['week'];

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $course . " Week " . $week; ?></title>
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
	<header>
	
		<a href="index.html"><img id="logo" src="pictures/logo.png" alt="logo" width="50" height="50"/></a>
		
		
		<div id="nav">
		
			<ul>
		
				<li><a href="index.html" target='_self'>Home</a></li>
				<li><a href="#" target='_self'>My Classes</a></li>
				<li><a href="#" target='_self'>Enter A Code</a></li>
				<li><a href="#" target='_self'>Payment</a></li>
				<li><a href="#" target='_self'>Settings</a></li>
				<li><a href="logoutProcess.php" target='_self'>Log Out</a></li>
			
			</ul>
		
		</div><!--end nav-->
		
	</header>
	<div id="content">
	
		<h1 class="w3-container">Course Name</h1><br>
	
		<div class="w3-bar w3-black">
			<button class="w3-bar-item w3-button" onclick="openTab('Files')">Files</button>
			<button class="w3-bar-item w3-button" onclick="openTab('Lectures')">Lectures</button>
			<button class="w3-bar-item w3-button" onclick="openTab('Videos')">Videos</button>
			<button class="w3-bar-item w3-button" onclick="openTab('lessonPlans')">Lesson Plans </button>
			<button class="w3-bar-item w3-button" onclick="openTab('Problem_Sets')">Problem Sets</button>
			<button class="w3-bar-item w3-button" onclick="openTab('Tutoring')">Tutoring</button>
			<button class="w3-bar-item w3-button" onclick="openTab('Settings'">Settings</button>
		</div>
		
		<br>
		
		
		
		<!--So I'm thinkning we could have a table for each lesson plan, and each different data type ggets its own row, and then we jsut print out the  table row by row, and depending on the file type, we format it accordingly.-->
		
		
		
		
		
		
		
		<h3>Lesson Plan Name</h3><!--add style later-->
		
		<br><br>
		
		<div id="mainObjectives">
			<h3>Main Objectives</h3>
			<br>
			<ul>
				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
			
			</ul>
		
		</div><!--end main objectives-->
		
		<br><br>
		
		<h3>Video Name</h3>		
		
		<div id="video" style="width:200px; height:200px; background-color: antiquewhite; margin:auto;">
		
			
		
		</div><!--end video-->
		
		<br><br><br><br>
		
		<div id="homework" style="text-align: center;">
		
			<p>When you understand the material, click the link below to complete the assignment. </p>
			
			<p><a href="#">Practice Problems</a></p>
		
		</div><!--end homework-->
		
		<br><br><br>
	
</body>
</html>