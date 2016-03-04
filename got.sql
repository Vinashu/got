-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 03-Mar-2016 às 21:06
-- Versão do servidor: 5.6.11
-- versão do PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `got`
--
CREATE DATABASE IF NOT EXISTS `got` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `got`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `house`
--

CREATE TABLE IF NOT EXISTS `house` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `icon` varchar(64) DEFAULT NULL,
  `banner` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `house`
--

INSERT INTO `house` (`id`, `name`, `icon`, `banner`) VALUES
(1, 'Arryn', 'imagens/icon07.png', 'imagens/house07.jpg'),
(2, 'Baratheon', 'imagens/icon01.png', 'imagens/house01.jpg'),
(3, 'Frey', 'imagens/icon11.png', 'imagens/house08.jpg'),
(4, 'Greyjoy', 'imagens/icon05.png', 'imagens/house05.jpg'),
(5, 'Lannister', 'imagens/icon03.png', 'imagens/house03.jpg'),
(6, 'Martell', 'imagens/icon06.png', 'imagens/house06.jpg'),
(7, 'Tyrell', 'imagens/icon04.png', 'imagens/house04.jpg'),
(8, 'Stark', 'imagens/icon10.png', 'imagens/house10.jpg'),
(9, 'Tully', 'imagens/icon08.png', 'imagens/house08.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `soldier`
--

CREATE TABLE IF NOT EXISTS `soldier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `house` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Extraindo dados da tabela `soldier`
--

INSERT INTO `soldier` (`id`, `name`, `house`) VALUES
(1, 'McBotton', 1),
(2, 'John', 2),
(3, 'Monster', 3),
(4, 'Bob', 4),
(5, 'Tyrion', 5),
(6, 'Oberyn', 6),
(7, 'Den', 7),
(8, 'Eddar', 8),
(9, 'Catelyn', 9);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
