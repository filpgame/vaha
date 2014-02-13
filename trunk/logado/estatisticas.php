<?php

include './includes/banco.php';
include './includes/info_logado.php';
    

    $erros =  $_REQUEST['erros'];
    $acertos = $_REQUEST['acertos'];
    $pontuacao = $_REQUEST['pontuacao'];
    
    mysqli_query($conn, "INSERT INTO");
    //$result = mysqli_query($conn, "UPDATE FROM estatiticas SET acertos = $acertos, erro");
