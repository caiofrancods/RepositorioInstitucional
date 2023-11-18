<?php
  session_start();
  if(isset($_SESSION['dadosUsuario'])){
    $dadosUsuario = $_SESSION['dadosUsuario'];		
  }
?>

<div class="cabecalho d-flex justify-content-between align-items-center">
  <div class="cabecalho d-flex justify-content-between align-items-center">
    <div class="dropdown">
      <button class="dropbtn">|||</button>
      <div class="dropdown-content">
        <a href="pesquisar.php">Filtros</a>
        <a href="trabalhoFormulario.php">Enviar Trabalho</a>
        <a href="sobreIC.php">Sobre a Iniciação Científica</a>
        <div class="dropdown-divider"></div>
        <a href="minhaConta.php">Minha Conta</a>
        <a href="login.php">Entrar</a>
        <a href="usuarioFormulario.php">Criar Conta</a>
        <div class="dropdown-divider"></div>
        <a href="ajuda.php">Ajuda</a>
      </div>
    </div>
    <div>
      <a href="index.php"><h6 class="text-white ml-4 mt-2">Repositório Institucional</h6><a>
    </div>
  </div>
  <div class="cabecalho d-flex justify-content-between align-items-center">
    <?php if(isset($_SESSION['dadosUsuario'])){
      $dadosUsuario = $_SESSION['dadosUsuario'];
      if(isset($dadosUsuario['avatar'])){
        $avatar = $dadosUsuario['avatar'];
        if($avatar == 1){
          echo '<a href="minhaConta.php"><img src="imagens/ciencia.png" alt="foto padrao" class="logo"></a>';
        }else if($avatar == 2){
          echo '<a href="minhaConta.php"><img src="imagens/cientista.png" alt="foto padrao" class="logo"></a>';
        }else if($avatar == 3){
          echo '<a href="minhaConta.php"><img src="imagens/cientista_masc.png" alt="foto padrao" class="logo"></a>';
        }else{
          echo '<a href="minhaConta.php"><img src="imagens/usuarioPadrao.png" alt="foto padrao" class="logo"></a>';
        }
      }else{
        echo '<a href="minhaConta.php"><img src="imagens/usuarioPadrao.png" alt="foto padrao" class="logo"></a>';
      }
      
    }else{
      echo '<a href="minhaConta.php"><img src="imagens/usuarioPadrao.png" alt="foto padrao" class="logo"></a>';
    }?>
    
  </div>
</div>