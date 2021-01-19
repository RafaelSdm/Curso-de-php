<?php

    $pdo = new PDO("mysql:host=localhost;dbname=clientes",'root','');
    $sql = $pdo->prepare("SELECT *FROM  `clientes` GROUP BY cargo");
    $sql->execute();

    $clientes = $sql->fetchAll();

    foreach($clientes as $key => $value){

        echo $value['nome'];
        echo '<hr>';
    }



?>