<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: loggin/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/foodyicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,600,700,900%7CRaleway:500">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
   
  </head>
  <body>
    <div class="preloader">
      <div class="wrapper-triangle">
        <div class="pen">
          <div class="line-triangle">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
          </div>
          <div class="line-triangle">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
          </div>
          <div class="line-triangle">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="56px" data-xl-stick-up-offset="56px" data-xxl-stick-up-offset="56px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-inner-outer">
              <div class="rd-navbar-inner">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="index.php"><img class="brand-logo-dark" src="images/foody.png" alt=""  /></a></div>
                </div>
                <div class="rd-navbar-right rd-navbar-nav-wrap">
                  <div class="rd-navbar-aside">
                    <ul class="rd-navbar-contacts-2">
                      <li>
                        <div class="unit unit-spacing-xs">
                          <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                          <div class="unit-body"><a class="phone" href="tel:#">+216 58 737 767</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit unit-spacing-xs">
                          <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                          <div class="unit-body"><a class="address" href="#">P987+H48 Hammam Lif, Ben Arous</a></div>
                        </div>
                      </li>
                    </ul>
                    <ul class="list-share-2">
                      <li><a class="icon mdi mdi-facebook" href="https://www.facebook.com/sarah.hammami.666"></a></li>
                      <li><a class="icon mdi mdi-twitter" href="https://twitter.com/sarahhammami2"></a></li>
                      <li><a class="icon mdi mdi-instagram" href="https://www.instagram.com/sarah_hammamiii/?hl=fr"></a></li>
                    </ul>
                  </div>
                  <div class="rd-navbar-main">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="index.php">Home</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="about-us.php">About us</a>
                      </li>
                     
                      <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.php">Contacts</a></li>
                      <li class="rd-nav-item">
                      <a class="rd-nav-link" href="#"><?php if (isset($_SESSION['username'])){echo $_SESSION['username'];}
                      else{
                        echo'<li class="rd-nav-item"><a class="rd-nav-link" href="sign_in.php">Sign-in</a>';
                      }?>  </a> 
                      </li>
                      <li class="rd-nav-item"><a class="brand" href="cart.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABmJLR0QA/wD/AP+gvaeTAAACrklEQVRYhe2WzU8TQRjGn8HSatvtku2mEkg09APaYKUVesCbBxLRoyYcWhMTw4XEGBOOHnrxPzBevXkw8WA0hqRWKGJQBGxM+JBWpIhpKFuUgg32azxok9KvHUqoHPgle9h53tl55t33nQxwzFHD5XIkRFGg+edib0/8MNdrKB4ghNDC96XQsjA0eNNRNwNTUx95SdokkrRJTKa2nwCQ/J28UjcDhegFfhUAdn4le/+LAR2n/QQAia0t22EZUFQT1Wr1OABPYvuHKbHeTa+7o5gN7ta8mLOLy/j8kcbCsaoZUCh1LwghiKzGkMlQNFSNlmclkizZMJGbZLNa0htSXDHyrA3t5vIxxs6vAIDlubay+tt3u7hxKwpnF5f1+SN7TMjuyWAQJACYX2yUC61IOJwCALS2coliTdYAzzeFAWDhc65mA6EvaQCAwcBF9m1Ax6lnAGApXHvxLf3LgMBr3xdrVbsAANRajQ/AncD4Goyd1WPztVAJjfbkk+Ix2QykUgo/IbK1KotCQXD77vPXxeNMX3Y67Mlva99PPX3cCmeXskSv1gUFHVByBgAMGQAAUWyKAsD84gmW8D3kO6ClhdsupzMZ0PG6RQCYWyjdvRz5Djht4FZqN6DjRwEgMLGF9ZiWeXEpnkVgIgkAEEXNWLkY2S4AAEqVD5qbDfej0Ziy99JGxbhKXXD2jJC2nTPeK6cx/dRgMJgZuNb/JpOjV7cTO5psNssyDSqVCh0d5pjdfr5/ePjRMtOkerOvBvd6h7ThUPzV9PSsCwS0p/vCB7NF3+f1Ptxh0Q+Mxz0wWXhhFUWBetwDk6z6gbFaLRlRFGhgdISO+V9SURSozdqeZdXLUdMVg+ZyoPTv5ZmC0v3qNXMYv4DpHMhjtuj7LqPPNz0z6wKAfJGx6sccSf4A6eYk+59xYb0AAAAASUVORK5CYII="/></a> </li>
                    </ul>
                  </div>
                </div>
                <div class="rd-navbar-project-hamburger rd-navbar-project-hamburger-open rd-navbar-fixed-element-1" data-multitoggle=".rd-navbar-inner" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate="data-multitoggle-isolate">
                  <div class="project-hamburger"><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span>
                  </div>
                </div>
                <?php require('navbar.php'); ?>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Swiper-->
      <section class="section swiper-container swiper-slider swiper-slider-2 swiper-slider-3" data-loop="true" data-autoplay="5000" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper text-sm-left">
          <div class="swiper-slide context-dark" data-slide-bg="images/Fast-Food.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-9 col-md-8 col-lg-7 col-xl-7 offset-lg-1 offset-xxl-0">
                    <h1 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInUp" data-caption-delay="0">Perfect Meal</span></h1>
                    <p class="big swiper-text" data-caption-animate="fadeInLeft" data-caption-delay="300">Experience the taste of a perfect meal at our Fast-Food house, one of the best restaurants!</p><a class="button button-lg button-primary button-winona button-shadow-2" href="#" data-caption-animate="fadeInUp" data-caption-delay="300">View our menu</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide context-dark" data-slide-bg="images/burger.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-lg-7 offset-lg-1 offset-xxl-0">
                    <h1 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInDown" data-caption-delay="0">Quality ingredients</span></h1>
                    <p class="big swiper-text" data-caption-animate="fadeInRight" data-caption-delay="300">We use only the best ingredients to make one-of-a-kind Fast-Food for our customers.</p>
                    <div class="button-wrap oh"><a class="button button-lg button-primary button-winona button-shadow-2" href="Menu.html" data-caption-animate="slideInUp" data-caption-delay="0">View our menu</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination" data-bullet-custom="true"></div>
        <!-- Swiper Navigation-->
        <div class="swiper-button-prev">
          <div class="preview">
            <div class="preview__img"></div>
          </div>
          <div class="swiper-button-arrow"></div>
        </div>
        <div class="swiper-button-next">
          <div class="swiper-button-arrow"></div>
          <div class="preview">
            <div class="preview__img"></div>
          </div>
        </div>
      </section>




      <!-- What We Offer-->
      <section class="section section-md bg-default">
        <div class="container">
          <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Our Menu</span></h3>
          <div class="row row-md row-30">
            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- Services Terri-->
                <article class="services-terri wow slideInUp">
                  <div class="services-terri-figure"><img src="images/Salads.jpg" alt="" width="370" height="278"/>
                  </div>
                  <div class="services-terri-caption"><span class="services-terri-icon linearicons-leaf"></span>
                    <h5 class="services-terri-title"><a href="Menu.php">Salads</a></h5>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- Services Terri-->
                <article class="services-terri wow slideInDown">
                  <div class="services-terri-figure"></a><img src="images/Pizzas.jpg" alt="" width="370" height="278"/>
                  </div>
                  <div class="services-terri-caption"><span class="services-terri-icon linearicons-pizza"></span>
                    <h5 class="services-terri-title"><a href="Menu.php">Pizzas</a></h5>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- Services Terri-->
                <article class="services-terri wow slideInUp">
                  <div class="services-terri-figure"><img src="images/Burgers.jpg" alt="" width="370" height="278"/>
                  </div>
                  <div class="services-terri-caption"><span class="services-terri-icon linearicons-hamburger"></span>
                    <h5 class="services-terri-title"><a href="Menu.php">Burgers</a></h5>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- Services Terri-->
                <article class="services-terri wow slideInDown">
                  <div class="services-terri-figure"><img src="images/SeaFood.jpg" alt="" width="370" height="278"/>
                  </div>
                  <div class="services-terri-caption"><span class="services-terri-icon linearicons-steak"></span>
                    <h5 class="services-terri-title"><a href="Menu.php">Seafood</a></h5>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- Services Terri-->
                <article class="services-terri wow slideInDown">
                  <div class="services-terri-figure"><img src="images/Deserts.jpg" alt="" width="370" height="278"/>
                  </div>
                  <div class="services-terri-caption"><span class="services-terri-icon linearicons-ice-cream"></span>
                    <h5 class="services-terri-title"><a href="Menu.html#Desert">Desserts</a></h5>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- Services Terri-->
                <article class="services-terri wow slideInUp">
                  <div class="services-terri-figure"><img src="images/Drinks.jpg" alt="" width="370" height="278"/>
                  </div>
                  <div class="services-terri-caption"><span class="services-terri-icon linearicons-coffee-cup"></span>
                    <h5 class="services-terri-title"><a href="Menu.html#Drinks">Drinks</a></h5>
                  </div>
                </article>
              </div>
            </div>

          </div>
        </div>
      </section>

      <!-- Section CTA-->
      <section class="primary-overlay section parallax-container" data-parallax-img="images/bg.jpg">
      
        <div class="parallax-content section-xl context-dark text-md-left">
          <div class="container">
            <div class="row justify-content-end">
              <div class="col-sm-8 col-md-7 col-lg-5">
                <div class="cta-modern">
                  <h3 class="cta-modern-title wow fadeInRight">Best atmosphere</h3>
                  <p class="lead">PizzaHouse is the place of the best pizza and high-quality service.</p>
                  <p class="cta-modern-text oh-desktop" data-wow-delay=".1s"><span class="cta-modern-decor wow slideInLeft"></span><span class="d-inline-block wow slideInDown">Ben Smith, Founder</span></p><a class="button button-md button-secondary-2 button-winona wow fadeInUp" href="#" data-wow-delay=".2s">View Our Services</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Our Shop-->
      <section class="section section-lg bg-default">
        <div class="container">
          <h3 class="oh-desktop"><span class="d-inline-block wow slideInUp">Selected Pizzas</span></h3>
          <div class="row row-lg row-30">
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <!-- Product-->
              <article class="product wow fadeInLeft" data-wow-delay=".15s">
                <div class="product-figure"><img src="images/margherita.png" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star text-gray-13"></span>
                </div>
                <h6 class="product-title">Margherita Pizza</h6>
                <div class="product-price-wrap">
                  <div class="product-price">12.00DT</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><a class="button button-xs button-primary button-winona" href="#">Add to cart</a></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="#">View Product</a></div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <!-- Product-->
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="images/Mashroompizza.png" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Mushroom Pizza</h6>
                <div class="product-price-wrap">
                  <div class="product-price">20.00DT</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><a class="button button-xs button-primary button-winona" href="menu.php">Add to cart</a></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="#">View Product</a></div>
                </div><span class="product-badge product-badge-new">New</span>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <!-- Product-->
              <article class="product wow fadeInLeft" data-wow-delay=".05s">
                <div class="product-figure"><img src="images/HawaiianPizza.png" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star text-gray-13"></span>
                </div>
                <h6 class="product-title">Hawaiian Pizza</h6>
                <div class="product-price-wrap">
                  <div class="product-price">30.00DT</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><a class="button button-xs button-primary button-winona" href="menu.php">Add to cart</a></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="#">View Product</a></div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <!-- Product-->
              <article class="product wow fadeInLeft">
                <div class="product-figure"><img src="images/PestoPizza.png" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Pesto Pizza</h6>
                <div class="product-price-wrap">
                  <div class="product-price product-price-old">35.00DT</div>
                  <div class="product-price">25.00DT</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><a class="button button-xs button-primary button-winona" href="menu.php">Add to cart</a></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="#">View Product</a></div>
                </div><span class="product-badge product-badge-sale">Sale</span>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Section CTA-->
      <section class="primary-overlay section parallax-container" data-parallax-img="images/bg2.png">
        <div class="parallax-content section-xxl context-dark text-md-left">
          <div class="container">
            <div class="row justify-content-end">
              <div class="col-sm-9 col-md-7 col-lg-5">
                <div class="cta-modern">
                  <h3 class="cta-modern-title cta-modern-title-2 oh-desktop"><span class="d-inline-block wow fadeInLeft">-30% on all salads & drinks</span></h3>
                  <p class="cta-modern-text cta-modern-text-2 oh-desktop" data-wow-delay=".1s"><span class="cta-modern-decor cta-modern-decor-2 wow slideInLeft"></span><span class="d-inline-block wow slideInUp">Taste some of the best PizzaHouse salads!</span></p><a class="button button-lg button-secondary button-winona wow fadeInRight" href="contacts.html" data-wow-delay=".2s">contact us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
