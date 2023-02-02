
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css"> -->

	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="./css/style.css" class="">
</head>
<body>

	<nav>
		<label class="logo">Sudbury-College</label>

		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="./php/contact.php">Contact</a></li>
			<li><a href="./php/login.php">Admission</a></li>
			<li><a href="./php/login.php" class="btn btn-success">Login</a></li>
		</ul>
	</nav>


	<div class="section1">
		
		<label class="img_text">We Teach Students With Care</label>
		<img class="main_img" src="./images/school_management.jpg">
	</div>


	<div class="container">

		<div class="row">

			<div class="col-md-4">

				<img class="welcome_img" src="./images/school2.jpg">
				
			</div>

			<div class="col-md-8">

				<h1>Welcome to Sudbury-College</h1>

				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio delectus optio at, unde amet cum porro molestiae similique magnam quibusdam. Ad ratione, ea neque ducimus similique ut tempora? Laboriosam, officiis!</p>
				
			</div>
			

		</div>
		

	</div>


	<center>
		<h1>Our Teachers</h1>
	</center>


	<div class="container">

		<div class="row">

			<div class="col-md-4">

				<img class="teacher" src="./images/teacher1.jpg">

				<p>in a vibrant, academically challenging, and encouraging environment where manifold viewpoints are prized and celebrated.</p>
				
			</div>

			<div class="col-md-4">

				<img class="teacher" src="./images/teacher2.jpg">
				<p>in a vibrant, academically challenging, and encouraging environment where manifold viewpoints are prized and celebrated.</p>
				
			</div>

			<div class="col-md-4">

				<img class="teacher" src="./images/teacher3.jpg">
				<p>in a vibrant, academically challenging, and encouraging environment where manifold viewpoints are prized and celebrated.</p>
				
			</div>
			

		</div>
		

	</div>






	<center>
		<h1>Our Courses</h1>
	</center>


	<div class="container">

		<div class="row">

			<div class="col-md-4">

				<img class="teacher" src="./images/web.jpg">
				<h3>Mobile Application Development</h3>
				
				
			</div>

			<div class="col-md-4">

				<img class="teacher" src="./images/graphic.jpg">
				<h3>Information technology Busisness Analysis</h3>
				
			</div>

			<div class="col-md-4">

				<img class="teacher" src="./images/marketing.png">
				<h3>Cyber Security</h3>
				
			</div>
			

		</div>
		

	</div>


	<center>
		<h1 class="adm">Admission Form</h1>

	</center>


	<div align="center" class="admission_form">

		<form action= "./php/database_check.php" method = "POST">
			
		<div class="adm_int">
			<label class="label_text">Name</label>
			<input class="input_deg" type="text" name="name">
		</div>

		<div class="adm_int">
			<label class="label_text">Email</label>
			<input class="input_deg" type="text" name="email">
		</div>

		<div class="adm_int">
			<label class="label_text">Phone</label>
			<input class="input_deg" type="text" name="phone">
		</div>
		<div class="adm_int">
			<label class="label_text">Message</label>
			<textarea class="input_txt" type = "text" name = "mess"></textarea>
		</div>

		<div class="adm_int" >
			
			<input class="btn btn-primary" id="submit" type="submit" name = "apply" value="apply" >
		</div>


		</form>
		
	</div>

<?php
include './includes/footer.php';
?>


