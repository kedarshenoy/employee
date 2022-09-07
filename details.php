<?php session_start();?>
<html>
    <head>
    <style>
h1{
  text-align: center;
  font-family:italic;
}
input[type=button], input[type=submit], input[type=reset] {
  /* background-color: blue; */
  border: none;
  color: black;
  padding: 8px 16px;
  text-decoration: none;
  /* margin: 4px 2px; */
  cursor: pointer;
}
.center {

text-align: center;
}


</style>
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="style.css">
    </head>
 <body> 
 <?php include 'nav.php';
?>
 <h1>Employe Details</h1>  
       
<?php
    include 'dbconnect.php';
    $id=$_GET['id'];
    


?>
   <table class="table" id="myTable" >
  <thead>
    <tr>
      <th scope="col">Employe Number</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">D.O.B</th>
      <th scope="col">email</th>
      <th scope="col">Address</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
   
  <?php

   $sql= "SELECT * FROM `empdata`WHERE `eno`=$id ";
    $result = mysqli_query($conn, $sql); 

    while( $row=mysqli_fetch_assoc($result)){
     ?>
    <tr>
    
    <td><?php echo $row["eno"]?></td>
    <td><?php echo $row["Name"]?></td>
    <td><?php echo $row["Gender"]?></td>
    <td><?php echo $row["D.O.B"]?></td>
    <td><?php echo $row["email"]?></td>
    <td><?php echo $row["address"]?></td>
    <td ><div class="center"><span><a  href="edit.php?id=<?php echo $row['eno']?> &name=<?php echo $row['Name']?> &gender=<?php echo $row['Gender']?> &dob=<?php echo $row['D.O.B']?> &email=<?php echo $row['email']?> &address=<?php echo $row['address']?>"><input type="submit"value="Update" style="background-color:green"  > </a></span>
    <span> <a  href="delete.php?id=<?php echo $row['eno']?> "><input type="submit"value="Delete" style="background-color:red"></a></span></div> </td>
    </tr>
    <?php
    }
    ?> 
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script>$(document).ready( function () {
    $('#myTable').DataTable();
} );</script>




</body>
</html>