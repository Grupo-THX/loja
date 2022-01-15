<?php require_once("topo.php");
Cart::checkCarrinho(HTTP.'/loja/carrinho.php');
$carrinho = Cart::getCarrinho();
?>

  <!--Main layout-->
  <main>
    <div class="container">
      <!--Section: Block Content-->
      <section class="mt-5 mb-4">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          
                <?php echo Cart::listaRevisaoDePedido()?>               
                
            <!-- Card -->

            <!-- Card -->
            <!-- <div class="card mb-4">
              <div class="card-body">

                <h5 class="mb-4">Estimativa de entrega</h5>

                <p class="mb-0">06 de março de 2021</p>
              </div>
            </div>
            <div class="card mb-4">
              <div class="card-body">

                <h5 class="mb-4">Aceitamos</h5>

                <img class="mr-2" width="45px"
                  src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                  alt="Visa">
                <img class="mr-2" width="45px"
                  src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
                  alt="American Express">
                <img class="mr-2" width="45px"
                  src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
                  alt="Mastercard">
              </div>
            </div> -->
            <!-- Card -->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          
          <!--Grid column-->

</div>
        
        <!--Grid row-->

      </section>
      <!--Section: Block Content-->

    </div>
  </main>
  <!--Main layout-->

<?php require_once("rodape.php") ?>