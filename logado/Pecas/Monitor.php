<!DOCTYPE html>
<html>
    <?php
    require '../includes/banco.php';
    $query = "SELECT * FROM comp_pc WHERE nome = 'processador'";
    $resultado = mysqli_query($conn, $query);
    ?>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div id="conteudo">
            <iframe frameborder="0" height="240" width="320" allowFullScreen src="https://skfb.ly/5i3gc0a?autostart=1&transparent=0&autospin=1&controls=1"></iframe>
            <?php while ($linha = mysqli_fetch_array($resultado,MYSQLI_ASSOC)): ?>
                <div> <?php echo $linha['desc']; ?> </div>
            <?php endwhile; ?>
        </div>
    </body>
</html>
