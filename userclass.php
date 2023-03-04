<?php // IDEA:
require_once("helper.php");
/**
 * 
 */
class User{
    // Atrribute, Field
    private $username;
    private $userEmail;
    private $userID;
    private $status;

    public function __construct($newUser, $email)
    {
       $this -> username = NULL;
       $this -> userEmail = NULL;
       $this -> status = NULL;
       $this -> userID = NULL; 
    }

    public function GetUserName()
    {
        return $this -> username;
    }

    public function GetUserEmail()
    {
        return $this -> userEmail;
    }

    public function GetUserID()
    {
        return $this -> userID;
    }

    public function GetStatus()
    {
        return $this -> status;
    }

    public function SetUserStatus($input)
    {
        if($input > 1 || $input < 0){
            return false;
        }
        $this -> status - $input;
        return true;
    }
}
?>