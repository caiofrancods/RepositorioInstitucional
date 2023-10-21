<html>
  <head>
    <?php include_once "geral/head.php" ?>
    <title>Inicial</title>
  </head>
  <body> 
    <?php include_once "geral/menu.php";?>
    <div class="row corpo">
      <?php
        for($i = 0; $i < 18; $i++){?>
          <div class="col-2">
            <div class="card bg-light mb-3 mb-3">
              <div class="card-header">Autor</div>
              <div class="card-body">
                <h5 class="card-title">Título</h5>
                <p class="card-text">Resumo...</p>
              </div>
            </div> 
          </div>
        <?}?>
    </div>
    
</div>
