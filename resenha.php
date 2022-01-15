<?php require_once('topo.php');
$cliente = Cliente::getClienteByToken();?>

<main>
    <div class="container">
      <!--Section: Block Content-->
        <div class="mb-4">
        <div class="row">
          <!-- === left content === -->
            <div class="col-md-8 offset-md-2 mb-4">
              <!-- === login-wrapper === -->
                <div class="login-wrapper card">
                    <div class="card-body">
                        <div class="white-block">
                            <!--signup-->
                            <div class="login-block login-block-signup">
                                <h1 >Alteração de senha</h1>
                                <hr>

                                <form <?php echo Form::setAction('resenha')?>>
                                    <div class="row">
                                        <div class="col-md-12 col">
                                            <div class="form-group">
                                                 <input type="password" name="resenha" placeholder="INSIRA SUA NOVA SENHA" class="form-control require">
                                            </div>
                                        </div>                                   
                                        <div class="col-md-12">
                                          <input type="hidden" name="id" value="<?php echo $cliente['clientes_id']?>">
                                            <input type="hidden" name="hash" value="<?php echo $cliente['clientes_hash']?>">
                                            <button type="submit" class="btn btn-success btn-block waves-effect waves-light text-white mb-3" data-form-type="contact">ALTERAR SENHA</button>
                                        </div>
                                    </div>
                                </form>

                            </div> <!--/signup-->
                        </div>
                    </div>
                </div> <!--/login-wrapper-->
            </div> <!--/col-md-6-->
        </div>
      <!--Section: Block Content-->
      </div>
    </div>
  </main>



<?php require_once('rodape.php')?>