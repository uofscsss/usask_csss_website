<?php
$googleCareerFairSpreadsheetURL = 'https://docs.google.com/spreadsheet/pub?key=0AjQsTIS0nLpBdFpyallGS2loREVfMTlyM0NHMERoNHc&single=true&gid=1&output=csv';
$event = file($googleCareerFairSpreadsheetURL);

$tableHeader = str_getcsv(array_shift($event));
$sponsorType = array(
	'Platinum' 	=> array(),
	'Gold'		=> array(),
	'Silver'	=> array(),
	'Bronze'	=> array(),
	'General'	=> array()
);

foreach($event as $e){
	$e = str_getcsv($e);
	$company = $e[2];
	$package = $e[4];
	$desc 	 = $e[5];
	if(!empty($e[4]) && array_key_exists($e[4], $sponsorType)){
		$sponsorType[$package][] = array(
			$company,
			$desc
		);
	}
}
$navSponsors = '';
$descriptions = '';
foreach($sponsorType as $sponsor=>$company){
	$navSponsors .= "<li class='nav-header'>$sponsor</li>";
	$descriptions .= "<h1 class='sponsor-type $sponsor'>$sponsor</h1>";
	foreach($company as $c){
		$companyName = $c[0];
		$companyDesc = $c[1];
		$companyNameLink = str_replace(' ', '-', $companyName);
		$navSponsors .= "<li><a href='#$companyNameLink'>$companyName</a></li>";
		$descriptions .= "<section id='$companyNameLink'><h2>$companyName</h2> <p>$companyDesc</p></section>";
	}
}
/*
              <li class="nav-header">Platinum</li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="nav-header">Gold</li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
*/
//foreach($tableHeader as $header){
//	echo $header;
//}
//echo "</br>";
/*
foreach($event as $line){
	echo implode(' ', $line);
	echo "</br>";
}
*/
require_once('header.php');

?>
<div class='row'>
      <div class='span3'>
      	<div class="well sidebar-nav bs-docs-sidebar">
            <ul class="nav nav-list">
              <li class="active"><a href="#">Schedule</a></li>
              <li class="nav-header">Sponsors</li>
              <?php echo $navSponsors;?>
            </ul>
          </div>
      </div>
      <div class='span7'>
      	<h1><center><?php echo "{$tableHeader[0]}"; ?></center></h1>
      	<h2><center><?php echo "{$tableHeader[1]}"; ?></center></h2>
		<table class='table table-hover table-bordered'>
<?php
 $padding = '		';
 foreach($event as $line){
 	$line = str_getcsv($line);
 	$line = array_slice($line, 0, 4);
 	echo "$padding<tr>\n";
 	foreach($line as $td){
 		if(!empty($td))
 			echo "$padding  <td>$td</td>\n";
 	}
	echo "$padding</tr>\n";
 }

?>
		</table>
        <h3>Pizza lunch provided by:</h3>
        <img src='img/pizza-pirates.png'></img>
		<?php echo $descriptions;?>
	</div>
</div>
<?php require_once('footer.php');?>
