-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 11-Dez-2020 às 23:25
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 8.0.0

USE educar_sistema;


--
-- Banco de dados: `educar_sistema`
--

-- --------------------------------------------------------


CREATE TABLE Estado
(
	idEstado INT NOT NULL,
	Nome VARCHAR(45) NOT NULL,
	CONSTRAINT pkEstado
		PRIMARY KEY (`idEstado`)
);

CREATE TABLE Cidade
(
	idCidade INT NOT NULL,
	Nome VARCHAR(45) NOT NULL,
    idEstado INT,
	CONSTRAINT pkCidade
		PRIMARY KEY (`idCidade`),
	CONSTRAINT fkEstado
		FOREIGN KEY (idEstado)
		REFERENCES Estado(idEstado)
);

CREATE TABLE Endereco
(
	idEndereco INT NOT NULL,
	Rua VARCHAR(45) NOT NULL,
    CEP VARCHAR(10) NOT NULL,
    Numero INT NOT NULL,
    Bairro VARCHAR(45) NOT NULL,
    Complemento VARCHAR(45) NOT NULL,
    idCidade INT,
	CONSTRAINT pkEndereco
		PRIMARY KEY (`idEndereco`),
	CONSTRAINT fkCidade
		FOREIGN KEY (idCidade)
		REFERENCES Cidade(idCidade)
);

CREATE TABLE Pessoa
(
	idPessoa INT NOT NULL,
	Nome VARCHAR(45) NOT NULL,
    CPF VARCHAR(45) NOT NULL,
    RG VARCHAR(45) NOT NULL,
    OrgaoEmissor VARCHAR(45) NOT NULL,
    DataNascimento DATE NOT NULL,
    Telefone VARCHAR(45) NOT NULL,
    EstadoCivil VARCHAR(20) NOT NULL,
    Sexo CHAR(2) NOT NULL,
    idEndereco INT,
	CONSTRAINT pkPessoa
		PRIMARY KEY (`idPessoa`),
	CONSTRAINT fkEndereco
		FOREIGN KEY (idEndereco)
		REFERENCES Endereco(idEndereco)
);

CREATE TABLE Funcionario
(
	idPessoa INT,
	Cargo VARCHAR(45) NOT NULL,
    Email VARCHAR(45) NOT NULL,
    Senha VARCHAR(45) NOT NULL,
	CONSTRAINT pkPessoa
		PRIMARY KEY (`idPessoa`),
	CONSTRAINT fkPessoaFuncionario
		FOREIGN KEY (idPessoa)
		REFERENCES Pessoa(idPessoa)
);

CREATE TABLE Aluno
(
	idPessoa INT ,
	NivelAcademico VARCHAR(45) NOT NULL,
	CONSTRAINT pkPessoa
		PRIMARY KEY (`idPessoa`),
	CONSTRAINT fkPessoaAluno
		FOREIGN KEY (idPessoa)
		REFERENCES Pessoa(idPessoa)
);


CREATE TABLE Categoria
(
	idCategoria INT NOT NULL,
	Nome VARCHAR(45) NOT NULL,
	CONSTRAINT pkCategoria
		PRIMARY KEY (`idCategoria`)
);

CREATE TABLE Area
(
	idArea INT NOT NULL,
	Nome VARCHAR(45) NOT NULL,
	CONSTRAINT pkArea
		PRIMARY KEY (`idArea`)
);

CREATE TABLE Curso
(
	idCurso INT NOT NULL,
	Nome VARCHAR(45) NOT NULL,
    Descricao VARCHAR(100) NOT NULL,
    Certificacao VARCHAR(100) NOT NULL,
    PreRequisito VARCHAR(300) NOT NULL,
    PublicoAlvo VARCHAR(100) NOT NULL,
    CargaHoraria VARCHAR(30) NOT NULL,
    idCategoria INT,
    idArea INT,
	CONSTRAINT pkCurso
		PRIMARY KEY (`idCurso`),
	CONSTRAINT fkCategoria
		FOREIGN KEY (idCategoria)
		REFERENCES Categoria(idCategoria),
	CONSTRAINT fkArea
		FOREIGN KEY (idArea)
		REFERENCES Area(idArea)
);

CREATE TABLE FormaPagamento
(
	idFormaPagamento INT NOT NULL,
	Descricao VARCHAR(100) NOT NULL,
    NumeroParcelas INT NOT NULL,
	CONSTRAINT pkFormaPagamento
		PRIMARY KEY (`idFormaPagamento`)
);

CREATE TABLE Compra
(
	idCurso INT,
    idPessoa INT,
    idFormaPagamento INT,
	Valor DOUBLE NOT NULL,
	CONSTRAINT pkCompra
		PRIMARY KEY (`idCurso`, `idPessoa`),
	CONSTRAINT fkCursoCompra
		FOREIGN KEY (idCurso)
		REFERENCES Curso(idCurso),
	CONSTRAINT fkAlunoCompra
		FOREIGN KEY (idPessoa)
		REFERENCES Aluno(idPessoa),
	CONSTRAINT fkFormaPagamento
		FOREIGN KEY (idFormaPagamento)
		REFERENCES FormaPagamento(idFormaPagamento)
);








