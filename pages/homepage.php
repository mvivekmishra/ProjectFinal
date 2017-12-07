<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Log-IN</title>
    <meta name="description" content="WSD Project">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">
	
 
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="bootstrap/js/jquery-1.12.2.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="bootstrap/css/datepicker.css">
	<script src="bootstrap/js/bootstrap-datepicker.js"></script>

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>


<h1>
    <?php

    //this how to print some data;
    //echo $data['site_name'];

    ?> </h1>

<!--<h1><a href="index.php?page=accounts&action=all">Show All Accounts</a></h1>
<h1><a href="index.php?page=tasks&action=all">Show All Tasks</a></h1>-->
		<nav class="navbar navbar-inverse">
	
		<div class="container-fluid">
		
			
			<div class="navbar-header">
				<a hre="#" class="navbar-brand" />TODO Project </a>
				
			</div></nav>
			
         
			<div align="center" class="mylogin">
					<br/>
				
			<h2> <strong>Log-In </strong></h2>

<form action="index.php?page=accounts&action=login" method="POST">

    <div align= "center" class="container">
        <label><b>Username</b></label>
        <input type="text"  placeholder="Enter Username" name="uname" required></br></br>

        <label><b>Password</b></label>
        <input type="password"  placeholder="Enter Password" name="psw" required></br></br>

        <button type="submit">Login</button></br>
    </div>

</br>
</form>

<form action= "index.php?page=accounts&action=signup" method ="POST">
<div align ="center" class= "container">
<label><b></b></label><button type ="submit">Signup</button>
</div>
</form>




<script src="js/scripts.js"></script>
</body>
</html>