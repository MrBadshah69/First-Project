<?php

include("database.php");
include("./Functions/Common_Functions.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart</title>
    <!-- |favicon| -->
    <link rel="shortcut icon" href="images/favicon.png" type="images/x-icon" />
    <!-- |Main Css| -->
    <link rel="stylesheet" href="style.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="Assets/Bootstrap/Css/bootstrap.min.css" />
    <!-- Bootstrap Js -->
    <script src="Assets/Bootstrap/Js/bootstrap.bundle.min.js"></script>
    <!-- Main Js -->
    <script src="script.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <!-- Iconicons Js -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <style>
        body {
            background: linear-gradient(to right, #FFF 60%, #F5F5F5 50%);
        }

        .cart {
            position: sticky;
            margin-left: -19px;
            border-radius: 5px;
            z-index: -1;
            display: flex;
        }

        .itemsCount {
            position: absolute;
            background-color: #00AF4F;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            top: -1px;
            right: 0px;
            left: 18px;
            /* display: none; */
            color: #fff;
            padding: 1px;
            text-align: center;
            font-family: sans-serif;
            font-size: 10px;
        }

        .checkout_product_side {
            background-color: #F8F9FA;
            /* height: 100%; */
        }

        .navbar {
            height: 100px;
            background-color: #FFFFFF;
            border-bottom: 1px solid #D6D6D6;
        }

        .gotologin {
            display: inline;
            text-align: end;
        }

        .text1 {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .form-control {
            height: 50px;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #1773B0;
        }

        #country-selector {
            font-size: smaller;
            margin-top: 2px;
        }

        .selector {
            padding: 0 .75rem;
        }

        #country-select {
            padding: 0;
            border: none;
        }

        .form-select:focus {
            box-shadow: none;
        }

        #names {
            margin-right: 10px;
        }

        #payment-selector {
            margin-left: 20px;
        }

        .submit-button {
            background-color: #1773B0;
            border: 1px solid #1773B0;
            color: #FFFFFF;
            font-weight: 700;
            border-radius: 5px;
            height: 50px;
        }

        .submit-button:hover {
            background-color: #105989;
        }

        .checkout-detail_side {
            border-right: 1px solid #D6D6D6;
            width: 55%;
        }

        .product-detail-side {
            background-color: #F5F5F5;
            height: 100vh;
            width: 45%;
        }

        .product-detail-image {
            border: 1px solid #E4E4E4;
            border-radius: 5px;
            width: 20%;
        }

        .product-title {
            padding: 25px;
            text-align: start;
            overflow: visible;

        }

        .product-price {
            display: flex;
            align-items: center;
            padding: 5px;
        }

        .discount-code-submit {
            border: 1px solid #E4E4E4;
            border-radius: 5px;
        }

        @media only screen and (max-width: 480px) {
            .product-detail-side {
                display: none;
            }

            .checkout-detail_side {
                border: none;
                width: 100%;
            }

            body {
                background: linear-gradient(to right, #FFF 60%, #fff 50%);
            }

            .mobile-view-product-side {
                background-color: #F5F5F5;
                width: 100%;
            }

            .view-product-side {
                display: block !important;

            }

            .main-bar {
                display: flex;
                justify-content: space-between;
            }
        }
    </style>
</head>

<body>


    <header>
        <nav class="navbar">
            <div class="container">
                <a class="navbar-brand my-3" href="index.php">
                    <img src="./images/digilog-logo.png" alt="LOGO">
                </a>
                <div id="cart" class="cart" data-totalitems="0">
                    <div class="itemsCount">
                        <?php
                        cart_number();
                        ?>
                    </div>
                    <a href="Cart.php"><ion-icon style="z-index: -1;position: relative;" id="main-cart"
                            name="bag-handle-outline"></ion-icon></a>
                </div>
            </div>
        </nav>
    </header>


    <!-- Mobile view Product Side -->

    <div class="mobile-view-product-side">
        <div class="container view-product-side d-none py-4">
            <div class="main-bar">
                <a class="text-decoration-none" href="#viewproductside" class="btn btn-primary" data-bs-toggle="collapse">Show
                    order summary <i class='fas fa-angle-down '></i></a>
                <span>Rs.2,350</span>
            </div>   
            <div class="collapse" id="viewproductside">

                <div class="conitainer m-4">
                    <div class="product-content d-flex my-3">
                        <img class="product-detail-image" src="Admin_area/Products_image/30303-920-008202-500.jpg"
                            alt="Product Image">
                        <div class="product-title">Logitech G502 X Gaming Mouse
                        </div>
                        <div class="product-price">
                            <span>Rs.18,995</span>
                        </div>
                    </div>
                    <div class="other-option">
                        <div class="discount mb-4 d-flex justify-content-between">
                            <input name="" type="text" class="form-control w-75" id="" placeholder="Discount code">
                            <button class="ms-2 discount-code-submit p-2" type="submit">Apply</button>
                        </div>
                        <div class="subtotal me-1 ms-1 d-flex justify-content-between">
                            Subtotal <span>Rs.2,000</span>
                        </div>
                        <div class="subtotal me-1 ms-1 d-flex justify-content-between">
                            Shipping <span>Rs.350</span>
                        </div>
                        <div class="subtotal me-1 ms-1 d-flex justify-content-between">
                            <b>TOTAL</b> <b>Rs.2,350</b>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6 checkout-detail_side">
                <div class="container my-5">
                    <form action="" method="post">

                        <!-- CONTACT PART -->
                        <div class="contact_part">
                            <div class="text1">
                                <h3 class="heading1">Contact</h3>
                                <span>Have an account? <a class="text-dark" href="login.php">Log in</a></span>
                            </div>
                            <input name="" type="email" class="form-control" placeholder="Email or mobile phone number">
                        </div>

                        <!-- DEILVERY PART -->
                        <div class="delivery_part my-4">
                            <h3 class="heading2 mb-3">Delivery</h3>
                            <div class="selector form-control">
                                <label id="country-selector" for="country">Country/Region</label>
                                <select class="form-select" id="country-select">
                                    <option selected>Pakistan</option>
                                </select>
                            </div>
                        </div>

                        <!-- MAIN DETAIL SELECTION -->
                        <div class="Names mb-4 d-flex">
                            <input name="" type="text" class="form-control" id="names"
                                placeholder="First Name (option)">
                            <input name="" type="text" class="form-control" placeholder="Last Name">
                        </div>

                        <!-- ADDRESS -->
                        <div class="address mb-4">
                            <input name="" type="text" class="form-control" id="names" placeholder="Address">
                        </div>

                        <!-- CITY AND POSTAL -->
                        <div class="cityandpostal mb-4 d-flex">
                            <input name="" type="text" class="form-control" id="names" placeholder="City">
                            <input name="" type="text" class="form-control" placeholder="Postal code">
                        </div>

                        <!-- NUMBER -->
                        <div class="number mb-4">
                            <input name="" type="text" class="form-control" id="names" placeholder="Phone">
                        </div>

                        <!-- Payment -->
                        <div class="mb-4">
                            <h3 class="heading3">Payment</h3>
                            <p>All transactions are secure and encrypted.</p>
                            <div id="payment-borders" class="form-control d-flex align-items-center">
                                <input name="" class="form-check-input name=""" type="radio" name="flexRadioDisabled"
                                    id="flexRadio1">
                                <label id="payment-selector" class="form-check-label mt-1" for="flexRadio1">
                                    Cash on Delivery (COD) </label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div id="payment-borders" class="form-control d-flex align-items-center">
                                <input name="" class="form-check-input name=""" type="radio" name="flexRadioDisabled"
                                    id="flexRadio">
                                <label id="payment-selector" class="form-check-label mt-1" for="flexRadio">
                                    Bank Transfer (Advance Payment) </label>
                            </div>
                        </div>
                        <div class="order-place-button">
                            <input name="" type="submit" value="Compelete Order" class="submit-button w-100">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-6 product-detail-side">
                <div class="conitainer m-4">
                    <div class="product-content d-flex my-3">
                        <img class="product-detail-image" src="Admin_area/Products_image/30303-920-008202-500.jpg"
                            alt="Product Image">
                        <div class="product-title">Logitech G502 X Gaming Mouse
                        </div>
                        <div class="product-price">
                            <span>Rs.18,995</span>
                        </div>
                    </div>
                    <div class="other-option">
                        <div class="discount mb-4 d-flex justify-content-between">
                            <input name="" type="text" class="form-control w-75" id="" placeholder="Discount code">
                            <button class="ms-2 discount-code-submit p-2" type="submit">Apply</button>
                        </div>
                        <div class="subtotal me-1 ms-1 d-flex justify-content-between">
                            Subtotal <span>Rs.2,000</span>
                        </div>
                        <div class="subtotal me-1 ms-1 d-flex justify-content-between">
                            Shipping <span>Rs.350</span>
                        </div>
                        <div class="subtotal me-1 ms-1 d-flex justify-content-between">
                            <b>TOTAL</b> <b>Rs.2,350</b>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>










</body>

</html>