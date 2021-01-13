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

            $vetor = array("A","B","C","D","E" );
            echo "O vetor possui " .count($vetor). " elementos </br>";
            print_r($vetor);
            $vetor[] = "F";
            array_push($vetor,'G');
            array_push($vetor,'H');
            array_pop($vetor);



            array_unshift($vetor, 'k');
            array_unshift($vetor,'s');
            array_shift($vetor);



            var_dump($vetor);

        ?>
    
    </pre>
    
</body>
</html>