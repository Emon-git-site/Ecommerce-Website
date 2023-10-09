<?php
require_once "includes/connect.php" ?>;
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecommerce Website</title>
  <!-- bootstrap css link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
  <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <!-- css file -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- navbar -->
  <div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg  bg-info">
      <div class="container-fluid">
        <img src="images/logo.jpg " alt="" class="logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Total Price:100/-</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </div>
  <!-- second child -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Welcome Guest</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">login</a>
      </li>
    </ul>
  </nav>

  <!-- third child -->
  <div class="bg-light">
    <h3 class="text-center">Hidden Store </h3>
    <P class="text-center">Communication is at the heart of e-commerce and community</P>
  </div>

  <!-- fourth child -->
  <div class="row">
    <div class="col-md-10">
      <!-- products -->
      <div class="row">
        <div class="col-md-4 mb-2">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top card_image" src="./images/food1.jpeg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-info">Add to cart</a>
              <a href="#" class="btn btn-secondary">View more</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top card_image" src="./images/food2.jpeg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-info">Add to cart</a>
              <a href="#" class="btn btn-secondary">View more</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top card_image" src="./images/food3.jpeg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-info">Add to cart</a>
              <a href="#" class="btn btn-secondary">View more</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top card_image" src="./images/shirt1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-info">Add to cart</a>
              <a href="#" class="btn btn-secondary">View more</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top card_image" src="./images/shirt2.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-info">Add to cart</a>
              <a href="#" class="btn btn-secondary">View more</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top card_image" src="./images/shirt3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-info">Add to cart</a>
              <a href="#" class="btn btn-secondary">View more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-2 bg-secondary p-0">
      <!-- brands to be displayed -->
      <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
          <a href="#" class="nav-link text-light"><h4>delivery Brand</h4></a>
        </li>
        <?php 
        $select_brands = "SELECT * FROM `brands`";
        $result_brands = mysqli_query($con, $select_brands);
        while($row_data = mysqli_fetch_assoc($result_brands)){
         $brand_name = $row_data['brand_name'];
         $brand_id = $row_data['brand_id'];

         
         echo "<li class='nav-item'> <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_name </a></li>" ;

        }
        ?>
    
      </ul>
      <!-- category to be displayed -->
      <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
          <a href="#" class="nav-link text-light"><h4>Categrories</h4></a>
        </li>

        <?php
        $select_category = "SELECT * FROM `categories`";
        $result_category = mysqli_query($con, $select_category );
        while($row_data = mysqli_fetch_assoc($result_category)){
          $category_id = $row_data['category_id'];
          $category_name = $row_data['category_name'];

         echo "<li class='nav-item'>
            <a href='index.php?category_id=$category_id' class='nav-link text-light'>$category_name</a>
          </li>" ;
        }
        ?>
 
      </ul>

    </div>

    <!-- last child -->
    <!-- <div class="bg-info p-3 text-center footer">
      <p>All rights reserved @- Designed by alauddin-2023</p>
    </div>  -->
    <!-- bootstrap js link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"></script>
</body>

</html>