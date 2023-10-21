-- Dropa o banco de dados RepositorioInstitucional se já existir
DROP DATABASE IF EXISTS RepositorioInstitucional;

-- Cria um novo banco de dados RepositorioInstitucional
CREATE DATABASE RepositorioInstitucional CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Usar o banco de dados recém-criado
USE RepositorioInstitucional;

-- Criação das tabelas
CREATE TABLE Usuario (
    idUsuario INT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    cpf VARCHAR(255) NOT NULL UNIQUE,
    lattes VARCHAR(500) NOT NULL,
    linkedin VARCHAR(500) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

CREATE TABLE Trabalho (
    idTrabalho INT PRIMARY KEY,
    usuario INT NOT NULL,
    nomeAutor VARCHAR(255) NOT NULL,
    nomeOrientador VARCHAR(255) NOT NULL,
    dataPublicacao DATE NOT NULL,
    instituicao VARCHAR(255) NOT NULL,
    campus VARCHAR(255) NOT NULL,
    area VARCHAR(100) NOT NULL,
    titulo VARCHAR(100) NOT NULL,
    arquivo VARCHAR(100) NOT NULL,
    OREIGN KEY (usuario) REFERENCES Usuario(idUsuario)
);