<?php
$partners = array(
  array(
    'name'=> "partner",
    'url'=> $root."/images/partners/thinkehr.png",
  ),
  array(
    'name'=> "partner",
    'url'=> $root."/images/partners/datafund.png",
  ),
  array(
    'name'=> "partner",
    'url'=> $root."/images/partners/origintrail.png",
  ),
)
?>
<div class="row featurette featuretteText featuretteHeight" style=" height: 100%; ">
  <div class="order-1 order-lg-1 col-lg-6 col-xl-5 left-right-text">
    <h2 class="featurette-heading"><span class="text-muted">Partnering</span> up with <span class="text-muted">the best</span></h2>
    <p>
      Applying leading blockchain solutions through partnerships
    </p>
    <?php
    /*
    <div class="row" style="margin:auto">
      <?php foreach($partners as $partner):?>
      <div class="col-12 col-md-4" >
        <div class="card" style="height:100%; border:none;">
          <img class="card-img-top" alt="<?php echo $partner['name'] ?>" style="width: 100%; display: block; margin:auto" src="<?php echo $partner['url'] ?>" data-holder-rendered="true">
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    */
    ?>
  </div>
  <div class="order-2 order-lg-2 col-lg-6 col-xl-7">
    <div class="frameRight"><img class="featurette-image mx-auto" data-src="holder.js/500x500/auto" alt="500x500"  src="<?php echo $root ?>/supporters/img/slike/w6.png" data-holder-rendered="true"></div>
  </div>
</div>
