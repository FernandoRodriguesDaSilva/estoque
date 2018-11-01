-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
-- Host: 127.0.0.1
-- Generation Time: 18-Maio-2018 às 23:11
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.1

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nome_categoria` varchar(100) NOT NULL,
  `dataCaptura` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Extraindo dados da tabela `categorias`

INSERT INTO `categorias` (`id_categoria`, `id_usuario`, `nome_categoria`, `dataCaptura`) VALUES
(3, 6, 'Calças', '2018-05-17'),
(4, 6, 'Bermudas', '2018-05-17'),
(5, 6, 'Tênis', '2018-05-17'),
(6, 6, 'Sapatos', '2018-05-17'),
(7, 6, 'Camisas', '2018-05-17');

-- Estrutura da tabela `clientes`

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `clientes` (`id_cliente`, `id_usuario`, `nome`, `sobrenome`, `endereco`, `email`, `telefone`, `cpf`) VALUES
(4, 6, 'Paula Freitas', 'Santos', 'Rua A', 'paula@hotmail.com', '555555', '33333'),
(5, 6, 'Hugo Vasconcelos', 'Freitas', 'Rua C', 'hugovasconcelosf', '988878', '8787878');

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `dataCaptura` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `usuarios` (`id`, `nome`, `user`, `email`, `senha`, `dataCaptura`) VALUES
(6, 'Hugo Freitas', 'hugofreitas', 'hugovasconcelosf@hotmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2018-05-17'),
(7, 'admin', 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2018-05-17');

ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;


CREATE TABLE `imagens` (
  `id_imagem` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `id_categoria` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `dataUpload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `id_categoria` int(11) NOT NULL,
  `id_imagem` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preco` float(11) NOT NULL,
  `dataCaptura` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `vendas` (
  `id_venda` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `preco` float(11) NOT NULL,
  `dataCompra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `fornecedores` (
  `id_fornecedor` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;