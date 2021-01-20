<?php
class Pessoa2{
        private $nome;

        public function __construct($texto)
        {
            $this->nome = $texto;
        }

        public function setNome($novoNome){
                $this->nome = $novoNome;
        }

        public function getNome(){
            return $this->nome;

        }

    }
?>