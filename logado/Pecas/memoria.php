<!DOCTYPE html>
<?php
require '../includes/banco.php';
mysqli_set_charset($conn, 'utf8');
ini_set('default_charset', 'UTF-8');
$query = "SELECT * FROM comp_pc WHERE nome = 'Memória RAM'";
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
            <iframe frameborder="0" height="320" width="400" src="https://sketchfab.com/64i3h2e10a?autostart=1&transparent=0&autospin=1&controls=1"></iframe> 
            <!--<div>Memória RAM é aquela pecinha magrinha e discreta encaixada na sua Placa-mãe. Serve pra armazenar tudo que tá em execução no seu Computador. Ela tem o diferencial de ser bem rápida, para poder executar seus programinhas mais rapidamente!</div>-->
            <div style="display: inline-block;">
                <p style="font-weight: bold; font-size: small;">Clique e escute a explicação<br> sobre o componente!</p>
                <audio controls style="margin-bottom: 140px;width: 217px;">
                    <source src="audio/memoria.3ga" type="audio/ogg">
                    <source src="audio/memoria.3ga" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
                <?php while ($linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC)): ?>
                <div id="explicacao-3d"> <?php echo $linha['desc']; ?> </div>
            <?php endwhile; ?>
        </div>
    </body>
</html>
