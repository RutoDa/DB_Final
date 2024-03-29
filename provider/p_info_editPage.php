<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>店的名稱</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/p_style2.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/jquery.fancybox.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/owl.theme.default.min.css" />
    <script src="https://kit.fontawesome.com/dcc3a92257.js" crossorigin="anonymous"></script>
    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container"> <a class="navbar-brand navbar-logo" href="p_home.php"> <img
                    src="../images/logo-white.png" alt="logo" class="logo-1"> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
                    class="fas fa-bars"></span> </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"> <a class="nav-link" href="" data-scroll-nav="0">商家資訊修改</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../logout.php">登出</a> </li>
                    <!-- <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="1">商品資訊</a> </li> -->
                    <!-- <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="2">Services</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="3">Own Work</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="4">Contact</a> </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Banner Image -->

    <div class="banner text-center" data-scroll-index='0'>
        <div class="banner-overlay2">

        </div>
    </div>

    <!-- End Banner Image -->
    <div class="services section-padding bg-grey" data-scroll-index='1'>
        <div class="container">
            <form method="POST" action="./php/p_edit.php">
                <div class="row">
                    <div class="col-md-12 section-title text-center">
                        <h3 style="font-size: 40px; ">商家基本資料修改</h3>
                        
                        <span class="section-title-line"></span>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
                        <div class="service-box bg-white text-center">
                            <div class="icon"> <i class="fa-solid fa-shop"></i></div>
                            <div class="icon-text">
                                <h4 class="title-box">商家名稱</h4>
                                <input type="text" name="real_name" id="real_name" value="原本的名稱">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
                        <div class="service-box bg-white text-center">
                            <div class="icon"> <i class="fa-solid fa-phone"></i> </div>
                            <div class="icon-text">
                                <h4 class="title-box">電話號碼</h4>
                                <input type="text" name="phone" id="phone" value="原本的電話">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
                        <div class="service-box bg-white text-center">
                            <div class="icon"> <i class="fas fa-map-marked"></i> </div>
                            <div class="icon-text">
                                <h4 class="title-box">商家地址</h4>
                                <input type="text" name="addr" id="addr" value="原本的地址">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
                        <div class="service-box bg-white text-center">
                            <div class="icon"> <i class="fa-solid fa-image"></i> </div>
                            <div class="icon-text">
                                <h4 class="title-box">商家圖片</h4>
                                <input type="text" name="p_img" id="p_img" value="原本的圖片">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
                        <div class="service-box bg-white text-center">
                            <div class="icon"> <i class="fa-solid fa-tag"></i></div>
                            <div class="icon-text">
                                <h4 class="title-box">商家類別</h4>
                                <input type="text" name="category" id="category" value="原本的類別">
                            </div>
                        </div>
                    </div>
                    
                </div>
                <center><input type="submit" class="btn btn-warning" style="font-size: 25px;" value="更新" name="submit"></center>
            </form>
        </div>
    </div>


    

    <!-- End Contact -->
    <footer class="footer-copy">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <p>2022 &copy; 嘉大外送. 首頁的模板來自於 <a href="http://w3Template.com" target="_blank" rel="dofollow">W3 Template</a></p>
        </div>
      </div>
    </div>
  </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
    <!-- owl carousel js -->
    <script src="../js/owl.carousel.min.js"></script>
    <!-- magnific-popup -->
    <script src="../js/jquery.fancybox.min.js"></script>

    <!-- scrollIt js -->
    <script src="../js/scrollIt.min.js"></script>

    <!-- isotope.pkgd.min js -->
    <script src="../js/isotope.pkgd.min.js"></script>
    <script>
        $(window).on("scroll", function () {

            var bodyScroll = $(window).scrollTop(),
                navbar = $(".navbar");

            if (bodyScroll > 130) {

                navbar.addClass("nav-scroll");
                $('.navbar-logo img').attr('src', '../images/logo-black.png');


            } else {

                navbar.removeClass("nav-scroll");
                $('.navbar-logo img').attr('src', '../images/logo-white.png');

            }

        });

        $(window).on("load", function () {



            var bodyScroll = $(window).scrollTop(),
                navbar = $(".navbar");

            if (bodyScroll > 130) {

                navbar.addClass("nav-scroll");
                $('.navbar-logo img').attr('src', '../images/logo-black.png');


            } else {

                navbar.removeClass("nav-scroll");
                $('.navbar-logo img').attr('src', '../images/logo-white.png');

            }

            /* smooth scroll
              -------------------------------------------------------*/
            $.scrollIt({

                easing: 'swing',      // the easing function for animation
                scrollTime: 900,       // how long (in ms) the animation takes
                activeClass: 'active', // class given to the active nav element
                onPageChange: null,    // function(pageIndex) that is called when page is changed
                topOffset: -63
            });

            /* isotope
            -------------------------------------------------------*/
            var $gallery = $('.gallery').isotope({});
            $('.gallery').isotope({

                // options
                itemSelector: '.item-img',
                transitionDuration: '0.5s',

            });


            $(".gallery .single-image").fancybox({
                'transitionIn': 'elastic',
                'transitionOut': 'elastic',
                'speedIn': 600,
                'speedOut': 200,
                'overlayShow': false
            });


            /* filter items on button click
            -------------------------------------------------------*/
            $('.filtering').on('click', 'button', function () {

                var filterValue = $(this).attr('data-filter');

                $gallery.isotope({ filter: filterValue });

            });

            $('.filtering').on('click', 'button', function () {

                $(this).addClass('active').siblings().removeClass('active');

            });

        })

        $(function () {
            $(".cover-bg").each(function () {
                var attr = $(this).attr('data-image-src');

                if (typeof attr !== typeof undefined && attr !== false) {
                    $(this).css('background-image', 'url(' + attr + ')');
                }

            });

            /* sections background color from data background
            -------------------------------------------------------*/
            $("[data-background-color]").each(function () {
                $(this).css("background-color", $(this).attr("data-background-color"));
            });


            /* Owl Caroursel testimonial
              -------------------------------------------------------*/

            $('.testimonials .owl-carousel').owlCarousel({
                loop: true,
                autoplay: true,
                items: 1,
                margin: 30,
                dots: true,
                nav: false,

            });

        });

    </script>

</html>