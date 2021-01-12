<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $primo = isset($_GET['numero'])? $_GET['numero']:0;
        $cont = 0;
        $c =1;
        for($i=1;$i<=$primo;$i++){
            if($primo % $i==0){
                $cont++;
            }
            $c++;
        }

        echo "<h2>Resultado</h2>";
        echo "<hr>";

        echo "<h3>Valore multiplos: </h3>";
        for($i=1;$i<=$primo;$i++){
            if($primo % $i==0){
                echo " $i ";
            }
        }
        echo '<hr>';

        if($cont ==2){
            echo "Numero primo";
        }else{
            echo "Numero nao primo";
        }

    ?>
    
</body>
</html>