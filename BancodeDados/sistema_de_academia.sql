-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Jun-2024 às 00:45
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema_de_academia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(5, 'Creatine'),
(6, 'Whey Protein');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionários`
--

CREATE TABLE `funcionários` (
  `usuario` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `funcionários`
--

INSERT INTO `funcionários` (`usuario`, `login`, `senha`, `id`) VALUES
('Giselly', 'giselly_gondim', '123', 2),
('Guilherme', 'gui_lima', '123', 3),
('Ana', 'analeticia', '123', 5),
('Haika', 'emylli_haika', '1234', 6),
('Cristian', 'cristian_martins', '234', 7),
('Vitoria', 'vitoriafreitas', '234', 8),
('Emilly', 'emillymaciel', '345', 9),
('Renan', 'renanmoreira', '987', 10),
('Hugo', 'hugonatan', '567', 11),
('Cristian', 'cristian_martins', '234', 12),
('Victor', 'victorgabriel', '1234', 13),
('luana', 'luana', '777', 14),
('Sabryna', 'sabryna_lima', '123', 15),
('Giselly', 'giselly_gondim', '1234', 16),
('elymara', 'elymara_vasconcelos', '1234', 17),
('elymara', 'elymara_vasconcelos', '1234', 18),
('dayane', 'dayane.gondim', '234', 19),
('Cristian', 'cristian_martins', '234', 20),
('Ygor', 'ygor_nondas', '234', 21),
('caio', 'caio', '123', 22),
('Roberta', 'roberta', '123', 23),
('felix', 'felix', '123', 24),
('RTRT', 'RTRT', '565', 25),
('sther', 'sther08', '123456', 26),
('guido', 'guido_', '123', 27),
('dd', 'e', 'e', 28),
('Luanna', 'luanna_mateus', '123', 29),
('lohanny', 'lohanny_lima', '123', 30),
('lohanny', 'lohanny_lima', '123', 31),
('Gilmar', 'gilmar_gondim', '123', 32),
('Sibely', 'sibely', '123', 33),
('Vitoria', 'Vitoria', '123', 34),
('teste', 'teste', '123', 35);

-- --------------------------------------------------------

--
-- Estrutura da tabela `suplementos`
--

CREATE TABLE `suplementos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `peso` varchar(100) DEFAULT NULL,
  `formato` varchar(100) DEFAULT NULL,
  `funcao` varchar(150) NOT NULL,
  `categoria_id_categoria` int(11) NOT NULL,
  `valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `suplementos`
--

INSERT INTO `suplementos` (`id`, `nome`, `marca`, `quantidade`, `peso`, `formato`, `funcao`, `categoria_id_categoria`, `valor`) VALUES
(6, 'Giselly', 'Max Titanium', 23, '5kg', 'qwe', 'weds', 0, 123);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `funcionários`
--
ALTER TABLE `funcionários`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `suplementos`
--
ALTER TABLE `suplementos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `funcionários`
--
ALTER TABLE `funcionários`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de tabela `suplementos`
--
ALTER TABLE `suplementos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
