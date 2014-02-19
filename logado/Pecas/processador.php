<!DOCTYPE html>
<?php
require '../includes/banco.php';

mysqli_set_charset($conn, 'utf8');
ini_set('default_charset', 'UTF-8');

$query = "SELECT * FROM comp_pc WHERE nome = 'Processador'";
$resultado = mysqli_query($conn, $query);
?>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div id="conteudo">
            <iframe frameborder="0" height="320" width="400" allowFullScreen webkitallowfullscreen="true" mozallowfullscreen="true" src="https://sketchfab.com/64i3hge1b?autostart=1&transparent=0&autospin=1&controls=1"></iframe>
         <!--   <div>O Processador é o cara, aquele severino da escola/empresa... É responsável por todo o processamento do computador, desde o calculo de 1+1 na calculadora do sistema até manter sua musica tocando, enquanto navega na internet, com sua planilha aberta</div> -->
         <div style="display: inline-block;">
                <p style="font-weight: bold; font-size: small;">Clique e escute a explicação<br> sobre o componente!</p>
                <audio controls style="margin-bottom: 140px;width: 217px;">
                    <source src="audio/processador.3ga" type="audio/ogg">
                    <source src="audio/processador.3ga" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
             <?php while ($linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC)): ?>
                <div id="explicacao-3d"> <?php echo $linha['desc']; ?> </div>
            <?php endwhile; ?>
        </div>   
    </body>
</html>
