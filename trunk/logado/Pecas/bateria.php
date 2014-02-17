<!DOCTYPE html>
<?php
require '../includes/banco.php';

mysqli_set_charset($conn, 'utf8');
ini_set('default_charset', 'UTF-8');

$query = "SELECT * FROM comp_pc WHERE nome = 'Bateria'";
$resultado = mysqli_query($conn, $query);
?>
<html>
    <head>
        <link href="style.css" rel="stylesheet">
        <script type="text/javascript" src="../../js/jquery-1.10.1.js"></script>
        <link rel="stylesheet" type="text/css" href="css/slides.css" />
        <script src="js/slide.js"></script>
    </head>
    <body>
        <div id="conteudo">
            <div id="slideshow">
                <ul class="slides">
                    <li><img src="img/slider/bateria1.jpg" width="320" height="240" alt="Marsa Alam" /></li>
                    <li><img src="img/slider/bateria2.jpg" width="320" height="240" alt="Turrimetta Beach" /></li>
                    <li><img src="img/slider/bateria3.jpg" width="320" height="240" alt="Power Station" /></li>
                    <li><img src="img/slider/bateria4.jpg" width="320" height="240" alt="Colors of Nature" /></li>
                </ul>
                <span class="arrow previous"></span>
                <span class="arrow next"></span>
            </div>
            <!--<div>Você pode pensar: "Pra que uma bateria de relógio num computador enorme desses?" É interessante a pergunta, pra manter o computador ligado quando cair a luz que não é. Ele é responsável por manter na ativa as informações importantes do computador (como configurações da BIOS, informaçoes do CMOS e até mesmo o relógio)  </div> -->
            <?php while ($linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC)): ?>
                <div id="explicacao-slide"> <?php echo $linha['desc']; ?> </div>
            <?php endwhile; ?>
        </div>
    </body>
</html>
