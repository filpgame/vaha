<?php

include '../logado/includes/banco.php';

mysqli_set_charset($conn, 'utf8');
ini_set('default_charset', 'UTF-8');

$result = mysqli_query($conn, 'SELECT * FROM resposta JOIN pergunta ON(pergunta.id_resposta = resposta.id_resposta) ORDER BY rand() LIMIT 10;');

$vetperguntas = [];
$pergunta = [];

while ($linha = mysqli_fetch_array($result)) {
    $pergunta['Pergunta'] = $linha['Pergunta'];
    $pergunta['ID'] = $linha['ID_pergunta'];
    $pergunta['id_tp_Pergunta'] = $linha['ID_tp_pergunta'];
    $pergunta['idUsuario'] = $linha['ID_usuario'];
    $pergunta['id_nivel_pergunta'] = $linha['ID_nivel_pergunta'];
    $pergunta['id_resposta'] = $linha['ID_resposta'];
    $pergunta['resposta'] = $linha['resposta'];

    array_push($vetperguntas, $pergunta);
}

echo json_encode($vetperguntas);
