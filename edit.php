<?php
session_start();

?>
<html>
 <head>
    <link rel="stylesheet" href="style.css">
 </head>
 <body>
    <h1>you can updatedetails here</h1>
    <?php
    include 'dbconnect.php';
    $user=$_SESSION['user_name'];
    if($user==true)
    {

    }
    else{
        header('location:index.php');
    }
    
    $id=$_GET['id'];
    $name=$_GET['name'];
    $gender=$_GET['gender'];
    $dob=$_GET['dob'];
    $email=$_GET['email'];
    $address=$_GET['address'];
    $sql= "SELECT * FROM `empdata`WHERE `eno`=$id ";
    $result = mysqli_query($conn, $sql); 
    $row=mysqli_fetch_assoc($result);

?>

<div  >

    <form action="/emp/updated.php?id=<?php echo $id; ?>" method="post">
    <div>
         <label for="id">eno:  </label>
         <input type="text" name="id" value="<?php echo $id; ?>"  hidden>
          <br>

        <label for="name">name:  </label>
        <input type="text" name="name" value="<?php echo $name; ?>">
        
    
     
    </div>

    <div>
     <label for="gender">gender:</label>   
    <select name="gender" >
    <option
    <?php
           if($row['Gender']== 'female')
           {
            echo "selected";
           }
        ?>
       
        >  female  </option>

        <option 
        <?php
           if($row['Gender']== 'male')
           {
            echo "selected";
           }
        ?>   

        > male   </option>
        
    </select>
    
    </div>


    <div>
        <label for="dob">date of birth:</label>   
        <input type="date" name="dob" value="<?php echo $row['D.O.B'] ?>">
    </div>
    
    
    <div >
        <label for="email">Email address</label>
        <input type="email" name="email"value="<?php echo $email; ?>">
        
    </div>


    <div >
        <label for="addr">Address: </label>
        <br>
        <textarea  name="addr"  cols="30" rows="10"  value=""><?php echo $address; ?></textarea> 
        
    </div>
    <hr>
    <button type="submit" >Update</button>
    </form>
</div>





<?php include 'nav.php';
?>

 </body>
</html>
