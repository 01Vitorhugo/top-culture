-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 05-Jan-2023 às 22:10
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_cadastro`
--
CREATE DATABASE IF NOT EXISTS `bd_cadastro` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `bd_cadastro`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cadastro`
--

DROP TABLE IF EXISTS `tb_cadastro`;
CREATE TABLE IF NOT EXISTS `tb_cadastro` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `funcao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_cadastro`
--

INSERT INTO `tb_cadastro` (`codigo`, `nome`, `email`, `cpf`, `funcao`, `senha`) VALUES
(8, 'gustavo', 'gustavo@gmail.com', '111', 'cli', '202cb962ac59075b964b07152d234b70'),
(7, 'vitor', 'hugo@01.com', '12212', 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_viagem`
--

DROP TABLE IF EXISTS `tb_viagem`;
CREATE TABLE IF NOT EXISTS `tb_viagem` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `local` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `preco` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_viagem`
--

INSERT INTO `tb_viagem` (`codigo`, `local`, `data`, `preco`, `foto`) VALUES
(25, 'Cataratas do Iguaçu', '2023-08-04', '2000', 'img-viagem/7cb4f976e2b98bc88ede50a0c3d0e789.jpg'),
(22, 'Arraial do Cabo', '2023-02-09', '2000', 'img-viagem/e1ada7b76563df568bfaf1d453050381.jpg'),
(23, 'Santorini - Grécia', '2023-07-24', '6000', 'img-viagem/7b0a5011c82bee99469eb8f5d4f4198e.jpg'),
(24, 'Bora Bora Polinésia Francesa', '2023-08-08', '7000', 'img-viagem/3418c052de95de3707a35f5dfd34d8a5.jpg');
--
-- Banco de dados: `bd_cadastro_tc`
--
CREATE DATABASE IF NOT EXISTS `bd_cadastro_tc` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `bd_cadastro_tc`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cadastro_tc`
--

DROP TABLE IF EXISTS `tb_cadastro_tc`;
CREATE TABLE IF NOT EXISTS `tb_cadastro_tc` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sobrenome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_cadastro_tc`
--

INSERT INTO `tb_cadastro_tc` (`codigo`, `nome`, `sobrenome`, `email`, `senha`) VALUES
(6, 'Vitor', 'Hugo', 'Vitorhugo0031@outlook.com', '698d51a19d8a121ce581499d7b701668'),
(5, 'sdfs', 'dfsd', 'sdf', 'd9729feb74992cc3482b350163a1a010'),
(4, '$nome', '$sobrenome', '$email', '$senha');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
