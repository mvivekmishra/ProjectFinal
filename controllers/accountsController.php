<?php
/**
 * 
 */


//each page extends controller and the index.php?page=tasks causes the controller to be called
class accountsController extends http\controller
{

    //each method in the controller is named an action.
    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
        $record = accounts::findOne($_REQUEST['id']);
        self::getTemplate('show_account', $record);
    }

    //to call the show function the url is index.php?page=task&action=list_task

    public static function all()
    {

        $records = accounts::findAll();
        self::getTemplate('all_accounts', $records);

    }
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks

    //you should check the notes on the project posted in moodle for how to use active record here

    //this is to register an account i.e. insert a new account
	
	public static function signup()
	{
		self::getTemplate('new_user');
	}
	
    public static function register()
    {
        //https://www.sitepoint.com/why-you-should-use-bcrypt-to-hash-stored-passwords/
        //USE THE ABOVE TO SEE HOW TO USE Bcrypt
        //print_r($_POST);
        //this just shows creating an account.
		$user=accounts::findUserbyUsername($_REQUEST['email']); //for testing 
        if($user == FALSE){
		$record = new account();
        /*$record->email = "kwilliam@njit.edu";
        $record->fname = "test2";
        $record->lname = "cccc2";
        $record->phone = "4444444";
        $record->birthday = "0";
        $record->gender = "male";
        $record->password = "12345";*/
		$record->email = $_POST['email'];
		$record->fname = $_POST['fname'];
        $record->lname = $_POST['lname'];
        $record->phone = $_POST['phone'];
        $record->birthday = $_POST['birthday'];
        $record->gender = $_POST['gender'];        
		$record->password = $record->setPassword($_POST['password']);
		
        $record->save();
		header('Location : index.php');
    }
	else{
	echo 'already registered';
	}
	}
    //this is the function to save the user the user profile
    public static function store()
    {
        // register user here
		
		print_r($_POST);

    }
	
	public static function update_profile()
	{
		$record = accounts :: findOne($_REQUEST['id']);
		$record = new account();
		$record->id=$records->id;
		$record->email=$_POST['email'];
		$record->fname=$_POST['fanme'];
		$record->lname=$_POST['lname'];
		$record->phone= $_POST['phone'];
		$record->birthday=$_POST['birthday'];
		$record->gender=$_POST['gender'];
		$record->save();
		session_start();
		header('Location: index.php?page=accounts&action=myProf');
	}
	
	public static function show_profile()
	{
		session_start();
		$record= accouts :: findOne($_SESSION['userID']);
		self:: getTemplate('show_account',$record);
	}
		

    /*public static function edit()
    {
        $record = accounts::findOne($_REQUEST['id']);

        self::getTemplate('edit_account', $record);

    }*/

    //this is to login, here is where you find the account and allow login or deny.
    public static function login()
    {
        //you will need to fix this so we can find users username.  YOu should add this method findUser to the accounts collection
        //when you add the method you need to look at my find one, you need to return the user object.
        //then you need to check the password and create the session if the password matches.
        //you might want to add something that handles if the password is invalid, you could add a page template and direct to that
        //after you login you can use the header function to forward the user to a page that displays their tasks.
        //        $record = accounts::findUser($_POST['uname']);

        //print_r($_POST);
        $record= new account();
		$record= accounts::findUserbyUsername($_POST['uname']);
		//$checkpsw= accounts::checkPassword($_POST['psw'], $record->passowrd);
		print_r($record);
		echo '1';
		if($record==FALSE){
			//header('location: index.php');
		echo 'user not avlble';}
		else{ 
		if($record->checkPassword($_POST['psw'])==TRUE){
			echo 'login';
			session_start();
			$_SESSION["userID"]=$record->id;
			$_SESSION["userEmail"]=$record->email;
			print_r($_SESSION);
			header('Location:index.php?page=tasks&action=allOneUser&id='.$record->id); // change to one user 
		}else{
			//session_start();
			//$_SESSION['userid']=$record->id;
			//header ('location: index.php?page=tasks&action=allOnceUser&id='.$record->id);
		echo 'wrong pwd';
		}
    }


}
public static function logout()
{
	session_destroy();
	header ('Location: index.php');
}
}
?>