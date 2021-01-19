<?php

    $pdo = new PDO("mysql:host=localhost;dbname=clientes",'root','');
    $sql = $pdo->prepare("SELECT *FROM  `clientes` LEFT JOIN cargos ON `clientes`.`cargo` = `cargos`.`id` ");

    $sql->execute();

    $clientes = $sql->fetchAll();

    foreach($clientes as $key => $value){

        echo $value['nome'];
        echo '|';
        echo $value['nome_cargo'];
        echo '<hr>';
    }


?>