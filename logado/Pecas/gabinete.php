<!DOCTYPE html>
<?php
    require '../includes/banco.php';
    mysqli_set_charset($conn, 'utf8');
ini_set('default_charset', 'UTF-8');
    $query = "SELECT * FROM comp_pc WHERE nome = 'Gabinete'";
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
            <iframe frameborder="0" height="240" width="320" allowFullScreen src="https://sketchfab.com/64i3h210ba?autostart=1&transparent=0&autospin=1&controls=1"></iframe>
            <!--<div>Gabinete (Conhecido também como Case, Chassis, Caixinha, ou coisa pesada) é quem protege os componentes mais sensíveis (frescos) do computador. bons gabinetes tem saídas de ar localizadas, espaço para coolers e etc.</div>-->
            <?php while ($linha = mysqli_fetch_array($resultado,MYSQLI_ASSOC)): ?>
                <div> <?php echo $linha['desc']; ?> </div>
            <?php endwhile; ?>
        </div>
    </body>
</html>
