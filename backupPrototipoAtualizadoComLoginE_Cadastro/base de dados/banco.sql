CREATE DATABASE IF NOT EXISTS IFSP;
USE IFSP;

DROP TABLE IF EXISTS Usuario;
DROP TABLE IF EXISTS Genero;
DROP TABLE IF EXISTS Tamanho;
DROP TABLE IF EXISTS Loja;
DROP TABLE IF EXISTS Peca;

CREATE TABLE Usuario(
    CPF VARCHAR(11) NOT NULL,
    Nome VARCHAR(255) NOT NULL,
    Sobrenome VARCHAR(255) NOT NULL,
    Cidade VARCHAR(50) NOT NULL,
    Senha VARCHAR(20) NOT NULL,
    Telefone VARCHAR(11) NOT NULL,
    Email Varchar(255) NOT NULL,
    Nascimento DATE NOT NULL,
    PRIMARY KEY (CPF)
);

CREATE TABLE Genero(
    NomeGenero VARCHAR(255) NOT NULL
);

CREATE TABLE Tamanho(
    Camiseta VARCHAR(3),
    Calca VARCHAR(2),
    Calcado VARCHAR(2)
);
CREATE TABLE Loja(
    NomeLoja VARCHAR(255) NOT NULL,
    Endereco VARCHAR(255) NOT NULL,
    CNPJ VARCHAR(11) NOT NULL,
    NomeDono VARCHAR(20) NOT NULL,
    TelefoneLoja VARCHAR(11) NOT NULL,
    EmailLoja Varchar(255) NOT NULL,
    PRIMARY KEY (CNPJ)
);

CREATE TABLE Peca(
    IdPeca INT NOT NULL AUTO_INCREMENT,
    Descricao VARCHAR(255) NOT NULL,
    Tecido VARCHAR(255) NOT NULL,
    PalavraChave VARCHAR(50) NOT NULL,
    Imagem VARCHAR(255) NOT NULL,
    Troca VARCHAR(255) NOT NULL,
    EmailLoja Varchar(255) NOT NULL,
    TamanhoPeca VARCHAR(4),
    PRIMARY KEY (IdPeca)
);


INSERT INTO Genero(NomeGenero) VALUES
    ("Feminino"),("Masculino"),("Nao binario"),("Outro"),("Prefiro nao informar");

INSERT INTO Tamanho(Camiseta) VALUES
("PP"),("P"),("M"),("G"),("GG"),("XGG"), ("G1"),("G2"),("G3"),("G4");

INSERT INTO Tamanho(Calca) VALUES
("34"),("36"),("38"),("40"),("42"),("46"),("48");

INSERT INTO Tamanho(Calcado) VALUES
("33"),("34"),("35"),("36"),("37"),("38"),("39"),("40"),("41"),("42"),("43"),("44"),("45"),("46"),("47"),("48");
