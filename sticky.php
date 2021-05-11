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
  <title>DEEP NOTES</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <!-- nav bar -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <a class="navbar-brand" href="#">DEEPWORLD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="notepad.php">NOTEPAD</a>
        </li>
          
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" id="searchtxt" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

          </form>
      </div>
    </nav>
    <!-- main dv -->

    <div class="container my-3">
      <h1 class="text-center my-4 "><b>NOTES FOR YOU</b></h1>
      <div class="card text-white bg-dark my-4">
          <div class="card-body my-4">
              <div class="form-group">
                  <h5 class="card-title">ADD TITLE</h5>
                <input type="text" class="form-control w3-input" id="addTitle" aria-describedby="title"
                    placeholder="Enter title">
            </div>
            <h5 class="card-title">Enter A NOTE</h5>
            <div class="form-group">
                <textarea class="form-control" id="addTxt" rows="3"></textarea>
            </div>
            <button class="btn btn-primary" id="addBtn">Add Note</button>
        </div>
    </div>
    <hr>
    <h1>YOUR NOTES</h1>
    <hr>
    <div id="notes" class="row container-fluid "> </div>
</div>

</body>
<script src="main.js">

</script>

</html>