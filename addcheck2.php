<?php 
 
include 'config.php';

    $photo = $_POST['photo'];
    $name = $_POST['nama_produk'];
    $caption = $_POST['caption'];
    $price = $_POST['harga_produk'];

    $query 	= mysqli_query($conn, "INSERT INTO produk2 VALUES (' ','$photo', '$name', '$caption', '$price')")
	or die(mysqli_error($conn));

    if($query)
	{
		header("location:add.php");
	}
	else
	{
		echo "Oppss, Somethings Wrong!";
	}             
 
?>