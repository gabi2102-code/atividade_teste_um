-- Cria um banco de dados chamado sistema_simples
CREATE DATABASE sistema_simples;

-- Seleciona o banco de dados que será utilizado
USE sistema_simples;

-- Cria a tabela usuario
CREATE TABLE usuario (

    -- Identificador único do usuário
    id INT AUTO_INCREMENT PRIMARY KEY,

     -- Campo para armazenar o nome de usuário
    usuario VARCHAR(255) NOT NULL,
     -- Campo para armazenar a senha
    senha VARCHAR(255) NOT NULL
);
-- Insere um usuário de teste na tabela
INSERT INTO usuario (usuario, senha) VALUE ('admin','123');