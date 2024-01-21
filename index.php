<?php

include('database.php');
include('./Functions/Common_Functions.php');

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en-US"> <!--<![endif]-->

<head>
  <title>Digilog Electronics-Digilog.pk</title>

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
  <!-- Animate on scroll css-->
  <!-- Include AOS library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</head>
<style>
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

  .section-products .single-product .part-1 {
    height: 200px;
    width: 100%;
  }

  .product-img {
    object-fit: contain;
  }

  #search_form {
    display: contents;
  }

  .Search_click {
    background-color: #F3F3F3;
    height: 32px;
  }




  /* Title Limit */
  .card-title {
    display: -webkit-box;
    -webkit-box-orient: vertical;
    overflow: hidden;
    -webkit-line-clamp: 2;
  }


  /* WHATSAPP ICON  */
  .whatsapp-icon-link {
    display: inline-block;
    position: fixed;
    bottom: 20px;
    right: 20px;
    text-decoration: none;
  }

  .whatsapp-icon-link img {
    width: 50px;
    height: auto;
    border-radius: 50%;
  }


  .whatsapp-icon-link:hover {
    transform: scale(1.1);
  }

  /*  Customer Review */
  .card-css {
    border-radius: .7rem;
  }
</style>


</head>

<body>

  <!-- WHATSAPP ICON -->
  <div class="whatsapp-icon-link-div">
    <a style="z-index: 1;" data-aos="fade-left" data-aos-duration="1000" href="https://wa.me/message/QMU3ADQXKCE5M1" target="_blank" class="whatsapp-icon-link">
      <img src="https://play-lh.googleusercontent.com/bYtqbOcTYOlgc6gqZ2rwb8lptHuwlNE75zYJu6Bn076-hTmvd96HH-6v7S0YUAAJXoJN=w240-h480-rw" alt="WhatsApp Icon">
    </a>
  </div>
  <!-- WHATSAPP ICON END -->


  <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <!-- Header -->
  <?php
  include('./Header.php');
  ?>

  <!-- *******Section Start******** -->
  <section>
    <div class="container p-4 vw-100">
      <div data-aos="fade-up" id="silder-container" class=" container mt- mb-2">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img id="carousel-img" src="images/silder1.jpg" class="d-block w-100" alt="images/silder1">
            </div>
            <div class="carousel-item">
              <img id="carousel-img" src="images/silder2.jpg" class="d-block w-100" alt="images/silder2">
            </div>
            <div class="carousel-item">
              <img id="carousel-img" src="images/silder3.jpg" class="d-block w-100" alt="images/silder3">
            </div>
          </div>
          <button id="carousel-control-prev" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button id="carousel-control-next" class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div data-aos="fade-up" data-aos-delay="250">
        <h2 id="heading1" class="fw-bold">Top Categories:</h2>

      </div>
      <div class="main-Categories p-2 mt-1">
        <div class="container">
          <div class="row">
            <?php
            $select_category = "SELECT * from `catagories` limit 4";
            $Atfer_select = mysqli_query($conn, $select_category);
            while ($final_result = mysqli_fetch_assoc($Atfer_select)) {
              $Category_tittle  = $final_result['Category_tittle'];
              $Category_Image  = $final_result['Category_Image'];

              echo "<div data-aos='fade-right' data-aos-delay='550' class='mb-1 col-lg-3 col-md-6 col-6'>
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
        <div id="view_all_button" data-aos="fade-up" data-aos-delay="200" class="d-flex justify-content-center">
          <a href="Category.php"><button class="bn632-hover bn21">View all</button></a>
        </div>
      </div>
    </div>
  </section>

  <section id="section-products" class="section-products">
    <div class="container">
      <h2 class="fw-bold" id="heading1" data-aos='fade-right' data-aos-delay='250'>Featured Products</h2>
      <div class="row ">
        <!-- Single Product -->
        <?php
        if (!isset($_GET['Category'])) {
          if (!isset($_GET['Brands'])) {


            $select_product_detail = "SELECT * from `products` limit 4";
            $connect_data = mysqli_query($conn, $select_product_detail);
            while ($drag_row_data = mysqli_fetch_assoc($connect_data)) {

              $Product_image1 = $drag_row_data['Product_image1'];
              $Product_image2 = $drag_row_data['Product_image2'];
              $Product_image3 = $drag_row_data['Product_image3'];
              $Product_ID = $drag_row_data['Product_ID'];
              $Product_title = $drag_row_data['Product_Title'];
              $Product_Description = $drag_row_data['Product_Description'];
              $Product_Keywords = $drag_row_data['Product_Keywords'];
              $Product_Price = $drag_row_data['Product_Price'];
              $Category_id = $drag_row_data['Category_id'];
              $Brands_id = $drag_row_data['Brands_id'];

              echo "<div class='p-2 col-lg-3 col-md-6 col-6' data-aos='fade-up' data-aos-delay='250'>
                  <div id='Product_card' class='card border-0'>
                       <a class='text-decoration-none ' href='Product_details_page.php?Product=$Product_ID'>
                          <img src='Admin_area/Products_image/$Product_image1' class='card-img-top' alt='Product-img'>
                      <div style='height: 5rem;'' class='card-body'>
                      <h6 class='card-title'>$Product_title</h6>
                      <span>Rs " . number_format($Product_Price,) . " PKR</span>
                      </a>
                      </div>
                      <div class='card-body'>
                          <div class='page-wrapper'>
                          <a href='?add_to_cart=$Product_ID'><button id='addtocart'><i class='fa-solid fa-cart-shopping'></i>
                                Add to Cart
                </button></a>";
              MainCart();
              echo "
                </div>
                </div>
                </div>
                </div>";
            }
          }
        }
        ?>
        <div id="view_all_button" class="h d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <a href="Product_page.php"><button class="bn632-hover bn21">View all</button></a>
        </div>
      </div>
    </div>
  </section>


  <section class="my-5">
    <div class="container py-2">
      <div class="col-md-10 col-xl-8">
        <h3 class="fw-bold mb-4" data-aos='fade-right' data-aos-delay='250'>Customers Review</h3>
        <p class="mb-4 pb-2 mb-md-5 pb-md-0" data-aos='fade-right' data-aos-delay='300'>
          Discover what our valued customers have to say about their experiences. Dive into genuine feedback that reflects our commitment to quality and satisfaction.
        </p>
      </div>
      <div class="row text-center">
        <div class="col-md-4 mb-4 mb-md-0">
          <div class="card card-css" data-aos="fade-up" data-aos-delay="250">
            <div class="card-body py-4 mt-2">
              <div class="d-flex justify-content-center mb-4">
                <img src="./images/blank-profile-picture-973460_1280.png" class="rounded-circle shadow-1-strong" width="100" height="100" />
              </div>
              <h5 class="font-weight-bold">Teresa May</h5>
              <h6 class="font-weight-bold my-3">Founder at ET Company</h6>
              <ul class="list-unstyled d-flex justify-content-center">
                <li>
                  <i class="fas fa-star fa-sm text-warning"></i>
                </li>
                <li>
                  <i class="fas fa-star fa-sm text-warning"></i>
                </li>
                <li>
                  <i class="fas fa-star fa-sm text-warning"></i>
                </li>
                <li>
                  <i class="fas fa-star fa-sm text-warning"></i>
                </li>
                <li>
                  <i class="fas fa-star-half-alt fa-sm text-warning"></i>
                </li>
              </ul>
              <p class="mb-2">
                <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet,
                consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat
                ad velit ab hic tenetur.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4 mb-md-0">
          <div class="card card-css" data-aos="fade-up" data-aos-delay="250">
            <div class="card-body py-4 mt-2">
              <div class="d-flex justify-content-center mb-4">
                <img src="./images/blank-profile-picture-973460_1280.png" class="rounded-circle shadow-1-strong" width="100" height="100" />
              </div>
              <h5 class="font-weight-bold">Maggie McLoan</h5>
              <h6 class="font-weight-bold my-3">Photographer at Studio LA</h6>
              <ul class="list-unstyled d-flex justify-content-center">
                <li>
                  <i class="fas fa-star fa-sm text-warning"></i>
                </li>
                <li>
                  <i class="fas fa-star fa-sm text-warning"></i>
                </li>
                <li>
                  <i class="fas fa-star fa-sm text-warning"></i>
                </li>
                <li>
                  <i class="fas fa-star fa-sm text-warning"></i>
                </li>
                <li>
                  <i class="fas fa-star fa-sm text-warning"></i>
                </li>
              </ul>
              <p class="mb-2">
                <i class="fas fa-quote-left pe-2"></i>Autem, totam debitis suscipit saepe
                sapiente magnam officiis quaerat necessitatibus odio assumenda perferendis
                labore laboriosam.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-0">
          <div class="card card-css" data-aos="fade-up" data-aos-delay="250">
            <div class="card-body py-4 mt-2">
              <div class="d-flex justify-content-center mb-4">
                <img src="./images/blank-profile-picture-973460_1280.png" class="rounded-circle shadow-1-strong" width="100" height="100" />
              </div>
              <h5 class="font-weight-bold">Alexa Horwitz</h5>
              <h6 class="font-weight-bold my-3">Front-end Developer in NY</h6>
              <ul class="list-unstyled d-flex justify-content-center">
                <li>
                  <i class="fas fa-star fa-sm text-warning"></i>
                </li>
                <li>
                  <i class="fas fa-star fa-sm text-warning"></i>
                </li>
                <li>
                  <i class="fas fa-star fa-sm text-warning"></i>
                </li>
                <li>
                  <i class="fas fa-star fa-sm text-warning"></i>
                </li>
                <li>
                  <i class="far fa-star fa-sm text-warning"></i>
                </li>
              </ul>
              <p class="mb-2">
                <i class="fas fa-quote-left pe-2"></i>Cras sit amet nibh libero, in gravida
                nulla metus scelerisque ante sollicitudin commodo cras purus odio,
                vestibulum in tempus viverra turpis.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  </section>



  <!-- Footer -->
  <?php
  include('./footer.php');
  ?>







  <!-- Animate on Scroll js-->
  <!-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script> -->
  <script>
    AOS.init({
      duration: 1000,
    });
  </script>
  <!-- Bootstrap JS and Popper.js (required for Bootstrap) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap Js -->
  <script src="Assets/Bootstrap/Js/bootstrap.bundle.min.js"></script>
  <script src="Assets/Bootstrap/Js/jquery.slim.min.js"></script>
  <!-- Main Js -->
  <script src="script.js"></script>
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <!-- Iconicons Js -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <!-- seo tags -->
  <link rel="stylesheet" type="text/css" href="/" media="print" />
  <script src="" async defer></script>
</body>

</html>