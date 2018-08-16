<div>
<div style="display:none">
<?php require($_SERVER['DOCUMENT_ROOT']."/topIcoReviews.php") ?>
</div>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h2 class="featurette-heading">Ico ratings</h2>
    <p>We scored big</p>
</div>
<div class="showDesktop">
  <div class="row" style="max-width: 1240px; margin:auto; margin-top:20px;">
          <?php foreach ($topIcoReviews as $key => $value) {?>
              <div class="col-12 col-md-6" style="padding: 15px;">
                <a href="<?php echo $value['href'] ?>" title="<?php echo $value['text'] ?>" target="_blank" data-toggle="tooltip">
                <div class="row topIcoReview" style="<?php if(2==1) echo 'background: linear-gradient(-90deg, #486ae5, #31c4f1);' ?>"><!-- $key%2==1 -->
                  <div style="padding-right:0px" class="col-12 col-md-12 col-lg-6">
                        <img class="topIcoReviewImage" src="<?php echo $value['src'] ?>" class="img-fluid" alt="<?php echo $value['text'] ?>"
                        style="padding: 10px;"
                        >
                  </div>
                  <div style="padding-left:5px" class="col-12 col-md-12 col-lg-6">
                        <img
                          class="topIcoReviewImage imageRating"
                          style="float: right; max-width: 240px;"
                          src="<?php echo $value['srcRating'] ?>" class="img-fluid" alt="<?php echo $value['text'] ?>">
                  </div>
                </div>
                </a>
              </div>
          <?php } ?>
  </div>
</div>

<div class="showMobile" style="text-align:center">
  <div class="row" style="max-width: 1240px; margin:auto;">
          <?php foreach (array_slice ($topIcoReviews,0,3) as $key => $value) {?>
              <div class="col-12 col-md-6" style="padding: 15px;">
                <a href="<?php echo $value['href'] ?>" title="<?php echo $value['text'] ?>" target="_blank" data-toggle="tooltip">
                <div class="row topIcoReview" style="<?php if(2==1) echo 'background: linear-gradient(-90deg, #486ae5, #31c4f1);' ?>"><!-- $key%2==1 -->
                  <div style="padding-right:0px" class="col-12 col-md-12 col-lg-6">

                        <img class="topIcoReviewLogo" src="<?php echo $value['src'] ?>" class="img-fluid" alt="<?php echo $value['text'] ?>"
                        style="padding: 10px;"
                        >
                  </div>
                  <div style="padding-left:5px" class="col-12 col-md-12 col-lg-6">
                        <img
                          class="topIcoReviewImage imageRating"
                          style="float: right; max-width: 240px;"
                          src="<?php echo $value['srcRating'] ?>" class="img-fluid" alt="<?php echo $value['text'] ?>">
                  </div>
                </div>
                </a>
              </div>
          <?php } ?>
  </div>
</div>

<?php
/*
*/
?>
<?php
/*
<div id="carouselExampleIndicators" class="carousel slide showMobile" data-ride="carousel">
  <?php
    $topIcoReviewsTriple = array(
      array($topIcoReviews[0],$topIcoReviews[1],$topIcoReviews[2]),
      array($topIcoReviews[3],$topIcoReviews[4],$topIcoReviews[5]),
    );
  ?>
  <!--<ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>-->
  <div class="carousel-inner" style="">
    <?php foreach ($topIcoReviewsTriple as $key => $triple) {?>
        <div class="carousel-item <?php if($key===0) echo "active" ?>" style="background-color: white;">
          <?php foreach ($triple as $key => $value) {?>
            <a href="<?php echo $value['href'] ?>" title="<?php echo $value['text'] ?>" target="_blank" data-toggle="tooltip">
              <div class="row topIcoReview" style="<?php if(2==1) echo 'background: linear-gradient(-90deg, #486ae5, #31c4f1);' ?>"><!-- $key%2==1 -->
                <div style="padding-right:0px" class="col-12 col-md-12 col-lg-6">
                      <img class="" src="<?php echo $value['src'] ?>" class="img-fluid" alt="<?php echo $value['text'] ?>"
                      style="
                      width: 100%;
                      height: auto;
                      ">
                </div>
                <div style="padding-left:5px" class="col-12 col-md-12 col-lg-6">
                      <img
                        class="topIcoReviewImage imageRating"
                        style="float: right; max-width: 240px;"
                        src="<?php echo $value['srcRating'] ?>" class="img-fluid" alt="<?php echo $value['text'] ?>">
                </div>
              </div>
            </a>
          <?php } ?>
        </div>
  <?php } ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
*/
?>
</div>
