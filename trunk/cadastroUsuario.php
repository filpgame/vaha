<?php
include ("./logado/includes/banco.php");
    
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $usuario = $_POST["usuario"];
    $senha = $_POST["pas"];
    $conf_senha = $_POST["pas_conf"];
    $data_nasc = $_POST["dtnasc"];
    $email = $_POST["email"];
    $id_Tipo = $_POST["valorCad"];
    $instituicao = $_POST["inst"];
    $telefone = $_POST["telefone"];
    
    // $query = "INSERT INTO usuario VALUE(1, $usuario, $senha, $nome, $sobrenome, $data_nasc, $email)";
    
    $saida["resp"]["status"] = false;
    
    if($id_Tipo == 1){
        $resultado = mysqli_query($conn, "INSERT INTO usuario VALUES(null,'$id_Tipo', '$usuario', '$senha', '$nome', '$sobrenome', '$data_nasc', '$email',null,null)");
    }else{
        $resultado = mysqli_query($conn, "INSERT INTO usuario VALUES(null,'$id_Tipo', '$usuario', '$senha', '$nome', '$sobrenome', '$data_nasc', '$email','$telefone','$instituicao')");
    }
    
    
    if ($resultado) {
        $saida["resp"]["status"] = true;
	$saida["resp"]["local"] = "index.html";
        echo json_encode($saida);
        
    } else {
        echo json_encode($saida);
    }

    mysqli_close($conn);

    
    
    
    
    
    


