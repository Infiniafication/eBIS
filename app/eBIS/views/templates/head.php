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
		if(current_url() == base_url() . 'index.php')
		{
	?>
			<script src="<?php echo base_url('js/browser-detect.js'); ?>"></script>
			<script type="text/javascript">
				if (BrowserDetect.browser != "Chrome" && BrowserDetect.browser != "Safari") {
					alert("You are not using Chrome or Safari web browser! Redirecting..");
					window.location = "<?php echo base_url() . 'index.php/about_us'; ?>"
				};
			</script>
	<?php
		}
	?>
	<?php
		for ($i=0; $i < count($link); $i++) { 
		     echo link_tag($link[$i]);
		}
	?>

</head>
<body>

