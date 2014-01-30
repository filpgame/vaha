<?php
session_start();
$nome = $_SESSION["logado"]["nome"];
$email = $_SESSION["logado"]["email"];
$sobrenome = $_SESSION["logado"]["sobrenome"];
$tipo = $_SESSION["logado"]["tipo"];
//$_SESSION["logado"]["usuario"] = $linha["usuario"];
//$_SESSION["logado"]["ID"] = $linha["ID_usuario"];