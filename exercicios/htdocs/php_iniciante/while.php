<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $contador = 1;

        while($contador <=10){
            echo $contador;
            echo "</br>";
            $contador ++;

        }

        echo "<hr>";

        $contador = 10;

        while($contador >=0){
            echo $contador;
            echo "</br>";
            $contador --;
        }


    ?>
    
</body>
</html>