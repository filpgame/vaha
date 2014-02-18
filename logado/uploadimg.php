<?php
include("./includes/info_logado.php");
include("./includes/banco.php");
$erro = "passou aqu";
$saida = array();
$saida["resp"]["status"] = false;
echo "$erro 0";

if (isset($_REQUEST['selectImagem'])) {
    $imagem = $_FILES['selectImagem'];
    echo "$erro 1";
    if (!empty($imagem['name'])) {
echo "$erro 2";
        // Largura máxima em pixels
        $largura = 150;
        // Altura máxima em pixels
        $altura = 180;
        // Tamanho máximo do arquivo em bytes
        $tamanho = 10000;

        if (!preg_match("/^image/(pjpeg|jpeg|png|gif|bmp)$/", $imagem['type'])) {
            $erro = "Imagem Inválida!";
            echo "$erro 3";
        } else {
            echo "$erro 4";
            $dimensoes = getimagesize($imagem);
            if ($dimensoes[0] > $largura) {
                $erro = "A Largura da imagem não deve ultrapassar $largura pixels";
                echo "$erro";
            }
            if ($dimensoes[1] > $altura) {
                $erro = "A Altura da imagem não deve ultrapassar $altura pixels";
                echo "$erro";
            }
            if ($imagem['size'] > $tamanho) {
                $erro = "O tamanho da imagem não deve ultrapassar $tamanho bytes";
                echo "$erro";
            }
echo "$erro 5";
            preg_match("/.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $extensao);

            $nome_imagem = $imagem["temp_name"] . $ID_usuario . "." . $extensao[1];
            $caminho_imagem = "fotos/" . $nome_imagem;
            move_uploaded_file($imagem["tmp_name"], $caminho_imagem);

            $result = mysqli_query($conn, "UPDATE usuario SET img_usuario = '$nome_imagem' WHERE id_usuario = '$ID_usuario'");

            if ($result) {
                $saida["resp"]["status"] = true;
            }
        }
    }
}

echo json_encode($saida);
