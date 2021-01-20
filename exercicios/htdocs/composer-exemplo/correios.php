<?php

    require('vendor/autoload.php');

    use FlyingLuscas\Correios\Client;

    $correios = new Client;

    $correios->zipcode()
        ->find('01001-000');

?>