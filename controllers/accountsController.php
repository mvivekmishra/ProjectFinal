<?php
/**
 * Created by PhpStorm.
 * User: Vivek
 
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
    public static function signup()
    {
        self::getTemplate('new_user');
    }
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks
    //you should check the notes on the project posted in moodle for how to use active record here
    //this is to register an account i.e. insert a new account
    public static function register()
{
    //https://www.sitepoint.com/why-you-should-use-bcrypt-to-hash-stored-passwords/
    //USE THE ABOVE TO SEE HOW TO USE Bcrypt
    $user = accounts::findUserbyUsername($_REQUEST['email']);
    if ($user == FALSE) {
        $record = new account();
        $record->email = $_POST['email'];
        $record->fname = $_POST['fname'];
        $record->lname = $_POST['lname'];
        $record->phone = $_POST['phone'];
        $record->birthday = $_POST['bday'];
        $record->gender = $_POST['gender'];
        //$record->password = $_POST['password'];
        $record->password = $record->setPassword($_POST['password']);
        //print_r($record);
        $record->save();
        header('Location: index.php');
    }
    else{
        echo 'user exist';
    }
}
    //this is the function to save the user the user profile // saved from active record code :)
    public static function store()
    {
        print_r($_POST);
    }
    public static function update_profile()
    {
        $records = accounts::findOne($_REQUEST['id']);
        $record = new account();
        $record->id=$records->id;
        $record->email=$_POST['email'];
        $record->fname=$_POST['fname'];
        $record->lname=$_POST['lname'];
        $record->phone=$_POST['phone'];
        $record->birthday=$_POST['birthday'];
        $record->gender=$_POST['gender'];
        $record->save();
        session_start();
        header('Location: index.php?page=accounts&action=showProf');
    }
    public static function edit_profile()
    {
        session_start();
        $record = accounts::findOne($_SESSION['userID']);
        self::getTemplate('edit_account', $record);
    }
    public static function show_profile()
    {
        session_start();
        $record = accounts::findOne($_SESSION['userID']);
        self::getTemplate('show_account', $record);
    }
    public static function editPass()
    {
        session_start();
        $record = accounts::findOne($_SESSION['userID']);
        self::getTemplate('password_change', $record);
    }
    public static function updatePass()
    {
        $records = accounts::findOne($_REQUEST['id']);
        if($records->checkPassword($_POST['currentPass']) == TRUE){
            if($_POST['newPass1']==$_POST['newPass2']){
                $record = new account();
                $record->id=$records->id;
                $record->password = $record->setPassword($_POST['newPass1']);
                $record->save();
                header('Location: index.php?page=accounts&action=showProf');
            }else{
                echo 'Passwords do not match.';
            }
        }else{
            echo 'Wrong password entered.';
        }
    }
    //this is to login, here is where you find the account and allow login or deny.
    public static function login()
    {
        
        //        $record = accounts::findUser($_POST['uname']); // testing 
        $record = new account();
        $record = accounts::findUserbyUsername($_POST['uname']);
        //$checkpsw = accounts::checkPassword($_POST['psw'],$record->password);
        print_r($record);
        echo '1';
        if ($record == FALSE) {
            //header('Location: index.php');
            echo 'user not found';
        } else {
            if($record->checkPassword($_POST['psw']) == TRUE) {
                echo 'login';
                session_start();
                $_SESSION["userID"] = $record->id;
                $_SESSION["userEmail"] = $record->email;
                print_r($_SESSION);
                header('Location: index.php?page=tasks&action=allOneUser&id='.$record->id);
            } else {
                //header('Location: index.php');
                echo 'enter correct password';
            }
        }
    }
    public static function logout()
    {
        session_destroy();
        header('Location: index.php');
    }
}
?>