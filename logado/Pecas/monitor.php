<!DOCTYPE html>
<html>
    <?php
    require '../includes/banco.php';

    mysqli_set_charset($conn, 'utf8');
    ini_set('default_charset', 'UTF-8');

    $query = "SELECT * FROM comp_pc WHERE nome = 'Monitor'";
    $resultado = mysqli_query($conn, $query);

    ?>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div id="conteudo">
            <iframe frameborder="0" height="320" width="400" allowFullScreen src="https://skfb.ly/5i3gc0a?autostart=1&transparent=0&autospin=1&controls=1"></iframe>
            <?php while ($linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC)): ?>
                <div id="explicacao-3d"> <?php echo $linha['desc']; ?> </div>
            <?php endwhile; ?>
        </div>
    </body>
</html>
