<?php require_once("topo.php") ?>

  <!--Main layout-->
  <main>
    <div class="container">
      <!--Section: Block Content-->
        <div class="mb-4">
        <div class="row">
          <!-- === left content === -->
            <div class="col-md-12 mb-4 text-center">
              <!-- === login-wrapper === -->
                <div class="login-wrapper card" style="height: auto">
                    <div class="card-body">
                        <div class="white-block">
                          <div class="row mb-5">
                            <?php  echo L::setPedido()?>
                          </div><!--/login-wrapper-->
                        </div>
                    </div>
                </div>
            </div> <!--/col-md-6-->
             <!--/col-md-6-->
        </div>
      <!--Section: Block Content-->
      </div>
    </div>
  </main>
  <!--Main layout-->

  <!-- SCRIPTS -->
 <?php require_once("rodape.php") ?>