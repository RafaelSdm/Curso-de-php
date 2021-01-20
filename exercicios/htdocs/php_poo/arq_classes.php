<?php

    require "Pessoa.php";

    $umaPessoa = new Pessoa;    
    $umaPessoa->nome = 'Rafael';
    $umaPessoa->site = 'www.rafaeldamasceno.com';
    
    $umaPessoa->falarNome();
    echo '</br>';
    $umaPessoa->falarSite();

?>