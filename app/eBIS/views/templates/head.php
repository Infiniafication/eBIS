<?php echo doctype('html5'); ?>

<html lang="en">
<head>

<?php
	echo meta('Content-type', 'text/html; charset=utf-8', 'equiv');
	echo meta('description', 'TBA');
	echo meta('robots', 'all');
	echo meta('author', 'Infinia, FeliciousX');
?>

<title><?php echo $title ?></title>

<?php

for ($i=0; $i < count($link); $i++) { 
     echo link_tag($link[$i]);
}

?>

</head>
<body>

