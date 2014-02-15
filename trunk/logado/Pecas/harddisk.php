<!DOCTYPE html>
<?php
require '../includes/banco.php';

//mysqli_set_charset($conn, 'utf8');
//ini_set('default_charset', 'UTF-8');

$query = "SELECT * FROM comp_pc WHERE nome = 'Disco Rígido'";
$resultado = mysqli_query($conn, $query);
?>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div>
            <iframe frameborder="0" height="240" width="320" allowFullScreen webkitallowfullscreen="true" mozallowfullscreen="true" src="https://sketchfab.com/nm5lkh20ba?autostart=1&transparent=0&autospin=1&controls=1"></iframe>
        </div>
        <?php while ($linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC)): ?>
            <div> <?php echo $linha['desc']; ?> </div>
        <?php endwhile; ?>
        <!-- <div></div> -->
    </body>
</html>
