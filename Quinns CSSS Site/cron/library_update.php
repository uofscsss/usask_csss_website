<?php
$bookAPI = 'https://www.googleapis.com/books/v1/volumes?q=isbn:%isbn%';
array_shift($argv);
$jsons = array();:
foreach($argv as $isbn){
	$url = str_replace('%isbn%', $isbn, $bookAPI);
	$jsonData = json_decode(file_get_contents($url), true);
	$jsons[] = $jsonData['items'][0];
	print_r(json_encode($jsons));
}
?>
