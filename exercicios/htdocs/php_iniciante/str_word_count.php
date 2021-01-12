<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $txt = "Eu estou aprendendo PHP";
        $palavras = str_word_count($txt,0);
        echo "$palavras";

    ?>
    
</body>
</html>