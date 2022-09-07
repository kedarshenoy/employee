<?php


$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "employe";

// Create a connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}


?>

