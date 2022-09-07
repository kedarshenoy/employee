

<?php
session_start();

$username= $_SESSION['user_name'];
    if($username==true)
    {
     
    }
    else{
        header('location:index.php');
    }
?>
   
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" href="log.css"> -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
     
    <title>employe</title>
  </head>




  <body>
 
<div  class="container">
    
<h1  class="text">Enter New Employe Details</h1>
    <form action="/emp/list.php" method="post">
    <div>
        <label for="name">Name:  </label>
        <input type="text" name="name">
        
    
     
    </div>

    <div>
     <label for="gender">Gender:</label>   
    <select name="gender">
      
        <option value="male"> Male   </option>
        <option value="female">  female  </option>
    </select>
    
    </div>


    <div>
        <label for="dob">Date of birth:</label>   
        <input type="date" name="dob">
    </div>
    
    
    <div >
        <label for="email">Email address</label>
        <input type="email" name="email">
        
    </div>


    <div >
        <label for="addr">Address: </label>
        <br>
        <textarea  name="addr"  cols="30" rows="10" placeholder="enter your address here"></textarea> 
        
    </div>
    
    <button type="submit" >Submit</button>
    </form>


<a href="list.php"><input type="submit"value="employee details "/></a>
<button><a href="logout.php">Logout </a></button>
  
</div>
  </body>
</html>

