<?php
//$nome_banco = "u454564541_mydb";         //Nome da Database
//$usuario = "u454564541_root";            //Login
//$senha = "Ifes2014";                    //Senha
//$servidor = "mysql.hostinger.com.br";   //Caminho do Servidor

$nome_banco = "vaha";         //Nome da Database
$usuario = "root";            //Login
$senha = "";                    //Senha
$servidor = "localhost";   //Caminho do Servidor

$conn = mysqli_connect($servidor, $usuario, $senha, $nome_banco) or die("Erro ao Conectar com o Banco!!");

if (mysqli_connect_errno()) {
    echo "3.Erro";
}


/* Login: u454564541
 * Senha: Ifes2014
 * FTP Hostname Temporário: 31.170.165.161
 * FTP Hostname completo: ftp.vaha.hol.es
 *  */