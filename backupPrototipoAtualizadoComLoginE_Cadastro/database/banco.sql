CREATE DATABASE IF NOT EXISTS IFSP;
USE IFSP;

DROP TABLE IF EXISTS Usuario;
DROP TABLE IF EXISTS Genero;
DROP TABLE IF EXISTS Tamanho;

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

INSERT INTO Genero(NomeGenero) VALUES
    ("Feminino"),("Masculino"),("Nao binario"),("Outro"),("Prefiro nao informar");

INSERT INTO Tamanho(Camiseta) VALUES
("PP"),("P"),("M"),("G"),("GG"),("XGG"), ("G1"),("G2"),("G3"),("G4");

INSERT INTO Tamanho(Calca) VALUES
("34"),("36"),("38"),("40"),("42"),("46"),("48");

INSERT INTO Tamanho(Calcado) VALUES
("33"),("34"),("35"),("36"),("37"),("38"),("39"),("40"),("41"),("42"),("43"),("44"),("45"),("46"),("47"),("48");