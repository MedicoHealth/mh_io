<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css?v=17">
</head>
<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->


  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>

  <?php require_once("./config.php");?>
  <?php require_once("./compontents/toolbar.php");?>
  <?php require_once("./compontents/learnMoreModal.php");?>
  <?php
  if (isset($_GET['page'])) {
  	$page = $_GET['page'];
  } else {
  	$page = 'main';
  }
  switch ($page) {
      // Home page
      case 'main':
          include( './pages/main.php');
          break;
      case 'why':
          include('./pages/why.php');
          break;
      case 'about':
          include( './pages/about.php');
          break;
      default:
          header('HTTP/1.0 404 Not Found');
          include( './pages/404.php');
          break;
  } ?>
  <a href="#" class="sf-back-to-top">
    <img style="width: 100%;
    height: 100%;" src="../images/topArrow.png"></img>
    <!--
    <span class="arrow"></span>
    Top
    -->
    </a>
  <hr class="featurette-divider showDesktop">
  <hr class=" showMobile">
  <div class="container marketing">
  <?php require_once("./compontents/footer.php");?>
  </div>

  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script>

  function hide(id) {
    var x = document.getElementById(id);
        x.style.display = "none";
  }

    var amountScrolled = 20;
    var amountScrolledToTop = 300;

  $(window).scroll(function() {
      if ( $(window).scrollTop() > amountScrolled ) {
          $( "#navbar" ).addClass( "fixedNavbar" );
          if ( $(window).scrollTop() > amountScrolledToTop ) {
            $('a.sf-back-to-top').fadeIn('slow');
          }
      } else {
          $( "#navbar" ).removeClass( "fixedNavbar" );
          if ( $(window).scrollTop() < amountScrolledToTop ) {
            $('a.sf-back-to-top').fadeOut('slow');
          }
      }
  });

  $('a.sf-back-to-top').click(function() {
      $('html, body').animate({
          scrollTop: 0
      }, 700);
      return false;
  });
  </script>
  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>
