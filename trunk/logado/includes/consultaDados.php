<?php

$result = mysqli_query($conn, "SELECT * FROM estatiticas WHERE ID_usuario = $ID_usuario");

while ($row = mysqli_fetch_array($result)) {
    $acertos = $row['acertos'];
    $erros = $row['erros'];
    $pontuacao = $row['pontuacao_geral'];
}

$result = mysqli_query($conn, "SELECT COUNT(*) FROM pergunta WHERE ID_usuario = $ID_usuario");

while ($row = mysqli_fetch_array($result)) {
    $qtd_perguntas_criadas = $row['COUNT(*)'];
}

$result = mysqli_query($conn, "SELECT COUNT(*) FROM pergunta");

while ($row = mysqli_fetch_array($result)) {
    $qtd_perguntas_sistema = $row['COUNT(*)'];
}

$result = mysqli_query($conn, "SELECT COUNT(*) FROM usuario WHERE ID_tp_usuario = 1");

while ($row = mysqli_fetch_array($result)) {
    $alunos_cadastrados = $row['COUNT(*)'];
}
    