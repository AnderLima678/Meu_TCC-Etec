-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30/10/2023 às 15:37
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `etecampacc`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `arquivos`
--

CREATE TABLE `arquivos` (
  `id` int(11) NOT NULL,
  `nome` varchar(300) NOT NULL,
  `paht` varchar(100) NOT NULL,
  `data_upload` datetime NOT NULL DEFAULT current_timestamp(),
  `postagem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `arquivos`
--

INSERT INTO `arquivos` (`id`, `nome`, `paht`, `data_upload`, `postagem`) VALUES
(47, 'arquivo47.jpeg', 'uploads/', '0000-00-00 00:00:00', 'postagem de hoje '),
(48, 'arquivo48.webp', 'uploads/', '0000-00-00 00:00:00', 'foto profissional'),
(49, 'arquivo49.jfif', 'uploads/', '0000-00-00 00:00:00', 'Rua perfeita'),
(50, 'arquivo50.jfif', 'uploads/', '0000-00-00 00:00:00', 'are u ok? '),
(51, 'arquivo51.jpg', 'uploads/', '0000-00-00 00:00:00', 'wabalab dub dub'),
(52, 'arquivo52.jfif', 'uploads/', '0000-00-00 00:00:00', 'veja por si msm'),
(53, 'arquivo53.jfif', 'uploads/', '0000-00-00 00:00:00', 'simples e bom'),
(61, 'arquivo61.jfif', 'uploads/', '0000-00-00 00:00:00', 'sim'),
(63, 'arquivo63.jfif', 'uploads/', '0000-00-00 00:00:00', 'dnv\r\n');

-- --------------------------------------------------------

--
-- Estrutura para tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nome` varchar(260) NOT NULL,
  `email` varchar(260) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `foto_perfil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `user`
--

INSERT INTO `user` (`id`, `nome`, `email`, `senha`, `foto_perfil`) VALUES
(2, 'Etec Silvyio', 'etec103@gmail.com', '1234', 'foto.webp');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `arquivos`
--
ALTER TABLE `arquivos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `arquivos`
--
ALTER TABLE `arquivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
