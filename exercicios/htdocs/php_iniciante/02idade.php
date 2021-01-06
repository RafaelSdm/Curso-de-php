<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	 <?php

	 	$nome = isset($_GET['nome'])? $_GET['nome']:'[nao informado]';
	 	$ano = isset($_GET['ano'])? $_GET['ano']:0;
	 	$sexo = isset($_GET['sexo'])? $_GET['sexo']:"[sem sexo]";

	 	$idade = date("Y") - $ano;

	 	echo "$nome é $sexo e tem $idade anos";



	 ?>
	 <br/>
	 <a href="exercicio02.html">Voltar</a>


</body>
</html>