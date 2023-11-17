<!DOCTYPE html>
<html>

<head>
  <?php include_once "geral/head.php" ?>
  <title>Minha Conta</title>
</head>
  
<body>
  <?php include_once "geral/menu.php";
    if(!isset($_SESSION['dadosUsuario'])){
      echo "<script>alert('Faça login primeiro!'); location.href='login.php';</script>"; 			
    }
  ?>
  <div class="corpo">
     <div class="form-row mb-4">
              <div class="form-group col-md-4">
                  <label for="contaNome">Nome Completo</label>
                  <input type="text" id="contaNome" class="form-control" value="<?php echo $dadosUsuario['nome']?>" required readonly>
              </div>
              <div class="form-group col-md-4">
                  <label for="contaEmail">E-mail</label>
                  <input type="text" id="contaEmail" class="form-control" value="<?php echo $dadosUsuario['email'];?>" required readonly>
              </div>
              <?php 
               include_once "usuarioCRUD.php";
               $user = consultarUsuario($dadosUsuario["idUsuario"]);
              ?>
              <div class="form-group col-md-4">
                  <label for="contaCpf">CPF</label>
                  <input type="text" id="contaCpf" class="form-control" value="<?php echo $user['cpf'];?>" required readonly>
              </div>
              <div class="form-group col-md-6">
                  <label for="lattes">Link para currículo Lattes</label>
                  <input type="text" id="lattes" class="form-control" placeholder="John" value="<?php echo $user['lattes'];?>" required readonly>
              </div>
              <div class="form-group col-md-6">
                  <label for="linkedin">Link para LinkedIn</label>
                  <input type="text" id="linkedin" class="form-control" value="<?php echo $user['linkedin'];?>" required readonly>
              </div>
          </div>
  <form class="form-row d-flex justify-content-end" action="sair.php">
          <button type="submit" class="btn btn-danger">Sair</button>
  </form>
   </div>
  </div>  
</body>

</html>

