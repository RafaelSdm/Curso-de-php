<?php
class Pessoa4{
        protected $nome;
        const ESPECIE = 'Humano';

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