<!DOCTYPE html>
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
    <link href="contact-form/style.css" rel="stylesheet" type="text/css"/>
    <script src="contact-form/scripts.js" type="text/javascript"></script>
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

            <!-- Banner Section -->
            <div id="page-banner" class="page-banner faq-banner container-fluid no-padding">
                <div class="page-heading">
                    <h3>Contact Us</h3>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="contact-us.php">Contact</a></li>
                    </ol>
                </div>
            </div><!-- Banner Section /- -->



            <!-- Contact Form -->
            <div class="contact-form container-fluid no-padding">		
                <div class="section-padding"></div>
                <!-- Container -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- Section Header -->
                            <div class="section-header">
                                <h3>Lotus-cabs</h3>
                            </div><!-- Section Header -->
                            <p>That this group would somehow form a family that is the way we all became the brady bunch baby.</p>
                            <p>Got kind of tired packin' and unpackin' - town to town and up and down the dial. Movin' on up to the east side. We finally got a piece of the pie.</p>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <form class="row" id="contact-form" method="post">
                                <div class="col-md-6 col-sm-6 form-group">
                                    <input type="text" placeholder="Your name here:" id="txtFullName" name="txtFullNames" class="form-control">
                                    <span id="spanFullName"></span>
                                </div>
                                <div class="col-md-6 col-sm-6 form-group">
                                    <input type="email" class="form-control" id="txtEmail" name="contact-email" placeholder="E-mail Address:" required>
                                    <span id="spanEmail"></span>
                                </div>
                                <div class="col-md-6 col-sm-6 form-group">
                                    <input type="text" class="form-control" id="txtPhone" name="txtPhone" placeholder="Phone:" required>
                                    <span id="spanPhone"></span>
                                </div>
                                <div class="col-md-6 col-sm-6 form-group">
                                    <input type="text" class="form-control" id="txtSubject" name="contact-subject" placeholder="Subject:" required>
                                    <span id="spanSubject"></span>
                                </div>
                                <div class="col-md-12 col-sm-12 form-group">
                                    <textarea class="form-control" rows="8" cols="50" id="txtMessage" name="contact-message" placeholder="Message:" required></textarea>
                                    <span id="spanMessage"></span>
                                </div>
                                <div class="row form-group">
                                    <div class="col-xs-12 col-sm-6 col-md-8">
                                        <div class="col-sm-6 ">
                                            <label for="comment">Security Code:</label>
                                            <input style="margin-left: 0px;" type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Enter the code:">
                                            <span id="capspan" ></span>
                                        </div>
                                        <div style="margin-top: 12px;" class="col-sm-6 col-md-6">
                                            <?php include("./contact-form/captchacode-widget.php"); ?>
                                        </div> 
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <button type="submit" id="btn_submit" class="btn btn-default" style="margin-right: 560px;">Send Message</button>
                                </div>
                                <div id="dismessage-msg" class="alert-msg"></div>
                            </form>
                        </div>
                    </div>
                </div><!-- Container /- -->
                <div class="section-padding"></div>
            </div><!-- Contact Form /- -->
        </div>
        <!-- contact map /- -->
        <div class="contact-top-right">
            <div class="innerpage-section">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.4983272423606!2d80.21976691476834!3d6.063323895609089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae173d7e8abaa01%3A0x35120442aff2bf76!2sLOTUS+CABS!5e0!3m2!1sen!2slk!4v1530547498089" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div><!-- contact map /- -->


        <div class="container-fluid" >
            <div class="row" style="  background-color: black;">
                <div class="header-h1"><h1><b>How It Works</b></h1></div>
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
        <!--Footer -->
        <?php include './footer.php'; ?>
        <!--Footer End-->
        <script>
            var user_lat, user_lng;
            var map;

            function initMap() {
                map = new google.maps.Map(document.getElementById('googleMap'), {
                    center: {
                        lat: 23.782906,
                        lng: 90.415962
                    },
                    zoom: 14,
                    scrollwheel: false
                });
                var marker = new google.maps.Marker({
                    position: {
                        lat: 23.782906,
                        lng: 90.415962
                    },
                    map: map,
                    title: 'Hello World!'
                });
            }



        </script>
        <script language='JavaScript' type='text/javascript'>

            function refreshCaptcha() {
                var img = document.images['captchaimg'];
                var c = Math.round(Math.random() * 10000);
                img.src = img.src.substring(0, img.src.lastIndexOf("?")) + "?rand=" + c;
            }

        </script>

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
    <script src="contact-form/scripts.js" type="text/javascript"></script>
</body>
</html>