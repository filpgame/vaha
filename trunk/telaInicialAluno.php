<?php
    include("./logado/includes/info_logado.php");
    
    $usuario = "$nome $sobrenome";    
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>PI</title>
        <script src="js/jquery-1.10.1.js"></script>
        <link href="css/blitzer/jquery-ui-1.10.3.custom.css" rel="stylesheet">
        <link href="css/index.css" rel="stylesheet">
        <script src="js/jquery-ui-1.10.3.custom.js"></script>
        <style>
            .input{
                width: 100%;
                border-radius: 10px;
                height: 30px;
                margin-top: 10px;
            }
            #teste{
                font-family: cursive;
                font-size: 14px;
                color: white;
                float: left;
                margin-top: 40px;
                margin-left: 65px;
            }
        </style>
    </head>
    <body>
        <div>
            <div id="navigator">
                <div id="teste">Bem Vindo, <?=$usuario?></div>
                <div id="navigator-style">
                    <div id="navigation">
                        
                        <div style="text-align: center;">
                            <a href="telaInicialProfessor.php"><li style="list-style: none;" class="menu-sup" >Home</li></a>
                                <a><li style="list-style: none;" class="menu-sup" >Perfil</li></a>
                                <a href="logado/EstudeAqui.php"><li style="list-style: none;" class="menu-sup" >Comece a Estudar</li></a>
                                <a><li style="list-style: none;" class="menu-sup">Game</li></a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="div-content">
                <div id="menu-lateral">
                    <br/><div style="margin-left: 20px; font-family: cursive; font-size: 22px;">Confira aqui suas estatísticas:</div><br/>
                    <div><img src="logado/img/lapis.png"></div><br/><br/>
                    <div><img src="logado/img/lapis.png"></div><br/><br/>
                    <div><img src="logado/img/lapis.png"></div>
                </div>                
                
            </div>
        </div>
    </body>
</html>
