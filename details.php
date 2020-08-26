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
                    Shopping Cart Total Price: $100, Total Items: 2
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
                        <li class="active">
                            <a  href="shop.php">Shop</a>
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
                    <li>Shop</li>
                </ul>
            </div>
            <div class="col-md-3">
                <?php include("includes/sidebar.php"); ?>
            </div>

            <!-- Carousel  --> 

            <div class="col-md-9">
                <div class="row" id="productMain">
                    <div class="col-sm-6">
                        <div id="mainImage">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <center>
                                            <img src="admin_area/product_images/product.jpg" class="img-responsive" >
                                        </center>
                                    </div>

                                    <div class="item">
                                        <center>
                                            <img src="admin_area/product_images/product2.jpg" class="img-responsive">
                                        </center>
                                    </div>

                                    <div class="item">
                                        <center>
                                            <img src="admin_area/product_images/product3.jpg" class="img-responsive">
                                        </center>
                                    </div>

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

                    <div class="col-sm-6">
                        <div class="box">
                            <h1 class="text-center">MARVEL Black Kids POLO T-Shirt</h1>
                            <div class="text-center">
                                <form action="details.php" method="post" class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label">Product Quantity</label>
                                        <div class="col-md-7">
                                            <select name="product_qty" class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>

                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="" class="col-md-5 control-label">Product Size</label>
                                        <div class="col-md-7">
                                            <select name="col-md-7" id="" class="form-control">
                                                <option>Small</option>
                                                <option>Medium</option>
                                                <option>Large</option>

                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                    <p class="price">$50</p>
                                    <p class="text-center buttons">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-shopping-cart"></i>Add to Cart
                                        </button>
                                    </p>
                                </form>


                        </div>

                        <div class="row" id="thumbs">
                            <div class="col-xs-4">
                                <a href="" class="thumb">
                                    <img src="admin_area/product_images/product.jpg" alt="" class="img-responsive">
                                </a>
                            </div>

                            <div class="col-xs-4">
                                <a href="" class="thumb">
                                    <img src="admin_area/product_images/product2.jpg" alt="" class="img-responsive">
                                </a>
                            </div>

                            <div class="col-xs-4">
                                <a href="" class="thumb">
                                    <img src="admin_area/product_images/product3.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box" id="details">
                    <p>
                        <h4>Product details</h4>
                        <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>

                    <h4>Size</h4>
                    <ul>
                        <li>Small</li>
                        <li>Medium</li>
                        <li>Large</li>
                    </ul>
                    </p>
                    <hr>
                </div>
                <div id="row" class="same-height-row">
                    <div class="col-md-3 col-sm-6">
                        <div class="box same-height headline">
                            <h3 class="text-center">You also like these products</h3>
                        </div>
                    </div>
                    <div class="center-responsive col-md-3 col-sm-6">
                        <div class="product same-height">
                            <a href="details.php">
                                <img src="admin_area/product_images/product.jpg" class="img-responsive" alt="">
                            </a>
                            <div class="text">
                                <h3><a href="details.php">MARVEL Black Kids POLO T-Shirt</a></h3>
                                <p style="text-align: center;" class="price">$50</p>
                            </div>
                        </div>
                    </div>

                    <div class="center-responsive col-md-3 col-sm-6">
                        <div class="product same-height">
                            <a href="details.php">
                                <img src="admin_area/product_images/product.jpg" class="img-responsive" alt="">
                            </a>
                            <div class="text">
                                <h3><a href="details.php">MARVEL Black Kids POLO T-Shirt</a></h3>
                                <p style="text-align: center;" class="price">$50</p>
                            </div>
                        </div>
                    </div>

                    <div class="center-responsive col-md-3 col-sm-6">
                        <div class="product same-height">
                            <a href="details.php">
                                <img src="admin_area/product_images/product.jpg" class="img-responsive" alt="">
                            </a>
                            <div class="text">
                                <h3><a href="details.php">MARVEL Black Kids POLO T-Shirt</a></h3>
                                <p style="text-align: center;" class="price">$50</p>
                            </div>
                        </div>
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