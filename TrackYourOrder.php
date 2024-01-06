<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="shortcut icon" href="images/favicon.png" type="images/x-icon" />
  <!-- |Main Css| -->
  <link rel="stylesheet" href="style.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap Css -->
  <link rel="stylesheet" href="Assets/Bootstrap/Css/bootstrap.min.css" />

  <!-- Main Js -->
  <script src="script.js"></script>
  <!-- Bootstrap Js -->
  <script src="Assets/Bootstrap/Js/bootstrap.bundle.min.js"></script>
  <script src="Assets/Bootstrap/Js/jquery.slim.min.js"></script>
  <!-- Iconicons Js -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <style>
    .bn31 {
      background-image: linear-gradient(to right, #006175 0%, #00a950 100%);
      border-radius: 40px;
      box-sizing: border-box;
      color: #00a84f;
      display: block;
      height: 50px;
      font-size: 1.4em;
      padding: 4px;
      position: relative;
      text-decoration: none;
      width: 100%;
      z-index: 2;
    }

    .bn31:hover {
      color: #fff;
    }

    .bn31 .bn31span {
      align-items: center;
      background: #0e0e10;
      border-radius: 40px;
      display: flex;
      justify-content: center;
      height: 100%;
      transition: background 0.5s ease;
      width: 100%;
    }

    .bn31:hover .bn31span {
      background: transparent;
    }


    .navbar-collapse {
      margin-top: -22px;
    }

    #nav-item-link:before {
      bottom: -28px;
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

    .email-Subscribe {
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
      .email-Subscribe {
        width: 100%;
      }
    }

    @media (min-width: 375px) {
      #email-for-footer-Subscribe {
        width: 95%;
      }
    }

    @media screen and (min-width: 768px) {
      .email-Subscribe {
        width: 50%;
      }
    }

    @media screen and (min-width: 768px) {
      #email-for-footer-Subscribe {
        width: 90%;
      }
    }
  </style>

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

</head>

<body>
  <?php
  include('./Functions/Common_Functions.php');
  include('Header.php');

  ?>






  <section class="vh-100">
    <div class="container">
      <div class="display-6 me-4 my-5 display-6">Track Your Order</div>

      <div class="disply-6 d-flex justify-content-center mt=5">ORDER TRACKING</div>
      <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card-body p-4 p-sm-5">

              <div class="form-floating mb-3">
                <input required type="text" class="form-control" id="floatingInput" placeholder="Full Name">
                <label for="floatingInput">Order ID</label>
              </div>

              <div class="form-floating mb-3">
                <input required type="tel" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Mobile Number</label>
                <a class="bn31 mt-3 text-center" href="/"><span class="bn31span">TRACK NOW</span></a>

              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>














    </div>
  </section>
  <?php

  include('footer.php');
  ?>
</body>

</html>