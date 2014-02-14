<?php
    include("./includes/info_logado.php");
    
    $usuario = "$nome $sobrenome";    
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Bem Vindo</title>
         <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
     
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
        <script>
            $(document).ready(function(){
                $("#logout").click(function(){
                    window.location = "logout.php";
                });
            });
        </script>
        
    
    </head>
    <body>
        <div>
            <div id='navigation'>
                <ul>
                    <li><a href='telaInicialProfessor.php'><span>Inicio</span></a></li>
                    <li><a href='cadastroPerguntas.php'><span>Conteúdo</span></a></li>
                    <li class='active'><a href='InfAlunos.php'><span>Alunos</span></a></li>
                    <li><a href='EstudeAqui.php'><span>Comece a estudar</span></a></li>
                    <li class='last'><a href='game.php'><span>Game</span></a></li>  
                    <li class='welcome'><p><span>Bem Vindo, <?=$usuario?><img src="img/logout.png" id="logout" style="width: 16px; height: 16px"></span></p></li>               
                </ul>
                <a href="#" class="logo"></a>
            </div>

        </div>
    </body>
</html>
