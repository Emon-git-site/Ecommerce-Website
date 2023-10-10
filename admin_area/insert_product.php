<?php
require_once "../includes/connect.php" ;

if(isset($_POST['insert_product'])){
    $product_name = $_POST['product_name'];
    $product_description = $_POST['product_description'];
    $product_keywords = $_POST['product_keywords'];
    $products_categories = $_POST['products_categories'];
    $products_brands = $_POST['products_brands'];
    $product_price = $_POST['product_price'];
    $prodcut_status = "true";



      
    // accessing image name
    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];

    // accessing image temporary name

    $temp_product_image1 = $_FILES['product_image1']['tmp_name'];
    $temp_product_image2 = $_FILES['product_image2']['tmp_name'];
    $temp_product_image3 = $_FILES['product_image3']['tmp_name'];



    if($product_name == '' or $product_description == '' or $product_keywords == '' or
                        $products_categories == '' or $products_brands == '' or $product_price
                        == '' or $product_image1 == '' or $product_image2 == '' or$product_image3 == '' ){

                            echo "<script>alert('All Input field should be filled')</script>";
                        }else{
                            move_uploaded_file($temp_product_image1, "./images/product_image1");
                            move_uploaded_file($temp_product_image2, "./images/product_image2");
                            move_uploaded_file($temp_product_image3, "./images/product_image3");
    $insert_query = "INSERT INTO  `products` (`product_name`, `product_description`, `product_keywords`,
                     `category_id`, `brand_id`, `product_image1`, `product_image2`, `product_image3`, `product_price`, `status`)
                      VALUES ('$product_name','$product_description','$product_keywords','$products_categories','$products_brands',
                      '$product_image1','$product_image2','$product_image3','$product_price','$prodcut_status')";

    $result = mysqli_query($con, $insert_query);

    print_r($result);
    if($result){
        echo "<script>alert('Data insert Successfully')</script>";

    }

        
}


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products-Admin Dashboard</title>
     <!-- Bootstrap css link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- css file -->
    <link rel="stylesheet" href="../style.css">
</head>
<body class="bg-light">
   <div class="container">
    <h1 class="text-center mt-3"> Insert Products</h1>
   <!-- form    -->
   <form action="" method="post" enctype="multipart/form-data" >
    <!-- title -->
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_title" class="form-label">Product title</label>
        <input type="text" name="product_name" id="product_title" class="form-control" placeholder="Enter Product title" autocomplete="off" required>
    </div>
   
    <!--product description -->
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_description" class="form-label">Product Description</label>
        <input type="text" name="product_description" id="product_description" class="form-control" placeholder="Enter Product Description" autocomplete="off" required>
    </div>
    
    <!-- keywords -->
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_keywords" class="form-label">Product keywords</label>
        <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Enter Product keywords" autocomplete="off" required>
    </div>

    <!-- categories -->
    <div class="form-outline mb-4 w-50 m-auto">
        <select name="products_categories" id="" class="form-select">
            <option value="">Select a category</option>

            <?php
             $select_query = "SELECT * FROM `categories`";
             $result_query = mysqli_query($con, $select_query);
             while($row = mysqli_fetch_assoc($result_query)){
                 $category_id = $row['category_id'];
                 $category_name = $row['category_name'];

                echo "<option value='$category_id'>$category_name</option>" ;
             }

               
            ?> 

        </select>
    </div>

     <!-- brands -->
     <div class="form-outline mb-4 w-50 m-auto">
        <select name="products_brands" id="" class="form-select">
            <option value="">Select a Brand</option>

            <?php
             $select_query = "SELECT * FROM `brands`";
             $result_query = mysqli_query($con, $select_query);
             while($row = mysqli_fetch_assoc($result_query)){
                 $brand_id = $row['brand_id'];
                 $brand_name = $row['brand_name'];
                echo "<option value='$brand_id'>$brand_name</option>" ;
             }

               
            ?> 
        </select>
    </div>
      <!-- image 1  -->
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="image 1" class="form-label">Product Image 1</label>
        <input type="file" name="product_image1" id="image 1" class="form-control"  required>
    </div>

    <!-- image 2  -->
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="image 2" class="form-label">Product Image 2</label>
        <input type="file" name="product_image2" id="image 2" class="form-control"  required>
    </div>
     
      <!-- image 3  -->
      <div class="form-outline mb-4 w-50 m-auto">
        <label for="image 3" class="form-label">Product Image 3</label>
        <input type="file" name="product_image3" id="image 3" class="form-control"  required>
    </div>
    
     <!-- price -->
     <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_price" class="form-label">Product Price</label>
        <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter Product Price" autocomplete="off" required>
    </div>
     <!-- price -->
     <div class="form-outline mb-4 w-50 m-auto">
        <input type="submit" name="insert_product" id="product_price" class="btn btn-info mb-3 px-3" value="Insert value">
    </div>


   </form>
</div> 

     <!-- Bootstrap js link -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"></script
</body>
</html>