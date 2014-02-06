<?php

session_start();
include("./logado/includes/banco.php");

$saida["resp"]["status"] = false;

if (isset($_REQUEST["login"]) && isset($_REQUEST["pass"])) {
    $login = mysqli_real_escape_string($conn, $_REQUEST["login"]);
    $pass = mysqli_real_escape_string($conn, $_REQUEST["pass"]);
    $consulta = "SELECT * FROM usuario us WHERE us.usuario = '$login' AND us.senha= '$pass'";
    $result = mysqli_query($conn, $consulta);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $linha = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $_SESSION["logado"]["nome"] = $linha["nome"];
            $_SESSION["logado"]["usuario"] = $linha["usuario"];
            $_SESSION["logado"]["email"] = $linha["email"];
            $_SESSION["logado"]["sobrenome"] = $linha["sobrenome"];
            $_SESSION["logado"]["tipo"] = $linha["ID_tp_usuario"];// <------------ Descomentar, quando colocar o ID_tp_usuario novamente ...
            //$_SESSION["logado"]["ID"] = $linha["ID_usuario"];
            
            $saida["resp"]["status"] = true;
            //$saida["resp"]["local"] = "logado/index.php";
            
            if($_SESSION["logado"]["tipo"] == 1){
                $saida["resp"]["local"] = "telaInicialAluno.php";
				//header('Location: telaInicialAluno.php');
            }else if($_SESSION["logado"]["tipo"] == 2){
                $saida["resp"]["local"] = "telaInicialProfessor.php";
				//header('Location: telaInicialProfessor.php');
            }
            //$saida["resp"]["local"] = "telaInicialAluno.php";
            
            echo json_encode($saida);
        } else {
            $saida["resp"]["status"] = false;
            $saida["resp"]["mensagem"] = "Login ou senha incorreta";
            echo json_encode($saida);
        }
    }
} else {
    header("Location: ./index.html");
}




    
