<?php
	$u = "http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
	$dir = str_replace("index.php", "", "$u");
?>
<link rel="stylesheet" type="text/css" href="<?php echo $dir; ?>/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo $dir; ?>/css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="<?php echo $dir; ?>/css/styles.css">
<script src="<?php echo $dir; ?>/js/bootstrap.min.js"></script>