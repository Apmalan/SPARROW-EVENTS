<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-roxo">
        <a class="navbar-brand" href="#">Sparrow events</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cadastre-se.html">Cadastre-se</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Eventos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Acontecendo</a>
                        <a class="dropdown-item" href="#">Previstos</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Encerrados</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contato.html">Contato</a>
                </li>
            </ul>
            <div class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-light my-2 my-sm-0" type="button" data-toggle="modal"  data-target="#modalExemplo"><i class="fas fa-user mr-1">
                
               </i> Login</button>
            </div>
            <!-- Modal -->

        </div>
    </nav>
    <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Efetuar login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        <form name="formLogin" class="needs-validation" novalidate>
            <div class="row">
            <div class="col-sm-12">
            <div class="form-group">
                <label for="loginEmail">Email</label>
                <input name="loguinEmail" type="email" class="form-control" required>
                
</div>
</div>
</div>
<div class="row">
            <div class="col-sm-12">
            <div class="form-group">
                <label for="loginSenha">Senha</label>
                <input name="" type="password" class="form-control" required>
                
</div>
</div>
</div>
<div class="row">
            <div class="col-sm-12">
            <div class="text-right">
                <small>
                <a href="#" class="btn btn-link">Esqueci minha senha?</a>
                </small>
            
</div>
</div>
</div>


        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-block btn-primary">Entrar</button>
      </div>
      </form>
    </div>
  </div>
</div>