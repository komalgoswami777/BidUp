
<?php 


$server="localhost:3306";
$user="root";
$password="";
$database="bidup";

$conn=mysqli_connect($server,$user,$password,$database);

$query="SELECT * FROM product ";

$result=mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buy</title>
</head>

<body>
<hr>
  <!-- k1 section start--->
   <div class="k1">
        <nav>
      <h5 class="logo">Bid<a href="index.html" style="text-decoration: none;"><span>Up</span></a></h5>
      <ul>
        <li><a href="#auction_section">AUCTIONS</a></li>
        <li><a href="#about_section">ABOUT US</a></li>
        <li><a href="buy.html">BUY NOW</a></li>
        <li><a href="sell.html">SELL</a></li>
        <li><a href="contact.html">CONTACT US</a></li>
      </ul>
      <a href="login.html" class="btn">Register</a>
    </nav>
    <hr>
  </div>
</div>



<!--aayuverdic product-->
        <div class="AayuvedicProduct">
        <h4 style="text-align: center; font-size: 40px; margin: 20px;">Buy Now </h4><br>


          <div class="container2">
            <div class="product">
            <img src="images/thai.jpg"></div>
            <div class="about-text">
            <?php 
            if (mysqli_num_rows($result)>0)
            {
              $sn=1;
              while($data=mysqli_fetch_assoc($result)) {
            ?>

            <h5><?php echo $data['name']??'';?></h5>
            <p> <?php echo $data['detail']??'';?></p> 
            <p><button class="btn-2"><a href="delivery-details.html">BUY NOW</a></button></p><?php $sn++;}} else {  ?>
            </div><?php } ?>  
            <!--<div class="product">
            <img src="images/about.jpg">
            </div>
            <div class="about-text">
            <h5>Diamond Ring</h5>
            <p>24 carat gold </p>
            <button class="btn-2"><a href="delivery-details.html">BUY NOW</a></button>
            </div>
            <div class="product">
            <img src="images/ring.jpg">
            </div>
            <div class="about-text">
            <h5>Treasure</h5>
            <p></p>
            <button class="btn-2"><a href="delivery-details.html">BUY NOW</a></button>
            </div>
            <div class="product">
            <img src="images/treasure.jpg">
            </div>
            <div class="about-text">
            <h5>Rear Red Diamond Ring</h5>
            <p></p>
            <button class="btn-2"><a href="delivery-details.html">BUY NOW</a></button>
            </div>
            <div class="product">
            <img src="images/diamond.jpg">
            </div>
            <div class="about-text">
            <h5>Antique Watch</h5>
            <p></p>
            <button class="btn-2"><a href="delivery-details.html">BUY NOW</a></button>
            </div>
        </div>--->
      </div>
    </div>

        </div>
        </div> 
        </div>
        <br><br>

       
         <div class="map" style="padding: 50px;">
         <iframe width="100%" height="315" src="https://www.youtube.com/embed/pIA4vDXfiHI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>

        <!--Gallery--
          <div class="container">
            <h4 style="text-align: center; font-size: 40px;">GALLERY</h4><br>
            <p style="font-size: 30px; text-align: center;"><b>THE PICTURE WHICH ARE AVAILABLE IN STORE</b></p>
           <br><br>
          </div>
          <div class="images">
            <div class="image-item">
              <h5>Himalaya Liv.52 Tablet 100's</h5>
            </div>
            <div class="image-item">
              <h5>Truuth Ashwagandha 500mg Capsule 60's</h5>
            </div>
            <div class="image-item">
              <h5>Haleezy Ayurvedic Syrup 200ml</h5>
            </div>
              <div class="image-item">
              <h5>Dabur Chyawanprash Awaleha 500 gm</h5>
            </div>
            <div class="image-item">
              <h5>Dabur Hingoli Tablet 90's</h5>
            </div>
          </div>
        </div>
<br><br>-->


<!-----footer----->
<footer>
  <div class="container">
    <div class="row">
      <div class="footer-col">
        <h4>support</h4>
        <ul>
          <li><a href="#">contact us</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">locations</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>corporate</h4>
        <ul>
          <li><a href="#">press</a></li>
          <li><a href="#">privacy policy</a></li>
          <li><a href="#">corporate governance</a></li>
          <li><a href="#">careers</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>more...</h4>
        <ul>
          <li><a href="#">security</a></li>
          <li><a href="#">terms & conditions</a></li>
          <li><a href="#">conditions of business</a></li>
          <li><a href="#">modern slavery statement</a></li>
          <li><a href="#">do not sell my personal information</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Follows Us</h4>
        <div class="social-links">
          <a href="https://www.instagram.com/komal_goswami123/"><i class="fa-brands fa-instagram"></i></a>
              <a href="https://www.linkedin.com/in/komal-gauswami-a99283265/"><i class="fa-brands fa-linkedin-in"></i></a>
              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
          
          
        </div>
      </div>
    </div>
    
  </div>
     
</footer>

<!----footer end----->
</body>
</html>

