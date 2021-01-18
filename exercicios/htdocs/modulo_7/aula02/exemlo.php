<?php

    class exemplo{
        private $variavel1;
        public $variavel2;

        public static $variavel3 = 'Estático';
       
        public function metodo1(){

        }

        private function metodo2(){

        }

        public static function funcaostatic(){
            echo "hello world";
        }


        public function setVar1($variavel1){
            $this->variavel1 = $variavel1;

            

        }

        public function pegaVar1(){
            return $this->variavel1;
        }
    }

?>