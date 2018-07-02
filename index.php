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

    <title>Lotus Cabs - Taxi Company HTML5 Template</title>

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

        <!-- Photo Slider -->	
        <?php include './slider.php'; ?>
        <!-- Photo Slider/- -->
        <!-- What We Do -->
        <div class="container-fluid no-padding what-we-do">
            <div class="section-padding"></div>
            <div class="image-box" style="padding-top: 40px;">
                <img src="photos/10.jpg" alt=""/>
            </div>
            <!-- Container -->
            <div class="container" >			
                <div class="col-md-8 pull-right">
                    <div class="we-do-more ">
                        <h3>Welcome to </h3>
                        <h2>lotus cabs - Sri Lanka</h2>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                    </div>

                </div>
            </div><!-- Container/-  -->
            <div class="section-padding"></div>
        </div>
        <!-- What We Do/- -->

        <!-- Choose Us -->
        <div class="container no-padding service-b" style="margin-top: 360px;;">
            <!-- Container -->
            <div class="container ">
                <div class="section-header2 we-do-more2">
                    <h2>Services </h2>				
                </div>
                <!-- Choose Carousel -->
                <div class="choose-carousel">
                    <?php foreach (Service::all() as $key => $services) {
                        ?>
                        <div class="col-md-12">
                            <div class="choose-us-box">
                                <div class="choose-img-box1">
                                    <img src="upload/service/<?php echo $services['image_name'] ?>" alt=""/>
                                </div>
                                <div class="choose-us-content-box">
                                    <h3><?php echo $services['title'] ?></h3>
                                    <p class="text-justify"><?php echo substr($services['short_description'], 0, 110); ?>...</p>
                                    <a href="service-view.php?id=<?php echo $services['id']?>">Read More</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                </div><!-- Choose Carousel/- -->
            </div><!-- Container/- -->
        </div>
        <!-- Choose Us/- -->


        <!-- -news -->
        <div class="container-fluid no-padding blog">
            <div class="section-padding1"></div>
            <div class="container">			
                <div class="section-header we-do-more2">
                    <h2>Tour Packages</h2>				
                </div>
                <div class="row">
                    <div class="choose-carousel">
                         <?php foreach (TourPackage::all() as $tour_package) { ?>
                        <div class="col-md-12 col-sm-6 col-xs-12">
                            <article class="blog-post-list">
                                <div class="entry-cover" style="padding-bottom: 10px;">
                                    <a href="#">
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
                        
                         }?>
                    </div>
                </div>
            </div>
            <div class="section-padding"></div>
        </div>
        <!-- - news-  -->

        <!-- Testimonial -->
        <div class="container-fluid no-padding testimonial">
            <img src="images/border-pattern.jpg" alt="border"/>
            <div class="section-padding1"></div>
            <div class="container">
                <div class="section-header we-do-more2">
                    <h2>Words from Our Customers</h2>				
                </div>
                <div id="testimonial-slider" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <p><i class="fa fa-quote-left"></i>Now the world do not move to the beat of just one drum what might be right for you may not be right for some makin their way the only way they know how that's just a little bit more than the law will allow wouldn't you like<i class="fa fa-quote-right"></i></p>
                            <span style="padding-bottom: 15px;">Thomas Knoll</span>
                            <div class="text-center">
                                <img src="images/services/Kathrin.png" alt="" width="10%" />
                            </div>
                        </div>

                        <div class="item">
                            <p><i class="fa fa-quote-left"></i>Now the world do not move to the beat of just one drum what might be right for you may not be right for some makin their way the only way they know how that's just a little bit more than the law will allow wouldn't you like<i class="fa fa-quote-right"></i></p>
                            <span style="padding-bottom: 15px;">Thomas Knoll</span>
                            <div class="text-center">
                                <img src="images/services/Kathrin.png" alt="" width="10%" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-padding"></div>	
            <img src="images/border-pattern.jpg" alt="border"/>
        </div><!-- Testimonial/- -->

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