-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27-Maio-2018 às 00:09
-- Versão do servidor: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laboratorio3`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `laboratorio`
--

CREATE TABLE `laboratorio` (
  `nome` varchar(100) NOT NULL,
  `codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `laboratorio`
--

INSERT INTO `laboratorio` (`nome`, `codigo`) VALUES
('lab1', 1),
('lab2', 2),
('lab3', 3),
('laboratório de informática 1', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva`
--

CREATE TABLE `reserva` (
  `data` date NOT NULL,
  `turno` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `horario` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reservado_em` datetime DEFAULT NULL,
  `id` int(11) NOT NULL,
  `fk_matricula` int(11) NOT NULL,
  `fk_codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `reserva`
--

INSERT INTO `reserva` (`data`, `turno`, `horario`, `reservado_em`, `id`, `fk_matricula`, `fk_codigo`) VALUES
('2018-05-24', 'Noite', '1,2,', '2018-05-07 03:54:49', 6, 23, 2),
('2018-05-18', 'Noite', '2,', '2018-05-12 13:22:53', 7, 654, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `funcao` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `matricula` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `funcao`, `matricula`, `email`) VALUES
('alc', 'tester', 23, ''),
('alcimar', 'wefaf', 222, 'alcimar_bmx@yahoo.com'),
('alcimar', '1212', 321, ''),
('jão', 'asdasdasd', 324, ''),
('alcimar', 'mestre', 654, ''),
('maria', 'tester', 783, ''),
('adm', 'reert', 5798, ''),
('João', 'sdfsdfsd', 8645, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laboratorio`
--
ALTER TABLE `laboratorio`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id`,`fk_matricula`,`fk_codigo`),
  ADD KEY `fk_reserva_usuario_idx` (`fk_matricula`),
  ADD KEY `fk_reserva_laboratorio1_idx` (`fk_codigo`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`matricula`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `fk_reserva_laboratorio1` FOREIGN KEY (`fk_codigo`) REFERENCES `laboratorio` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reserva_usuario` FOREIGN KEY (`fk_matricula`) REFERENCES `usuario` (`matricula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
