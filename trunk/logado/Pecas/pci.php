<!DOCTYPE html>
<?php
require '../includes/banco.php';
$query = "SELECT * FROM comp_pc WHERE nome = 'PCI'";
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
        <div id="conteudo">
            <div id="slideshow">
                <ul class="slides">
                    <li><img src="img/slider/pci1.jpg" width="320" height="240" alt="Marsa Alam" /></li>
                    <li><img src="img/slider/pci2.jpg" width="320" height="240" alt="Turrimetta Beach" /></li>
                    <li><img src="img/slider/pci3.jpg" width="320" height="240" alt="Power Station" /></li>
                    <li><img src="img/slider/pci4.jpg" width="320" height="240" alt="Colors of Nature" /></li>
                </ul>
                <span class="arrow previous"></span>
                <span class="arrow next"></span>
            </div>
            <!--<div>TODO write content</div>-->
            <?php while ($linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC)): ?>
                <div> <?php echo $linha['desc']; ?> </div>
            <?php endwhile; ?>
        </div>
    </body>
</html>