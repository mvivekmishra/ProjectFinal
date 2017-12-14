<?php include 'headerPage.php' ?>

<form action="index.php?page=accounts&action=edit&id=<?php echo $_SESSION['userID']; ?> " method="post" id="form1">
<?php
//this is how you print something  $data contains the record that was selected on the table.
print utility\htmlTable::generateTableForOneAccount($data);
?>
    <div class="col-lg-1"><button class="btn btn-primary" type="submit" form="form1" value="edit">Edit</button></div>
</form>

<form action="index.php?page=accounts&action=editPass&id=<?php echo $_SESSION['userID']; ?> " method="post" id="form2" style="float:left;">


    <div ><button class="btn btn-primary" type="submit" form="form2" value="edit">Change Password</button><a href="index.php?page=tasks&action=allOneUser&id=<?php echo $_SESSION["userID"] ?>">Cancel</a></div>
</form>

<script src="js/scripts.js"></script>
</body>
</html>