<?php 
    session_start();
    session_destroy();
    echo "<script>alert('Thanks For The Order!');</script>";
    echo "<script>location='main.php';</script>";
?>
