<?php
require_once('header.php');
$googleTutorSpreadsheetURL = 'https://docs.google.com/spreadsheet/pub?key=0AjQsTIS0nLpBdHRUVzRLb1dmZFNtaHhoanMyQ3dNR0E&output=csv';
$execs = file($googleTutorSpreadsheetURL);
array_shift($execs);
foreach($execs as &$line){
      $line = str_getcsv($line);
}

$column = 1;

echo "<div class='row'>";
foreach($execs as $exec){
      echo <<<HERE
<div class='span4 exec'>
      <h3>{$exec[0]}</h3>
      <img src="{$exec[3]}"/>
      <h1>{$exec[1]} {$exec[2]}</h1>
</div>
HERE;

      $column++;
      if($column > 3){
            $column = 1;
            echo "</div><div class='row'>";
      }
}
?>
</div>

<?php
require_once('footer.php');
?>