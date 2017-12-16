<?php include 'headerPage.php' ?>

<?php
session_start();

?>

<form action="index.php?page=tasks&action=addTask" method="POST">

    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <label><b>Created Date</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                     <input type="Date" name="createddate" class="form-control" /> 
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>Due Date</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="Date" name="duedate" class="form-control" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>Message</b></label>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <input type="text" name="message" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <label><b>isDone</b></label>
            </div>
            <div class="col-lg-1">
                <div class="form-group">
                    <input type="text" name="isdone" class="form-control">
                </div>
            </div>
        </div>

        <div class="col-lg-2"><button class="btn btn-primary" type="submit">Add Task</button><a href="index.php?page=tasks&action=allOneUser&id=<?php echo $_SESSION["userID"] ?>">Cancel</a></div>


    </div>


</form>


<script type="text/javascript">
</script>
</body>
</html>