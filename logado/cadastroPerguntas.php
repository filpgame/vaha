<?php
include("./includes/info_logado.php");
include ("./includes/banco.php");

$usuario = "$nome $sobrenome";
$query = mysqli_query($conn, "SELECT nome FROM comp_pc");
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Bem Vindo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />

        <link rel="stylesheet" type="text/css" href="../css-reg/demo.css" />
        <link rel="stylesheet" type="text/css" href="../css-reg/style.css" />
        <link rel="stylesheet" type="text/css" href="../css-reg/animate-custom.css" />
        <link rel="stylesheet" type="text/css" href="../css/telaInicialAluno.css" />
        <link rel="shortcut icon" href="../css/logo2.png" />

        <script src="../js/jquery-1.10.1.js"></script>

        <link href="../css/blitzer/jquery-ui-1.10.3.custom.css" rel="stylesheet">
        <script src="../js/jquery-ui-1.10.3.custom.js"></script>
        <script src="../js/jquery.validate.js"></script>
        <script src="../js/autenticacao.js"></script>
        <script src="../js/additional-methods.js"></script>  
        <script>
            $(document).ready(function() {
                $("#salvar").click(function(e) {
                    e.preventDefault();
                    $.ajax({
                        url: "cadastrarConteudo.php",
                        data: $("#frm").serialize(),
                        type: 'POST',
                        success: function(saida) {
                            data = JSON.parse(saida);
                            if (data.resp.status) {
                                alert("Pergunta Criada com Sucesso!");
                            } else {
                                alert("Erro ao Criar Pergunta");
                            }
                        }
                    });
                });

                $("#atualizar").click(function(e) {
                    e.preventDefault();
                    $.ajax({
                        url: "cadastrarConteudo.php",
                        data: $("#frm2").serialize(),
                        type: 'POST',
                        success: function(saida) {
                            data = JSON.parse(saida);
                            if (data.resp.status) {
                                alert("Conteúdo atualizado com Sucesso! \0/");
                            } else {
                                alert("Erro ao cadastrar conteúdo! :/");
                            }
                        }
                    });
                });
            });
        </script>
        <style>
            span{
                font-weight: bold;
            }

        </style>

    </head>
    <body>
        <div>
            <div id='navigation'>
                <ul>
                    <li class='active'><a href='telaInicialProfessor.php'><span>Inicio</span></a></li>
                    <li><a href='#'><span>Perfil</span></a></li>
                    <li><a href='#'><span>Aluno</span></a></li>
                    <li><a href='EstudeAqui.php'><span>Comece a estudar</span></a></li>
                    <li class='last'><a href='#'><span>Game</span></a></li>  
                    <li class='welcome'><p><span>Bem Vindo, <?= $usuario ?></span></p></li>               
                </ul>
                <a href="telaInicialProfessor.php" class="logo"></a>
            </div>

            <div id="principal">
                <h4 style="font-size: 30px; text-align: center;">Cadastro de Perguntas</h4><br>
                <span>Aqui você pode Atualizar o conteúdo que desejar e também cadastrar suas próprias perguntas</span>
                <form id="frm">
                    <br><span>Digite aqui a pergunta:</span><br>
                    <textarea name="pergunta" cols="40" rows="4" id="pergunta" style="resize: none"></textarea><br>
                    <br><span>Selecione a resposta:</span>
                    <br><select id="resposta" name="resposta">
                        <?php
                        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                            echo "<option>" . $row['nome'] . "</option>";
                        }
                        ?>
                    </select><br>

                    <br><input type="submit" id="salvar" name="salvarPergunta" value="Salvar">
                </form>
                <hr>

                <h4 style="font-size: 30px; text-align: center;">Atualização de Conteúdo</h4><br>
                
                <form id="frm2">
                    <span>Selecione o componente que deseja alterar o conteúdo:</span>
                    <br><select id="respostaConteudo" name="respostaConteudo">
                        <?php
                        $query = mysqli_query($conn, "SELECT nome FROM comp_pc");
                        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                            echo "<option>" . $row['nome'] . "</option>";
                        }
                        ?>
                    </select><br>
                    <br><span>Você deseja modificar o conteúdo de algo? Digite aqui em baixo:</span><br>
                    <textarea name="desc" id="desc" cols="40" rows="4" id="dica" style="resize: none"></textarea><br>
                    <input type="button" name="atualizar" id="atualizar" value="Atualizar conteúdo">

                </form>




            </div>
        </div>
    </body>
</html>
