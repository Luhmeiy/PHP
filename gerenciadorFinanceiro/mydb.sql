-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 25-Out-2019 às 15:29
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `mydb`
--
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mydb`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `cd_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nm_categoria` text NOT NULL,
  PRIMARY KEY (`cd_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`cd_categoria`, `nm_categoria`) VALUES
(1, 'Saúde'),
(2, 'Diversão'),
(3, 'Mercado'),
(4, 'Moradia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `forma`
--

CREATE TABLE IF NOT EXISTS `forma` (
  `cd_forma` int(11) NOT NULL AUTO_INCREMENT,
  `ds_forma` varchar(255) NOT NULL,
  PRIMARY KEY (`cd_forma`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `forma`
--

INSERT INTO `forma` (`cd_forma`, `ds_forma`) VALUES
(1, 'Crédito'),
(2, 'Débito'),
(3, 'Dinheiro'),
(4, 'Cheque');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `cd_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nm_usuario` text NOT NULL,
  `ds_login` text NOT NULL,
  `ds_senha` text NOT NULL,
  PRIMARY KEY (`cd_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`cd_usuario`, `nm_usuario`, `ds_login`, `ds_senha`) VALUES
(47, 'Medeiros', 'Medeiros', 'Luiz'),
(50, 'asas', 'asas', 'asas'),
(51, 'PO', 'PO', 'PO'),
(52, 'asas', 'asas', '1234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `transacao`
--

CREATE TABLE IF NOT EXISTS `transacao` (
  `cd_transacao` int(11) NOT NULL AUTO_INCREMENT,
  `vl_transacao` int(11) NOT NULL,
  `dt_transacao` text NOT NULL,
  `st_transacao` varchar(11) NOT NULL,
  `id_forma` varchar(11) NOT NULL,
  `id_categoria` varchar(11) NOT NULL,
  `id_tb_usuario` int(11) NOT NULL,
  `descricao` text NOT NULL,
  PRIMARY KEY (`cd_transacao`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=215 ;

--
-- Extraindo dados da tabela `transacao`
--

INSERT INTO `transacao` (`cd_transacao`, `vl_transacao`, `dt_transacao`, `st_transacao`, `id_forma`, `id_categoria`, `id_tb_usuario`, `descricao`) VALUES
(171, 1231, '2019-10-09', 'ExtraÃ§Ã£o', '2', '2', 50, '0'),
(213, 123, '2019-10-04', 'ExtraÃ§Ã£o', '3', '2', 54, 'asas'),
(214, 123, '2019-10-17', 'ExtraÃ§Ã£o', '2', '2', 47, 'asas');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
