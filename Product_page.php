<?php
include("database.php");
include("Functions/Common_Functions.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
  <script>
    // Search Box 
    document.addEventListener('DOMContentLoaded', function() {

      let searchbtn = document.querySelector('#Search-btn');
      let searchclose = document.querySelector('#Search-close');
      let searchbox = document.querySelector('.Search-box');
      let sectionfirst = document.querySelector('#section-first')

      searchbtn.onclick = function() {

        searchbox.classList.add('active');
        sectionfirst.classList.add('active');

      }
      searchclose.onclick = function() {

        sectionfirst.classList.remove('active');
        searchbox.classList.remove('active');
      }

    });

  </script>
  <!-- Bootstrap Js -->
  <script src="Assets/Bootstrap/Js/bootstrap.bundle.min.js"></script>
  <script src="Assets/Bootstrap/Js/jquery.slim.min.js"></script>
  <!-- Bootstrap 4 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Iconicons Js -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
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
  <!-- Jqurey -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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

    /* Product */
    .card-img-top {
      height: 200px;
      width: 100%;
      object-fit: contain;
    }

    #search_form {
      display: contents;
    }

    .Search_click {
      background-color: #F8F9FA;
      height: 32px;
    }

    /* Title Limit */
    .card-title {
      display: -webkit-box;
      -webkit-box-orient: vertical;
      overflow: hidden;
      -webkit-line-clamp: 2;
    }
  </style>
</head>

<body>

  <?php
  include('./Header.php');
  ?>





  <section>
    <div class="container">
      <h2 class="text-center py-3">Products</h2>
      <div class="row">
        <div class="mt-4 col-md-2">
          <h6>Filter:</h6>
          <hr>
          <a class="nav-link d-flex align-content-center" data-toggle="collapse" href="#category-link">
            <h6 class="d-inline-block" style="width: 95%;">Catagories
            </h6>
            <ion-icon class="mt-1 d-flex" name="add-circle-outline"></ion-icon>
          </a>
          <div id="category-link" class="collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <?php
              viewcatagories()
              ?>
            </ul>
          </div>
          <hr>
          <a class="nav-link d-flex align-content-center" data-toggle="collapse" href="#Brand-link">
            <h6 class="d-inline-block" style="width: 95%;">Brands
            </h6>
            <ion-icon class="mt-1 d-flex" name="add-circle-outline"></ion-icon>
          </a>
          <div id="Brand-link" class="collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <?php
              viewbrands()
              ?>
            </ul>
          </div>
          <hr>
          <a class="nav-link d-flex align-content-center" data-toggle="collapse" href="#Pirce-range">
            <h6 class="d-inline-block" style="width: 95%;">Pirce range
            </h6>
            <ion-icon class="mt-1 d-flex" name="add-circle-outline"></ion-icon>
          </a>
          <div id="Pirce-range" class="collapse">

          </div>




        </div>
        <div class="col-md-10">
          <div class="row">
            <?php
            viewproduct();
            viewunqiuecatgories();
            viewunqiuebrands();
            ?>
          </div>
        </div>
      </div>






    </div>
  </section>






  <?php
  include('./footer.php')
  ?>

</body>

</html>