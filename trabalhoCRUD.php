<?php

include_once "banco.php";
function salvar($autor, $orientador, $dataPublicacao, $instituicao, $campus, $area, $titulo, $arquivo){
  
  try{
      $conexao = criarConexao();

      // if($idPessoa > 0){
      //     $sql = "UPDATE TbPessoa SET nomeAutor = :autor, nomeOrientador = :orientador,  dataPublicacao = :dataPublicacao WHERE idPessoa = :idPessoa;";
      //     $sentenca = $conexao->prepare($sql);
      //     $sentenca->bindValue(':idPessoa', $idPessoa); 
      //     $sentenca->bindValue(':nome', $nome); 
      //     $sentenca->bindValue(':cpf', $cpf); 
      //     $sentenca->bindValue(':email', $email); 
      //     $sentenca->execute();
      // }else{
      $sql = "INSERT INTO TbPessoa(autor, orientador, dataPublicacao, instituicao, campus, area, titulo, arquivo) VALUES(:autor, :orientador, :dataPublicacao, :instituicao, :campus, :area, :titulo, :arquivo);";
      $sentenca = $conexao->prepare($sql);
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
      // }
      $conexao = null;    
      return $idPessoa;
    
  }catch (PDOException $erro){
      criarArquivoErro($erro);
      return 0;
  }
}

function excluir($id){
  try{
      $sql = "DELETE FROM TbPessoa WHERE idTrabalho = :idTrabalho;";

      $conexao = criarConexao();

      $sentenca = $conexao->prepare($sql);
      $sentenca->bindValue(':idTrablho', $id); 
  
      $sentenca->execute(); 
      $conexao = null;
      return $sentenca->rowCount();
    
  }catch (PDOException $erro){
      criarArquivoErro($erro);
      return 0;
  }
}

 function listar(){
  try{
      $sql = "SELECT * FROM TbPessoa;";

      $conexao = criarConexao();        
      $sentenca = $conexao->prepare($sql);
  
      $sentenca->execute();     
      $conexao = null;
      return $sentenca->fetchAll();
  }catch (PDOException $erro){
      criarArquivoErro($erro);

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
      criarArquivoErro($erro);
  }
}    


?>