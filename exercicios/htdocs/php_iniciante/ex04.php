<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	 <?php 

	  	$ano_nasc = isset($_GET['ano'])? $_GET['ano']:"Nao foste informado seu ano de nascimento";
	  	$id = date("Y") - $ano_nasc;
	  	echo "Voce naceu em $ano_nasc e tem $id anos <br/>";

	  	if (($id >= 18)&&($id <=70)) {
	  		echo "Voto obrigatório";
	  		# code...
	  	}elseif (($id ==16)||($id >= 71)) {
	  		echo "Voto nao obrigatório";
	  		# code...
	  	}else{
	  		echo "Nao pode votar ainda";
	  		# code...
	  	}
	  	
	  	


	 ?>

</body>
</html>