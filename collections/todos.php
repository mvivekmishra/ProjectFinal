


<?php
class todos extends database\collection
{
    protected static $modelName = 'todo';
    
	//This is the function to write to find tasks by user ID for listing on their homepage.
    
    public static  function findTasksbyID($userid) {
        $tableName = get_called_class();
        $sql = 'SELECT * FROM ' . $tableName . ' WHERE ownerid ="' . $userid.'"';
        
		// You may print sql query here for syntax and error 
		
        $recordsSet = self::getResults($sql);
        return $recordsSet;
    }
}
?>