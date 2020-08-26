<?php
    include("includes/db.php");
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
                        <li class="active">
                            <a href="index.php">Home</a>
                        </li>
                        <li >
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="customer/my_account.php">My Account</a>
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

            <!-- Carousel Section -->
    <div class="container" id="slider">
        <div class="col-md-12">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" class="active"  data-slide-to="0"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                <?php
                        $get_slides = "SELECT * FROM slider LIMIT 0, 1";
                        $run_slides = mysqli_query($con, $get_slides);

                        while($row_slides = mysqli_fetch_array($run_slides))
                        {
                            $slide_name = $row_slides['slide_name'];
                            $slide_image = $row_slides['slide_image'];

                            echo "
                            <div class='item active'>
                                <img src='admin_area/slides_images/$slide_image'>
                            </div>
                            ";
                        }
                    ?>
                    <?php
                         $get_slides = "SELECT * FROM slider LIMIT 1, 3";
                         $run_slides = mysqli_query($con, $get_slides);

                         while($row_slides = mysqli_fetch_array($run_slides))
                         {
                            $slide_name = $row_slides['slide_name'];
                            $slide_image = $row_slides['slide_image'];

                            echo "
                            <div class='item'>
                                <img src='admin_area/slides_images/$slide_image'>
                            </div>
                            ";
                         }
                    ?>
                </div>
                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a href="#myCarousel" class="right carousel-control" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div id="advantages">
         <div class="container">
             <div class="same-height-row">
                 <div class="col-sm-4">
                     <div class="box same-height">
                         <div class="icon">
                             <i class="fa fa-heart"></i>
                         </div>
                         <h3><a href="">WE LOVE OUR CUSTOMERS</a></h3>
                         <p>We are known to provide best possible service ever</p>
                     </div>
                 </div>
                 <div class="col-sm-4">
                     <div class="box same-height">
                         <div class="icon">
                             <i class="fa fa-tags"></i>
                         </div>
                         <h3><a href="">BEST PRICES</a></h3>
                         <p>You can check on all other sites about the prices and then compare with is</p>
                     </div>
                 </div>
                 <div class="col-sm-4">
                     <div class="box same-height">
                         <div class="icon">
                             <i class="fa fa-thumbs-up"></i>
                         </div>
                         <h3><a href="">100% SATISFACTION GUARANTEED</a></h3>
                         <p>Free returns on everything for 3 months.</p>
                     </div>
                 </div>
             </div>
         </div>
     </div>

       <!-- Latest Header -->
       <div id="hot">
         <div class="box">
             <div class="container">
                 <div class="col-md-12">
                     <h2>Latest this week</h2>
                 </div>
             </div>
         </div>
     </div>
     <!-- Content -->
     <div id="content" class="container">
         <div class="row">
             <div class="col-sm-4 col-sm-6  single">
                 <div class="product">
                     <a href="details.php">
                         <img src="admin_area/product_images/product.jpg" class="img-responsive" alt="">
                     </a>
                     <div class="text">
                         <h3><a href="details.php">MARVEL Black Kids POLO T-Shirt</a></h3>
                         <p class="price">$50</p>
                         <p class="buttons">
                             <a href="details.php" class="btn btn-default">View Details</a>
                             <a href="details.php" class="btn btn-primary">
                                 <i class="fa fa-shopping-cart"></i>Add to cart
                             </a>
                         </p>
                     </div>
                 </div>
             </div>
             <div class="col-sm-4 col-sm-6   single">
                 <div class="product">
                     <a href="details.php">
                         <img src="admin_area/product_images/product.jpg" class="img-responsive" alt="">
                     </a>
                     <div class="text">
                         <h3><a href="details.php">MARVEL Black Kids POLO T-Shirt</a></h3>
                         <p class="price">$50</p>
                         <p class="buttons">
                             <a href="details.php" class="btn btn-default">View Details</a>
                             <a href="details.php" class="btn btn-primary">
                                 <i class="fa fa-shopping-cart"></i>Add to cart
                             </a>
                         </p>
                     </div>
                 </div>
             </div>
             <div class="col-sm-4 col-sm-6  single">
                 <div class="product">
                     <a href="details.php">
                         <img src="admin_area/product_images/product.jpg" class="img-responsive" alt="">
                     </a>
                     <div class="text">
                         <h3><a href="details.php">MARVEL Black Kids POLO T-Shirt</a></h3>
                         <p class="price">$50</p>
                         <p class="buttons">
                             <a href="details.php" class="btn btn-default">View Details</a>
                             <a href="details.php" class="btn btn-primary">
                                 <i class="fa fa-shopping-cart"></i>Add to cart
                             </a>
                         </p>
                     </div>
                 </div>
             </div>
             <div class="col-sm-4 col-sm-6  single">
                 <div class="product">
                     <a href="details.php">
                         <img src="admin_area/product_images/product.jpg" class="img-responsive" alt="">
                     </a>
                     <div class="text">
                         <h3><a href="details.php">MARVEL Black Kids POLO T-Shirt</a></h3>
                         <p class="price">$50</p>
                         <p class="buttons">
                             <a href="details.php" class="btn btn-default">View Details</a>
                             <a href="details.php" class="btn btn-primary">
                                 <i class="fa fa-shopping-cart"></i>Add to cart
                             </a>
                         </p>
                     </div>
                 </div>
             </div>
             <div class="col-sm-4 col-sm-6  single">
                 <div class="product">
                     <a href="details.php">
                         <img src="admin_area/product_images/product.jpg" class="img-responsive" alt="">
                     </a>
                     <div class="text">
                         <h3><a href="details.php">MARVEL Black Kids POLO T-Shirt</a></h3>
                         <p class="price">$50</p>
                         <p class="buttons">
                             <a href="details.php" class="btn btn-default">View Details</a>
                             <a href="details.php" class="btn btn-primary">
                                 <i class="fa fa-shopping-cart"></i>Add to cart
                             </a>
                         </p>
                     </div>
                 </div>
             </div>

             <div class="col-sm-4 col-sm-6   single">
                 <div class="product">
                     <a href="details.php">
                         <img src="admin_area/product_images/product.jpg" class="img-responsive" alt="">
                     </a>
                     <div class="text">
                         <h3><a href="details.php">MARVEL Black Kids POLO T-Shirt</a></h3>
                         <p class="price">$50</p>
                         <p class="buttons">
                             <a href="details.php" class="btn btn-default">View Details</a>
                             <a href="details.php" class="btn btn-primary">
                                 <i class="fa fa-shopping-cart"></i>Add to cart
                             </a>
                         </p>
                     </div>
                 </div>
             </div>

             <div class="col-sm-4 col-sm-6  single">
                 <div class="product">
                     <a href="details.php">
                         <img src="admin_area/product_images/product.jpg" class="img-responsive" alt="">
                     </a>
                     <div class="text">
                         <h3><a href="details.php">MARVEL Black Kids POLO T-Shirt</a></h3>
                         <p class="price">$50</p>
                         <p class="buttons">
                             <a href="details.php" class="btn btn-default">View Details</a>
                             <a href="details.php" class="btn btn-primary">
                                 <i class="fa fa-shopping-cart"></i>Add to cart
                             </a>
                         </p>
                     </div>
                 </div>
             </div>

             <div class="col-sm-4 col-sm-6  single">
                 <div class="product">
                     <a href="details.php">
                         <img src="admin_area/product_images/product.jpg" class="img-responsive" alt="">
                     </a>
                     <div class="text">
                         <h3><a href="details.php">MARVEL Black Kids POLO T-Shirt</a></h3>
                         <p class="price">$50</p>
                         <p class="buttons">
                             <a href="details.php" class="btn btn-default">View Details</a>
                             <a href="details.php" class="btn btn-primary">
                                 <i class="fa fa-shopping-cart"></i>Add to cart
                             </a>
                         </p>
                     </div>
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