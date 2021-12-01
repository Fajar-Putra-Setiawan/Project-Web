<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: main.php");
}
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>123200092</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="banner">
        <h1 class="banner-head">LIST OF INVENTORY </br> EVERYTHING OFFICE</h1>
    </div>

<div class="pure-menu pure-menu-horizontal">
    <ul class="pure-menu-list">
        <li class="pure-menu-item pure-menu-selected">
            <a href="main.php" class="pure-menu-link">Home</a>
        </li>
        <li class="pure-menu-item pure-menu-selected">
            <a href="list product.php" class="pure-menu-link">Inventory List</a>
        </li>
        <li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover">
            <a href="#" id="menuLink1" class="pure-menu-link">List per Category</a>
            <ul class="pure-menu-children">
                <li class="pure-menu-item">
                    <a href="#" class="pure-menu-link">Buildings</a>
                </li>
                <li class="pure-menu-item">
                    <a href="#" class="pure-menu-link">Vehicles</a>
                </li>
                <li class="pure-menu-item">
                    <a href="#" class="pure-menu-link">Office Inventory</a>
                </li>
                <li class="pure-menu-item">
                    <a href="#" class="pure-menu-link">Electronic</a>
                </li>
            </ul>
        </li>
        </div>
        <a class="nav-link" href="proses_logout.php" style="float: right"><button type="button" class="btn" style="color: white; background-color: #1F1D36;">Keluar</button></a>
      </div>
    </ul>
</div>
    <?php
        include 'config.php';
        $id_produk = $_GET['id'];

        $data = mysqli_query($conn, "SELECT * FROM produk2 WHERE id_produk = '$id_produk'");
        while($result = mysqli_fetch_array($data)){
        ?>

      <div class="container-xxl">
        <br>
        <nav class="navbar navbar-dark" style="background-color: #1F1D36; margin-bottom: 25px;">
          <div class="container-fluid">
            <span class="navbar-brand mb-0 a">Update Data Inventory</span>
          </div>
        </nav>
        
        <form method="POST" action="editcheck2.php">
          <table>
            <tr>
              <td>Photo</td>
              <td>
                <div class="input-group flex-nowrap">
                <input type="text" class="form-control" aria-describedby="addon-wrapping" name="photo" value="<?php echo $result['photo'];?>">
                </div>
              </td>
            </tr>
            <input type="hidden" name="id_produk" value="<?php echo $result['id_produk'];?>">
            <tr>
              <td>Product</td>
              <td>
                <div class="input-group flex-nowrap">
                <input type="text" class="form-control" aria-describedby="addon-wrapping" name="nama_produk" value="<?php echo $result['nama_produk'];?>">
                </div>
              </td>
            </tr>
            <tr>
              <td>Caption</td>
              <td>
                <div class="input-group flex-nowrap">
                <input type="text" class="form-control" aria-describedby="addon-wrapping" name="caption" value="<?php echo $result['caption'];?>">
                </div>
              </td>
            </tr>
            <tr>
              <td>Price</td>
              <td>
                <div class="input-group flex-nowrap">
                <input type="text" class="form-control" aria-describedby="addon-wrapping" name="harga_produk" value="<?php echo $result['harga_produk'];?>">
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <br>
                <input class="btn btn-dark" type="submit" name="submit" value="change" style="color: white; background-color: #1F1D36;">
                <input class="btn btn-outline-dark" type="reset" value="Cancel">
              </td>
            </tr>
          </table>
        </form>
        <?php } ?>
      </div>
    
<div class="footer l-box">
    <p>
        <h3> Inventory Web 2021 </h3>
    </p>
</div>
</body>

<footer>

</footer>
</html>