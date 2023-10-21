<!DOCTYPE html>
<html>

<head>
  <?php include_once "geral/head.php" ?>
  <title>Cadastro</title>
</head>

<body>
  <div class="cont">
    <?php include_once "geral/menu.php" ?>
    <div class="corpo">
      <form action="trabalhoSalvar.php" method="POST">
        <h6>Dados Pessoais</h6>
        <div class="separate">
          <div class="form-row mb-4">
              <div class="form-group col-md-4">
                  <label for="nome">Nome Completo</label>
                  <input type="text" id="nome" class="form-control" placeholder="John" required>
              </div>
              <div class="form-group col-md-4">
                  <label for="cpf">CPF</label>
                  <input type="text" id="cpf" class="form-control" required>
              </div>
              <div class="form-group col-md-4">
                  <label for="email">E-mail</label>
                  <input type="text" id="email" class="form-control" placeholder="John" required>
              </div>
             <div class="form-group col-md-6">
                  <label for="lattes">Link para currículo Lattes</label>
                  <input type="text" id="lattes" class="form-control"  required>
              </div>
             <div class="form-group col-md-6">
                  <label for="linkedin">Link para LinkedIn</label>
                  <input type="text" id="linkedin" class="form-control"  required>
              </div>
          </div>
          <h6>Informações de Usuário</h6>
          <div class="form-row separate">
            <div class="form-group col-md-12">
                <label for="senha">Senha</label>
                <input type="text" id="senha" class="form-control"  required>
            </div>
        </div>
        <div class="">
          <div class="form-row">

          </div>
        </div>
        <div class="form-row d-flex justify-content-center">
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
    </div>
  </div>  
</body>

</html>

