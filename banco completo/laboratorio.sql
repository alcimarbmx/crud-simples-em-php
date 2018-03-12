-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12-Mar-2018 às 08:12
-- Versão do servidor: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laboratorio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendados`
--

CREATE TABLE `agendados` (
  `id` int(11) NOT NULL,
  `data` varchar(20) DEFAULT NULL,
  `horarios` varchar(100) DEFAULT NULL,
  `codUser` int(11) NOT NULL,
  `codLab` int(11) NOT NULL,
  `turno` varchar(20) NOT NULL,
  `nomeUser` varchar(100) NOT NULL,
  `nomeLab` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agendados`
--

INSERT INTO `agendados` (`id`, `data`, `horarios`, `codUser`, `codLab`, `turno`, `nomeUser`, `nomeLab`) VALUES
(19, '2018-03-10', '1,2,3,4,5,6,', 7878, 336, 'Tarde', 'ensol livre', 'laboratÃ³rio de informatica 33');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lab`
--

CREATE TABLE `lab` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `lab`
--

INSERT INTO `lab` (`codigo`, `nome`) VALUES
(336, 'laboratÃ³rio de informatica 33'),
(655, 'Laboratorio de fisica 2'),
(908, 'atelie'),
(112343, 'laboratÃ³rio de quÃ­mica 1'),
(891412, 'laboratÃ³rio de fÃ­sica ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `matricula` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `funcao` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`matricula`, `nome`, `funcao`) VALUES
(25431, 'maria isa', 'estudante'),
(453232, 'ensol', 'linux sistema operativo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendados`
--
ALTER TABLE `agendados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`matricula`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agendados`
--
ALTER TABLE `agendados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
