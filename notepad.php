<html>
    <head>
        <title>
            NOTEPADdd
        </title>
         
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="ss.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
    <body> 
      
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
          <a class="nav-link" href="sticky.php">NOTESMAGIC</a>
        </li>
          
          <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" id="searchtxt" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

          </form> -->
      </div>
    </nav>

        <!-- <p>deepka chandra</p> -->
 <div class="container text-center my-5 mx-5 py-4">
        <h2>SIMPLE NOTEPAD...</h2>
        <div class="setup">
            <select name="" id="" class="look"  onchange="changeFont(this)">
                <option value="Arial">Arial</option>      
                  <option value="Sans Serif         ">Sans Serif</option>
                <option value="Comic Sans Ms        ">Comic Sans Ms  </option>
                <option value="Times Nw Roman       ">Times Nw Roman </option>        
                <option value="Courier              ">Courier        </option>
                <option value="Verdana              ">Verdana        </option>
                <option value="Tebuchet MS          ">Tebuchet MS    </option>      
                <option value="Arial Black          ">Arial Black    </option>
                <option value="Impact               ">Impact         </option>
                <option value="Bookman              ">Bookman        </option>
                <option value="Helvetica            ">Helvetica      </option>
                <option value="Garmond              ">Garmond        </option>    
                <option value="Palatino             ">Palatino       </option>
                <option value="Georgia              ">Georgia        </option>
                <option value="Monsterrat           ">Monsterrat     </option>      
            </select>
            <select name="" id="" class="size" onchange="changeweight(this)">
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>        
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="20">20</option>
                <option value="22">22</option>
                <option value="30">30</option>
                <option value="48">48</option>
            </select>
               <label for="body" id="body">
               <input type="text" id="hex" placeholder="change background">
               <input type="color" id="colorInput">
            </label>
            <label for="font" id="font">
            <input type="text" id="hexfont" placeholder="change body background ">
            <input type="color" id="colorfont" >
            </label>
            <input type="button" class="upper btn btn-outline-dark" class="upper" id="bol" value="bold">
            <input type="button" class="upper btn btn-outline-dark" id="ita" value="italic">
            <input type="button" class="upper btn btn-outline-dark" id="line" value="underline">
            <br><br>
            <textarea name=""  id="content" cols="30" rows="10" placeholder="ENTER YOUR TEXT!!!" contenteditable="false"></textarea>
            <br><br>
           
            <input type="reset"  value="clear" id="clear" class="btn btn-outline-dark">
            <input type="button"  value="reset" id="reset" class="btn btn-outline-dark">
            <input type="button" value="download" id="download-btn" class="btn btn-outline-dark ">
            <br>
            <br>
            <label>filename</label>
            <input type="text" id="filename" class="py-1" value="helo.txt">
            <br>
            <br>
        </div>
        <div class="row conatiner-fluid text-center">
        <div class="card" style="width: 18rem; color:aqua;background:none; border:none;">
            <div class="card-body text-capitalize">
              <h5 class="card-title">Thank you for using..</h5>
              <p class="card-text">This is NOtepad for you hope you enjoy using it..MADE WITH love by DEEPAK CHANDRA</p>
             
            </div>
          </div>
        </div>  
    </div>
    
    <script src="FileSaver.min.js"></script>
    <script src="app.js"></script>
    </body>
</html>
       
       
       