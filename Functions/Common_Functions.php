<style>
    .text-decoration-none {
        color: #212529;
    }
</style>


<?php
include('database.php');

// View Products
function viewproduct()
{
    global $conn;

    if (!isset($_GET['Category'])) {
        if (!isset($_GET['Brands'])) {


            $select_product_detail = "SELECT * from `products`";
            $connect_data = mysqli_query($conn, $select_product_detail);
            while ($drag_row_data = mysqli_fetch_assoc($connect_data)) {

                $Product_image1 = $drag_row_data['Product_image1'];
                $Product_image2 = $drag_row_data['Product_image2'];
                $Product_image3 = $drag_row_data['Product_image3'];
                $Product_ID = $drag_row_data['Product_ID'];
                $Product_title = $drag_row_data['Product_Title'];
                $Product_Description = $drag_row_data['Product_Description'];
                $Product_Keywords = $drag_row_data['Product_Keywords'];
                $Product_Price = $drag_row_data['Product_Price'];
                $Category_id = $drag_row_data['Category_id'];
                $Brands_id = $drag_row_data['Brands_id'];

                echo "<div class='p-2 col-lg-3 col-md-6 col-6'>
                <div class='card border-0'>
                     <a class='text-decoration-none ' href='Product_details_page.php?Product=$Product_ID'>
                        <img src='Admin_area/Products_image/$Product_image1' class='card-img-top' alt='Product-img'>
                    <div class='card-body'>
                        <h6 class='card-title'>$Product_title</h6>
                        <span>$Product_Price</span>
                        </a>
                </div>
                    </div>
                        </div>";
            }
        }
    }
}

// View unqiue Category
function viewunqiuecatgories()
{
    global $conn;
    if (isset($_GET['Category'])) {
        $Category_id = $_GET['Category'];

        $select_product_detail = "SELECT * from `products` where Category_id=$Category_id";
        $connect_data = mysqli_query($conn, $select_product_detail);
        $count_row = mysqli_num_rows($connect_data);
        if ($count_row == 0) {
            echo "<h1 class='text-center py-5 alert alert-info text-dark mt-2'>Products Not Available</h1>";
        }
        while ($drag_row_data = mysqli_fetch_assoc($connect_data)) {

            $Product_image1 = $drag_row_data['Product_image1'];
            $Product_image2 = $drag_row_data['Product_image2'];
            $Product_image3 = $drag_row_data['Product_image3'];
            $Product_ID = $drag_row_data['Product_ID'];
            $Product_title = $drag_row_data['Product_Title'];
            $Product_Description = $drag_row_data['Product_Description'];
            $Product_Keywords = $drag_row_data['Product_Keywords'];
            $Product_Price = $drag_row_data['Product_Price'];
            $Category_id = $drag_row_data['Category_id'];
            $Brands_id = $drag_row_data['Brands_id'];

            echo "<div class='p-2 col-lg-3 col-md-6 col-6'>
                <div class='card border-0'>
                <a class='text-decoration-none ' href='Product_details_page.php?Product=$Product_ID'>
                        <img src='Admin_area/Products_image/$Product_image1' class='card-img-top' alt='Product-img'>
                    <div class='card-body'>
                        <h6 class='card-title'>$Product_title</h6>
                        <span>$Product_Price</span>
                        </a>
                </div>
                    </div>
                        </div>";
        }
    }
}

// View Category
function viewcatagories()
{
    global $conn;
    $select_qurey = "SELECT * from `catagories`";
    $after_select = mysqli_query($conn, $select_qurey);
    while ($catagories_row_data = mysqli_fetch_assoc($after_select)) {
        $Category_tittle = $catagories_row_data['Category_tittle'];
        $Category_id = $catagories_row_data['Category_id'];

        echo "<li class='nav-item'>
                            <a class='nav-link' href='Product_page.php?Category=$Category_id'>$Category_tittle</a>
                        </li>";
    }
}

// View unqiue Category
function viewunqiuebrands()
{
    global $conn;
    if (isset($_GET['Brands'])) {
        $Brands_id = $_GET['Brands'];

        $select_product_detail = "SELECT * from `products` where Brands_id=$Brands_id";
        $connect_data = mysqli_query($conn, $select_product_detail);
        $count_row = mysqli_num_rows($connect_data);
        if ($count_row == 0) {
            echo "<h1 class='text-center py-5 alert alert-info text-dark mt-2'>Products Not Available</h1>";
        }
        while ($drag_row_data = mysqli_fetch_assoc($connect_data)) {

            $Product_image1 = $drag_row_data['Product_image1'];
            $Product_image2 = $drag_row_data['Product_image2'];
            $Product_image3 = $drag_row_data['Product_image3'];
            $Product_Description = $drag_row_data['Product_Description'];
            $Product_Keywords = $drag_row_data['Product_Keywords'];
            $Product_title = $drag_row_data['Product_Title'];
            $Product_ID = $drag_row_data['Product_ID'];
            $Product_Price = $drag_row_data['Product_Price'];
            $Brands_id = $drag_row_data['Brands_id'];

            echo "<div class='p-2 col-lg-3 col-md-6 col-6'>
                <div class='card border-0'>                     <a class='text-decoration-none 'href='Product_details_page.php?Product=$Product_ID'>
                        <img src='Admin_area/Products_image/$Product_image1' class='card-img-top' alt='Product-img'>
                    <div class='card-body'>
                        <h6 class='card-title'>$Product_title</h6>
                        <span>$Product_Price</span>
                        </a>
                </div>
                    </div>
                        </div>";
        }
    }
}

