<?php
require_once "../includes/connect.php";

echo '<h2 class="text-center">Insert Brands</h2>';

if(isset($_POST['brand_submit'])){
  $brand_name = $_POST['insert_brand'];
  $select_query = "SELECT * FROM `brands` WHERE  `name` = '$brand_name' ";
  $insert_query = "INSERT INTO `brands` (`name`) VALUES  ('$brand_name') ";
  $get_row = mysqli_query($con, $select_query);
  $row_number = mysqli_num_rows($get_row);
  if($row_number > 0){ ?>


<div class="alert alert-primary alert-dismissible fade show" role="alert">
      <?= "Duplicate brand can't insert"; ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

      </button>
    </div>
    <?php
  }
  else{
    $data_insert = mysqli_query($con, $insert_query);
    if($data_insert){ ?>
       

<div class="alert alert-primary alert-dismissible fade show" role="alert">
  <?= "Brand insert Successfully"; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

  </button>
</div>
    <?php
       
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
        <input type="text" class="form-control ms-2" name="insert_brand" id="inputFirstName" placeholder="Insert Brands">
      </div>
    </div>
  </div>

  <div class="input-group w-10 mb-2 ms-2 m-auto">
    <div class="input-group-prepend">
    </div>
    <input type="submit" class=" bg-secondary border-0 p-2 " name="brand_submit" value="Insert Brands">
    <!-- <button class="bg-info p-2 my-3 border-0">Insert Categories</button> -->
  </div>
</form>