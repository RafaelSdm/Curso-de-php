<?php

    class Pessoa{
        public $nome;
        public $site;

        public function falarNome(){
            echo $this->nome;
        }

        public function falarSite(){
            echo $this->site;
        }
    }

    $umaPessoa = new Pessoa;    
    $umaPessoa->nome = 'Rafael';
    $umaPessoa->site = 'www.rafaeldamasceno.com';
    
    $umaPessoa->falarNome();
    echo '</br>';
    $umaPessoa->falarSite();

?>