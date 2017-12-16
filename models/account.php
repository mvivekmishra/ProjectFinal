<?php
final class account extends \database\model
{
    public $id;
    public $email;
    public $fname;
    public $lname;
    public $phone;
    public $birthday;
    public $gender;
    public $password;
    protected static $modelName = 'account';
    public static function getTablename()
    {
        $tableName = 'accounts';
        return $tableName;
    }
    //to find a users tasks you need to create a method here.  Use $this->id to get the usersID For the query
    public static function findTasks()
    {
        
        $records = todos::findAll();
        print_r($records);
        return $records;
    }
    // password check
    public function setPassword($password) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        return $password;
    }
    public function checkPassword($password) {
        $checkpsw = password_verify($password, $this->password);
        return $checkpsw;
    }
}
?>