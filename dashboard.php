<?php session_start(); ?>
<!DOCTYPE html>
<?php 
 include_once('header.php');  
 require_once('config/userClass.php');
 if(empty($_SESSION['result']['id'])) 
  {
    header('location:index.php');
  }
 $user = new USER();
 $userData = $user->getUser($_SESSION['result']['id']);
?>
     <div class="cont_info_log_sign_up" style="margin-left: 26%;width:100%;">
        <div class="col_md_login">
          <div class="cont_ba_opcitiy"> 
           <h2>WELCOME <?php echo $userData['result']['first_name']; ?></h2>
        </div>
      </div>
    </div>
<?php include_once('footer.php'); ?>
