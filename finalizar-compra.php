<?php require_once("topo.php");
Cart::checkCarrinho(HTTP.'/index.php');
Cliente::checkLogin('login.php');
$resumo = Cart::getProdutosFinalizarEntrega();
?>
  <!--Main Navigation-->
  <!--Main Navigation-->

  <!--Main layout-->
  <main>
    <div class="container">
      <!--Section: Block Content-->
      <form <?php echo Form::setAction('setRevisarPedido')?> class="checkout-form">
      <div class="mb-4">
      <div class="row">
          <!-- === left content === -->
          <div class="col-md-6 mb-4">
              <!-- === login-wrapper === -->
              <div class="login-wrapper card">
                <div class="card-body">
                    <div class="white-block">
                        <!--signup-->
                        <div class="login-block login-block-signup">
                            <h1>Dados de Entrega</h1>
                            <p><em>Preencha corretamente os dados abaixo para prosseguir com sua compra. Ao digitar o CEP seu endereço irá ser carregado automaticamente.</em></p>
                            <hr>
                            <div class="row">
                                <div class="col-md-10 col">
                                    <div class="form-group">
                                        <input class="form-control" <?php echo Form::getInput('clientes_cep')?> placeholder="CEP" required>
                                    </div>
                                </div>
                                
                                <div class="col-2">
                                    <img class="loader_x" style="display: none" src="img/loader.gif" alt="">
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <select <?php echo Form::getInput('clientes_estado')?>>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <select  <?php echo Form::getInput('clientes_cidade')?>>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <input class="form-control" <?php echo Form::getInput('clientes_bairro')?> placeholder="Bairro" required>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input class="form-control" <?php echo Form::getInput('clientes_endereco')?> placeholder="Endereço" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input class="form-control" <?php echo Form::getInput('clientes_numero')?> placeholder="Nº">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control"<?php echo Form::getInput('clientes_complemento','',false)?> placeholder="Complemento">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" <?php echo Form::getInput('clientes_destinatario','',false)?> placeholder="Destinatário">
                                    </div>
                                </div>
                                
                            </div>
                        </div> <!--/signup-->
                    </div>
                </div>
              </div> <!--/login-wrapper-->
          </div> <!--/col-md-6-->
          <!-- === right content === -->
          <div class="col-md-6 mb-4">
              <div class="white-block card">
                <div class="card-body"> <!-- TODO -->
                    <h1>Método de entrega</h1>
                    <p><em>Escolha o método de entrega para sua compra, aqui você visualiza o valor e o tempo que seu produto irá levar para chegar em você.</em></p>
                    <hr>
                    <div class="" id="fretes">
                      <div class="single-method">
                        O frete será carregado automaticamente após o preenchimento do CEP
                      </div>
                    </div>
                    <h1>Método de pagamento</h1>
                    <hr>
                    <?php echo L::getGateways()?>                  
                  <hr>
                  <h1 class="mb-3">Resumo</h1>
                    <form action="finalizar-compra.php">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 linha_total_x">
                          <div>
                            <strong>Itens</strong>
                          </div>
                          <?php echo $resumo['list']?>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 linha_total_x mb-3">
                          <div>
                            <h4>
                              <strong>Subtotal</strong>
                            </h4>
                          </div>
                          <span><strong>R$ <?php echo U::moeda($resumo['total'], ',')?></strong></span>
                        </li>
                      </ul>

                      <button type="submit" class="btn btn-success btn-block waves-effect waves-light text-white mb-3"><i class="fa fa-check"></i> Finalizar Compra</button>
                      <button type="submit" class="btn btn-primary btn-block waves-effect waves-light text-white"><i class="fa fa-cart-plus"></i> Continuar Comprando</button>
                    </form>
                </div>
              </div>
          </div>
        </div>
      </form>
      <!--Section: Block Content-->
      </div>
    </div>
  </main>
  <!--Main layout-->

  <!-- SCRIPTS -->
  <script type="text/javascript" src="<?php echo HTTP?>/loja/js/jquery.js"></script>
  <script type="text/javascript">	
		
		$(document).ready(function () {		
			$.getJSON('estados_cidades.json', function (data) {
				var items = [];
				var options = '<option value="">escolha um estado</option>';
				$.each(data, function (key, val) {
					options += '<option value="' + val.nome + '">' + val.nome + '</option>';
				});					
				$("#estados").html(options);
				$("#estados").change(function () {
					var options_cidades = '';
					var str = "";
					$("#estados option:selected").each(function () {
						str += $(this).text();
					});					
					$.each(data, function (key, val) {
						if(val.nome == str) {							
							$.each(val.cidades, function (key_city, val_city) {
                options_cidades += '<option value="' + val_city + '">' + val_city + '</option>';
							});
						}
					});
					$("#cidades").html(options_cidades);
        }).change();
			});
		});
	</script>
  <script type="text/javascript" src="<?php echo HTTP?>/loja/bootstrap/js/bootstrap.min.js"></script>
<?php require_once("rodape.php") ?>