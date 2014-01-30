<?php

include("./logado/includes/banco.php");

$saida["resp"]["status"] = false;

if (isset($_REQUEST["usu"]) && isset($_REQUEST["pas"]) && isset($_REQUEST["tipo"]) && isset($_REQUEST["nome"])&& isset($_REQUEST["email"])) {
    $tipo = mysqli_real_escape_string($conn, $_REQUEST["tipo"]);
    $pass = mysqli_real_escape_string($conn, $_REQUEST["pas"]);
    $nome = mysqli_real_escape_string($conn, $_REQUEST["nome"]);
    $sobrenome = mysqli_real_escape_string($conn, $_REQUEST["sobrenome"]);
    $dtnasc = mysqli_real_escape_string($conn, $_REQUEST["dtnasc"]);
    $email = mysqli_real_escape_string($conn, $_REQUEST["email"]);
    $usuario = mysqli_real_escape_string($conn, $_REQUEST["usu"]);
    
    $consulta = "INSERT INTO `usuario`(`ID_tp_usuario`,`usuario`,`senha`,`nome`,`sobrenome`,`dt_nasc`,`email`)VALUES('$id','$usuario','$senha','$nome','$sobrenome','$dtnasc','$email');";
    $result = mysqli_query($conn, $consulta);
    if ($result) {
        
        $saida["resp"]["status"] = true;
        $saida["resp"]["mensagem"] = "Usuário cadastrado com sucesso!!";
        echo json_encode($saida);
    } else {
        $saida["resp"]["status"] = false;
        $saida["resp"]["mensagem"] = "Ocorreu algum erro, Tente mais tarde.";
        echo json_encode($saida);
    }
} else {
    header("Location: ./index.html");
}
