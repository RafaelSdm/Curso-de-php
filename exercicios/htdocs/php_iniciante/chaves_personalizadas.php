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

            $v = array(0 => 34,
                       2 => 4,
                       7 => 56,
                       8 => 77);
            
            unset($v[2]);
            print_r($v);


            $esps = array("nome" => "Rafael", "idade" => 19,"peso" => 90.98);
            
            foreach($esps as $key => $k){
                echo "o campo $key possui o conteudo $k </br>";
            }

        ?>
    
    </pre>
    
</body>
</html>