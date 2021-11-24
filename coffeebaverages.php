<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dream café</title>
    <link rel="stylesheet" href="coffee.css">
</head>
<body>

<nav class='navmenu'>
  <ul>
  <li><h3>dream café</h3></li>
  <li></li>
  <li><a href="main.php">Menu</a></li>
  <li><a href="#">Contact</a></li>
  <li><a href="#">About us</a></li>
  </ul>
</nav>

<div class="banner">
    <h1 class="banner-head">
        dream café<br>
        rise & sip.
    </h1>
</div>

<div class="topteks">
    <h1 teks align="center"> Choose Your Menu Below! </h1>
</div>

<form method="POST" action="">
   <div class="cards">
            <div class="services">
               <div class="content content-1">
                  <img src="https://i.pinimg.com/564x/10/29/93/102993fb2d373c9c609af1d64800ea9d.jpg" style=width:465px;height:278px; >
                  <h2 teks align="center"> Americano</h2>
                  <p> Espresso combined with hot water</p>
                  <p>Rp15.000</p>
                  <div>
                     Total<br>
                     <input type="number" name="americano" value="0" min="0">
                  </div>
                </div>
               <div class="content content-2">
                  <img src="https://i.pinimg.com/564x/fe/85/52/fe855234246d1db510b9c525a090595c.jpg" style=width:400px;height:268px;>
                  <h2 teks align="center"> Cappuccino</h2>
                  <p> Espresso, steamed milk, and a silk layers of foam </p>
                  <p>Rp20.000</p>
                  <div>
                     Total<br>
                     <input type="number" name="cappuccino" value="0" min="0">
                  </div>
               </div>
               <div class="content content-3">
                  <img src="https://i.pinimg.com/564x/b5/37/64/b53764723910eb582eb009ad717d801e.jpg" style=width:400px;height:268px;>
                  <h2 teks align="center"> Breve </h2>
                  <p> Creamy steamed half and half combined with rich espresso</p>
                  <p>Rp25.000</p>
                  <div>
                     Total<br>
                     <input type="number" name="breve" value="0" min="0">
                  </div>
               </div>
            </div>

            <!-- baris 2 -->
            <div class="services">
               <div class="content content-1">
                  <img src="https://i.pinimg.com/564x/bc/db/04/bcdb040102c9dbb0d2f3a4a47d19c1a2.jpg" style=width:400px;height:268px; >
                    
                  <h2 teks align="center">Mexi Mocha </h2>
                  <p> Classic Mexican chocolate powder, espresso, and steamed milk</p>
                  <p> Rp35.000</p>
                  <div>
                     Total<br>
                     <input type="number" name="meximocha" value="0" min="0">
                  </div>
                </div>
               <div class="content content-2">
                  <img src="https://i.pinimg.com/564x/af/c1/27/afc1277ff7cb67bd1b08ad35e17aa50b.jpg" style=width:400px;height:268px;>
                  <h2 teks align="center">Coffee Mocha</h2>
                  <p> Steamed rich chocolate and espresso</p>
                  <p>Rp25.000</p>
                  <div>
                     Total<br>
                     <input type="number" name="coffeemocha" value="0" min="0">
                  </div>
               </div>
               <div class="content content-3">
                  <img src="https://i.pinimg.com/564x/2e/17/d8/2e17d87a58ea7cb06df4c44811103f62.jpg" style=width:400px;height:268px;>
                  <h2 teks align="center">Latte Macchiato</h2>
                  <p> Classic Mexican chocolate powder, espresso, and steamed milk</p>
                  <p> Rp35.000</p>
                  <div>
                     Total<br>
                     <input type="number" name="lattemachiato" value="0" min="0">
                  </div>
               </div>
            </div>

            <!-- baris 3 -->
            <div class="services">
               <div class="content content-1">
                  <img src="https://i.pinimg.com/564x/67/bb/71/67bb71bab662affb0b52443ed0efec76.jpg" style=width:465px;height:278px; >  
                  <h2 teks align="center">Honey Ginger Lemonade</h2>
                  <p> Fresh ginger, mint leaves, and honey combined with lemon juice</p>
                  <p> Rp30.000</p>
                  <div>
                     Total<br>
                     <input type="number" name="honeyginger" value="0" min="0">
                  </div>
                </div>
               <div class="content content-2">
                  <img src="https://i.pinimg.com/564x/67/43/eb/6743ebdfff959c145b914e5784eb9d4e.jpg" style=width:400px;height:268px;>
                  <h2 teks align="center">Sparkling Strawberry-ade</h2>
                  <p> Strawberries combined with lemonade and sparkling water</p>
                  <p> Rp30.000</p>
                  <div>
                     Total<br>
                     <input type="number" name="sparkling" value="0" min="0">
                  </div>
               </div>
               <div class="content content-3">
                  <img src="https://i.pinimg.com/564x/ac/03/ea/ac03ea94e6a5501ecd287dec60ac9330.jpg" style=width:400px;height:268px;>
                  <h2 teks align="center">Kiwi-ade</h2>
                  <p> Fresh and sweet kiwi lemonade</p>
                  <p> Rp25.000</p>
                  <div>
                     Total<br>
                     <input type="number" name="kiwiade" value="0" min="0">
                  </div>
               </div>
            </div>
      </div>
   <button type="submit" name="Submit" value="Submit" class="Button" style="color: saddlebrown; background-color: burlywood;"> Order </button>
</form>
</body>
</html>

<?php
        $americano = $_POST['americano'];
        $cappuccino = $_POST['cappuccino'];
        $breve = $_POST['breve'];

        $meximocha =$_POST['meximocha'];
        $coffeemocha =$_POST['coffeemocha'];
        $lattemachiato =$_POST['lattemachiato'];

        $honeyginger =$_POST['honeyginger'];
        $sparkling =$_POST['sparkling'];
        $kiwiade =$_POST['kiwiade'];
            
        $cb1 = $americano*15000;
        $cb2 = $cappuccino*20000;
        $cb3 = $breve*25000;

        $cb4 = $meximocha*35000;
        $cb5 = $coffeemocha*25000;
        $cb6 = $lattemachiato*35000;

        $cb7 = $honeyginger*30000;
        $cb8 = $sparkling*30000;
        $cb9 = $kiwiade*25000;

        $totalcb = $cb1+$cb2+$cb3+$cb4+$cb5+$cb6+$cb7+$cb8+$cb9;

        echo "<h3 class='Purchase';>"."Total Purchases : Rp".$totalcb = number_format($totalcb,0,',','.')."</h3>";
?>

<html>
<body>
<div class="footer l-box">
    <p>
        <h3> Thanks for your order </h3>
    </p>
</div>
</body>
</html>

