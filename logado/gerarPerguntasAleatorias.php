<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    include ('../logado/includes/banco.php');

    $result = mysqli_query($conn, "SELECT * FROM pergunta ORDER BY rand() LIMIT 4");
    
    $vetperguntas = array();
            
    while($linha = mysqli_fetch_array($result)){
        $pergunta = $linha['Pergunta'];
        $idPergunta = $linha['ID_pergunta'];
        $id_tp_Pergunta = $linha['ID_tp_pergunta'];
        $idUsuario = $linha['ID_usuario'];
        $id_nivel_pergunta = $linha['ID_nivel_pergunta'];
        $id_resposta = $linha['ID_resposta'];
        
        array_push($vetperguntas, $pergunta);
    }
    
    //echo $vetperguntas[0];
    
?>
