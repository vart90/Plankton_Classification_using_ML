#!C:/Users/Yana Areyada/Anaconda3/python.exe
print("Content-Type: text/html")
print()

##importing the required libraries
from keras.models import load_model
from keras.preprocessing.image import ImageDataGenerator
from zipfile import ZipFile
import os
import numpy as np
import pandas as pd
import random

for root,direct,files in os.walk("./"):
    for f in files:
        if f == 'output.csv':
            os.remove(f)   

##reading from text file
file1 = open("path.txt","r+") 
file_name = file1.read()
file_name.replace('/', '\\')

##unzipping
# with ZipFile(file_name, 'r') as zip: 
#     # printing all the contents of the zip file 
#     zip.extractall() 

    
##path of the test images
test_data_dir = os.getcwd() + '/Valid'

def filenameGenerator(test_data_dir):
    filepaths = list()
    for root,directory,files in os.walk(test_data_dir):
        for f in files:
            fullpath = os.path.join(root,f)
            filepaths.append(fullpath)
            
    
    return filepaths

file = filenameGenerator(test_data_dir)

names = list()

for i in range(len(file)):
    a = file[i]
    p = a.rsplit('\\',1)
    names.append(p[1])

test_datagen = ImageDataGenerator(rescale=1. / 255, )

##loading the model for prediction
model = load_model('plankton11.h5')

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
    <script> var garbage = ' """)
test_generator = test_datagen.flow_from_directory(
    test_data_dir,
    target_size = (256, 256),
    batch_size = 130,
    classes = ['chaetognath_non_sagitta', 'chaetognath_other', 'chaetognath_sagitta', 'copepod_calanoid', 'copepod_cyclopoid_oithona', 'copepod_cyclopoid_oithona_eggs', 'detritus_other', 'hydromedusae_solmaris', 'echinoderm_larva_seastar_brachiolaria', 'appendicularian_s_shape', 'acantharia_protist', 'protist_noctiluca', 'protist_other', 'trichodesmium_bowtie', 'trichodesmium_puff', 'trichodesmium_tuft'],  shuffle = True)
prediction = model.predict_generator(test_generator, steps = 2, verbose = 0)

print(""" ' </script>""")
df = pd.DataFrame(prediction, columns = ['chaetognath_non_sagitta', 'chaetognath_other', 'chaetognath_sagitta', 'copepod_calanoid', 'copepod_cyclopoid_oithona', 'copepod_cyclopoid_oithona_eggs', 'detritus_other', 'hydromedusae_solmaris', 'echinoderm_larva_seastar_brachiolaria', 'appendicularian_s_shape', 'acantharia_protist', 'protist_noctiluca', 'protist_other', 'trichodesmium_bowtie', 'trichodesmium_puff', 'trichodesmium_tuft'], index=names[0:130])

df.to_csv('output.csv')

print("""
    <title>Download CSV</title>
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

