<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>

        <?php

            $numero = array(6,4,2,7,9,1);
            $letra = array("J","C","V","G","A");
            sort($numero);
            sort($letra);

            //echo "$letra";
           // echo "</br> $numero";
           print_r($letra);
           print_r($numero);

           rsort($numero);
           rsort($letra);

           print_r($letra);
           print_r($numero);

           asort($numero);
           asort($letra);

           print_r($letra);
           print_r($numero);


           arsort($numero);
           arsort($letra);

           print_r($letra);
           print_r($numero);


            $numero2 = array(3=>1,4=>5,2=>1,1=>6);
            print_r($numero2);
            //ksort($numero2);
            krsort($numero2);
            print_r($numero2);


        ?>
    
    
    </pre>
</body>
</html>