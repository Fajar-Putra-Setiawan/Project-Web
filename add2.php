<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Add Data</title>
  </head>
  <body>
  <div class="banner">
        <h1 class="banner-head">Add Data <br> Snacks & Desserts</h1>
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
        <a class="nav-link" href="logout.php"><button type="button" class="btn" style="float: right; bottom:0px; color: white; background-color: #c68b59;">Log out</button></a>
        </div>
    </ul>
</div>

<div class="container-xxl">
        <br><br>
        <nav class="navbar navbar-dark" style="background-color: #c68b59; margin-bottom: 25px;">
          <div class="container-fluid">
            <span class="navbar-brand mb-0 a">Add Data</span>
          </div>
        </nav>

  <form method="POST" action="addcheck2.php">
          <table>
            <tr>
              <td>Photo</td><td></td>
              <td>
                <div class="input-group flex-nowrap">
                <input type="text" class="form-control" aria-describedby="addon-wrapping" name="photo">
                </div>
              </td>
            </tr>
            <tr>
              <td>Product Name</td><td></td>
              <td>
                <div class="input-group flex-nowrap">
                <input type="text" class="form-control" aria-describedby="addon-wrapping" name="nama_produk">
                </div>
              </td>
            </tr>
            <tr>
              <td>Caption</td><td></td>
              <td>
                <div class="input-group flex-nowrap">
                <input type="text" class="form-control" aria-describedby="addon-wrapping" name="caption">
                </div>
              </td>
            </tr>
            <tr>
              <td>Price</td><td></td>
              <td>
                <div class="input-group flex-nowrap">
                <input type="text" class="form-control" aria-describedby="addon-wrapping" name="harga_produk">
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <br>
                <input class="btn btn-dark" type="submit" name="submit" value="Save" style="color: white; background-color: #c68b59;">
                <input class="btn btn-outline-dark" type="reset" value="Reset">
              </td>
            </tr>
          </table>
        </form>
</div>
<div class="footer" style="margin-top: 50px;">
    <h3>dream café</h3>
</div>
  </body>
</html>
