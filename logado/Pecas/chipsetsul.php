<!DOCTYPE html>
<?php
require '../includes/banco.php';
$query = "SELECT * FROM comp_pc WHERE nome = 'chipsetsul'";
$resultado = mysqli_query($conn, $query);
?>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet">
        <script type="text/javascript" src="../../js/jquery-1.10.1.js"></script>
        <link rel="stylesheet" type="text/css" href="css/slides.css" />
        <script src="js/slide.js"></script>    </head>
    <body>  
        <div id="conteudo">
            <div id="slideshow">
                <ul class="slides">
                    <li><img src="img/slider/chipsetsul1.jpg" width="320" height="240" /></li>
                    <li><img src="img/slider/chipsetsul2.jpg" width="320" height="240" /></li>
                    <li><img src="img/slider/chipsetsul3.jpg" width="320" height="240" /></li>
                    <li><img src="img/slider/chipsetsul4.jpg" width="320" height="240" /></li>
                </ul>
                <span class="arrow previous"></span>
                <span class="arrow next"></span>
            </div>
            <!-- <div>Chipset SUL é o que gerencia os dispositivos mais lentos (PCI, Som, etc)</div> -->
            <?php while ($linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC)): ?>
                <div> <?php echo $linha['desc']; ?> </div>
            <?php endwhile; ?>
        </div>
    </body>
</html>