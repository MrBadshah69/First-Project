<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conatct</title>
  <link rel="icon" href="images/favicon.png" sizes="32x32" />
  <link rel="icon" href="images/favicon.png" sizes="192x192" />
  <link rel="apple-touch-icon-precomposed" href="images/favicon.png" />
  <meta name="msapplication-TileImage" content="images/favicon.png" />
  <link rel="shortcut icon" href="images/favicon.png" type="images/x-icon" />
  <!-- |Main Css| -->
  <link rel="stylesheet" href="style.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap Css -->
  <link rel="stylesheet" href="Assets/Bootstrap/Css/bootstrap.min.css" />
  <!-- Bootstrap Js -->
  <script src="Assets/Bootstrap/Js/bootstrap.bundle.min.js"></script>
  <script src="Assets/Bootstrap/Js/jquery.slim.min.js"></script>
  <!-- Main Js -->
  <script src="script.js"></script>
  <!-- Jquery -->
  <!-- Iconicons Js -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
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
      .email-Subscribe {
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


    @media only screen and (max-width: 600px) {
      #addtocart {
        padding: 10px;
        border: none;
        background: lighten(#292d48, 65);
        position: relative;
        outline: none;
        width: 100%;
        border-radius: 5px;
        color: #292d48;
        font-size: 18px;
      }

      .cart-item {
        position: absolute;
        height: 24px;
        width: 22px;
        top: -10px;
        right: -10px;

        &:before {
          content: '1';
          display: block;
          line-height: 24px;
          height: 24px;
          width: 24px;
          font-size: 12px;
          font-weight: 600;
          background: #2bd156;
          color: white;
          border-radius: 20px;
          text-align: center;
        }
      }

    }


    .navbar-collapse {
      margin-top: -22px;

    }


    #nav-item-link:before {
      bottom: -28px;
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

  <!-- Header -->
  <?php
  include('./Header.php');
  ?>


  <section class="vh-100">

    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card-body p-4 p-sm-5">
            <?php
            include('database.php');

            if (isset($_POST['submit'])) {

              $Name = $_POST['Name'];
              $Email = $_POST['Email'];
              $Message = $_POST['Message'];

              if ($Name == "" or $Email == "" or $Message == "") {
                echo "<div class='alert alert-danger'>All fileds are req</div>";
              } else {

                $Select_query = "INSERT INTO `contact` (Name,Email,Message) VALUES ('$Name','$Email','$Message')";
                $Reuslt = mysqli_query($conn, $Select_query);
                if ($Reuslt) {
                  echo "<div class='alert alert-success'>Submit Successfully!!!!!!!</div>";
                }
              }
            }
            ?>
            <form method="post" enctype="multipart/form-data">
              <label class="form-label">Name</label>
              <div class="form-floating mb-3">
                <input name="Name" type="text" class="form-control" id="floatingInput" placeholder="Full Name">
                <label for="floatingInput">Name</label>
              </div>
              <label class="form-label">Email Addrees</label>
              <div class="form-floating mb-3">
                <input name="Email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
              </div>
              <label name="Message" class="form-label">Message</label>
              <div class="form-floating">
                <textarea name="Message" class="form-control" id="message" name="message" rows="15"></textarea>
                <label for="floatingPassword">Message</label>
              </div>
              <div class="d-flex justify-content-center py-5">
                <button type="submit" name="submit" value="submit" class="bn632-hover bn21">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>





    </section>








    <!-- Footer -->
    <?php
    include('./footer.php');
    ?>
</body>

</html>