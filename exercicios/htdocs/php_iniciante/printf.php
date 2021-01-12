<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $p = "Leite";
        $r = 4.5;

        echo "o Preço do $p é de R$: ".number_format($r,2);
        echo "</br>";
        printf("o preço do %s é de R$ %.2f", $p, $r);
        


    ?>
    
</body>
</html>