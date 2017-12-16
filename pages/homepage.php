<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>WSD TODO Project </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

<form action="index.php?page=accounts&action=signup" method="POST">
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">WSD TODO Project</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="https://www.linkedin.com/in/mvivekmishra">My Profile</a></li>
			<li class="active"><a href="https://www.linkedin.com/in/keithwilliams5">Prof Profile</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><font color="white">Not Registerd </font><span class="glyphicon glyphicon-user"></span><button class="btn btn-link navbar-btn" type="submit">Signup</button></li>
        </ul>
    </div>
</nav>
</form>


<form action="index.php?page=accounts&action=login" method="POST">

    <div style="color:red;"><?php echo isset($_REQUEST['wrongpasswordusername']) && $_REQUEST['wrongpasswordusername'] == 1 ? "Invalid Password or Username" : "";?></div>

	<div class="container">
        <div class="row">
            <div class="col-lg-2">
                <label><b>Username</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="email" placeholder="vm368@njit.edu" name="uname" class="form-control" required >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>Password</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="password" name="psw" class="form-control" required>
                </div>
            </div>
        </div>

        <div class="col-lg-2"><button class="btn btn-primary" type="submit">Login</button>

    </div>


</form>

</body>
</html>