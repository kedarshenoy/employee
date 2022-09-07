

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
    <link rel="stylesheet" href="log.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
     
    <title>employe</title>
  </head>




  <body>
<div class="center"> 
    <input type="checkbox" id="show">
    <label for="show" class="show-btn">new employe</label>
<div  class="container">
 <label for="show" class="close-btn  fas fa-times" title="close"></label>   
<h1  class="text">Enter New Employe Details</h1>
    <form action="/emp/list.php" method="post">
    <div class="data">
        <label for="name">Name:  </label>
        <input type="text" name="name">
        
    
     
    </div>

    <div class="data">
     <label for="gender">Gender:</label>   
    <select name="gender">
      
        <option value="male"> Male   </option>
        <option value="female">  female  </option>
    </select>
    
    </div >


    <div class="data">
        <label for="dob">Date of birth:</label>   
        <input type="date" name="dob">
    </div>
    
    
    <div class="data" >
        <label for="email">Email address</label>
        <input type="email" name="email">
        
    </div>


    <div class="data" >
        <label for="addr">Address: </label>
        <br>
        <input type="text"  name="addr"   placeholder="enter your address here"></input> 
        
    </div>
    
    <div class="btn">
                  <div class="inner"></div>
                  <button type="submit" name="login">Save</button>
               </div>
    </form>


<a href="list.php"><input type="submit"value="employee details " ></a>

<div class="signup-link">
                  <div class="inner"></div>
                  <button><a href="logout.php">Logout </a></button>
               </div>



</div>


  <!--container div  -->
</div>
<!-- center div -->
  </body>
</html>