// View Brands
function viewbrands()
{
    global $conn;
    $brands_select_qurey = "SELECT * from `brands`";
    $after_brands_select = mysqli_query($conn, $brands_select_qurey);
    while ($Brands_row_data = mysqli_fetch_assoc($after_brands_select)) {
        $Brands_tittle = $Brands_row_data['Brands_tittle'];
        $Brands_id = $Brands_row_data['Brands_id'];
        echo "<li class='nav-item'>
                            <a class='nav-link' href='Product_page.php?Brands=$Brands_id'>$Brands_tittle</a>
                        </li>";
    }
}


/////// Search Product box

function searchproduct()
{

    global $conn;

    if (isset($_GET['Search_click'])) {
        $search_box_vlaue = $_GET['Search_product_box'];

        $Search_product = "SELECT * from `products` where Product_Keywords like'%$search_box_vlaue%'";
        $connect_data = mysqli_query($conn, $Search_product);
        while ($drag_row_data = mysqli_fetch_assoc($connect_data)) {

            $Product_image1 = $drag_row_data['Product_image1'];
            $Product_image2 = $drag_row_data['Product_image2'];
            $Product_image3 = $drag_row_data['Product_image3'];
            $Product_title = $drag_row_data['Product_Title'];
            $Product_ID = $drag_row_data['Product_ID'];
            $Product_Price = $drag_row_data['Product_Price'];
            $Category_id = $drag_row_data['Category_id'];
            $Brands_id = $drag_row_data['Brands_id'];
            $Product_Description = $drag_row_data['Product_Description'];
            $Product_Keywords = $drag_row_data['Product_Keywords'];

            echo "<div class='p-2 col-lg-3 col-md-6 col-6'>
        <div class='card border-0'>
        <a class='text-decoration-none ' href='Product_details_page.php?Product=$Product_ID'>
        <img src='Admin_area/Products_image/$Product_image1' class='card-img-top' alt='Product-img'>
        <div class='card-body'>
        <h6 class='card-title'>$Product_title</h6>
        <span>$Product_Price</span>
        </a>
        </div>
        </div>
        </div>";
        }
    }
}

// Function to get the client IP address
function get_client_ip()
{
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if (getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if (getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if (getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if (getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if (getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}



// ADD TO CART FUNCTION

function Cart()
{

    if (isset($_GET['addtocart'])) {
        global  $conn;

        $ipaddress = get_client_ip();
        $product_id = $_GET['addtocart'];

        $Select_query = "SELECT * FROM  `cart_detail` where ip_address='$ipaddress' and Product_ID='$product_id'";
        $result = mysqli_query($conn, $Select_query);
        $count_row_num = mysqli_num_rows($result);
        if ($count_row_num > 0) {
            echo "<script>window.open('Product_details_page.php'.'_self')</script>";
            echo "<div class='alert alert-danger mt-2 d-flex justify-content-between'>This product is already added in the cart<a class='d-flex justify-content-center text-decoration-none text-danger' href='addtocart.php'>Go to Cart</a></div>";
        } else {
            $insert_given_data = "INSERT INTO `cart_detail` (ip_address	, Product_ID, Quantity) VALUES ('$ipaddress', '$product_id' , 0)";
            $result = mysqli_query($conn, $insert_given_data);
            echo "<div class='alert alert-success mt-2 d-flex justify-content-between'>Added to cart successfully<a class='d-flex justify-content-center text-decoration-none text-danger' href='addtocart.php'>Go to Cart</a></div>";
        }
    }
}


// ADD TO CART FUNCTION

function MainCart()
{

    if (isset($_GET['add_to_cart'])) {
        global  $conn;

        $ipaddress = get_client_ip();
        $product_id = $_GET['add_to_cart'];

        $Select_query = "SELECT * FROM  `cart_detail` where ip_address='$ipaddress' and Product_ID='$product_id'";
        $result = mysqli_query($conn, $Select_query);
        $count_row_num = mysqli_num_rows($result);
        if ($count_row_num > 0) {
            // echo "<script>alert('This product is already Added')</script>";
            // echo "<script>window.open('index.php', '_self')</script>";
        } else {
            $insert_given_data = "INSERT INTO `cart_detail` (ip_address	, Product_ID, Quantity) VALUES ('$ipaddress', '$product_id' , 0)";
            $result = mysqli_query($conn, $insert_given_data);
            // echo "<script>alert('This Product Added Go to Cart')</script>";
        }
    }
};



// cart number funtion

function cart_number()
{

    if (isset($_GET['add_to_cart']) && isset($_GET['addtocart'])) {
        global  $conn;
        $ipaddress = get_client_ip();

        $Select_query = "SELECT * FROM  `cart_detail` where ip_address='$ipaddress'";
        $result = mysqli_query($conn, $Select_query);
        $cart_number = mysqli_num_rows($result);
    } else {
        global  $conn;
        $ipaddress = get_client_ip();

        $Select_query = "SELECT * FROM  `cart_detail` where ip_address='$ipaddress'";
        $result = mysqli_query($conn, $Select_query);
        $cart_number = mysqli_num_rows($result);
    }
    echo $cart_number;
}


?>