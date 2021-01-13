<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $nome = "Rafael";
        $space = str_pad($nome,30,"*",STR_PAD_RIGHT);
        echo "$space é o meu nome";
        $novo = str_pad($nome,30,".",STR_PAD_BOTH);
        echo "<br> $novo meu nome no meio";

    ?>
    
</body>
</html>