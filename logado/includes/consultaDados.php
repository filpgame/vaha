<?php

$result = mysqli_query($conn, "SELECT * FROM estatiticas WHERE ID_usuario = $ID_usuario");
    
    while($row = mysqli_fetch_array($result)){
        $acertos = $row['acertos'];
        $erros = $row['erros'];
        $pontuacao = $row['pontuacao_geral'];
    }
    
    $result = mysqli_query($conn, "SELECT COUNT(*) FROM pergunta WHERE ID_usuario = $ID_usuario");
    
    while($row = mysqli_fetch_array($result)){
        $qtd_perguntas_criadas = $row['COUNT(*)'];
    }
    
    $result = mysqli_query($conn, "SELECT COUNT(*) FROM pergunta");
    
    while($row = mysqli_fetch_array($result)){
        $qtd_perguntas_sistema = $row['COUNT(*)'];
    }
    
    $result = mysqli_query($conn, "SELECT COUNT(*) FROM usuario WHERE ID_tp_usuario = 1");
    
    while($row = mysqli_fetch_array($result)){
        $alunos_cadastrados = $row['COUNT(*)'];
    }
    
    if(isset($_REQUEST['salvarImagem'])){
        $imagem = $_FILES['salvarImagem'];
        
        if(!empty($imagem['name'])){
            
            // Largura máxima em pixels
		$largura = 150;
		// Altura máxima em pixels
		$altura = 180;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 1000;
                
                if(!preg_match("/^image/(pjpeg|jpeg|png|gif|bmp)$/", $imagem['type'])){
                    $erro = "Imagem Inválida!";
                }else{
                    $dimensoes = getimagesize($imagem);
                    if($dimensoes[0] > $largura){
                        $erro = "A Largura da imagem não deve ultrapassar $largura pixels";
                    }
                    if($dimensoes[1] > $altura){
                        $erro = "A Altura da imagem não deve ultrapassar $altura pixels";
                    }
                    if($imagem['size'] > $tamanho){
                        $erro = "O tamanho da imagem não deve ultrapassar $tamanho bytes";
                    }
                    
                    preg_match("/.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $extensao);
                    
                    $nome_imagem = md5(uniqid(time())) . "." . $extensao[1];
                    $caminho_imagem = "fotos/" . $nome_imagem;
                    move_uploaded_file($imagem["tmp_name"], $caminho_imagem);
                    
                    mysqli_query($conn, "UPDATE usuario set");
                    
                    //http://www.oficinadanet.com.br/post/9062-upload-de-imagem-com-php-e-mysql
                }
            
        }
    }

