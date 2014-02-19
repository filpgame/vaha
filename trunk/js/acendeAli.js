$(document).ready(function(){
    /* BEGIN */
    $('#processador').mouseenter(function(){
        $('#socket').css("background-color","rgba(154,205,50,0.5)");
    });

    $('#processador').mouseout(function(){
        $('#socket').css("background-color","");
    });

    $('#socket').mouseenter(function(){
        $('#processador').css("background-color","rgba(154,205,50,1)");
    });

    $('#socket').mouseout(function(){
        $('#processador').css("background-color","");
    });

    $('#sata').mouseenter(function(){
        $('#harddisk').css("background-color","rgba(154,205,50,1)");
        $('#drivecddvd').css("background-color","rgba(154,205,50, 1)");
    });

    $('#sata').mouseout(function(){
        $('#harddisk').css("background-color","");
        $('#drivecddvd').css("background-color","");
    });

    $('#pciexpress').mouseenter(function(){
        $('#placadevideo').css("background-color","rgba(154,205,50,1)");
    });

    $('#pciexpress').mouseout(function(){
        $('#placadevideo').css("background-color","");
    });

    $('#placadevideo').mouseenter(function(){
        $('#pciexpress').css("background-color","rgba(154,205,50,0.5)");
    });

    $('#placadevideo').mouseout(function(){
        $('#pciexpress').css("background-color","");
    });

    $('#ide').mouseenter(function(){
        $('#harddisk').css("background-color","rgba(154,205,50,1)");
        $('#drivecddvd').css("background-color","rgba(154,205,50, 1)");
    });

    $('#ide').mouseout(function(){
        $('#harddisk').css("background-color","");
        $('#drivecddvd').css("background-color","");
    });

    $('#harddisk').mouseenter(function(){
        $('#ide').css("background-color","rgba(154,205,50,0.5)");
    });

    $('#harddisk').mouseout(function(){
        $('#ide').css("background-color","");
    });

    $('#drivecddvd').mouseenter(function(){
        $('#ide').css("background-color","rgba(154,205,50,0.5)");
    });

    $('#drivecddvd').mouseout(function(){
        $('#ide').css("background-color","");
    });
                
                /* FIM */
});


