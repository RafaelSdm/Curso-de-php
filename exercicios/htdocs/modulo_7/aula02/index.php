<?php

    include('exemlo.php');

    $exe = new exemplo();

    $exe->variavel2 = 'Rafael';

    $exe3 = new exemplo();
    $exe3->setVar1('RAFAEL');
    echo $exe3->pegaVar1();

    //echo $exe->variavel2;
    
    $exe2 = new exemplo();

    $exe2->variavel2 = "Rafael Damasceno";

    //echo $exe2->variavel2;

  //  echo exemplo::$variavel3;
    //echo '<br>';
    //echo exemplo::funcaostatic();



?>