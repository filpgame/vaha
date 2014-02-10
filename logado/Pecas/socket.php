<!DOCTYPE html>
<?php 
require("../includes/banco.php");
$query = "SELECT * FROM comp_pc WHERE nome = 'harddisk'";
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
            <div id="slideshow">
                <ul class="slides">
                    <li><img src="img/slider/sata1.jpg" width="320" height="240" alt="Marsa Alam" /></li>
                    <li><img src="img/slider/sata2.jpg" width="320" height="240" alt="Turrimetta Beach" /></li>
                    <li><img src="img/slider/sata3.jpg" width="320" height="240" alt="Power Station" /></li>
                    <li><img src="img/slider/sata4.jpg" width="320" height="240" alt="Colors of Nature" /></li>
                </ul>
                <span class="arrow previous"></span>
                <span class="arrow next"></span>
            </div>
        <!--<div>SATA é a porta de conexão para Dispositivos de armazenamento em Massa (HDs, DVDs, etc) mais moderninhos.. Está em sua versão III, transfere até 6Gbps por Segundo (veja tabela de nomenclaturas)</div>-->
        <?php while ($linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC)): ?>
                <div> <?php echo $linha['desc']; ?> </div>
            <?php endwhile; ?>
    </div>
        </body>
</html>
