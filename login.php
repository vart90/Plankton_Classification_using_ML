<?php
session_start();
if($_POST)
{
$host="localhost";
$user="root";
$pass="";
$db="database";

$email= $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql ="SELECT * from register where email= '$email';";
$result = $conn->query($sql);


if ($result && $result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        $hash = $row["password"];
        if (password_verify($password,$hash)){
            $_SESSION['email'] = $email;
	        $_SESSION['name'] = $name;
	
            header('location: ser.php');
            exit;
        }
        else{
            header('location: main.php');
            exit;
        }
    }
} else {
    echo "0 results <br>";
}
}
$conn-> close();
?>
