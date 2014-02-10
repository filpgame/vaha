<!DOCTYPE html>
<?php
require '../includes/banco.php';
$query = "SELECT * FROM comp_pc WHERE nome = 'cooler'";
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
            <iframe frameborder="0" height="240" width="320" allowFullScreen src="https://sketchfab.com/64i3hg1ba?autostart=1&transparent=0&autospin=1&controls=1"></iframe> <p style="font-size: 13px; font-weight:normal; margin: 5px; color: #4a4a4a"><strong><a style="color: #1caad9;" href="http://sketchfab.com/show/05b5b369dd444510b041058eccc92f00">Rosewill CPU Cooler scale</a> from <a style="color: #1caad9;" href="http://sketchfab.com/portfolio/af674f8ecba44889a388d13d37468bbd">FelipeRodrigues</a> on <a style="color: #1caad9;" href="https://sketchfab.com">Sketchfab</a>.</strong></p>
            <!-- <div>Cooler é aquele "ventiladorzinho" (nunca diga ventilador.. há relatos de pessoas que foram demitidas e nunca mais vistas após pronunciar isso) que refrigera algum componente. Sempre terá um em cima do Processador, e outro dentro da fonte.. mas pode haver mais. O quanto você quiser, onde você quiser.</div> -->
            <?php while ($linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC)): ?>
                <div> <?php echo $linha['desc']; ?> </div>
            <?php endwhile; ?>
        </div>
    </body>
</html>
