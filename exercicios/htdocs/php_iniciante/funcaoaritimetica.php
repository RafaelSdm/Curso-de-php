<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php

		$v1 = $_GET["x"];
		$v2 = $_GET["y"];

		echo "<h2>valores recebiso: $v1 e $v2</h2>"; 
		echo "<br/> o valor absuloto de $v2 é ".abs(
			$v2);
		echo "o valor de $v1 <sup>$v2</sup> é de ".pow($v1, $v2);
		echo "<br/>a raiz quadrada de $v1 é de ".sqrt($v1);
		echo "<br/> o valor de $v1 em moeda´é de ".number_format($v1,2);
	?>

</body>
</html>