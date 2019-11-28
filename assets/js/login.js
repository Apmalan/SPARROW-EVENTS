$(function () {
    'use strict';

    var loginSenha = $("#loginSenha");
    var botaoRecuperarSenha = $("#botaoRecuperarSenha");
    var botaoEntrar = $("#botaoEntrar");
    

    loginSenha.hide();
    botaoRecuperarSenha.hide();
    botaoEntrar.hide();
   

    $(document).on('click', 'input[type=radio]', function () {
        var id = $(this).prop('id');
        recuperarSenha(id);
    });

    function recuperarSenha(id) {
        switch (id) {
            case 'pf':
                $('#loginSenha label').text('CPF');
                $('#loginSenha label').prop('for', 'cpf');
                $('#loginSenha input').prop('name', 'cpf')
                    .prop('id', 'cpf')
                    .mask('000.000.000-00');

                    loginSenha.show();
                $('#loginSenha label').text('Nome')
                    .prop('for', 'nome');
                $('#dloginSenha input').prop('name', 'nome')
                    .prop('id', 'nome');

                    botaoRecuperarSenha.show();
                    botaoEntrar.hide();

                break;
            case 'pj':
                $('#loginSenhaa label').text('CNPJ');
                $('#loginSenha label').prop('for', 'cnpj');
                $('#loginSenha input').prop('name', 'cnpj')
                    .prop('id', 'cnpj')
                    .mask('00.000.000/0000-00');

                    loginSenha.show();
                $('#botaoRecuperarSenha label').text('Recuperar Senha');
                $('#botaoRecuperarSenha label').prop('for', 'razaoSocial');
                $('#botaoRecuperarSenha input').prop('name', 'razaoSocial');
                $('#botaoRecuperarSenha input').prop('id', 'razaoSocial');
                botaoRecuperarSenha.show();

                $('#botaoEntrar label').text('Nome Fantasia');
                $('#botaoEntrar label').prop('for', 'nomeFantasia');
                $('#botaoEntrara input').prop('name', 'nomeFantasia');
                $('#botaoEntrar input').prop('id', 'nomeFantasial');

                botaoEntrar.show();

                $('#botaoEntrar label').text('Nome Tel');
                $('#botaoEntrar label').prop('for', 'nomeTel');
                $('#botaoEntrar input').prop('name', 'nomeTel');
                $('#botaoEntrar input').prop('id', 'nomeTel');



                break;
            default:
                break;
        }
    }
});
