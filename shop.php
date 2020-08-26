<?php
    include("includes/db.php");
    include("functions/functions.php");
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet">
    <link href="styles/bootstrap.min.css" rel="stylesheet">
    <link href="styles/style.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<div id="top">
        <div class="container">
            <div class="col-md-6 offer">
                <a href="" class="btn btn-success btn-sm">
                    Welcome: Guest
                </a>
                <a href="">
                    Shopping Cart Total Price: $100, Total Items: 2
                </a>
            </div>
            <div class="col-md-6">
                <ul class="menu">
                    <li>
                        <a href="customer_register.php">Register</a>
                    </li>
                    <li>
                        <a href="checkout.php">My Account</a>
                    </li>
                    <li>
                        <a href="cart.php">Go to Cart</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="navbar navbar-default" id="navbar">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand home">
                    <img src="images/logo.png" alt="computerfever logo" class="hidden-xs">
                    <img src="images/logo-small.png" alt="computerfever logo" class="visible-xs">
                </a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div>
            <div class="navbar-collapse collapse" id="navigation">
                <div class="padding-nav">
                <ul class="nav navbar-nav navbar-left">
                        <li >
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <a href="cart.php" class="btn btn-primary navbar-btn right">
                    <i class="fa fa-shopping-cart"></i>
                    <span>4 items in cart</span>
                </a>
                <div class="navbar-collapse collapse-right">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>
                <div class="collapse clearfix" id="search">
                    <form action="results.php" method="get" class="navbar-form">
                        <div class="input-group">
                            <input type="text" placeholder="Search" name="user_query" class="form-control" required>
                            <button class="btn btn-primary" type="submit" value="Search" name="search">
                                <i class="fa fa-search"></i>
                                </button>
                        </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>

            <div id="content">
                <div class="container">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li>Shop</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <?php include("includes/sidebar.php"); ?>
                    </div>
                    <div class="col-md-9">
                    <?php
                        if(!isset($_GET['p_cat']))
                        {
                            if(!isset($_GET['cat']))
                            {
                                echo "
                                <div class='box'>
                                    <h1>Shop</h1>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ' </p>
                                </div>
                                ";
                            }
                        }
                        ?>
                <div class="row">
                    <?php
                          if(!isset($_GET['p_cat']))
                          {
                            if(!isset($_GET['cat']))
                            {
                                $per_page = 6;

                                if(isset($_GET['page']))
                                {
                                $page = $_GET['page'];
                                }
                                else 
                                {
                                    $page = 1;
                                }

                                $start_from = ($page-1) * $per_page;

                            $get_products = "SELECT * FROM products ORDER BY 1 DESC LIMIT $start_from, $per_page";
                            $run_products = mysqli_query($con, $get_products);

                            while($row_products = mysqli_fetch_array($run_products))
                            {
                                $pro_id = $row_products['product_id'];
                                $pro_title = $row_products['product_title'];
                                $pro_price = $row_products['product_price'];
                                $pro_img1 = $row_products['product_img1'];

                                echo "
                                <div class='col-md-4 col-sm-6 center-responsive'>
                                <div class='product'>
                                <a href='details.php?pro_id=$pro_id'>
                                <img src='admin_area/product_images/$pro_img1' class='img-responsive'>
                                </a>
                                </div>
                                <div class='text'>
                                <h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
                                <p class='price'>$$pro_price</p>
                                <p class='buttons'>
                                <a href='details.php?pro_id=$pro_id' class='btn btn-default'>View Details</a>
                                <a href='details.php?pro_id=$pro_id' class='btn btn-primary'><i class='fa fa-shopping-cart'></i>
                                Add To Cart
                                </a>
                                </p>
                                </div>
                                </div>
                                ";
                            }
    
                            
                          

                            
                    ?>
                </div>
                    <center>
                    <ul class="pagination">
                   <?php

                       }
                    }
                   ?>
                    </ul>
                    </center>
                        </div>
                    </div>
                </div>
            </div>
        
        <?php
            include("includes/footer.php");
        ?>


        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
    </html>