<?php

include_once "banco.php";
function salvar($usuario, $autor, $orientador, $dataPublicacao, $instituicao, $campus, $area, $titulo, $arquivo){
  try{
      $conexao = criarConexao();
      $sql = "INSERT INTO Trabalho(usuario, nomeAutor, nomeOrientador, dataPublicacao, instituicao, campus, area, titulo, arquivo) VALUES(:usuario, :autor, :orientador, :dataPublicacao, :instituicao, :campus, :area, :titulo, :arquivo);";
      $sentenca = $conexao->prepare($sql);
      $sentenca->bindValue(':usuario', $usuario); 
      $sentenca->bindValue(':autor', $autor); 
      $sentenca->bindValue(':orientador', $orientador); 
      $sentenca->bindValue(':dataPublicacao', $dataPublicacao); 
      $sentenca->bindValue(':instituicao', $instituicao); 
      $sentenca->bindValue(':campus', $campus); 
      $sentenca->bindValue(':area', $area);
      $sentenca->bindValue(':titulo', $titulo);
      $sentenca->bindValue(':arquivo', $arquivo);
      $sentenca->execute();
      $idPessoa = $conexao->lastInsertId();
      $conexao = null;    
      return $idPessoa;
    
  }catch (PDOException $erro){
      echo ($erro);
      die();
  }
}

function excluir($id){
  try{
      $sql = "DELETE FROM Trabalho WHERE idTrabalho = :idTrabalho;";

      $conexao = criarConexao();

      $sentenca = $conexao->prepare($sql);
      $sentenca->bindValue(':idTrablho', $id); 
  
      $sentenca->execute(); 
      $conexao = null;
      return $sentenca->rowCount();
    
  }catch (PDOException $erro){
    echo ($erro);
      return 0;
  }
}

 function listar(){
  try{
      $sql = "SELECT * FROM Trabalho;";

      $conexao = criarConexao();        
      $sentenca = $conexao->prepare($sql);
  
      $sentenca->execute();     
      $conexao = null;
      return $sentenca->fetchAll();
  }catch (PDOException $erro){
      echo ($erro);

  }
} 

function listarAntigos(){
  try{
      $sql = "SELECT * FROM Trabalho ORDER BY dataPublicacao DESC;";

      $conexao = criarConexao();        
      $sentenca = $conexao->prepare($sql);
  
      $sentenca->execute();     
      $conexao = null;
      return $sentenca->fetchAll();
  }catch (PDOException $erro){
      echo ($erro);

  }
}  

function trabalhosPorNome($autor){
  try{
      $sql = "SELECT * FROM TbPessoa WHERE autor = :autor;";

      $conexao = criarConexao();        
      $sentenca = $conexao->prepare($sql);
      $sentenca->bindValue(':autor', $autor); 
  
      $sentenca->execute();     
      $conexao = null;
      return $sentenca->fetch();
    
  }catch (PDOException $erro){
      echo($erro);
  }
}    

function pesquisa($trabalho){
  try{
      $sql = "SELECT * FROM Trabalho WHERE LOWER(titulo) LIKE :titulo;";

      $conexao = criarConexao();        
      $sentenca = $conexao->prepare($sql);
      $sentenca->bindValue(':titulo', $trabalho); 
  
      $sentenca->execute();     
      $conexao = null;
      if($sentenca->rowCount() > 0){
        return $sentenca->fetchAll();
      }else{
        return null;
      }
    
  }catch (PDOException $erro){
      echo($erro);
  }
}    


?>