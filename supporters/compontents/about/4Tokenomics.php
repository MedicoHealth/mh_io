<?php
$points = array (
  "Pay anonymously",
  "Get health insurance",
  "Get second opinion from chosen doctor",
  "Use telemedicine",
  "Control access permission to your data",
);
?>
<div class="row featurette featuretteText featuretteHeight circleRowParent" style=" height: 100%; ">
  <div class="order-1 order-lg-1 col-lg-6 col-xl-5 left-right-text">
    <h2 class="featurette-heading">Tokenomics<span class="text-muted"></span></h2>
      <p>The Medicohealth token is at the core of the Medicohealth platform ecosystem, it is the fuel
that drives the whole project. As a Medicohealth token holder, you have the opportunity to
benefit from substantial advantages by accessing cutting edge innovative technologies.</p>
      <p>Our utility token will allow you to: </p>
      <ul style="padding-left:20px;">
        <?php foreach($points as $point): ?>
            <li><?php echo $point; ?></li>
        <?php endforeach;?>
      </ul>
  </div>
  <div class="order-2 order-lg-2 col-lg-6 col-xl-7">
    <div class="circleRowContainer"style="">
      <div class="row circleRow">
        <?php
        $points = array (
          array("src" => "p1.png","text" => "Crowdsale"),
          array("src" => "p2.png","text" => "Founders and team"),
          array("src" => "p3.png","text" => "Advisors and ambassadors"),
          array("src" => "p4.png","text" => "Contributors"),
          array("src" => "p5.png","text" => "Future partners"),
          array("src" => "p6.png","text" => "Future development"),
        );
        ?>
      <?php foreach ($points as $key => $point):?>
          <div class="col-6 col-sm-4 col-md-4 col-lg-4 padding-circle-lg" class="" style="">
            <img class="circleData" src="<?php echo $root?>/supporters/img/circle/<?php echo $point['src'] ?>">
            <!--<h4></h4>-->
            <p><b><?php echo $point["text"];?></b></p>
          </div>
        <?php endforeach;?>
      </div>
    </div>
    <?php /*
    <div class="frameRight"><img class="featurette-image mx-auto" data-src="holder.js/500x500/auto" alt="500x500"  src="<?php echo $root ?>/supporters/img/slike/a4.png" data-holder-rendered="true"></div>
    */ ?>
  </div>
</div>
