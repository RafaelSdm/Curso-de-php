<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $txt = "Aqui temos um texto considerável gigante  principio feito no php no editor visual studio code no sentido de fazer alguns testes necessários";
        $res = wordwrap($txt,15, "</br>\n", true);
        echo $res;

    ?>
    
</body>
</html>