<span id="gototeam"></span>
<div id="team">
	<h3>TEAM</h3>
		<?php foreach ($team_members as $team):?>
			<div class="member">
				<img src="/img/team/<?php echo get_image_name($team["Name Surename"], 'team');?>" alt="<?php echo $team["Name Surename"];?>" />
				<h5><?php echo $team["Name Surename"];?></h5>
				<p class="teamstatus"><?php echo $team["Tittle"];?></p>
				<?php
					$linktype = $team["Linkedin"];
					$linktype = parse_url($linktype, PHP_URL_HOST);
					if($linktype=="www.linkedin.com")
						echo '<a target="_blank" href="'.$team["Linkedin"].'"><img src="/img/linkedin-circle.png" class="linkedin" alt="linkedin"/></a>';
					else if ($linktype=="twitter.com")
						echo '<a target="_blank" href="'.$team["Linkedin"].'"><img src="/img/twitter-circle.png" class="linkedin" alt="linkedin"/></a>';
					else
						echo '<a target="_blank" href="'.$team["Linkedin"].'"><img src="/img/website-circle.png" class="linkedin" alt="linkedin"/></a>';
				?>
				<p class="memeberdescription"><span class="extratitle"><?php echo $team["Name Surename"];?></span><span class="extrastatus"><?php echo $team["Tittle"];?></span><?php echo $team["Text"];?></p>
			</div>
		<?php endforeach?>
</div>