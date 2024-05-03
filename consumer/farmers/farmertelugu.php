<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmers block for selling</title>

    <link rel="stylesheet" href="swiper-bundle.min.css" >

   
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">-->
    <link rel="stylesheet" href="all.min.css">
     <link rel="stylesheet" href="bootstrap-3.4.1-dist\css\bootstrap.min.css">
  

    <link rel="stylesheet" href="fontawesome.min.css">
     <link rel="stylesheet" href=" all.min.css">
   
     <link rel="stylesheet" href="solid.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <div class="header-1">

        <a href="#" class="logo"></i>4 seed.<span>com</span></a>

    </div>

    <div class="head">
        <nav class="navbar">
          <a href="#home">హోమ్</a>
            <a href="#sell">అమ్ముతున్నారు</a>
            <a href="#arrivals">వర్గం</a>
            <a href="#reviews">మా గురించి</a>
            <a href="#blogs">సంప్రదించండి</a>
        </nav>
    </div>
</div>
</header>

<!-- header section ends -->

<!-- bottom navbar  -->

<nav class="bottom-navbar">
    <a href="#home" class="glyphicon glyphicon-home"></a>
    <a href="orders.php" class="glyphicon glyphicon-shopping-cart"></a>
    <a href="#arrivals" class="glyphicon glyphicon-search"></a>
    <a href="#reviews" class="glyphicon glyphicon-map-marker"></a>
    <a href="#blogs" class="glyphicon glyphicon-earphone"></a>
    <a href="profile.html" class="glyphicon glyphicon-user"></a>

</nav>

<!-- login form  -->

<div class="login-form-container">

    <div id="close-login-btn" class="glyphicon glyphicon-remove"></div>

    <form action="">
        <h3>sign in</h3>
        <span>username</span>
        <input type="email" name="" class="box" placeholder="enter your email" id="">
        <span>password</span>
        <input type="password" name="" class="box" placeholder="enter your password" id="">
        <div class="checkbox">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me"> remember me</label>
        </div>
        <input type="submit" value="sign in" class="btn">
        <p>forget password ? <a href="#">click here</a></p>
        <p>don't have an account ? <a href="#">create one</a></p>
    </form>

</div>

<!-- home section starts  -->

<section class="home" id="home">
     <form action="" class="search-form">
            <input type="search" name="" placeholder="ఇక్కడ శోధించండి..." id="search-box">
            <label for="search-box" class="glyphicon glyphicon-search"></label>
        </form>
          <div class="icons">
            <div id="search-btn" class="fas fa-search" style="color:orange"></div>
            <div id="login-btn" class="glyphicon glyphcon-user" style="color:orange"></div>
        </div>

    <div class="row">

        <div class="content">
            <div class="text"><h3>రైతులు
</h3></div>
            <p>రైతులు తమ ఉత్పత్తులను అమ్ముకోవచ్చు</p>
            <a href="#" class="btn">ఇప్పుడు చేరండి</a>
        </div>

        <div class="swiper books-slider">
            <div class="swiper-wrapper">
                <a href="produdetail\details.html" class="swiper-slide"><img src="images/species3.jpg" alt=""></a>
                <a href="produdetail\details.html" class="swiper-slide"><img src="images/fruits1.jpg" alt=""></a>
                <a href="produdetail\details.html" class="swiper-slide"><img src="images/fruits2.jpg" alt=""></a>
                <a href="produdetail\details.html" class="swiper-slide"><img src="images/species.jpg" alt=""></a>
                <a href="produdetail\details.html" class="swiper-slide"><img src="images/vegetables1.jpg" alt=""></a>
                <a href="produdetail\details.html" class="swiper-slide"><img src="images/organic1.jpg" alt=""></a>
            </div>
            
        </div>

    </div>



<!-- home section ense  -->

<!-- icons section starts  -->

<section class="icons-container">

   

    <div class="icons">
        <i class="glyphicon glyphicon-lock"></i>
        <div class="content">
            <h3>సురక్షిత చెల్లింపు</h3>
            <p>100 సురక్షిత చెల్లింపు</p>
        </div>
    </div>

   

    <div class="icons">
        <i class="glyphicon glyphicon-headphones"></i>
        <div class="content">
            <h3>24/7 మద్దతు</h3>
            <p>ఎప్పుడైనా మాకు కాల్ చేయండి</p>
        </div>
    </div>
        </div>
    </div>

</section>
</section>


<!-- icons section ends -->

<!-- featured section starts  -->

<section class="sell" id="sell">

    <h1 class="heading"> <span>అమ్ముతున్నారు</span> </h1>

    <div class="swiper sell-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="produdetail\details.html" class="glyphicon glyphicon-search"></a>
                </div>
                <div class="image">
                    <img src="images/fruits2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>పండ్లు</h3>
                    
                    <a href="produdetail\details.html" class="btn">పంపడానికి సిద్ధంగా ఉంది</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="produdetail\details.html" class="glyphicon glyphicon-search"></a>
                   
                </div>
                <div class="image">
                    <img src="images/vegies2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>హైబ్రిడ్</h3>
                    
                    <a href="produdetail\details.html" class="btn">పంపడానికి సిద్ధంగా ఉంది</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="produdetail\details.html" class="glyphicon glyphicon-search"></a>

                </div>
                <div class="image">
                    <img src="images/vegies2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>హైబ్రిడ్ కూరగాయలు</h3>
                  
                    <a href="produdetail\details.html" class="btn">పంపడానికి సిద్ధంగా ఉంది</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="produdetail\details.html" class="glyphicon glyphicon-search"></a>
                    
                </div>
                <div class="image">
                    <img src="images/species2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>కాయలు మరియు జాతులు</h3>
                     <a href="produdetail\details.html" class="btn">పంపడానికి సిద్ధంగా ఉంది</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="produdetail\details.html" class="glyphicon glyphicon-search"></a>
                   
                </div>
                <div class="image">
                    <img src="image/vege.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>కూరగాయలు</h3>
                   
                    <a href="produdetail\details.html" class="btn">పంపడానికి సిద్ధంగా ఉంది</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="produdetail\details.html" class="glyphicon glyphicon-search"></a>
                  
                </div>
                <div class="image">
                    <img src="images/orgfruits.jpg" alt="">
                </div>
                <div class="content">
                    <h3>సేంద్రీయ</h3>
                  
                    <a href="produdetail\details.html" class="btn">పంపడానికి సిద్ధంగా ఉంది</a>
                </div>
            </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- featured section ends -->

