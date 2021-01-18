<?php

    class teste1{
        public function printHello(){
            echo "hello world";
        }

        protected function funcaoteste(){
            echo 'camando funcao de teste';

        }
    }

    class teste2 extends teste1{
        public function byeWorld(){
            echo "Bye world";   
            echo '<br>';
            $this->funcaoteste();
        }
    }

    

    $pai = new teste2;
    $pai->byeWorld(); 

    $filha = new teste1;
    $filha->printHello();

    echo '<br>';

    $hello = new teste2;
    $hello->printHello();

    echo '<br>';

    $teste3 = new teste2;
    $teste3->byeWorld();


?>