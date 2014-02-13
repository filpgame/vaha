<?php

include ("./logado/includes/banco.php");
$emailCristian = "csanterio@gmail.com";

$nome = $_REQUEST["nome"];
$sobrenome = $_REQUEST["sobrenome"];
$usuario = $_REQUEST["usuario"];
$senha = $_REQUEST["pas"];
$conf_senha = $_REQUEST["pas_conf"];
$data_nasc = $_REQUEST["dtnasc"];
$email = $_REQUEST["email"];
$id_Tipo = $_REQUEST["valorCad"];
$instituicao = $_REQUEST["inst"];
$telefone = $_REQUEST["telefone"];
$confirmacad = $_REQUEST["confirmacad"];

// $query = "INSERT INTO usuario VALUE(1, $usuario, $senha, $nome, $sobrenome, $data_nasc, $email)";
$mensagem = "Nome: $nome \n Sobrenome: $sobrenome \n User: $usuario \n Data Nasc: $data_nasc \n Email: $email \n Escola: $instituicao \n Telefone: $telefone \n\n\n\n\n "
        . "link para Cadastro: http://vaha.hol.es/cadastroUsuario.php?nome=$nome&sobrenome=$sobrenome&usuario=$usuario&pas=$senha&dtnasc=$data_nasc&email=$email&valorCad=$id_Tipo&inst=$instituicao&telefone=$telefone&confirmacad=true";

$saida["resp"]["status"] = false;
if ($confirmacad == "true") {
    $resultado = mysqli_query($conn, "INSERT INTO usuario VALUES(null,'$id_Tipo', '$usuario', '$senha', '$nome', '$sobrenome', '$data_nasc', '$email','$telefone','$instituicao')");
    if ($resultado) {
        $resultado = mail($email, "Cadastro no VAHA", "Cadastro Confirmado! Acesse http://vaha.hol.es e aproveite!");
        if ($resultado) {
            echo "Confirmado";
        } else {
            echo "erro no email";
        }
    } else {
        echo "erro no SQL";
    }
} elseif ($id_Tipo == 1) {
    $resultado = mysqli_query($conn, "INSERT INTO usuario VALUES(null,'$id_Tipo', '$usuario', '$senha', '$nome', '$sobrenome', '$data_nasc', '$email','$telefone','$instituicao')");
    if ($resultado) {
        $saida["resp"]["status"] = true;
        $saida["resp"]["mensagem"] = "Cadastro Efetuado com sucesso!";
        $saida["resp"]["local"] = "index.html";
    } else {
        $saida["resp"]["mensagem"] = "Erro ao Efetuar Cadastro";
    }

    echo json_encode($saida);
} elseif ($id_Tipo == 2) {
    $resultado = mail($emailCristian, "Novo Professor", $mensagem);
    if ($resultado) {
        $saida["resp"]["status"] = true;
        $saida["resp"]["mensagem"] = "Verificaremos seus dados e logo enviaremos um email informando que sua conta está ativada";
        $saida["resp"]["local"] = "index.html";
    } else {
        $saida["resp"]["mensagem"] = "Erro ao Efetuar Cadastro";
    }
    echo json_encode($saida);
}
mysqli_close($conn);









