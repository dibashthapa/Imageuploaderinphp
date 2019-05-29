<?php
session_start();
include_once "conn.php";
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Input effects by js</title>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  

  
  <div id="form">
    <!-- login and signup form  -->
    <ul class="tabs">
      <li id="tab1" class="tab"><a href="#login" class="activate">Log In</a></li>
      <li id="tab2" class="tab"><a href="#signup">Sign Up</a></li>
    </ul>
    <!-- .tabs (login and signup) -->
    <div id="tab_content">
      <div id="login" class="">
        <form action="login.php" method="post">
          <h1 class="text-center">Welcome Back!</h1>
          <div class="wrap-field">
            <label for="Username">Username<span class="req">*</span></label>
            <input type="text" name="email" id="email" required />
          </div>
          <div class="wrap-field">
            <label for="password">Password<span class="req">*</span></label>
            <input type="password" name="password" id="password" required />
          </div>
          <a href="#" style="float: right;">Forgot Password?</a>
          <button type="submit" name="login">LOG IN</button>
</form>
       
      </div>
      <!-- #login  -->
      <div id="signup" class="">
        <form action="signup.php" method="post">
          <h1 class="text-center">Sign Up For Free</h1>
          <div class="wrap-field float-left">
            <label for="f_name">First Name</label>
            <input type="text" name="first_name" id="f_name" />
          </div>
          <div class="wrap-field float-right">
            <label for="l_name">Last Name<span class="req">*</span></label>
            <input type="text" name="last_name" id="l_name" required />
          </div>
          <div class="wrap-field" style="clear: both">
            <label for="e-mail">Email<span class="req">*</span></label>
            <input type="email" name="email" id="e-mail" required />
          </div>
          <div class="wrap-field">
            <label for="pass">Password<span class="req">*</span></label>
            <input type="password" name="password" id="pass" required />
          </div>
          <button type="submit" name="register">SIGN UP</button>
        </form>
      </div>
      <!-- #signup  -->
    </div>
    <!-- #tab_content	 -->
  </div>
  <!-- #form  -->

  <!-- Script  -->
  <script src="js/jquery.js"></script>
  <script src="js/effects.js"></script>

  <!-- /Script  -->
</body>

</html>