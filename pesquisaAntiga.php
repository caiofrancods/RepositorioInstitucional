<?php

include_once 'trabalhoCRUD.php';
$trabalhos = listarAntigos();

?>

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
       <h3 class="text-center">Filtros</h3>
       <div class="separate">
         <div>
          <div class="form-row mb-4 d-flex justify-content-center">
            <a href="pesquisar.php" class="btn btn-primary">Mais Recentes</a>
            <a href="pesquisaAntiga.php" class="btn btn-primary ml-4">Mais Antigoss</a>
          </div>
          <div class="row corpo">
            <?php
              foreach($trabalhos as $registro){
                echo '<div class="col-2">
                  <div class="card bg-light mb-3 mb-3">
                    <div class="card-header">'.$registro['nomeAutor'].'</div>
                    <div class="card-body">
                      <b><p class="card-title d-flex wrap">'.$registro['titulo'].'</p></b>
                      <p><a href="vertrabalho.php?arquivo=' . urlencode($registro['arquivo']) . '" target="_blank">Acesse o trabalho</a></p>
                    </div>
                  </div> 
                </div>';
              }?>
          </div>
        </div>
      </div>
    </div>
  </div>  
</body>

</html>

