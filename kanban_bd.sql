-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Abr-2019 às 11:59
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kanban_bd`
--
CREATE DATABASE IF NOT EXISTS `kanban_bd` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kanban_bd`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fazer`
--

CREATE TABLE `fazer` (
  `id` int(11) NOT NULL,
  `data` varchar(200) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `tipo` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fazer`
--

INSERT INTO `fazer` (`id`, `data`, `descricao`, `tipo`) VALUES
(173, '', '', 1),
(174, '04/06/2019', 'hghyh', 1),
(175, '', '', 1),
(176, '', '', 1),
(177, '', '', 1),
(178, '04/06/2019', 'hghyhdfhghg', 1),
(190, '04/06/2019', '7777777777', 1),
(191, '04/06/2019', '7777777777', 2),
(192, '04/04/2019', '7777777777', 3),
(193, '', '', 1),
(194, '', '', 1),
(195, '', '', 1),
(196, '', '', 2),
(197, '', '', 0),
(198, '04/12/2019', 'oi', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `git_tb`
--

CREATE TABLE `git_tb` (
  `id` int(3) NOT NULL,
  `data` varchar(200) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `tipo` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `git_tb`
--

INSERT INTO `git_tb` (`id`, `data`, `descricao`, `tipo`) VALUES
(1, '2019-04-17', '0', 1),
(2, '0000-00-00', 'oi', 1),
(3, '0000-00-00', 'oi', 1),
(4, '04/25/2019', 'oi', 1),
(5, '04/04/2019', 'oi', 1),
(6, '04/04/2019', 'oi', 1),
(7, '04/04/2019', 'oi', 1),
(8, '04/04/2019', 'oi', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fazer`
--
ALTER TABLE `fazer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `git_tb`
--
ALTER TABLE `git_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fazer`
--
ALTER TABLE `fazer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `git_tb`
--
ALTER TABLE `git_tb`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
