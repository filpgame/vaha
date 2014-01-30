<!DOCTYPE html>
<html>
    <head>
        <script src="../js/jquery-1.10.1.js"></script>
        <link href="../css/blitzer/jquery-ui-1.10.3.custom.css" rel="stylesheet">
        <link href="css/baloon.css" rel="stylesheet">
        <script src="../js/jquery-ui-1.10.3.custom.js"></script>
        <meta charset="UTF-8">
        <style>
            #mobo{
                background-image: url('boardb.jpg');
                background-size: 800px 600px;
                background-repeat: no-repeat;
                border: 2px solid black;
                width: 800px;
                height: 600px;
            }
            .area{
                border: 2px solid white;
            }
            #processador{
                margin-left: 590px;
                margin-top: 190px;
                width: 130px;
                height: 140px;
            }
            #chipset-norte{
                margin-left: 412px;
                margin-top: -71px;
                width: 109px;
                height: 103px;
            }
            #pciexpress{
                margin-left: 307px;
                margin-top: -249px;
                width: 27px;
                height: 239px;
            }
            #sata{
                margin-left: 177px;
                margin-top: -82px;
                width: 27px;
                height: 80px;
            }
            #bateria{
                margin-left: 215px;
                margin-top: 120px;
                width: 54px;
                height: 47px;
            }
            #memoria{
                margin-left: 409px;
                margin-top: -125px;
                width: 327px;
                height: 43px;
            }
        </style>
        <script>
            $(function() {
                $(document).tooltip({
                    position: {
                        my: "center bottom-20",
                        at: "center top",
                        using: function(position, feedback) {
                            $(this).css(position);
                            $("<div>")
                                    .addClass("arrow")
                                    .addClass(feedback.vertical)
                                    .addClass(feedback.horizontal)
                                    .appendTo(this);
                        }
                    }
                });
            });

        </script>
    </head>
    <body>
        <div id="mobo">
            <div class="area" id="processador" title="Este é o processador"></div>
            <div class="area" id="chipset-norte" title="Este é o chipsetNorte"></div>
            <div class="area" id="pciexpress" title="Este é o PCI"></div>
            <div class="area" id="bateria" title="Este é o bateria"></div>
            <div class="area" id="sata" title="Este é o SATA"></div>
            <div class="area" id="memoria" title="Este é o Memoria"></div>
        </div>
    </body>
</html>
