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
        

        <script src="../js/jquery-1.10.1.js"></script>
        <link href="../css/blitzer/jquery-ui-1.10.3.custom.css" rel="stylesheet">      
        <script src="../js/jquery-ui-1.10.3.custom.js"></script>
        <script src="../js/jquery.validate.js"></script>
        <script src="../js/autenticacao.js"></script>
        <script src="../js/additional-methods.js"></script>
        <script src="../js/jquery.bpopup.min.js"></script>
        <link href="css/baloon.css" rel="stylesheet">
        
        <script>
            $(document).ready(function() {

                var data = "";
                var i = 0;
                var acertos = 0, erros = 0, pontuacao = 0, tentativa = 1;
                var mensagem = "";
                
                function chamarPergunta(){
                    $("#modal").html(data[i].Pergunta);
                    
                    $('#modal').dialog({
                        modal: true,
                        title: "Pergunta " + (i + 1),
                        resizable: false,
                        buttons: [{
                                text: "OK",
                                id: "btnOK",
                                click: function() {
                                    $(this).dialog("close");
                                }
                            }]
                    });
                }  
                
                    $('.area').click(function() {
                        var id = $(this).attr("id");
                        if (id === data[i].resposta) {
                            mensagem = "Parabéns! Você acertou! \o/";
                            alert(mensagem);
                            i++;    
                            pontuacao += (100/tentativa);

                            acertos++;
                            tentativa = 1;
                            chamarPergunta();
                        }else{
                            mensagem = "Oops! Resposta errada! :/";
                            alert(mensagem + " - Tentativas restantes: " + tentativa );
                            tentativa++;
                            
                            if(tentativa === 4){
                                alert(mensagem + " A resposta correta é:  " + data[i].resposta);
                                i++;
                                chamarPergunta();
                                tentativa = 1;
                            }
                            erros++;
                        }
                    });

                $('#start').click(function() {
                    $.ajax({
                        url: "gerarPerguntasAleatorias.php",
                        type: 'POST',
                        success: function(saida) {
                            data = JSON.parse(saida);
                            chamarPergunta();
                        }
                    });
                    $(this).hide();
                    
                    $('#modal').dialog({
                        modal: true,
                        title: "Pergunta ... ",
                        resizable: false,
                        buttons: [{
                                text: "OK",
                                id: "btnOK",
                                click: function() {
                                    $(this).dialog("close");
                                }
                            }]
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
                    <li class=''><a href='EstudeAqui.php'><span>Comece a estudar</span></a></li>
                    <li class='active'><a href='game.php'><span>Game</span></a></li>  
                    <li class='welcome'><p><span>Bem Vindo, <?= $usuario ?></span></p></li>             
                </ul>
                <a href="telaInicialAluno.php" class="logo"></a>
            </div>

            <!--<div id="div-content"> -->
            <div id="btnOK" ></div>
            <div id="modal"></div>
            <table cellspacing=0 cellpadding=0>
            <tr>
                <td>
                    <img class="area imglateralesq" id="cooler" src="Pecas/img/cooler.JPG" title="Cooler"/>
                </td>
            <input type="button" id="ver" value="Ver Pergunta"/><br>
            <input type="button" id="start" value="Começar Jogo">
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
                    <img class="area imglateraldir" id="drivecddvd" src="Pecas/img/driveCD.jpg"/>
                </td>
            </tr>
            <tr>
                <td>
                    <img class="area imglateralesq" id="harddisk" src="Pecas/img/hd.png"/>
                </td>
                <td>
                    <img class="area imglateraldir" id="placadevideo" src="Pecas/img/placa de video2.jpg" />
                </td>
            </tr>
            <tr>
                <td>
                    <img class="area imglateralesq" id="monitor" src="Pecas/img/monitor.jpg" />
                </td>
                <td>
                    <img class="area imglateraldir" id="gabinete" src="Pecas/img/Gabinete.jpg" />
                </td>
            </tr>
            <tr>
                <td>
                    <img class="area imglateralesq" id="placa-mae" src="Pecas/img/placamae.jpg" />
                </td>
                <td>
                    <img class="area imglateraldir" id="processador" src="Pecas/img/processador.jpg" />
                </td>
            </tr>
            
        </table>       
            <!-- </div> -->
            <div id="explicacao" >
                <a class="b-close">X</a>
                <div class="content"></div>
            </div>
        </div>
    </body>
</html>