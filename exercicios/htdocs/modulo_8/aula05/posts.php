<?php

    $pdo = new PDO("mysql:host=localhost;dbname=modulo_8",'root','');

    $sql = $pdo->prepare("SELECT * FROM posts WHERE  categoria_id =?");

    $sql->execute(array($_GET['categoria_id']));

    $info = $sql->fetchAll();

    foreach($info as $key => $value){
        echo 'Titulo:'.$value['titulo'];
        echo '</br>';
        echo 'Noticia: '.$value['conteudo'];
        echo '<hr>';
    }

    for($i=0;$i < count($info);$i++){
        echo 'Titulo:'.$info[$i]['titulo'];
        echo '</br>';
        echo 'Noticia: '.$info[$i]['conteudo'];
        echo '<hr>';
    }

?>