<?php
    session_start();
    require_once("../config.php");
    $cid = $_SESSION["customer_id"];
    $id = $_GET['id'];
    $sql = "SELECT * FROM provider WHERE provider_id ='".$id."'";
    $result=mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php echo $row['shop_name']; ?></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/c_style2.css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/jquery.fancybox.min.css"/>
<link rel="stylesheet" type="text/css" href="../css/owl.carousel.min.css"/>
<link rel="stylesheet" type="text/css" href="../css/owl.theme.default.min.css"/>

<!-- Font Google -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container"> <a class="navbar-brand navbar-logo" href="c_home.php"> <img src="../images/logo-white.png" alt="logo" class="logo-1"> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="fas fa-bars"></span> </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"> <a class="nav-link" href="" data-scroll-nav="0">選購</a> </li>
          <li class="nav-item"> <a class="nav-link" href="../logout.php">登出</a> </li>
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
    <div class="banner-overlay3">
    <img style="border-radius: 8px;" width="400" src="<?php echo $row['image']; ?>" alt="">
        <br>
        <br>
        <h1 class="text-capitalize"><?php echo $row['shop_name']; ?></h1>
    </div>
  </div>
  
  <!-- End Banner Image --> 


    <div class="about-us section-padding" data-scroll-index='1'>
        <center>
            
        <div class="container" style="padding-left: 5%;">
            <h1 style="text-align: left;">商品</h1>  
            
            <br>
            <form action="php/c_request.php?">
            <table style="font-size: 20px;color: rgb(34, 33, 33);" class="table">
              <tr>
                  <th>商品名稱</th>
                  <th>價錢</th> 

                  <th>產品簡述</th>
                  <th>數量</th>
              </tr>
                <?php
                  $sql = "SELECT * FROM `product` WHERE `provider_id` = ".$id.";";
                  $result=mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                  echo "<td>" . $row['product_name'] . "</td>";
                  echo "<td>" . $row['price'] . "</td>";
                  echo "<td><input name='".$row['product_id']."' type='number' value='0'></td>";
                  echo "<td>" . $row['description'] . "</td>";
                  
                }
                ?>
                
            </table>
              <!-- <h4 style="text-align: left; color:red;">備註：我不要香菜！！！</h4> -->
            
            <br>
            <h3 style="text-align:left">外送地址</h3><input name="address" required="" style="text-align: left;" size="150" type="text">
            <br>
            <br>
            <h3 style="text-align:left">備註</h3><input name="memo"  size="150" type="text">
            <br>
            <br>
            <input style="display: none;" type="text" name="id" value="<?php echo $id; ?>">
            <input type="submit" class="btn btn-success" value="下訂">
            </form>
        </div>
    </center>
      </div>
<!-- End Contact -->
<!-- <footer class="footer-copy">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <p>2022 &copy; 嘉大外送. 首頁的模板來自於 <a href="http://w3Template.com" target="_blank" rel="dofollow">W3 Template</a></p>
        </div>
      </div>
    </div>
  </footer> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> 
  <!-- owl carousel js --> 
  <script src="../js/owl.carousel.min.js"></script> 
  <!-- magnific-popup --> 
  <script src="../js/jquery.fancybox.min.js"></script> 
  
  <!-- scrollIt js --> 
  <script src="../js/scrollIt.min.js"></script> 
  
  <!-- isotope.pkgd.min js --> 
  <script src="../js/isotope.pkgd.min.js"></script> 
  <script>
    $(window).on("scroll",function () {
  
        var bodyScroll = $(window).scrollTop(),
            navbar = $(".navbar");
  
        if(bodyScroll > 130){
  
            navbar.addClass("nav-scroll");
            $('.navbar-logo img').attr('src','../images/logo-black.png');
  
  
        }else{
  
            navbar.removeClass("nav-scroll");
            $('.navbar-logo img').attr('src','../images/logo-white.png');
  
        }
  
    });
  
    $(window).on("load",function (){
  
  
  
  var bodyScroll = $(window).scrollTop(),
  navbar = $(".navbar");
  
  if(bodyScroll > 130){
  
  navbar.addClass("nav-scroll");
  $('.navbar-logo img').attr('src','../images/logo-black.png');
  
  
  }else{
  
  navbar.removeClass("nav-scroll");
  $('.navbar-logo img').attr('src','../images/logo-white.png');
  
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
    'transitionIn'  : 'elastic',
    'transitionOut' : 'elastic',
    'speedIn'   : 600,
    'speedOut'    : 200,
    'overlayShow' : false
  });
  
  
  /* filter items on button click
  -------------------------------------------------------*/
  $('.filtering').on( 'click', 'button', function() {
  
      var filterValue = $(this).attr('data-filter');
  
      $gallery.isotope({ filter: filterValue });
  
      });
  
  $('.filtering').on( 'click', 'button', function() {
  
      $(this).addClass('active').siblings().removeClass('active');
  
  });
  
  })
  
  $(function () {
  $( ".cover-bg" ).each(function() {
      var attr = $(this).attr('data-image-src');
  
      if (typeof attr !== typeof undefined && attr !== false) {
        $(this).css('background-image', 'url('+attr+')');
      }
  
    });
  
    /* sections background color from data background
    -------------------------------------------------------*/
    $("[data-background-color]").each(function() {
        $(this).css("background-color", $(this).attr("data-background-color")  );
    });
  
  
  /* Owl Caroursel testimonial
    -------------------------------------------------------*/
    
    $('.testimonials .owl-carousel').owlCarousel({
      loop:true,
      autoplay:true,
      items:1,
      margin:30,
      dots: true,
      nav: false,
      
    });
  
  });
  
  </script>
</html>