<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h2 class="featurette-heading">Media and press</h2>
    <p>What the world has to say about us</p>
</div>
<div class="container" style="padding-bottom:40px;">
    <div class="row">
      <?php require_once('../data/news.php'); ?>
      <?php foreach($defaultNews as $key=>$value): ?>
        <div class="col-12 col-md-6 col-lg-4" style="padding:15px; padding-bottom:0px">
          <div class="card">
            <a href="<?php echo $value['href'] ?>" data-toggle="tooltip" title="<?php echo $value['text'] ?>" target="_blank">
              <img class="card-img-top screenshot" src="<?php echo $value['src'] ?>" alt="<?php echo $value['text'] ?>">
              <div class="card-body" style="padding:0px">
                <p class="card-text"><?php echo $value['text'] ?></p>
              </div>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <!--<div style="text-align:center; margin-top:20px; margin-bottom: 25px;">
      <button type="submit" class="custom-btn" onclick="window.open('/newsExternalMore.php')">SEE MORE</button>
    </div>-->
</div>
