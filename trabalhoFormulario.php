<!DOCTYPE html>
<html>

<head>
  <?php include_once "geral/head.php" ?>
  <title>Cadastro</title>
</head>

<body>
  <div class="cont">
  <?php include_once "geral/menu.php";
    if(!isset($_SESSION['dadosUsuario'])){
      echo "<script>alert('Faça login primeiro!'); location.href='login.php';</script>"; 			
    }
    ?>
    <div class="corpo">
      <form action="trabalhoSalvar.php" method="POST" enctype="multipart/form-data">
        <h6>Dados Pessoais</h6>
        <div class="separate">
          <div class="form-row">
              <input type="text" id="usuario" name="usuario" class="d-none" value="<?php echo $dadosUsuario[0]; ?>" required>
              <div class="form-group col-md-4">
                  <label for="autor">Nome Autor</label>
                  <input type="text" id="autor" name="autor" class="form-control" placeholder="John" required>
              </div>
              <div class="form-group col-md-4">
                  <label for="orientador">Nome Orientador</label>
                  <input type="text" id="orientador" name="orientador" class="form-control" placeholder="John" required>
              </div>
              <div class="form-group col-md-4">
                <label for="dataPublicacao">Data de Publicação</label>
                <input type="date" id="dataPublicacao" name="dataPublicacao" class="form-control" placeholder="John" required>
              </div>
             <div class="form-group col-md-12">
                <label for="titulo">Título do trabalho</label>
                <input type="text" id="titulo" name="titulo" class="form-control" placeholder="John" required>
              </div>
          </div>
          <div class="form-row">
              <div class="form-group col-md-4">
                <label for="instituicao">Instituição</label>
                  <select id="instituicao" name="instituicao" class="form-control" required>
                      <option selected hidden>Escolha...</option>
                      <option value="1">CEFET-MG</option>
                  </select>
              </div>
              <div class="form-group col-md-4">
                <label for="campus">Campus</label>
                  <select id="campus" name="campus" class="form-control" required>
                      <option selected hidden>Escolha...</option>
                      <option value="">Araxá</option>
                      <option value="">Nova Suíça</option>
                      <option value="">Nova Gameleira</option>
                      <option value="">Gameleira</option>
                      <option value="">Contagem</option>
                      <option value="">Curvelo</option>
                      <option value="">Divinópolis</option>
                      <option value="">Leopoldina</option>
                      <option value="">Nepomuceno</option>
                      <option value="">Timóteo</option>
                      <option value="">Varginha</option>
                  </select>
              </div>
              <div class="form-group col-md-4">
                <label for="area">Área de Pesquisa</label>
                  <select id="area" name="area" class="form-control" required>
                      <option selected hidden>Escolha...</option>
                      <option value="">Engenharia</option>
                      <option value="">Matemática</option>
                      <option value="">Física</option>
                      <option value="">Química</option>
                      <option value="">Biologia</option>
                      <option value="">Ciências Humanas</option>
                      <option value="">Ciências Sociais</option>
                      <option value="">Educação</option>
                      <option value="">Artes</option>
                  </select>
              </div>
             <label for="arquivo">Selecione um arquivo:</label>
        <input type="file" name="arquivo" id="arquivo">
          </div>
        </div>
        <div class="">
          <div class="form-row">

          </div>
        </div>
        <div class="form-row d-flex justify-content-end">
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
    </div>
  </div>  
</body>

</html>
