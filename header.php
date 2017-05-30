<?php

global $blind_option;
?>

<!doctype html>


<html <?php language_attributes(); ?> class="no-js">
<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,900,300' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<!-- Container -->
<div id="container">
    <header class="clearfix">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="top-line">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                <?php if (!empty($blind_option['phone'])): ?>
                                    <span><i class="fa fa-phone"></i><?php echo $blind_option['phone']; ?></span>
                                <?php endif; ?>

                                <?php if (!empty($blind_option['email'])): ?>
                                    <span><i class="fa fa-envelope-o"></i><?php echo $blind_option['email']; ?></span>
                                <?php endif; ?>
                                <a href="#"><i class="fa fa-user"></i>Log In</a>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <ul class="social-icons">

                                <?php if (!empty($blind_option['facebook'])): ?>
                                    <li><a class="facebook" href="<?php echo $blind_option['facebook']; ?>"><i class="fa fa-facebook"></i></a></li>
                                <?php endif; ?>

                                <?php if (!empty($blind_option['twitter'])): ?>
                                    <li><a class="twitter" href="<?php echo $blind_option['twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
                                <?php endif; ?>

                                <?php if (!empty($blind_option['gootlepluse'])): ?>
                                    <li><a class="rss" href="<?php echo $blind_option['gootlepluse']; ?>"><i class="fa fa-rss"></i></a></li>
                                <?php endif; ?>


                                <?php if (!empty($blind_option['in'])): ?>
                                <li><a class="google" href="<?php echo $blind_option['in']; ?>"><i class="fa fa-google-plus"></i></a></li>
                                <?php endif; ?>

                                <?php if (!empty($blind_option['pintarest'])): ?>
                                    <li><a class="pinterest" href="<?php echo $blind_option['pintarest']; ?>"><i class="fa fa-pinterest"></i></a></li>
                                <?php endif; ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php bloginfo('home'); ?>"><img
                                src="<?php echo $blind_option['logo']['url']; ?>" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <?php wp_nav_menu(array(
                        'theme_location' => 'main_menu',
                        'container' => 'ul',
                        'menu_class' => 'nav navbar-nav navbar-right ',
                        'walker' => new blind_walker_menu(),
                        'fallback_cb'=>'home_cb_function',

                    )) ?>

                    <!--Fallback cb menu function-->
                    <?php
                    function home_cb_function(){ ?>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="drop"><a href="<?php home_url();?>/wp-admin/nav-menus.php">Create Menu</a></li>

                            </ul>
                        </div>

                    <?php }

                    ?>

                </div> <!--navbar-collapse -->
            </div><!-- /.container -->
        </nav>
    </header>

