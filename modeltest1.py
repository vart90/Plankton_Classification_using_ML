#!C:/Users/Yana Areyada/AppData/Local/Programs/Python/Python37/python.exe
print("Content-Type: text/html")
print()
import cv2
import os, io

with io.open('path.txt',) as pathFile:
    path = pathFile.read()

image = cv2.imread(path)
cv2.imwrite('thisfile.png',image)


print("""
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
    
    <title>Services</title>
    <link rel="stylesheet" href="css5/main.css">
    

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

  
        </div> 
        <style>
        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            }
        .button1 {
            background-color: transparent; 
            color: white; 
            border: 2px solid #4CAF50;
            }
        .button1:hover {
            background-color: #4CAF50;
            color: white;
            }
        </style>
        <br>
        <br>
        <br>
        <center><h1 style="color:white !important"> Download your file! </h1></center>
        <br>
        <br>
        <br>
        <center><a class="button button1" href="download.php">Download</a></center>
  </div>
</div>
</body>
</html>""")

