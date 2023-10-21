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
      <form action="usuarioSalvar.php" method="POST">
        <h6>Dados Pessoais</h6>
        <div class="separate">
          <div class="form-row mb-4">
              <div class="form-group col-md-4">
                  <label for="nome">Nome Completo</label>
                  <input type="text" id="nome" name="nome" class="form-control" required>
              </div>
              <div class="form-group col-md-4">
                  <label for="cpf">CPF</label>
                  <input type="text" id="cpf" name="cpf" class="form-control" required>
              </div>
              <div class="form-group col-md-4">
                  <label for="email">E-mail</label>
                  <input type="text" id="email" name="email" class="form-control" required>
              </div>
             <div class="form-group col-md-6">
                  <label for="lattes">Link para currículo Lattes</label>
                  <input type="text" id="lattes" name="lattes" class="form-control" required>
              </div>
             <div class="form-group col-md-6">
                  <label for="linkedin">Link para LinkedIn</label>
                  <input type="text" id="linkedin" name="linkedin" class="form-control" required>
              </div>
          </div>
          <h6>Informações de Usuário</h6>
          <div class="form-row separate">
            <div class="form-group col-md-12">
                <label for="senha">Senha</label>
                <input type="text" id="senha" name="senha" class="form-control" required>
            </div>
        </div>
        <div class="">
          <div class="form-row d-flex justify-content-center mb-4 mt-4 rounded">
            <label for="senha">Escolha o Avatar</label> 
          </div>
          <div class="form-row d-flex justify-content-center mb-4 mt-4 rounded"> 
            <img src="imagens/ciencia.png" alt="avatar cientista">
            <img class="ml-4" src="imagens/cientista.png" alt="avatar cientista">
            <img class="ml-4" src="imagens/cientista_masc.png" alt="avatar cientista">
          </div>
        </div>
        <div class="form-group col-md-12">
          <label for="campus">Avatar</label>
            <select id="avatar" name="avatar" class="form-control" required>
                <option selected hidden>Escolha...</option>
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="4">Nenhum</option>
            </select>
        </div>
        <div class="form-row d-flex justify-content-center">
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
    </div>
  </div>  
</body>

</html>
