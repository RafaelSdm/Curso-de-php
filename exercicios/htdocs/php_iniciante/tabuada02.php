<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

         $num = isset($_GET['multi'])?$_GET['multi']:0;

         for($c=0;$c<=10;$c++){
             $resultado = $num * $c;
             echo "$num x $c = $resultado";
             echo "</br>";
         }


    ?>

    <a href="tabuada01.php">Voltar</a>
    
</body>
</html>