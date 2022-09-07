<?php
include 'dbconnect.php';
// session start here
session_start();
$user=$_SESSION['user_name'];
    if($user==true)
    {

    }
    else{
        header('location:index.php');
    }
// session ends here 
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $add = $_POST['addr'];
    $gender = $_POST['gender'];
  
    $sql="UPDATE `empdata` SET `Name` = '$name',`Gender`='$gender',`D.O.B`='$dob',`email`='$email',`address`='$add' WHERE `empdata`.`eno` = '$id'";
   //  $sql= "INSERT INTO `empdata` ( `Name`, `Gender`, `D.O.B`, `email`, `address`) VALUES ('$name','$gender','$dob','$email','$add')";
    $result = mysqli_query($conn, $sql);
    if($result){
          echo "updated     ";
          echo "<hr>";
    }
   else{
          echo "The record was not updated successfully because of this error ---> ". mysqli_error($conn);
       }
    }  

?>



<button><a href="list.php">Done</a></button>
<button><a href="entry.php">Home</a></button>

