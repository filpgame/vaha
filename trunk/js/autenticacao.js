/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
    
    $('#nome').focusin(function(){
       $('#vrf_nome').text("");
    });
    $('#sobrenome').focusin(function(){
       $('#vrf_sobrenome').text("");
    });
    $('#usuario').focusin(function(){
       $('#vrf_usuario').text("");
    });
    $('#pas').focusin(function(){
       $('#vrf_pas').text("");
    });
    $('#pas_conf').focusin(function(){
       $('#vrf_pas_conf').text("");
    });
    $('#data').focusin(function(){
       $('#vrf_data').text("");
    });
    $('#email').focusin(function(){
       $('#vrf_email').text("");
    });
    $('#telefone').focusin(function(){
       $('#vrf_telefone').text("");
    });
    $('#inst').focusin(function(){
       $('#vrf_inst').text("");
    });
    
    
    $('#env_cad').click(function() {
        if ($('#nome').val().length < 3) {
            $('#vrf_nome').text("*O nome deve ter mais que 3 letras");
        }else if ($('#sobrenome').val().length < 3) {
            $('#vrf_sobrenome').text("*O sobrenome deve ter mais que 3 letras");
        }else if ($('#usuario').val() === "") {
            $('#vrf_usuario').text("*Este campo deve ser preenchido");
        }else if ($('#pas').val() === "") {
            $('#vrf_pas').text("*Este campo deve ser preenchido");
        }else if ($('#pas_conf').val() !== $('#pas').val() || $('#pas').val() === "") {
            $('#vrf_pas_conf').text("*As senhas devem ser iguais");
        }else if ($('#email').val() === "") {
            $('#vrf_email').text("*Este campo deve ser preenchido");        
        }else if ($('#data').val() === "") {
            $('#vrf_data').text("*Este campo deve ser preenchido");        
        }else if ($('#telefone').val() === "" && $('#cbox').prop("checked")) {
            $('#vrf_telefone').text("*Este campo deve ser preenchido");        
        }else if ($('#inst').val() === "" && $('#cbox').prop("checked") ) {
            $('#vrf_inst').text("*Este campo deve ser preenchido");        
        }else {
            $.ajax({
                //pegando a url apartir da action do form
                url: "cadastroUsuario.php",
                data: $("#frmcad").serialize(),
                type: 'GET',
                success: function(saida) {
                    data = JSON.parse(saida);
                    if (data.resp.status) {
                        //document.location = data.resp.local;
                        $("#modal-confirm").dialog({
                            modal: true,
                            title: "Cadastro efetuado com sucesso!",
                            width: 350,
                            buttons: {
                                Ok: function() {
                                    //$(this).dialog("close");
                                    document.location = "index.html";
                                }
                            }
                        });
                    }
                }
            });
        }
    });
});


