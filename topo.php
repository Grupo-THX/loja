<?php require_once($_SERVER['DOCUMENT_ROOT'].'/xpainel/class/config.php');

$dadosSite = X::getGerenciavel(1);
$paginas = array(
    'finalizar-compra.php' => 'Dados da compra',
    'revisar-pedido.php' => 'Revise seu Pedido',
    'carrinho.php' => 'Meu carrinho',
    'perfil.php' => 'Minha conta',
    'login.php' => 'Dados de Acesso',
    'resenha.php' => 'Alteração de senha',
    'fim.php' => 'Agradecemos sua compra',
    'index.php' => 'Meu Carrinho'
);
$title = isset($paginas[basename($_SERVER['PHP_SELF'])]) ? $paginas[basename($_SERVER['PHP_SELF'])] : 'Loja';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="<?php echo HTTP?>/loja/fontawesome/css/all.css" rel="stylesheet">
    <link href="<?php echo HTTP?>/loja/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo HTTP?>/loja/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
</head>
<body class="skin-light">
  <div class="menuSite" onclick="closeMenu()">
    <div class="menuSiteInner px-3 pt-3">
      <div class="row">
        <div class="col-sm-12 text-right">
          <a href="javascript:closeMenu()"><i class="fas fa-times"></i></a>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 mt-4 text-center">
          <a href="<?php echo HTTP?>"><img style="max-width:250px" src="<?php echo X::getParametro('logomarca')?>"></a>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 text-center mx-0 px-0">
          <nav class="mt-4">
            <ul class="p-0">
              <li><a href="<?php echo HTTP?>/produtos.php">Ver Produtos</a></li>
              <li><a href="<?php echo HTTP?>/loja/carrinho.php">Meu carrinho</a></li>
              <li><a href="<?php echo HTTP?>/loja/perfil.php">Minha Conta</a></li>
              <li><a href="<?php echo HTTP?>/loja/perfil.php">Meus Pedidos</a></li>
              <li><a href="<?php echo HTTP?>/loja/fim.php">Finalizar Compra</a></li>
              <li><a href="<?php echo HTTP?>">Voltar ao site</a></li>
              <li><a href="<?php echo HTTP?>/index.php?logoff=true">Sair</a></li>
            </ul>
          </nav>
        </div>
      </div>
      
      <div class="row informacoesCliente">        
        <div class="col-sm-12 text-center">
          <hr />
         <?php echo $dadosSite['campo_adicional1']?>
        </div>
        <div class="col-sm-12 text-center">
          <?php echo X::getParametro('emailFrom')?>
        </div>
      </div>
    </div>
  </div>
  <!--Main Navigation-->
  <header>
    <div class="jumbotron color-grey-light">
      <div class="d-flex align-items-center h-100">
        <div class="container  py-5">
          <div class="row align-items-center">
            <div class="col-sm-4 text-center">
              <a href="<?php echo HTTP?>"><img style="max-width:250px" src="<?php echo X::getParametro('logomarca')?>"></a>
            </div>
            <div class="col-sm-4 text-center">
              <h3 class="mb-0"><?php echo $title?></h3>
            </div>
            <div class="col-sm-4 text-center">
              <a href="javascript:openMenuCliente()" style="font-size: 20pt;"><i class="fas fa-bars"></i></a>
            </div>
        </div>
      </div>
    </div>

  </header>

