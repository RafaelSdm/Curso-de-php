<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php

		$tipo = $_GET['op'];
		$n1 = $_GET['x'];
		$n2 = $_GET['y'];

		echo "<h2> os valores passados na URL foram: $n1, $n2 e $tipo </h2> <br/>";

		if ($tipo == 'soma') {
			echo "a soma é de ".$n1+$n2;
			# code...
		}else{
			echo "op inválido!";
		}

	 ?>

</body>
</html>