<?php



//each page extends controller and the index.php?page=tasks causes the controller to be called
class tasksController extends http\controller
{
    //each method in the controller is named an action.
    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('show_task', $record);
    }
    public static function editTask()
	{
		$record=todos::findOne($_REQUEST['id']);
		self::getTemplate('edit_task', $record);
	}
	
    //to call the show function the url is index.php?page=task&action=list_task

    public static function all()
    {
        $records = todos::findAll();
        self::getTemplate('all_tasks', $records);

    }
	
	public static function allOneUser()
	{
		$records=todos::findTasksbyID($_REQUEST['id']);
	    self::getTemplate('all_tasks',$records);
	}
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks

    //you should check the notes on the project posted in moodle for how to use active record here

    public static function create()
    {
        //print_r($_POST);
		self::getTemplate('new_task');
    }
    public static function addTask()
	{
		session_start();
		$record=new todo();
		$record->ownermail=$_SESSION["userEmail"];
		$record->ownerid=$_SESSION["userID"];
		$record->createddate=$_POST['createddate'];
		$record->duedate=$_POST['duedate'];
		$record->message=$_POST['message'];
		$record->isdone=$_POST['isdone'];
		$record->save();
		header('Location: index.php=tasks&action=allOneUser&id='.$_SESSION["userID"]);
	}
    //this is the function to view edit record form
    /*public static function edit()
    {
        $record = todos::findOne($_REQUEST['id']);

        self::getTemplate('edit_task', $record);

    }*/

    //this would be for the post for sending the task edit form
    /*public static function store()
    {
        $record=todos::findOne($_REQUEST['id']);
		$record->body=$_REQUEST['body'];
		$record->save();
        print_r($_POST);

    }*/

    //this is the delete function.  You actually return the edit form and then there should be 2 forms on that.
    //One form is the todo and the other is just for the delete button
    public static function delete()
    {
        $record=todos::findOne($_REQUEST['id']);
		$record->delete();
		session_start();
		//print_r($_POST);
		header('Location: index.php?page=tasks&action=allOneUser&id='.$_SESSION["userID"]);

    }
	public static function update()
	{
		$records=todos::findOne($_REQUEST['id']);
		$record=new todo();
		$record->id=$records->id;
		$record->owneremail=$_POST['owneremail'];
		$record->ownerid=$_POST['ownerid'];
		$record->createddate=$_POST['createddate'];
		$record->duedate=$_POST['duedate'];
		$record->message=$_POST['message'];
		$record->isdone=$_POST['isdone'];
		$record->save();
		session_start();
		//echo $_SESSION['userid'];
		header('Location:index.php=tasks&action=allOneUser&id='.$_SESSION["userID"]);
	}



}
?>