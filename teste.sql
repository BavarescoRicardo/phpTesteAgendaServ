-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Ago-2022 às 00:54
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `promocao`
--

CREATE TABLE `promocao` (
  `id_promocao` int(11) NOT NULL,
  `valor_servico` decimal(10,0) NOT NULL DEFAULT 0,
  `descricao` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `data_cadastro` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `promocao`
--

INSERT INTO `promocao` (`id_promocao`, `valor_servico`, `descricao`, `status`, `data_cadastro`) VALUES
(1, '50', 'Testando', 1, '2022-08-18 19:53:18');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `id_servico` int(11) NOT NULL,
  `nome_servico` varchar(200) NOT NULL,
  `valor_servico` decimal(10,0) NOT NULL DEFAULT 0,
  `tempo` time NOT NULL,
  `logo_servico` longblob DEFAULT NULL,
  `descricao_servico` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `data_cadastro` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`id_servico`, `nome_servico`, `valor_servico`, `tempo`, `logo_servico`, `descricao_servico`, `status`, `data_cadastro`) VALUES
(1, 'CABELO + BARBA', '60', '01:00:00', NULL, '', 1, '2022-07-25 14:40:21'),
(2, 'CABELO', '30', '00:30:00', NULL, '', 1, '2022-08-04 10:52:01'),
(3, 'BARBA', '30', '00:30:00', NULL, '', 1, '2022-08-04 10:52:13'),
(4, 'ALISAMENTO', '70', '01:00:00', NULL, '', 1, '2022-08-04 10:52:32'),
(5, 'SOBRANCELHA', '10', '00:30:00', NULL, '', 1, '2022-08-04 10:52:56'),
(6, 'COLORIMETRIA', '130', '01:30:00', NULL, '', 1, '2022-08-04 10:53:30'),
(7, 'LUZES', '90', '01:00:00', NULL, '', 1, '2022-08-04 10:53:46'),
(8, 'CABELO + SOBRANCELHA', '40', '00:30:00', NULL, '', 0, '2022-08-04 21:19:14'),
(9, 'PEZINHO', '10', '00:10:00', NULL, '', 0, '2022-08-06 17:47:54'),
(10, 'MAQUINA NA BARBA', '10', '00:10:00', NULL, '', 0, '2022-08-06 17:48:19');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico_promocao`
--

CREATE TABLE `servico_promocao` (
  `id_promocao` int(11) NOT NULL,
  `id_servico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `servico_promocao`
--

INSERT INTO `servico_promocao` (`id_promocao`, `id_servico`) VALUES
(1, 7);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `promocao`
--
ALTER TABLE `promocao`
  ADD PRIMARY KEY (`id_promocao`);

--
-- Índices para tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`id_servico`);

--
-- Índices para tabela `servico_promocao`
--
ALTER TABLE `servico_promocao`
  ADD PRIMARY KEY (`id_promocao`,`id_servico`),
  ADD KEY `servico_servico_promocao_fk` (`id_servico`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `promocao`
--
ALTER TABLE `promocao`
  MODIFY `id_promocao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `id_servico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `servico_promocao`
--
ALTER TABLE `servico_promocao`
  ADD CONSTRAINT `promocao_servico_promocao_fk` FOREIGN KEY (`id_promocao`) REFERENCES `promocao` (`id_promocao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `servico_servico_promocao_fk` FOREIGN KEY (`id_servico`) REFERENCES `servico` (`id_servico`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
