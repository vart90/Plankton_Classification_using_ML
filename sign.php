<?php

$name= $_POST["name"];
$email= $_POST["email"];
$password = password_hash($_POST["password"],PASSWORD_BCRYPT);
$purpose=$_POST["purpose"]; 
$conn = new mysqli("localhost","root","","database");

$sql = "INSERT INTO register 
VALUES ('$name','$email','$password','$purpose')";

if ($conn->query($sql) === TRUE) {
	Header('Location: ser.php');
 	exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

 ?>
 