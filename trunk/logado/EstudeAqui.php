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
        <link href="../css/index.css" rel="stylesheet">
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
                background-size: 800px 600px;
                background-repeat: no-repeat;
                border: 2px solid black;
                width: 800px;
                height: 600px;
                margin-left: 50px;
                margin-top: 150px;
            }
            .area{
                border: 2px solid white;
            }
            #processador{
                margin-left: 590px;
                margin-top: 190px;
                width: 130px;
                height: 140px;
            }
            #chipset-norte{
                margin-left: 412px;
                margin-top: -71px;
                width: 109px;
                height: 103px;
            }
            #pciexpress{
                margin-left: 307px;
                margin-top: -249px;
                width: 27px;
                height: 239px;
            }
            #sata{
                margin-left: 177px;
                margin-top: -82px;
                width: 27px;
                height: 80px;
            }
            #bateria{
                margin-left: 215px;
                margin-top: 120px;
                width: 54px;
                height: 47px;
            }
            #memoria{
                margin-left: 409px;
                margin-top: -125px;
                width: 327px;
                height: 43px;
            }
            #explicacao{
                width: 640px; 
                height: 480px; 
                display: none;
                border-radius: 10px;
                background-color: whitesmoke;
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
                        loadUrl: 'pecas/' + caminho + '.html'//Uses jQuery.load()
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
                            <a><li style="list-style: none;" class="menu-sup" >Comece a Estudar</li></a>
                            <a><li style="list-style: none;" class="menu-sup">Game</li></a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="div-content">  
                <span>&nbsp;</span>			
                <div id="mobo">
                    <div class="area" id="processador" title="Este é o processador"></div>
                    <div class="area" id="chipset-norte" title="Este é o chipsetNorte"></div>
                    <div class="area" id="pciexpress" title="Este é o PCI"></div>
                    <div class="area" id="bateria" title="Este é o bateria"></div>
                    <div class="area" id="sata" title="Este é o SATA"></div>
                    <div class="area" id="memoria" title="Este é o Memoria"></div>
                </div>
            </div>
        </div>
        <div id="explicacao" >
            <div class="content"></div>
        </div>
    </body>
</html>