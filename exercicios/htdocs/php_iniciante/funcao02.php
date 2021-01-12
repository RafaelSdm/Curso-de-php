<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        function soma($x,$y){
            $resultado = $x + $y;

            return $resultado;
        }

        $i = 5;
        $j = 6;

        $resposta = soma($i, $j);

        echo "A soma é de $resposta";

    ?>
    
</body>
</html>