<!DOCTYPE html>
<html>

<head>
  <?php include_once "geral/head.php" ?>
  <title>Minha Conta</title>
</head>
  
<body>
  <div class="cont">
    <?php include_once "geral/menu.php";
    if(!isset($_SESSION['dadosUsuario'])){
      echo "<script>alert('Faça login primeiro!'); location.href='login.php';</script>"; 			
    }
    ?>
     <div class="form-row mb-4">
              <div class="form-group col-md-4">
                  <label for="contaNome">Nome Completo</label>
                  <input type="text" id="contaNome" class="form-control" required readonly>
              </div>
              <div class="form-group col-md-4">
                  <label for="contaEmail">E-mail</label>
                  <input type="text" id="contaEmail" class="form-control" required readonly>
              </div>
              <div class="form-group col-md-4">
                  <label for="contaCpf">CPF</label>
                  <input type="text" id="contaCpf" class="form-control" required readonly>
              </div>
              <div class="form-group col-md-6">
                  <label for="lattes">Link para currículo Lattes</label>
                  <input type="text" id="lattes" class="form-control" placeholder="John" required readonly>
              </div>
              <div class="form-group col-md-6">
                  <label for="linkedin">Link para LinkedIn</label>
                  <input type="text" id="linkedin" class="form-control" required readonly>
              </div>
          </div>
          <h6>Informações de Usuário</h6>
          <div class="form-row separate">
            <div class="form-group col-md-12">
              <label for="contaUsuario">Nome Usuário</label>
              <input type="text" id="contaUsuario" class="form-control" placeholder="John" required readonly>
            </div>
          </div>
   </div>
  </div>  
</body>

</html>

