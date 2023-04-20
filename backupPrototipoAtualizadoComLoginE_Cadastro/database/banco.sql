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
    CaminhoImg varchar(255) NOT NULL,
    PRIMARY KEY (CPF)
);

CREATE TABLE Genero(
    NomeGenero VARCHAR(255) NOT NULL
);

-----

-- SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
-- START TRANSACTION;
-- SET time_zone = "+00:00";




-- CREATE TABLE Teste(
--    idImg INT NOT NULL AUTO_INCREMENT,
--    CaminhoImg varchar(255) NOT NULL,
--    PRIMARY KEY (IdImg)
--  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




-- -- INSERT INTO `teste` (`id`, `nome`, `descricao`, `caminho_img`) VALUES
-- -- (1, 'Lara', 'aluna', './uploads/1681157450.png'),
-- -- (2, 'Joao', 'GTA', './uploads/1681158114.png');

-- ALTER TABLE Teste
--   ADD PRIMARY KEY ("ID");

--   ALTER TABLE Teste
--   MODIFY "ID" int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT= 3;
-- COMMIT;

-----

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