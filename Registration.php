<?php
session_start();
if (isset($_SESSION["User"])) {
    header("location: account.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
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
            width: 20rem;
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

        .whatsapp-img {
            max-width: 100%;
            height: auto;
        }

        .whatsapp-img-div {
            border-radius: 5px;
            box-shadow: 0 0 15px -2px #000;
            display: inline-block;
        }

        #search_form {
            display: contents;
        }

        .Search_click {
            background-color: #F3F3F3;
            height: 32px;
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

        .navbar-collapse {
            margin-top: -22px;
        }

        #nav-item-link:before {
            bottom: -28px;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <?php
    include('./Header.php');
    ?>


    <!-- registration login -->
    <section class="vh-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <!-- <div class="card border-0 shadow rounded-3 my-5"> -->
                    <div class="card-body p-4 p-sm-5">
                        <h1 class="mb-5 text-center">Registration</h1>
                        <form action="Registration.php" method="post">
                            <span><?php
                                    if (isset($_POST["registration"])) {

                                        $fullname = $_POST["fullname"];
                                        $email = $_POST["email"];
                                        $password = $_POST["password"];
                                        $repeatpassword = $_POST["Repeatpassword"];

                                        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                                        $errors = array();

                                        if (empty($fullname) or empty($email) or empty($password) or empty($repeatpassword)) {
                                            array_push($errors, "All filed are required");
                                        }

                                        if (empty($fullname)) {
                                            array_push($errors, "Name filed are required");
                                        }

                                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                            array_push($errors, "Email is not valid");
                                        }

                                        if ($password !== $repeatpassword) {
                                            array_push($errors, "Password does not match try again");
                                        }

                                        if (strlen($password) < 8) {
                                            array_push($errors, "Password must be at least 8 charactes long");
                                        }
                                        require_once "database.php";
                                        $show_data = "SELECT * FROM user where Email='$email'";
                                        $Result = mysqli_query($conn, $show_data);
                                        $Rows = mysqli_num_rows($Result);
                                        if ($Rows > 0) {
                                            array_push($errors, "Email is already Exists");
                                        }

                                        if (count($errors) > 0) {
                                            foreach ($errors as $error) {
                                                echo "<div class='alert alert-danger'>$error</div>";
                                            }
                                        } else {
                                            $storesql = "INSERT INTO user (Full_Name, Email,Password) values(?,?,?)";
                                            $stmt = mysqli_stmt_init($conn);
                                            $stmtprepare = mysqli_stmt_prepare($stmt, $storesql);
                                            if ($stmtprepare) {
                                                mysqli_stmt_bind_param($stmt, "sss", $fullname, $email, $passwordHash);
                                                mysqli_stmt_execute($stmt);
                                                echo "<div class='alert alert-success'>Registration successfull go to  <a class='text-decoration-none' href='login.php'>Log in</a></div>";
                                            } else {
                                                die("Something IS wrong");
                                            }
                                        }
                                    }
                                    ?></span>
                            <div class="form-floating mb-3">
                                <input name="fullname" type="text" class="form-control" id="floatingInput" placeholder="Full Name">
                                <label for="floatingInput">Full name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input name="Repeatpassword" type="password" class="form-control" id="floatingPassword" placeholder="Repeat Password">
                                <label for="floatingPassword">Repeat Password</label>
                            </div>
                            <div class=" d-flex justify-content-center">
                                <a href="#"><button name="registration" class="bn632-hover bn21 ">Registration</button></a>
                            </div>
                            <p class="text-center">Already have an account?<a class="text-decoration-none" href="login.php">Log in</a></p>
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