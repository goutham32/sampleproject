<?php include_once('header.php'); 
  session_start();
  if(!empty($_SESSION['result']['id'])) 
  {
    header('location:dashboard.php');
  }
?>
<div class="cotn_principal">
  <div class="cont_centrar">
    <div class="cont_login">
      <div class="cont_info_log_sign_up">
          <p class="bg-info" id="msg"><?php echo (isset($_SESSION['msg'])) ? $_SESSION['msg'] : ''; ?></p>
        <div class="col_md_login">
          <div class="cont_ba_opcitiy">
          <h2>LOGIN</h2>  
          <p></p> 
          <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
        </div>
      </div>
      <div class="col_md_sign_up">
        <div class="cont_ba_opcitiy">
          <h2>SIGN UP</h2>
          <p></p>
          <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
        </div>
      </div>
    </div>
    <div class="cont_back_info">
       <div class="cont_img_back_grey">
         <img src="https://www.gtagangwars.de/suite/images/styleLogo-6bd77433ddf78bd8477ea7306e804f677bc925d0.png" alt="" />
       </div>
    </div>
    <div class="cont_forms" >
      <div class="cont_img_back_">
         <img src="https://www.gtagangwars.de/suite/images/styleLogo-6bd77433ddf78bd8477ea7306e804f677bc925d0.png" alt="" />
      </div>
    <div class="cont_form_login">
      <a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons"></i></a>
      <h2>LOGIN</h2>
       <form class="form-horizontal" role="form" id="loginForm" method="post" action="function.php?value=login">
        <input type="text" class="form-control" name="user_name" placeholder="Enter Username" /><br>
        <input type="password" class="form-control" name="password" placeholder="Enter Password" />
        <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
      </form>
    </div>
    <div class="cont_form_sign_up">
     <a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons"></i></a>
     <h2>SIGN UP</h2>
     <p class="bg-info" id="msg"><?php echo (isset($_SESSION['msg'])) ? $_SESSION['msg'] : ''; ?></p>
     <form class="form-horizontal" role="form" id="signupForm" method="post" action="function.php?value=signup">
       <input type="text" class="form-control" name="first_name" placeholder="Enter First Name" /><br>
       <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" /><br>
       <input type="text" class="form-control" name="user_name" placeholder="Enter Username" /><br>
       <input type="password" class="form-control" name="password" placeholder="Enter Password" /><br>
       <input type="date" class="form-control" name="dob" placeholder="Enter Dob" />
       <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
     </form>
    </div>
    </div>
  </div>
 </div>
</div>
<?php include_once('footer.php'); ?>

