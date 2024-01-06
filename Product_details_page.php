<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- |favicon| -->
    <link rel="shortcut icon" href="images/favicon.png" type="images/x-icon" />
    <!-- |Main Css| -->
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="Assets/Bootstrap/Css/bootstrap.min.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" />

    <style>
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

        .bn21 {
            margin: 0;
            border-radius: 10%;
        }

        .home_icon,
        .category_icon {
            position: relative;
            top: 2px;
        }

        .category_icon {
            position: relative;
            top: 3px;
        }

        .fa-brands {
            color: #000;
            position: relative;
            top: 2;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            height: 100px;
            width: 100px;
            outline: black;
            background-color: #000;
            background-size: 100%, 100%;
            border: 1px solid black;
        }

        a.d-flex.align-center.my-4.bn632-hover.bn21 {
            align-items: center;
            justify-content: center;
            text-decoration: none;
        }

        .plus_mins {
            border: none;
            padding: 6px 16px;
            cursor: pointer;
        }

        .plus_mins:hover {
            background-color: #D0D0D0;
        }

        .quantity-container {
            display: flex;
            align-items: center;
            padding-top: 10px;
        }

        #quantity {
            width: 40px;
            text-align: center;
            font-size: 16px;
            border: 0;
        }

        .quantity-p {
            margin-bottom: 0;
            padding-right: 15px;
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


        /* rating & review */
        #review_user_name,
        #review_user_comment {
            width: 100%;
            outline: transparent;
            border: none;
            border-bottom: 1px solid currentColor;

        }

        .review_input:focus {
            box-shadow: none;
        }

        .review_input {
            border: none;
        }

        .form-floating>.form-control,
        .form-floating>.form-control-plaintext {
            padding: 0;

        }

        .form-floating>label {
            padding: 1rem 0.1rem;

        }


        /* Rating Button */
        .button-59 {
            align-items: center;
            background-color: #fff;
            border: 2px solid #000;
            box-sizing: border-box;
            color: #000;
            cursor: pointer;
            display: inline-flex;
            fill: #000;
            font-family: Inter, sans-serif;
            font-size: 16px;
            font-weight: 600;
            height: 48px;
            justify-content: center;
            letter-spacing: -.8px;
            line-height: 24px;
            min-width: 140px;
            outline: 0;
            padding: 0 17px;
            text-align: center;
            text-decoration: none;
            transition: all .3s;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .button-59:focus {
            color: #171e29;
        }

        .button-59:hover {
            border-color: #00AF4F;
            color: #00AF4F;
            fill: #00AF4F;
        }

        .button-59:active {
            border-color: #00AF4F;
            color: #00AF4F;
            fill: #00AF4F;
        }

        @media (min-width: 768px) {
            .button-59 {
                min-width: 170px;
            }
        }

        ul.fontstar {
            font-size: 30px;
            position: relative;
            right: 30px;
        }

        ul.fontstar {
            font-size: 30px;
            position: relative;
            right: 30px;
            display: -webkit-inline-box;
        }

        .nav-link-home-link {
            text-decoration: none;
            color: #06B153;
        }

        .nav-link-home-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body style="background-color: #fff;">

    <!-- WHATSAPP ICON -->

    <a style="z-index: 1;" href="https://wa.me/message/QMU3ADQXKCE5M1" target="_blank" class="whatsapp-icon-link">
        <img src="https://play-lh.googleusercontent.com/bYtqbOcTYOlgc6gqZ2rwb8lptHuwlNE75zYJu6Bn076-hTmvd96HH-6v7S0YUAAJXoJN=w240-h480-rw" alt="WhatsApp Icon">
    </a>

    <!-- WHATSAPP ICON END -->

    <?php

include('./Functions/Common_Functions.php');
include('Header.php');

    ?>


    <!-- <div class="container py-3 me-1">
        <a class="text-dark p-2 text-decoration-none" href="./index.php"><ion-icon class="home_icon"
                name="home-outline"></ion-icon> Home</a><b>/</b><a class="text-dark p-2 text-decoration-none"
            href="./Category.php"><ion-icon class="category_icon" name="list-outline"></ion-icon> Category</a><b>/</b><a
            class="text-dark p-2 text-decoration-none" href="#"><i class="fa-brands fa-product-hunt"></i> Product</a>
    </div> -->

    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
        <div class="container d-flex justify-content-center">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="nav-link-home-link" href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product</li>
                </ol>
            </nav>
        </div>
    </nav>


    <?php
    include('database.php');






    // For Product

    if (isset($_GET['Product'])) {
        $product = $_GET['Product'];

        // Fetch product details from the database
        $sql = "SELECT * FROM `products` WHERE Product_ID = $product";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            $Product_image1 = $row['Product_image1'];
            $Product_image2 = $row['Product_image2'];
            $Product_image3 = $row['Product_image3'];
            $Product_ID = $row['Product_ID'];
            $Product_title = $row['Product_Title'];
            $Product_Description = $row['Product_Description'];
            $Product_Keywords = $row['Product_Keywords'];
            $Product_Price = $row['Product_Price'];


    ?>


            <div class="container mt-5">

                <div class="row">

                    <div class='col-lg-6 col-md-6 col-12'>
                        <div class='card border-0'>
                            <div id="carouselExample" class="carousel slide">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?php echo " ./Admin_area/Products_image/$Product_image1 "; ?>" class=" d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo " ./Admin_area/Products_image/$Product_image2 "; ?>" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo " ./Admin_area/Products_image/$Product_image3 "; ?>" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class='card-body'>
                            <div class="rating d-flex">
                                <ul class="list-unstyled d-flex text-warning mb-0 me-2">
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="far fa-star fa-sm"></i></li>
                                    <li><i class="far fa-star fa-sm"></i></li>
                                    <li><i class="far fa-star fa-sm"></i></li>
                                    <li><i class="far fa-star fa-sm"></i></li>
                                </ul>
                                <?php
                                $show_query = "SELECT COUNT(Product_ID) AS total_review FROM `rating_review` WHERE Product_ID='$product'";
                                $con_query = mysqli_query($conn, $show_query);
                                $row_check = mysqli_fetch_assoc($con_query);
                                $total_review = $row_check['total_review'];

                                echo "<h5>" . $total_review . " Reviews</h5>";
                                ?>
                            </div>
                            <h3 class='card-title mt-3'>
                                <?php echo $Product_title; ?>
                            </h3>
                            <br>
                            <p class="card-description">
                                <?php echo $Product_Description; ?>
                            </p>
                            <br>
                            <h4>
                                <?php echo $Product_Price; ?>
                            </h4>
                        </div>

                        <?php

                        echo "<div class='card-body mt-2'>
                    <div class='page-wrapper'>
                    <a href='Product_details_page.php?Product=$Product_ID&addtocart=$Product_ID'><button id='addtocart'><i class='fa-solid fa-cart-shopping'></i>
                          Add to Cart
            <span class='cart-item'></span>
          </button></a>";
                        Cart();
                        ?>
                    </div>
                </div>
            </div>
            </div>
            </div>
    <?php
        } else {
            echo "Product not found!" . $conn->error;;
        }
    } else {
        echo "Invalid request!";
    }
    ?>

    <hr>




    <div class="container">


        <form class="mt-5" action="<?php echo " Product_details_page.php?Product=$Product_ID"; ?>" method="post">

            <div class="mt-5 d-inline">
                <h3 class="d-inline">
                    Give me Rating
                </h3>
            </div>

            <input type="hidden" name="Product_ID" value="<?php echo $Product_ID; ?>">
            <select name="stars" class="star" id="stars">
                <option value="">--</option>
                <option value="1" required selected>1</option>
                <option value="2" required>2</option>
                <option value="3" required>3</option>
                <option value="4" required>4</option>
                <option value="5" required>5</option>
            </select>


            <div id="review_user_name" class="form-floating mt-3">
                <input required name="user_name" type="text" class="form-control review_input" id="floatingInput" placeholder="Full Name">
                <label class="label-user" for="floatingInput">Full Name</label>
            </div>
            <div id="review_user_comment" class="form-floating mt-3">
                <textarea required name="user_comment" class="form-control review_input" id="Comment" id="floatingInput" rows="15" placeholder="Comment"></textarea>
                <label for="floatingInput">Comment</label>
            </div>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                if (isset($_POST['Submit'])) {

                    $select_stars = $_POST['stars'];
                    $user_name = $_POST['user_name'];
                    $user_comments = $_POST['user_comment'];
                    $Product_ID = $_POST['Product_ID'];

                    $insert_sql = "INSERT INTO `rating_review`(`user_give_star`, `Product_ID`, `user_name`, `user_comments`) VALUES ('$select_stars','$Product_ID','$user_name','$user_comments')";

                    $star_insert = mysqli_query($conn, $insert_sql);

                    if ($star_insert) {
                        echo "<div class='alert alert-success mt-5 alert-dismissible fade show' role='alert'>
                Your rating is successfully submit
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";
                    } else {
                        echo "rating not submit";
                    }
                }
            }

            ?>
            <button type="submit" name="Submit" class="button-59 mt-3">Submit</button>

        </form>

    </div>


    <div class="mt-5">
        <?php

        include('./footer.php')
        ?>
    </div>

    <script>
        // ADD TO CART 

        const cartButtons = document.querySelectorAll('.cart-button');

        cartButtons.forEach(button => {
            button.addEventListener('click', cartClick);
        });

        function cartClick() {
            let button = this;
            button.classList.add('clicked');
        }


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

        // Rating starrsss

        $(document).ready(function(value, self) {
            $('.star').fontstar({});
        });
    </script>
    <!-- Bootstrap Js -->
    <script src="Assets/Bootstrap/Js/bootstrap.bundle.min.js"></script>
    <script src="Assets/Bootstrap/Js/jquery.slim.min.js"></script>
    <!-- Main Js -->
    <script src="script.js"></script>
    <!-- Iconicons Js -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="jquery.fontstar.js"></script>
</body>

</html>