<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/startofhead.php';?>
		<!-- meta tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
		<meta name="google-site-verification" content="CmM6g5Qe4_SsLkVVF6AJaIAeWQP7jh3GIpaE7MrIgTY">
		<meta name="robots" content="index,follow">
		<meta name="author" content="Medicohealth AG">
		<meta name="web_author" content="Medicohealth AG">
		<meta name="copyright" content="Copyright (c) 2018, Medicohealth AG">
		<meta name="description" content="Medicohealth is a blockchain-based project designed to improve the fragmented healthcare system, where we know we can make a significant difference.">
		<meta name="keywords" content="Medicohealth, medico health,blockchain business,development, healthcare, crypto, presale, token">
		<meta property="og:locale" content="en_US">
		<meta property="og:type" content="website">
		<meta property="og:site_name" content="MedicoHealth">
		<meta property="og:title" content="MedicoHealth | Building bridges to better health">
		<meta property="og:description" content="Medicohealth is a blockchain-based project designed to improve the fragmented healthcare system, where we know we can make a significant difference for the better by tackling just one truly important issue.">
		<meta property="og:url" content="https://medicohealth.io/">
		<meta property="og:image" content="https://medicohealth.io/images/sn-ld-og-img.png">
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:description" content="Medicohealth is a blockchain-based project designed to improve the fragmented healthcare system, where we know we can make a significant difference for the better by tackling just one truly important issue.">
		<meta name="twitter:title" content="MedicoHealth | Building bridges to better health">
		<meta name="twitter:site" content="@Medico_Health">
		<meta name="twitter:image" content="https://medicohealth.io/images/social-fb-tw.png">
		<meta name="twitter:creator" content="@Medico_Health">
		<link rel="canonical" href="https://medicohealth.io/">
		<!-- title -->
		<title>MedicoHealth | Where healthcare revolution is taking place</title>
		<!-- css -->
		<link href="/styles/style.css" rel="stylesheet">
		<link href="/styles/timeline.css" rel="stylesheet">
		<!-- fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,600,700" rel="stylesheet">
		<!-- favicon -->
		<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon" />
		<link rel="icon" href="/img/favicon.ico" type="image/x-icon" />

		<!-- bootstrap-->
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
		<!-- jquery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/endofhead.php';?>
		<?php require_once $_SERVER['DOCUMENT_ROOT'].'/functions.php';?>
		<?php
			/* require_once('includes/contactUsModal.php');
			require_once('includes/PrivatePresaleModal.php');*/
		?>
		<!-- JSON-LD -->
		<script type="application/ld+json">
		{
		  "@context": "http://schema.org",
		  "@type": "Organization",
		  "url": "http://medicohealth.io",
		  "name": "Medicohealth AG",
          "address": {
              "@type": "PostalAddress",
              "addressLocality": "Zug, Switzerland",
              "postalCode": "6300",
              "streetAddress": "Steinhauserstrasse 74"
          },
          "email": "info@medicohealth.io"
		}
		</script>
	</head>
	<body>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/startofbody.php';?>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/modal.php';?>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/menu.php';?>
		<div id="main">
			<!-- SECTION: INTRO !-->
			<?php include $_SERVER['DOCUMENT_ROOT'].'/content/intro.php';?>
			<!-- SECTION: PRESENTATIONAL ANIMATION !-->
			<?php include $_SERVER['DOCUMENT_ROOT'].'/content/animation.php';?>
			<!-- SECTION: TOP ICO REVIEWS !-->
			<?php include $_SERVER['DOCUMENT_ROOT'].'/content/topIcoReviews.php';?>
			<!-- SECTION: PRESENTATIONAL VIDEO !-->
			<?php include $_SERVER['DOCUMENT_ROOT'].'/content/video.php';?>
			<!-- SECTION: USER BENEFITS !-->
			<?php include $_SERVER['DOCUMENT_ROOT'].'/content/benefits.php';?>
			<!-- SECTION: ROADMAP !-->
			<?php include $_SERVER['DOCUMENT_ROOT'].'/content/roadmap.php';?>
			<!-- SECTION: TEAM !-->
			<?php include $_SERVER['DOCUMENT_ROOT'].'/content/team.php';?>
			<!-- SECTION: AMBASSADORS AND ADVISORS !-->
			<?php include $_SERVER['DOCUMENT_ROOT'].'/content/ambasadors.php';?>
			<!-- SECTION: PARTNERS !-->
			<?php include $_SERVER['DOCUMENT_ROOT'].'/content/partners.php';?>
			<!-- SECTION: UPCOMING EVENTS !-->
			<?php include $_SERVER['DOCUMENT_ROOT'].'/content/events.php';?>
			<!-- SECTION: MEDIA AND PRESS !-->
			<?php include $_SERVER['DOCUMENT_ROOT'].'/content/press.php';?>
			<!-- SECTION: ICO TRACKERS !-->
			<?php include $_SERVER['DOCUMENT_ROOT'].'/content/icotrackers.php';?>
			<!-- SECTION: Stay in touch !-->
			<?php include $_SERVER['DOCUMENT_ROOT'].'/content/stayintouch.php';?>
			<!-- FOOTER !-->
			<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';?>
		</div>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/endofbody.php';?>
		<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
	        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	        crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
	        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
	        crossorigin="anonymous"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script>
			$(document).ready(function() {
					$("body").tooltip({ selector: '[data-toggle=tooltip]', html:true, placement: 'bottom' });
					var modal = document.getElementById('myModal');
					function showModalPopout() {
							$('#PrivatePresaleModal').modal('show');
					}
					$(document).ready(function () {
							setTimeout(showModalPopout, 4000);
					});
			});
	</script> -->
	</body>
</html>
