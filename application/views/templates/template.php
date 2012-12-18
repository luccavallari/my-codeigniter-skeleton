<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>My Codeigniter Boilerplate</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width">


    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/twitter-bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/twitter-bootstrap/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/twitter-bootstrap/css/style.css">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/twitter-bootstrap/js/libs/jquery-1.8.0.min.js"><\/script>')</script>

    <script src="<?php echo base_url(); ?>assets/twitter-bootstrap/js/libs/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/twitter-bootstrap/js/libs/bootstrap/transition.js"></script>
    <script src="<?php echo base_url(); ?>assets/twitter-bootstrap/js/libs/bootstrap/collapse.js"></script>
    <script src="<?php echo base_url(); ?>assets/twitter-bootstrap/js/script.js"></script>
    <script src="<?php echo base_url(); ?>assets/twitter-bootstrap/js/libs/modernizr-2.6.1.custom.js"></script>

    <?php
    if(!empty($css_files)){
        foreach($css_files as $file):
            ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
        <?php
        endforeach;
    }
    if(!empty($js_files)){
        foreach($js_files as $file):
            ?>
        <script src="<?php echo $file; ?>"></script>
        <?php
        endforeach;
    }?>
</head>
<body>
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="javascript:void(0);">Grocery CRUD</a>
                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li class="dropdown"><a href="<?php echo site_url('images_examples')?>"  class="dropdown-toggle" data-toggle="dropdown">Images examples</a>
                            <ul class="dropdown-menu">
                                <li class=""><a href="<?php echo site_url('images_examples/example1')?>"><i class="icon-share"></i>Example 1 - Simple</a></li>
                                <li class=""><a href="<?php echo site_url('images_examples/example2')?>"><i class="icon-tasks"></i>Example 2 - Ordering</a></li>
                                <li class=""><a href="<?php echo site_url('images_examples/example3/22')?>"><i class="icon-tasks"></i>Example 3 - With group id</a></li>
                                <li class=""><a href="<?php echo site_url('images_examples/example4')?>"><i class="icon-tasks"></i>Example 4 - Images with title</a></li>
                                <li class=""><a href="<?php echo site_url('images_examples/simple_photo_gallery')?>"><i class="icon-tasks"></i>Simple Photo Gallery</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo site_url('films')?>" >Films</a></li>
                        <li><a href="<?php echo site_url('products')?>" >Products</a></li>
                        <li><a href="<?php echo site_url('orders')?>" >Orders</a></li>
                        <li><a href="<?php echo site_url('employees')?>" >Employees</a></li>
                        <li><a href="<?php echo site_url('offices')?>" >Offices</a></li>
                        <li><a href="<?php echo site_url('customers')?>" >Customers</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <?php echo (!is_null($output)) ? $output : ''; ?>
        <hr>
        <footer>
            <p>&copy; Company 2012</p>
        </footer>
    </div>
</body>
</html>