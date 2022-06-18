<?php session_start();
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
                <div class="rd-navbar-project">
                  <div class="rd-navbar-project-header">
                    <h5 class="rd-navbar-project-title">Gallery</h5>
                    <div class="rd-navbar-project-hamburger rd-navbar-project-hamburger-close" data-multitoggle=".rd-navbar-inner" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate="data-multitoggle-isolate">
                      <div class="project-close"><span></span><span></span></div>
                    </div>
                  </div>
                  <div class="rd-navbar-project-content rd-navbar-content">
                    <div>
                      <div class="row gutters-20" data-lightgallery="group">
                        <div class="col-6">
                          <!-- Thumbnail Creative-->
                          <article class="thumbnail thumbnail-creative"><a href="images/project-1-1200x800-original.jpg" data-lightgallery="item">
                              <div class="thumbnail-creative-figure"><img src="images/project-1-195x164.jpg" alt="" width="195" height="164"/>
                              </div>
                              <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
                        </div>
                        <div class="col-6">
                          <!-- Thumbnail Creative-->
                          <article class="thumbnail thumbnail-creative"><a href="images/project-2-1200x800-original.jpg" data-lightgallery="item">
                              <div class="thumbnail-creative-figure"><img src="images/project-2-195x164.jpg" alt="" width="195" height="164"/>
                              </div>
                              <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
                        </div>
                        <div class="col-6">
                          <!-- Thumbnail Creative-->
                          <article class="thumbnail thumbnail-creative"><a href="images/project-3-1200x800-original.jpg" data-lightgallery="item">
                              <div class="thumbnail-creative-figure"><img src="images/project-3-195x164.jpg" alt="" width="195" height="164"/>
                              </div>
                              <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
                        </div>
                        <div class="col-6">
                          <!-- Thumbnail Creative-->
                          <article class="thumbnail thumbnail-creative"><a href="images/project-4-1200x800-original.jpg" data-lightgallery="item">
                              <div class="thumbnail-creative-figure"><img src="images/project-4-195x164.jpg" alt="" width="195" height="164"/>
                              </div>
                              <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
                        </div>
                        <div class="col-6">
                          <!-- Thumbnail Creative-->
                          <article class="thumbnail thumbnail-creative"><a href="images/project-5-1200x800-original.jpg" data-lightgallery="item">
                              <div class="thumbnail-creative-figure"><img src="images/project-5-195x164.jpg" alt="" width="195" height="164"/>
                              </div>
                              <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
                        </div>
                        <div class="col-6">
                          <!-- Thumbnail Creative-->
                          <article class="thumbnail thumbnail-creative"><a href="images/project-6-1200x800-original.jpg" data-lightgallery="item">
                              <div class="thumbnail-creative-figure"><img src="images/project-6-195x164.jpg" alt="" width="195" height="164"/>
                              </div>
                              <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
                        </div>
                          <div class="thumbnail-creative-caption"> <a class="button button-lg button-primary button-winona button-shadow-2" href="dissconnect.php" data-caption-animate="fadeInUp" data-caption-delay="300">Disconnect</a></div>
                          <div class="thumbnail-creative-caption"> <a class="button button-lg button-primary button-winona button-shadow-2" href="comment.php" data-caption-animate="fadeInUp" data-caption-delay="300">Comment</a></div>
                      
                      </div>
                    </div>
                  </div>
                </div>
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
                    <p class="big swiper-text" data-caption-animate="fadeInLeft" data-caption-delay="300">Experience the taste of a perfect meal at our Fast-Food house, one of the best restaurants!</p><a class="button button-lg button-primary button-winona button-shadow-2" href="Menu.php" data-caption-animate="fadeInUp" data-caption-delay="300">View our menu</a>
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
      <form method="POST" action="comment.php">
      <section class="section section-xl bg-default">
     <div class="container container-style-1">
              <div class="quote-tara-caption">
                <div class="quote-tara-text">
              </div>
                    
                  <label class="form-label" for="contact-message-6">Comment</label>
                  <textarea class="form-input textarea-lg" id="contact-message-6" name="message" ></textarea>
                  <input type="submit" class="button button-lg button-primary button-winona button-shadow-2"  data-caption-animate="fadeInUp" data-caption-delay="300" name="comment" value="Send you comment">
                </div>
              </div>
              
                    </form>
                    <?php
                    $id=rand();
$username=$_SESSION["username"];
$host='localhost';
$user='root';
$pw='';
$db="gestion_livraison";
$conx= mysqli_connect ($host, $user,$pw,$db);
if ($conx==false){
echo "error connextion";
}
else {
if (isset($_POST["comment"])){
    if(isset($_POST["message"])){
        $com=$_POST["message"];
        $sql="INSERT INTO `comment` (`id`, `username`, `comm`) VALUES
        ('$id', '$username', '$com');";
        mysqli_query($conx,$sql);
        echo '<div class="container">
        <article class="quote-classic quote-classic-3 wow slideInDown">
        <div class="quote-classic-text">
          <p class="q">Your comment is sent!</p>
        </div>
      </article>
      </div>';
    }
}}
?>
            <?php require 'footer.php'; ?>

         <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    
  </body>
</html>