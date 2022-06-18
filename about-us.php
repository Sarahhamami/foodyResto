
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
    <title>About us</title>
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
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
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
                  <div class="rd-navbar-brand"><a class="brand" href="index.html"><img class="brand-logo-dark" src="images/foody.png" alt="" width="198" height="66"/></a></div>
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
                      <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                      <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                      <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                      <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                    </ul>
                  </div>
                  <div class="rd-navbar-main">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Home</a>
                      </li>
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="about-us.php">About us</a>
                      </li>
                      
                      <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.php">Contacts</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#"><?php if (isset($_SESSION['username'])){echo $_SESSION['username'];}
                        else{
                          echo'<li class="rd-nav-item"><a class="rd-nav-link" href="sign_in.php">Sign-in</a>';
                        }?> </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="rd-navbar-project-hamburger rd-navbar-project-hamburger-open rd-navbar-fixed-element-1" data-multitoggle=".rd-navbar-inner" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate="data-multitoggle-isolate">
                  <div class="project-hamburger"><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span>
                  </div>
                      </div>
                  <?php require('navbar.php'); ?>
                
                 </div>
      </header>
      <!-- parallax top-->
      <!-- Breadcrumbs -->
      <section class="bg-gray-7">
        <div class="breadcrumbs-custom box-transform-wrap context-dark">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">About us</h3>
            <div class="breadcrumbs-custom-decor"></div>
          </div>
          <div class="box-transform" style="background-image: url(images/bg.jpg);"></div>
        </div>
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.html">Home</a></li>
            <li class="active">About us</li>
          </ul>
        </div>
      </section>
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="tabs-custom row row-50 justify-content-center flex-lg-row-reverse text-center text-md-left" id="tabs-4">
            <div class="col-lg-4 col-xl-3">
              <h5 class="text-spacing-200 text-capitalize">10+ years of experience</h5>
              <ul class="nav list-category list-category-down-md-inline-block">
                <li class="list-category-item wow fadeInRight" role="presentation" data-wow-delay="0s"><a class="active" href="#tabs-4-1" data-toggle="tab">About us</a></li>
                <li class="list-category-item wow fadeInRight" role="presentation" data-wow-delay=".1s"><a href="#tabs-4-2" data-toggle="tab">Our Mission</a></li>
                <li class="list-category-item wow fadeInRight" role="presentation" data-wow-delay=".2s"><a href="#tabs-4-3" data-toggle="tab">Our Goals</a></li>
                <li class="list-category-item wow fadeInRight" role="presentation" data-wow-delay=".3s"><a href="#tabs-4-4" data-toggle="tab">Our Values</a></li>
              </ul><a class="button button-xl button-primary button-winona" href="contacts.html">Contact us</a>
            </div>
            <div class="col-lg-8 col-xl-9">
              <!-- Tab panes-->
              <div class="tab-content tab-content-1">
                <div class="tab-pane fade show active" id="tabs-4-1">
                  <h4>a few words about us</h4>
                  <p>Welcome to Foody, your number one source for Food delivery. We're dedicated to giving you the very best of food, with a focus on a good service, fast delivery, a free desert for whoever order 3 meals.


Founded in 2020 by Sarah Hammami and Mohamed Mefdaoui, Foody has come a long way from its beginnings in Tunisia. When Sarah Hammami and Mohamed Mefdaoui first started out, their passion for fast food delivery drove them to quit their day job and do tons of researchs so that Foody can offer you the best food that you can taste. We now serve customers all over the country, and are thrilled that we're able to turn our passion into our own website.


