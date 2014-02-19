<!DOCTYPE html>
<?php 
require("../includes/banco.php");
mysqli_set_charset($conn, 'utf8');
ini_set('default_charset', 'UTF-8');
$query = "SELECT * FROM comp_pc WHERE nome = 'Soquete'";
$resultado = mysqli_query($conn, $query);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet">
        <script type="text/javascript" src="../../js/jquery-1.10.1.js"></script>
        <link rel="stylesheet" type="text/css" href="css/slides.css" />
        <script src="js/slide.js"></script>
    </head>
    <body>
        <div id="conteudo">
            <div id="slideshow"  style="display: inline-block;">
                <ul class="slides">
                    <li><img src="img/slider/socket1.jpg" width="320" height="240" /></li>
                    <li><img src="img/slider/socket2.jpg" width="320" height="240" /></li>
                    <li><img src="img/slider/socket3.jpg" width="320" height="240" /></li>
                    <li><img src="img/slider/socket4.jpg" width="320" height="240" /></li>
                    <li><img src="img/slider/socket5.jpg" width="320" height="240" /></li>
                    <li><img src="img/slider/socket6.jpg" width="320" height="240" /></li>
                    <li><img src="img/slider/socket7.jpg" width="320" height="240" /></li>
                    </ul>
                <span class="arrow previous"></span>
                <span class="arrow next"></span>
            </div>
            <div style="display: inline-block;">
                <p style="font-weight: bold; font-size: small;">Clique e escute a explicação<br> sobre o componente!</p>
                <audio controls style="margin-bottom: 140px;width: 217px;">
                    <source src="audio/socket.3ga" type="audio/ogg">
                    <source src="audio/socket.3ga" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
        <?php while ($linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC)): ?>
                <div id="explicacao-slide"> <?php echo $linha['desc']; ?> </div>
            <?php endwhile; ?>
    </div>
        </body>
</html>