<!-- newsletter section starts -->

<section class="phn">

    <form action="subs.php" method="post">
        <h3>పేజీ గురించి స్పష్టమైన ఆలోచన పొందడానికి నమోదు చేయండి</h3>
        <input type="text" name="subscribe" placeholder="మీ ఫోన్ నెంబర్ ను ఎంటర్ చేయండి" id="" class="box">
        <input type="submit" name="submit" value="సభ్యత్వం పొందండి" class="btn">
    </form>

</section>

<!-- newsletter section ends -->

<!-- arrivals section starts  -->

<section class="arrivals" id="arrivals">

    <h1 class="heading"> <span>త్వరగా జోడించండి</span> </h1>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <a href="farmers\produdetail\addquick.html" class="swiper-slide box">
                <div class="image">
                   <img src="images/dryfruits2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>రాకపోకలు</h3>
                    
                </div>
            </a>

            <a href="farmers\produdetail\addquick.html" class="swiper-slide box">
                <div class="image">
                    <img src="images/fruits1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>రాకపోకలు</h3>
                    
                </div>
            </a>

           <a href="farmers\produdetail\addquick.html" class="swiper-slide box">
                <div class="image">
                    <img src="images/vegetables1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>రాకపోకలు</h3>
                    
                </div>
            </a>

            <a href="farmers\produdetail\addquick.html" class="swiper-slide box">
                <div class="image">
                    <img src="images/hybrid 2.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>రాకపోకలు</h3>
                   
                </div>
            </a>

            <a href="produdetail/addquick.html" class="swiper-slide box">
                <div class="image">
                    <img src="images/vegies2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>రాకపోకలు</h3>
                   
                </div>
            </a>

        </div>

    </div>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <a href="produdetail/addquick.html" class="swiper-slide box">
                <div class="image">
                    <img src="image/vege.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>రాకపోకలు</h3>
                   
                </div>
            </a>

            <a href="produdetail/addquick.html" class="swiper-slide box">
                <div class="image">
                    <img src="image/ban.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>రాకపోకలు</h3>
                    
                </div>
            </a>

            <a href="produdetail/addquick.html" class="swiper-slide box">
                <div class="image">
                    <img src="image/hybrid.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>రాకపోకలు</h3>
                  
                </div>
            </a>

            <a href="produdetail/addquick.html" class="swiper-slide box">
                <div class="image">
                    <img src="image/fruit.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>రాకపోకలు</h3>
                    
                </div>
            </a>

            <a href="produdetail/addquick.html" class="swiper-slide box">
                <div class="image">
                    <img src="image/hybrids.jpeg" alt="">
                </div>
                <div class="content">
                    <h3> రాకపోకలు</h3>
                  
                </div>
            </a>

        </div>

    </div>

</section>

<!-- arrivals section ends -->

<!-- about section -->

 
  <section id="start4">
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
         <!-- <img src="#" alt="img">
        </div>-->
      </div>
      <div class="col-right">
        <h1 class="section-title">మా <span>గురించి</span></h1>
        <h2></h2>
        <div class="about-bottom">
        <div class="about-info">
<h2>రైతు</h2>
       <h3> It is to help farmer ensure greater profitability through direct famer and consumer.The farmers who are eligible are verefied and registered by applying with their require documents.Farmers can communicate with consumer for bargaining the products.Farmers upload their cultivated products in the respective portals.And can do business.</h3>
<button class="ctr">రైతు పోర్టల్</button></div>
          <br>

        <a href="#start" class="ctr">హోమ్</a>
      </div>
    </div>
  </div>
  </section>
</section>
<!-- end of about section -->


  <!-- Contact Section -->

  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">సంప్రదింపు<span>సమాచారం</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="image\phn.png"></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <br>
            <h2>+ 123456789</h2>
            <h2>+ 123456789</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="image\email.jpeg" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <br>
            <h2>hello@gmail.com</h2>
            <h2>hai@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
         <div class="icon"><img src="image\addr.png" /></div>
          <div class="contact-info">
            <h1>Address</h1>
            <br>
            <h2>Earth ..India ..AP</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
   </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>4</span>SEED <span>.</span>com</h1>
      </div>
      <h2>social media</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="image\facebook.png"></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="image\twitter.png"></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="image\instagram.png"></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="image\youtub.png"></a>
        </div>
      </div>
      <p>END OF THE PAGE</p>
    </div>
  </section>
  <!-- End Footer -->
<!-- loader  -->

<div class="loader-container">
    <img src="image/loader-img.gif" alt="">
</div>


<script src="swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>