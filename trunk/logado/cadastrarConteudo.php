<?php

header("Content-Type: text/html; charset=utf-8");

    include("./includes/banco.php");
    include("./includes/info_logado.php");
    
    $saida = array();
    $saida["resp"]["status"] = false;
                                                                    /* INSERT DE PERGUNTAS */
     
    if(isset($_REQUEST["pergunta"])){
        
        $resposta = $_REQUEST["resposta"];
        $pergunta = utf8_decode($_REQUEST["pergunta"]);
        
        $result = mysqli_query($conn, "SELECT resposta.ID_resposta FROM comp_pc JOIN resposta ON(comp_pc.ID_comp = resposta.ID_comp) WHERE resposta.resposta = '$resposta'");
        $linha = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $ID_resposta = $linha['ID_resposta'];    

        $resultado = mysqli_query($conn, "INSERT INTO pergunta VALUES('null', '1', '$ID_usuario', '1', '$ID_resposta', '$pergunta' )");
        
        if($resultado){
            $saida["resp"]["status"] = true;
        }else{
            $saida["resp"]["status"] = false;
        }
    }else if(isset($_REQUEST['desc'])){
        
        $desc = $_REQUEST["desc"];        
        $resposta2 = $_REQUEST["respostaConteudo"];
        
        $result = mysqli_query($conn, "SELECT ID_comp FROM comp_pc WHERE `nome` = '$resposta2'");
        
        while($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $ID_comp = $linha['ID_comp'];
        }
        
        $resultado = mysqli_query($conn, "UPDATE comp_pc SET `desc` = '$desc' WHERE ID_comp = '$ID_comp'");
        
        if($resultado){
            $saida["resp"]["status"] = true;
        }else{
            $saida["resp"]["status"] = false;
        }
        
    }
     echo json_encode($saida);
    