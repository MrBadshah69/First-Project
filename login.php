<?php

include('./database.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- |favicon| -->
  <link rel="shortcut icon" href="images/favicon.png" type="images/x-icon" />
  <!-- |Main Css| -->
  <link rel="stylesheet" href="style.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap Css -->
  <link rel="stylesheet" href="Assets/Bootstrap/Css/bootstrap.min.css" />

  <style>
    .btn-login {
      font-size: 0.9rem;
      letter-spacing: 0.05rem;
      padding: 0.75rem 1rem;
    }

    .btn-google {
      color: white !important;
      background-color: #ea4335;
      border: none;
      border-radius: 0.375rem;
    }

    .btn-facebook {
      color: white !important;
      background-color: #3b5998;
      border: none;
      border-radius: 0.375rem;
    }

    .form-control {
      border: 1px solid #000;
    }

    .bn632-hover {
      width: 22rem;
      height: 3rem;
      border-radius: 0.375rem;

    }

    .line {
      position: relative;
      height: 1px;
      width: 100%;
      margin: 36px 0;
      background-color: #d4d4d4;
    }

    .line::before {
      content: 'Or';
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #FFF;
      color: #8b8b8b;
      padding: 0 15px;
    }

    #search_form {
      display: contents;
    }

    .Search_click {
      background-color: #F3F3F3;
      height: 32px;
    }
  </style>
</head>

<body>
  <!-- Header -->
  <?php
  include('./Header.php');
  ?>


  <!-- login -->
  <section class="vh-100">
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <!-- <div class="card border-0 shadow rounded-3 my-5"> -->
          <div class="card-body p-4 p-sm-5">
            <h1 class="mb-5 text-center">Log in</h1>
            <form action="login.php" method="post">
              <span><?php

                    if (isset($_POST['Login'])) {
                      $email = $_POST['Email'];
                      $password = $_POST['Password'];
                      $repeatpassword = $_POST['Repeat_Password'];

                      require_once "database.php";
                      $errors = array();

                      if ($password !== $repeatpassword) {
                        array_push($errors, "Password does not match try again");
                      }

                      $sql_select = "SELECT * FROM `user` WHERE Email='$email'";
                      $Connect_database = mysqli_query($conn, $sql_select);
                      $row = mysqli_fetch_array($Connect_database, MYSQLI_ASSOC);
                      if ($row) {
                        if (password_verify($passwordHash, $row["Password"])) {
                          header("Location:account.php");
                          die();
                        } else {
                          echo "<div class='alert alert-danger'>password does not match</div>";
                        }
                      } else {
                        echo "<div class='alert alert-danger'>Email does not match</div>";
                      }
                    }
                    ?></span>
              <div class="form-floating mb-3">
                <input required="required" name="Email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating mb-3">
                <input required="required" name="Password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <div class="form-floating mb-3">
                <input name="Repeat_Password" type="password" class="form-control" id="floatingPassword" placeholder="Repeat Password">
                <label for="floatingPassword">Repeat Password</label>
              </div>
              <p><a class="text-decoration-none text-dark" href="login.php"><u>Forget your password</u></a></p>
              <div class="d-flex justify-content-center">
                <button type="submit" name="Login" class="bn632-hover bn21">Log in</button>
              </div>
              <p class="text-center">Don't have an account?<a class="text-decoration-none" href="Registration.php">Registration</a></p>
              <div class="line"></div>
              <div class="d-grid mb-2">
                <button class="btn-google btn-login text-uppercase fw-bold" type="submit">
                  <i class="fab fa-google me-2"></i> Sign in with Google
                </button>
              </div>
              <div class="d-grid">
                <button class="btn-facebook btn-login text-uppercase fw-bold" type="submit">
                  <i class="fab fa-facebook-f me-2"></i> Sign in with Facebook
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>



  <!-- Footer -->
  <?php
  include('./footer.php');
  ?>



  <!-- Bootstrap Js -->
  <script src="Assets/Bootstrap/Js/bootstrap.bundle.min.js"></script>
  <script src="Assets/Bootstrap/Js/jquery.slim.min.js"></script>
  <!-- Main Js -->
  <script src="script.js"></script>
  <!-- Iconicons Js -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>