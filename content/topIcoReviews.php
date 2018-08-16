<br /><br /><br />
<?php
if(!isset($icoBenchRating)) {
  $icoBenchRating = 4.5;
}
$referer = isset($_GET["referrer"]) ?  $_GET["referrer"] : null;
  $topIcoReviews = array(
    array('href' => 'https://www.fxempire.com/crypto/ico/medicohealth', 'src' => $_SERVER['DOCUMENT_ROOT']."/img/topIcoReviews/logotipi_fxempire_bw.png",'srcRating' => "$root/img/topIcoReviews/zvezdice-5.0.png", 'text' => 'Fxempire',),
    array('href' => 'https://www.trackico.io/ico/medicohealth/', 'src' => $_SERVER['DOCUMENT_ROOT']."/img/topIcoReviews/logotipi_trackico.png",'srcRating' => "$root/img/topIcoReviews/zvezdice-5.0.png", 'text' => 'Trackico',),
    array('href' => 'https://icobench.com/ico/medicohealth', 'src' => $_SERVER['DOCUMENT_ROOT']."/img/topIcoReviews/logotipi_icobench.png",'srcRating' => "$root/img/topIcoReviews/zvezdice-$icoBenchRating.png", 'text' => 'Icobench'), //
    array('href' => 'https://www.icobreaker.com/ico_listing/medicohealth/', 'src' => $_SERVER['DOCUMENT_ROOT']."/img/topIcoReviews/logotipi_icobreaker.png",'srcRating' => "$root/img/topIcoReviews/zvezdice-5.0.png", 'text' => 'IcoBreaker',),
    array('href' => 'https://foundico.com/ico/medicohealth.html', 'src' => $_SERVER['DOCUMENT_ROOT']."/img/topIcoReviews/logotipi_foundico_bw.png",'srcRating' => "$root/img/topIcoReviews/zvezdice-05.svg", 'text' => 'Foundico',),
    array('href' => 'https://coinlauncher.io/medicohealth-ico-0', 'src' => $_SERVER['DOCUMENT_ROOT']."/img/topIcoReviews/logotipi_coinlauncher_bw.png", 'srcRating' => "$root/img/topIcoReviews/zvezdice-06.svg", 'text' => 'CoinLauncher',),
  )
?>
        <?php foreach ($topIcoReviews as $key => $value) {?>
              <a href="<?php echo $value['href'] ?>" title="<?php echo $value['text'] ?>" target="_blank">
              <div class="topIcoReview">
                      <img class="topIcoReviewImage" src="<?php echo $value['src'] ?>" alt="<?php echo $value['text'] ?>" >
                      <img class="topIcoReviewImage imageRating" src="<?php echo $value['srcRating'] ?>" class="img-fluid" alt="<?php echo $value['text'] ?>" >
              </div>
              </a>
        <?php } ?>
<br /><br /><br />