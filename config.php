<?php 
 
$server = "localhost";
$user = "root";
$pass = "";
$database = "project website";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    echo("<script>alert('Failed to Connect to Server')</script>");
}
 
?>