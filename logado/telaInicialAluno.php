<?php
    include './includes/info_logado.php';
    include './includes/banco.php';

    $usuario = "$nome $sobrenome";
    $data = converteData($dt_nasc);

    $result = mysqli_query($conn, "SELECT * FROM estatiticas WHERE ID_usuario = $ID_usuario");

    while ($row = mysqli_fetch_array($result)) {
        $acertos = $row['acertos'];
        $erros = $row['erros'];
        $pontuacao = $row['pontuacao_geral'];
    }

?>
<html lang="pt-br">
    <head>
        <title>Bem Vindo</title>
        <link rel="shortcut icon" href="../css/logo2.png" />
        <meta charset="UTF-8" />

        <link rel="stylesheet" type="text/css" href="../css/demo.css" />
        <link rel="stylesheet" type="text/css" href="../css/telaInicialAluno.css" />
        <link rel="stylesheet" type="text/css" href="../css/blitzer/jquery-ui-1.10.3.custom.css"> 
        <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css' />
        <link type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:500' rel='stylesheet' type='text/css'>
        
        <script src="../js/jquery-1.10.1.js"></script> 
        <script src="../js/jquery-ui-1.10.3.custom.js"></script>
        <script src="../js/jquery.validate.js"></script>
        <script src="../js/autenticacao.js"></script>
        <script src="../js/additional-methods.js"></script>
        <script>
            $(document).ready(function(){
                $("#logout").click(function(){
                    window.location = "logout.php";
                });
            });
        </script>
    
    </head>
    <body>
            <div id='navigation'>
                <ul>
                    <li class='active'><a href='telaInicialAluno.php'><span>Inicio</span></a></li>
                    <li><a href='EstudeAqui.php'><span>Comece a estudar</span></a></li>
                    <li class='last'><a href='game.php'><span>Game</span></a></li>  
                    <li class='welcome'><p><span>Bem Vindo, <?=$usuario?> <img src="img/logout.png" id="logout" style="width: 16px; height: 16px"></span></p></li>
                    
                </ul>
                <a href="#" class="logo"></a>
            </div>

            <div id='header'>
                <ul>    
                    <li><p>VAHA - Venha Aprender Hardware Agora</p></li>
                </ul>
            </div>

            <div id='about' class='clearfix'>
                <section id="center" >
                    <div id="userStats" class="clearfix">
                        <div class="pic">
                            <a href="#"><img src="../images/cat23.png" width="150" height="150" /></a>
                        </div>
                        
                        <div class="data">
                            <div class="sep"></div>
                            <ul class="numbers clearfix">
                                <li>Pontuação<strong><?=$pontuacao?></strong></li>
                                <li>Acertos<strong><?=$acertos?></strong></li>
                                <li class="nobrdr">Erros<strong><?=$erros?></strong></li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section id='container'>
                    <div id='blue'>
                        <h1><?=$nick?></h1> <!--usario -->
                        <h3>Serra, ES</h3>
                        <h4><a href="http://www.sr.ifes.edu.br">http://www.sr.ifes.edu.br</a></h4>
                    </div>
                    <div id='red'>
                        <h1><?=$usuario?></h1>
                        <h3><?=$data?></h3>
                        <h4><?=$email?></h4>
                    </div>
                    
                    <div id='white'>
                                    <h4>Este Sistema foi um trabalho de final de curso e, no momento está ocioso. <br>Caso queiram mais detalhes sobre o projeto ou queiram dar continuidade ou alguma proposta, entrar e contato com Felipe ou Cristian. 
                                        <br>Felipe: &phone;(27) 99695-6489 &nbsp;&nbsp;&nbsp; &boxtimes; feliipe@outlook.com
                                        <br> Cristian &phone;(27) 99862-3814 &nbsp;&nbsp;&nbsp; &boxtimes; csanterio@hotmail.com </h4>
                    </div>
                </section>
            </div>

    </body>
</html>
