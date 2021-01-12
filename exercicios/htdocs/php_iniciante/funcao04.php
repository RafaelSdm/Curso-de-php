<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    function teste(&$x){
        $x = $x +2;
        echo "o Valor de x é $x";
    }

    $a = 4;
    teste($a);
    echo " o valor de a é $a";

?>
    
</body>
</html>