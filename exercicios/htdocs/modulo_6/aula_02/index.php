<?php


    $matriz = array(array(1,2,3,5),array(6,7,8,9));

    //print_r($matriz);

    for($i=0;$i<4;$i++){
        for($j=0;$j<4;$j++){
            echo "  ".$matriz[$i][$j];
        }
        echo '</br>';
    }

?>