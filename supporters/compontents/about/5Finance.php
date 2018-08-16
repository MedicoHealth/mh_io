<?php
$points = array (
  "$600.000 of own funds,
  and private investors",
  "$3.5 million,
  Softcap",
  "$23.5 million,
  Hardcap",
);
?>



<div class="row featurette featuretteText featuretteHeight" style=" height: 100%; ">
  <div class="order-1 order-lg-2 col-lg-6 col-xl-5 left-right-text rightText">
    <h2 class="featurette-heading">It won’t take much to <span class="text-muted">change the world</span></h2>
    <p>
      Medicohealth already received an angel investment, therefore token buyers are contributing to a project that already went through the scrutiny of due diligence made by private investors.
      <ul style="padding-left:20px;">
        <?php foreach($points as $point): ?>
            <li><?php echo $point; ?></li>
        <?php endforeach;?>
      </ul>
    </p>
  </div>
  <div class="order-2 order-lg-1 col-lg-6 col-xl-7">
    <div class="frameLeft"><img class="featurette-image mx-auto"
       data-src="holder.js/500x500/auto" alt="500x500" src="<?php echo $root ?>/supporters/img/slike/a5.png" data-holder-rendered="true" ></div>
  </div>
</div>
