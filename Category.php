<?php

include('database.php');
include('./Functions/Common_Functions.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Categroies</title>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="pingback" href="https: //domainname.com/xmlrpc.php" />
  <title></title>
  <!-- style and script resources -->
  <link rel="stylesheet" href="" media="all">
  <script src=""></script>
  <!--meta properties -->
  <meta name="description" content=" Your site description." />
  <!--detailed robots meta https://developers.google.com/search/reference/robots_meta_tag -->
  <meta name="robots" content="index, follow, max-snippet: -1, max-image-preview:large, max-video-preview: -1" />
  <link rel="canonical" href="" />
  <!--open graph meta tags for social sites and search engines-->
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="  Opengraph content 25 char are best" />
  <meta property="og:description" content="  #description." />
  <meta property="og:url" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:image" content="images//hom-banner-compressed.jpg" />
  <meta property="og:image:secure_url" content="images//hom-banner-compressed.jpg" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="660" />
  <!--twitter description-->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:description" content="." />
  <meta name="twitter:title" content="" />
  <meta name="twitter:site" content="@" />
  <meta name="twitter:image" content="images/hom-banner-compressed.jpg" />
  <meta name="twitter:creator" content="@" />
  <!--opengraph tags for location or address for information panel in google-->
  <meta name="og:latitude" content="" />
  <meta name="og:longitude" content="" />
  <meta name="og:street-address" content="" />
  <meta name="og:locality" content="" />
  <meta name="og:region" content="" />
  <meta name="og:postal-code" content="" />
  <meta name="og:country-name" content="" />
  <!--search engine verification-->
  <meta name="google-site-verification" content="" />
  <meta name="yandex-verification" content="" />
  <!--powered by meta-->
  <meta name="generator" content="" />
  <!-- Site fevicon icons -->
  <link rel="icon" href="images/favicon.png" sizes="32x32" />
  <link rel="icon" href="images/favicon.png" sizes="192x192" />
  <link rel="apple-touch-icon-precomposed" href="images/favicon.png" />
  <meta name="msapplication-TileImage" content="images/favicon.png" />
  <!--complete list of meta tags at - https://gist.github.com/lancejpollard/1978404 -->
  <!-- |favicon| -->
  <link rel="shortcut icon" href="images/favicon.png" type="images/x-icon" />
  <!-- |Main Css| -->
  <link rel="stylesheet" href="style.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap Css -->
  <link rel="stylesheet" href="Assets/Bootstrap/Css/bootstrap.min.css" />
  <!-- Swiper Css -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <style>
    .hero {
      width: 100%;
      height: 500px;
      background-color: #fff;
    }

    /********* Footer ************/

    .footer {
      background-color: #F8F9FA;

    }

    #email-for-footer-Subscribe {
      outline: #000;
      background-color: #F8F9FA;
      border: 0;
      width: 95%;
    }

    .form-floating {
      display: flex;
      border: 1px solid #000;
      width: 30%;
      align-items: center;
    }

    .arrow-for-Subscribe {
      padding: 5px;
      width: 30px;
      height: 30px;
    }

    footer {
      display: flex;
      align-items: center;
      text-align: center;
      justify-content: center;
    }

    .rating {
      background-color: #fff;
    }

    @media (min-width: 375px) {
      .form-floating {
        width: 100%;
      }
    }

    @media (min-width: 375px) {
      #email-for-footer-Subscribe {
        width: 95%;
      }
    }

    @media screen and (min-width: 768px) {
      .form-floating {
        width: 50%;
      }
    }

    @media screen and (min-width: 768px) {
      #email-for-footer-Subscribe {
        width: 90%;
      }
    }


    /* WHATSAPP ICON  */
    .whatsapp-icon-link {
      display: inline-block;
      position: fixed;
      bottom: 20px;
      right: 20px;
      text-decoration: none;
      -webkit-animation: scale-up-right 0.4s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;
      animation: scale-up-right 0.4s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;
    }

    @-webkit-keyframes scale-up-right {
      0% {
        -webkit-transform: scale(0.5);
        transform: scale(0.5);
        -webkit-transform-origin: 100% 50%;
        transform-origin: 100% 50%;
      }

      100% {
        -webkit-transform: scale(1);
        transform: scale(1);
        -webkit-transform-origin: 100% 50%;
        transform-origin: 100% 50%;
      }
    }

    @keyframes scale-up-right {
      0% {
        -webkit-transform: scale(0.5);
        transform: scale(0.5);
        -webkit-transform-origin: 100% 50%;
        transform-origin: 100% 50%;
      }

      100% {
        -webkit-transform: scale(1);
        transform: scale(1);
        -webkit-transform-origin: 100% 50%;
        transform-origin: 100% 50%;
      }
    }


    .whatsapp-icon-link img {
      width: 50px;
      height: auto;
      border-radius: 50%;
    }


    .whatsapp-icon-link:hover {
      transform: scale(1.1);
    }
  </style>


</head>

<body>

  <!-- WHATSAPP ICON -->

  <a style="z-index: 1;" href="https://wa.me/message/QMU3ADQXKCE5M1" target="_blank" class="whatsapp-icon-link">
    <img src="https://play-lh.googleusercontent.com/bYtqbOcTYOlgc6gqZ2rwb8lptHuwlNE75zYJu6Bn076-hTmvd96HH-6v7S0YUAAJXoJN=w240-h480-rw" alt="WhatsApp Icon">
  </a>

  <!-- WHATSAPP ICON END -->

  <!-- Header -->

  <?php
  include('./Header.php');
  ?>

  <!-- *******Section Start******** -->


  <section>
    <div class="container">
      <h2 id="heading1" class="text-center py-3">Categories
      </h2>
    </div>
    <br>
    <div class="main-Categories p-2 mt-1">
      <div class="container">
        <div class="row">
          <?php

          $select_category = "SELECT * from `catagories`";
          $Atfer_select = mysqli_query($conn, $select_category);
          while ($final_result = mysqli_fetch_assoc($Atfer_select)) {
            $Category_tittle  = $final_result['Category_tittle'];
            $Category_Image  = $final_result['Category_Image'];

            echo "<div class='mb-1 col-lg-3 col-md-6 col-6'>
                    <div class='categories-card d-inline-block'>
                        <a href='Product_page.php'>
                            <img class='categories-card-img w-100' src='Admin_area/Category_Image/$Category_Image' alt='Category-Image'>
                            <a class='text-decoration-none text-dark p-2 d-flex align-items-center' href=''>
                            <span> $Category_tittle </span>
                            <ion-icon name='arrow-forward-outline'></ion-icon>
                            </a>
                            </a>
                        </div>
                    </div>";
          }
          ?>

        </div>
      </div>
    </div>
    </div>
  </section>

  <div class="hero"></div>



  <!-- Footer -->
  <?php
  include('./footer.php');
  ?>




  <!-- Main Js -->
  <script src="script.js"></script>
  <!-- Bootstrap Js -->
  <script src="Assets/Bootstrap/Js/bootstrap.bundle.min.js"></script>
  <script src="Assets/Bootstrap/Js/jquery.slim.min.js"></script>
  <!-- Iconicons Js -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>