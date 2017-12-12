<!!--<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>WSD Project TODO</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>


//this is how you print something  $data contains the record that was selected on the table.
<?php include 'headerPage.php' ?>

<form action="index.php?page=accounts&action=update&id=<?php echo $_SESSION['userID']; ?> " method="post" id="form1">
<?php
//this is how you print something  $data contains the record that was selected on the table.
print utility\htmlTable::generateTableForOneAccount($data);
?>
    <div class="col-lg-2"><button class="btn btn-primary" type="submit" form="form1" value="save">Update</button><a href="index.php?page=tasks&action=allOneUser&id=<?php echo $_SESSION["userID"] ?>">Cancel</a></div>
</form>

<script src="js/scripts.js"></script>
</body>
</html>





