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
                
                $("#logout").click(function(){
                    window.location = "logout.php";
                });

                $(".area").click(function() {
                    var caminho = $(this).attr("id");
                    $('#explicacao').bPopup({
                        content: 'iframe',
                        contentContainer: '.content',
                        loadUrl: 'Pecas/' + caminho + '.php' //Uses jQuery.load()
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
                    <?php if ($tipo == 1): ?>
                        <li><a href='telaInicialAluno.php'><span>Inicio</span></a></li>
                    <?php else: ?>
                        <li><a href='telaInicialProfessor.php'><span>Inicio</span></a></li>
                    <?php endif ?>
                    <li><a href='#'><span>Perfil</span></a></li>
                    <li class='active'><a href='EstudeAqui.php'><span>Comece a estudar</span></a></li>
                    <li class='last'><a href='game.php'><span>Game</span></a></li>  
                    <li class='welcome'><p><span>Bem Vindo, <?= $usuario ?> <img src="img/logout.png" id="logout" style="width: 16px; height: 16px"></span></p></li>               
                </ul>
                <a href="telaInicialAluno.php" class="logo"></a>
            </div>

            <!--<div id="div-content"> -->
            <div id="principal">
            <table cellspacing=0 cellpadding=0>
            <tr>
                <td>
                    <img class="area imglateralesq" id="cooler" src="Pecas/img/cooler.JPG" title="Cooler"/>
                </td>
                <td rowspan=6>
                    <div id="mobo">
                        <div class="area" id="socket" title="Soquete"></div>
                        <div class="area" id="chipsetnorte" title="Chipset Norte"></div>
                        <div class="area" id="pciexpress" title="Slot PCI-Express"></div>
                        <div class="area" id="bateria" title="Bateria"></div>
                        <div class="area" id="sata" title="Connexão SATA"></div>
                        <div class="area" id="memoria" title="Slot de Memória"></div>
                        <div class="area" id="pci" title="Slot PCI"></div>
                        <div class="area" id="chipsetsul" title="Chipset Sul"></div>
                        <div class="area" id="ide" title="Conexão IDE"></div>
                        <div class="area" id="fonte" title="Aqui se conecta a fonte"></div>
                    </div>
                </td>
                <td>  
                    <img class="area imglateraldir" id="drivecddvd" src="Pecas/img/driveCD.jpg" title="Leitor de CD/DVD"/>
                </td>
            </tr>
            <tr>
                <td>
                    <img class="area imglateralesq" id="harddisk" src="Pecas/img/hd.png" title="HD"/>
                </td>
                <td>
                    <img class="area imglateraldir" id="placadevideo" src="Pecas/img/placa de video2.jpg" title="Placa de Vídeo"/>
                </td>
            </tr>
            <tr>
                <td>
                    <img class="area imglateralesq" id="monitor" src="Pecas/img/monitor.jpg" title="Monitor"/>
                </td>
                <td>
                    <img class="area imglateraldir" id="gabinete" src="Pecas/img/Gabinete.jpg" title="Gabinete"/>
                </td>
            </tr>
            <tr>
                <td>
                    <img class="area imglateralesq" id="placa-mae" src="Pecas/img/placamae.jpg" title="Placa Mãe"/>
                </td>
                <td>
                    <img class="area imglateraldir" id="processador" src="Pecas/img/processador.jpg" title="Processador"/>
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td>
                </td>
            </tr>
        </table>       
             </div> 
            <div id="explicacao" >
                <a class="b-close">X</a>
                <div class="content"></div>
            </div>
        </div>
    </body>
</html>
