<?php

    $arr = array('chave'=> 'ZÉ', 'Rafael', 'Igor','Joao','Mario');

    foreach($arr as $key => $value){
        echo $key;
        echo "=>";
        echo $value;
        echo "<hr>";
    }

    $vetor = array(1,4,66,77,88,66,44,33);

    $total = count($vetor);

    echo "O vetor  possui $total valores";

    for($i=0;$i<$total;$i++){
        echo " [$vetor[$i]] ";
    }


?>