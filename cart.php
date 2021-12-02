<?php 
session_start();

$conn = new mysqli("localhost","root","","project website");

if(empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"])){
    echo "<script>alert('Cart is Empty!');</script>";
    echo "<script>location='main.php';</script>";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>


<nav class='navmenu'>
  <ul>
  <li><h3>dream café</h3></li>
  <li></li>
  <li><a href="Index.php">Dashboard</a></li>
  <li><a href="main.php">Menu</a></li>
  <!-- <li><a href="#">contact</a></li>
  <li><a href="#">About us</a></li> -->
  <li><a href="logout.php">Log Out</a></li>
  </ul>
</nav>

<div class="banner">
    <h1 class="banner-head">
        Coffee Makes Happy.<br>
        Enjoy it.
    </h1>
</div>

<!-- <div class="topteks">
    <h1 teks align="center"> Choose Your Menu below! </h1>
</div> -->

<section class="konten">
    <div class="container">
        <h1>Product Cart</h1>
        <hr>
        <table class="table">
  <thead class="table-dark">
      <tr>
          <th>No</th>
          <th>Product</th>
          <th>Price</th>
          <th>Amount</th>
          <th>Total Price</th>
          <th>Action</th>
      </tr>
  </thead>
  <tbody>
    <?php $number = 1; ?>
    <?php $totalbelanja = 0; ?>
    <?php foreach ($_SESSION["keranjang"] as $id_produk => $jumlah): ?>
    <?php 
        $take = $conn->query("SELECT * FROM produk
        WHERE id_produk=$id_produk");
        $data = $take->fetch_assoc();
        $total = $data["harga_produk"]*$jumlah;
        ?>    
      <tr>
          <td><?php echo $number; ?> </td>
          <td><?php echo $data["nama_produk"]; ?> </td>
          <td>Rp. <?php echo number_format($data["harga_produk"]); ?> </td>
          <td><?php echo $jumlah; ?></td>
          <td>Rp. <?php echo number_format($total); ?></td>
          <td>
              <a href="delete cart.php?id=<?php echo $id_produk ?>" class="btn btn-danger btn-xs">Remove</a>
          </td>
          <?php $number++; ?>
      </tr>
      <?php $totalbelanja+=$total; ?>
      <?php endforeach ?>
  </tbody>
  <tfoot>
      <tr>
          <th>Total Price</th>
          <th>Rp. <?php echo number_format($totalbelanja) ?></th>
      </tr>
  </tfoot>
</table>
<a href="drink.php" class="btn btn-primary">Order Again</a>
<a href="checkout.php" class="btn btn-primary">Check Out</a>
    </div>
</section>

<div class="footer l-box">
    <p>
        <h3> That's all, Thank You </h3>
    </p>
</div>
</body>
</html>

