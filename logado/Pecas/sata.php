<!DOCTYPE html>
<?php
require '../includes/banco.php';
mysqli_set_charset($conn, 'utf8');
ini_set('default_charset', 'UTF-8');
$query = "SELECT * FROM comp_pc WHERE nome = 'SATA'";
$resultado = mysqli_query($conn, $query);
?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet">
        <script type="text/javascript" src="../../js/jquery-1.10.1.js"></script>
        <link rel="stylesheet" type="text/css" href="css/slides.css" />
        <script src="js/slide.js"></script>
    </head>
    <body>
        <div id="conteudo">
            <div id="slideshow" style="display: inline-block;">
                <ul class="slides">
                    <li><img src="img/slider/sata1.jpg" width="320" height="240" alt="Marsa Alam" /></li>
                    <li><img src="img/slider/sata2.jpg" width="320" height="240" alt="Turrimetta Beach" /></li>
                    <li><img src="img/slider/sata3.jpg" width="320" height="240" alt="Power Station" /></li>
                    <li><img src="img/slider/sata4.jpg" width="320" height="240" alt="Colors of Nature" /></li>
                </ul>
                <span class="arrow previous"></span>
                <span class="arrow next"></span>
            </div>
       <!-- <div>SATA é a porta de conexão para Dispositivos de armazenamento em Massa (HDs, DVDs, etc) mais moderninhos.. Está em sua versão III, transfere até 6Gbps por Segundo (veja tabela de nomenclaturas)</div> -->
       <div style="display: inline-block;">
                <p style="font-weight: bold; font-size: small;">Clique e escute a explicação<br> sobre o componente!</p>
                <audio controls style="margin-bottom: 140px;width: 217px;">
                    <source src="audio/sata.3ga" type="audio/ogg">
                    <source src="audio/sata.3ga" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
           <?php while ($linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC)): ?>
                <div id="explicacao-slide"> <?php echo $linha['desc']; ?> </div>
            <?php endwhile; ?>
    </div>
        </body>
</html>
