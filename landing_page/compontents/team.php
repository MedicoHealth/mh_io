<div class="container marketing">
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h2 class="display-4">Team</h2>
    <p>Gurus, misfits, rebels, crazy ones and masterminds behind the wheel</p>
</div>

<div class="row" style="text-align:center">
<?php
$teamSliced = array_slice ( $team_members , 0 , 8 );
?>
<?php foreach ($teamSliced as $key => $team):?>
    <div  class="team-col col-md-4 col-lg-3" data-toggle="tooltip" data-html="true" title="<h3><?php echo $team["Name Surename"];?></h3><?php echo $team["Text"];?>">
      <img class="rounded-circle" src="<?php echo $root?>/img_team/<?php echo get_image_name($team["Name Surename"], 'team');?>" alt="Generic placeholder image" width="180" height="180">
      <h4><?php echo $team["Name Surename"];?></h4>
      <p><?php echo $team["Tittle"];?></p>
      <a data-toggle="collapse" data-target="#teamMember<?php echo $key; ?>" class="showMobile" style="color:#35b3ef;" href id="teamClick<?php echo $key; ?>" onclick="hide('teamClick<?php echo $key; ?>')">Read more »</a>
      <p id="teamMember<?php echo $key; ?>" class="collapse memberMobileText"><?php echo $team["Text"];?></p>
    </div><!-- /.col-lg-4 -->
  <?php endforeach;?>
</div>
</diV>
