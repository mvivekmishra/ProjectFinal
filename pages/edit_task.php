

<?php include 'headerPage.php' ?>

<?php
//this is how you print something  $data contains the record that was selected on the table.
//print_r($data);
session_start();
?>

<form action="index.php?page=tasks&action=update&id=<?php echo $data->id; ?> " method="post" id="form1">

    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <label><b>Owner Email</b></label>
            </div>
            <div class="col-lg-1">
                <input type="text" name="owneremail" value="<?php echo $data->owneremail; ?>" readonly required disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>Owner ID</b></label>
            </div>
            <div class="col-lg-1">
                <input type="text" name="ownerid" value="<?php echo $data->ownerid; ?>" readonly required disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>Created Date</b></label>
            </div>
            <div class="col-lg-1">
                <input type="text" name="createddate" value="<?php echo $data->createddate; ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>Due Date</b></label>
            </div>
            <div class="col-lg-1">
                <input type="text" name="duedate" value="<?php echo $data->duedate; ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>Message</b></label>
            </div>
            <div class="col-lg-1">
                <input type="text" name="message" value="<?php echo $data->message; ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>isDone</b></label>
            </div>
            <div class="col-lg-1">
                <input type="text" name="isdone" value="<?php echo $data->isdone; ?>" >
            </div>
        </div>

    </div>
    <div class="col-lg-2"><button class="btn btn-primary" type="submit" form="form1" value="save">Save</button><a href="index.php?page=tasks&action=allOneUser&id=<?php echo $_SESSION["userID"] ?>">Cancel</a></div>
</form>

<script src="js/scripts.js"></script>
</body>
</html>