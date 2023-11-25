<?php
include('database.php');


function viewproduct()
{
    global $conn;
    $select_product_detail = "SELECT * from `products`";
    $connect_data = mysqli_query($conn, $select_product_detail);
    while ($drag_row_data = mysqli_fetch_assoc($connect_data)) {

        $Product_image1 = $drag_row_data['Product_image1'];
        $Product_image2 = $drag_row_data['Product_image2'];
        $Product_image3 = $drag_row_data['Product_image3'];
        $Product_title = $drag_row_data['Product_Title'];
        $Product_Price = $drag_row_data['Product_Price'];

        echo "<div class='p-2 col-lg-3 col-md-6 col-6'>
                <div class='card border-0'>
                        <img src='Admin_area/Products_image/$Product_image1' class='card-img-top' alt='Product-img'>
                    <div class='card-body'>
                        <h6 class='card-title'>$Product_title</h6>
                        <span>$Product_Price</span>
                </div>
                    </div>
                        </div>";
    }
}



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
