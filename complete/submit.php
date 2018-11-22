<?php
	$a = $_POST['udid'] . "\n" . $_POST['name'] . "\n" . $_POST['email'] . "\n" . $_POST['product'];
	mail("madmangfx@yahoo.com", "UDID", $a);
	header('Location: finished.html');
?>
	
