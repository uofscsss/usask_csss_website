<?php
require_once('header.php');
?>
    <h1>Library</h1>
	<?php
	$json = file_get_contents('Library/current_books.json');
	$json_decoded = json_decode($json, true);
	print_r($json_decoded);
	?>
<?php
require_once('footer.php');
?>