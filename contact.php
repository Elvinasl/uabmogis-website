<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mogis - Kontaktai</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon.ico">


	<link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
	<link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body>

    <?php include "header.php" ?>
    <!--====================  breadcrumb area ====================-->
    <div class="breadcrumb-area bg-img" data-bg="assets/img/backgrounds/funfact-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-banner text-center">
                        <h1>Kontaktai</h1>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--====================  End of breadcrumb area  ====================-->
    <div class="page-wrapper section-space--inner--120">
        <!--Contact section start-->
        <div class="conact-section">
            <div class="container">

                <div class="row section-space--bottom--50">
                    <div class="col">
                        <div id="contact-map" class="contact-map"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="contact-information">
                            <h3>Kontaktinė informacija</h3>
                            <ul>
                                <li>
                                    <span class="icon"><i class="ion-android-map"></i></span>
                                    <span class="text"><span>Tvenkinio g. 2, Kurmaičiai</span></span>
                                </li>
                                <li>
                                    <span class="icon"><i class="ion-ios-telephone-outline"></i></span>
                                    <span class="text"><a href="#">+370 602 21889</a></span>
                                </li>
                                <li>
                                    <span class="icon"><i class="ion-ios-email-outline"></i></span>
                                    <span class="text"><a href="#">mogisuab@gmail.com</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-12">
                        <div class="contact-form">
                            <h3>Susisiekite su mumis</h3>
                            <form id="contact-form" action="assets/php/mail.php" method="post">
                                <div class="row row-10">
                                    <div class="col-md-6 col-12 section-space--bottom--20"><input name="con_name" type="text" placeholder="Vardas"></div>
                                    <div class="col-md-6 col-12 section-space--bottom--20"><input name="con_email" type="email" placeholder="Pavardė"></div>
                                    <div class="col-12"><textarea name="con_message" placeholder="Pranešimas"></textarea></div>
                                    <div class="col-12"><button>Siųsti</button></div>
                                </div>
                            </form>
                            <p class="form-message"></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--Contact section end-->
    </div>
    <!--====================  brand logo area ====================-->
    <div class="brand-logo-slider-area grey-bg section-space--inner--60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- brand logo slider -->
                    <div class="brand-logo-slider__container-area">
                        <div class="swiper-container brand-logo-slider__container">
                            <div class="swiper-wrapper brand-logo-slider__wrapper">
                                <div class="swiper-slide brand-logo-slider__single">
                                    <div class="image">
                                        <a href="#">
                                            <img src="assets/img/brand-logo/1.png" class="img-fluid" alt="">
                                        </a>
                                    </div>

                                </div>
                                <div class="swiper-slide brand-logo-slider__single">
                                    <div class="image">
                                        <a href="#">
                                            <img src="assets/img/brand-logo/2.png" class="img-fluid" alt="">
                                        </a>
                                    </div>

                                </div>
                                <div class="swiper-slide brand-logo-slider__single">
                                    <div class="image">
                                        <a href="#">
                                            <img src="assets/img/brand-logo/3.png" class="img-fluid" alt="">
                                        </a>
                                    </div>

                                </div>
                                <div class="swiper-slide brand-logo-slider__single">
                                    <div class="image">
                                        <a href="#">
                                            <img src="assets/img/brand-logo/4.png" class="img-fluid" alt="">
                                        </a>
                                    </div>

                                </div>
                                <div class="swiper-slide brand-logo-slider__single">
                                    <div class="image">
                                        <a href="#">
                                            <img src="assets/img/brand-logo/1.png" class="img-fluid" alt="">
                                        </a>
                                    </div>

                                </div>
                                <div class="swiper-slide brand-logo-slider__single">
                                    <div class="image">
                                        <a href="#">
                                            <img src="assets/img/brand-logo/2.png" class="img-fluid" alt="">
                                        </a>
                                    </div>

                                </div>
                                <div class="swiper-slide brand-logo-slider__single">
                                    <div class="image">
                                        <a href="#">
                                            <img src="assets/img/brand-logo/3.png" class="img-fluid" alt="">
                                        </a>
                                    </div>

                                </div>
                                <div class="swiper-slide brand-logo-slider__single">
                                    <div class="image">
                                        <a href="#">
                                            <img src="assets/img/brand-logo/4.png" class="img-fluid" alt="">
                                        </a>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of brand logo area  ====================-->
    <?php include "footer.php" ?>
    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>

    <!-- Popper JS -->
    <script src="assets/js/vendor/popper.min.js"></script>

    <!-- Swiper Slider JS -->
    <script src="assets/js/plugins/swiper.min.js"></script>

    <!-- Light gallery JS -->
    <script src="assets/js/plugins/lightgallery.min.js"></script>

    <!-- Light gallery video JS -->
    <script src="assets/js/plugins/lg-video.min.js"></script>

    <!-- Waypoints JS -->
    <script src="assets/js/plugins/waypoints.min.js"></script>

    <!-- Counter up JS -->
    <script src="assets/js/plugins/counterup.min.js"></script>


    <!-- Map JS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfmCVTjRI007pC1Yk2o2d_EhgkjTsFVN8"></script>

    <!-- Mailchimp JS -->
    <script src="assets/js/plugins/mailchimp-ajax-submit.min.js"></script>

    <!-- MailJS -->
    <script src="assets/js/plugins/ajax-mail.js"></script>

    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

    <!--
<script src="assets/js/plugins/plugins.min.js"></script>
-->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>


</body>

</html>
