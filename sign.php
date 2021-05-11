<?php 
$alert=false;
$exists=false;
if($_SERVER['REQUEST_METHOD']== 'POST'){
    
    require 'db.php';
    $username=$_POST['name'];
    $password=$_POST['password'];
    $cp=$_POST['cpassword'];

   
    // to check the username
    $checksql="SELECT * FROM `userinfo` WHERE name ='$username' ";
    $result=mysqli_query($con,$checksql);
    $numcheck=mysqli_num_rows($result);
    if($numcheck>0)
    {
      $exists=true;
    }
    else
    {
    if(($password == $cp))
    {
      $hash= password_hash($password,PASSWORD_DEFAULT);
    $sql=  "INSERT INTO `userinfo`(`name`, `password`, `date`) VALUES ('$username','$hash',current_timestamp())";
    $insert = mysqli_query($con,$sql);
    if($insert)
    {
     $alert =true;
    }
    else
    {
        echo "not inserted";
    }
  }
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Sign Up</title>
  </head>
  <body> 
<?php
require 'partial/nav.php';
if($alert)
{
echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>success</strong> your account is ready to use.
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
 }
 if($exists)
 {
  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>userexists</strong> you have entered a same username.Please,enter a new one.
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>";
   }
?>

<div class="container my-4 jumbotron">
<h1 class="text-center">Signup to our website</h1>
<form method= "post" action="sign.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" maxlength="11" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter Username">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" maxlength="22" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword2">Confirm password</label>
    <input type="password" class="form-control" id="confirmpass" name="cpassword" placeholder="confirm Password">
  </div>
  
  <button type="submit" class="btn btn-primary"  name="">Submit</button>
  <a href="login.php" style="text-decoration:underline">Already have a account </a>
</form>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>