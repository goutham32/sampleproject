<?php
require_once('config/userClass.php'); 

 $user = new USER(); 
 session_start();
 $value = $_GET['value'];
if(empty($value) || !isset($value)) 
{
  echo 'Error in value';

} 
else if($value == 'signup') 
{
   $data =  USER::registerUser($_REQUEST);
   $_SESSION = $data;
   
     if($data['status'] == 'error') 
     {
       header("location:index.php");
     } 
     else 
     {
       header("location:index.php");
     }
}
 else if($value == 'login') 
 {
   $username = $_REQUEST['user_name'];
   $password = $_REQUEST['password'];
   $_SESSION =  USER::login($username, $password);
   if($_SESSION['status'] == 'error') 
   {
     header("location:index.php");
   } 
   else 
   {
     header("location:dashboard.php");
   }
} 

?>

