



<?php
class accounts extends \database\collection 
{
    protected static $modelName = 'account';
    
	//This is the function to write to find user by ID for login.
    
    public static  function findUserbyUsername($uname) {
        $tableName = get_called_class();
        $sql = 'SELECT * FROM ' . $tableName . ' WHERE email ="' . $uname.'"';
        // You may print sql command for display and correctness of SQl syntax
        $recordsSet = self::getResults($sql);
        if (is_null($recordsSet)) {
            return FALSE;
        } else {
            return $recordsSet[0];
        }
        
    }
}
?>