<?php 
try {
  $dns='mysql:host=localhost;dbname=gestion_livraison';
  $user='root';
  $password='';
  $conn= new PDO($dns,$user,$password);
}

catch (Exception $e)
{
  echo "Connection à MySQL impossible :",$e->getMessage();
  die();
}


  $res = $conn->query("SELECT * FROM comment limit 3 ");
    while( $rec = $res->fetch(PDO::FETCH_OBJ) )
    { 
     echo'<article class="box-icon-megan wow fadeInUp">
     <div class="box-icon-megan-header"> &nbsp;',$rec->username,'&nbsp; 
     </div>
     <h5 class="box-icon-megan-title"><a href="#">Client</a></h5>
     <p class="box-icon-megan-text">',$rec->comm,'</p>
   </article>
   
   ';
   
   }
   echo '<a class="button button-lg button-secondary button-winona wow fadeInRight" href="comment.php" data-wow-delay=".2s">comment</a>';
            

?>


          
      <section class="section section-last bg-default">
        <div class="container-fluid container-inset-0 isotope-wrap">
          <div class="row row-10 gutters-10 isotope" data-isotope-layout="masonry" data-isotope-group="gallery" data-lightgallery="group">
            <div class="col-xs-6 col-sm-4 col-xl-2 isotope-item oh-desktop">
              <!-- Thumbnail Mary-->
              <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInLeft"><a class="thumbnail-mary-figure" href="images/dilivery.png" data-lightgallery="item"><img src="images/dilivery.png" alt="" width="310" height="585"/></a>
                <div class="thumbnail-mary-caption">
                  <div>
                    <h6 class="thumbnail-mary-title"><a href="#">Fast Delivery</a></h6>
                    <div class="thumbnail-mary-location">Top-Priority</div>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-xs-6 col-sm-8 col-xl-4 isotope-item oh-desktop">
              <!-- Thumbnail Mary-->
              <article class="thumbnail thumbnail-mary thumbnail-mary-big wow slideInRight"><a class="thumbnail-mary-figure" href="images/ingredients.png" data-lightgallery="item"><img src="images/ingredients.png" alt="" width="631" height="587"/></a>
                <div class="thumbnail-mary-caption">
                  <div>
                    <h6 class="thumbnail-mary-title"><a href="#">Best Ingredients</a></h6>
                    <div class="thumbnail-mary-location">Fresh Meal</div>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-xs-6 col-sm-4 col-xl-2 isotope-item oh-desktop">
              <!-- Thumbnail Mary-->
              <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInDown"><a class="thumbnail-mary-figure" href="images/dishware.png" data-lightgallery="item"><img src="images/dishware.png" alt="" width="311" height="289"/></a>
                <div class="thumbnail-mary-caption">
                  <div>
                    <h6 class="thumbnail-mary-title"><a href="#">quality Dishware</a></h6>
                    <div class="thumbnail-mary-location">Top-notch utensils</div>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-xs-6 col-sm-8 col-xl-4 isotope-item oh-desktop">
              <!-- Thumbnail Mary-->
              <article class="thumbnail thumbnail-mary wow slideInUp"><a class="thumbnail-mary-figure" href="images/cocktails.png" data-lightgallery="item"><img src="images/cocktails.png" alt="" width="631" height="289"/></a>
                <div class="thumbnail-mary-caption">
                  <div>
                    <h6 class="thumbnail-mary-title"><a href="#">Refreshing cocktails</a></h6>
                    <div class="thumbnail-mary-location">Exclusive selection</div>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-xs-6 col-sm-4 col-xl-2 isotope-item oh-desktop">
              <!-- Thumbnail Mary-->
              <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInUp"><a class="thumbnail-mary-figure" href="images/exoticSalad.png" data-lightgallery="item"><img src="images/exoticSalad.png" alt="" width="311" height="289"/></a>
                <div class="thumbnail-mary-caption">
                  <div>
                    <h6 class="thumbnail-mary-title"><a href="#">Exotic Salads</a></h6>
                    <div class="thumbnail-mary-location">Summer Taste</div>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-xs-6 col-sm-4 col-xl-2 isotope-item oh-desktop">
              <!-- Thumbnail Mary-->
              <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInRight"><a class="thumbnail-mary-figure" href="images/pizza.png" data-lightgallery="item"><img src="images/pizza.png" alt="" width="311" height="289"/></a>
                <div class="thumbnail-mary-caption">
                  <div>
                    <h6 class="thumbnail-mary-title"><a href="#">All Types of pizza</a></h6>
                    <div class="thumbnail-mary-location">Special Recipes</div>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-xs-6 col-sm-4 col-xl-2 isotope-item oh-desktop">
              <!-- Thumbnail Mary-->
              <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInLeft"><a class="thumbnail-mary-figure" href="images/dish.png" data-lightgallery="item"><img src="images/dish.png" alt="" width="311" height="289"/></a>
                <div class="thumbnail-mary-caption">
                  <div>
                    <h6 class="thumbnail-mary-title"><a href="#">Diverse menu</a></h6>
                    <div class="thumbnail-mary-location">Pick Your Favorite dish</div>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
     
      
     
      <!-- Section Services  Last section-->
      <section class="section section-sm bg-default">
        <div class="container">
          <div class="owl-carousel owl-style-11 dots-style-2" data-items="1" data-sm-items="1" data-lg-items="2" data-xl-items="4" data-margin="30" data-dots="true" data-mouse-drag="true" data-rtl="true">
            <article class="box-icon-megan wow fadeInUp">
              <div class="box-icon-megan-header">
                <div class="box-icon-megan-icon linearicons-bag"></div>
              </div>
              <h5 class="box-icon-megan-title"><a href="#">Free Desert</a></h5>
              <p class="box-icon-megan-text">If you order more than 3 Meals, we will gladly offer a dessert for free.</p>
            </article>
            <article class="box-icon-megan wow fadeInUp" data-wow-delay=".05s">
              <div class="box-icon-megan-header">
                <div class="box-icon-megan-icon linearicons-map2"></div>
              </div>
              <h5 class="box-icon-megan-title"><a href="#">Convenient Location</a></h5>
              <p class="box-icon-megan-text">Our pizzeria is situated in the downtown and is very easy to reach even on weekends.</p>
            </article>
            <article class="box-icon-megan wow fadeInUp" data-wow-delay=".1s">
              <div class="box-icon-megan-header">
                <div class="box-icon-megan-icon linearicons-radar"></div>
              </div>
              <h5 class="box-icon-megan-title"><a href="#">Free Wi-Fi</a></h5>
              <p class="box-icon-megan-text">We have free Wi-Fi available to all clients and visitors of our pizzeria.</p>
            </article>
            <article class="box-icon-megan wow fadeInUp" data-wow-delay=".15s">
              <div class="box-icon-megan-header">
                <div class="box-icon-megan-icon linearicons-thumbs-up"></div>
              </div>
              <h5 class="box-icon-megan-title"><a href="#">Best Service</a></h5>
              <p class="box-icon-megan-text">The client is our #1 priority as we deliver top-notch customer service.</p>
            </article>
          </div>
        </div>
      </section>

<?php 
require'footer.php';
?>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    
  </body>
</html>