<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="get" action="tabuada02.php">
        <select name="multi">

            <?php

                for($i =0; $i<=100;$i++){
                    echo "<option>$i</option>";
                }

            ?>
        </select>

        <input type="submit" value="Tabuada ">
    
    
    
    </form>
    
</body>
</html>