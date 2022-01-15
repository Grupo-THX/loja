<?php require_once("topo.php");
?>


  <!--Main layout-->
  <main>
    <div class="container">
      <!--Section: Block Content-->
        <div class="mb-4">
        <div class="row">
          <!-- === left content === -->
            <div class="col-md-8 offset-md-2 mb-4">
              <!-- === login-wrapper === -->
                <div class="login-wrapper card" style="height: auto ">
                    <div class="card-body">
                        <div class="white-block">
                            <!--signup-->
                            <div class="login-block login-block-signup">
                                <h1 >Login</h1>
                                <hr>

                                <form id="formulario_login_cadastro" <?php echo Form::setAction('decideLoginCadastro')?> method="POST">
                                    <div class="row">
                                        <div class="col-md-12 col">
                                            <div class="form-group">
                                                <input type="email" value="" onchange="validaEmail(this)" name="clientes_email" id="cliente_email" class="form-control" placeholder="Email" required>
                                            </div>
                                        </div>                                   
                                        <div class="col-md-12" id="retornaConteudo">
                                          
                                        </div>
                                        
                                    </div>
                                    <div class="" id="retorna-login" >
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
  <!--Main layout-->

  <!-- SCRIPTS -->
  
  <script>
      function senha(){
          $('#password').fadeIn();
      }
      function cad(){
          $('#cad').fadeIn();
      }
  </script>
<?php require_once("rodape.php") ?>