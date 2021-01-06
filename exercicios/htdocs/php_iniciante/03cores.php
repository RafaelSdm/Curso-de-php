<!DOCTYPE html>
<html>
<head>
	<?php
		$txt = isset($_GET["t"])? $_GET["t"]:"[texto genérico]";
		$tam = isset($_GET['tam'])? $_GET['tam']:"12pt";
		$cor = isset($_GET['cor'])? $_GET['cor']:'red';
	 ?>
	<meta charset="utf-8">
	<title></title>
	<style>
		span.texto{
			font-size: <?php echo $tam; ?>
			color: <?php echo $cor; ?>
		}
	</style>
</head>
<body>
	 <?php
	 	echo "<span class=\"texto\">$txt</span>";


	 ?>

</body>
</html>