<?php

    session_start();
    setcookie('nome','Rafael',time()+(60*60), '/');

    echo $_COOKIE['nome'];
?>