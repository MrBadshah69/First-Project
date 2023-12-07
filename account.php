<?php

include('./database.php');

session_start();
if (!isset($_SESSION["User"])) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <!-- Site fevicon icons -->
    <link rel="icon" href="images/favicon.png" sizes="32x32" />
    <link rel="icon" href="images/favicon.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="images/favicon.png" />
    <meta name="msapplication-TileImage" content="images/favicon.png" />
    <!-- |favicon| -->
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
        #Logout-button {
            text-decoration: none;

        }

        #Logout-button:hover {
            text-decoration: underline;

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
    </style>
</head>

<body>
    <?php
    include('./Header.php');

    ?>







    <div class="container">

        <div class="d-flex justify-content-end"><a id="Logout-button" class="display-6 text-dark" href="Logout.php">Logout</a></div>


    </div>








    <?php
    include('./footer.php');

    ?>
</body>

</html>