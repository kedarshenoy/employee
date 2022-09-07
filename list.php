<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
        <style>h1{
  text-align: center;
  font-family:italic;
}

button {
  /* background-color: blue; */
  border: none;
  color: black;
  padding: 8px 16px;
  text-decoration: none;
  /* margin: 4px 2px; */
  cursor: pointer;
}</style>
</head>
<?php include 'dbconnect.php';

session_start();
$user=$_SESSION['user_name'];
    if($user==true)
    {

    }
    else{
        header('location:index.php');
    }
?>
<?php include 'nav.php';
?>
<h1>Employe Details </h1>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = isset($_POST['email'])?$_POST['email']:0;
    $dob = $_POST['dob'];
    $add = $_POST['addr'];
    $gender = $_POST['gender'];
  
 
    
    $sql= "INSERT INTO `empdata` ( `Name`, `Gender`, `D.O.B`, `email`, `address`) VALUES ('$name','$gender','$dob','$email','$add')";
    $result = mysqli_query($conn, $sql);
    if($result){
          
    }
   else{
          echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
       }
    }  

?>
  

<table class="table" id="myTable" >
  <thead>
    <tr>
      <th scope="col"style=" text-align: center;">Employe Number</th>
      <th scope="col"style=" text-align: center;">Name</th>
      <th scope="col"style=" text-align: center;">Details</th>
    </tr>
  </thead>
  <tbody>
  <?php
$sql="SELECT * FROM `empdata`";  
$result = mysqli_query($conn, $sql);
   
while( $row=mysqli_fetch_assoc($result)){
  ?>
  
  <tr>
    <th scope='row'><?php echo $row["eno"]?></th>
    <td style=" text-align: center;"><?php echo $row["Name"]?></td>
  
    
    <td style=" text-align: center;"><button style="background-color:skyblue"><a href="details.php?id=<?php echo $row['eno']?>">view</a></button> </td>
    </tr>

<?php 
   }//while end
  
?>
      <!-- "; -->
   
    
  </tbody>
</table>
<hr>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script>$(document).ready( function () {
    $('#myTable').DataTable();
} );</script>
</html>

 
