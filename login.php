<!DOCTYPE html>
<html>

<head>
  <?php include_once "geral/head.php" ?>
  <title>Login</title>
</head>

<body>
  <div class="cont">
    <?php include_once "geral/menu.php" ?>
    <div class="corpo login">
      <form class="form-signin" id="formularioLogin">
        <h6 class="h3 mb-3 font-weight-normal text-center">Faça login</h6>
        <div class="separate">
          <div class="form-row">
              <div class="form-group col-md-6">
                  <label for="loginUsuario">E-mail</label>
                  <input type="text" id="email" name="email" class="form-control" required>
              </div>
              <div class="form-group col-md-6">
                  <label for="loginSenha">Senha</label>
                  <input type="text" id="senha" name="senha" class="form-control"  required>
              </div>
          </div>
        </div>
        <div class="form-row d-flex justify-content-center">
          <button type="submit" class="btn btn-primary">Entrar</button>
        </div>
        <a class="mt-3" href="usuarioFormulario.php">Não tem conta? Cadastre-se aqui!</a>
      </form>
    </div>
  </div>
  <script src="js/main.js"></script>
  
</body>

</html>

