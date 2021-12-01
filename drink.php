<?php

$conn= new mysqli("localhost","root","","responsi");

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive pricing table.">
    <title>Coffee & Beverages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Library.css">
    <link rel="stylesheet" href="Library2.css">
    <link rel="stylesheet" href="styles.css">

</head>
<body>

<div class="pure-menu pure-menu-horizontal">
    <a href="#" class="pure-menu-heading">dream café</a>
    <ul class="pure-menu-list">
        <li class="pure-menu-item"><a href="main.php" class="pure-menu-link">Dashboard</a></li>
        <!-- <li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">contact</a></li> -->
        <li class="pure-menu-item"><a href="cart.php" class="pure-menu-link">Cart</a></li>
    </ul>
</div>

<div class="banner">
    <h1 class="banner-head">
        Coffee & Beverages
    </h1>
</div>

    <section class="konten">
        <div class="container">
            <h1>Products</h1>

            <div class="row">
                <div class="row row-cols-3">
                    <?php
                    include 'config.php';

                    $nomor = 1;
                    $query = mysqli_query($conn, "SELECT * FROM produk");
                    while($data = mysqli_fetch_array($query)){?>
                    <div class="col">
                        <img src="photo/<?php echo $data['photo'];?>" style=width:400px;height:268px; >
                        <div class="caption">
                            <h2><?php echo $data['nama_produk']; ?></h2>
                            <h5><?php echo $data['caption']; ?></h5>
                            <h5>Rp. <?php echo number_format($data['harga_produk']); ?></h5>
                            <a href="beli.php?id=<?php echo $data['id_produk']; ?>" class="btn btn-primary">Buy</a>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
        <h2></h2>
    </section>
    <br>

<!-- <div class="footer l-box">
    <p>
        <h3> Thanks for your order </h3>
    </p>
</div> -->

</body>
</html>