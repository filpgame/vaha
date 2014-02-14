<!DOCTYPE html>
<?php
require '../includes/banco.php';
mysqli_set_charset($conn, 'utf8');
ini_set('default_charset', 'UTF-8');
$query = "SELECT * FROM comp_pc WHERE nome = 'Chipset Norte'";
$resultado = mysqli_query($conn, $query);
?>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet">
        <script type="text/javascript" src="../../js/jquery-1.10.1.js"></script>
        <link rel="stylesheet" type="text/css" href="css/slides.css" />
        <script src="js/slide.js"></script>
    </head>
    <body>
        <div id="slideshow">
            <ul class="slides">
                <li> <img src="img/slider/chipsetnorte1.jpg" width="320" height="240"/> </li>
                <li> <img src="img/slider/chipsetnorte2.jpg" width="320" height="240"/> </li>
                <li> <img src="img/slider/chipsetnorte3.jpg" width="320" height="240"/> </li>
                <li> <img src="img/slider/chipsetnorte4.jpg" width="320" height="240"/> </li>
            </ul>
            <span class="arrow previous"></span>
            <span class="arrow next"></span>
        </div>
        <!-- <div>Chipset norte é o irmão mais esperto... Cuida dos componentes que mais rápidos (PCI-e, Memória RAM, Processador)</div> -->
        <?php while ($linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC)): ?>
            <div> <?php echo $linha['desc']; ?> </div>
        <?php endwhile; ?>
    </body>
</html>
