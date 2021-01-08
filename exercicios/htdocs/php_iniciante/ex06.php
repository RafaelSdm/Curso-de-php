<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	 <?php

	 	$numero = isset($_GET['num'])? $_GET['num']:0;
	 	$operacao = isset($_GET['oper'])? $_GET['oper']:1;

	 	switch ($operacao) {
	 	 	case 1:
	 	 		$resultado = $numero *2;
	 	 		echo "<h3> O resultado da multiplicação é de $resultado";
	 	 		# code...
	 	 		break;
	 	 	case 2:
	 	 		$resultado = $numero ** 3;
	 	 		echo "<h3>O resultado da potenciação é de $resultado</h3>";
	 	 		# code...
	 	 		break;
	 	 	case 3:
	 	 		$resultado = sqrt($numero);
	 	 		echo "<h3>o resultado da raiz quadrada é de $resultado</h3>";
	 	 		# code...
	 	 		break;
	 	 	
	 	 	default:
	 	 		echo "dados incompletos";
	 	 		# code...
	 	 		break;
	 	 } 

	 ?>

</body>
</html>