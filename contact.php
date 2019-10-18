<?php
session_start();
?>
<!DOCTYPE html>
<html class="no-js" lang="lt">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UAB Mogis - Kontaktai</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/assets/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/assets/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- End of Favicon -->


	<link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
	<link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--    map starts here-->

    <style>
        .map {
            height: 400px;
            width: 100%;
        }
    </style>
<!-- map ends here -->
</head>

<body>

    <?php include "header.php" ?>
    <!--====================  breadcrumb area ====================-->
    <div class="breadcrumb-area bg-img">
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
                        <div id="map" class="map"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="contact-information">
                            <h3>Kontaktinė informacija</h3>
                            <ul>
                                <li>
                                    <span class="icon"><i class="ion-android-map"></i></span>
                                    <span class="text"><b>Adresas</b><a href="#">J.K. Chodkeviciaus 10, Kretinga</a></span>
                                </li>
                                <li>
                                    <span class="icon"><i class="ion-ios-telephone-outline"></i></span>
                                    <span class="text"><b>Mindaugas</b><a href="#">+467 640 47427</a></span>
                                </li>
                                <li>
                                    <span class="icon"><i class="ion-ios-telephone-outline"></i></span>
                                    <span class="text"><b>Marius</b><a href="#">+467 225 70954</a></span>
                                </li>
                                <li>
                                    <span class="icon"><i class="ion-ios-telephone-outline"></i></span>
                                    <span class="text"><b>Karolina (Atsiskaitymai ir buhalterija)</b><a href="#">+370 675 80618</a></span>
                                </li>
                                <li>
                                    <span class="icon"><i class="ion-ios-email-outline"></i></span>
                                    <span class="text"><b>El. paštas</b><a href="mailto:mogisuab@gmail.com">mogisuab@gmail.com</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-12">
                        <div class="contact-form">
                            <h3>Susisiekite su mumis</h3>
                            <div class="form-group">
                                <?php
                                if (isset($_SESSION['message'])) {
                                    echo $_SESSION['message'];
                                    session_destroy();
                                }
                                ?>
                            </div>
                            <form action="assets/mail/mail.php" method="post">
                                <div class="row row-10">
                                    <div class="col-md-6 col-12 section-space--bottom--20"><input name="name" type="text" placeholder="Vardas"></div>
                                    <div class="col-md-6 col-12 section-space--bottom--20"><input name="email" type="email" placeholder="El. paštas"></div>
                                    <div class="col-12"><textarea name="message" placeholder="Pranešimas"></textarea></div>
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

    <link rel="stylesheet" href="https://openlayers.org/en/v5.3.0/css/ol.css" type="text/css">
    <!-- The line below is only needed for old environments like Internet Explorer and Android 4.x -->
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList,URL"></script>

    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

    <!--
<script src="assets/js/plugins/plugins.min.js"></script>
-->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <script src="assets/js/plugins/openlayers-release-2.13.1/lib/OpenLayers.js"></script>
    <script type="text/javascript">

        map = new OpenLayers.Map("map");
        map.addLayer(new OpenLayers.Layer.OSM());

        var lonLat = new OpenLayers.LonLat(21.246660, 55.890000)
            .transform(
                new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
                map.getProjectionObject() // to Spherical Mercator Projection
            );

        var zoom=6;

        var markers = new OpenLayers.Layer.Markers("Markers");
        map.addLayer(markers);

        markers.addMarker(new OpenLayers.Marker(lonLat));
        map.setCenter (lonLat, zoom);

    </script>
</body>

</html>
