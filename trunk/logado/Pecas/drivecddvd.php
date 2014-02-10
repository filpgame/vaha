<!DOCTYPE html>
<?php
require '../includes/banco.php';
$query = "SELECT * FROM comp_pc WHERE nome = 'drivecddvd'";
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
            <iframe frameborder="0" height="240" width="320" allowFullScreen src="https://sketchfab.com/64i3hfe10a?autostart=1&transparent=0&autospin=1&controls=1"></iframe>
            <!-- <div>O Leitor de CD/DVD (caindo em desuso atualmente, mas ainda firme e forte!) é quem consegue ler e gravar seus cds de música, seus filmes etc. Usa as conexões SATA ou IDE para se conectar ao computador.</div> -->
            <?php while ($linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC)): ?>
                <div> <?php echo $linha['desc']; ?> </div>
            <?php endwhile; ?>
        </div>
    </body>
</html>
