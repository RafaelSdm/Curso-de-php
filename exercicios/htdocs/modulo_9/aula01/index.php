<?php

    if(file_exists('file1.txt')){
        echo 'O arquivo enviado existe';
    }else{

        $contente = "meu novo conteudo cirado atraves do php \r\n e agora eu posso manipular os arquivos";
        file_put_contents('file.txt',$contente);

        $ler = file_get_contents('file.txt');
        echo nl2br($ler);
    }

    // criando 20 arquivos.txt

    for($i=0;$i<20;$i++){
        $texto = 'Meu texto '.$i;
        file_put_contents('texto'.$i.'.txt',$texto);
    }

    // deletando 10 desses arquivos criados


    for($i=0;$i<10;$i++){
        unlink('texto'.$i.'.txt');
    }
?>