<?php require_once("topo.php");
Cliente::checkLogin('login.php');
?>

  <!--Main layout-->
  <main>
    <div class="container">
      <!--Section: Block Content-->
      <div class="mb-4">
      <div class="row">
                    <div class="col-12 col-sm-12 col-xs-12 col-md-3 col-lg-3 my-4">
                        <h5>Olá, <strong><?php echo Cliente::getDado('clientes_nome')?></strong>.
                        <small><?php echo Cliente::getDado('clientes_email')?></small></h5>
                        <hr />
                        <div class="list-group">
                          
                          <a onclick="trocaActive(this)" href="javascript:getTodosPedidos()" class="list-group-item list-group-item-action"><span><i class="fa fa-list"></i></span> Meus Pedidos</a>
                          <a onclick="trocaActive(this)" href="javascript:getAlterDadosForm()" class="list-group-item list-group-item-action"><span><i class="fa fa-user"></i></span> Alterar Dados</a>
                          <a href="<?php echo HTTP?>/index.php?logoff=true" class="list-group-item list-group-item-action"><span><i class="fa fa-times"></i></span> Sair</a>
                          
                        </div>
                    </div>
                    <div id="listaDePedidos" class="col-12 col-sm-12 col-xs-12 col-lg-9 col-md-9 my-4">
                         <?php echo L::getPedidosPerfil()?>
                    </div>
                    <div class="alterDados" style="display: none;">
                        <div class="login-register-form-wrap">
                            <h3>Alterar Meus Dados</h3>
                            <form <?php echo Form::setAction('alterCadastro')?> id="setCli" autocomplete="off">
                                <div class="row">
                                    <div class="col-md-12 col-12 mb-2">
                                        <input type="text" class="form-control"  readonly onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly'); this.blur(); this.focus();  }" value="<?php echo Cliente::getDado('clientes_nome')?>" name="clientes_nome" placeholder="Nome completo">
                                    </div>
                                    <div class="col-md-4 col-12 mb-2">
                                        <input type="email" class="form-control" readonly onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly'); this.blur(); this.focus();  }" autocomplete="false" name="clientes_email" value="<?php echo Cliente::getDado('clientes_email')?>" placeholder="Email">

                                    </div>
                                    <div class="col-md-4 col-12 mb-2">
                                        <input type="text" class="form-control cadcel" readonly onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly'); this.blur(); this.focus();  }" autocomplete="false" value="<?php echo Cliente::getDado('clientes_telefone')?>" name="clientes_telefone" placeholder="Celular">
                                    </div>
                                    <div class="col-md-4 col-12 mb-2">
                                        <input type="text" class="form-control cadcpf" readonly onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly'); this.blur(); this.focus();  }" autocomplete="false" value="<?php echo Cliente::getDado('clientes_cpf')?>" name="clientes_cpf" placeholder="Celular">
                                    </div>
                                    <div class="col-md-6 col-12 mb-2">
                                        <input id="senha" class="form-control" readonly onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly'); this.blur(); this.focus();  }" type="password" name="clientes_senha" placeholder="Senha">
                                    </div>
                                    <div class="col-md-6 col-12 mb-2">
                                        <input id="resenha" class="form-control" type="password" readonly onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly'); this.blur(); this.focus();  }" placeholder="Confirmar Senha">
                                    </div>
                                    <div class="col-md-12 col-12 mb-2">
                                        <p style="display: none;" id="aviso" class="alert alert-danger"></p>
                                    </div>
                                    <div class="col-md-12 col-12">
                                    	<button type="submit" onclick=" return confirmaSenha()" class="btn btn-success btn-block waves-effect waves-light text-white mb-3"><i class="fa fa-user"></i> Alterar meus dados</button>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>       
                    <div class="todosPedidos" style="display: none">
                        <?php echo L::getPedidosPerfil(1)?>
                    </div>
                </div>
      <!--Section: Block Content-->
      </div>
    </div>
  </main>
  <!--Main layout-->

  <!-- SCRIPTS -->
  
  <script>
    function menu(botao) {
        var c = document.getElementById("seccoes").children;
        var i = 0;
        for(i=0; i<= c.length; i++){
            if(c[i]!=null && c[i].id != 's'+botao.id)       
            {
                c[i]    .style.display='none';
            } 
            else{
                $(c[i]).fadeIn();
            }
        }
    }
  </script>
<?php require_once("rodape.php") ?>