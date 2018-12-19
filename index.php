<!doctype html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>KGarira?</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,600" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

  <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/slick/slick.css">
  <link rel="stylesheet" href="vendors/slick/slick-theme.css">

  <link rel="stylesheet" href="css/global.min.css">

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/js.cookie.js"></script>
  <script>
    var siteURL = 'http://localhost:88/kgarira';
    var regionCookie = Cookies.get('kregion');
    if (regionCookie) window.location.href = siteURL + regionCookie;
  </script>
</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
  <div id="splash-wrapper">
    <div id="splash-header">
      <div class="container">
        <div class="row">
          <div class="col">
            <a href="/">
              <img src="img/kgarira.png" alt="k garira">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div id="splash-slider">
      <div class="slide-wrap">
        <div class="_slide" style="background: url('img/splash/1.jpeg')"></div>
        <div class="_slide" style="background: url('img/splash/2.jpeg')"></div>
        <div class="_slide" style="background: url('img/splash/3.jpg')"></div>
        <div class="_slide" style="background: url('img/splash/4.jpeg')"></div>
        <div class="_slide" style="background: url('img/splash/1.jpeg')"></div>
      </div>
    </div>
    <div id="splash-footer">
      <div class="_top">
        <h2>PICK YOUR PLAYGROUND</h2>
      </div>
      <div class="_bottom">
        <div class="k-region" data-region="/home.php" data-slide="0">
          <span>Kathmandu</span>
          <i class="fas fa-angle-down"></i>
        </div>
        <div class="k-region" data-region="/home.php" data-slide="1">
          <span>Lalitpur</span>
          <i class="fas fa-angle-down"></i>
        </div>
        <div class="k-region" data-region="/home.php" data-slide="2">
          <span>Pokhara</span>
          <i class="fas fa-angle-down"></i>
        </div>
        <div class="k-region" data-region="/home.php" data-slide="3">
          <span>Dharan</span>
          <i class="fas fa-angle-down"></i>
        </div>
        <div class="k-region" data-region="/home.php" data-slide="4">
          <span>Chitwan</span>
          <i class="fas fa-angle-down"></i>
        </div>
      </div>
    </div>
  </div>

<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="vendors/malihu/jquery.mCustomScrollbar.js"></script>
<script src="vendors/slick/slick.min.js"></script>

<script>
  $('.slide-wrap').slick({
    autoplay: false,
    arrows: false,
    dots: false,
    fade: true,
    draggable: false,
    touchMove: false
  });
  $('.k-region').hover(
    function() {
      var slideIndex = $(this).data('slide');
      console.log(slideIndex);
      $('.slide-wrap').slick('slickGoTo', slideIndex);
    }
  );
  $('.k-region').click(function() {
    var region = $(this).data('region');
    Cookies.set('kregion', region, { path: '/', expires: 365 });
    window.location.href = siteURL + region;
  });
</script>

</body>
</html>