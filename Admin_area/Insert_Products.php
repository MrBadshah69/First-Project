<?php
include("../database.php");

if (isset($_POST['Insert_product'])) {


    $Product_Title = $_POST['Product_title'];
    $Product_Description = $_POST['Product_Description'];
    $Product_Keywords = $_POST['Product_Keywords'];
    $Product_Category = $_POST['Product_Category'];
    $Product_Brands = $_POST['Product_Brands'];
    $Product_Price = $_POST['Product_Price'];
    $Product_Status = 'ture';

    // Insert Images
    $Product_image1 = $_FILES['Product_image1']['name'];
    $Product_image2 = $_FILES['Product_image2']['name'];
    $Product_image3 = $_FILES['Product_image3']['name'];

    // tmp Insert Products
    $tmp_Product_image1 = $_FILES['Product_image1']['tmp_name'];
    $tmp_Product_image2 = $_FILES['Product_image2']['tmp_name'];
    $tmp_Product_image3 = $_FILES['Product_image3']['tmp_name'];

    // If Use For Emtpy Not Aeccpt
    if ($Product_Title == "" or $Product_Description == "" or $Product_Keywords == "" or $Product_Category == "" or $Product_Brands == "" or $Product_Price == "" or $Product_image1 == "" or $Product_image2 == "" or $Product_image3 == "") {
        echo "<script>alert('All Feild Are Req')</script>";
        exit();
    } else {
        // Move Product To Folder
        move_uploaded_file($tmp_Product_image1, "./Products_image/$Product_image1");
        move_uploaded_file($tmp_Product_image2, "./Products_image/$Product_image2");
        move_uploaded_file($tmp_Product_image3, "./Products_image/$Product_image3");

        // Insert Query
        $move_product_detail  = "insert into `products` (Product_Title,Product_Description,Product_Keywords,Category_id,Brands_id,Product_Price,Product_image1,Product_image2,Product_image3,Product_Status) value('$Product_Title','$Product_Description','$Product_Keywords','$Product_Category','$Product_Brands','$Product_Price','$Product_image1','$Product_image2','$Product_image3', '$Product_Status')";
        $connect_database = mysqli_query($conn, $move_product_detail);
        if ($connect_database) {
            echo "<script>alert('Updated successfully')</script>";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products Admin_Dashboard</title>
    <!-- |favicon| -->
    <link rel="shortcut icon" href="../images/favicon.png" type="images/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="../Assets/Bootstrap/Css/bootstrap.min.css" />
    <!-- Bootstrap Js -->
    <script src="../Assets/Bootstrap/Js/bootstrap.bundle.min.js"></script>
    <script src="../Assets/Bootstrap/Js/jquery.slim.min.js"></script>
    <!-- Iconicons Js -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
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

        .form-select {
            height: 40px;
            background: rgba(255, 255, 255, 0.2);
            border: none;
            border-radius: 20px;
            box-shadow: none;
            padding: 0 20px;
            font-size: 14px;
            font-weight: bold;
            color: #212529;
            transition: all 0.3s ease 0s;
        }

        .form-control {
            height: 40px;
            background: rgba(255, 255, 255, 0.2);
            border: none;
            border-radius: 20px;
            box-shadow: none;
            padding: 0 20px;
            font-size: 14px;
            font-weight: bold;
            color: #fff;
            transition: all 0.3s ease 0s;
        }

        .form-control:focus {
            box-shadow: none;
            outline: 0 none;
        }

        body {
            background-image: url(../images/wooden-table-product-background.jpg);
            background-size: cover;
        }
    </style>
</head>

<body style="background-color: #f3f3f3;">


    <div class="container">
        <h1 class="text-center m-5">Insert Products</h1>

        <form action="" method="post" enctype="multipart/form-data">

            <!-- Product_title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Product_title" class="form-label">Product Title</label>
                <input type="text" name="Product_title" id="Product_title" class="form-control transparent-input" placeholder="Enter Product Title" autocomplete="off" required="required">
            </div>
            <!-- Product_Description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Product_Description" class="form-label">Product Description</label>
                <input type="text" name="Product_Description" id="Product_Description" class="form-control" placeholder="Enter Product Description" autocomplete="off" required="required">
            </div>
            <!-- Product_Keywords -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Product_Keywords" class="form-label">Product Keywords</label>
                <input type="text" name="Product_Keywords" id="Product_Keywords" class="form-control" placeholder="Enter Product Keywords" autocomplete="off" required="required">
            </div>
            <!-- Product_Category -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Product_Category" class="form-label">Product Category</label>
                <select name="Product_Category" id="Product_Category" class="form-select">
                    <option value="">Select a Category</option>
                    <?php
                    $select_catagories = "SELECT * FROM `catagories`";
                    $catagories_database = mysqli_query($conn, $select_catagories);
                    while ($row_data_reuslt = mysqli_fetch_assoc($catagories_database)) {
                        $Category_tittle = $row_data_reuslt['Category_tittle'];
                        $Category_id = $row_data_reuslt['Category_id'];
                        echo "<option value='$Category_id'>$Category_tittle</option>";
                    }

                    ?>
                </select>
            </div>
            <!-- Product_Brands -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Product_Brands" class="form-label">Product Brands</label>
                <select name="Product_Brands" id="Product_Brands" class="form-select">
                    <option value="">Select a Brands</option>
                    <?php
                    $select_brands = "SELECT * FROM `brands`";
                    $brands_database = mysqli_query($conn, $select_brands);
                    while ($brands_row_data_reuslt = mysqli_fetch_assoc($brands_database)) {
                        $brand_tittle = $brands_row_data_reuslt['Brands_tittle'];
                        $brand_id = $brands_row_data_reuslt['Brands_id'];
                        echo "<option value='$brand_id'>$brand_tittle</option>";
                    }

                    ?>
                </select>
            </div>
            <!-- Product_image1 -->
            <div class="form-outline mb-4 w-50 m-auto custom-file">
                <label for="Product_image1" class="form-label">Product image 1</label>
                <input type="file" name="Product_image1" id="Product_image1" class="form-control " required="required">
            </div>
            <!-- Product_image2 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Product_image2" class="form-label">Product image 2</label>
                <input type="file" name="Product_image2" id="Product_image2" class="form-control" required="required">
            </div>
            <!-- Product_image3 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Product_image3" class="form-label">Product image 3</label>
                <input type="file" name="Product_image3" id="Product_image3" class="form-control w-50" required="required">
            </div>
            <!-- Product_Price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Product_Price" class="form-label">Product Price</label>
                <input type="text" name="Product_Price" id="Product_Price" class="form-control" placeholder="Enter Product Pirce" autocomplete="off" required="required">
            </div>
            <!-- Insert_Product -->
            <div class="mb-4 w-50 m-auto">
                <button type="submit" id="Insert_product" class="bn5" name="Insert_product">Insert Product</button>
            </div>


        </form>

    </div>
</body>

</html>