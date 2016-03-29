-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29-Mar-2016 às 23:06
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rede_encontr_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargos`
--

CREATE TABLE IF NOT EXISTS `cargos` (
  `id_encontrista` varchar(30) NOT NULL DEFAULT '',
  `cargo` varchar(30) DEFAULT NULL,
  `grupo` varchar(30) NOT NULL DEFAULT '',
  `data_inicio` date NOT NULL DEFAULT '0000-00-00',
  `data_final` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contactos`
--

CREATE TABLE IF NOT EXISTS `contactos` (
  `id_encontrista` varchar(30) NOT NULL DEFAULT '',
  `tipo_contacto` varchar(30) DEFAULT NULL,
  `contacto` int(11) DEFAULT NULL,
  `descricao` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `encontrista`
--

CREATE TABLE IF NOT EXISTS `encontrista` (
  `id_encontrista` varchar(20) NOT NULL DEFAULT '',
  `nome` varchar(50) DEFAULT NULL,
  `alcunha` varchar(50) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `morada` varchar(50) DEFAULT NULL,
  `cod_postal` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `encontristas_encontros`
--

CREATE TABLE IF NOT EXISTS `encontristas_encontros` (
  `id_encontrista` varchar(50) NOT NULL DEFAULT '',
  `encontro` varchar(50) NOT NULL DEFAULT '',
  `papel` varchar(20) DEFAULT NULL,
  `inscrito` varchar(10) DEFAULT NULL,
  `participou` varchar(10) DEFAULT NULL,
  `pagou` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `encontros`
--

CREATE TABLE IF NOT EXISTS `encontros` (
  `id_evento` varchar(50) NOT NULL DEFAULT '',
  `id_encontro` varchar(50) DEFAULT NULL,
  `logar` varchar(50) DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_final` date DEFAULT NULL,
  `descricao` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupos`
--

CREATE TABLE IF NOT EXISTS `grupos` (
  `id_grupo` varchar(30) NOT NULL DEFAULT '',
  `designacao` varchar(30) DEFAULT NULL,
  `localizacao` varchar(30) DEFAULT NULL,
  `data_criacao` date DEFAULT NULL,
  `data_inativacao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_cargos`
--

CREATE TABLE IF NOT EXISTS `tipo_cargos` (
  `id_cargo` varchar(30) NOT NULL DEFAULT '',
  `nome_cargo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_contacto`
--

CREATE TABLE IF NOT EXISTS `tipo_contacto` (
  `id_tipo` varchar(30) NOT NULL DEFAULT '',
  `tipo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_encontro`
--

CREATE TABLE IF NOT EXISTS `tipo_encontro` (
  `id_tipo` varchar(50) NOT NULL DEFAULT '',
  `nome_encontro` varchar(50) DEFAULT NULL,
  `tipo_encontro` varchar(50) DEFAULT NULL,
  `descricao` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cargos`
--
ALTER TABLE `cargos`
 ADD PRIMARY KEY (`id_encontrista`,`grupo`,`data_inicio`), ADD KEY `cargo` (`cargo`), ADD KEY `grupo` (`grupo`);

--
-- Indexes for table `contactos`
--
ALTER TABLE `contactos`
 ADD PRIMARY KEY (`id_encontrista`), ADD KEY `tipo_contacto` (`tipo_contacto`);

--
-- Indexes for table `encontrista`
--
ALTER TABLE `encontrista`
 ADD PRIMARY KEY (`id_encontrista`);

--
-- Indexes for table `encontristas_encontros`
--
ALTER TABLE `encontristas_encontros`
 ADD PRIMARY KEY (`id_encontrista`,`encontro`), ADD KEY `encontro` (`encontro`);

--
-- Indexes for table `encontros`
--
ALTER TABLE `encontros`
 ADD PRIMARY KEY (`id_evento`), ADD KEY `id_encontro` (`id_encontro`);

--
-- Indexes for table `grupos`
--
ALTER TABLE `grupos`
 ADD PRIMARY KEY (`id_grupo`);

--
-- Indexes for table `tipo_cargos`
--
ALTER TABLE `tipo_cargos`
 ADD PRIMARY KEY (`id_cargo`);

--
-- Indexes for table `tipo_contacto`
--
ALTER TABLE `tipo_contacto`
 ADD PRIMARY KEY (`id_tipo`);

--
-- Indexes for table `tipo_encontro`
--
ALTER TABLE `tipo_encontro`
 ADD PRIMARY KEY (`id_tipo`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cargos`
--
ALTER TABLE `cargos`
ADD CONSTRAINT `cargos_ibfk_1` FOREIGN KEY (`id_encontrista`) REFERENCES `encontrista` (`id_encontrista`),
ADD CONSTRAINT `cargos_ibfk_2` FOREIGN KEY (`cargo`) REFERENCES `tipo_cargos` (`id_cargo`),
ADD CONSTRAINT `cargos_ibfk_3` FOREIGN KEY (`grupo`) REFERENCES `grupos` (`id_grupo`);

--
-- Limitadores para a tabela `contactos`
--
ALTER TABLE `contactos`
ADD CONSTRAINT `contactos_ibfk_1` FOREIGN KEY (`id_encontrista`) REFERENCES `encontrista` (`id_encontrista`),
ADD CONSTRAINT `contactos_ibfk_2` FOREIGN KEY (`tipo_contacto`) REFERENCES `tipo_contacto` (`id_tipo`);

--
-- Limitadores para a tabela `encontristas_encontros`
--
ALTER TABLE `encontristas_encontros`
ADD CONSTRAINT `encontristas_encontros_ibfk_1` FOREIGN KEY (`encontro`) REFERENCES `encontros` (`id_evento`),
ADD CONSTRAINT `encontristas_encontros_ibfk_2` FOREIGN KEY (`id_encontrista`) REFERENCES `encontrista` (`id_encontrista`);

--
-- Limitadores para a tabela `encontros`
--
ALTER TABLE `encontros`
ADD CONSTRAINT `encontros_ibfk_1` FOREIGN KEY (`id_encontro`) REFERENCES `tipo_encontro` (`id_tipo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
