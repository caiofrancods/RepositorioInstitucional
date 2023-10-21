<?php

include_once 'trabalhoCRUD.php';
$trabalhos = listar();

?>

<html>
  <head>
    <?php include_once "geral/head.php"?>
    <title>Inicial</title>
  </head>
  <body> 
    <?php include_once "geral/menu.php";?>
    <div class="row corpo">
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
    </div>
    
</div>
