<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    include ('../logado/includes/banco.php');
    
    //function gerar(){

        
        /* SELECIONAR PERGUNTA ALEATÓRIA: SELECT * FROM pergunta ORDER BY rand() LIMIT 1*/
        
        /* SELECT PARA O MENOR ID ... */ 
//        $queryMenorID = "SELECT MIN(id_pergunta) FROM pergunta";
//        
//        $resultado1 = mysqli_query($conn, $queryMenorID);
//        if($resultado1){
//            if(mysqli_fetch_row($resultado1) == 1){
//                $linha = mysqli_fetch_array($resultado1, MYSQLI_ASSOC);
//                $menorID = $linha['MIN(id_pergunta)'];
//            }
//        }else{
//            echo "A pesquisa de Menor ID não retornou nada!";
//        }


        
       // while(!$result){   
            $result = mysqli_query($conn, "SELECT * FROM pergunta ORDER BY rand() LIMIT 2");
       // }
            $linha = "asd";
//        if($result){
//            if (mysqli_fetch_row($result) == 1){
//                $linha = mysqli_fetch_array($result, MYSQLI_ASSOC);
//                $pergunta = $linha['pergunta'];
//                $idPergunta = $linha['id_pergunta'];
//                $id_tp_Pergunta = $linha['id_tp_pergunta'];
//                $idUsuario = $linha['id_usuario'];
//                $id_nivel_pergunta = $linha['id_nivel_pergunta'];
//                $id_resposta = $linha['id_resposta'];
//                echo $linha;
//            }else{
//                echo "Erro!";
//                echo $linha;
//            }
//        }
            
            while($linha = mysqli_fetch_array($result)){
                $linha = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $pergunta = $linha['pergunta'];
                $idPergunta = $linha['ID_pergunta'];
                $id_tp_Pergunta = $linha['ID_tp_pergunta'];
                $idUsuario = $linha['ID_usuario'];
                $id_nivel_pergunta = $linha['ID_nivel_pergunta'];
                $id_resposta = $linha['ID_resposta'];

                echo "Passei Aqui\n";
            }
        
        
    //}
?>
