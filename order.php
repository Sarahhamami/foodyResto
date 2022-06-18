<?php
session_start();
require '_header.php';
date_default_timezone_set( 'Africa/Tunis');
$id= rand();
print $id;
$username=$_SESSION['username'];
$date_ins=date('Y-m-d h:i:s');
$rec1= $DB->query("SELECT ID_paiement FROM paiement where desc_paiement='cash'");
  $rec2= $DB->query("SELECT id_liv FROM deliveryguy where etat='Free' LIMIT 1" );

    $rec3=$DB->query("SELECT id,sum(price) as TP FROM cart");
  $sth = $DB->query("INSERT INTO orders ( ID_order , userName, ID_Paiement, dateord, etat ,id_liv, totalPrice ) VALUES ('$id', '$username', '$rec1->ID_paiement','$date_ins', 'non payé' ,'$rec2->id_liv' ,'$rec3->TP' )");


  $rec3= $DB->query("UPDATE deliveryguy SET etat='Busy' where id_liv= $rec2->id_liv");

  $del= $DB->query("DELETE FROM cart");

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: loggin/login.php");
    exit;
}

?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Menu</title>
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
                      <li class="rd-nav-item "><a class="rd-nav-link" href="about-us.php">About us</a>
                      </li>
                      
                      <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.php">Contacts</a>
                      </li>
                      <li class="rd-nav-item "><a class="rd-nav-link" href="#"><?php if (isset($_SESSION['username'])){echo $_SESSION['username'];}
                      else{
                        echo'<li class="rd-nav-item"><a class="rd-nav-link" href="sign_in.php">Sign-in</a>';
                      }?> </a>
                      </li>
                      <li class="rd-nav-item"><a class="brand" href="cart.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABmJLR0QA/wD/AP+gvaeTAAACrklEQVRYhe2WzU8TQRjGn8HSatvtku2mEkg09APaYKUVesCbBxLRoyYcWhMTw4XEGBOOHnrxPzBevXkw8WA0hqRWKGJQBGxM+JBWpIhpKFuUgg32azxok9KvHUqoHPgle9h53tl55t33nQxwzFHD5XIkRFGg+edib0/8MNdrKB4ghNDC96XQsjA0eNNRNwNTUx95SdokkrRJTKa2nwCQ/J28UjcDhegFfhUAdn4le/+LAR2n/QQAia0t22EZUFQT1Wr1OABPYvuHKbHeTa+7o5gN7ta8mLOLy/j8kcbCsaoZUCh1LwghiKzGkMlQNFSNlmclkizZMJGbZLNa0htSXDHyrA3t5vIxxs6vAIDlubay+tt3u7hxKwpnF5f1+SN7TMjuyWAQJACYX2yUC61IOJwCALS2coliTdYAzzeFAWDhc65mA6EvaQCAwcBF9m1Ax6lnAGApXHvxLf3LgMBr3xdrVbsAANRajQ/AncD4Goyd1WPztVAJjfbkk+Ix2QykUgo/IbK1KotCQXD77vPXxeNMX3Y67Mlva99PPX3cCmeXskSv1gUFHVByBgAMGQAAUWyKAsD84gmW8D3kO6ClhdsupzMZ0PG6RQCYWyjdvRz5Djht4FZqN6DjRwEgMLGF9ZiWeXEpnkVgIgkAEEXNWLkY2S4AAEqVD5qbDfej0Ziy99JGxbhKXXD2jJC2nTPeK6cx/dRgMJgZuNb/JpOjV7cTO5psNssyDSqVCh0d5pjdfr5/ePjRMtOkerOvBvd6h7ThUPzV9PSsCwS0p/vCB7NF3+f1Ptxh0Q+Mxz0wWXhhFUWBetwDk6z6gbFaLRlRFGhgdISO+V9SURSozdqeZdXLUdMVg+ZyoPTv5ZmC0v3qNXMYv4DpHMhjtuj7LqPPNz0z6wKAfJGx6sccSf4A6eYk+59xYb0AAAAASUVORK5CYII="/></a> </li>
                      <li class="rd-nav-item "><i class="bi bi-cart3"></i></li>
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
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- parallax top-->
      <!-- Breadcrumbs -->
      <section class="bg-gray-7">
        <div class="breadcrumbs-custom box-transform-wrap context-dark">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Your Cart</h3>
            <div class="breadcrumbs-custom-decor"></div>
          </div>
          <div class="box-transform" style="background-image: url(images/bg.jpg);"></div>
        </div>
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.html">Home</a></li>
            <li class="active">Cart</li>
          </ul>
        </div>
        <div>
        
                 <h2> <p class="q">we have received your order </p> </h2>
               


<?php require 'footer.php' ?>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>




<?php