<!DOCTYPE html>
<?php
include_once ('class/include.php');
?>

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lotus Cabs - Tour Package</title>

    <!-- Standard Favicon -->
    <link rel="icon" type="image/x-icon" href="images/lotus-logo.png" />
    <!-- For iPhone 4 Retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114x114-precomposed.png">
    <!-- For iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72x72-precomposed.png">
    <!-- For iPhone: -->
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-57x57-precomposed.png">	
    <!-- Library - Loader CSS -->
    <link rel="stylesheet" type="text/css" href="libraries/loader/loaders.min.css">

    <!-- Library - Google Font Familys -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100italic,100,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Library - Bootstrap v3.3.5 -->
    <link rel="stylesheet" type="text/css" href="libraries/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="libraries/bootstrap/bootstrap-datetimepicker.min.css">
    <!-- Font Icons -->
    <link rel="stylesheet" type="text/css" href="libraries/fonts/font-awesome.min.css">
    <!-- Library - OWL Carousel V.2.0 beta -->
    <link rel="stylesheet" type="text/css" href="libraries/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="libraries/owl-carousel/owl.theme.css">
    <!-- Library - FlexSlider v2.5.0 -->
    <link rel="stylesheet" type="text/css" href="libraries/flexslider/flexslider.css">
    <!-- Library - Animate CSS -->
    <link rel="stylesheet" type="text/css" href="libraries/animate/animate.min.css">
    <!-- Custom - Common CSS -->
    <link rel="stylesheet" type="text/css" href="css/plugins.css">
    <link rel="stylesheet" type="text/css" href="css/navigation-menu.css">
    <!-- Custom - Theme CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/shortcodes.css">

</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
    <!-- Loader -->
    <div id="site-loader" class="load-complete">
        <div class="loader">
            <div class="loader-inner ball-clip-rotate">
                <div></div>
            </div>
        </div>
    </div><!-- Loader /- -->

    <a id="top"></a>
    <!-- Main Container -->
    <div class="main-container">

        <!-- Header -->
        <?php include './header.php'; ?>
        <!-- Header /- -->


        <!-- Banner Section -->
        <div id="page-banner" class="page-banner faq-banner container-fluid no-padding">
            <div class="page-heading">
                <h3>Tour Packages</h3>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="tour-packages.php">Tour Packages</a></li>
                </ol>
            </div>
        </div><!-- Banner Section /- -->


        <div class="row">
            <div class="containerw no-padding blog marging-p">
                <div class="section-padding1"></div>
                <div class="container">	
                    <div class="row">
                        <?php foreach (TourPackage::all() as $tour_package) { ?>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <article class="blog-post-list">
                                    <div class="entry-cover t7-padding" >
                                        <a href="tour-packages-view.php?id=<?php echo $tour_package['id'] ?>" >
                                            <img src="upload/tour-package/<?php echo $tour_package['image_name']; ?>" alt=""/>
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <h3 class="entry-title"><?php echo $tour_package['title'] ?></h3>
                                        <div class="entry-content">
                                            <p class="text-justify"><?php echo substr($tour_package['short_description'], 0, 120) ?>...</p>
                                            <a href="tour-packages-view.php?id=<?php echo $tour_package['id'] ?>" title="Read More" class="pull-right">Read More</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="section-padding"></div>
            </div>
        </div>

        <div class="container-fluid" >
            <div class="row t6-color" >
                <div class="header-h1"><h1><b>How It Works</b></h1></div>
                <div class="container">
                    <div class="col-md-4 col-sm-6">
                        <div class="color-yellow">
                            <h4>1. Submit Ride Details</h4>
                        </div>
                        <ul class="color-white">
                            Fill- up online ride detail form and submit.
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div  class="color-yellow">
                            <h4>2. Get the quote</h4>
                        </div>
                        <ul class="color-white">
                            We will send you the best rate availble.
                        </ul>
                    </div>           
                    <div class="col-md-4 col-sm-6">
                        <div  class="color-yellow">
                            <h4>3. Confirm the deal. Enjoy your ride.</h4>
                        </div>
                        <ul class="color-white">
                            You can confirm the offered deal online and you will receive the driver details.
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer -->
        <?php include './footer.php'; ?>
        <!--Footer End-->


    </div><!-- Main Container -->
    <!-- JQuery v1.11.3 -->
    <script src="js/jquery.min.js"></script>

    <!-- Library - Modernizer -->
    <script src="libraries/modernizr/modernizr.js"></script>

    <!-- Library - Bootstrap v3.3.5 -->
    <script src="libraries/bootstrap/bootstrap.min.js"></script><!-- Bootstrap JS File v3.3.5 -->
    <script src="libraries/bootstrap/bootstrap-datetimepicker.min.js"></script><!-- Bootstrap JS File v3.3.5 -->

    <!-- jQuery Easing v1.3 -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Library - jQuery.appear -->
    <script src="libraries/appear/jquery.appear.js"></script>

    <!-- Library - OWL Carousel V.2.0 beta -->
    <script src="libraries/owl-carousel/owl.carousel.min.js"></script>

    <!-- jQuery For Number Counter -->	
    <script src="libraries/number/jquery.animateNumber.min.js"></script>

    <!-- Library - Google Map API -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

    <!-- Library - FlexSlider v2.5.0 -->
    <script defer src="libraries/flexslider/jquery.flexslider.js"></script>

    <!-- Library - Theme JS -->
    <script src="js/functions.js"></script>
</body>
</html>