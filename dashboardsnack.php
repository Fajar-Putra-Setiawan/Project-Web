<?php

$conn= new mysqli("localhost","root","","project website");

session_start();
    
    if (!isset($_SESSION['username'])) {
        header("Location: index.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dream café</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<body>
    <div class="banner">
        <h1 class="banner-head">LIST OF PRODUCT</h1>
    </div>
<div class="pure-menu pure-menu-horizontal">
    <ul class="pure-menu-list">
        <li class="pure-menu-item pure-menu-selected">
            <a href="main.php" class="pure-menu-link">Home</a>
        </li>
        <li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover">
            <a href="#" id="menuLink1" class="pure-menu-link">List per Category</a>
            <ul class="pure-menu-children">
                <li class="pure-menu-item">
                    <a href="drinkdashboard.php" class="pure-menu-link">Drink</a>
                </li>
                <li class="pure-menu-item">
                    <a href="dashboardsnack.php" class="pure-menu-link">Snack</a>
                </li>
            </ul>
        </li>
        </div>
        <a class="nav-link" href="logout.php" style="float: right"><button type="button" class="btn" style="color: white; background-color: #1F1D36;">Log Out</button></a>
        </div>
    </ul>
</div>
<div>
    <a href="add2.php" class="btn btn-primary">+Add</a>
</div>
<br>
<table class="table">
  <thead class="table-dark">
      <tr>
          <th>No</th>
          <th>Product</th>
          <th>Caption</th>
          <th>Unit Price</th>
          <th>Action</th>
      </tr>
  </thead>
  <tbody>
        <?php
        include 'config.php';

        $nomor = 1;
        $query = mysqli_query($conn, "SELECT * FROM produk2");
        while($data = mysqli_fetch_array($query)){?>
      <tr>
        <td> <?php echo $nomor ?></td>
        <td> <?php echo $data['nama_produk']; ?></td>
        <td> <?php echo $data['caption']; ?></td>
        <td>Rp. <?php echo number_format($data['harga_produk']); ?></td>
        <td>
            <a href="edit2.php?id=<?php echo $data['id_produk'];?>" class="btn btn-primary">Edit</a>
            <a href="delete2.php?id=<?php echo $data['id_produk'];?>" class="btn btn-primary">Delete</a>
        </td>
        <?php $nomor++; ?>
      </tr>
      <?php } ?>

  </tbody>
</table>
    
</body>

</html>
