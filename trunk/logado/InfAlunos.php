<?php
include("./includes/info_logado.php");
include("./includes/banco.php");

$usuario = "$nome $sobrenome";

$query = "SELECT distinct CONCAT(us.nome,' ',us.sobrenome) as Nome, us.ID_usuario, acertos, erros, pontuacao_geral, (erros+acertos) as total_perguntas, CONCAT(ROUND((acertos)/(acertos+erros)*100,1),'%') as Razao FROM usuario us INNER JOIN Tp_usuario tpus ON (us.ID_tp_usuario = tpus.ID_tp_usuario) INNER JOIN estatiticas est ON(est.ID_usuario = us.ID_usuario) WHERE us.ID_tp_usuario = 1 and acertos > 0;";
$result = mysqli_query($conn, $query) or die("erro na consulta");
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Bem Vindo</title>
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
        <script>
            $(document).ready(function() {
                $('#logo').click(function(e) {
                    e.preventDefault();
                    window.history.pushState("","","CLICQUEI");
                });
                $(window).bind("popstate", function(e) {
                    $('#my-navigation-container').load(e.state.url);
                });
                $("#logout").click(function() {
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
                    <li class='welcome'><p><span>Bem Vindo, <?= $usuario ?><img src="img/logout.png" id="logout" style="width: 16px; height: 16px"></span></p></li>               
                </ul>
                <a href="#" id="logo" class="logo"></a>
            </div>
           <div id="principal"><br><br>
                <table border="5" style="margin: auto; width: 80%;" cellpadding= 2; cellspacing=2>
                    <tr style="height: 30px; ">
                        <td>Nome</td>
                        <td>Acertos</td>
                        <td>Erros</td>
                        <td>Pontuação</td>
                    </tr>
                    
                    <?php while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)): ?>
                    <tr style="height: 30px; ">
                        <td><?php echo $row["Nome"] ?></td>
                        <td><?php echo $row["acertos"] ?></td>
                        <td><?php echo $row["erros"] ?></td>
                        <td><?php echo $row["pontuacao_geral"] ?></td>
                    </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
    </body>
</html>
