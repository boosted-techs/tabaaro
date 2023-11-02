<?php
include "parts/header.php";
?>

    <!--Main Slider Start-->
    <section class="main-slider clearfix">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
            "effect": "fade",
            "pagination": {
            "el": "#main-slider-pagination",
            "type": "bullets",
            "clickable": true
            },
            "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
            },
            "autoplay": {
            "delay": 5000
            }}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url(/assets/images/backgrounds/main-slider-1-1.png);"></div>
                    <!-- /.image-layer -->

                    <div class="main-slider-shape-1"
                         style="background-image: url(/assets/images/shapes/main-slider-shape-1.jpg);"></div>
                    <div class="main-slider-shape-2 float-bob-x">
                        <img src="/assets/images/shapes/main-slider-shape-2.png" alt="">
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-8">
                                <div class="main-slider__content">
                                    <p class="main-slider__sub-title">Empowering Children's Education</p>
                                    <h2 class="main-slider__title">Join Tabaaro Foundation in Making a Difference</h2>
                                    <div class="main-slider__btn-box">
                                        <a href="about.html" class="thm-btn main-slider__btn"> Discover more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- If we need navigation buttons -->
            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="icon-left-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-right-arrow"></i>
                </div>
            </div>
        </div>
    </section>
    <!--Main Slider End-->


    <!--About One Start-->
    <section class="about-one">
        <div class="about-one__shape-box-1">
            <div class="about-one__shape-1"
                 style="background-image: url(/assets/images/shapes/about-one-shape-1.png);"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__left">
                        <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms"
                             data-wow-duration="2500ms">
                            <div class="about-one__img">
                                <img src="/assets/images/resources/about-one-img-1.jpg" alt="">
                            </div>
                            <div class="about-one__img-border"></div>
                            <div class="about-one__curved-circle-box">
                                <div class="curved-circle">
                                <span class="curved-circle--item">
                                    Empowering Children's Education in Uganda
                                </span>
                                </div><!-- /.curved-circle -->
                                <div class="about-one__curved-circle-icon">
                                    <img src="/assets/logo.png" alt="" style="width:70%">
                                </div>
                            </div>
                            <div class="about-one__shape-2 zoom-fade">
                                <img src="/assets/images/shapes/about-one-shape-2.png" alt="">
                            </div>
                            <div class="about-one__shape-3 float-bob-y">
                                <img src="/assets/images/shapes/about-one-shape-3.png" alt="">
                            </div>
                            <div class="about-one__shape-4 zoominout">
                                <img src="/assets/images/shapes/about-one-shape-4.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-one__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">About the Tabaaro Foundation</span>
                            <h2 class="section-title__title">Empowering Uganda's Children Through Education</h2>
                        </div>
                        <p class="about-one__text">The Tabaaro Foundation is on a mission to empower the most vulnerable children in Uganda by ensuring they have equal access to quality education. We are committed to extending educational assistance, vital sponsorships, and essential school supplies to help children build a brighter future.</p>
                        <div class="about-one__fund">
                            <p class="about-one__fund-text">Join us in our mission to make a difference in the lives of children in Uganda.</p>
                        </div>
                        <ul class="list-unstyled about-one__points">
                            <li>
                                <div class="icon">
                                    <span class="icon-volunteer"></span>
                                </div>
                                <div class="text">
                                    <h5><a href="/become-volunteer">Join Our Cause</a></h5>
                                    <p>Be a part of our team and help us transform lives.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-solidarity"></span>
                                </div>
                                <div class="text">
                                    <h5><a href=/donate-now">Support Our Mission</a></h5>
                                    <p>Your donations can make a significant impact on children's education.</p>
                                </div>
                            </li>
                        </ul>
                        <a href="/about-us" class="thm-btn about-one__btn">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About One End-->

    <!--Causes One Start-->
    <section class="causes-one">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Support Our Educational Causes</span>
                <h2 class="section-title__title">Find an Educational Cause and Make a Difference</h2>
            </div>
            <div class="row">
                <!--Causes One Single - School Fees Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="causes-one__single">
                        <div class="causes-one__img">
                            <img src="/assets/images/resources/causes-1-1.jpg" alt="">
                            <div class="causes-one__cat">
                                <p>Education</p>
                            </div>
                        </div>
                        <div class="causes-one__content">
                            <h3 class="causes-one__title"><a href="donation-details.html">Support School Fees</a></h3>
                            <p class="causes-one__text">Help provide school fees to underprivileged children, giving them access to quality education.</p>
                            <div class="causes-one__progress">
                                <div class="causes-one__progress-shape" style="background-image: url(/assets/images/shapes/causes-one-progress-shape-1.png);"></div>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="45%">
                                        <div class="count-text">45%</div>
                                    </div>
                                </div>
                                <div class "causes-one__goals">
                                <p><span>$12,350</span> Raised</p>
                                <p><span>$27,500</span> Goal</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Causes One Single - School Fees End-->

            <!--Causes One Single - Scholastic Materials Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                <div class="causes-one__single">
                    <div class="causes-one__img">
                        <img src="/assets/images/resources/causes-1-2.jpg" alt="">
                        <div class="causes-one__cat">
                            <p>Education</p>
                        </div>
                    </div>
                    <div class="causes-one__content">
                        <h3 class "causes-one__title"><a href="donation-details.html">Provide Scholastic Materials</a></h3>
                        <p class="causes-one__text">Contribute towards supplying scholastic materials to disadvantaged students to enhance their learning experience.</p>
                        <div class="causes-one__progress">
                            <div class="causes-one__progress-shape" style="background-image: url(/assets/images/shapes/causes-one-progress-shape-1.png);"></div>
                            <div class="bar">
                                <div class="bar-inner count-bar" data-percent="52%">
                                    <div class="count-text">52%</div>
                                </div>
                            </div>
                            <div class="causes-one__goals">
                                <p><span>$14,600</span> Raised</p>
                                <p><span>$28,000</span> Goal</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Causes One Single - Scholastic Materials End-->

            <!--Causes One Single - Scholarships Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                <div class="causes-one__single">
                    <div class="causes-one__img">
                        <img src="/assets/images/resources/causes-1-3.jpg" alt="">
                        <div class="causes-one__cat">
                            <p>Education</p>
                        </div>
                    </div>
                    <div class="causes-one__content">
                        <h3 class="causes-one__title"><a href="donation-details.html">Provide Scholarships</a></h3>
                        <p class="causes-one__text">Support students by offering scholarships to help them pursue their educational dreams.</p>
                        <div class="causes-one__progress">
                            <div class="causes-one__progress-shape" style="background-image: url(/assets/images/shapes/causes-one-progress-shape-1.png);"></div>
                            <div class="bar">
                                <div class="bar-inner count-bar" data-percent="40%">
                                    <div class="count-text">40%</div>
                                </div>
                            </div>
                            <div class="causes-one__goals">
                                <p><span>$11,800</span> Raised</p>
                                <p><span>$29,500</span> Goal</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Causes One Single - Scholarships End-->
        </div>
        </div>
    </section>
    <!--Causes One End-->

    <!--Become Volunteer One Start-->
    <section class="become-volunteer-one">
        <div class="become-volunteer-one__bg-box">
            <div class="become-volunteer-one__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                 style="background-image: url(/assets/images/backgrounds/become-volunteer-one-bg.jpg);"></div>
        </div>
        <div class="become-volunteer-one__shape-1"
             style="background-image: url(/assets/images/shapes/become-volunteer-shape-1.png);"></div>
        <div class="container">
            <div class="become-volunteer-one__inner">
                <p class="become-volunteer-one__sub-title">Join Our Cause</p>
                <h3 class="become-volunteer-one__title">Become a Volunteer and Make a Difference</h3>
                <div class="become-volunteer-one__btn-box">
                    <a href="/become-volunteer" class="thm-btn become-volunteer-one__btn">Get Involved</a>
                </div>
            </div>
        </div>
    </section>

    <!--Become Volunteer One End-->

<?php
include "parts/footer.php";