-- Dropa o banco de dados RepositorioInstitucional se já existir
DROP DATABASE IF EXISTS RepositorioInstitucional;

-- Cria um novo banco de dados RepositorioInstitucional
CREATE DATABASE RepositorioInstitucional CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Usar o banco de dados recém-criado
USE RepositorioInstitucional;

-- Criação das tabelas
CREATE TABLE Usuario (
    idUsuario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    cpf VARCHAR(255) NOT NULL UNIQUE,
    lattes VARCHAR(500) NOT NULL,
    linkedin VARCHAR(500) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    avatar INT NOT NULL
);

CREATE TABLE Trabalho (
    idTrabalho INT AUTO_INCREMENT PRIMARY KEY,
    usuario INT NOT NULL,
    nomeAutor VARCHAR(255) NOT NULL,
    nomeOrientador VARCHAR(255) NOT NULL,
    dataPublicacao DATE NOT NULL,
    instituicao VARCHAR(255) NOT NULL,
    campus VARCHAR(255) NOT NULL,
    area VARCHAR(100) NOT NULL,
    titulo VARCHAR(100) NOT NULL,
    arquivo VARCHAR(100) NOT NULL,
    FOREIGN KEY (usuario) REFERENCES Usuario(idUsuario)
);


-- Inserir alguns dados na tabela Usuario
INSERT INTO Usuario (nome, email, cpf, lattes, linkedin, senha, avatar) VALUES
    ('João Silva', 'joao.silva@example.com', '12345678901', 'https://lattes.com/joao', 'https://linkedin.com/joao', '202cb962ac59075b964b07152d234b70', 1),
    ('Maria Santos', 'maria.santos@example.com', '98765432101', 'https://lattes.com/maria', 'https://linkedin.com/maria', '202cb962ac59075b964b07152d234b70', 2),
    ('Pedro Alves', 'pedro.alves@example.com', '45678912301', 'https://lattes.com/pedro', 'https://linkedin.com/pedro', '202cb962ac59075b964b07152d234b70', 4);

-- Inserir alguns dados na tabela Trabalho
INSERT INTO Trabalho (usuario, nomeAutor, nomeOrientador, dataPublicacao, instituicao, campus, area, titulo, arquivo) VALUES
    (1, 'João Silva', 'Professor A', '2023-01-15', 'Universidade A', 'Campus A', 'Engenharia', 'Título 1', 'arquivo1.pdf'),
    (2, 'Maria Santos', 'Professor B', '2023-02-20', 'Universidade B', 'Campus B', 'Matemática', 'Título 2', 'arquivo2.pdf'),
    (3, 'Pedro Alves', 'Professor C', '2023-03-25', 'Universidade C', 'Campus C', 'Física', 'Título 3', 'arquivo3.pdf');
