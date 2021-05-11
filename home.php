<?php 

session_start();
if(!isset($_SESSION['loggin']) || $_SESSION['loggin']!=true)
{
  header("location:login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="home.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
   <header>
       <nav>
           <div class="logo"><h1 class="animated infinite heartBeat">DEEPAK WORLD</h1>
        </div>
        <div class="menu">
            <a href="home.php">Home</a>
            <a href="sign.php">Sign up</a>
            <a href="">contact</a>
        </div>
     </nav>
  
<main>
    <section>
        <h3>
            welocome to my world <?php echo $_SESSION['username']?>
        </h3>
        <h2>Do Come Again and Show Your Love</h2>
        <p>I m DEEPAK CHANDRA and   I m web developer</p>
        <a href="#" class="btnone">Sign up</a>
    </section>
</main>
</header>
</body>

</html>