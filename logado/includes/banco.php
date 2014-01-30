<?php
$nome_banco = "mydb";         //Nome da Database
$usuario = "root";            //Login
$senha = "";                    //Senha
$servidor = "localhost";   //Caminho do Servidor

$conn = mysqli_connect($servidor, $usuario, $senha, $nome_banco);

if (mysqli_connect_errno()) {
    echo "3.Erro";
}
