<!doctype html>

<html lang="en">
<head>
    <head>
    <meta charset="utf-8">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="bootstrap/js/jquery-1.12.2.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>


		<!-- Date time picker attachement -->
		<link rel="stylesheet" href="bootstrap/css/datepicker.css">

	<!--	<script src="bootstrap/js/jquery-1.9.1.min.js"></script> -->

		<script src="bootstrap/js/bootstrap-datepicker.js"></script>

		<title> Sign-Up </title>

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<?php
//this is how you print something
//print utility\htmlTable::genarateTableFromMultiArray($data);
?>
</br>
<nav class="navbar navbar-inverse">
	
		<div class="container-fluid">
		
			<!-- Logo -->
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand" />WSD TODO Project </a>
			</div>
	
			<!-- Menu on the right -->
			
				<ul class="nav navbar-nav navbar-right">
					
					<li> <a href="index.php"><span class="glyphicon glyphicon-log-in"> Log-In </a> </li>
				
				</ul>
			
			</div>
			
		</div>
		
	</nav>

<form action="index.php?page=accounts&action=register" method="POST">

    
	<div align= "center" class="container-fluid">
	
            <div class="form" align="center">
			<h2> <strong> Sign-Up </strong> </h2>
        <label><b>Email</b></label>
        <input type="email" placeholder="vm368@njit.edu" name="email" required></br></br>

        <label><b>First Name</b></label>
        <input type="text" placeholder="Enter First Name" name="fname" required></br></br>

        <label><b>Last Name</b></label>
        <input type="text" placeholder="Enter Last Name" name="lname" required></br></br>

        <label><b>Phone No</b></label>
        <input type="text" placeholder="Enter Phone number" name="phone" required></br></br>

        <label><b>Birthday</b></label>
        <input type="Date" placeholder="Enter Birthday" name="bday"></br></br>

        <label><b>Gender</b></label>
        <input type="text" placeholder="Enter Gender" name="gender"></br></br>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" pattern=".{6,}" name="password" required></br></br>

        <button type="submit">Register</button><a href="index.php">Cancel</a></br></br>

    </div>


</form>


<script src="js/scripts.js"></script>
</body>
</html>