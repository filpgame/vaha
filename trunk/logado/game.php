<?php
include("./includes/info_logado.php");

$usuario = "$nome $sobrenome";
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>PI</title>
        <script src="../js/jquery-1.10.1.js"></script>
        <link href="../css/blitzer/jquery-ui-1.10.3.custom.css" rel="stylesheet">
        <link href="css/index.css" rel="stylesheet">
        <script src="../js/jquery-ui-1.10.3.custom.js"></script>
        <script src="../js/jquery.bpopup.min.js"></script>
        <link href="css/baloon.css" rel="stylesheet">
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
            #mobo{
                background-image: url('img/boardb.jpg');
                background-size: 600px 500px;
                background-repeat: no-repeat;
                border: 2px solid black;
                width: 600px;
                height: 500px;
                margin: 20px auto 50px auto;
            }
            .area{
                border: 2px solid transparent;
                border-radius: 7px;
                -o-transition:.7s;
                -ms-transition:.7s;
                -moz-transition:.7s;
                -webkit-transition:.7s;
                transition:.7s;
            }
            .area:hover{
                background-color: red;
                opacity: 0.5;
            }
            #processador{
                margin-left: 443px;
                margin-top: 168px;
                width: 94px;
                height: 98px;
            }
            #chipsetnorte{
                margin-left: 309px;
                margin-top: -54px;
                width: 84px;
                height: 98px;
            }
            #pciexpress{
                margin-left: 235px;
                margin-top: -233px;
                width: 14px;
                height: 210px;
            }
            #sata{
                margin-left: 134px;
                margin-top: -83px;
                width: 16px;
                height: 60px;
            }
            #bateria{
                margin-left: 162px;
                margin-top: 120px;
                width: 40px;
                height: 41px;
            }
            #memoria{
                margin-left: 290px;
                margin-top: -116px;
                width: 282px;
                height: 33px;
            }
            #pci{
                margin-left: 117px;
                margin-top: -275px;
                width: 14px;
                height: 164px;
            }
            #chipsetsul{
                margin-left: 133px;
                margin-top: 46px;
                width: 64px;
                height: 59px;
            }
            #ide{             
                margin-left: 85px;
                width: 16px;
                height: 115px;
                margin-top: -20px;
            }
            #explicacao{
                display: none;
                border-radius: 10px;
                background-color: whitesmoke;
                color:#000;
                padding:20px;
                min-width:640px;
                min-height: 480px;
            }
            .b-close{
                cursor:pointer;
                position:absolute;
                right:10px;
                top:5px;
            }
        </style>
        <script>
            $(function() {
                $(document).tooltip({
                    position: {
                        my: "center bottom-20",
                        at: "center top",
                        using: function(position, feedback) {
                            $(this).css(position);
                            $("<div>")
                                    .addClass("arrow")
                                    .addClass(feedback.vertical)
                                    .addClass(feedback.horizontal)
                                    .appendTo(this);
                        }
                    }
                });

                $(".area").click(function() {
                    var caminho = $(this).attr("id");
                    $('#explicacao').bPopup({
                        content: 'iframe',
                        contentContainer: '.content',
                        loadUrl: 'Pecas/' + caminho + '.html' //Uses jQuery.load()
                    });
                });

                $("#howork").click(function() {
                    $('#explicacao').bPopup({
                        content: 'iframe',
                        contentContainer: '.content',
                        loadUrl: 'Pecas/comofunciona.html' //Uses jQuery.load()
                    });
                });
            });

        </script>
    </head>
    <body>
        <div>
            <div id="navigator">
                <div id="teste">Bem Vindo, <?= $usuario ?></div>
                <div id="navigator-style">
                    <div id="navigation">

                        <div style="text-align: center;">
                            <a><li style="list-style: none;" class="menu-sup" >Home</li></a>
                            <a><li style="list-style: none;" class="menu-sup" >Perfil</li></a>
                            <a id="howork"><li style="list-style: none;" class="menu-sup" >Como Funciona?</li></a>
                            <a><li style="list-style: none;" class="menu-sup">Game</li></a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="div-content">  
                <br>
                <div id="mobo">
                    <div class="area" id="processador" title="Este é o processador"></div>
                    <div class="area" id="chipsetnorte" title="Este é o chipsetNorte"></div>
                    <div class="area" id="pciexpress" title="Este é o PCI-E"></div>
                    <div class="area" id="bateria" title="Esta é a bateria"></div>
                    <!-- <div class="area" id="ide-hd" title="IDE - HD"></div>-->
                    <!-- <div class="area" id="ide-cdrom" title="IDE - CDROM"></div>-->
                    <div class="area" id="sata" title="Este é o SATA"></div>
                    <div class="area" id="memoria" title="Este é o Memoria"></div>
                    <div class="area" id="pci" title="Este é o PCI"></div>
                    <div class="area" id="chipsetsul" title="Este é o Chipset Sul"></div>
                    <div class="area" id="ide" title="IDE"></div>
                    <!-- <div class="area" id="chipsetsul" title="Este é o Chipset Sul"></div>-->
                </div>
                <div style="height: 50px;"></div>
                <div><input type="button" value="Comerçar Jogo" onclick="window.location = 'gerarPerguntasAleatorias.php'"></div>
            </div>
        </div>

        <div id="explicacao" >
            <a class="b-close">X<a/>
                <div class="content"></div>
        </div>
    </body>
</html>



