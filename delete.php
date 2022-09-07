<?php

    include 'dbconnect.php';
//   session starting 
session_start();
$user=$_SESSION['user_name'];
    if($user==true)
    {

    }
    else{
        header('location:index.php');
    }
// sql 
    $id=$_GET['id'];
    $sql="DELETE FROM empdata WHERE `empdata`.`eno` = $id";
    $result = mysqli_query($conn, $sql);
    if ($result){
        echo"deleted";
    }
?>
<hr>

<a href="list.php"><input type="submit" value="back"/></a>
<a href="index.php"><input type="submit" value="home"/></a>