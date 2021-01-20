<?php

    class Programador extends Pessoa3{
        public $linguagem;

        public function __construct($tmpNome, $tmpLinguagem)
        {
            $this->nome = $tmpNome;
            $this->linguagem = $tmpLinguagem;
        }

    }

?>