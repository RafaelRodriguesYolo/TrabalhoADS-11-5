-- criar base de dados --
CREATE DATABASE padariabarba;
-- criar tabela de produtos, com FK tipo --
CREATE TABLE produto(
    idproduto INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR( 30 ) NOT NULL,
    perecivel INT NOT NULL,
    valor DECIMAL( 10, 2 ) NOT NULL,
    id_tipo INT NOT NULL,
    
    FOREIGN KEY(id_tipo) REFERENCES tipoproduto(idtipo)
);
-- criar tabela tipo produtos --
CREATE TABLE tipoproduto(
    idtipo INT AUTO_INCREMENT PRIMARY KEY, 
    nome_tipo VARCHAR(30) NOT NULL
);
-- criar tabela de usuário da loja --
CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(60) NOT NULL,
    email VARCHAR(100) NOT NULL,
    senha VARCHAR(32) NOT NULL,
    chave VARCHAR(20) NOT NULL
);