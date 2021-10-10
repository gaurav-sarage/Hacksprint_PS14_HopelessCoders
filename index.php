<?php
session_start();

if(!isset($_SESSION['firstname'])){
  echo "You have logged out";
  header('location:login.php');
}
?>

<!doctype html>
<html>
<head>  
    <meta charset="UTF-8">
    <title>WHEELS 'R' US</title>
    <link rel="stylesheet" href="index88.css">

    </head>
<body>




<div class="hold">
  <div class="header">
    <div class="container">
      <div id="logo">
      </div>
      <ul class="nav">
        <li><a href="#">HOME</a></li>
        <li><a href="aboutus.html">ABOUT</a></li>
        <li><a href="#products">PRODUCTS</a></li>
        <li><a href="#">Hello <?php echo $_SESSION['firstname']; ?></a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="section">
  <div class="slider">
    <div class="container slidercontent">
      <h1 class="hero">WELCOME<br>TO</h1>
      <h2 class="hero">WHEELS 'R' US!</h2>
      <a href="#explore"><div class="call"><span>EXPLORE MORE</span></div></a>
    </div>
  </div>
</div>
<div class="section">
  <div class="container">
    <div class="col four">

      <h2 class="icon">Women</h2>
     <a href="shoppingw.html"> <h1 class="service">Women's Bicycles</h1></a>
      
    </div>
    <div class="col four">
      <h2 class="icon">Men</h2>
      <a href="shoppingm.html"> <h1 class="service">Men's Bicycles</h1></a>
      
    </div>
    <div class="responsivegroup"></div>
    <div class="col four">
      <h2 class="icon">Kids</h2>
      <a href="shopping.html"><h1 class="service">Kid's Bicycles</h1></a>
      
    </div>
    <div class="col four">
      <h3 class="icon">[]</h3>
      <h2 class="service">Accessories</h2>
      
    </div>
    <div class="group"></div>
  </div>
</div>
<div class="section bg">
  <div id="products"class="container">
    <h1>Featured Products</h1>
    <h2>Check out the favourites!</h2>
    <div class="col three bg nopad pointer">
      <div class="imgholder">
        
        <img src="https://images.pexels.com/photos/5851030/pexels-photo-5851030.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" />


      </div>
      <h1 class="feature"></h1>
      <a href="shoppingw.html"><p>Women<br>Professional Cycles</p></a>
    </div>
    <div class="col three bg nopad pointer">
      <div class="imgholder">

        



      </div>
      <h1 class="feature"></h1>
      <p></p>
    </div>
    <div class="col three bg nopad pointer">
      <div class="imgholder">
        
        <img src="https://images.pexels.com/photos/7242978/pexels-photo-7242978.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"/>





      </div>
      <h1 class="feature"></h1>
      <a href="shoppingw.html"><p>Women<br>Casual Cycles</p></a>
    </div>
    <div class="group margin"></div>
    <div class="col three bg nopad pointer">
      <div class="imgholder">
        
        <img src="https://images.pexels.com/photos/5851033/pexels-photo-5851033.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"/>




      </div>
      <h1 class="feature"></h1>
      <a href="shoppingm.html"><p>Men<br>Professional Cycles</p></a>
    </div>
    <div class="col three bg nopad pointer">
      <div class="imgholder">
        




      </div>
      <h1 class="feature"></h1>
      <p></p>
    </div>
    <div class="col three bg nopad pointer">
      <div class="imgholder">
        
        <img src="https://images.pexels.com/photos/2270328/pexels-photo-2270328.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"/>




      </div>
      <h1 class="feature"></h1>
      <a href="shoppingm.html"><p>Men<br>Casual Cycles</p></a>
    </div>
    <div class="group"></div>
  </div>
</div>
<div class="section">
  <div id = "explore" class="container">
    <h1>Why Choose Wheels 'R' Us?</h1>
    <h2></h2>
    <div class="col three">
      <h1 class="icon side"></h1>
      <h1 class="feature side">Insurance</h1>
      <p class="side">Free 2 year insurance!</p>
    </div>
    <div class="col three">
      <h1 class="icon side"></h1>
      <h1 class="feature side">Maintainance</h1>
      <p class="side">Free regular maintainance upto 3 years!</p>
    </div>
    <div class="col three">
      <h1 class="icon side"></h1>
      <h1 class="feature side">High Quality</h1>
      <p class="side">High quality material only used!</p>
    </div>
    <div class="group margin"></div>
    <div class="col three">
      <h1 class="icon side"></h1>
      <h1 class="feature side">Free Delivery</h1>
      <p class="side">Free and safe delivery at our cost!</p>
    </div>
    <div class="col three">
      <h1 class="icon side"></h1>
      <h1 class="feature side">Fast Delivery</h1>
      <p class="side">Cycles are delivered within 3 hours of purchase</p>
    </div>
    <div class="col three">
      <h1 class="icon side"></h1>
      <h1 class="feature side">Resourcing</h1>
      <p class="side">We recruit local business for supplies!</p>
    </div>
    <div class="group margin"></div>
  </div>
</div>
<div class="section bg">
  <div id="reviews" class="container">
    <h1>Customer Reviews</h1>
    <h2></h2>
    <div class="col two bg margin extrapad">
      <h1 class="icon side"></h1>
      <span class="feature side">Anushka</span><span class="side"> - CEO Crowdworks</span>
      <p class="side">Amazing quality of cycle! Kudos to Wheels 'R' Us!</p>
    </div>
    <div class="col two bg margin extrapad">
      <h1 class="icon side"></h1>
      <span class="feature side">Samiksha</span><span class="side"> - Engineer</span>
      <p class="side">Looks as good as the day i bought it 3 years ago!</p>
    </div>
    <div class="group margin"></div>
    <div class="col two bg margin extrapad">
      <h1 class="icon side"></h1>
      <span class="feature side">Advait</span><span class="side"> - Developer</span>
      <p class="side">its great you guys source raw materials from local businesses here! Kudos!</p>
    </div>
    <div class="col two bg margin extrapad">
      <h1 class="icon side"></h1>
      <span class="feature side">Anvesh</span><span class="side"> - Pro Cyclist</span>
      <p class="side">Great quality and long lasting material! Worth the money!</p>
    </div>
    <div class="group"></div>
  </div>
</div>
<div class="section">
  <div class="container">
    <div class="col two">
      <h1 class="icon">[]</h1>
      <h1 class="service">ABOUT</h1>
      <p>To learn more about us, click here!</p>
    </div>
    <div class="col two">
      <h1 class="icon">[]</h1>
      <h1 class="service">CONTACT</h1>
      <p>We would love to hear from you!</p>
    </div>
    <div class="group"></div>
  </div>
</div>
<div class="section">
  <div class="container">
    <h1 class="reset"></h1>
  </div>
</div>
<div class="section">
  <div class="footer">
    <div class="container white">
      <div class="col four left">
        <h1>Services</h1>
        <p>Insurance and Free Maintainance</p>
        <p>Fast and Safe Delivery</p>
        <p>High Quality and Long-Lasting Products</p>
      </div>
      <div class="col four left">
        <h1>Quick Links</h1>
        <p>Home</p>
        <p>About</p>
        <p>Contact</p>
      </div>
      <div class="col four left">
        <h1>Locations</h1>
        <p>India</p>
        
        <p>Germany</p>
        
        <p>France</p>
      </div>
      <div class="col four left">
        <h1>Contact Us</h1>
        <p>9867536784</p>
        <p>Email-customer@wheelsruscycles.com></p>
      </div>
      <div class="group"></div>
    </div>
  </div>
</div>


</body>
</html>
