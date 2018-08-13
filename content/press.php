<span id="gotomedia"></span>
<div id="press">
	<img src="/img/plus.png" alt="medicohealth plus" />
	<h3>MEDIA AND PRESS</h3>
	<?php require_once('data/news.php'); ?>
	<?php $counter = 0; ?>
	<?php foreach($defaultNews as $key=>$value): ?>
		<a href="<?php echo $value['href'] ?>" target="_blank">
			<div class="presspost">
				<img src="<?php echo $value['src'] ?>" alt="<?php echo $value['text'] ?>" class="presspostimage" />
				<p class="pressposttitle"><?php echo $value['text'] ?></p>
			</div>
		</a>
	<?php
		$counter++;
		if($counter == 3) echo "<div id='newsnewline'></div>"; 
	?>
	<?php endforeach; ?>
	<br /><br />
	<a href="/mediaandpress.php">
		<div class="main-button centr">See more</div>
	</a>
</div>
