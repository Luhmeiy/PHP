-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Dez-2019 às 02:52
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `database`
--
CREATE DATABASE IF NOT EXISTS `database` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `database`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `duvida`
--

CREATE TABLE `duvida` (
  `cd_duvida` int(11) NOT NULL,
  `nome` text NOT NULL,
  `email` text NOT NULL,
  `telefone` int(11) NOT NULL,
  `mensagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `filho`
--

CREATE TABLE `filho` (
  `cd_filho` int(11) NOT NULL,
  `nm_filho` text NOT NULL,
  `ds_idade` int(11) NOT NULL,
  `ds_peso` int(11) NOT NULL,
  `ds_altura` int(11) NOT NULL,
  `ds_comp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `filho`
--

INSERT INTO `filho` (`cd_filho`, `nm_filho`, `ds_idade`, `ds_peso`, `ds_altura`, `ds_comp`) VALUES
(40, 'João da Silva', 6, 30, 1, 'q23121'),
(41, '1231 21231', 2213, 1231, 213, '21213');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `cd_usuario` int(11) NOT NULL,
  `nome` text NOT NULL,
  `endereco` text NOT NULL,
  `email` text NOT NULL,
  `senha` varchar(255) NOT NULL,
  `id_filho` int(11) NOT NULL,
  `preco` int(11) NOT NULL,
  `cep` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cd_usuario`, `nome`, `endereco`, `email`, `senha`, `id_filho`, `preco`, `cep`) VALUES
(59, 'José da Silva', 'Rua rua 1234', 'a@a', '1234', 40, 2, '11750-000'),
(60, '12321 2131', '312312', 'aa@a', '1234', 41, 0, '12312-312');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `duvida`
--
ALTER TABLE `duvida`
  ADD PRIMARY KEY (`cd_duvida`);

--
-- Índices para tabela `filho`
--
ALTER TABLE `filho`
  ADD PRIMARY KEY (`cd_filho`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cd_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `duvida`
--
ALTER TABLE `duvida`
  MODIFY `cd_duvida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `filho`
--
ALTER TABLE `filho`
  MODIFY `cd_filho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cd_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
