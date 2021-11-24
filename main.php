<?php 
 
    session_start();
    
    if (!isset($_SESSION['username'])) {
        header("Location: index.php");
    }
 
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffe Cafe</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>


<nav class='navmenu'>
  <ul>
  <li><h3>Dream Caffee</h3></li>
  <li></li>
  <li><a href="#">Menu</a></li>
  <li><a href="#">contact</a></li>
  <li><a href="#">About us</a></li>
  <li><a href="logout.php">Log Out</a></li>
  </ul>
</nav>

<div class="banner">
    <h1 class="banner-head">
        Coffee Makes Happy.<br>
        Enjoy it.
    </h1>
</div>

<div class="topteks">
    <h1 teks align="center"> Choose Your Menu below! </h1>
</div>

<div class="cards">
            <div class="services">
               <div class="content content-1">
                   <a href="coffeebaverages.php">
                  <img src="https://i.pinimg.com/564x/ee/b5/36/eeb5361642bcbda9a840208a879d89ba.jpg" style=width:515px;height:278px; >
                    </a>
                  <h2 teks align="center">
                        Coffee & Beverages
                  </h2>
               </div>
               <div class="content content-2">
                   <a href="snackdessert.php">
                  <img src="https://i.pinimg.com/564x/c0/1a/8e/c01a8efd55644c306a291205d5bf0c8d.jpg" style=width:515px;height:278px;>
                  </a>
                  <h2 teks align="center">
                        Snacks & Desserts
                  </h2>
               </div>
            </div>

 </div>
</div>

<div class="footer l-box">
    <p>
        <h3> That's all, Thank You </h3>
    </p>
</div>
</body>
</html>

