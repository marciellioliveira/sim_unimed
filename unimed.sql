-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31-Mar-2017 às 21:38
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unimed`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `nome` varchar(200) NOT NULL,
  `idade` int(20) NOT NULL,
  `categoria_plano` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`nome`, `idade`, `categoria_plano`) VALUES
('Maria ', 6, 'a'),
('Monica', 4, 'a'),
('Joelma', 4, 'e'),
('Rosemaire', 2, 'e'),
('Maire', 3, 'e'),
('Ronnnnne', 4, 'a'),
('Ronnnnne', 4, 'a'),
('Ronnnnne', 4, 'a'),
('Ronnnnne', 4, 'a'),
('Ronnnnne', 4, 'a'),
('Ronnnnne', 4, 'a'),
('Mariao', 3, 'e'),
('Ma', 3, 'a'),
('Marineuza', 3, 'e');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dependentes`
--

CREATE TABLE `dependentes` (
  `id` int(11) NOT NULL,
  `titular` varchar(200) NOT NULL,
  `mensalidade_titular` varchar(200) NOT NULL,
  `qnt_dependentes` int(200) NOT NULL,
  `idade_dependentes` int(200) NOT NULL,
  `valor_total` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dependentes`
--

INSERT INTO `dependentes` (`id`, `titular`, `mensalidade_titular`, `qnt_dependentes`, `idade_dependentes`, `valor_total`) VALUES
(1, 'Maria ', '1200,00', 1, 7, ''),
(2, 'Monica', '494,00', 1, 7, ''),
(3, 'Joelma', '337,00', 1, 7, ''),
(4, 'Rosemaire', '221,00', 1, 7, ''),
(5, 'Maire', '255,00', 1, 7, '255'),
(6, 'Ronnnnne', '494,00', 1, 7, '494'),
(7, 'Ronnnnne', '494,00', 1, 7, '494'),
(8, 'Ronnnnne', '494,00', 1, 7, '494'),
(9, 'Ronnnnne', '494,00', 1, 7, '494'),
(10, 'Ronnnnne', '494,00', 1, 7, '494'),
(11, 'Ronnnnne', '494,00', 1, 7, '494'),
(12, 'Mariao', '255,00', 1, 7, '255'),
(13, 'Ma', '373,00', 1, 7, ''),
(14, 'Marineuza', '255,00', 1, 7, '255');

-- --------------------------------------------------------

--
-- Estrutura da tabela `proposta`
--

CREATE TABLE `proposta` (
  `nome_titular` varchar(200) NOT NULL,
  `idade` int(20) NOT NULL,
  `categoria_plano` varchar(200) NOT NULL,
  `qnt_dependentes` int(200) NOT NULL,
  `nome_dependente` varchar(200) NOT NULL,
  `idade_dependentes` int(200) NOT NULL,
  `mensalidade_titular` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dependentes`
--
ALTER TABLE `dependentes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dependentes`
--
ALTER TABLE `dependentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
