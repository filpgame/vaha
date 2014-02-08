<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include ("./logado/includes/banco.php");
    
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $usuario = $_POST["usuario"];
    $senha = $_POST["pas"];
    $conf_senha = $_POST["pas_conf"];
    $data_nasc = $_POST["dtnasc"];
    $email = $_POST["email"];
    $id_Tipo = $_POST["valorCad"];
    
    // $query = "INSERT INTO usuario VALUE(1, $usuario, $senha, $nome, $sobrenome, $data_nasc, $email)";
    
    $saida["resp"]["status"] = false;
    
    
    $resultado = mysqli_query($conn, "INSERT INTO usuario VALUES(null,'$id_Tipo', '$usuario', '$senha', '$nome', '$sobrenome', '$data_nasc', '$email')");
    
    if ($resultado) {
        $saida["resp"]["status"] = true;
	$saida["resp"]["local"] = "index.html";
        echo json_encode($saida);
        
    } else {
        echo json_encode($saida);
    }

    mysqli_close($conn);

    
    
    
    
    
    


