<?php

use LDAP\Result;

include("../database.php");

if (isset($_POST['insert_category'])) {
  $category_title = $_POST['cate_title'];



  $select_query = "Select * from `catagories` where Category_tittle='$category_title'";

  $select_result = mysqli_query($conn, $select_query);
  $number = mysqli_num_rows($select_result);
  if ($number > 0) {
    echo ("<div class='alert alert-danger'>Category already exists</div>");
  } else {



    $insert_query = "insert into `catagories` (Category_tittle) values ('$category_title')";

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
  <div class="input-group m-3 p-1">
    <button name="insert_category" class=" border-0 bn5">Insert Catagories
    </button>
  </div>

</form>