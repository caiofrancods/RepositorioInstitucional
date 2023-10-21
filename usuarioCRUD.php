<?php
include_once "banco.php";

function inserirUsuario($nome, $cpf,$linkedin, $lattes, $email, $senha, $nomeUsuario) {
    global $conn;
    
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO usuarios (nome, email, senha, linkedin, lattes, cpf) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("sss", $nome, $email, $senhaHash,  $cpf, $linkedin, $lattes, $nomeUsuario);
        if ($stmt->execute()) {
            return true; // Inserção bem-sucedida
        } else {
            return false; // Erro ao inserir o usuário
        }
        $stmt->close();
    } else {
        return false; // Erro na preparação da consulta
    }
}

function consultarUsuario($id) {
    global $conn;
    
    $sql = "SELECT * FROM usuarios WHERE id = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        
        if ($row) {
            return $row; // Retorna os dados do usuário
        } else {
            return null; // Usuário não encontrado
        }
        $stmt->close();
    } else {
        return null; // Erro na preparação da consulta
    }
}

function atualizarUsuario($id, $nome, $email,  $cpf, $linkedin, $lattes, $nomeUsuario) {
    global $conn;
    
    $sql = "UPDATE usuarios SET nome = ?, email = ?,  cpf = ?, lattes = ?, linkedin = ?, nomeUsuario = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("ssi", $nome, $email, $cpf, $nomeUsuario, $linkedin, $lattes, $id);
        if ($stmt->execute()) {
            return true; // Atualização bem-sucedida
        } else {
            return false; // Erro ao atualizar o usuário
        }
        $stmt->close();
    } else {
        return false; // Erro na preparação da consulta
    }
}

function excluirUsuario($id) {
    global $conn;
    
    $sql = "DELETE FROM usuarios WHERE id = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            return true; // Exclusão bem-sucedida
        } else {
            return false; // Erro ao excluir o usuário
        }
        $stmt->close();
    } else {
        return false; // Erro na preparação da consulta
    }
}
?>

