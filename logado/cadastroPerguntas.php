<?php
    include("./includes/info_logado.php");
    
    $usuario = "$nome $sobrenome";    
?>
<html lang="pt-br">
    <head>
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
                    <li class='welcome'><p><span>Bem Vindo, <?=$usuario?></span></p></li>               
                </ul>
                <a href="telaInicialProfessor.php" class="logo"></a>
            </div>

            <div id="principal">
                
            </div>
        </div>
    </body>
</html>




//<?php
//include("./includes/info_logado.php");
//include ("./includes/banco.php");
//
//$usuario = "$nome $sobrenome";
//
//$query = mysqli_query($conn, "SELECT nome FROM comp_pc");
//?>
<!--<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>PI</title>
        <script src="../js/jquery-1.10.1.js"></script>
        <link href="../css/blitzer/jquery-ui-1.10.3.custom.css" rel="stylesheet">
        <link href="css/index.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
        <link href="css/cadastroPerguntas.css" rel="stylesheet">
        <script src="../js/jquery-ui-1.10.3.custom.js"></script>
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
                margin-tsop: 40px;
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

                    <div id="imagem1"><img src="img/balao1.fw.png"></div>
                    <div id="textPergunta"><textarea cols="40" rows="4" id="pergunta" style="resize: none" class="quest"></textarea></div>
                    <br>
                    
                    <div id="imagem2"><img src="img/balao2.fw.png"></div>
                    <div>
                        <select style="width: 200px" text="" id="comboResposta" style="resize: none" class="quest">
                            <?php
                            while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                                echo "<option>".$row['nome']."</option>";
                            }
                            ?>
                        </select></div>
                    <br>
                   <div id="imagem3"><img src="img/balao3.fw.png"></div>
                    <div><textarea cols="40" rows="4" id="dica" style="resize: none" class="quest"></textarea></div>
                </form>

            </div>
        </div>
    </body>
</html>-->
