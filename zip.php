<?php  
$target_path = "Zip/";  
$target_path = $target_path.basename( $_FILES['zip']['name']);   

$myfile = fopen("path.txt", "w") or die("Unable to open file!");
$file_path = "C:/xampp/htdocs/" . $target_path;

fwrite($myfile, $file_path);

fclose($myfile);


if(move_uploaded_file($_FILES['zip']['tmp_name'], $target_path)) {  
    echo "File uploaded successfully!";
    header("Location: modeltest.py");

} else{  
    echo "Sorry, file not uploaded, please try again!";  
}  

?>