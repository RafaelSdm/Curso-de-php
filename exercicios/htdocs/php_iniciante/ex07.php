<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title></title>

</head>
<body>
	<?php
		$semana = isset($_GET['dia_sem'])? $_GET['dia_sem']:'Dia da semana nao informado'; 

		switch ($semana) {
			case 2:
			case 3:
			case 4:
			case 5:
			case 6:
				echo "Dia de estudar!";
				break;
			case 7:
			case 1:
				echo "Dia de descanso";
				break;
			default:
				# code...
				echo "Dia da semana inválido";
				break;
		}

	 ?>

</body>
</html>