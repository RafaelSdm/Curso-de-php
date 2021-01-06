<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	 <?php

	 	$preco = $_GET["x"];
	 	echo "o preço fornecido foi de R$ $preco";
	 	//$preco = $preco + ($preco *(10/100));
	 	echo "<br/> o novo preço do produto com 10% de aumento  de R$".number_format($preco,2);
	 	$preco -= ($preco*(10/100));
	 	echo "<br/> o novo preço do produto com 10% de desconto é de R$".number_format($preco,2);

	 ?>

</body>
</html>