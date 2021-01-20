<?php

    require 'Pessoa4.php';
    require 'programador.php';

    $programador = new Programador('Rafael','PHP');
 


    echo $programador->getNome();        


    echo $programador::ESPECIE;

?>