<?php 
$login=false;
$showerr=false;
if($_SERVER['REQUEST_METHOD']== 'POST'){
    
    require 'db.php';
    $username=$_POST['name'];
    $password=$_POST['password'];

   
    // $sql="select *from userinfo where name= '$username' and password= '$password'";
    
    $sql="select *from userinfo where name= '$username'";
    $insert = mysqli_query($con,$sql);
    $num=mysqli_num_rows($insert);
    if($num == 1)
    {
      while($row=mysqli_fetch_assoc($insert)){
        if(password_verify($password,$row['password'])){
          

     $login =true;
     session_start();
     $_SESSION['loggin'] = true;
     $_SESSION['username'] = $username;
     if(isset($_POST['rememberme'])){
       setcookie('username',$username,time()+86400);
       setcookie('password',$password,time()+86400);

      header("location:welcome.php");
     }
     else
     {
      header("location:welcome.php");
     }
      
    }
    else
    {
    $showerr="password does not match";
    }

  }
 }
    else
    {
    $showerr="password does not match";
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
    <title>login</title>
    <style>
      input[type=text]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
    </style>
  </head>
  <body> 
<?php
require 'partial/nav.php';
if($login)
{
echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>success</strong> you are logged in.
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
 }
 if($showerr)
{
echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>invalid</strong> wrong credentials.Please check your password and username..
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
 }
?>

<div class="container my-4 jumbotron">
<h1 class="text-center">Login to our website</h1>
<form method= "post" action="login.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="name" name="name" value="<?php if(isset($_COOKIE['username'])){echo  $_COOKIE['username'];}?>" aria-describedby="emailHelp" placeholder="Enter Username">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="<?php if(isset($_COOKIE['password'])){echo  $_COOKIE['password'];}?>" placeholder="Password">
  </div>
  <div class="form-group">
  <input type="checkbox" name="rememberme"> Remember Me</input>
  
  </div>
  <button type="submit" class="btn btn-primary" name=""> Login</button>
 <A href="sign.php" style="text-decoration:underline">IF Don't have Account</a>
</form>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>