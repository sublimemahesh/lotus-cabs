<!DOCTYPE html>
<?php
include_once ('class/include.php');
$id = '';
$id = $_GET['id'];
$SERVICES = new Service($id);
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

        <div class="row">
            <!-- Page Banner -->
            <div id="page-banner" class="page-banner blog-banner container-fluid no-padding">
                <div class="page-heading">
                    <h3>Services in <?php echo $SERVICES->title ?></h3>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="service.php">services</a></li>
                        <li class="active"><a href="#">service view</a></li>
                    </ol>
                </div>
            </div><!-- Page Banner/- -->

            <!-- Page Content -->
            <div class="container-fluid no-padding page-content">	
                <!-- Container -->
                <div class="container">		
                    <!-- Blog Area -->
                    <div class="col-md-9 blog-area">				
                        <div class="section-header">

                        </div>
                        <article class="blog-post-list2">					
                            <div class="entry-cover">
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->


                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <?php
                                        $li = '';
                                        foreach (ServicePhoto::getServicePhotosById($id)as $key => $services_photos) {
                                        if ($key === 0) {
                                        ?>
                                        <div class="item active">
                                            <img src="upload/service/gallery/<?php echo $services_photos['image_name']; ?>" alt=""/>
                                        </div>
                                        <?php
                                        } else {
                                        ?>
                                        <div class="item">
                                            <img src="upload/service/gallery/<?php echo $services_photos['image_name']; ?>" alt=""/>
                                        </div>
                                        <?php
                                        }
                                        }
                                        ?>

                                        <!-- Controls -->
                                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>


                                </div>				
                                <div class="blog-content" style="margin-top: 15px;">
                                    <h3 class="entry-title"><?php echo $SERVICES->title ?></h3>
                                    <div class="entry-content">
                                        <p class="text-justify"><?php echo $SERVICES->description ?></p>

                                    </div>
                                </div>
                        </article>

                        <!-- Pagination -->

                    </div><!-- Blog Area/- -->

                    <!-- Widget Area -->
                    <div class="col-md-3 widget-area">
                        <div style="padding-top: 65px;"></div>
                        <aside class="widget recent-post">
                            <div class="widget-title2">
                                <h3>Other Services</h3>
                            </div>
                            <?php foreach (Service::all() as $key => $other_services){ 
                                if($key<2);
                                
                                ?>
                            
                            <div class="recent-post-box2">
                                <div class="recent-title2 col-md-8 col-sm-10 col-xs-8 no-padding">
                                    <a href="service-view.php?id=<?php echo $other_services['id']?>"><?php echo $other_services['title']?></a>
                                    <p class="text-justify"><?php echo substr($other_services['short_description'],0,80)?>...</p>
                                </div>
                                <div class="recent-img2 col-md-4 col-sm-2 col-xs-4 no-padding">
                                    <a href="service-view.php?id=<?php echo $other_services['id']?>"><img src="upload/service/<?php echo $other_services['image_name']?>" alt="recent-1"/></a>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </aside><!-- Recent Post/- -->
                    </div><!-- Widget Area/- -->
                </div><!-- Container/- -->
                <div class="section-padding"></div>
            </div><!-- Page Content/- -->
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