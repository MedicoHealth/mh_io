<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center ">
    <h3 style="margin-bottom:60px;">Here is the front row seat experince of healthcare issues: </h2>
<?php
$problemsData = array (
    array( "title" => "Wrong self diagnosis",
    "text"=>"Due to incorrect informations or informations from unreliable sources"),
    array( "title" =>"Unverified medical informations",
    "text"=>"It is hard to find verified medical informations on the internet"),
    array( "title" =>"Unaccessable specialists",
    "text"=>"It is increasingly difficult to access specialists"),
    array( "title" =>"Waiting periods",
    "text"=>"Waiting periods are increasing for patients - 21 weeks on average and counting"),
    array( "title" =>"No Private information",
    "text"=>"No real control over sensible and private informations"),
    array( "title" =>"High costs",
    "text"=>"High cost of special treatments"),
    array( "title" =>"Poorly protected data",
    "text"=>"Our data is hard to access and very poorly protected"),
    array( "title" =>"No anonimity",
    "text"=>"There is a lack of anonymity in the digital age"),
)
?>

<div class="row" style="text-align:center">
<?php foreach ($problemsData as $key => $text):?>
    <div  class="team-col col-md-4 col-lg-3">
      <div style="
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      margin-bottom: 25px;
      ">
        <img class="benefits-icon" src="https://instapage.com/wp-content/uploads/2017/11/1.svg" alt="Drag and Drop <br>Widgets" style="
        margin-right: 25px;
        width: 50px;
        height: 50px;
        ">
        <h4><?php echo $text["title"];?></h4>
      </div>
      <p><?php echo $text["text"];?></p>
    </div>
  <?php endforeach;?>
</div>
</div>
