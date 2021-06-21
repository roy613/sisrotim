<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>SIMPRONATASA | KUTAI TIMUR</title>
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/logo.png">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front1/fontawesome-5.5/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front1/slick/slick.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front1/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front1/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front1/css/tooplate-infinite-loop.css" />
    <link href="<?php echo base_url() ?>assets/front1/css/style.css" rel="stylesheet">
    <!--
Tooplate 2117 Infinite Loop
https://www.tooplate.com/view/2117-infinite-loop
-->

</head>

<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

    <!-- Hero section -->
    <section id="infinite" class="text-white tm-font-big tm-parallax">


        <div class="text-center tm-hero-text-container">
            <div class="tm-hero-text-container-inner">
                <img src="<?php echo base_url(); ?>assets/logo.png" width="auto" alt=""> <br><br>
                <h2 class="tm-hero-title">SISTEM INFORMASI PROGRES PENETAPAN BATAS DESA<br>KABUPATEN KUTAI TIMUR</h2>
                <!-- <p class="tm-hero-subtitle">
                    SISTEM INFORMASI PROGRESS BATAS INTERNAL KUTIM VERSI<span style="font-size: larger;"> 1.0</span>
                </p> -->
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-9 info-panel">
                    <div class="row d-flex justify-content-around">
                        <!-- <div class="col-md-3 link">
                            <a class="link1" href="<?php echo base_url() . 'welcome/profil' ?>">
                                <center><i class="fas fa-book fa-2x"></i><br>
                                    <p>Peraturan Bupati</p>
                                </center>
                            </a>
                        </div> -->
                        <div class="col-md-3 link">
                            <a href="<?php echo base_url('about')?>">
                                <center><i class="fas fa-info-circle fa-2x"></i><br>
                                    <p class="huruf">Tentang Aplikasi</p>
                                </center>
                            </a>
                        </div>
                        <div class="col-md-3 link">
                            <a href="<?php echo base_url('progres')?>">
                                <center><i class="fas fa-map-marked-alt fa-2x"></i><br>
                                    <p class="huruf">Progres Batas</p>
                                </center>
                            </a>
                        </div>
                        <div class="col-md-3 link">
                            <a href="<?php echo base_url('admin')?>">
                                <center><i class="fas fa-user-lock fa-2x"></i><br>
                                    <p class="huruf">Admin</p>
                                </center>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="text-center small tm-footer" style="margin-top: -60px;">
            <p class="mb-0">
                Copyright &copy; 2021 Bagian Pemerintahan Sekretariat Daerah <br>Kabupaten Kutai Timur</p>

            <!-- . <a rel="nofollow" href="https://www.tooplate.com" title="HTML templates">Designed by TOOPLATE</a></p> -->
        </footer>
    </section>





    <div id="preloader"></div>


    <script src="<?php echo base_url(); ?>assets/front1/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/front1/slick/slick.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/front1/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/front1/js/easing.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/front1/js/jquery.singlePageNav.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/front1/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/f2/js/main.js"></script>
    <!-- <script>
        function getOffSet() {
            var _offset = 450;
            var windowHeight = window.innerHeight;

            if (windowHeight > 500) {
                _offset = 400;
            }
            if (windowHeight > 680) {
                _offset = 300
            }
            if (windowHeight > 830) {
                _offset = 210;
            }

            return _offset;
        }

        function setParallaxPosition($doc, multiplier, $object) {
            var offset = getOffSet();
            var from_top = $doc.scrollTop(),
                bg_css = 'center ' + (multiplier * from_top - offset) + 'px';
            $object.css({
                "background-position": bg_css
            });
        }

        // Parallax function
        // Adapted based on https://codepen.io/roborich/pen/wpAsm        
        var background_image_parallax = function($object, multiplier, forceSet) {
            multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
            multiplier = 1 - multiplier;
            var $doc = $(document);
            // $object.css({"background-attatchment" : "fixed"});

            if (forceSet) {
                setParallaxPosition($doc, multiplier, $object);
            } else {
                $(window).scroll(function() {
                    setParallaxPosition($doc, multiplier, $object);
                });
            }
        };

        var background_image_parallax_2 = function($object, multiplier) {
            multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
            multiplier = 1 - multiplier;
            var $doc = $(document);
            $object.css({
                "background-attachment": "fixed"
            });

            $(window).scroll(function() {
                if ($(window).width() > 768) {
                    var firstTop = $object.offset().top,
                        pos = $(window).scrollTop(),
                        yPos = Math.round((multiplier * (firstTop - pos)) - 186);

                    var bg_css = 'center ' + yPos + 'px';

                    $object.css({
                        "background-position": bg_css
                    });
                } else {
                    $object.css({
                        "background-position": "center"
                    });
                }
            });
        };

        $(function() {
            // Hero Section - Background Parallax
            background_image_parallax($(".tm-parallax"), 0.30, false);
            background_image_parallax_2($("#contact"), 0.80);
            background_image_parallax_2($("#testimonials"), 0.80);

            // Handle window resize
            window.addEventListener('resize', function() {
                background_image_parallax($(".tm-parallax"), 0.30, true);
            }, true);

            // Detect window scroll and update navbar
            $(window).scroll(function(e) {
                if ($(document).scrollTop() > 120) {
                    $('.tm-navbar').addClass("scroll");
                } else {
                    $('.tm-navbar').removeClass("scroll");
                }
            });

            // Close mobile menu after click 
            $('#tmNav a').on('click', function() {
                $('.navbar-collapse').removeClass('show');
            })

            // Scroll to corresponding section with animation
            $('#tmNav').singlePageNav({
                'easing': 'easeInOutExpo',
                'speed': 600
            });

            // Add smooth scrolling to all links
            // https://www.w3schools.com/howto/howto_css_smooth_scroll.asp
            $("a").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;

                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 600, 'easeInOutExpo', function() {
                        window.location.hash = hash;
                    });
                } // End if
            });

            // Pop up
            $('.tm-gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true
                }
            });

            $('.tm-testimonials-carousel').slick({
                dots: true,
                prevArrow: false,
                nextArrow: false,
                infinite: false,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });

            // Gallery
            $('.tm-gallery').slick({
                dots: true,
                infinite: false,
                slidesToShow: 5,
                slidesToScroll: 2,
                responsive: [{
                        breakpoint: 1199,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });
    </script> -->
</body>

</html>