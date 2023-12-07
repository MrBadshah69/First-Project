<?php
include("database.php");
include("Functions/Common_Functions.php");


// for Reting & review




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

                /* ADD TO CART */

                .cart-button {
                    position: relative;
                    /* padding: 10px; */
                    width: 200px;
                    height: 60px;
                    border: 0;
                    border-radius: 10px;
                    background-color: #4caf50;
                    outline: none;
                    cursor: pointer;
                    color: #fff;
                    transition: .3s ease-in-out;
                    overflow: hidden;
                    margin-top: 20px;
                }

                .cart-button:hover {
                    background-color: #388e3c;
                }

                .cart-button:active {
                    transform: scale(.9);
                }

                .cart-button .fa-shopping-cart {
                    position: absolute;
                    z-index: 2;
                    top: 50%;
                    left: -10%;
                    font-size: 2em;
                    transform: translate(-50%, -50%);
                }

                .cart-button .fa-box {
                    position: absolute;
                    z-index: 3;
                    top: -20%;
                    left: 52%;
                    font-size: 1.2em;
                    transform: translate(-50%, -50%);
                }

                .cart-button span {
                    position: absolute;
                    z-index: 3;
                    left: 50%;
                    top: 50%;
                    font-size: 1.2em;
                    color: #fff;
                    transform: translate(-50%, -50%);
                }

                .cart-button span.add-to-cart {
                    opacity: 1;
                }

                .cart-button span.added {
                    opacity: 0;
                }

                .cart-button.clicked .fa-shopping-cart {
                    animation: cart 1.5s ease-in-out forwards;
                }

                .cart-button.clicked .fa-box {
                    animation: box 1.5s ease-in-out forwards;
                }

                .cart-button.clicked span.add-to-cart {
                    animation: txt1 1.5s ease-in-out forwards;
                }

                .cart-button.clicked span.added {
                    animation: txt2 1.5s ease-in-out forwards;
                }

                @keyframes cart {
                    0% {
                        left: -10%;
                    }

                    40%,
                    60% {
                        left: 50%;
                    }

                    100% {
                        left: 110%;
                    }
                }

                @keyframes box {

                    0%,
                    40% {
                        top: -20%;
                    }

                    60% {
                        top: 40%;
                        left: 52%;
                    }

                    100% {
                        top: 40%;
                        left: 112%;
                    }
                }

                @keyframes txt1 {
                    0% {
                        opacity: 1;
                    }

                    20%,
                    100% {
                        opacity: 0;
                    }
                }

                @keyframes txt2 {

                    0%,
                    80% {
                        opacity: 0;
                    }

                    100% {
                        opacity: 1;
                    }
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
            </style>
        </head>

        <body style="background-color: #fff;">

            <!-- WHATSAPP ICON -->

            <a style="z-index: 1;" href="https://wa.me/message/QMU3ADQXKCE5M1" target="_blank" class="whatsapp-icon-link">
                <img src="https://play-lh.googleusercontent.com/bYtqbOcTYOlgc6gqZ2rwb8lptHuwlNE75zYJu6Bn076-hTmvd96HH-6v7S0YUAAJXoJN=w240-h480-rw" alt="WhatsApp Icon">
            </a>

            <!-- WHATSAPP ICON END -->

            <?php

            include('Header.php');

            ?>


            <div class="container py-3 me-1">
                <a class="text-dark p-2 text-decoration-none" href="./index.php"><ion-icon class="home_icon" name="home-outline"></ion-icon> Home</a><b>/</b><a class="text-dark p-2 text-decoration-none" href="./Category.php"><ion-icon class="category_icon" name="list-outline"></ion-icon> Category</a><b>/</b><a class="text-dark p-2 text-decoration-none" href="#"><i class="fa-brands fa-product-hunt"></i> Product</a>
            </div>
            <div class="container mt-5">

                <div class="row">

                    <div class='col-lg-6 col-md-6 col-12'>
                        <div class='card border-0'>
                            <div id="carouselExample" class="carousel slide">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?php echo "./Admin_area/Products_image/$Product_image1 "; ?>" class=" d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo "./Admin_area/Products_image/$Product_image2 "; ?>" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo "./Admin_area/Products_image/$Product_image3 "; ?>" class="d-block w-100" alt="...">
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
                            <h3 class='card-title mt-3'><?php echo $Product_title; ?></h3>
                            <br>
                            <p class="card-description"><?php echo $Product_Description; ?></p>
                            <br>
                            <div class="rating d-flex">
                                <b style="padding-right: 20px;">Review</b>
                                <ul class="list-unstyled d-flex text-warning mb-0">
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="far fa-star fa-sm"></i></li>
                                </ul>
                            </div>
                            <br>
                            <h4><?php echo $Product_Price; ?></h4>

                            <div class="quantity-container">
                                <p class="quantity-p">Quantity</p>
                                <button class="plus_mins" onclick="decrementQuantity()">-</button>
                                <input type="text" id="quantity" value="1" max="3" min="1" readonly>
                                <button class="plus_mins" onclick="incrementQuantity()">+</button>
                            </div>
                            <button class="cart-button">
                                <span class="add-to-cart">Add to cart</span>
                                <span class="added">Added</span>
                                <i class="fas fa-shopping-cart"></i>
                                <i class="fas fa-box"></i>
                            </button>
                            <?php
                            Cart()
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <hr>




                <div class="mt-5">
                    <h3>
                        Give me Rating
                    </h3>
                </div>


                <form action="" method="post">
                    <select name="" class="star" id="stars">
                        <option value="">--</option>
                        <option value="1" required selected>1</option>
                        <option value="2" required>2</option>
                        <option value="3" required>3</option>
                        <option value="4" required>4</option>
                        <option value="5" required>5</option>
                    </select>


                    <div id="review_user_name" class="form-floating mt-3">
                        <input name="user_name" type="text" class="form-control review_input" id="floatingInput" placeholder="Full Name">
                        <label class="label-user" for="floatingInput">Full Name</label>
                    </div>
                    <div id="review_user_comment" class="form-floating mt-3">
                        <textarea name="Comment" class="form-control review_input" id="Comment" name="Comment" id="floatingInput" rows="15" placeholder="Comment"></textarea>
                        <label for="floatingInput">Comment</label>
                    </div>

                    <button type="submit" name="Submit" class="button-59       mt-3">Submit</button>

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


                // quantity

                function incrementQuantity() {
                    var quantityInput = document.getElementById('quantity');
                    quantityInput.value = parseInt(quantityInput.value) + 1;
                }

                function decrementQuantity() {
                    var quantityInput = document.getElementById('quantity');
                    if (parseInt(quantityInput.value) > 1) {
                        quantityInput.value = parseInt(quantityInput.value) - 1;
                    }
                }

                // minus And Plus
                $(document).ready(function() {
                    $('.count').prop('disabled', true);
                    $(document).on('click', '.plus', function() {
                        $('.count').val(parseInt($('.count').val()) + 1);
                    });
                    $(document).on('click', '.minus', function() {
                        $('.count').val(parseInt($('.count').val()) - 1);
                        if ($('.count').val() == 0) {
                            $('.count').val(1);
                        }
                    });
                });


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

<?php
    } else {
        echo "Product not found!";
    }
} else {
    echo "Invalid request!";
}
?>