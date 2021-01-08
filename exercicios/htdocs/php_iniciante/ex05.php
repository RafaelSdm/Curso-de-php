<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		h3{
			color: blue;
		}
	</style>
</head>
<body>

	 <?php

	 	$n1 = isset($_GET['nota1'])? $_GET['nota1']:0;
	 	$n2 = isset($_GET['nota2'])? $_GET['nota2']:0;
	 	$aluno = isset($_GET['nome'])? $_GET['nome']:'Nome do aluno nao informado';
	 	$media = ($n1 + $n2) /2;

	 	//echo "as notas do aluno $aluno infromadas foram $n2 e $n1 e sua media final foi de $media"; 

	 	echo "<h1>Situação do aluno:</h1>";
	 	if ($media >= 7) {
	 		$situacao = "Aprovado";
	 		# code...
	 	}elseif (($media <=6.9) &&($media >=4)) {
	 		$situacao ="Recuperação";
	 		# code...
	 	}else{
	 		$situacao = "Reprovado";
	 	}

	 	echo "<h4> Situação:</H4>";
	 	echo"<h3> Média = $media/ $situacao";



	 ?>

	 <br/>

	 <a href="exercicio05.html">Voltar</a>

</body>
</html>