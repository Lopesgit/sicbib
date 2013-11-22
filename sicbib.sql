-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 08-Nov-2013 às 21:21
-- Versão do servidor: 5.6.14-log
-- versão do PHP: 5.5.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `sicbib`
--
CREATE DATABASE IF NOT EXISTS `sicbib` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sicbib`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionalidade`
--

CREATE TABLE IF NOT EXISTS `funcionalidade` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `menu_id` bigint(20) DEFAULT NULL,
  `submenu_id` bigint(20) DEFAULT NULL,
  `submenu2_id` bigint(20) DEFAULT NULL,
  `menu_nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_ABCAF105CCD7E912` (`menu_id`),
  KEY `IDX_ABCAF10587B541DD` (`submenu_id`),
  KEY `IDX_ABCAF1053C3C9955` (`submenu2_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- RELATIONS FOR TABLE `funcionalidade`:
--   `submenu2_id`
--       `submenu2` -> `id`
--   `submenu_id`
--       `submenu` -> `id`
--   `menu_id`
--       `menu` -> `id`
--

--
-- Extraindo dados da tabela `funcionalidade`
--

INSERT INTO `funcionalidade` (`id`, `menu_id`, `submenu_id`, `submenu2_id`, `menu_nome`) VALUES
(1, 1, 1, NULL, 'Funcionalidades'),
(2, 1, 2, NULL, 'Permissões');

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `has_sub` tinyint(1) NOT NULL,
  `url` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ordem` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `menu`
--

INSERT INTO `menu` (`id`, `nome`, `has_sub`, `url`, `ordem`) VALUES
(1, 'Configurações', 1, 'configuracoes', 9999);

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissao`
--

CREATE TABLE IF NOT EXISTS `permissao` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `funcionalidade_id` bigint(20) DEFAULT NULL,
  `usuario_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D939CCE9383FCED8` (`funcionalidade_id`),
  KEY `IDX_D939CCE9DB38439E` (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- RELATIONS FOR TABLE `permissao`:
--   `funcionalidade_id`
--       `funcionalidade` -> `id`
--   `usuario_id`
--       `usuario` -> `id`
--

--
-- Extraindo dados da tabela `permissao`
--

INSERT INTO `permissao` (`id`, `funcionalidade_id`, `usuario_id`) VALUES
(1, 1, 1),
(2, 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `submenu`
--

CREATE TABLE IF NOT EXISTS `submenu` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `menu_id` bigint(20) DEFAULT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `has_sub` tinyint(1) NOT NULL,
  `url` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ordem` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6B0D7184CCD7E912` (`menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- RELATIONS FOR TABLE `submenu`:
--   `menu_id`
--       `menu` -> `id`
--

--
-- Extraindo dados da tabela `submenu`
--

INSERT INTO `submenu` (`id`, `menu_id`, `nome`, `has_sub`, `url`, `ordem`) VALUES
(1, 1, 'Funcionalidades', 0, 'funcionalidades', 0),
(2, 1, 'Permissões', 0, 'permissoes', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `submenu2`
--

CREATE TABLE IF NOT EXISTS `submenu2` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `parent_id` bigint(20) DEFAULT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ordem` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F06BF445727ACA70` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `submenu2`:
--   `parent_id`
--       `submenu` -> `id`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dtnasc` date NOT NULL,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `passwd` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `ultimoacesso` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_EDD889C1F85E0677` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `user_nome`, `dtnasc`, `username`, `passwd`, `ultimoacesso`) VALUES
(1, 'Administrador', '1983-07-10', 'admin', 'admin', NULL);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `funcionalidade`
--
ALTER TABLE `funcionalidade`
  ADD CONSTRAINT `FK_ABCAF1053C3C9955` FOREIGN KEY (`submenu2_id`) REFERENCES `submenu2` (`id`),
  ADD CONSTRAINT `FK_ABCAF10587B541DD` FOREIGN KEY (`submenu_id`) REFERENCES `submenu` (`id`),
  ADD CONSTRAINT `FK_ABCAF105CCD7E912` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`);

--
-- Limitadores para a tabela `permissao`
--
ALTER TABLE `permissao`
  ADD CONSTRAINT `FK_D939CCE9383FCED8` FOREIGN KEY (`funcionalidade_id`) REFERENCES `funcionalidade` (`id`),
  ADD CONSTRAINT `FK_D939CCE9DB38439E` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `submenu`
--
ALTER TABLE `submenu`
  ADD CONSTRAINT `FK_6B0D7184CCD7E912` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`);

--
-- Limitadores para a tabela `submenu2`
--
ALTER TABLE `submenu2`
  ADD CONSTRAINT `FK_F06BF445727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `submenu` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
