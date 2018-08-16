

<div class="container marketing">
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h2 class="featurette-heading">Advisors</h2>
    <p>Those who gives us advice and share their knowledge</p>
</div>

<div class="row" style="text-align:center">
<?php
$teamSliced = array_slice ( $advisor_members , 0 , 4 );
?>
<?php foreach ($teamSliced as $key => $team):?>
    <div  class="team-col col-md-4 col-lg-3" data-toggle="tooltip" data-html="true" title="<h3><?php echo $team["Name Surename"];?></h3><?php echo $team["Text"];?>">
      <img class="rounded-circle" src="<?php echo $root?>/img_team/<?php echo get_image_name($team["Name Surename"], 'advisors');?>" alt="Generic placeholder image" width="180" height="180">
      <h4><?php echo $team["Name Surename"];?></h4>
      <p><?php echo $team["Tittle"];?></p>
      <a data-toggle="collapse" data-target="#advisorMember<?php echo $key; ?>" class="showMobile" href id="advisorClick<?php echo $key; ?>" onclick="hide('advisorClick<?php echo $key; ?>')">Read more »</a>
      <p id="advisorMember<?php echo $key; ?>" class="collapse memberMobileText"><?php echo $team["Text"];?></p>
    </div><!-- /.col-lg-4 -->
  <?php endforeach;?>
</div>
</div>
