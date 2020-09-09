<?php
require_once("db.php");
class USER extends db{
  
   public static $data;
   function __construct()
    {
      parent::__construct();
    }
   public static function registerUser($first_name,$last_name,$user_name,$password,$dob) {
       $query = "INSERT INTO registration (first_name, last_name, user_name, password, dob) ";
       $query .= "VALUES ('".$first_name."', '".$last_name."','".$user_name."', '".$password."','".$dob."')";
       $result = db::run($query);
       if(!$result) {
        $data = array('status'=>'error', 'msg'=>"Failed to register");
       }else{       
       $data = array('status'=>'success', 'result'=>'');
       }
       return $data;
   }

  
    public static function getUser() {
       $query = "SELECT first_name, last_name, user_name, password, dob FROM registration";
       $result = db::run($query);
       if(!$result) {
         $data = array('status'=>'error', 'msg'=>"Error");
       }
       else{
         $resultSet = mysqli_fetch_assoc($result); 
         $data = $resultSet;
       }
       return $data;
   }
}
