<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $inicio = ($_GET["inic"])? $_GET["inic"]:0;
    $end = ($_GET["final"])? $_GET["final"]:0;
    $complemento = ($_GET["increm"])? $_GET['increm']:0;
    $resultado = $inicio;

    while($resultado <= $end){
        echo "  ".$resultado;
        $resultado = $resultado + $complemento;
      
    }

    ?>

    <br>
    <a href="exercicio09-1.php">Retornar</a>

    
</body>
</html>