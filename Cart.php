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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script>
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
  </script>
  <style>
    #search_form {
      display: contents;
    }

    .Search_click {
      background-color: #F8F9FA;
      height: 32px;
    }



    .Continue_link_col {
      text-align: center;
      display: flex;
      align-items: flex-end;
      justify-content: center;
    }

    .Continue_link_col a {
      color: #717171;
    }

    .Continue_link_col a:hover {
      text-decoration: none;
    }

    .bn632-hover {
      margin: 0;
    }

    .Empty_cart_button {
      display: flex;
      align-items: flex-end;
      justify-content: end;
    }

    @media only screen and (max-width: 480px) {
      #main {
        margin-top: 2.5rem;
      }

      .Empty_cart_button {
        justify-content: start;

      }

      .quantity_section {
        width: 100% !important;
      }
    }

    th {
      font-weight: 100;
      font-size: small;
    }

    .cart-product-title {
      display: -webkit-box;
      -webkit-box-orient: vertical;
      overflow: hidden;
      -webkit-line-clamp: 2;
    }

    .cart-product-image {
      width: 110px;
      height: 125px;
      object-fit: contain;
    }

    .cart-product-title {
      overflow: hidden;
      max-height: 2.5em;
    }

    .cart-product-title h6 {
      color: #717171;
    }

    .quantity_plus {
      border: 0;
      background: #FFFFFF;
      font-size: x-large;
    }

    .quantity_minus {
      border: 0;
      background: #FFFFFF;
      font-size: x-large;
    }

    .quantity-qty {
      border: 0;
      width: 50%;
      text-align: center;
    }

    .quantity-qty:focus {
      outline: none;
    }

    .quantity_section {
      border: 1px solid #717171;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 50%;
    }

    .quantity_trash {
      display: flex;
      align-items: center;
    }

    .checkout_container {
      display: flex;
      justify-content: end;
    }

    .total_product_price {
      color: #717171;
    }
  </style>
</head>

<body>



  <?php
  include("Header.php");
  ?>



  <div id="main" class="container m-lg-5 p-lg-5">

    <div class="row">
      <div class="col-lg-4 col-md-4 col-6">
        <h1>Your cart</h1>
      </div>
      <div class="col-lg-4 col-md-4 col-6 Continue_link_col">
        <a href="index.php">Continue shopping</a>
      </div>
      <div class="col-lg-4 col-md-4 col-6 Empty_cart_button">
        <div id="view_all_button">
          <a href="#"><button class="bn632-hover bn21">Empty Cart</button></a>
        </div>
      </div>
    </div>



    <table class="table mt-4">
      <thead>
        <tr>
          <th scope="col">PRODUCT</th>
          <th scope="col">QUANTITY</th>
          <th scope="col">Total</th>
        </tr>
      </thead>
      <tbody>
        <?php

        global  $conn;
        $ipaddress = get_client_ip();
        $total = 0;
        $check_ip_add = mysqli_query($conn, "SELECT * FROM  `cart_detail` where ip_address='$ipaddress'");
        while ($row = mysqli_fetch_array($check_ip_add)) {
          $product_id = $row['Product_ID'];
          $match = mysqli_query($conn, "SELECT * FROM `products` WHERE Product_ID='$product_id'");

          while ($rows = mysqli_fetch_array($match)) {

            $product_Price_array = array(preg_replace("/[^0-9]/", "", $rows['Product_Price']));

            // echo "<h1>" . $product_Price_array . "</h1>";

            $product_title = $rows['Product_Title'];
            $product_image = $rows['Product_image1'];
            $product_Price = $rows['Product_Price'];
            $product_id = $rows['Product_ID'];

            $Product_total_price = array_sum($product_Price_array);
            $total += $Product_total_price;



        ?>
            <tr>
              <td class="d-flex"><img src="Admin_area/Products_image/<?php echo $product_image; ?>" alt="ProductImage" class="cart-product-image">
                <div class="cart-product-title">
                  <h6><?php echo $product_title; ?></h6>
                </div>
              </td>
              <td>
                <div class="quantity_trash">
                  <div class="quantity_section">
                    <button aria-hidden="true" onclick="minusvaluebutton(<?php echo $product_id; ?>)" class="quantity_minus">-</button>
                    <input id="quantity_qty_<?php echo $product_id; ?>" value="1" min="1" max="10" type="text" name="" class="quantity-qty">
                    <button aria-hidden="true" onclick="plusvaluebutton( <?php echo $product_id; ?>)" class="quantity_plus">+</button>
                  </div>
                  <div class="trash_cart_product p-2">
                    <i class="fa-solid fa-trash-can"></i>
                  </div>
                </div>
              </td>
              <td>
                <div class="total_product_price"><?php echo  number_format($product_Price, 2) . " PKR"; ?></div>
              </td>
            </tr>
        <?php       }
        } ?>

      </tbody>
    </table>



    <div class="checkout_container">
      <p>Estimated total <?php echo  "Rs " . number_format($total, 2) . " PKR"; ?></p>
    </div>
    <div class="checkout_container">
      <div>
        <a href="Checkout.php"><button class="bn632-hover bn21">Check Out</button></a>
      </div>
    </div>




  </div>




  <?php

  include("footer.php");

  ?>



  <script>
    function plusvaluebutton(product_id) {

      quantityQtyInputs = document.getElementById('quantity_qty_' + product_id);
      quantityvalue = parseInt(quantityQtyInputs.value);
      // console.log("YES YESS !!!!!!!!!!!!", quantityvalue);

      if (quantityvalue < 10) {
        quantityQtyInputs.value = quantityvalue + 1
      }

    }

    function minusvaluebutton(product_id) {
      quantityQtyInputs = document.getElementById('quantity_qty_' + product_id);
      quantityvaluedecerment = parseInt(quantityQtyInputs.value);

      if (quantityvaluedecerment > 0) {

        quantityQtyInputs.value = quantityvaluedecerment - 1

      }

    }
  </script>
</body>

</html>