<?php
    include("includes/db.php");
    include("functions/functions.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
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
                    Shopping Cart Total Price: <?php total_price(); ?>, Total Items: <?php items(); ?>
                </a>
            </div>
            <div class="col-md-12">
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
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li >
                            <a  href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Shopping Cart</a>
                        </li>
                        <li class="active">
                            <a href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <a href="cart.php" class="btn btn-primary navbar-btn right">
                    <i class="fa fa-shopping-cart"></i>
                    <span><?php  items(); ?> items in cart</span>
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
                            <span class="inputt-group-btn">
                            <button class="btn btn-primary" type="submit" value="Search" name="search">
                                <i class="fa fa-search"></i>
                            </button>
                            </span>
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
                    <li>Contact Us</li>
                </ul>
            </div>
            <div class="col-md-3">
                <?php include("includes/sidebar.php"); ?>
            </div>
            <div class="col-md-9">
                <div class="box">
                    <div class="box-header">
                        <center>
                            <h2>Contact Us</h2>
                            <p class="text-muted">
                                If you have any questions, please feel free to contact us, our customer service center is working for you 24/7.
                            </p>
                        </center>
                    </div>
                    <form action="contact.php" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" name="subject" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control" name="message"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-primary">
                                <i class="fa fa-user md"></i> Send Message
                            </button>
                        </div>

                    </form>
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