<!DOCTYPE html>
<?php
require '../includes/banco.php';
mysqli_set_charset($conn, 'utf8');
ini_set('default_charset', 'UTF-8');
$query = "SELECT * FROM comp_pc WHERE nome = 'Disco Rígido'";
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
            <iframe frameborder="0" height="320" width="400" allowFullScreen webkitallowfullscreen="true" mozallowfullscreen="true" src="https://sketchfab.com/nm5lkh20ba?autostart=1&transparent=0&autospin=1&controls=1"></iframe>

            <?php while ($linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC)): ?>
                <div id="explicacao-3d"> <?php echo $linha['desc']; ?> </div>
            <?php endwhile; ?>
        </div>
    </body>
</html>
