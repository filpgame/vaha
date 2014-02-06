<?php
    include("./logado/includes/info_logado.php");
    
    $usuario = "$nome $sobrenome";    
?>
<html lang="pt-br">
    <head>
        <title>Bem Vindo</title>
         <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
     
        <link rel="stylesheet" type="text/css" href="css-reg/demo.css" />
        <link rel="stylesheet" type="text/css" href="css-reg/style.css" />
        <link rel="stylesheet" type="text/css" href="css-reg/animate-custom.css" />
        <link rel="stylesheet" type="text/css" href="css/telaInicialAluno.css" />
        <link rel="shortcut icon" href="css/logo2.png" />

        <script src="js/jquery-1.10.1.js"></script>
       
        <link href="css/blitzer/jquery-ui-1.10.3.custom.css" rel="stylesheet">      
        <script src="js/jquery-ui-1.10.3.custom.js"></script>
        <script src="js/jquery.validate.js"></script>
        <script src="js/autenticacao.js"></script>
        <script src="js/additional-methods.js"></script>
        
    
    </head>
    <body>
        <div>
            <div id='navigation'>
                <ul>
                    <li class='active'><a href='telaInicialAluno.php'><span>Inicio</span></a></li>
                    <li><a href='#'><span>Perfil</span></a></li>
                    <li><a href='logado/EstudeAqui.php'><span>Comece a estudar</span></a></li>
                    <li class='last'><a href='#'><span>Game</span></a></li>  
                    <li class='welcome'><p><span>Bem Vindo, <?=$usuario?></span></p></li>               
                </ul>
                <a href="telaInicialAluno.php" class="logo"></a>
            </div>

            <!--<div id="div-content">
                <div id="menu-lateral">
                    <br/><div style="margin-left: 20px; font-family: cursive; font-size: 22px;">Confira aqui suas estatísticas:</div><br/>
                    <div><img src="logado/img/lapis.png"></div><br/><br/>
                    <div><img src="logado/img/lapis.png"></div><br/><br/>
                    <div><img src="logado/img/lapis.png"></div>
                </div>                
                
            </div>-->
        </div>
    </body>
</html>
