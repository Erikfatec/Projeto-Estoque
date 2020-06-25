-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Jun-2020 às 03:12
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cachacaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(20) NOT NULL,
  `nome` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(5, 'Bebidas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `cnpj` varchar(50) NOT NULL,
  `cpf_funcionario` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `compras`
--

CREATE TABLE `compras` (
  `codigo_produto` int(11) NOT NULL,
  `fornecedores` varchar(200) NOT NULL,
  `preco_total` double(10,2) NOT NULL,
  `preco_unitario_quant` double(10,2) NOT NULL,
  `cpf_gerencia` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contas_receber`
--

CREATE TABLE `contas_receber` (
  `numero` int(100) NOT NULL,
  `data_de_recebimento` datetime DEFAULT NULL,
  `cliente` varchar(100) DEFAULT NULL,
  `valor` double(10,2) NOT NULL,
  `data_de_emissao` datetime DEFAULT NULL,
  `cpf_gerencia` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `conta_pagar`
--

CREATE TABLE `conta_pagar` (
  `numero` int(100) NOT NULL,
  `data_de_pagamento` datetime DEFAULT NULL,
  `fornecedor` varchar(100) DEFAULT NULL,
  `valor` double(10,2) DEFAULT NULL,
  `data_de_emissao` datetime DEFAULT NULL,
  `cpf_gerencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `produto` varchar(200) NOT NULL,
  `peso` double(10,2) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `lote` varchar(100) NOT NULL,
  `data_de_vencimento` date DEFAULT NULL,
  `data_de_chegada` date DEFAULT NULL,
  `cpf_funcionario` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`produto`, `peso`, `quantidade`, `lote`, `data_de_vencimento`, `data_de_chegada`, `cpf_funcionario`) VALUES
('coca', 100.00, 1, '001', '2020-06-27', '2020-06-01', '50038795809');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `nome_empresa` varchar(200) DEFAULT NULL,
  `cnpj` int(20) NOT NULL,
  `cpf_funcionario` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `cpf` int(20) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `senha` varchar(256) NOT NULL,
  `tipo` int(11) DEFAULT NULL,
  `cpf_gerencia` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `tipo` varchar(200) DEFAULT NULL,
  `fornecedor` varchar(200) NOT NULL,
  `cpf_funcionario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `tipo`, `fornecedor`, `cpf_funcionario`) VALUES
(10, 'coca', 'Bebidas', '2', 'Henrique');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `senha` varchar(256) NOT NULL,
  `tipo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cpf`, `senha`, `tipo`) VALUES
(18, 'henrique', '50038795809', '$2y$10$JJSrZZkQvMkRdB1dToS6KOaF1u3lZ112KQvzdDe1mdSVCsNdMrCte', '1'),
(26, 'usuario', '123', '$2y$10$antjDf1VT558gjW.yCQy8.B.Egv0kdijMxC.MnPnMgDD1NhnclckK', '2');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cpf_funcionario` (`cpf_funcionario`);

--
-- Índices para tabela `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`codigo_produto`),
  ADD KEY `cpf_gerencia` (`cpf_gerencia`);

--
-- Índices para tabela `contas_receber`
--
ALTER TABLE `contas_receber`
  ADD PRIMARY KEY (`numero`),
  ADD KEY `cpf_gerencia` (`cpf_gerencia`);

--
-- Índices para tabela `conta_pagar`
--
ALTER TABLE `conta_pagar`
  ADD PRIMARY KEY (`numero`),
  ADD KEY `cpf_gerencia` (`cpf_gerencia`);

--
-- Índices para tabela `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`produto`),
  ADD UNIQUE KEY `lote` (`lote`),
  ADD KEY `cpf_funcionario` (`cpf_funcionario`);

--
-- Índices para tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`cnpj`),
  ADD KEY `cpf_funcionario` (`cpf_funcionario`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`cpf`),
  ADD KEY `cpf_gerencia` (`cpf_gerencia`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cpf_funcionario` (`cpf_funcionario`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
