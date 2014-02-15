<!DOCTYPE html>
<?php
require '../includes/banco.php';
mysqli_set_charset($conn, 'utf8');
ini_set('default_charset', 'UTF-8');
$query = "SELECT * FROM comp_pc WHERE nome = 'Memória RAM'";
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
            <iframe frameborder="0" height="240" width="320" src="https://sketchfab.com/64i3h2e10a?autostart=1&transparent=0&autospin=1&controls=1"></iframe> 
            <!--<div>Memória RAM é aquela pecinha magrinha e discreta encaixada na sua Placa-mãe. Serve pra armazenar tudo que tá em execução no seu Computador. Ela tem o diferencial de ser bem rápida, para poder executar seus programinhas mais rapidamente!</div>-->
            <?php while ($linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC)): ?>
                <div> <?php echo $linha['desc']; ?> </div>
            <?php endwhile; ?>
        </div>
    </body>
</html>
