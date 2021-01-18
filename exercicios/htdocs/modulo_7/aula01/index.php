<?php

    class Pessoa{
        //OBJETO PESSOA

        private $nome = 'Rafael';
        private $idade = 19;
        private $peso = 80.30;


        public function crescer(){
            $this->comer();
            echo "<br>";
            echo "Estou crescendo";

        }

        private function comer(){
            echo "Estou comendo";

        }

    }

    $pessoa = new Pessoa;
    $pessoa2 = new Pessoa;

    $pessoa->crescer();

?>