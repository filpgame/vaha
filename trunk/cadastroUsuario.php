<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include ("./logado/includes/banco.php");
    
    $nome = $_GET["nome"];
    $sobrenome = $_GET["sobrenome"];
    $usuario = $_GET["usuario"];
    $senha = $_GET["pas"];
    $conf_senha = $_GET["pas_conf"];
    $data_nasc = $_GET["dtnasc"];
    $email = $_GET["email"];
    $id_Tipo = 1;
    
    // $query = "INSERT INTO usuario VALUE(1, $usuario, $senha, $nome, $sobrenome, $data_nasc, $email)";
    
    $saida["resp"]["status"] = false;
    
    
    $resultado = mysqli_query($conn, "INSERT INTO usuario VALUES(null,'$id_Tipo', '$usuario', '$senha', '$nome', '$sobrenome', '$data_nasc', '$email')");
    
    if ($resultado) {
        $saida["resp"]["status"] = true;
        echo json_encode($saida);
        
    } else {
        echo json_encode($saida);
    }

    mysqli_close($conn);

    
    
    
    
    
    


