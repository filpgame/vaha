<?php
session_start();

function converteData($data){
	$res = str_split($data,"/");
	return $res[2]."/".$res[1]."/".$res[0];
}

if (!isset($_SESSION["logado"]["nome"]) && !isset($_SESSION["logado"]["sobrenome"])) {
    header("location: ../index.html");
} else {
    $nome = $_SESSION["logado"]["nome"];
    $email = $_SESSION["logado"]["email"];
    $sobrenome = $_SESSION["logado"]["sobrenome"];
    $tipo = $_SESSION["logado"]["tipo"];
    $nick = $_SESSION["logado"]["usuario"];
    $ID_usuario = $_SESSION["logado"]["ID"];
    $dt_nasc = $_SESSION["logado"]["dt_nasc"];
}
