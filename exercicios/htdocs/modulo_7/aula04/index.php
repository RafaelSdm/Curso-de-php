<?php

    abstract class teste{

        public function func1(){
            echo "Chamand funcao";
        }

        abstract function func2();
    }

    class principal extends teste{
        public function func2(){
            echo "Estou inciando a funcao 2";
        }

        public static function metodoestatico(){
            echo 'metodo estatico';
        }

        public function funcao(){


        }

    }

    $prin = new principal;

   // $prin->func1();
    //$prin->func2();

    principal::metodoestatico();

?>