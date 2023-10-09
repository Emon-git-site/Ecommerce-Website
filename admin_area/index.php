<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- css file -->
    <link rel="stylesheet" href="../style.css">
    <style>
        .admin_image {
            width: 100px;
            object-fit: contain;
        }
    </style>
</head>

<body>

    <!-- navbar-->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/logo.jpg" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link"> Welcome guest</a>

                        </li>

                    </ul>
                </nav>


            </div>
        </nav>

        <!-- second child -->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>
    </div>

    <!-- third child -->
    <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex justify-content-around align-items-center">
            <div>
                <a href="#"><img src="../images/book1.jpeg" alt="" class="admin_image"></a>
                <p class="text-light text-center">Admin Name</p>
            </div>
            <div class="button text-center">
                <button><a href="insert_product.php" class="nav-link text-light bg-info m-1 p-2">Insert Products</a></button>
                <button><a href="#" class="nav-link text-light bg-info m-1 p-2">View Products</a></button>
                <button><a href="index.php?insert_category" class="nav-link text-light bg-info m-1 p-2">Insert Categories</a></button>
                <button><a href="" class="nav-link text-light bg-info m-1 p-2">View Categories</a></button>
                <button><a href="index.php?insert_brand" class="nav-link text-light bg-info m-1 p-2">Insert Brands</a></button>
                <button><a href="" class="nav-link text-light bg-info m-1 p-2">view Brands</a></button>
                <button><a href="" class="nav-link text-light bg-info m-1 p-2">All orders</a></button>
                <button><a href="" class="nav-link text-light bg-info m-1 p-2">All payment</a></button>
                <button><a href="" class="nav-link text-light bg-info m-1 p-2">List users</a></button>
                <button><a href="" class="nav-link text-light bg-info m-1 p-2">Logout</a></button>
            </div>
        </div>
    </div>

    <!-- fourth child  -->
    <div class="container my-5">
        <?php
        if (isset($_GET['insert_category'])) {
            require_once "insert_categories.php";
        }
        if (isset($_GET['insert_brand'])) {
            require_once "insert_brands.php";
        }
        ?>
    </div>

    <!-- last child -->

    <div class="bg-info p-3 w-100 text-center footer">
        <p>All rights reserved @- Designed by alauddin-2023</p>
    </div>
    <!-- Bootstrap js link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"></script>

</body>

</html>