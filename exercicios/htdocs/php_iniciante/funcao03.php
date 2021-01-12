<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function somatorio(){
            $p = func_get_args();
            $tot = func_num_args();
            $s = 0;

            for($i=0;$i<$tot;$i++){
                $s = $s + $p[$i];

            }

            return $s;
        } 

        $resposta = somatorio(1,2,3,4,5,10);
        echo "A soma é de $resposta";

    ?>

    

    
</body>
</html>