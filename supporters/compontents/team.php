<div class="container marketing">
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h2 class="featurette-heading">Advisors & Team</h2>
    <p>Gurus, misfits, rebels, crazy ones and masterminds behind the wheel</p>
</div>

<div class="row" style="text-align:center">
<?php
//$teamSliced = array_slice ( $team_members , 0 , 8 );

$teamSliced = array(
  array(
    "Team"=> "Team",
    "Name Surename"=> "Milan Rajlic",
    "Tittle"=> "Co-Founder & CEO",
    "Linkedin"=> "https://www.linkedin.com/in/milan-rajlic-a53abaa/",
    "Text"=> "Multi-faced professional with over 20 years of experience living, studying and working in international environments - Europe,and Ex-YU countries. His strenghts lie in deep understanding of industry, energy and infrastructure, along with strategy and business development across consulting and consumer goods marketing."
  ),
  array(
    "Team"=> "Team",
    "Name Surename"=> "Andrej Muzevic",
    "Tittle"=> "Co-Founder",
    "Linkedin"=> "https://www.linkedin.com/in/andrej-muzevic-075b674a",
    "Text"=> "Experienced Partner with a proven history of working in the investment management industry. Skilled in Business Planning, Due Diligence, Strategic Planning, Business Development, and Venture Capital. Strong professional with a Master of Science (MSc) focused in Economics from Univerza v Ljubljani."
  ),
  array(
    "Team"=> "Team",
    "Name Surename"=> "Dr. Rolf Porsche",
    "Tittle"=> "Chief Visionary Officer",
    "Linkedin"=> "https://www.linkedin.com/in/dr-rolf-porsche-26999235/",
    "Text"=> "During the last 20 years, Rolf held leading positions in the Healthcare and Life Sciences practices at Arthur D. Little and IBM in Europe and the US. He also worked for many start ups as business developer and assessed more than 100 products/complete R+D portfolios in Life Sciences. Rolf is CEO of PORSCHEHEALTH, an international working advisory company executing strategic and realization support projects."
  ),
  array(
    "Team"=> "Team",
    "Name Surename"=> "Dr. Zoran Milosevic",
    "Tittle"=> "Chief Digital Health Officer",
    "Linkedin"=> "https://www.linkedin.com/in/zorandmilosevic/",
    "Text"=> "An internationally recognised digital health expert with over 15 years experience at strategic and interoperability eHealth projects in Australia and USA, in variety of environments, spanning eHealth authorities, private health providers, and standard bodies. Member of the HL7 International Architecture Review Board. Research leader in digital contracts and enterprise distributed systems, with significant track record achieved while working in applied research institutions and universities in Australia and UK. Entrepreneur activities in the translation of research into product design and development, as a founding partner in the Deontik Australia. A practitioner of data analytics, machine learning, AI and blockchain. Fellow of Australian Computer Society and Senior Member of IEEE."
  ),
  array(
    "Team"=> "Advisory Board",
    "Name Surename"=> "Dr. Marko Bitenc",
    "Tittle"=> "Medical Advisor",
    "Linkedin"=> "https://www.linkedin.com/in/marko-bitenc-67718729/",
    "Text"=> "Has surgery license since 1993. He completed two mandates as the president of the Medical Chamber of Slovenia and was also president of the EFMA/WHO (European Forum of Medical Associations)."
  ),
  array(
    "Team"=> "Team",
    "Name Surename"=> "Achim Schuetz",
    "Tittle"=> "Chief Operating Officer",
    "Linkedin"=> "https://www.linkedin.com/in/achim-schütz-989336145/",
    "Text"=> "CEO and Owner of Syscoach Consulting, CEO of private hospital chain in Germany. More than 25 years of experience in healthcare and insurance sector. Publisher and author of various scientific books."
  ),
  array(
    "Team"=> "Team",
    "Name Surename"=> "Matjaz Torc",
    "Tittle"=> "Chief Technology Officer",
    "Linkedin"=> "https://www.linkedin.com/in/matjaž-torč-7920b689/",
    "Text"=> "Always viewing out of the box when creating, using innovation and simplicity wherever possible. Analytical thinking on the other hand enables him to produce results and services with long term effect, checkpoints and repeatability."
  ),
  array(
    "Team"=> "Advisory Board",
    "Name Surename"=> "Simon Cocking",
    "Tittle"=> "Cryptocurrency Advisor",
    "Linkedin"=> "https://www.linkedin.com/in/simon-cocking-20540135/",
    "Text"=> "Senior Editor at Irish Tech News, Editor in Chief at CryptoCoinNews, also freelances for Sunday Business Post, Irish Times, Southern Star, IBM, G+D, and others. He is a top ranked member of the People of Blockchain (currently ranked at #1 / 18,000). He is also a business mentor and advisor working with 70+ successful ICOs to date."
  ),
);

?>
<?php foreach ($teamSliced as $key => $team):?>
  <?php $teamAdv = $team["Team"]=="Team" ? "team" : "advisors" ?>
    <div  class="team-col col-md-4 col-lg-3" data-toggle="tooltip" data-html="true" title="<h3><?php echo $team["Name Surename"];?></h3><?php echo $team["Text"];?>">
      <img class="rounded-circle" src="<?php echo $root?>/img/team/<?php echo get_image_name($team["Name Surename"], $teamAdv);?>" alt="Generic placeholder image" width="180" height="180">
      <h4><?php echo $team["Name Surename"];?></h4>
      <p><?php echo $team["Tittle"];?></p>
      <a data-toggle="collapse" data-target="#teamMember<?php echo $key; ?>" class="showMobile" style="color:#35b3ef;" href id="teamClick<?php echo $key; ?>" onclick="hide('teamClick<?php echo $key; ?>')">Read more »</a>
      <p id="teamMember<?php echo $key; ?>" class="collapse memberMobileText"><?php echo $team["Text"];?></p>
    </div><!-- /.col-lg-4 -->
  <?php endforeach;?>
</div>
</diV>
