<div class="container marketing">
<?php
$partners = array(
  array(
    'name'=> "partner",
    'url'=> $root."/images/partners/belmedic.png",
  ),
  array(
    'name'=> "partner",
    'url'=> $root."/images/partners/bitins.png",
  ),
  array(
    'name'=> "partner",
    'url'=> $root."/images/partners/BTC.png",
  ),
  array(
    'name'=> "partner",
    'url'=> $root."/images/partners/ekociscenje.png",
  ),
  array(
    'name'=> "partner",
    'url'=> $root."/images/partners/ewiv.png",
  ),
  array(
    'name'=> "partner",
    'url'=> $root."/images/partners/jozefstefan.png",
  ),
  array(
    'name'=> "partner",
    'url'=> $root."/images/partners/porschehealth.png",
  ),
  array(
    'name'=> "partner",
    'url'=> $root."/images/partners/precisionmedicine.png",
  ),
  array(
    'name'=> "partner",
    'url'=> $root."/images/partners/prittwittz.png",
  ),
  array(
    'name'=> "partner",
    'url'=> $root."/images/partners/sunjhaid.png",
  ),
  array(
    'name'=> "partner",
    'url'=> $root."/images/partners/systc.png",
  ),
  array(
    'name'=> "partner",
    'url'=> $root."/images/partners/springer.png",
  ),
  array(
    'name'=> "partner",
    'url'=> $root."/images/partners/zzzdravje.jpg",
  ),
  array(
    'name'=> "partner",
    'url'=> $root."/images/partners/bitenc.jpg",
  ),
  array(
    'name'=> "partner",
    'url'=> $root."/images/partners/aaci.png",
  ),
  array(
    'name'=> "partner",
    'url'=> $root."/images/partners/plugmann.png",
  )
)
?>
<?php
$partnersSliced = array_slice ( $partners , 0 , 16 );
?>

  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h2 class="featurette-heading">Partners</h2>
      <p>You are in good company. Supporting us from the beginning</p>
      <div style="text-align:center">
        <a class="btn MHSimpleButton" href="?page=why"><!-- btn-primary -->
          LEARN WHY »
        </a>
      </div>
  </div>
<div class="row">
    <?php foreach($partnersSliced as $partner):?>
            <div class="col-6 col-md-3" >
              <div class="card" style="height:100%; border:none;">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                alt="<?php echo $partner['name'] ?>" style="width: 100%; display: block;" src="<?php echo $partner['url'] ?>" data-holder-rendered="true">
              </div>
            </div>
    <?php endforeach; ?>
</div>


          <!--

          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22288%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20288%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1644b91fbdb%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1644b91fbdb%22%3E%3Crect%20width%3D%22288%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2296.8359375%22%20y%3D%22118.8%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>

        -->
</div>
