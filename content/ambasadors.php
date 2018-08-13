<span id="gotoambasadors"></span>
<img src="/img/ambasadors.png" id="ambasadorsgradient" alt="ambasadors gradient" />
<div id="ambasadors">
	<br />
	<h3 class="white">AMBASSADORS AND ADVISORS</h3>
	<br />
		<?php foreach ($advisor_members as $team):?>
			<div class="member">
				<img src="/img/ambasadors/<?php echo get_image_name($team["Name Surename"], 'advisors');?>" alt="<?php echo $team["Name Surename"];?>" />
				<h5 class="white"><?php echo $team["Name Surename"];?></h5>
				<p class="teamstatus white"><?php echo $team["Tittle"];?></p>
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
<img src="/img/ambasadors2.png" id="ambasadorsgradient2" alt="ambasadors gradient 2" />
