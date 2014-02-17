<!DOCTYPE html>
<?php
require '../includes/banco.php';
mysqli_set_charset($conn, 'utf8');
ini_set('default_charset', 'UTF-8');
$query = "SELECT * FROM comp_pc WHERE nome = 'Cooler'";
$resultado = mysqli_query($conn, $query);
?>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div id="conteudo">
            <iframe frameborder="0" height="320" width="400" allowFullScreen src="https://sketchfab.com/64i3hg1ba?autostart=1&transparent=0&autospin=1&controls=1"></iframe>
            <!-- <div>Cooler é aquele "ventiladorzinho" (nunca diga ventilador.. há relatos de pessoas que foram demitidas e nunca mais vistas após pronunciar isso) que refrigera algum componente. Sempre terá um em cima do Processador, e outro dentro da fonte.. mas pode haver mais. O quanto você quiser, onde você quiser.</div> -->
            <?php while ($linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC)): ?>
                <div id="explicacao-3d"> <?php echo $linha['desc']; ?> </div>
            <?php endwhile; ?>
        </div>
    </body>
</html>
