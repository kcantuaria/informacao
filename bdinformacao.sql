-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Out-2021 às 23:22
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdinformacao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbempesa`
--

CREATE TABLE `tbempesa` (
  `id` int(11) NOT NULL,
  `pessoa` text NOT NULL,
  `contribuinte` text NOT NULL,
  `cadastro` text NOT NULL,
  `cnpj` varchar(20) NOT NULL,
  `estado` text NOT NULL,
  `estadual` varchar(100) NOT NULL,
  `municipal` varchar(100) NOT NULL,
  `razao` varchar(200) NOT NULL,
  `fantasia` varchar(200) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `telefoneSecundario` varchar(14) NOT NULL,
  `email` varchar(250) NOT NULL,
  `cep` int(10) NOT NULL,
  `logradouro` varchar(300) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `complemento` varchar(250) NOT NULL,
  `bairro` varchar(200) NOT NULL,
  `cidade` varchar(200) NOT NULL,
  `pais` varchar(200) NOT NULL,
  `observacao` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbempesa`
--

INSERT INTO `tbempesa` (`id`, `pessoa`, `contribuinte`, `cadastro`, `cnpj`, `estado`, `estadual`, `municipal`, `razao`, `fantasia`, `telefone`, `telefoneSecundario`, `email`, `cep`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `pais`, `observacao`) VALUES
(4, 'Juridica', 'Não Contribuinte', 'Real', '04.820.764/0001-74', 'Bahia', '055511-30', '055511-30', 'Gabriel e Clara Filmagens Ltda', 'Gabriel e Clara Filmagens Ltda', '(74) 3740-4903', '(74) 3740-4903', 'contato@gabrieleclarafilmagensltda.com.br', 48908050, 'Quadra Cinco', '960', 'João Paulo II', 'João Paulo II', 'Juazeiro', 'Brasil', 'Empresa ficticia Gerada no gerador de empresa site: https://www.4devs.com.br/gerador_de_empresas'),
(7, 'Juridica', 'Não Contribuinte', 'Real', '07.820.764/0001-74', 'Goiás', '055511-30', '055511-30', 'Gabriel e Clara Filmagens Ltda', 'Gabriel e Clara Filmagens Ltda', '(74) 3740-4903', '(74) 3740-4903', '', 48908050, 'Quadra Cinco', '', 'João Paulo II', 'João Paulo II', 'Juazeiro', '', 'Empresa ficticia Gerada no gerador de empresa site: https://www.4devs.com.br/gerador_de_empresas'),
(8, 'Juridica', 'Não Contribuinte', 'Real', '08.820.764/0001-74', 'Bahia', '055511-30', '055511-30', 'Gabriel e Clara Filmagens Agora sim', 'Gabriel e Clara Filmagens Ltda', '(74) 3740-4903', '(74) 3740-4903', 'contato@gabrieleclarafilmagensltda.com.br', 48908050, 'Quadra Cinco', '960', 'João Paulo II', 'João Paulo II', 'Juazeiro', 'Brasil', 'Empresa ficticia Gerada no gerador de empresa site=&gt; https=&gt;//www.4devs.com.br/gerador_de_empresas'),
(9, 'Juridica', 'Não Contribuinte', 'Real', '08.820.764/0001-74', 'Bahia', '055511-30', '055511-30', 'Gabriel e Clara Filmagens Agora sim', 'Gabriel e Clara Filmagens Ltda', '(74) 3740-4903', '(74) 3740-4903', 'contato@gabrieleclarafilmagensltda.com.br', 48908050, 'Quadra Cinco', '960', 'João Paulo II', 'João Paulo II', 'Juazeiro', 'Brasil', 'Empresa ficticia Gerada no gerador de empresa site=&gt; https=&gt;//www.4devs.com.br/gerador_de_empresas'),
(10, 'Juridica', 'Não Contribuinte', 'Real', '08.820.764/0001-74', 'Distrito Federal', '055511-30', '055511-30', 'Gabriel e Clara Filmagens Agora sim', 'Gabriel e Clara Filmagens Ltda', '(74) 3740-4903', '(74) 3740-4903', '', 48908050, 'Quadra Cinco', '0', 'João Paulo II', 'João Paulo II', 'Juazeiro', '', 'Empresa ficticia Gerada no gerador de empresa site=&gt; https=&gt;//www.4devs.com.br/gerador_de_empresas');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbempesa`
--
ALTER TABLE `tbempesa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbempesa`
--
ALTER TABLE `tbempesa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
