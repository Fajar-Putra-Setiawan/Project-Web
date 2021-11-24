<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dream café</title>
    <link rel="stylesheet" href="snack.css">
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
    <h1 teks align="center"> Choose Your Menu below! </h1>
</div>

<form method="POST" action="">
   <div class="cards">
            <div class="services">
               <div class="content content-1">
                  <img src="https://i.pinimg.com/564x/f5/eb/91/f5eb9109f4fc15b8cc7bef548e51ebd9.jpg" style=width:465px;height:278px; >
                  <h2 teks align="center">Lovey Macaron</h2>
                  <p> Two pair of heart-shaped macarons with cherry & raspberry flavor</p>
                  <p> Rp35.000</p>
                  <div>
                     Total<br>
                     <input type="number" name="loveymacaron" value="0" min="0">
                  </div>
               </div>
               <div class="content content-2">
                  <img src="https://i.pinimg.com/564x/e8/b5/21/e8b5213f1c21271f2de79fca07c56f39.jpg" style=width:400px;height:268px;>
                  <h2 teks align="center">Crimont Donut</h2>
                  <p> A chocolate iced donut with crisps & almond on top</p>
                  <p> Rp15.000</p>
                  <div>
                     Total<br>
                     <input type="number" name="crimontdonut" value="0" min="0">
                  </div>
               </div>
               <div class="content content-3">
                  <img src="https://i.pinimg.com/564x/6b/ee/3b/6bee3bbf4f9d892b40132e5f1fb4b7d5.jpg" style=width:400px;height:268px;>
                  <h2 teks align="center">Matcha Cake</h2>
                  <p> A slice of matcha cake and a strawberry on top</p>
                  <p> Rp20.000</p>
                  <div>
                     Total<br>
                     <input type="number" name="matchacake" value="0" min="0">
                  </div>
               </div>
            </div>

            <!-- baris 2 -->
            <div class="services">
               <div class="content content-1">
                  <img src="https://i.pinimg.com/564x/4c/96/7d/4c967d7fd107f7cd3a092ba164b8431d.jpg" style=width:465px;height:278px; >
                  <h2 teks align="center">Role Cake</h2>
                  <p> A lemon flavored cake and a pouring cream</p>
                  <p> Rp40.000</p>
                  <div>
                     Total<br>
                     <input type="number" name="rolecake" value="0" min="0">
                  </div>
                </div>
               <div class="content content-2">
                  <img src="https://i.pinimg.com/564x/d8/d9/32/d8d932e01496682e3ffabe02a288f04e.jpg" style=width:400px;height:268px;>
                  <h2 teks align="center">Brewi</h2>
                  <p> Two stack of bread with kiwi slices all over it</p>
                  <p> Rp25.000</p>
                  <div>
                     Total<br>
                     <input type="number" name="brewi" value="0" min="0">
                  </div>
               </div>
               <div class="content content-3">
                  <img src="https://i.pinimg.com/564x/e3/de/2d/e3de2dfcfbc12554a1b42983153a2736.jpg" style=width:400px;height:268px;>
                  <h2 teks align="center">Churros</h2>
                  <p> A pair of churros with chocolate & vanilla icing</p>
                  <p> Rp15.000</p>
                  <div>
                     Total<br>
                     <input type="number" name="churros" value="0" min="0">
                  </div>
               </div>
            </div>
            
            <!-- baris 3 -->
            <div class="services">
               <div class="content content-1">
                  <img src="https://i.pinimg.com/736x/01/b6/10/01b61086b91d1d021ceabb616f3b9960.jpg" style=width:465px;height:278px; >
                  <h2 teks align="center">French Fries</h2>
                  <p> Special french fries with hot sauce and mayo</p>
                  <p> Rp20.000</p>
                  <div>
                     Total<br>
                     <input type="number" name="frenchfries" value="0" min="0">
                  </div>
                </div>
               <div class="content content-2">
                  <img src="https://i.pinimg.com/564x/76/1d/02/761d0224ece7a99c530c79a41d232c0a.jpg" style=width:400px;height:268px;>
                  <h2 teks align="center">One Piece Pizza</h2>
                  <p> A slice of beef & cheese pizza</p>
                  <p> Rp15.000</p>
                  <div>
                     Total<br>
                     <input type="number" name="onepiecepizza" value="0" min="0">
                  </div>
               </div>
               <div class="content content-3">
                  <img src="https://i.pinimg.com/564x/c8/b0/0c/c8b00c117d794dd0f1a2b16eb6020ffb.jpg" style=width:400px;height:268px;>
                  <h2 teks align="center">Soup Dumpling</h2>
                  <p> Delicious dumplings with secret soup recipe</p>
                  <p> Rp40.000</p>
                  <div>
                     Total<br>
                     <input type="number" name="soupdumpling" value="0" min="0">
                  </div>
               </div>
            </div>
   </div>
   <button type="submit" name="Submit" value="Submit" class="Button" style="color: saddlebrown; background-color: burlywood;"> Order </button>
</form>
</body>
</html>

<?php
        $loveymacaron = $_POST['loveymacaron'];
        $crimontdonut = $_POST['crimontdonut'];
        $matchacake = $_POST['matchacake'];

        $rolecake =$_POST['rolecake'];
        $brewi =$_POST['brewi'];
        $churros =$_POST['churros'];

        $frenchfries =$_POST['frenchfries'];
        $onepiecepizza =$_POST['onepiecepizza'];
        $soupdumpling =$_POST['soupdumpling'];
            
        $sd1 = $loveymacaron*35000;
        $sd2 = $crimontdonut*15000;
        $sd3 = $matchacake*20000;

        $sd4 = $rolecake*40000;
        $sd5 = $brewi*25000;
        $sd6 = $churros*15000;

        $sd7 = $frenchfries*20000;
        $sd8 = $onepiecepizza*15000;
        $sd9 = $soupdumpling*40000;

        $totalsd = $sd1+$sd2+$sd3+$sd4+$sd5+$sd6+$sd7+$sd8+$sd9;

        echo "<h3 class='Purchase';>"."Total Purchases : Rp".$totalsd = number_format($totalsd,0,',','.')."</h3>";
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

