<!DOCTYPE html>
<html dir="ltr" lang="en">


<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="StudyPro - Education & Courses HTML5 Template" />
    <meta name="keywords" content="keyword1,keyword2,keyword3,keyword4,keyword5" />
    <meta name="author" content="ThemeMascot" />

    <!-- Page Title -->
    <title>Lucie schools about </title>

    <!-- Favicon and Touch Icons -->
    <link href="images/favicon.png" rel="shortcut icon" type="image/png">
    <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/css-plugin-collections.css" rel="stylesheet"/>
    <!-- CSS | menuzord megamenu skins -->
    <link href="css/menuzord-megamenu.css" rel="stylesheet"/>
    <link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
    <!-- CSS | Main style file -->
    <link href="css/style-main.css" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="css/preloader.css" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- Revolution Slider 5.x CSS settings -->
    <link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
    <link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
    <link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

    <!-- CSS | Theme Color -->
    <link href="css/colors/theme-skin-color-set1.css" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">
    <!-- preloader -->
    <div id="preloader">
        <div id="spinner">
            <div class="preloader-dot-loading">
                <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
            </div>
        </div>
        <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
    </div>

    <!-- Header -->
    <?php include ('includes/header.php')?>

    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="images/bg/bg1.jpg">
            <div class="container pt-120 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-white font-36">Contact</h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li class="active">About</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Divider: Contact -->
        <section class="divider">
            <div class="container pt-50 pb-70">
                <div class="row pt-10">
                    <div class="col-md-5">
                        <h4 class="mt-0 mb-30 line-bottom">Find Our Location</h4>
                        <!-- Google Map HTML Codes -->
                        <div
                            data-address="121 King Street, Melbourne Victoria 3000 Australia"
                            data-popupstring-id="#popupstring1"
                            class="map-canvas autoload-map"
                            data-mapstyle="style1"
                            data-height="400"
                            data-latlng="-37.817314,144.955431"
                            data-title="sample title"
                            data-zoom="12"
                            data-marker="images/map-icon-blue.html">
                        </div>
                        <div class="map-popupstring hidden" id="popupstring1">
                            <div class="text-center">
                                <h3>CharityPress Office</h3>
                                <p>121 King Street, Melbourne Victoria 3000 Australia</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h4 class="mt-0 mb-30 line-bottom">Interested in discussing?</h4>
                        <!-- Contact Form -->
                        <form id="contact_form" name="contact_form" class="" action="http://thememascot.net/demo/personal/s/studypro/j/demo/includes/sendmail.php" method="post">

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group mb-30">
                                        <input id="form_name" name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mb-30">
                                        <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group mb-30">
                                        <input id="form_subject" name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mb-30">
                                        <input id="form_phone" name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-30">
                                <textarea id="form_message" name="form_message" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
                            </div>
                            <div class="form-group">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                                <button type="submit" class="btn btn-flat btn-default btn-theme-colored mr-5" data-loading-text="Please wait...">Send your message</button>
                                <button type="reset" class="btn btn-flat btn-theme-colored2 text-white">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-60">
                    <div class="col-sm-12 col-md-3">
                        <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
                            <i class="fa fa-phone font-36 mb-10 text-theme-colored2"></i>
                            <h4>Call Us</h4>
                            <h6 class="text-gray">Phone: +262 695 2601</h6>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
                            <i class="fa fa-map-marker font-36 mb-10 text-theme-colored2"></i>
                            <h4>Address</h4>
                            <h6 class="text-gray">121 King Street, Australia</h6>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
                            <i class="fa fa-envelope font-36 mb-10 text-theme-colored2"></i>
                            <h4>Email</h4>
                            <h6 class="text-gray">you@yourdomain.com</h6>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
                            <i class="fa fa-fax font-36 mb-10 text-theme-colored2"></i>
                            <h4>Fax</h4>
                            <h6 class="text-gray">(020) 123 4567</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->


    <!-- end wrapper -->

    <!-- Footer Scripts -->
    <?php include('includes/footer.php') ?>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>
<script src="js/extra.js"></script>

</body>


</html>