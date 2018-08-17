<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <meta name="description" content="MedicoHealth Supporters">
  <meta name="keywords" content="bockchain, medical, doctor, patient, cryptocurrency, supporters, invesment, crowdsale, presale, token, medicine, insurrance">
  <meta property="og:locale" content="en_US">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="MedicoHealth">
  <meta property="og:title" content="Where healthcare revolution is taking place | MedicoHealth">
  <meta property="og:description" content="Our idea is simple. To use knowledge and experience to provide concrete changes not only patch and bandages to cover up. Countless hours were spent analyzing, listening to all sides of the story, building trust, advanced planning and generating concrete sustainable solution.">
  <meta property="og:url" content="https://medicohealth.io/supporters">
  <meta property="og:image" content="https://medicohealth.io/IMG/sn-ld-og-img.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:description" content="Medicohealth is a blockchain-based project designed to improve the fragmented healthcare system, where we know we can make a significant difference for the better by tackling just one truly important issue.">
  <meta name="twitter:title" content="Where healthcare revolution is taking place | MedicoHealth">
  <meta name="twitter:site" content="@Medico_Health">
  <meta name="twitter:image" content="https://medicohealth.io/IMG/social-fb-tw.png">
  <meta name="twitter:creator" content="@Medico_Health">

  <!-- te dve vrstici maš že dodadane not samo zamenjaj vsebino-->

  <link rel="icon" type="image/png" sizes="16x16" href="https://medicohealth.io/favicon.png">

  <title>Where healthcare revolution is taking place | MedicoHealth</title>

  <title>Medicohealth</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css?v=20">

    <script type="text/javascript">
        window.smartlook||(function(d) {
        var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
        var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
        c.charset='utf-8';c.src='https://rec.smartlook.com/recorder.js';h.appendChild(c);
        })(document);
        smartlook('init', '2aab060b37215a25db160725e8c2c9ffd68092b2');
    </script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122831637-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-122831637-1');
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.6/cookieconsent.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.6/cookieconsent.min.css">
  <script>
      window.addEventListener("load", function(){
          window.cookieconsent.initialise({
              content: {
              header: 'Cookies used on the website!',
              message: 'We use cookies to ensure that we give you the best experience on our website. By continuing to use our site, you accept our use of cookies, revised Privacy Policy and Terms of Use. To learn more, click',
              dismiss: 'Got it!',
              allow: 'Allow cookies',
              deny: 'Decline',
              link: 'here.',
              href: '/documents/GDPR123.pdf',
              close: '&#x274c;',
            },
            autoOpen: true,
              "palette": {
                  "popup": {
                      "background": "#000"
                  },
                  "button": {
                      "background": "#3eb3c3",
                      "color": "#fff"
                  }
              }
          })});
  </script>
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
  <div id="loader" class="loader"></div>
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
    height: 100%;" src="../img/topArrow.png"></img>
    <!--
    <span class="arrow"></span>
    Top
    -->
    </a>
  <div style="margin-top:10px;" class="container marketing">
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
  <!-- Hotjar Tracking Code for www.medicohealth.io -->
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>
