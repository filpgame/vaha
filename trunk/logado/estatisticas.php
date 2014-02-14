<?php

include './includes/banco.php';
include './includes/info_logado.php';
    

    $errosAtuais =  $_REQUEST['erros'];
    $acertosAtuais = $_REQUEST['acertos'];
    $pontuacaoAtual = $_REQUEST['pontuacao'];
    
    $result = mysqli_query($conn, "UPDATE `estatiticas` SET `acertos`= (SELECT SUM(acertos) + $acertosAtuais), erros = (SELECT SUM(erros) + $errosAtuais), pontuacao_geral = (SELECT SUM(pontuacao_geral)+ $pontuacaoAtual)   WHERE ID_usuario = $ID_usuario");
    if($result){
        echo "UPDATE feito com sucesso!!";
    }else{
        echo "ERRO no UPDATE";
    }
    mysqli_close($conn);