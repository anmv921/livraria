-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10-Dez-2015 às 21:33
-- Versão do servidor: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `livraria`
--
CREATE DATABASE IF NOT EXISTS `livraria` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `livraria`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `autores`
--

CREATE TABLE `autores` (
  `id_autor` int(11) NOT NULL,
  `nome_autor` varchar(45) DEFAULT NULL,
  `nacionalidade_autor` varchar(45) DEFAULT NULL,
  `bio_autor` text,
  `act_autor` int(11) DEFAULT '1',
  `del_autor` int(11) DEFAULT '0',
  `ts_autor` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `autores`
--

INSERT INTO `autores` (`id_autor`, `nome_autor`, `nacionalidade_autor`, `bio_autor`, `act_autor`, `del_autor`, `ts_autor`) VALUES
(1, 'josÃ©', 'Portuguesa', '           ', 1, 0, '2015-11-07 12:50:41'),
(2, 'Joao Silva teste', 'Chines', '			 Ã‰ importante questionar o quanto a complexidade dos estudos efetuados prepara-nos para enfrentar situaÃ§Ãµes atÃ­picas decorrentes das condiÃ§Ãµes financeiras e administrativas exigidas. Neste sentido, o comprometimento entre as equipes estimula a padronizaÃ§Ã£o da gestÃ£o inovadora da qual fazemos parte. Evidentemente, a mobilidade dos capitais internacionais obstaculiza a apreciaÃ§Ã£o da importÃ¢ncia das formas de aÃ§Ã£o. Ã‰ claro que a adoÃ§Ã£o de polÃ­ticas descentralizadoras apresenta tendÃªncias no sentido de aprovar a manutenÃ§Ã£o do impacto na agilidade decisÃ³ria. \r\n\r\n          Por conseguinte, a hegemonia do ambiente polÃ­tico auxilia a preparaÃ§Ã£o e a composiÃ§Ã£o das novas proposiÃ§Ãµes. A prÃ¡tica cotidiana prova que o julgamento imparcial das eventualidades garante a contribuiÃ§Ã£o de um grupo importante na determinaÃ§Ã£o do orÃ§amento setorial. Desta maneira, o entendimento das metas propostas possibilita uma melhor visÃ£o global do retorno esperado a longo prazo. O cuidado em identificar pontos crÃ­ticos na valorizaÃ§Ã£o de fatores subjetivos agrega valor ao estabelecimento dos Ã­ndices pretendidos. \r\n			 ', 1, 0, '2015-11-07 12:50:41'),
(3, 'Herman Melville', 'Americana', 'dassdasdasdsd ad asdas', 1, 0, '2015-11-07 15:25:47'),
(4, 'hugo teste', 'russo', '			dasasdasasd						 			 ', 1, 0, '2015-11-21 15:11:44');

-- --------------------------------------------------------

--
-- Estrutura da tabela `autores_escrevem_livros`
--

CREATE TABLE `autores_escrevem_livros` (
  `id_autor_escreve_livro` int(11) NOT NULL,
  `fk_id_livro` int(11) NOT NULL,
  `fk_id_autor` int(11) NOT NULL,
  `act_autor_escreve_livro` int(11) DEFAULT '1',
  `del_autor_escreve_livro` int(11) DEFAULT '0',
  `ts_autor_escreve_livro` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `autores_escrevem_livros`
--

INSERT INTO `autores_escrevem_livros` (`id_autor_escreve_livro`, `fk_id_livro`, `fk_id_autor`, `act_autor_escreve_livro`, `del_autor_escreve_livro`, `ts_autor_escreve_livro`) VALUES
(1, 1, 2, 1, 0, '2015-11-07 12:51:01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id_carrinho` int(11) NOT NULL,
  `act_carrinho` int(11) DEFAULT '1',
  `del_carrinho` int(11) DEFAULT '0',
  `ts_carrinho` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`id_carrinho`, `act_carrinho`, `del_carrinho`, `ts_carrinho`) VALUES
(1, 1, 0, '2015-11-07 15:04:50'),
(3, 1, 0, '2015-11-07 15:08:53'),
(4, 1, 0, '2015-11-19 19:23:54'),
(5, 1, 0, '2015-11-19 19:24:20'),
(6, 1, 0, '2015-11-19 19:25:40'),
(7, 1, 0, '2015-11-19 19:30:10'),
(8, 1, 0, '2015-11-19 19:32:05'),
(9, 1, 0, '2015-11-19 19:43:00'),
(10, 1, 0, '2015-11-19 19:45:51'),
(11, 1, 0, '2015-11-19 19:46:11'),
(12, 1, 0, '2015-11-19 19:52:28'),
(13, 1, 0, '2015-11-19 19:53:53'),
(14, 1, 0, '2015-11-19 19:56:02'),
(15, 1, 0, '2015-11-19 20:29:43'),
(16, 1, 0, '2015-11-19 20:30:19'),
(17, 1, 0, '2015-11-19 20:31:09'),
(18, 1, 0, '2015-11-19 20:31:40'),
(19, 1, 0, '2015-11-19 21:08:25'),
(20, 1, 0, '2015-11-19 21:09:37');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compras`
--

CREATE TABLE `compras` (
  `id_compra` int(11) NOT NULL,
  `fk_id_utilizador` int(11) NOT NULL,
  `fk_id_carrinho` int(11) NOT NULL,
  `act_compra` int(11) DEFAULT '1',
  `del_compra` int(11) DEFAULT '0',
  `ts_compra` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `compras`
--

INSERT INTO `compras` (`id_compra`, `fk_id_utilizador`, `fk_id_carrinho`, `act_compra`, `del_compra`, `ts_compra`) VALUES
(1, 1, 1, 1, 0, '2015-11-07 15:07:35'),
(2, 1, 3, 1, 0, '2015-11-07 15:09:44'),
(3, 1, 19, 1, 0, '2015-11-19 21:08:26'),
(4, 1, 20, 1, 0, '2015-11-19 21:09:37');

-- --------------------------------------------------------

--
-- Estrutura da tabela `editoras`
--

CREATE TABLE `editoras` (
  `id_editora` int(11) NOT NULL,
  `nome_editora` varchar(50) DEFAULT NULL,
  `morada_editora` varchar(200) DEFAULT NULL,
  `act_editora` int(11) DEFAULT '1',
  `del_editora` int(11) DEFAULT '0',
  `ts_editora` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `editoras`
--

INSERT INTO `editoras` (`id_editora`, `nome_editora`, `morada_editora`, `act_editora`, `del_editora`, `ts_editora`) VALUES
(1, 'FCA', 'Lisboa', 1, 0, '2015-11-07 12:35:17'),
(2, 'Ediçoes Fnac', 'Porto', 1, 0, '2015-11-07 12:35:17'),
(3, 'Coimbra Editora', 'Coimbra', 1, 0, '2015-11-07 12:35:17'),
(4, 'Asa', 'Lisboa', 1, 0, '2015-11-07 12:35:17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `expedicoes`
--

CREATE TABLE `expedicoes` (
  `id_expedicao` int(11) NOT NULL,
  `fk_id_compra` int(11) NOT NULL,
  `morada_expedicao` varchar(45) DEFAULT NULL,
  `portes_expedicao` varchar(45) DEFAULT NULL,
  `estado_expedicao` varchar(45) DEFAULT NULL,
  `data_expedicao` datetime DEFAULT NULL,
  `act_expedicao` int(11) DEFAULT '1',
  `del_expedicao` int(11) DEFAULT '0',
  `ts_expedicao` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `generos`
--

CREATE TABLE `generos` (
  `id_genero` int(11) NOT NULL,
  `nome_genero` varchar(45) DEFAULT NULL,
  `act_genero` int(11) DEFAULT '1',
  `del_genero` int(11) DEFAULT '0',
  `ts_genero` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `generos`
--

INSERT INTO `generos` (`id_genero`, `nome_genero`, `act_genero`, `del_genero`, `ts_genero`) VALUES
(1, 'Romance', 1, 0, '2015-11-07 12:35:19'),
(2, 'Drama', 1, 0, '2015-11-07 12:35:19'),
(3, 'Ficção', 1, 0, '2015-11-07 12:35:19'),
(4, 'Banda Desenhada', 1, 0, '2015-11-07 12:35:19');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico_expedicoes`
--

CREATE TABLE `historico_expedicoes` (
  `id_historico_expedicao` int(11) NOT NULL,
  `fk_id_expedicao` int(11) NOT NULL,
  `data_historico_expedicao` datetime DEFAULT NULL,
  `estado_historico_expedicao` varchar(100) DEFAULT NULL,
  `act_historico_expedicao` int(11) DEFAULT '1',
  `del_historico_expedicao` int(11) DEFAULT '0',
  `ts_historico_expedicao` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id_livro` int(11) NOT NULL,
  `fk_id_editora` int(11) NOT NULL,
  `fk_id_genero` int(11) NOT NULL,
  `titulo_livro` varchar(100) DEFAULT NULL,
  `isbn_livro` varchar(11) DEFAULT NULL,
  `sinopse_livro` text,
  `preco_livro` decimal(2,0) DEFAULT NULL,
  `stock_livro` int(11) DEFAULT NULL,
  `num_pag_livro` varchar(5) DEFAULT NULL,
  `act_livro` int(11) DEFAULT '1',
  `del_livro` int(11) DEFAULT '0',
  `ts_livro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `capa_livro` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id_livro`, `fk_id_editora`, `fk_id_genero`, `titulo_livro`, `isbn_livro`, `sinopse_livro`, `preco_livro`, `stock_livro`, `num_pag_livro`, `act_livro`, `del_livro`, `ts_livro`, `capa_livro`) VALUES
(1, 1, 2, 'Levantado do chão', 'XXX-123-456', 'Um livro de Joseé Saramago', '25', 8, '150', 1, 0, '2015-11-07 12:41:03', 'capa_livro.jpg'),
(2, 2, 3, 'PHP para totos', '999-555-666', 'Pensando mais a longo prazo, o fenômeno da Internet nos obriga à análise do investimento em reciclagem técnica. Por outro lado, a estrutura atual da organização assume importantes posições no estabelecimento dos modos de operação convencionais. Podemos já vislumbrar o modo pelo qual a execução dos pontos do programa ainda não demonstrou convincentemente que vai participar na mudança do sistema de participação geral. \r\n\r\n          Nunca é demais lembrar o peso e o significado destes problemas, uma vez que a percepção das dificuldades causa impacto indireto na reavaliação das condições inegavelmente apropriadas. Do mesmo modo, a competitividade nas transações comerciais cumpre um papel essencial na formulação das regras de conduta normativas. Gostaria de enfatizar que o desenvolvimento contínuo de distintas formas de atuação pode nos levar a considerar a reestruturação das direções preferenciais no sentido do progresso. Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a constante divulgação das informações facilita a criação das diversas correntes de pensamento. ', '25', 5, '266', 1, 0, '2015-11-07 12:42:03', 'capa_marketing.jpg'),
(3, 4, 3, 'Moby Dick', '7894561111', 'fdg dfg dfg d g df gdfgd', '15', 64, '524', 1, 0, '2015-11-07 15:25:20', 'capa-livro-sarney.jpg'),
(4, 1, 4, 'tostas a metro', NULL, NULL, NULL, NULL, NULL, 1, 0, '2015-11-21 16:55:01', '9a19218e-9070-11e5-914e-3085a9985508.jpg'),
(5, 1, 1, 'Tostas a km', NULL, NULL, NULL, 22, NULL, 1, 0, '2015-11-21 17:03:26', 'tostas.jpg'),
(6, 3, 2, 'O livro de 2*feira', NULL, NULL, NULL, 50, NULL, 1, 0, '2015-11-24 19:01:56', 'd55c9b65-92dd-11e5-b669-3085a9985508.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros_esta_em_carrinho`
--

CREATE TABLE `livros_esta_em_carrinho` (
  `id_livro_esta_em_carrinho` int(11) NOT NULL,
  `fk_id_livro` int(11) NOT NULL,
  `fk_id_carrinho` int(11) NOT NULL,
  `quantidade_livro_esta_em_carrinho` int(11) DEFAULT NULL,
  `preco_livro_esta_em_carrinho` decimal(2,0) DEFAULT NULL,
  `act_livro_esta_em_carrinho` int(11) DEFAULT '1',
  `del_livro_esta_em_carrinho` int(11) DEFAULT '0',
  `ts_livro_esta_em_carrinho` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `livros_esta_em_carrinho`
--

INSERT INTO `livros_esta_em_carrinho` (`id_livro_esta_em_carrinho`, `fk_id_livro`, `fk_id_carrinho`, `quantidade_livro_esta_em_carrinho`, `preco_livro_esta_em_carrinho`, `act_livro_esta_em_carrinho`, `del_livro_esta_em_carrinho`, `ts_livro_esta_em_carrinho`) VALUES
(1, 2, 1, NULL, NULL, 1, 0, '2015-11-07 15:06:32'),
(2, 1, 1, 3, '12', 1, 0, '2015-11-07 15:06:58'),
(3, 2, 3, 25, '10', 1, 0, '2015-11-07 15:09:27'),
(9, 3, 14, NULL, NULL, 1, 0, '2015-11-19 19:56:02'),
(10, 1, 14, NULL, NULL, 1, 0, '2015-11-19 19:56:02'),
(11, 3, 17, NULL, '15', 1, 0, '2015-11-19 20:31:10'),
(12, 1, 17, NULL, '15', 1, 0, '2015-11-19 20:31:10'),
(13, 3, 18, NULL, '15', 1, 0, '2015-11-19 20:31:40'),
(14, 1, 18, NULL, '25', 1, 0, '2015-11-19 20:31:40'),
(15, 3, 19, 1, '15', 1, 0, '2015-11-19 21:08:25'),
(16, 1, 19, 1, '25', 1, 0, '2015-11-19 21:08:25'),
(17, 3, 20, 1, '15', 1, 0, '2015-11-19 21:09:37'),
(18, 1, 20, 1, '25', 1, 0, '2015-11-19 21:09:37');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizadores`
--

CREATE TABLE `utilizadores` (
  `id_utilizador` int(11) NOT NULL,
  `nome_utilizador` varchar(200) DEFAULT NULL,
  `login_utilizador` varchar(20) DEFAULT NULL,
  `pass_utilizador` varchar(100) DEFAULT NULL,
  `nif_utilizador` varchar(11) DEFAULT NULL,
  `email_utilizador` varchar(100) DEFAULT NULL,
  `morada_utilizador` varchar(300) DEFAULT NULL,
  `cod_postal_utilizador` varchar(8) DEFAULT NULL,
  `act_utilizador` int(11) DEFAULT '1',
  `del_utilizador` int(11) DEFAULT '0',
  `ts_utilizador` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `utilizadores`
--

INSERT INTO `utilizadores` (`id_utilizador`, `nome_utilizador`, `login_utilizador`, `pass_utilizador`, `nif_utilizador`, `email_utilizador`, `morada_utilizador`, `cod_postal_utilizador`, `act_utilizador`, `del_utilizador`, `ts_utilizador`) VALUES
(1, 'hugo', 'hugo', '202cb962ac59075b964b07152d234b70', '111222333', 'huog@mail.com', 'Coimbra', '3000-258', 1, 0, '2015-11-07 15:04:23'),
(2, 'Joao Manuel', 'jmanuel', '202cb962ac59075b964b07152d234b70', '789456123', 'jmanuel@gmail.com', 'Lisboa', '1000', 1, 0, '2015-11-07 15:24:23'),
(3, 'joaquim maqrues', 'jmarques', '202cb962ac59075b964b07152d234b70', '123456789', 'jm@mail.com', 'Coimbra', '1000', 1, 0, '2015-11-14 16:48:29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizadores_backoffice`
--

CREATE TABLE `utilizadores_backoffice` (
  `id_utilizador_backoffice` int(11) NOT NULL,
  `login_utilizador_backoffice` varchar(45) DEFAULT NULL,
  `pass_utilizador_backoffice` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `utilizadores_backoffice`
--

INSERT INTO `utilizadores_backoffice` (`id_utilizador_backoffice`, `login_utilizador_backoffice`, `pass_utilizador_backoffice`) VALUES
(1, 'admin', 'd8578edf8458ce06fbc5bb76a58c5ca4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`id_autor`);

--
-- Indexes for table `autores_escrevem_livros`
--
ALTER TABLE `autores_escrevem_livros`
  ADD PRIMARY KEY (`id_autor_escreve_livro`),
  ADD KEY `fk_livros_has_autores_autores1_idx` (`fk_id_autor`),
  ADD KEY `fk_livros_has_autores_livros1_idx` (`fk_id_livro`);

--
-- Indexes for table `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id_carrinho`);

--
-- Indexes for table `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `fk_compras_utilizadores1_idx` (`fk_id_utilizador`),
  ADD KEY `fk_compras_carrinho1_idx` (`fk_id_carrinho`);

--
-- Indexes for table `editoras`
--
ALTER TABLE `editoras`
  ADD PRIMARY KEY (`id_editora`);

--
-- Indexes for table `expedicoes`
--
ALTER TABLE `expedicoes`
  ADD PRIMARY KEY (`id_expedicao`),
  ADD KEY `fk_expedicoes_compras1_idx` (`fk_id_compra`);

--
-- Indexes for table `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indexes for table `historico_expedicoes`
--
ALTER TABLE `historico_expedicoes`
  ADD PRIMARY KEY (`id_historico_expedicao`),
  ADD KEY `fk_historico_expedicoes_expedicoes1_idx` (`fk_id_expedicao`);

--
-- Indexes for table `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id_livro`),
  ADD KEY `fk_livros_editoras_idx` (`fk_id_editora`),
  ADD KEY `fk_livros_generos1_idx` (`fk_id_genero`);

--
-- Indexes for table `livros_esta_em_carrinho`
--
ALTER TABLE `livros_esta_em_carrinho`
  ADD PRIMARY KEY (`id_livro_esta_em_carrinho`),
  ADD KEY `fk_livros_has_carrinho_carrinho1_idx` (`fk_id_carrinho`),
  ADD KEY `fk_livros_has_carrinho_livros1_idx` (`fk_id_livro`);

--
-- Indexes for table `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD PRIMARY KEY (`id_utilizador`);

--
-- Indexes for table `utilizadores_backoffice`
--
ALTER TABLE `utilizadores_backoffice`
  ADD PRIMARY KEY (`id_utilizador_backoffice`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autores`
--
ALTER TABLE `autores`
  MODIFY `id_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `autores_escrevem_livros`
--
ALTER TABLE `autores_escrevem_livros`
  MODIFY `id_autor_escreve_livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id_carrinho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `editoras`
--
ALTER TABLE `editoras`
  MODIFY `id_editora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `expedicoes`
--
ALTER TABLE `expedicoes`
  MODIFY `id_expedicao` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `generos`
--
ALTER TABLE `generos`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `historico_expedicoes`
--
ALTER TABLE `historico_expedicoes`
  MODIFY `id_historico_expedicao` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `livros`
--
ALTER TABLE `livros`
  MODIFY `id_livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `livros_esta_em_carrinho`
--
ALTER TABLE `livros_esta_em_carrinho`
  MODIFY `id_livro_esta_em_carrinho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `utilizadores`
--
ALTER TABLE `utilizadores`
  MODIFY `id_utilizador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `utilizadores_backoffice`
--
ALTER TABLE `utilizadores_backoffice`
  MODIFY `id_utilizador_backoffice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `autores_escrevem_livros`
--
ALTER TABLE `autores_escrevem_livros`
  ADD CONSTRAINT `fk_livros_has_autores_autores1` FOREIGN KEY (`fk_id_autor`) REFERENCES `autores` (`id_autor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_livros_has_autores_livros1` FOREIGN KEY (`fk_id_livro`) REFERENCES `livros` (`id_livro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `fk_compras_carrinho1` FOREIGN KEY (`fk_id_carrinho`) REFERENCES `carrinho` (`id_carrinho`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_compras_utilizadores1` FOREIGN KEY (`fk_id_utilizador`) REFERENCES `utilizadores` (`id_utilizador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `expedicoes`
--
ALTER TABLE `expedicoes`
  ADD CONSTRAINT `fk_expedicoes_compras1` FOREIGN KEY (`fk_id_compra`) REFERENCES `compras` (`id_compra`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `historico_expedicoes`
--
ALTER TABLE `historico_expedicoes`
  ADD CONSTRAINT `fk_historico_expedicoes_expedicoes1` FOREIGN KEY (`fk_id_expedicao`) REFERENCES `expedicoes` (`id_expedicao`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `livros`
--
ALTER TABLE `livros`
  ADD CONSTRAINT `fk_livros_editoras` FOREIGN KEY (`fk_id_editora`) REFERENCES `editoras` (`id_editora`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_livros_generos1` FOREIGN KEY (`fk_id_genero`) REFERENCES `generos` (`id_genero`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `livros_esta_em_carrinho`
--
ALTER TABLE `livros_esta_em_carrinho`
  ADD CONSTRAINT `fk_livros_has_carrinho_carrinho1` FOREIGN KEY (`fk_id_carrinho`) REFERENCES `carrinho` (`id_carrinho`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_livros_has_carrinho_livros1` FOREIGN KEY (`fk_id_livro`) REFERENCES `livros` (`id_livro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
