<?php
require_once "../includes/connect.php";

if (isset($_POST['insert_cat'])) {
  $category_title = $_POST['cat_title'];
  $select_sql = " SELECT *  FROM `categories`  WHERE `category_name` = '$category_title' ";
  $get_row = mysqli_query($con, $select_sql);
  $row_number = mysqli_num_rows($get_row);
  // print_r($row_number);
  if($row_number > 0){
  
      echo "Duplicate value not Inserted";
     
  }else{
    $insert_sql = "INSERT INTO `categories` (`category_name`) VALUES ('$category_title')";
    $result = mysqli_query($con, $insert_sql);
      if($result){
        echo 'Data insert Sucessfully';

    }

  }
}


?>



<form action="" method="post" class="mb-2">



 <div class="form-group mb-3">
    <div class="input-group">
      <div class="input-group addon input-group-text">
        <i class="fa fa-receipt">
        </i>
        <input type="text" class="form-control ms-2" name="cat_title" id="inputFirstName" placeholder="Insert categories">
      </div>
    </div>
  </div>

  <div class="input-group w-10 mb-2 ms-2 m-auto">
    <div class="input-group-prepend">
    </div>
    <input type="submit" class=" bg-info border-0 p-2 " name="insert_cat" value="Insert categories">
    <!-- <button class="bg-info p-2 my-3 border-0">Insert Categories</button> -->
  </div>
</form>