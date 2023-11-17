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
       <h3 class="text-center">Pesquisar</h3>
       <form class="form-signin" id="formulario" action="pesquisaAvancada.php" method="POST">
        <div class="separate">
            <div class="form-row">
              <div class="form-group col-md-12 mt-4">
                  <label for="pesquisaTitulo">Título do trabalho</label>
                  <input type="text" id="pesquisaTitulo" name="pesquisaTitulo" class="form-control" placeholder="Título" required>
                </div>
              <div class="form-group col-md-12 mt-2">
                <button type="submit" class="btn btn-primary">Pesquisar</button>
              </div>
            </div>

          </div>
        </div>
      </form>
      </div>
    </div>
  </div>  
</body>

</html>

