<?php
	include 'config.php';

    $id_produk = $_POST['id_produk'];
    $photo = $_POST['photo'];
    $name = $_POST['nama_produk'];
    $caption = $_POST['caption'];
    $price = $_POST['harga_produk'];

	$query 	= mysqli_query($conn, "UPDATE produk SET photo='$photo', nama_produk='$name', caption='$caption', harga_produk='$price' WHERE id_produk='$id_produk'");

	if($query)
	{
		header("location:drinkdashboard.php");
	}
	else
	{
		echo "Opps, Somethings Wrong.";
	}
?>