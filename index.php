<?php include 'dbconnect.php';

session_start();
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>AKS</title>
      <link rel="stylesheet" href="log.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="center">
         <input type="checkbox" id="show">
         <label for="show" class="show-btn">Log-in</label>
         <div class="container">
            <label for="show" class="close-btn fas fa-times" title="close"></label>
            <div class="text">
               Login Form
            </div>
            <form action="/emp/logincheck.php" method="POST">
               <div class="data">
                  <label>Username/e-mail</label>
                  <input type="text" name="username" required>
               </div>
               <div class="data">
                  <label>Password</label>
                  <input type="password"  name="pswd"required>
               </div>
               <div class="forgot-pass">
                  <a href="#">Forgot Password?</a>
               </div>
               <div class="btn">
                  <div class="inner"></div>
                  <button type="submit" name="login">login</button>
               </div>

               <div class="signup-link">
                  Not a member? <a href="#">Signup now</a>
               </div>
            </form>
         </div>
      </div>
   </body>

</html>


