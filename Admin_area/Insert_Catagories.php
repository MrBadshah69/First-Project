<?php

use LDAP\Result;

include("../database.php");

if (isset($_POST['insert_category'])) {
  $category_title = $_POST['cate_title'];

  // Image 
  $category_image = $_FILES['cate_image']['name'];
  
  // tmp image
  $tmp_category_image = $_FILES['cate_image']['tmp_name'];




  $select_query = "Select * from `catagories` where Category_tittle='$category_title' Category_Image='$category_image'";

  $select_result = mysqli_query($conn, $select_query);
  $number = mysqli_num_rows($select_result);
  if ($number > 0) {
    echo ("<div class='alert alert-danger'>Category already exists</div>");
  } else {

    // Image Move
    move_uploaded_file($tmp_category_image, "./Category_Image/$category_image");

    $insert_query = "insert into `catagories` (Category_tittle,Category_Image) values ('$category_title','$category_image')";

    $Result = mysqli_query($conn, $insert_query);
    if ($Result) {
      echo ("<div class='alert alert-success'>Category Updated</div>");
    }
  }
}

?>

<style>
  .input-group-text {
    background-color: #f3f3f3;
  }

  .form-control {
    outline: none;
  }
</style>




<form action="" method="post" class="mt-2">

  <div class="input-group m-3 w-90">
    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
    <input type="text" class="form-control" name="cate_title" placeholder="Insert Catagories" aria-label="Username" aria-describedby="basic-addon1">
  </div>
  <div class="input-group m-3 w-90">
    <input type="file" class="form-control" name="cate_image" placeholder="Insert Catagories Image">
  </div>
  <div class="input-group m-3 p-1">
    <button name="insert_category" class=" border-0 bn5">Insert Catagories
    </button>
  </div>

</form>