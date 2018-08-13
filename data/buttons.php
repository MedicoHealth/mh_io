<?php
$referer = isset($_GET["referrer"]) ?  $_GET["referrer"] : null;
$buttonsData = array(
  array(
    "title" => "One pager",
    "link" => "/supporters/documents/one-pager.pdf",
  ),
  array(
    "title"=> "Whitepaper".'<div class="betaOnTitle"><span>Beta</span></div>',
    "link" => "/supporters/documents/wp-beta.pdf?v=1"
  ),
  array(
    "title" => "Whitelist",
    "link" => "https://medicohealth.ch/whitelist?referrer=".$referer,
  )
)
?>
