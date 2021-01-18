<?php

    function myAutoLoad($class){
        if(file_exists('classes/'.$class.'.php')){
            include('classes/'.$class.'.php');
        }
    }
   
    spl_autoload_register('myAutoLoad');

   // new utilidades();
   new \home\incial();
?>