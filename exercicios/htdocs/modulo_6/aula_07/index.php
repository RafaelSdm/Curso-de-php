<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="nome" placeholder="Insira seu nome aqui">
        <input type="text" name="email" placeholder="insira seu email aqui">
        <input type="submit" name="recebe" value="Enviar">
    
    </form>

    <?php

        $nome = $_POST['nome'];
        $email = $_POST['email'];

        echo "Ola $nome seu seu imail é $email";


    ?>
    
</body>
</html>