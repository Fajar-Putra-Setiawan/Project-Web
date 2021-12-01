<?php
	include 'config.php';
	$id_produk	= $_GET['id'];

	$query 	= mysqli_query($conn, "DELETE FROM produk2 WHERE id_produk = '$id_produk'");

	if($query)
	{
		header("location:dashboard.php");
	}
	else
	{
		echo "Opps, Somethings Wrong.";
	}
?>