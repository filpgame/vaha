<!DOCTYPE html>
<?php
require '../includes/banco.php';
$query = "SELECT * FROM comp_pc WHERE nome = 'harddisk'";
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
            <iframe frameborder="0" height="240" width="320" allowFullScreen webkitallowfullscreen="true" mozallowfullscreen="true" src="https://sketchfab.com/64i3hge1b?autostart=1&transparent=0&autospin=1&controls=1"></iframe>
         <!--   <div>O Processador é o cara, aquele severino da escola/empresa... É responsável por todo o processamento do computador, desde o calculo de 1+1 na calculadora do sistema até manter sua musica tocando, enquanto navega na internet, com sua planilha aberta</div> -->
         <?php while ($linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC)): ?>
                <div> <?php echo $linha['desc']; ?> </div>
            <?php endwhile; ?>
        </div>   
    </body>
</html>
