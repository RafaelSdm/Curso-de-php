<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

</head>
<body>
	<?php

		$n1 = $_GET["a"];
		$n2 = $_GET["b"];
		$soma = $n1 +$n2;

		echo "<h1> numeros fornecidos: $n1, $n2</h1> <br/>";

		echo "a soma de $n2 + $n1 é $soma <br/>";
		echo "a sub é de ".($n1-$n2)."<br/>";
		echo "a divisao vale = ".($n1/$n2)."<br/>";
		echo "a multiplicação = ".($n1*$n2)."<br/>";
		echo "o módulo = ".($n1%$n2)."<br/>"; 

	 ?>

</body>
</html>