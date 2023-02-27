<?php 
 session_start();
 if(!isset($_SESSION["email"])){
    header("location: main.php");
    exit;
 }
 ?>
<?php
   
$file = ("C:/xampp/htdocs/output.csv");
$filetype=filetype($file);
$filename=basename($file);
header ("Content-Type: ".$filetype);
header ("Content-Length: ".filesize($file));
header ("Content-Disposition: attachment; filename=".$filename);
readfile($file);
?>