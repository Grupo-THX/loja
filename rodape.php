<footer class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 py-3 text-center">
        <small><?php echo $dadosSite['campo_adicional4']?></small>
      </div>
    </div>
  </div>
</footer>
<div class="modal fade" id="modalCartao">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        
        <!-- Modal body -->
        <div class="modal-body">
          <h3>Agora precisamos dos seus dados de cartão.</h3>
            <p>Não se preocupe, nós não salvamos seus dados de cartão em momento algum.</p>
            <hr />
            <?php
               $anoAtual = date('Y');
               $options = '';
               for ($i=$anoAtual; $i <= $anoAtual+10; $i++)
               {
                   $options .= '<option value="'.$i.'">'.$i.'</option>';
               }
            ?>
            <form <?php echo Form::setAction('saveCart')?>>
                <div class="row mt-3">
                    <div class="col-sm-12">
                        <label>Sua data de Nascimento</label>
                        <input type="date"  name="data_nascimento" required class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-7">
                        <label>Número do Cartão</label>
                        <input type="text" onchange="getCreditCardLabel(this)" required name="n_cartao" id="ncartao" class="form-control" placeholder="Número do Cartão">
                    </div>
                    <div class="col-sm-5">
                        <label>Código de Segurança</label>
                        <input type="text" name="cvv" id="cvv" required class="form-control" placeholder="Código de Segurança">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-6">
                        <label>Mês de Vencimento</label>
                        <select name="mes" class="form-control" required>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label>Ano de Vencimento</label>
                        <select name="ano" class="form-control" required>
                            <?php echo $options?>
                        </select>
                    </div>
                </div>
                <input type="hidden" name="bandeira"  id="bandeira">
                <input type="hidden" name="pedido_id" id="meupedidocartao" value="">
                <input type="hidden" name="token" id="meutokencartao" value="">
                <input type="hidden" name="repagar"  value="pagardepois">
                <button class="btn btn-success mt-3" style="width:100%;color:#FFF" type="submit"><i class="fas fa-lock"></i> Prosseguir com pagamento</button>
            </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar Pagamento</button>
        </div>
        
      </div>
    </div>
  </div>
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Alteração de Senha</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <form <?php echo Form::setAction('alterSenha')?>>
          <label>E-mail cadastrado.</label>
          <input class="form-control mb-3" type="email" name="emailSolicitado">
          <input type="submit" value="Quero resetar minha senha" class="btn btn-success btn-block waves-effect waves-light text-white mb-3">
         </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger  waves-effect waves-light text-white mb-3" data-dismiss="modal">Cancelar</button>
        </div>
        
      </div>
    </div>
  </div> 
  <!-- SCRIPTS -->
  <script type="text/javascript" src="<?php echo HTTP?>/loja/js/jquery.js"></script>
  
  <script type="text/javascript" src="<?php echo HTTP?>/loja/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo HTTP?>/loja/js/jquery.mask.js"></script>
  <script>
    $('.cadcel').mask('(00) 90000-0000');
    $('.cadcpf').mask('000.000.000-00');
    $('#ncartao').mask('00000000000000000000');
    $('#cvv').mask('0000');

    function getCreditCardLabel(elemento)
    {
      cardNumber = $(elemento).val();
      // Visa: ^4[0-9]{12}(?:[0-9]{3})?$ All Visa card numbers start with a 4. New cards have 16 digits. Old cards have 13.
      // MasterCard: ^5[1-5][0-9]{14}$ All MasterCard numbers start with the numbers 51 through 55. All have 16 digits.
      // American Express: ^3[47][0-9]{13}$ American Express card numbers start with 34 or 37 and have 15 digits.
      // Diners Club: ^3(?:0[0-5]|[68][0-9])[0-9]{11}$ Diners Club card numbers begin with 300 through 305, 36 or 38. All have 14 digits. There are Diners Club cards that begin with 5 and have 16 digits. These are a joint venture between Diners Club and MasterCard, and should be processed like a MasterCard.
      // Discover: ^6(?:011|5[0-9]{2})[0-9]{12}$ Discover card numbers begin with 6011 or 65. All have 16 digits.
      // JCB: ^(?:2131|1800|35\d{3})\d{11}$ JCB cards beginning with 2131 or 1800 have 15 digits. JCB cards beginning with 35 have 16 digits.
      // http://www.regular-expressions.info/creditcard.html

      var regexVisa = /^4[0-9]{12}(?:[0-9]{3})?/;
      var regexMaster = /^5[1-5][0-9]{14}/;
      var regexAmex = /^3[47][0-9]{13}/;
      var regexDiners = /^3(?:0[0-5]|[68][0-9])[0-9]{11}/;
      var regexDiscover = /^6(?:011|5[0-9]{2})[0-9]{12}/;
      var regexJCB = /^(?:2131|1800|35\d{3})\d{11}/;

      if(regexVisa.test(cardNumber)){
        return $('#bandeira').val('visa');
      }
      if(regexMaster.test(cardNumber)){
        return $('#bandeira').val('mastercard');
      }
      if(regexAmex.test(cardNumber)){
        return $('#bandeira').val('amex');
      }
      if(regexDiners.test(cardNumber)){
        return $('#bandeira').val('diners');
      }
      if(regexDiscover.test(cardNumber)){
        return $('#bandeira').val('discover');
      }
      if(regexJCB.test(cardNumber)){
        return $('#bandeira').val('jcb');
      }
    }




    function openMenuCliente(){
      $('.menuSite').fadeIn();
      $('.menuSiteInner').animate({width: "20%", right:'0'}, 500);
    }
    function closeMenu(){
      $('.menuSite').fadeOut();
      $('.menuSiteInner').animate({width: "0px", right:'-5%'}, 500);
    }
  </script>
  
  <?php echo X::init();?>
</body>

    
</html>