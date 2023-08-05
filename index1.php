<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>index</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>
	<hr>
	<!-- k1 section start--->
   <div class="k1">
  	    <nav>
			<h2 class="logo">Bid<a href="file:///C:/Users/komal/OneDrive/Desktop/wp_project/index.html" style="text-decoration: none;"><span>Up</span></a></h2>
			<ul>
				<li><a href="file:///C:/Users/komal/OneDrive/Desktop/wp_project/index.html">AUCTIONS</a></li>
				<li><a href="#about_section">ABOUT US</a></li>
				<li><a href="file:///C:/Users/komal/OneDrive/Desktop/wp_project/form.html">BUY NOW</a></li>
				<li><a href="file:///C:/Users/komal/OneDrive/Desktop/wp_project/gallery.html">SELL</a></li>
				<li><a href="file:///C:/Users/komal/OneDrive/Desktop/wp_project/contact.html">CONTACT US</a></li>
			</ul>
			<a href="file:///C:/Users/komal/OneDrive/Desktop/wp_project/login.html" class="btn">Register</a>
		</nav>
		<hr>
	</div>
</div>
<!---k1 ends---->
<!----slider start------->
<div class="slider">
      <div class="slides">
    
        <!--slide images start-->
        <div class="slide first">
          <img src="images/bn7.jpg" alt="">
        </div>
        <div class="slide">
          <img src="images/bn7.jpg" alt="">
        </div>
        <div class="slide">
          <img src="images/bn7.jpg" alt="">
        </div>
        <div class="slide">
          <img src="images/bn7.jpg" alt="">
        </div>
        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>
        <!--automatic navigation end-->
      </div>
    </div>
    <!--image slider end-->

    <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 5000);

<?php
echo do_shortcode('[smartslider3 slider="2"]');
?>
    </script>
</body>
</html>