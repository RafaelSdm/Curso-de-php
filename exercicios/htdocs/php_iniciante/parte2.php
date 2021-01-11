<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $i = 1;

        while($i<=5){
            $v ="num".$i;
            //echo "$v";
           // echo "</br>";
            $url = "v".$i;

            //echo "$url";
            //echo "</br>";
            $$v = isset($_GET[$url])? $_GET[$url]:0;
            //echo "".$$v;
            //echo "</br>";
            $i++;

        }

        $i = 1;
        while($i <=5){
            $v = "num".$i;
            echo "Valor $i : ".$$v;
            echo "</br>";
            $i++;

                } 
        
               // echo "$num3";   

    ?>
    
</body>
</html>