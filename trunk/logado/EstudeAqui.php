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
                width: 640px;
                height: 480px;
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
                margin-left: 473px;
                margin-top: 159px;
                width: 100px;
                height: 103px;
            }
            #chipsetnorte{
                margin-left: 331px;
                margin-top: -55px;
                width: 83px;
                height: 82px;
            }
            #pciexpress{
                margin-left: 250px;
                margin-top: -218px;
                width: 15px;
                height: 207px;
            }
            #sata{
                margin-left: 141px;
                margin-top: -64px;
                width: 22px;
                height: 63px;
            }
            #bateria{
                margin-left: 173px;
                margin-top: 96px;
                width: 40px;
                height: 38px;
                border-radius: 25px;
            }
            #memoria{
                margin-left: 307px;
                margin-top: -100px;
                width: 303px;
                height: 31px;
            }
            #pci{
                margin-left: 123px;
                margin-top: -278px;
                width: 17px;
                height: 157px;
            }
            #chipsetsul{
                margin-left: 141px;
                margin-top: 45px;
                width: 68px;
                height: 57px;
            }
            #ide{             
                margin-left: 92px;
                width: 16px;
                height: 110px;
            }
            #fonte{
                margin-left: 419px;
                margin-top: -26px;
                height: 19px;
                width: 108px;
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
