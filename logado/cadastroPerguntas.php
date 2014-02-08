<?php
include("./logado/includes/info_logado.php");
include ("./logado/includes/banco.php");

$usuario = "$nome $sobrenome";

$query = mysqli_query($conn, "SELECT nome FROM comp_pc");
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>PI</title>
        <script src="js/jquery-1.10.1.js"></script>
        <link href="css/blitzer/jquery-ui-1.10.3.custom.css" rel="stylesheet">
        <link href="logado/css/index.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
        <link href="logado/css/cadastroPerguntas.css" rel="stylesheet">
        <script src="js/jquery-ui-1.10.3.custom.js"></script>
        <style>
            .input{
                width: 100%;
                border-radius: 10px;
                height: 30px;
                margin-top: 10px;
            }
            #teste{
                font-family: sans-serif;
                font-size: 14px;
                color: white;
                float: left;
                margin-top: 40px;
                margin-left: 65px;
            }

            a:visited{ 
                color: black;
            }

        </style>
    </head>
    <body>
        <div>
            <div id="navigator">
                <div id="teste">Bem Vindo, <?=$usuario ?></div>
                <div id="navigator-style">
                    <div id="navigation">

                        <div style="text-align: center;">
                            <a href="telaInicialProfessor.php"><li style="list-style: none;" class="menu-sup" >Home</li></a>
                            <a><li style="list-style: none;" class="menu-sup" >Perfil</li></a>
                            <a><li style="list-style: none;" class="menu-sup" >Conteúdo</li></a>
                            <a href="cadastroPerguntas.php"><li style="list-style: none;" class="menu-sup">Game</li></a>
                            <a><li style="list-style: none;" class="menu-sup">Sobre</li></a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="div-content"> 

                <form method="GET">
                   <br> <div id="line"><p class="escrita">Olá professor! Aqui você pode criar perguntas para testar o conhecimento de seus alunos</p></div>

                    <div id="imagem1"><img src="logado/img/balao1.fw.png"></div>
                    <div id="textPergunta"><textarea cols="40" rows="4" id="pergunta" style="resize: none" class="quest"></textarea></div>
                    <br>
                    
                    <div id="imagem2"><img src="logado/img/balao2.fw.png"></div>
                    <div>
                        <select style="width: 200px" text="" id="comboResposta" style="resize: none" class="quest">
                            <?php
                            while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                                echo "<option>".$row['nome']."</option>";
                            }
                            ?>
                        </select></div>
                    <br>
                   <div id="imagem3"><img src="logado/img/balao3.fw.png"></div>
                    <div><textarea cols="40" rows="4" id="dica" style="resize: none" class="quest"></textarea></div>
                </form>

            </div>
        </div>
    </body>
</html>