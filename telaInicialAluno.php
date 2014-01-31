<?php
    include("./logado/includes/info_logado.php");
    echo "Bem Vindo $nome $sobrenome";
    
    $usuario = "$nome $sobrenome";
    
?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
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
                font-size: 18px;
                color: white;
                float: left;
                margin-top: 18px;
                margin-left: -8.5%;
            }
        </style>
    </head>
    <body>
        <div>
            <div id="navigator">
                <div id="navigator-style">
                    <div id="navigation">
                        <div id="teste">Bem Vindo, <?=$usuario?></div>
                        <div style="text-align: center;">
                                <li style="list-style: none" class="menu-sup">Home</li>
                                <li style="list-style: none" class="menu-sup" >Perfil</li>
                                <li style="list-style: none" class="menu-sup" >Comece a Estudar</li>
                                <li style="list-style: none" class="menu-sup">Game</li>
                        </div>
                    </div>
                </div>
            </div>

            <div id="div-content">                
                <div id="menu-lateral">
                    <div class="op-lateral"><p class="nomes">Acertos</p></div>
                    <div class="op-lateral"><p class="nomes">Erros</p></div>
                    <div class="op-lateral"><p class="nomes">Sei lá</p></div>
                </div>                
                
            </div>
        </div>
    </body>
</html>
