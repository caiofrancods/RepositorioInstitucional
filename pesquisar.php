<!DOCTYPE html>
<html>

<head>
  <?php include_once "geral/head.php" ?>
  <title>Pesquisa Avançada</title>
</head>

<body>
  <div class="cont">
    <?php include_once "geral/menu.php" ?>
    <div class="corpo">
       <div class="separate">
          <div class="form-row">
              <div class="form-group col-md-6">
                  <label for="pesquisaAutor">Nome Autor</label>
                  <input type="text" id="pesquisaAutor" class="form-control" placeholder="John" required>
              </div>
              <div class="form-group col-md-6">
                <label for="pesquisaData">Data de Publicação</label>
                <input type="text" id="pesquisaData" class="form-control" placeholder="John" required>
              </div>
            <div class="form-group col-md-12">
                <label for="pesquisaTitulo">Título do trabalho</label>
                <input type="text" id="pesquisaTitulo" class="form-control" placeholder="John" required>
              </div>
          </div>
       
          </div>
        </div>
    </div>
  </div>  
</body>

</html>

