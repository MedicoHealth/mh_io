
<div class="team-content">
    <?php foreach ($team_members as $team):?>
        <div class="team-col">
          <div data-toggle="tooltip" title="<h3><?php echo $team["Name Surename"];?></h3><?php echo $team["Text"];?>">
                <div class="team-col-img" style="position:relative;">
                    <img src="<?php echo $root?>/img_team/<?php echo get_image_name($team["Name Surename"], 'team');?>" alt="" class="img-fluid">
                </div>
                <?php
                if(!empty($team["Linkedin"])){

                    echo get_link($team["Linkedin"]);

                 } ?>
                <h4><?php echo $team["Name Surename"];?></h4>
                <p class="text-center"><?php echo $team["Tittle"];?></p>
                <div class="memberMobileText">
                  <p class="text-center"><?php echo $team["Text"];?></p>
                </div>
            </div>
        </div>
      <?php endforeach;?>
</div>
