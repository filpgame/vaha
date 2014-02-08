<?php
include("./includes/info_logado.php");

$usuario = "$nome $sobrenome";
?>
<html lang="pt-br">
    <head>
        <title>Bem Vindo</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />

        <link rel="stylesheet" type="text/css" href="css/index.css" >
        <link rel="stylesheet" type="text/css" href="../css-reg/demo.css" />
        <link rel="stylesheet" type="text/css" href="../css-reg/style.css" />
        <link rel="stylesheet" type="text/css" href="../css-reg/animate-custom.css" />
        <link rel="stylesheet" type="text/css" href="../css/telaInicialAluno.css" />
        <link rel="shortcut icon" href="../css/logo2.png" />
        <link href="css/baloon.css" rel="stylesheet">

        <script src="../js/jquery-1.10.1.js"></script>
        <link href="../css/blitzer/jquery-ui-1.10.3.custom.css" rel="stylesheet">      
        <script src="../js/jquery-ui-1.10.3.custom.js"></script>
        <script src="../js/jquery.validate.js"></script>
        <script src="../js/autenticacao.js"></script>
        <script src="../js/additional-methods.js"></script>

        <script src="../js/jquery.bpopup.min.js"></script>

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
                background-size: 640px 480px;
                background-repeat: no-repeat;
                border: 2px solid black;
                width: 800px;
                height: 600px;
                margin: 10px auto 50px auto;
            }
            .area{
                border: 2px solid white;
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
                margin-left: 590px;
                margin-top: 190px;
                width: 130px;
                height: 140px;
            }
            #chipsetnorte{
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
            #pci{
                margin-left: 155px;
                margin-top: -347px;
                width: 22px;
                height: 196px;
            }
            #chipsetsul{
                margin-left: 178px;
                margin-top: 53px;
                width: 84px;
                height: 77px;
            }
            #ide{             
                margin-left: 115px;
                width: 20px;
                height: 133px;
            }
            #fonte{
                margin-left: 524px;
                margin-top: -29px;
                height: 24px;
                width: 136px;
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
            <div id='navigation'>
                <ul>
                    <li><a href='telaInicialAluno.php'><span>Inicio</span></a></li>
                    <li><a href='#'><span>Perfil</span></a></li>
                    <li class='active'><a href='logado/EstudeAqui.php'><span>Comece a estudar</span></a></li>
                    <li class='last'><a href='#'><span>Game</span></a></li>  
                    <li class='welcome'><p><span>Bem Vindo, <?= $usuario ?></span></p></li>               
                </ul>
                <a href="telaInicialAluno.php" class="logo"></a>
            </div>

            <!--<div id="div-content"> -->
            
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
                <div class="area" id="fonte" title="Aqui se conecta a fonte"></div>
                <!-- <div class="area" id="chipsetsul" title="Este é o Chipset Sul"></div>-->
            </div>       
            <!-- </div> -->
            <div id="explicacao" >
                <a class="b-close">X</a>
                    <div class="content"></div>
            </div>
        </div>
    </body>
</html>
