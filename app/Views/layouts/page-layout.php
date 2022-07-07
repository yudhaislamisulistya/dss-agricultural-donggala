<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="viho admin is super flexible, powerful, clean & modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <title>Dashboard - Penentuan Harga Jual Pertanian</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/chartist.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/date-picker.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/prism.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/vector-map.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/style.css">
    <link id="color" rel="stylesheet" href="<?= base_url()?>/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/responsive.css">
</head>

<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start       -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-main-header">
            <div class="main-header-right row m-0">
                <div class="main-header-left">
                    <div class="logo-wrapper text-center">
                        <a href="index.html">
                            <span class="text-center font-weight-bold">Penentuan Harga Jual Pertanian</span>
                        </a>
                    </div>
                    <div class="dark-logo-wrapper text-center">
                        <a href="index.html">
                            <span class="text-center font-weight-bold text-white">Penentuan Harga Jual Pertanian</span>
                        </a>
                    </div>
                    <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center"
                            id="sidebar-toggle"></i></div>
                </div>
                <?= $this->include('layouts/nav-right') ?>
                <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper sidebar-icon">
            <!-- Page Sidebar Start-->
            <?= $this->include('layouts/header') ?>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <!-- Container-fluid starts-->
                <?= $this->renderSection('content') ?>
            </div>
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 footer-copyright">
                            <p class="mb-0">Copyright 2022 © Dina Deliana All rights reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p class="pull-right mb-0">Hand crafted & made with <i
                                    class="fa fa-heart font-secondary"></i></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="<?= base_url() ?>/assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="<?= base_url() ?>/assets/js/feather.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="<?= base_url() ?>/assets/js/sidebar-menu.js"></script>
    <script src="<?= base_url() ?>/assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="<?= base_url() ?>/assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="<?= base_url() ?>/assets/js/chartist.js"></script>
    <script src="<?= base_url() ?>/assets/js/chartist-plugin-tooltip.js"></script>
    <script src="<?= base_url() ?>/assets/js/knob.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/knob-chart.js"></script>
    <script src="<?= base_url() ?>/assets/js/apex-chart.js"></script>
    <script src="<?= base_url() ?>/assets/js/stock-prices.js"></script>
    <script src="<?= base_url() ?>/assets/js/prism.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/clipboard.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/jquery.waypoints.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/jquery.counterup.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/counter-custom.js"></script>
    <script src="<?= base_url() ?>/assets/js/custom-card.js"></script>
    <script src="<?= base_url() ?>/assets/js/bootstrap-notify.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?= base_url() ?>/assets/js/jquery-jvectormap-us-aea-en.js"></script>
    <script src="<?= base_url() ?>/assets/js/jquery-jvectormap-uk-mill-en.js"></script>
    <script src="<?= base_url() ?>/assets/js/jquery-jvectormap-au-mill.js"></script>
    <script src="<?= base_url() ?>/assets/js/jquery-jvectormap-chicago-mill-en.js"></script>
    <script src="<?= base_url() ?>/assets/js/jquery-jvectormap-in-mill.js"></script>
    <script src="<?= base_url() ?>/assets/js/jquery-jvectormap-asia-mill.js"></script>
    <script src="<?= base_url() ?>/assets/js/default.js"></script>
    <script src="<?= base_url() ?>/assets/js/index.js"></script>
    <script src="<?= base_url() ?>/assets/js/datepicker.js"></script>
    <script src="<?= base_url() ?>/assets/js/datepicker.en.js"></script>
    <script src="<?= base_url() ?>/assets/js/datepicker.custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="<?= base_url() ?>/assets/js/script.js"></script>
    <script src="<?= base_url() ?>/assets/js/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->

</body>

</html>