<?php 
 session_start();
 if(!isset($_SESSION["email"])){
    header("location: main.php");
    exit;
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css5/main.css">
    <title>Services</title>
</head>
<body background="images/bg2option1.jpg">


<div class="container">
    <header>

    <img src="images/Group 2.svg" alt="logo-white" class="logo">
        
    <nav>
        <a href="#" class="hide-desktop">
            <img src="images/ham.svg" alt="toggle menu" class="menu" id="menu">
        </a>

        <ul class="show-desktop hide-mobile" id="nav">
            <li id="exit" class="exit-btn hide-desktop">
                <img src="images/exit.svg" alt="exit menu">
            </li>
            <li class="logout">
            <h3>    
            Welcome, <?php echo $_SESSION["email"] ?>
            </h3>    
        </li>
        <li>
        <h3>
        <a href="logout.php">Sign-out</a>    
        </h3>
        </li>
            
        </ul>
    </nav>
    </header>
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

  <br> <br><br> <br><br> <br>
  <div class="image-upload-wrap">
    <form action="zip.php" method="post"  enctype="multipart/form-data" class="needs-validation" >
        <div class="form-group">
            <label for="zip">Upload a zip folder :</label>
            <input type="file" class="form-control" id="zip" name="zip" required>
        </div> <br> <br> <br> <br>
        <button type="submit" class="btn btn-primary" value="Upload Image" onclick="document.getElementById('myInput').value">Submit</button> 
       
  </div>
</div>
</body>
</html>