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
    <link href="css/jquery.datetimepicker.css" rel="stylesheet" type="text/css"/>
    <link href="booking-form/style.css" rel="stylesheet" type="text/css"/>
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
            <?php
            $PAGES = new Page(2);
            ?>

            <div class="image-box" style="padding-top: 40px;">

                <img src="photos/10.jpg" alt=""/>
                <div class="tripA-1">
                    <div id="TA_certificateOfExcellence621" class="TA_certificateOfExcellence"><ul id="qyQv3aWm8V" class="TA_links HmKeAzK1"><li id="nbDUE79E3t4l" class="uCERbUGeDj"><a target="_blank" href="https://www.tripadvisor.com/Attraction_Review-g297896-d12150412-Reviews-LOTUS_CABS-Galle_Galle_District_Southern_Province.html"><img src="https://www.tripadvisor.com/img/cdsi/img2/awards/CoE2017_WidgetAsset-14348-2.png" alt="TripAdvisor" class="widCOEImg" id="CDSWIDCOELOGO"/></a></li></ul></div><script async src="https://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=621&amp;locationId=12150412&amp;lang=en_US&amp;year=2018&amp;display_version=2"></script>

                </div>
                <div class="tripA-2">
                    <div id="TA_cdsratingsonlynarrow189" class="TA_cdsratingsonlynarrow"><ul id="CAJrtQT" class="TA_links 82H7LK5UvBta"><li id="DrYuIUMPP4ma" class="hCfZk2mM"><a target="_blank" href="https://www.tripadvisor.com/"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/tripadvisor_logo_transp_340x80-18034-2.png" alt="TripAdvisor"/></a></li></ul></div><script async src="https://www.jscache.com/wejs?wtype=cdsratingsonlynarrow&amp;uniq=189&amp;locationId=12150412&amp;lang=en_US&amp;border=true&amp;display_version=2"></script>

                </div>

            </div>

            <!-- Container -->
            <div class="container" >			
                <div class="col-md-8 pull-right">
                    <div class="we-do-more ">
                        <h3>Welcome to </h3>
                        <h2>lotus cabs - Sri Lanka</h2>

                        <p class="text-justify"><?php echo $PAGES->description ?></p>
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
                                    <a href="service-view.php?id=<?php echo $services['id'] ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                </div><!-- Choose Carousel/- -->
                <div class="text-center" style="position: relative;margin-top: 40px;">
                    <a href="service.php"><button type="button" class="btn btn-primary"><b>View More</b></button></a>
                </div>
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
                        <?php }
                        ?>
                    </div>
                </div>
                <div class="text-center">
                    <a href="tour-packages.php"><button type="button" class="btn btn-primary"><b>View More</b></button></a>
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
                   <div class="text-center">
                        <center> 
                        <div id="TA_socialButtonBubbles748" class="TA_socialButtonBubbles"><ul id="95dqsoCEe7" class="TA_links wm8ih4GT"><li id="7FUuryAb7un" class="21MHbH96f"><a target="_blank" href="https://www.tripadvisor.com/Attraction_Review-g297896-d12150412-Reviews-LOTUS_CABS-Galle_Galle_District_Southern_Province.html"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/socialWidget/20x28_green-21693-2.png"/></a></li></ul></div><script async src="https://www.jscache.com/wejs?wtype=socialButtonBubbles&amp;uniq=748&amp;locationId=12150412&amp;color=green&amp;size=rect&amp;lang=en_US&amp;display_version=2"></script>
                        </center>     
                   </div>
                    <h2>Words from Our Customers</h2>				
                </div>
                <div id="testimonial-slider" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <?php
                        foreach (Comments::activeComments() as $key => $comment) {
                            if ($key === 0) {
                                ?>
                                <div class="item active">

                                    <p><i class="fa fa-quote-left pull-left "></i><?php echo $comment['comment'] ?><i class="fa fa-quote-right pull-right"></i></p>

                                    <p><i class="fa fa-quote-left"></i><?php echo $comment['comment']; ?><i class="fa fa-quote-right"></i></p>

                                    <span style="padding-bottom: 15px;"><?php echo $comment['name']; ?></span>
                                    <div class="text-center">
                                        <img src="upload/comments/<?php echo $comment['image_name']; ?>" alt="" width="10%" class="img-circle"/>
                                    </div>
                                </div>
                            <?php } else {
                                ?>
                                <div class="item">

                                    <p><i class="fa fa-quote-left pull-left " ></i><?php echo $comment['comment'] ?><i class="fa fa-quote-right pull-right"></i></p>
                                    <span style="padding-bottom: 15px;"><?php echo $comment['name']; ?></span>
                                    <div class="text-center">
                                        <img src="upload/comments/<?php echo $comment['image_name']; ?>" alt="" width="10%" class="img-circle"/>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="section-padding"></div>	
            <img src="images/border-pattern.jpg" alt="border"/>
        </div><!-- Testimonial/- -->

        
            <div class="container-fluid" >
                <div class="row" style="background-color: black; margin-bottom: 50px;">
                    <div style="text-align: -moz-center; color: white; padding-bottom: 40px;"><h1>How It Works</h1></div>
                <div class="col-md-4 col-sm-6">
                    <div style="color: #FF0;">
                        <h4>1. Submit Ride Details</h4>
                   </div>
                   <ul style="color: #fff;">
                       Fill- up online ride detail form and submit.
                   </ul>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div style="color: #FF0;">
                        <h4>2. Get the quote</h4>
                    </div>
                    <ul style="color: #fff;">
                        We will send you the best rate availble.
                    </ul>
                </div>			
                <div class="col-md-4 col-sm-6">
                    <div style="color: #FF0;">
                        <h4>3. Confirm the deal. Enjoy your ride.</h4> 
                    </div>
                    <ul style="color: #fff;">
                 You can confirm the offered deal online and you will receive the driver details. 
                    </ul>
                </div>
            </div> 
            </div>
          </div><!-- Main Container -->


        <!--Footer -->
        <?php include './footer.php'; ?>
        <!--Footer End-->


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
    <script src="booking-form/scripts.js" type="text/javascript"></script>
     <script src="js/jquery.datetimepicker.full.js" type="text/javascript"></script>
    <script>
        /*jslint browser:true*/
        /*global jQuery, document*/

        jQuery(document).ready(function () {
            'use strict';

            jQuery('#filter-date, #search-from-date, #search-to-date').datetimepicker();
        });
    </script>
</body>
</html>