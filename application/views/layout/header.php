<!-- 
THEME: Aviato | E-commerce template
VERSION: 1.0.0
AUTHOR: Themefisher

HOMEPAGE: https://themefisher.com/products/aviato-e-commerce-template/
DEMO: https://demo.themefisher.com/aviato/
GITHUB: https://github.com/themefisher/Aviato-E-Commerce-Template/

WEBSITE: https://themefisher.com
TWITTER: https://twitter.com/themefisher
FACEBOOK: https://www.facebook.com/themefisher
-->


<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>UWA Collection</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Constra HTML Template v1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" type="<?= base_url('assets/') ?>image/x-icon" href="images/favicon.png" />

    <!-- Themefisher Icon font -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/themefisher-font/style.css">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/bootstrap/css/bootstrap.min.css">

    <!-- Animate css -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/animate/animate.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/slick/slick.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/slick/slick-theme.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">

</head>

<body id="body">

    <!-- Start Top Header Bar -->
    <section class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-xs-12 col-sm-4">

                    <a href="<?= base_url('Profil/index') ?>">Dashboard</a>

                </div>
                <div class="col-md-7 col-xs-12 col-sm-4">
                    <!-- Site Logo -->
                    <div class="logo">
                        <a href="index.html">
                            <!-- replace logo here -->
                            <svg width="700px" height="29px" viewBox="0 0 155 29" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-size="40" font-family="AustinBold, Austin" font-weight="bold">
                                    <g id="Group" transform="translate(-108.000000, -297.000000)" fill="#000000">
                                        <text id="AVIATO">
                                            <tspan x="0" y="325">UWA COLLECTION</tspan>
                                        </text>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-4">
                    <!-- Cart -->
                    <ul class="top-menu text-right list-inline">

                        <!-- Home -->


                        <li class="dropdown cart-nav dropdown-slide">
                            <a href="<?= base_url('profil/detail') ?>" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i class="tf-ion-android-cart"></i>Cart</a>
                            <div class="dropdown-menu cart-dropdown">
                                <!-- Cart Item -->
                                <?php $i = 1; ?>
                                <?php foreach ($keranjang as $us) : ?>
                                    <div class="media">

                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#!"><?= $us['nama']; ?></a></h4>
                                            <div class="cart-price">
                                                <span><?= $us['jumlah']; ?> X </span>
                                                <span><?= $us['harga']; ?></span>
                                            </div>
                                            <h5><strong><?= $us['total']; ?></strong></h5>
                                        </div>

                                        <a href="<?= base_url('profil/delkeranjang/') . $us['id']; ?>" class="remove"><i class="tf-ion-close"></i></a>
                                    </div>
                                <?php endforeach ?>
                                <ul class="text-center cart-buttons">
                                    <li><a href="<?= base_url('profil/detail') ?>" class="btn btn-small">Keranjang</a></li>
                                    <li><a href="<?= base_url('profil/checkout/'); ?>" class="btn btn-small btn-solid-border">Checkout</a></li>
                                </ul>
                                <!-- / Cart Item -->

                            </div>

                        </li><!-- / Cart -->

                        <!-- Search -->
                        <li class="dropdown search dropdown-slide">
                            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i class="tf-ion-ios-search-strong"></i> Search</a>
                            <ul class="dropdown-menu search-dropdown">
                                <li>
                                    <form action="post"><input type="search" class="form-control" placeholder="Search..."></form>
                                </li>
                            </ul>
                        </li><!-- / Search -->

                        <li class="dropdown ">
                            <a href="<?= base_url('Auth/logout') ?>">Logout</a>
                        </li>

                    </ul><!-- / .nav .navbar-nav .navbar-right -->
                </div>
            </div>
        </div>
    </section><!-- End Top Header Bar -->