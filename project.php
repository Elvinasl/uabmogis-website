<!DOCTYPE html>
<html class="no-js" lang="lt">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UAB Mogis - Paslaugos</title>
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

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">

    <!-- Material design iconic font CSS -->
    <link rel="stylesheet" href="assets/css/vendor/material-design-iconic-font.min.css">

    <!-- Ionicons CSS -->
    <link rel="stylesheet" href="assets/css/vendor/ionicons.min.css">

    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="assets/css/vendor/flaticon.min.css">

    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">

    <!-- Light gallery CSS -->
    <link rel="stylesheet" href="assets/css/plugins/lightgallery.min.css">

    <!--    ekko-lightbox   -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body>

<?php include "header.php" ?>
    <!--====================  breadcrumb area ====================-->
    <div class="breadcrumb-area bg-img">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-banner text-center">
                        <h1>Paslaugos</h1>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--====================  End of breadcrumb area  ====================-->
    <div class="page-wrapper section-space--inner--120">
        <!--Projects section start-->
        <div class="project-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project-item-wrapper">
                            <div class="row">
                                <div class="col-lg-4 col-sm-6 col-12 section-space--bottom--30">
                                    <div class="service-grid-item service-grid-item--style2">
                                        <div class="service-grid-item__image">
                                            <div class="service-grid-item__image-wrapper">
                                                <a href="assets/img/services/kasimas1.png" data-toggle="lightbox" data-gallery="kasimo-darbai">
                                                    <img src="assets/img/services/kasimas1.png" class="img-fluid" alt="Mogis kasimo darbai">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="service-grid-item__content">
                                            <h3 class="title">
                                                <a href="#">Žemės kasimo darbai</a>
                                            </h3>
                                            <p class="subtitle">Nuo pradžios iki galo atvedame komunikacijas. Kasame tranšėjas, įvedame šviesolaidinius interneto ir elektros kabelius, prijungiame naujus vartotojus.</p>
                                        </div>
                                    </div>


                                    <?php
                                    for ($x = 1; $x <= 15; $x++) {
                                        echo "<div data-toggle=\"lightbox\" data-gallery=\"kasimo-darbai\" data-remote=\"assets/img/services/kasimo_darbai/{$x}.jpg\"></div>";
                                    }
                                    ?>

                                </div>

                                <div class="col-lg-4 col-sm-6 col-12 section-space--bottom--30">
                                    <div class="service-grid-item service-grid-item--style2">
                                        <div class="service-grid-item__image">
                                            <div class="service-grid-item__image-wrapper">
                                                <a href="#">
                                                    <img src="assets/img/services/drenazas.png" class="img-fluid" alt="Mogis inžinerinių tinklų rengimas">
                                                </a>
                                            </div>

                                        </div>
                                        <div class="service-grid-item__content">
                                            <h3 class="title">
                                                <a href="#">Inžinerinių tinklų įrengimas</a>
                                            </h3>
                                            <p class="subtitle">Įrengiame pastatų vidaus ir lauko vandentiekį. Klojame drenažą, įrengiame buitinių ir lietaus nuotekų surinkimo sistemas.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6 col-12 section-space--bottom--30">
                                    <div class="service-grid-item service-grid-item--style2">
                                        <div class="service-grid-item__image">
                                            <div class="service-grid-item__image-wrapper">
                                                <a href="#">
                                                    <img src="assets/img/services/aplinkotvarka.png" class="img-fluid" alt="UAB Mogis aplinkotvarkos darbai">
                                                </a>
                                            </div>

                                        </div>
                                        <div class="service-grid-item__content">
                                            <h3 class="title">
                                                <a href="#">Aplinkotvarkos darbai</a>
                                            </h3>
                                            <p class="subtitle">Pasirūpiname gražia jūsų pieva. Išlyginame ir išvalome sklypus, pašaliname kliūtis, įrengiame įvairaus ploto ir paskirties aikšteles ir stadionus.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6 col-12 section-space--bottom--30">
                                    <div class="service-grid-item service-grid-item--style2">
                                        <div class="service-grid-item__image">
                                            <div class="service-grid-item__image-wrapper">
                                                <a href="assets/img/services/susisiekimo_keliai.png" data-toggle="lightbox" data-gallery="keliu-tvarkymas">
                                                    <img src="assets/img/services/susisiekimo_keliai.png" class="img-fluid" alt="Mogis sisisiekimo keliu darbai">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="service-grid-item__content">
                                            <h3 class="title">
                                                <a href="#">Tvarkome ir prižiūrime susisiekimo kelius</a>
                                            </h3>
                                            <p class="subtitle">Klojame pagrindą būsimam asfalto liejimui ir kelio įrengimui. Taip pat lyginame aikšteles, dedame trinkeles ir kelkraščių bortelius.
                                                Renovuojame ir prižiūrime jau esančius kelius, aikšteles ir įvairius susisiekimui naudojamus plotus.</p>
                                        </div>
                                    </div>

                                    <div data-toggle="lightbox" data-gallery="keliu-tvarkymas" data-remote="assets/img/services/keliu_tvarkymas/1.jpg"></div>

                                </div>


                                <div class="col-lg-4 col-sm-6 col-12 section-space--bottom--30">
                                    <div class="service-grid-item service-grid-item--style2">
                                        <div class="service-grid-item__image">
                                            <div class="service-grid-item__image-wrapper">
                                                <a href="#">
                                                    <img src="assets/img/services/komunikacijos_sistemos.png" class="img-fluid" alt="Mogis komunikacijos sistemos">
                                                </a>
                                            </div>

                                        </div>
                                        <div class="service-grid-item__content">
                                            <h3 class="title">
                                                <a href="#">Prijungiame ir atvedame komunikacijos sistemas</a>
                                            </h3>
                                            <p class="subtitle">Tvarkingai tausodami aplinką tiesiame ir įvedame elektros ar šviesolaidinius interneto kabelius.
                                                Įrengiame lauko ir vidaus vandentiekį, bei visas kitas su vandens atvedimu ir nuvedimu susijusias sistemas - drenažą, tranšėjas, buitinių nuotekų surinkimo ir valymo įrenginius.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6 col-12 section-space--bottom--30">
                                    <div class="service-grid-item service-grid-item--style2">
                                        <div class="service-grid-item__image">
                                            <div class="service-grid-item__image-wrapper">
                                                <a href="#">
                                                    <img src="assets/img/services/islyginame_zeme.png" class="img-fluid" alt="Mogis žemės lyginimo darbai">
                                                </a>
                                            </div>

                                        </div>
                                        <div class="service-grid-item__content">
                                            <h3 class="title">
                                                <a href="#">Pasirūpiname gražia jūsų aplinka nuo pradžios iki galo</a>
                                            </h3>
                                            <p class="subtitle">Išlyginame žemę, išpjauname medžius ir uolas. Vėliau pašaliname kelmus, akmenis ir kitas kliūtis.
                                                Klojame žolę ir įrengiame pievas, žaidimų aikšteles, didesnes aikštes ir stadionus. Tuomet prižiūrime veją nuo piktžolių, kenkėjų, taip pat šienaujame ir genime krūmus bei gyvatvores.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Projects section end-->
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

    <!-- Mailchimp JS -->
    <script src="assets/js/plugins/mailchimp-ajax-submit.min.js"></script>

    <!--    ekko-lightbox   -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>


</body>

</html>
