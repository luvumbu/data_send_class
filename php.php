<?php
header("Access-Control-Allow-Origin: *");
$servername = "localhost";
$username =$_POST["login"] ;
$password =$_POST["password"] ;
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
