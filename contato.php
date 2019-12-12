<?php
    require_once realpath(dirname(__FILE__).'/source/models/EmailModel.php');
?>

<!doctype html>
<html lang="pt-br" class="h-100">

<head>
    <?php require_once 'shared/head.php' ?>
    <title>Sparrow-events - Contato</title>
</head>

<body class="d-flex flex-column h-100">
    <?php require_once 'shared/nav.php' ?>

    <div class="row">
        <div class="container-fluid">
            <iframe style="width: 100%; border:0;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.136535527182!2d-40.06054458564583!3d-19.40650582725366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb628aa4674e73f%3A0xb1e5bd7adb87b443!2sSenai!5e0!3m2!1spt-BR!2sbr!4v1574807320127!5m2!1spt-BR!2sbr"
                height="234" frameborder="0" allowfullscreen=""></iframe>
        </div>
    </div>

    <main role="main" class="flex-shrink-0 mb-5">
        <div class="container">
            <form id="formContato" method="POST" class="needs-validation" novalidate>
                <input type="hidden" name="formContato" value="contato">                
                <div class="row">
                    <div class="col-sm-12">
                        <fieldset>
                            <legend>Formulário de contato</legend>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nome">Nome</label>
                                        <input value="Maria Joaquina" name="nome" type="text" class="form-control" id="nome" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input name="email" value="weltoncastoldi1@gmail.com" type="email" class="form-control" id="email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefone">Telefone celular</label>
                                        <input name="telefone" value="27999771198" type="text" class="form-control celular_ddd"
                                            id="telefone" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="assunto">Assunto</label>
                                        <input value="assunto de teste" name="assunto" type="text" class="form-control" id="assunto" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="mensagem">Mensagem</label>
                                        <textarea name="mensagem" type="text" class="form-control" id="mensagem"
                                            required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button id="btnEnviar" type="submit" class="btn btn-success">Enviar mensagem</button>
                                    <button type="reset" class="btn btn-link">Limpar formulário</button>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <?php require_once 'shared/footer.php' ?>
    <?php require_once 'shared/scripts.php' ?>
    <script src="assets/js/services/contatoService.js"></script>
</body>

</html>