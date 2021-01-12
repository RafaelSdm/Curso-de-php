<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $v[0] = 1;
        $v[1] = 2;
        $v[3] = 67;

        print_r($v);
        echo "</br>";

        $v2 = array(1,4,5,7,8,5,4);
        print_r($v2);
        echo "<br>";
        var_dump($v2);
        echo "<br>";
        var_export($v2);

    ?>
    
</body>
</html>