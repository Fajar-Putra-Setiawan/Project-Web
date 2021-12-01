<?php 
    session_start();

    $conn = new mysqli("localhost","root","","project website");
    echo "<script>alert('Thanks For The Order!');</script>";
    echo "<script>location='main.php';</script>";
?>