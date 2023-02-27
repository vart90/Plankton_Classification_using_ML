#!C:/Users/Yana Areyada/Anaconda3/python.exe

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
with ZipFile(file_name, 'r') as zip: 
    # printing all the contents of the zip file 
    zip.extractall() 

    
##path of the test images
test_data_dir = os.getcwd() + '\Valid'

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
    names.append(p[0])

test_datagen = ImageDataGenerator(rescale=1. / 255, )

##loading the model for prediction
model = load_model('plankton5.h5')

test_generator = test_datagen.flow_from_directory(
    test_data_dir,
    target_size=(150, 150),
    batch_size=10,
    classes = ['phytotest', 'zootest'],  shuffle = True)
prediction = model.predict_generator(test_generator, steps = 2, verbose = 0)

df = pd.DataFrame(prediction, columns = ['Zoo' , 'Phyto'], index=names)

df.to_csv('output.csv')

print('All done.')