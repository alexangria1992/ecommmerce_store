<?php
    include("includes/db.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard / Insert Products
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-money fa-fw"></i>Insert Products
                    </h3>
                </div>
                <div class="panel-body">
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="form-group">
                            <label class="col-md-3 control-label">Product Title</label>
                            <div class="col-md-6">
                                <input type="text" name="product_title" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Product Category</label>
                            <div class="col-md-6">
                                <select name="product_cat" class="form-control">
                                    <option>Select a Product Category</option>
                                    <?php
                                        $get_p_cats = "SELECT * FROM product_categories ";
                                        $run_p_cats = mysqli_query($con, $get_p_cats);
                                        while($row_p_cats = mysqli_fetch_array($run_p_cats))
                                        {
                                            $p_cat_id = $row_p_cats['p_cat_id'];
                                            $p_cat_title = $row_p_cats['p_cat_title'];

                                            echo "<option value='$p_cat_id'>$p_cat_title</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Product Title</label>
                            <div class="col-md-6">
                                <input type="text" name="product_title" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Product Title</label>
                            <div class="col-md-6">
                                <input type="text" name="product_title" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Product Title</label>
                            <div class="col-md-6">
                                <input type="text" name="product_title" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Product Title</label>
                            <div class="col-md-6">
                                <input type="text" name="product_title" class="form-control">
                            </div>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>