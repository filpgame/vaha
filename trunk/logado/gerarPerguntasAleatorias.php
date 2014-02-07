<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    include ('./logado/includes/banco.php');
    
    //function gerar(){
        
        /* SELECT PARA O MENOR ID ... */ 
        $queryMenorID = "SELECT MIN(id_pergunta) FROM pergunta";
        
        $resultado1 = mysqli_query($conn, $queryMenorID);
        if($resultado1){
            if(mysqli_fetch_row($resultado1) == 1){
                $linha = mysqli_fetch_array($resultado1, MYSQLI_ASSOC);
                $menorID = $linha['MIN(id_pergunta)'];
            }
        }else{
            echo "A pesquisa de Menor ID não retornou nada!";
        }
        
        
        /* SELECT PARA O MAIOR ID ...*/ 
        $queryMenorID = "SELECT MAX(id_pergunta) FROM pergunta";
        $resultado2 = mysqli_query($conn, $queryMaiorID);
        if($resultado2){
            if(mysqli_fetch_row($resultado2) == 1){
                $linha = mysqli_fetch_array($resultado2, MYSQLI_ASSOC);
                $maiorID = $linha['MAX(id_pergunta)'];
            }
        }else{
            echo "A pesquisa de Maior ID não retornou nada!";
        }
        
         
/* ------------------------------------------------------------------------------------------------------------------ */
         
        $result = false;
        
        while(!$result){
            $idSorteado = rand($menorID, $maiorID);        
            $result = mysqli_query($conn, "SELECT * FROM PERGUNTA WHERE id_pergunta = $idSorteado");
        }
        if (mysqli_fetch_row($result) == 1){
                $linha = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $pergunta = $linha['pergunta'];
                $idPergunta = $linha['id_pergunta'];
                $id_tp_Pergunta = $linha['id_tp_pergunta'];
                $idUsuario = $linha['id_usuario'];
                $id_nivel_pergunta = $linha['id_nivel_pergunta'];
                $id_resposta = $linha['id_resposta'];
            }else{
                echo "Erro!";
            }
        
    //}
?>
