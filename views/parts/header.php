<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tabaaro Foundation</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/logo.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/logo.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/logo.png" />

    <meta name="description" content="Tabaaro Foundation - Empowering Children through Education and Sponsorships">
    <meta name="keywords" content="Tabaaro Foundation, nonprofit organization, education, sponsorships, Uganda, children, empowerment">
    <meta property="og:title" content="Tabaaro Foundation">
    <meta property="og:description" content="Empowering Children through Education and Sponsorships">
    <meta property="og:image" content="https://<?=$_SERVER['SERVER_NAME']?>/assets/logo.png">
    <meta property="og:url" content="https://<?=$_SERVER['SERVER_NAME']?>">
    <meta property="og:type" content="website">

    <!-- Twitter Card Tags for Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Tabaaro Foundation">
    <meta name="twitter:description" content="Empowering Children through Education and Sponsorships">
    <meta name="twitter:image" content="https://<?=$_SERVER['SERVER_NAME']?>/assets/logo.png">


    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
            href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
          rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="/assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="/assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="/assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="/assets/vendors/oxpins-icons/style.css">
    <link rel="stylesheet" href="/assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="/assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="/assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="/assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="/assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="/assets/vendors/timepicker/timePicker.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="/assets/css/oxpins.css" />
    <link rel="stylesheet" href="/assets/css/oxpins-responsive.css" />
    <style>
        .image-color-invert{
            filter: brightness(0) invert(1);
        }

    </style>
</head>

<body class="custom-cursor">

<div class="custom-cursor__cursor"></div>
<div class="custom-cursor__cursor-two"></div>





<div class="preloader">
    <div class="preloader__image"></div>
</div>
<!-- /.preloader -->


<div class="page-wrapper">
    <header class="main-header">
        <nav class="main-menu">
            <div class="main-menu__wrapper">
                <div class="main-menu__wrapper-inner">
                    <div class="main-menu__left">
                        <div class="main-menu__logo">
                            <a href="/"><img src="/assets/logo2.png" style="width:250px" alt=""></a>
                        </div>
                        <div class="main-menu__shape-1 float-bob-x">
                            <img src="/assets/images/shapes/main-menu-shape-1.png" alt="">
                        </div>
                    </div>
                    <div class="main-menu__right">
                        <div class="main-menu__right-top">
                            <div class="main-menu__right-top-left">
                                <div class="main-menu__volunteers">
                                    <div class="main-menu__volunteers-icon">
                                        <img src="/assets/images/icon/main-menu-heart-icon.png" alt="">
                                    </div>
                                    <div class="main-menu__volunteers-text-box">
                                        <p class="main-menu__volunteers-text"><a href="/get-involved">Become
                                                a
                                                <span>volunteers</span></a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="main-menu__right-top-right">
                                <div class="main-menu__right-top-address">
                                    <ul class="list-unstyled main-menu__right-top-address-list">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-phone-call"></span>
                                            </div>
                                            <div class="content">
                                                <p>Helpline</p>
                                                <h5><a href="tel:256700632657">+ 256 700 632657</a></h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-message"></span>
                                            </div>
                                            <div class="content">
                                                <p>Send email</p>
                                                <h5><a href="mailto:info@<?=str_replace("www.", "", $_SERVER['SERVER_NAME'])?>">info@<?=str_replace("www.", "", $_SERVER['SERVER_NAME'])?></a>
                                                </h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-location"></span>
                                            </div>
                                            <div class="content">
                                                <p>Kashari</p>
                                                <h5>Uganda</h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-menu__right-top-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="main-menu__right-bottom">
                            <div class="main-menu__main-menu-box">
                                <a href="/" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li class="">
                                        <a href="/">Home </a>

                                    </li>
                                    <li class="">
                                        <a href="/about-us">About us</a>

                                    </li>
                                    <li class="">
                                        <a href="/donate">Donations</a>

                                    </li>
                                    <li class="">
                                        <a href="/contact-us">Contact</a>

                                    </li>


                                </ul>
                            </div>
                            <div class="main-menu__main-menu-content-box">
                                <div class="main-menu__search-cat-btn-box">

                                    <div class="main-menu__btn-box">
                                        <a href="/donate-now" class="main-menu__btn"> <span
                                                    class="fa fa-heart"></span>Donate
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->



