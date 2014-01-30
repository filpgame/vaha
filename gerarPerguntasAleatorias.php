<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

    include ("./logado/includes/banco.php");
    
    function gerar(){
        
        $maiorID = "SELECT MAX(id_pergunta) FROM pergunta";
        $menorID = "SELECT MIN(id_pergunta) FROM pergunta";
        
        $id_premiado = rand($menorID, $maiorID);
        
        $query = "SELECT pergunta FROM pergunta WHERE id_pergunta = $id_premiado";
        
        $resultado = mysqli_query($conn, $query);
        
        if($resultado){
            /* Fazer algo aqui ... */
        }else{
            $id_premiado = rand($menorID, $maiorID);        
            $query = "SELECT pergunta FROM pergunta WHERE id_pergunta = $id_premiado";
        }
        
        
        
    }

?>
