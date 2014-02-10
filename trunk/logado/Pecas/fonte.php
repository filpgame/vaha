<!DOCTYPE html>
<?php
require '../includes/banco.php';
$query = "SELECT * FROM comp_pc WHERE nome = 'fonte'";
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
            <iframe frameborder="0" height="240" width="320" src="https://sketchfab.com/64i3h2fc0a?autostart=1&transparent=0&autospin=1&controls=1"></iframe> 
            <!-- <div>Fonte como o nome já diz é a fonte de energia do computador, ele que pega a energia da tomada e distribui para os outros componentes. Quanto mais componentes o computador possui, maior deve ser a capacidade da Fonte</div> -->
            <?php while ($linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC)): ?>
                <div> <?php echo $linha['desc']; ?> </div>
            <?php endwhile; ?>
        </div>
    </body>
</html>
