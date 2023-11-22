<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Area</title>

    <!-- |Main Css| -->
    <link rel="stylesheet" href="style.css" />
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="../Assets/Bootstrap/Css/bootstrap.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Button css  */

        .bn5 {
            padding: 0.6em 2em;
            border: none;
            outline: none;
            color: rgb(255, 255, 255);
            background: #111;
            cursor: pointer;
            position: relative;
            z-index: 0;
            border-radius: 10px;
        }

        .bn5:before {
            content: "";
            background: linear-gradient(45deg,
                    #ff0000,
                    #ff7300,
                    #fffb00,
                    #48ff00,
                    #00ffd5,
                    #002bff,
                    #7a00ff,
                    #ff00c8,
                    #ff0000);
            position: absolute;
            top: -2px;
            left: -2px;
            background-size: 400%;
            z-index: -1;
            filter: blur(5px);
            width: calc(100% + 4px);
            height: calc(100% + 4px);
            animation: glowingbn5 20s linear infinite;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
            border-radius: 10px;
        }

        @keyframes glowingbn5 {
            0% {
                background-position: 0 0;
            }

            50% {
                background-position: 400% 0;
            }

            100% {
                background-position: 0 0;
            }
        }

        .bn5:active {
            color: #000;
        }

        .bn5:active:after {
            background: transparent;
        }

        .bn5:hover:before {
            opacity: 1;
        }

        .bn5:after {
            z-index: -1;
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: #191919;
            left: 0;
            top: 0;
            border-radius: 10px;
        }

        .insert-div {
            background-color: #f3f3f3;
        }



        footer {
            position: absolute;
            bottom: 0;
            background-color: #f3f3f3;
            width: 100%;
        }
    </style>
</head>

<body>
    <header id="main-header">
        <nav class=" navbar navbar-expand-lg bg-light ">
            <div class="container">
                <!-- Logo -->
                <a id="nav-item-link-image" class="navbar-brand d-flex justify-content-start" href="index.php">
                    <img id="navbar-brand-image" src="../images/digilog-logo.png" alt="Logo" />

                </a>
                <div> <strong>Welcome Guest</strong></div>
            </div>
        </nav>
    </header>

    <h2 class="py-1 text-center">Mange Details</h2>
    <div class="insert-div">
        <div class="insert-div container d-flex">

            <div class="py-4">
                <img width="150" height="150" src="../images/admin-image.png" alt="admin-img">
                <strong>Muhammad Arsalan</strong>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="insert-list mt-5">
                        <button class="my-3 border-0 ">
                            <a href="/" class="bn5 text-decoration-none">Insert Products</a>
                        </button>
                        <button class="my-3 border-0 ">
                            <a href="/" class="bn5 text-decoration-none">View Products</a>
                        </button>
                        <button class="my-3 border-0 ">
                            <a href="index.php?insert_category" class="bn5 text-decoration-none">Insert Catagories</a>
                        </button>
                        <button class="my-3 border-0 ">
                            <a href="/" class="bn5 text-decoration-none">View Catagories</a>
                        </button>
                        <button class="my-3 border-0 ">
                            <a href="index.php?insert_brand" class="bn5 text-decoration-none">Insert Brands</a>
                        </button>
                        <button class="my-3 border-0 ">
                            <a href="#" class="bn5 text-decoration-none">View Brands</a>
                        </button>
                        <button class="my-3 border-0 ">
                            <a href="/" class="bn5 text-decoration-none">View All</a>
                        </button>

                        <button class="my-3 border-0 ">
                            <a href="/" class="bn5 text-decoration-none">All Order</a>
                        </button>
                        <button class="my-3 border-0 ">
                            <a href="/" class="bn5 text-decoration-none">All Payments</a>
                        </button>
                        <button class="my-3 border-0">
                            <a href="/" class="bn5 text-decoration-none">Logout</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container p-4">
        <?php
        if (isset($_GET["insert_category"])) {
            include('Insert_catagories.php');
        }
        if (isset($_GET["insert_brand"])) {
            include('Insert_Brands.php');
        }

        ?>
    </div>


    <!-- footer -->

    <footer class="text-center p-2 ">&copy;Right Digilog.pk_2023
    </footer>

</body>

</html>