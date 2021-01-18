<?php

    include('interface.php');

    class teste implements interface1{
        public function print($par){
            echo $par;
        }

    }


    $teste = new teste;

    $teste->print("hello world");



?>