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
    <link rel="stylesheet" href="./index.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">

</head>
<body>

    <div class="header">


    <div class="container">
    <div class="navbar">
        
        <nav>
            <ul> 
                <li><a href="">HOME</a></li>
                <li><a href="">ABOUT</a></li>
                <li><a href="./shopping/mens.html">PRODUCTS</a></li>
                <li><a href="">Hello <?php echo $_SESSION['firstname']; ?></a></li>
                <li><a href="logout.php">Logout</a></li>
                
            </ul>
        </nav>

        </div>
        <div class="row">
            <div class="col-2">
                <h1>Welcome To The World Of Cycles!</h1>
                <a href="" class="btn">EXPLORE NOW &#8594;</a>
            </div>
            <div class="col-2">
                
            </div>

        </div>        
    </div>
</div>


<!------featured products------->





<div class="small-container">
    <h2 class="title">FEATURED PRODUCTS</h2>
    <div class="row">
        <div class="col-4">
            <img src="https://images.pexels.com/photos/14115/pexels-photo-14115.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
            <h4> Casual Cycles for Women</h4>

            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>


                
            </div>
            <p>$4000.00</p>

            <p><a href="#" class="button">Buy Now</a></p>

        </div>
        <div class="col-4">
            <img src="https://images.pexels.com/photos/5851030/pexels-photo-5851030.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
            <h4>Professional Cycles for Women</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                
            </div>
            <p>$3000.00</p>

            <p><a href="#" class="button">Buy Now</a></p>

        </div>
        <div class="col-4">
            <img src="https://images.pexels.com/photos/310983/pexels-photo-310983.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
            <h4>Casual Cycles for Men</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                
            </div>
            <p>$2000.00</p>

            <p><a href="#" class="button">Buy Now</a></p>


        </div>
        <div class="col-4">
            <img src="https://images.pexels.com/photos/5851033/pexels-photo-5851033.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
            <h4>Professional Cycles for Men</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                
            </div>
            <p>$5000.00</p>

            <p><a href="#" class="button">Buy Now</a></p>

        </div>
    </div>
</div>






<!------reviews------>

<!-- start testimonials -->
<div class="testim">
  <div class="container">
    <h2>Testimonials</h2>
      <div class="testim-content">
        
      <div class="testim-box">
        <p>Absolutely love the quality. Worth the money and great design! I love it! Its great to see such start-ups focusing on health and having high quality! i have owned this piece for 6 years and it still looks new. </p>
        <div class="testim-box-content">
         <img src="https://i.postimg.cc/rpRQv1sc/3.jpg" alt="">
          <h3>Advait</h3>
          <p>Code Developer</p>
        </div>
      </div>
        <div class="testim-box">

          <p>Its a good site but i have had issues with the delivery of my cycles. The kids cycle was well in shape, but the mens professional cycle i ordered seemed to have damaged while on the way. The quality seems good though.</p>
          <div class="testim-box-content">
            <img src="https://i.postimg.cc/rpRQv1sc/3.jpg" alt="">
            <h3>Anvesh</h3>
            <p>Professional Cyclist</p>
          </div>
        </div>
          <div class="testim-box">
  
            <p>LOVE IT. The work on this cycle is so smooth, its so smooth and i feel really comfortable while riding it. I got a pink casual womens cycle and they haven't compromised on quality at all! Will recommend for everyone! </p>
            <div class="testim-box-content">
              <img src="https://i.postimg.cc/rpRQv1sc/3.jpg" alt="">
              <h3>Meeza k.</h3>
              <p>Fitness Enthusiast</p>
            </div>
          </div>

        </div>
  </div>
</div>
<!-- end testimonils -->







<!------review page------>


<script src="https://use.fontawesome.com/a6f0361695.js"></script>

<h2 id="fh2">WE APPRECIATE YOUR REVIEW!</h2>
<h6 id="fh6">Your review will help us to improve our web hosting quality products, and customer services.</h6>


<form id="feedback" action="">
  <div class="pinfo">Your personal info</div>
  
<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-user"></i></span>
  <input  name="name" placeholder="John Doe" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
    <input name="email" type="email" class="form-control" placeholder="john.doe@yahoo.com">
     </div>
  </div>
</div>

<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-globe"></i></span>
  <input  name="URL" placeholder="https://google.com" class="form-control"  type="url">
    </div>
  </div>
</div>

 <div class="pinfo">Rate our overall services.</div>
  

<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-heart"></i></span>
   <select class="form-control" id="rate">
      <option value="1star">1</option>
      <option value="2stars">2</option>
      <option value="3stars">3</option>
      <option value="4stars">4</option>
      <option value="5stars">5</option>
    </select>
    </div>
  </div>
</div>

 <div class="pinfo">Write your feedback.</div>
  

<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
  <textarea class="form-control" id="review" rows="3"></textarea>
 
    </div>
  </div>
</div>

 <button type="submit" class="btn btn-primary">Submit</button>


</form>


<!------Footer------>


    <title>Footer 2</title>
    <link rel="stylesheet" href="./Footer2.css" />
    <script
      src="https://kit.fontawesome.com/66aa7c98b3.js"
      crossorigin="anonymous"
    ></script>
    <div class="footer">
      <div class="heading">
        <h2>ABCDEF<sup>&trade;</sup></h2>
      </div>
      <div class="content">
        <div class="services">
          <h4>Services</h4>
          <p><a href="#">App developmen</a></p>
          <p><a href="#">Web development</a></p>
          <p><a href="#">DevOps</a></p>
          <p><a href="#">Web designing</a></p>
        </div>
        <div class="social-media">
          <h4>Social</h4>
          <p>
            <a href="https://www.linkedin.com/in/sanket-bodke-995b5b205/"
              ><i class="fab fa-linkedin"></i> Linkedin</a
            >
          </p>
          <p>
            <a href="https://twitter.com/Sanket46171296"
              ><i class="fab fa-twitter"></i> Twitter</a
            >
          </p>
          <p>
            <a href="https://github.com/sanketbodke"
              ><i class="fab fa-github"></i> Github</a
            >
          </p>
          <p>
            <a href="https://codepen.io/sanketbodke"
              ><i class="fab fa-codepen"></i> Codepen</a
            >
          </p>
          <p>
            <a href="https://www.instagram.com/imsanketbodke/?hl=en"
              ><i class="fab fa-instagram"></i> Instagram</a
            >
          </p>
        </div>
        <div class="links">
          <h4>Quick links</h4>
          <p><a href="#">Home</a></p>
          <p><a href="#">About</a></p>
          <p><a href="#">Blogs</a></p>
          <p><a href="#">Contact</a></p>
        </div>
        <div class="details">
          <h4 class="address">Address</h4>
          <p>
            Lorem ipsum dolor sit amet consectetur <br />
            adipisicing elit. Cupiditate, qui!
          </p>
          <h4 class="mobile">Mobile</h4>
          <p><a href="#">+9112233445</a></p>
          <h4 class="mail">Email</h4>
          <p><a href="#">abcdef@gmail.com</a></p>
        </div>
      </div>
      <footer>
        <hr />
        &copy; 2021 ABCDEF Technologies Pvt. Ltd.
      </footer>
    </div>




</body>
</html>