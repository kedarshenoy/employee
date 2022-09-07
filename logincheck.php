<?php

session_start();

include 'dbconnect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $username = $_POST['username'];
  $pswd=$_POST['pswd'];
  echo $pswd;

  $sql="SELECT * from `login` where username ='$username'&& password ='$pswd' ";
  $result = mysqli_query($conn , $sql);
  
  $t=mysqli_num_rows($result);
   echo $t;
   if($t==1){

    $_SESSION['user_name'] = $username;
    header('location:entry.php');
   }
   else{
    echo"failed try again";
   }
 
}
?>