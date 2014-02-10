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
            <iframe frameborder="0" height="240" width="320" allowFullScreen src="https://sketchfab.com/64i3hfe1d?autostart=1&transparent=0&autospin=1&controls=1"></iframe>
           <!--  <div>Placa de vídeo é o queridinho pra quem gosta de jogar. Se instalado, ele fica responsável por todo tipo de processamento gráfico (Jogos, vídeos, imagens, etc.)</div> -->
        <?php while ($linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC)): ?>
                <div> <?php echo $linha['desc']; ?> </div>
            <?php endwhile; ?>
        </div>
    </body>
</html>
