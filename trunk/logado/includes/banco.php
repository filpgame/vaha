<?php
$nome_banco = "mydb";         //Nome da Database
$usuario = "root";            //Login
$senha = "usbw";                    //Senha
$servidor = "localhost";   //Caminho do Servidor

$conn = mysqli_connect($servidor, $usuario, $senha, $nome_banco) or die("Erro ao Conectar com o Banco!!");

if (mysqli_connect_errno()) {
    echo "3.Erro";
}
