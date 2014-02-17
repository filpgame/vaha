<?php
session_start();

if (!isset($_SESSION["logado"]["nome"]) && !isset($_SESSION["logado"]["sobrenome"])) {
    header("location: ../index.html");
} else {
    $nome = $_SESSION["logado"]["nome"];
    $email = $_SESSION["logado"]["email"];
    $sobrenome = $_SESSION["logado"]["sobrenome"];
    $tipo = $_SESSION["logado"]["tipo"];
    $nick = $_SESSION["logado"]["usuario"];
    $ID_usuario = $_SESSION["logado"]["ID"];
}