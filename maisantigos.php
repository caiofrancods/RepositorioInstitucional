<?php
    include_once "trabalhoCRUD.php";
    $titulo = $_POST['pesquisaTitulo'];


    $titulos = pesquisa($titulo);

    if ($titulos != null) {
        
        foreach ($titulos as $t) {
            echo $t['nomeOrientador'];
        }
    } else {
        echo "Nenhum resultado encontrado.";
    }
?>
<?php
        foreach($trabalhos as $registro){
          echo '<div class="col-2">
            <div class="card bg-light mb-3 mb-3">
              <div class="card-header">'.$registro['nomeAutor'].'</div>
              <div class="card-body">
                <h6 class="card-title d-flex wrap">'.$registro['titulo'].'</h6>
                <p class="card-text">Resumo...</p>
              </div>
            </div> 
          </div>';
        }?>