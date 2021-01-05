<?php

	$n1 = 10;
	$n2 = '10';

	if ($n1 == $n2) {
		echo "os numeros sao iguais mas não identicos";
		# code...
	}else{
		echo "os numeros são diferentes";
	}
	echo "<br/>";

	$num1 = $n1;
	$num2 = $n2;

	if ($num1 === $num2) {
		echo "os numeros sao totalmentes indenticos";
		# code...
	}else{
		echo "os numeros nao sao totalmentes identicos";
	}

?>