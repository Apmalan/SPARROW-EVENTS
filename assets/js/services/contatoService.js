//Voce pode criar um evento On Submit para cada formulário ou adicionar o evento de on click
(function () {
    'use strict';
    $('#formContato').on("submit", function (event) {
        event.preventDefault();
        console.log($('#formContato').serialize());
        $.ajax({
            url: "contato.php",
            method: "POST",
            data: $('#formContato').serialize(),
            beforeSend: function () {
                $("#btnEnviar").html('<span class="spinner-border spinner-border-sm"></span> aguarde..');
            },
            success: function (retorno) { //FUNÇÃO DE CALLBACK
                console.log(retorno);
                var res = JSON.parse(retorno);

                if (res.status == 'enviado') {
                    toastr.success('Em breve estaremos entrando em contato', res['mensagem']);
                } else {
                    toastr.error(res.mensagem);
                }

            },
            error: function (request, status, error) {
                swal.fire({
                    title: '<strong>Algo deu errado</strong>',
                    icon: 'error',
                    html: "<p>Código: " + request.status + "</p><p> status: " + status + "</p><p> erro: " + error + "</p>",
                });
            },
            complete: function (data) {               
                $("#btnEnviar").html('enviar');
            }
        });
    });
})();