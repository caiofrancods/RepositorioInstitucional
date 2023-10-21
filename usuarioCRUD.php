<?php
include_once "banco.php";

function inserirUsuario($nome, $cpf, $email, $lattes, $linkedin, $senha) {
    try{
        $conexao = criarConexao();
        $senha = md5($senha);
        $sql = "INSERT INTO Usuario(nome, cpf, email, lattes, linkedin, user, senha) VALUES(:nome, :cpf, :email, :lattes, :linkedin, :user, :senha);";
        $sentenca = $conexao->prepare($sql);
        $sentenca->bindValue(':nome', $nome); 
        $sentenca->bindValue(':cpf', $cpf); 
        $sentenca->bindValue(':email', $email); 
        $sentenca->bindValue(':lattes', $lattes); 
        $sentenca->bindValue(':linkedin', $linkedin); 
        $sentenca->bindValue(':senha', $senha); 
        
        $sentenca->execute();
        $id = $conexao->lastInsertId();
             
        $conexao = null;    
        return $id;
    }catch (PDOException $erro){
        echo ($erro);
        return 0;
    }
}

function consultarUsuario($id) {
    try{
        $conexao = criarConexao();
        $sql = "SELECT * FROM Usuario WHERE id = :id;";
        $sentenca = $conexao->prepare($sql);
        $sentenca->bindValue(':id', $id); 
        $sentenca->execute();
             
        $conexao = null;    
        return $sentenca->fetch();
    }catch (PDOException $erro){
        echo ($erro);
        return 0;
    }
}

// function atualizarUsuario($id, $nome, $email,  $cpf, $linkedin, $lattes, $nomeUsuario) {
//     global $conn;
    
//     $sql = "UPDATE usuarios SET nome = ?, email = ?,  cpf = ?, lattes = ?, linkedin = ?, nomeUsuario = ? WHERE id = ?";
//     $stmt = $conn->prepare($sql);
    
//     if ($stmt) {
//         $stmt->bind_param("ssi", $nome, $email, $cpf, $nomeUsuario, $linkedin, $lattes, $id);
//         if ($stmt->execute()) {
//             return true; // Atualização bem-sucedida
//         } else {
//             return false; // Erro ao atualizar o usuário
//         }
//         $stmt->close();
//     } else {
//         return false; // Erro na preparação da consulta
//     }
// }

function excluirUsuario($id) {
    try{
        $sql = "DELETE FROM Usuario WHERE idUsuario = :id;";

        $conexao = criarConexao();

        $sentenca = $conexao->prepare($sql);
        $sentenca->bindValue(':id', $id); 
    
        $sentenca->execute(); 
        $conexao = null;
        return $sentenca->rowCount();
    }catch (PDOException $erro){
        echo ($erro);
        return 0;
    }
}
?>