We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.</p>
<img src="images/about_us.png" alt="" width="835" height="418"/>
                </div>
                <div class="tab-pane fade" id="tabs-4-2">
                  <h4>Offering the Best Pizza in Tunisia</h4>
                  <p>Some wants to make lots of money and some wants to do what they're passionate about but we want to do both</p>
                 <img src="images/about_us.png" alt="" width="835" height="418"/>
                </div>
                <div class="tab-pane fade" id="tabs-4-3">
                  <h4>Providing Top Customer Service</h4>
                  <p>We want to provide the best service in Tunisia and worldwide </p><img src="images/about_us.png" alt="" width="835" height="418"/>
                </div>
                <div class="tab-pane fade" id="tabs-4-4">
                  <h4>Integrity & Dedication</h4>
                  <p>To provide the highest quality product at the lowest possible price, the best consumer experience in the industry, and respect for our employees, business partners, and community</p>
                  <img src="images/about_us.png" alt="" width="835" height="418"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Icon Classic-->
      <section class="section section-lg bg-gray-100">
        <div class="container">
          <div class="row row-md row-50">
            <div class="col-sm-6 col-xl-4 wow fadeInUp" data-wow-delay="0s">
              <article class="box-icon-classic">
                <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon linearicons-helicopter"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="#">Fast Delivery</a></h5>
                    <p class="box-icon-classic-text"></p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-xl-4 wow fadeInUp" data-wow-delay=".1s">
              <article class="box-icon-classic">
                <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon linearicons-pizza"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="#">multiple options</a></h5>
                    <p class="box-icon-classic-text"></p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-xl-4 wow fadeInUp" data-wow-delay=".2s">
              <article class="box-icon-classic">
                <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon linearicons-leaf"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="#">Fresh Ingredients</a></h5>
                    <p class="box-icon-classic-text"></p>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Our Team-->
      <section class="section section-lg section-bottom-md-70 bg-default">
        <div class="container">
          <h3 class="oh"><span class="d-inline-block wow slideInUp" data-wow-delay="0s">our team</span></h3>
          <div class="row row-lg row-40 justify-content-center">
            <div class="col-sm-6 col-lg-3 wow fadeInLeft" data-wow-delay=".2s" data-wow-duration="1s">
              <!-- Team Modern-->
              <article class="team-modern"><a class="team-modern-figure" href="#"><img src="images/team-01-270x236.jpg" alt="" width="270" height="236"/></a>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="#">Hammami Sarah</a></h6>
                  <div class="team-modern-status">CEO</div>
                  <ul class="list-inline team-modern-social-list">
                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                    <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                    <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                  </ul>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeInLeft" data-wow-delay="0s" data-wow-duration="1s">
              <!-- Team Modern-->
              <article class="team-modern"><a class="team-modern-figure" href="#"><img src="images/team-02-270x236.jpg" alt="" width="270" height="236"/></a>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="#">Mohamed Mefdaoui</a></h6>
                  <div class="team-modern-status">CEO</div>
                  <ul class="list-inline team-modern-social-list">
                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                    <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                    <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                  </ul>
                </div>
              </article>
            </div>
            
              </article>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-gray-100 text-left section-relative">
        <div class="container">
          <div class="row row-60 justify-content-center justify-content-xxl-between">
            <div class="col-lg-6 col-xxl-5 position-static">
              <h3>Our history</h3>
              <div class="tabs-custom" id="tabs-5">
                <div class="tab-content tab-content-1">
                  <div class="tab-pane fade" id="tabs-5-1">
                    <h5 class="font-weight-normal text-transform-none text-spacing-75">Foody Establishment and First Happy Clients</h5>
                    <p>We started as students willing to do what they're passionate about with delivering to their friends the meal that they wish they eat.</p>
                  </div>
                  <div class="tab-pane fade" id="tabs-5-2">
                    <h5 class="font-weight-normal text-transform-none text-spacing-75">Organizing a Pizza Delivery Service in Tunisia</h5>
                    <p>At first we only started by delivering pizzas to our locals.</p>
                  </div>
                  <div class="tab-pane fade show active" id="tabs-5-4">
                    <h5 class="font-weight-normal text-transform-none text-spacing-75">Not only pizza but multiple menu options</h5>
                    <p>Now we have more options and faster delivery to multiple places in Tunisia and hoping we extend our work in other countries.</p>
                  </div>
                </div>
                <div class="list-history-wrap">
                  <ul class="nav list-history">
                    <li class="list-history-item" role="presentation"><a href="#tabs-5-1" data-toggle="tab">
                        <div class="list-history-circle"></div>2020</a></li>
                    <li class="list-history-item" role="presentation"><a href="#tabs-5-2" data-toggle="tab">
                        <div class="list-history-circle"></div>2021</a></li>
                    <li class="list-history-item" role="presentation"><a class="active" href="#tabs-5-4" data-toggle="tab">
                        <div class="list-history-circle"></div>2022</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-9 col-lg-6 position-static index-1">
              <div class="bg-image-right-1 bg-image-right-lg"><img src="images/our_history-1110x710.jpg" alt="" width="1110" height="710"/>
                <div class="link-play-modern">
                  <div class="link-play-modern-decor"></div>
                </div>
                <div class="box-transform" style="background-image: url(images/bg.png);"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
<?php require 'footer.php'; ?>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>