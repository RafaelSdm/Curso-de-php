<?php

    $xml = simplexml_load_file('arquivo.xml');

    echo $xml->informacoes->item->tittle;


?>