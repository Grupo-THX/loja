<?php require_once("topo.php") ?>
<div class="jumbotron color-grey-light">
      <div class="d-flex align-items-center h-100">
        <div class="container  py-5">
          <div class="row">
            <div class="col-sm-4">
              <img src="https://em-desenvolvimento.com/bonitripas/assets/img/logo.png">
            </div>
            <div class="col-sm-4 text-center">
              <h3 class="mb-0">Cadastro</h3>
            </div>
            <div class="col-sm-4 text-right">
              <a href="javascript:openMenuCliente()" style="font-size: 20pt;"><i class="fas fa-bars"></i></a>
            </div>
        </div>
      </div>
    </div>

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main>
    <div class="container">
      <!--Section: Block Content-->
      <div class="mb-4">
      <div class="row"> <!--/col-md-6-->
          <!-- === right content === -->
            <div class="col-md-8 offset-md-2 mb-4">
                <div class="login-wrapper card">
                    <div class="card-body">
                        <div class="white-block">
                                <!--signup-->
                            <div class="login-block login-block-signup">
                                <h1>Cadastro</h1>
                                <hr>
                                <form action="minha-conta.php">
                                    <div class="row">
                                        <div class="col-md-6 col">
                                            <div class="form-group">
                                                <input type="text" value="" class="form-control" placeholder="Nome*" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col">
                                            <div class="form-group">
                                                <input type="text" value="" class="form-control" placeholder="Sobrenome*" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col">
                                            <div class="form-group">
                                                <input type="email" value="" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col">
                                            <div class="form-group">
                                                <input type="password" value="" class="form-control" placeholder="Telefone">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col">
                                            <div class="form-group">
                                                <input type="text" value="" class="form-control" placeholder="CPF">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-block waves-effect waves-light text-white mb-3"><i class="fa fa-address-card"></i> Cadastrar</button>
                                        </div>
                                    </div>
                                </form>
                            </div> <!--/signup-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <!--Section: Block Content-->
      </div>
    </div>
  </main>
<?php require_once("rodape.php") ?>