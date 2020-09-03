<?php
require_once("db.php");
class USER extends db{
  
   public static $data;
   function __construct()
    {
      parent::__construct();
    }
   public static function registerUser($userData) {
       $query = "INSERT INTO registration (first_name, last_name, user_name, password, dob) ";
       $query .= "VALUES ('".$userData['first_name']."', '".$userData['last_name']."','".$userData['user_name']."', '".md5($userData['password'])."','".$userData['dob']."')";
       $result = db::run($query);
       if(!$result) {
        $data = array('status'=>'error', 'msg'=>"Failed to register");
       }else{       
       $data = array('status'=>'success', 'msg'=>"You have been registered successfully login now.", 'result'=>'');
       }
       return $data;
   }

   public static function checkLogin($username, $password) {
       $query = "SELECT user_name FROM registration WHERE user_name = '".$username."' and password = '".md5($password)."'";
       $result = db::run($query);
       if(!$result) {
         throw new exception("Error in query!");
       }
       $count = mysqli_num_rows($result); 
       if($count == 0) {
          $data = array('status'=>'error', 'msg'=>"Username/Password is incorrect.");
       }else{        
       $data = array('status'=>'success', 'msg'=>"", 'result'=>'');
       }
      return $data;
   }

   public static function login($username, $password) {
       $check = self::checkLogin($username, $password);
       if($check['status'] == 'error') {
       $data = $check;
       } else {
       $query = "SELECT id FROM registration WHERE user_name = '".$username."' AND password = '".md5($password)."'";
       $result = db::run($query);
       if(!$result) {
         $data = array('status'=>'error', 'msg'=>"Error");
       }
       else{
         $resultSet = mysqli_fetch_assoc($result);         
         $data = array('status'=>'success','result'=>$resultSet);
       }
      }
       return $data;
   }
    public static function getUser($id) {
       $query = "SELECT * FROM registration WHERE id=".$id;
       $result = db::run($query);
       if(!$result) {
         $data = array('status'=>'error', 'msg'=>"Error");
       }
       else{
         $resultSet = mysqli_fetch_assoc($result); 
         $data = array('status'=>'success', 'result'=>$resultSet);
       }
       return $data;
   }
}
