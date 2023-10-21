<?php
include_once "usuarioCRUD.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT); // Hash da senha para segurança
    
    // Insira os dados do usuário no banco de dados
    $sql = "INSERT INTO usuarios (nome, email, senha, cpf, linkedin, lattes, nomeUsuario) VALUES (?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("sss", $nome, $email, $senha, $cpf, $linkedin, $lattes, $nomeUsuario);
        if ($stmt->execute()) {
            echo "Usuário cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar o usuário: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Erro na preparação da consulta: " . $conexao->error;
    }
    
    $conexao->close();
}
?>