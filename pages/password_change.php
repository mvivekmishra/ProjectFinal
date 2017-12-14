<?php include 'headerPage.php' ?>

<?php
//this is how you print something  $data contains the record that was selected on the table.
//print_r($data);
?>

<form action="index.php?page=accounts&action=updatePass&id=<?php echo $data->id; ?> " method="post" id="form1">

    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <label><b>Enter your current password:</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="password" class="form-control" name="currentPass" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <label><b>Enter New Password</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="password" class="form-control" name="newPass1">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <label><b>Re-enter Password</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="password" class="form-control" name="newPass2">
                </div>
            </div>
        </div>

    </div>
    <div class="col-lg-2"><button class="btn btn-primary" type="submit" form="form1" value="save">Update Password</button><a href="index.php?page=accounts&action=showProf">Cancel</a></div>
</form>

<script src="js/scripts.js"></script>
</body>
</html>