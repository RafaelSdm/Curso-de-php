<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php

		$es = isset($_GET['estados'])? $_GET['estados']:"Estado invalido ou nao informado";

		switch ($es) {
			case 1:
			case 2:
			case 3:
			case 6:
				echo "Voce é da regiao sudeste!";

				# code...
				break;
			case 4:
				echo "Voce é da regiao Sul";
				# code...
				break;
			case 5:
			case 7:
			case 8:
			case 9:
				echo "Voce é da regiao nordeste";
				break;
			case 10:
				echo "Voce é da regiao centro oeste";
				# code...
				break;

			default:
				echo "Voce nasceu no Acre";
				# code...
				break;
		}

	 ?>

</body>
</html>