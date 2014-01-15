<?php
require_once('header.php');

$googleExecsSpreadsheetURL = 'https://docs.google.com/spreadsheet/pub?key=0AjQsTIS0nLpBdHRUVzRLb1dmZFNtaHhoanMyQ3dNR0E&output=csv';
$execs = file($googleExecsSpreadsheetURL);
array_shift($execs);
foreach($execs as &$line){
      $line = str_getcsv($line);
}
/*
$execs = array(
      array(
            'title'=>'President',
            'name' => 'Cameron Roth',
            'img' => 'http://26.media.tumblr.com/tumblr_ls9jno9s6W1r3y9qmo3_400.jpg'
      ),array(
            'title'=>'Vice President',
            'name' => 'Quinn Neumiiller',
            'img' => 'http://25.media.tumblr.com/5acaadbec8028355ffcea097fb4db46e/tumblr_mgdvvvuaIU1r3y9qmo7_400.jpg'
      ),array(
            'title'=>'Treasurer & Secretary',
            'name' => 'Alicia Spencer',
            'img' => 'http://24.media.tumblr.com/5d752eba258a8065d2fc6e48093bcced/tumblr_mgdvvvuaIU1r3y9qmo2_400.jpg'
      ),array(
            'title'=>'Communications Director',
            'name' => 'Garrett Hansen',
            'img' => 'http://25.media.tumblr.com/63ddc53b6b7f3544827485ae0acc0f91/tumblr_mgdvvvuaIU1r3y9qmo5_400.jpg'
      ),array(
            'title'=>'Social Director',
            'name' => 'Daniel Kwok',
            'img' => 'http://25.media.tumblr.com/d4960220f23393d7291234622ca075cc/tumblr_mgdvvvuaIU1r3y9qmo4_400.jpg'
      ),array(
            'title'=>'Athletics Director',
            'name' => 'Bobby Lee',
            'img' => 'http://25.media.tumblr.com/tumblr_ls9jno9s6W1r3y9qmo2_400.jpg'
      ),
      array(
            'title'=>'4th Year Rep',
            'name' => 'Teresa Hume',
            'img' => 'http://24.media.tumblr.com/9e2a0c1cd39e0866e47d84b1bbc3b821/tumblr_mgdvvvuaIU1r3y9qmo8_400.jpg'
      ),
      array(
            'title'=>'3rd Year Rep',
            'name' => 'Alexa Elliott',
            'img' => 'http://24.media.tumblr.com/75940dea54652f64a5328a6667b5aa44/tumblr_mgdvvvuaIU1r3y9qmo1_400.jpg'
      ),array(
            'title'=>'2nd Year Rep',
            'name' => 'Lealand Adam',
            'img' => 'http://25.media.tumblr.com/4e3319f852f02ff0092c15ee77f1d975/tumblr_mgdvvvuaIU1r3y9qmo6_250.jpg'
      ),array(
            'title'=>'1st Year Rep',
            'name' => 'Thomas Youngson',
            'img' => 'http://24.media.tumblr.com/31b3ef6d61cfd84c8794a302502b1a2e/tumblr_mgdvvvuaIU1r3y9qmo9_400.jpg'
      ),array(
            'title'=>'Member at Large',
            'name' => 'Brady Mason',
            'img' => 'http://25.media.tumblr.com/a18961840ad048b680321c48980c1153/tumblr_mgdvvvuaIU1r3y9qmo3_400.jpg'
      ),
);
*/
$column = 1;

echo "
<div class='row'><center>";
foreach($execs as $exec){
      
      echo <<<HERE
<div class='span4 exec'>
      <h3>{$exec[0]}</h3>
      <h1>{$exec[1]}</h1>
      <img src="{$exec[2]}"/>
</div>
HERE;
      $column++;
      if($column > 3){
            $column = 1;
            echo "</div><div class='row'>";
      }
}
?>
</center>
</div>

<?php
require_once('footer.php');
?>