<?php 

session_start();
if(!isset($_SESSION['loggin']) || $_SESSION['loggin']!=true)
{
  header("location:login.php");
  exit;
}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<link rel="stylesheet" href="home.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>welocme <?php echo $_SESSION['username']; ?></title>
  </head>
  <body>
<!-- // require 'partial/nav.php';
//  echo $_SESSION['username'] ; -->
 
 <header>
       <nav>
           <div class="logo"><h1 class="animated infinite heartBeat">DEEPAK WORLD</h1>
        </div>
        <div class="menu">
            <a href="sticky.php">magic notes</a>
            <a href="notepad.php">notepad</a>
            <a href="logout.php">Logout</a>
        </div>
     </nav>
  
<main>
    <section>
        <h3>
            welocome to my world <?php echo $_SESSION['username']?>
        </h3>
        <h2>Do Come Again and Show Your Love</h2>
        <p>I m DEEPAK CHANDRA and   I m web developer</p>
        <!-- <a href="#" class="btnone">Sign up</a> -->
    </section>
</main>
</header>
</body>
</html>