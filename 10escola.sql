CREATE DATABASE escola_diego;

use escola_diego;

CREATE TABLE alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(70) NOT NULL,
    idade INT NOT NULL,
    uf CHAR(2) NOT NULL,
    cidade VARCHAR(50) NOT NULL
);

INSERT INTO alunos (nome, idade, uf, cidade)
VALUES ('Diego', 16, 'SP', 'Marília'),
		('Suely', 16, 'SP', 'Bauru'),
	('João Pereira', 18, 'MG', 'Belo Horizonte');

  SELECT nome,idade, uf, cidade FROM alunos;
