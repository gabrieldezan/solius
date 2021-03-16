-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 12-Mar-2021 às 19:08
-- Versão do servidor: 10.3.28-MariaDB
-- versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `solius_site`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(11) NOT NULL,
  `imagem` longtext DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `banner`
--

INSERT INTO `banner` (`id_banner`, `imagem`, `titulo`, `descricao`, `link`) VALUES
(1, 'energia-solar-202001072008.png', 'Temos a melhor solução em energia para você.', 'Conheça nossos serviços', 'https://solius.com.br/#servicos'),
(2, 'deixe-o-sol-pagar-sua-conta-de-energia-202005081954.png', 'Deixe o Sol pagar sua Conta de Energia', 'Solicite um Orçamento', 'https://solius.com.br/orcamento'),
(3, 'confira-202008211123.jpg', 'Confira!', 'Compre agora mesmo', 'https://loja.solius.com.br/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `blog_imagens`
--

CREATE TABLE `blog_imagens` (
  `id_blog_imagens` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `blog_marcadores`
--

CREATE TABLE `blog_marcadores` (
  `id_blog_marcadores` int(11) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `posicao` int(11) DEFAULT NULL,
  `url_amigavel` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `blog_postagem`
--

CREATE TABLE `blog_postagem` (
  `id_blog_postagem` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `texto` longtext DEFAULT NULL,
  `imagem` longtext DEFAULT NULL,
  `data_criacao` datetime DEFAULT NULL,
  `data_publicacao` datetime DEFAULT NULL,
  `url_amigavel` varchar(255) DEFAULT NULL,
  `visualizacoes` int(11) DEFAULT 0,
  `id_usuarios` int(11) NOT NULL,
  `id_blog_marcadores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cases`
--

CREATE TABLE `cases` (
  `id_cases` int(11) NOT NULL,
  `servico` varchar(255) DEFAULT NULL,
  `arquivo` longtext DEFAULT NULL,
  `imagem` longtext DEFAULT NULL,
  `id_clientes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_clientes` int(11) NOT NULL,
  `imagem` longtext DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_clientes`, `imagem`, `descricao`, `endereco`, `cidade`, `estado`, `link`, `status`) VALUES
(1, 'gd-solar-202001232237.png', 'GD SOLAR', 'Avenida Presidente Juscelino Kubitschek, 1830 Torre 4 - Conjunto 24 - Vila Nova Conceição', 'São Paulo', 'São Paulo', 'http://www.gdsolar.com.br/pt/home-pt/', 1),
(2, 'solargrid-202001232242.png', 'SOLARGRID', ' R. Gen. Rabêlo, 43 - Gávea', 'Rio de Janeiro', 'RJ', 'https://www.solargrid.com.br/', 1),
(3, 'gensolaris-202001232238.jpg', 'GENSOLARIS', 'R. Sampaio Vidal, 1032 - Jardim Paulistano', 'São Paulo', 'São Paulo', 'http://gensolaris.com.br/', 1),
(4, 'solvi-202001232249.png', 'SOLVÍ', 'Av. Gonçalo Madeira, 400 - Jaguaré', 'São Paulo', 'SP', 'https://www.solvi.com/', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `depoimentos`
--

CREATE TABLE `depoimentos` (
  `id_depoimentos` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `texto` longtext DEFAULT NULL,
  `imagem` longtext DEFAULT NULL,
  `id_clientes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `id_enderecos` int(11) NOT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`id_enderecos`, `endereco`, `cidade`, `estado`) VALUES
(1, '<b>Matriz</b><br>Rua Amoreira, 595 - Sala C<br> Jardim das Laranjeiras', 'Foz do Iguaçu', 'PR'),
(2, '<b>Filial Bahia</b><br> dhenrique@solius.com.br<br>Tel: (71) 99971-6834 ', 'Salvador', 'BA'),
(3, '<b>Filial Medianeira</b><br> Rua Amapá, 2665, Bairro Nazaré', 'Medianeira', 'PR');

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipe`
--

CREATE TABLE `equipe` (
  `id_equipe` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `cargo` varchar(255) DEFAULT NULL,
  `imagem` longtext DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipe_contato`
--

CREATE TABLE `equipe_contato` (
  `id_equipe_contato` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `icone` varchar(255) DEFAULT NULL,
  `link` longtext DEFAULT NULL,
  `id_equipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeria_grupo`
--

CREATE TABLE `galeria_grupo` (
  `id_galeria_grupo` int(11) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `galeria_grupo`
--

INSERT INTO `galeria_grupo` (`id_galeria_grupo`, `descricao`, `status`) VALUES
(1, 'Minigeração (Projetos > 75kW)', 1),
(2, 'Microgeração (Projetos < 75kW)', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeria_imagem`
--

CREATE TABLE `galeria_imagem` (
  `id_galeria_imagem` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `imagem1` longtext DEFAULT NULL,
  `imagem2` longtext DEFAULT NULL,
  `imagem3` longtext DEFAULT NULL,
  `imagem4` longtext DEFAULT NULL,
  `imagem5` longtext DEFAULT NULL,
  `descricao` longtext DEFAULT NULL,
  `detalhes` longtext DEFAULT NULL,
  `link1` longtext DEFAULT NULL,
  `link2` longtext DEFAULT NULL,
  `youtube` longtext DEFAULT NULL,
  `url_amigavel` varchar(255) DEFAULT NULL,
  `id_galeria_grupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `galeria_imagem`
--

INSERT INTO `galeria_imagem` (`id_galeria_imagem`, `titulo`, `imagem1`, `imagem2`, `imagem3`, `imagem4`, `imagem5`, `descricao`, `detalhes`, `link1`, `link2`, `youtube`, `url_amigavel`, `id_galeria_grupo`) VALUES
(4, 'Residencial D.D.P. - Foz do Iguaçu/PR', 'residencial-foz-do-iguacupr-1-202001241445.jpg', 'residencial-foz-do-iguacupr-2-202001241445.jpg', 'residencial-foz-do-iguacupr-3-202001241445.jpeg', '', '', 'Sistema Residencial de 3.35kWp.<br>Inversor REFUSOL 3 kW<br>10 placas BYD de 335 Wp.', '', 'Geração: 3.35 kWp', 'Produção Mensal: 380 kWh', 'Economia: R$ 3648,00 por ano', 'residencial-ddp-foz-do-iguacupr', 2),
(5, 'Residencial S.J.J. - Foz do Iguaçu/PR', 'residencial-foz-do-iguacupr-1-202001271318.jpeg', 'residencial-foz-do-iguacupr-2-202001271318.jpeg', '', '', '', '<span>Sistema Residencial de 4.69 kWp.<br>Inversor REFUSOL 5 kW<br>14 placas BYD de 335 Wp.</span>', '', 'Geração: 4.69 kWp', 'Produção Mensal: 532 kWh', 'Economia: R$ 5.107,00 por ano', 'residencial-sjj-foz-do-iguacupr', 2),
(6, 'Residencial S.F. - Foz do Iguaçu/PR', 'residencial-foz-do-iguacupr-1-202001271340.jpeg', 'residencial-foz-do-iguacupr-2-202001271340.jpg', 'residencial-foz-do-iguacupr-3-202001271340.jpg', 'residencial-foz-do-iguacupr-4-202001271340.jpg', '', 'Sistema Residencial de 3.30 kWp.<br>Inversor SOLIS 3 kW<br>10 placas RISEN de 330 Wp.', '', 'Geração: 3.30 kWp', 'Produção Mensal: 375 kWh', 'Economia: R$ 3.600,00 por ano', 'residencial-sf-foz-do-iguacupr', 2),
(7, 'Residencial V.R. - Foz do Iguaçu/PR', 'residencial-foz-do-iguacupr-1-202001271852.jpeg', 'residencial-foz-do-iguacupr-2-202001271851.jpg', 'residencial-foz-do-iguacupr-3-202001271851.jpg', '', '', 'Sistema Residencial de 3.35kWp.<br>Inversor ABB 3.30 kW<br>10 placas BYD de 335 Wp.', '', 'Geração: 3.35 kWp', 'Produção Mensal: 380 kWh', 'Economia: R$ 3.648,00 por ano', 'residencial-vr-foz-do-iguacupr', 2),
(8, 'UFV Brasília de Minas - MG', 'ufv-brasilia-de-minas-mg-1-202005082114.jpg', 'ufv-brasilia-de-minas-mg-2-202005082114.jpg', '', '', '', 'Local: Brasília de Minas - MG<br>Cliente: GD Solar Holding S.A.<br>Potência Instalada: 5000 kW<br>Distribuidora: CEMIG&nbsp;&nbsp;', 'Escopo dos serviços:\r\n     Projeto de Cabine Primária\r\n     Estudo de Proteção e Seletividade\r\n     Processo de Solicitação de Acesso na CEMIG', 'Potência Instalada: 5000 kW ', 'Distribuidora: CEMIG', '', 'ufv-brasilia-de-minas-mg', 1),
(9, 'UFV Oliveira dos Brejinhos / BA', 'ufv-oliveira-dos-brejinhos-ba-1-202005082110.jpeg', 'ufv-oliveira-dos-brejinhos-ba-2-202005082110.jpeg', 'ufv-oliveira-dos-brejinhos-ba-3-202005082110.jpeg', '', '', 'UFV Oliveira dos Brejinhos - 5000 kW', '', 'Potência: 5000 kW', 'Distribuidora: COELBA', '', 'ufv-oliveira-dos-brejinhos-ba', 1),
(10, 'Residencial J.A.A - Foz do Iguaçu/PR', 'residencial-jaa-foz-do-iguacupr-1-202005082127.jpg', 'residencial-jaa-foz-do-iguacupr-2-202005082127.jpg', 'residencial-jaa-foz-do-iguacupr-3-202005082127.jpg', '', '', '', '', 'Geração: 3.35 kWp', 'Produção Mensal: 380 kWh', 'Economia: R$ 3648,00 por ano', 'residencial-jaa-foz-do-iguacupr', 2),
(11, 'Residencial P.M.C - Foz do Iguaçu/PR', 'residencial-pmc-foz-do-iguacupr-1-202007241105.jpg', 'residencial-pmc-foz-do-iguacupr-2-202007241105.jpg', 'residencial-pmc-foz-do-iguacupr-3-202007241105.jpg', '', '', 'Sistema Residencial de 4.02kWp.<br>Inversor REFUSOL 5 kW<br>12 placas BYD de 335 Wp.<br><br>', '', 'Geração: 4.02 kWp', 'Produção Mensal: 456 kWh', 'Economia: R$ 4377,00 por ano', 'residencial-pmc-foz-do-iguacupr', 2),
(12, 'Residencial A.A.F - Foz do Iguaçu/PR', 'residencial-aaf-foz-do-iguacupr-1-202007241704.jpg', 'residencial-aaf-foz-do-iguacupr-2-202007241704.jpg', 'residencial-aaf-foz-do-iguacupr-3-202007241709.png', '', '', 'Sistema Residencial de 3.35kWp.<br>Inversor REFUSOL 3 kW<br>10 placas BYD de 335 Wp.', '', 'Geração: 3.35 kWp', 'Produção Mensal: 380 kWh', 'Economia: R$ 3648,00 por ano', 'residencial-aaf-foz-do-iguacupr', 2),
(13, 'Residencial C.L.C. - Foz do Iguaçu/PR', 'residencial-ddp-foz-do-iguacupr-1-202007241718.png', 'residencial-ddp-foz-do-iguacupr-2-202007241718.png', 'residencial-clc-foz-do-iguacupr-3-202007241725.png', 'residencial-clc-foz-do-iguacupr-4-202007241725.png', '', 'Sistema Residencial de 3.35kWp.<br>Inversor REFUSOL 3 kW<br><span>10 placas BYD de 335 Wp.</span>', '', 'Geração: 5.36 kWp', 'Produção Mensal: 602 kWh', 'Economia: R$ 5836,80 por ano', 'residencial-clc-foz-do-iguacupr', 2),
(14, 'Projeto 11', 'valdeci-1-202102111807.jpg', 'valdeci-2-202102111807.jpg', 'valdeci-3-202102111807.jpg', 'valdeci-4-202102111807.jpg', 'valdeci-5-202102111807.jpg', '', '', 'Geração: 3.35 kWp', 'Produção Mensal: 4.686,92 kWh', 'Economia: R$ 3.562,06 por ano', 'projeto-11', 2),
(15, 'Projeto 12', 'dirceu-1-202102111811.jpg', 'dirceu-2-202102111811.jpg', 'dirceu-3-202102111811.jpg', 'dirceu-4-202102111811.jpg', 'dirceu-5-202102111811.jpg', '', '', 'Geração: 3.35 kWp', 'Produção Mensal: 4.686,92 kWh', 'Economia: R$ 3.562,06 por ano', 'projeto-12', 2),
(16, 'Projeto 13', 'sandoval-1-202102111816.jpg', 'sandoval-2-202102111816.jpg', 'sandoval-3-202102111816.jpg', 'sandoval-4-202102111816.jpg', 'sandoval-5-202102111816.jpg', '', '', 'Geração: 5.67 kWp', 'Produção Mensal: 7.967,76 kWh', 'Economia: R$ 6.055,50 por ano', 'projeto-13', 2),
(17, 'Projeto 14', 'sergio-ferreira-1-202102111826.jpg', 'sergio-ferreira-2-202102111826.jpg', 'sergio-ferreira-3-202102111826.jpg', 'sergio-ferreira-4-202102111826.jpg', 'sergio-ferreira-5-202102111826.jpg', '', '', 'Geração: 3.30 kWp', 'Produção Mensal: 4.616,96 kWh', 'Economia: R$ 3.508,89 por ano', 'projeto-14', 2),
(18, 'Projeto 15', 'joaquim-1-202102111837.jpg', 'joaquim-2-202102111837.jpg', 'joaquim-3-202102111837.jpg', 'joaquim-4-202102111837.jpg', 'joaquim-5-202102111837.jpg', '', '', 'Geração: 3.35 kWp', 'Produção Mensal: 4.686,92 kWh', 'Economia: R$ 3.562,06] por ano', 'projeto-15', 2),
(19, 'Projeto 16', 'pedro-1-202102111842.jpg', 'pedro-2-202102111842.jpg', 'pedro-3-202102111842.jpg', 'pedro-4-202102111842.jpg', 'pedro-5-202102111842.jpg', '', '', 'Geração: 4.69 kWp', 'Produção Mensal: 6.561,69 kWh', 'Economia: R$ 4.986,88 por ano', 'projeto-16', 2),
(20, 'Projeto 17', 'antonio-1-202102111843.jpg', 'antonio-2-202102111843.jpg', 'antonio-3-202102111843.jpg', 'antonio-4-202102111843.jpg', 'antonio-5-202102111843.jpg', '', '', 'Geração: 3.35 kWp', 'Produção Mensal: 4.686,92 kWh', 'Economia: R$ 3.562,06 por ano', 'projeto-17', 2),
(21, 'Projeto 18', 'rozislanda-1-202102111844.jpg', 'rozislanda-2-202102111844.jpg', 'rozislanda-3-202102111844.jpg', 'rozislanda-4-202102111844.jpg', '', '', '', 'Geração: 6.70 kWp', 'Produção Mensal: 9.373,84 kWh', 'Economia: R$ 7.124,12 por ano', 'projeto-18', 2),
(22, 'Projeto 19', 'oficina-do-sorvete-1-202102111910.jpg', 'oficina-do-sorvete-2-202102111910.jpg', '', '', '', '', '', 'Geração: 17.42 kWp', 'Produção Mensal: 24.371,97 kWh', 'Economia: R$ 18.522,70 por ano', 'projeto-19', 2),
(23, 'Projeto 20', 'fabio-juliana-1-202102111911.jpg', 'fabio-juliana-2-202102111911.jpg', 'fabio-juliana-3-202102111911.jpg', 'fabio-juliana-4-202102111911.jpg', 'fabio-juliana-5-202102111911.jpg', '', '', 'Geração: 5.04 kWp', 'Produção Mensal: 7.051,36 kWh', 'Economia: R$ 5.359,04 por ano', 'projeto-20', 2),
(24, 'Projeto 21', 'maurino-1-202102111912.jpg', 'maurino-2-202102111912.jpg', 'maurino-3-202102111912.jpg', '', '', '', '', 'Geração: 2.46 kWp', 'Produção Mensal: 3.441,74 kWh', 'Economia: R$ 2.615,72 por ano', 'projeto-21', 2),
(25, 'Projeto 22', 'orlei--1-202102121324.jpg', 'orlei--2-202102121324.jpg', 'orlei--3-202102121324.jpg', 'orlei--4-202102121324.jpg', '', '', '', 'Geração: 6.97 kWp', 'Produção Mensal: 9.751,59 kWh', 'Economia: R$ 7.411,21 por ano', 'projeto-22', 2),
(26, 'Projeto 23', 'gilberto-1-202102121434.jpg', 'gilberto-2-202102121434.jpg', 'gilberto-3-202102121434.jpg', 'gilberto-4-202102121434.jpg', 'gilberto-5-202102121434.jpg', '', '', 'Geração: 4.92 kWp', 'Produção Mensal: 6.883,47 kWh', 'Economia: R$ 5.231,44 por ano', 'projeto-23', 2),
(27, 'Projeto 24', 'jaqueline-1-202102121434.jpg', 'jaqueline-2-202102121434.jpg', 'jaqueline-3-202102121434.jpg', 'jaqueline-4-202102121434.jpg', 'jaqueline-5-202102121434.jpg', '', '', 'Geração: 5.72 kWp', 'Produção Mensal: 8.002,74 kWh', 'Economia: R$ 6.082,08 por ano', 'projeto-24', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `informacoes`
--

CREATE TABLE `informacoes` (
  `id_informacoes` int(11) NOT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `icone` varchar(45) DEFAULT NULL,
  `imagem_destaque` varchar(255) DEFAULT NULL,
  `texto` longtext DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `id_paginas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `informacoes`
--

INSERT INTO `informacoes` (`id_informacoes`, `titulo`, `icone`, `imagem_destaque`, `texto`, `link`, `data`, `hora`, `id_paginas`) VALUES
(1, 'Redução de 95% Na Sua Fatura', '', 'vantagens-reducao-de-95-na-sua-fatura-202001161304.jpg', '<p>Com a instala&ccedil;&atilde;o de um sistema solar, voc&ecirc; paga apenas o m&iacute;nimo na conta de energia el&eacute;trica (custo de disponibilidade). Voc&ecirc; fica protegido contra os aumentos constantes do custo da energia el&eacute;trica (reajustes tarif&aacute;rios da distribuidora).</p>', '', '0000-00-00', '00:00:00', 1),
(2, 'Retorno Garantido Do Investimento', '', 'vantagens-retorno-garantido-do-investimento-202001161304.jpg', '<p>Quem j&aacute; implantou o sistema de gera&ccedil;&atilde;o pr&oacute;pria em casa ou na empresa &eacute; testemunha de como o retorno financeiro da energia solar &eacute; extremamente vantajoso. O sistema gerador de energia solar tem longa durabilidade, acima de 25 anos.</p>', '', '0000-00-00', '00:00:00', 1),
(3, 'Valoriza seu imóvel em até 30%', '', 'vantagens-valoriza-seu-imovel-em-ate-30-202001161305.png', '<p>Pesquisas recentes apontam que compradores, est&atilde;o dispostos a pagar mais por casas que tenham tecnologias sustent&aacute;veis, como a ado&ccedil;&atilde;o de um sistema fotovoltaico, visando as futuras economias que uma constru&ccedil;&atilde;o desse tipo oferece. A valoriza&ccedil;&atilde;o pode chegar em at&eacute; 30%. Al&eacute;m de contribuir para a&nbsp; do sutentabilidade planeta &eacute; um investimento que resulta na redu&ccedil;&atilde;o consider&aacute;vel dos gastos com as contas de luz.</p>', '', '0000-00-00', '00:00:00', 1),
(4, 'Visita Técnica', 'fa fa-code-fork', '', '<p>&Eacute; realizada no local da instala&ccedil;&atilde;o para a coleta de todas as informa&ccedil;&otilde;es necess&aacute;rias, anota&ccedil;&otilde;es e medi&ccedil;&otilde;es.</p>', '', '0000-00-00', '00:00:00', 2),
(5, 'Dimensionamento', 'fa fa-compass', '', '<p>Com dados coletados na visita t&eacute;cnica e tamb&eacute;m na pr&oacute;pria fatura de energia, ser&aacute; definido o sistema ideal para atendimento da demanda de consumo. Nessa fase ser&aacute; estabelecida a proje&ccedil;&atilde;o de implanta&ccedil;&atilde;o das &aacute;reas dispon&iacute;veis.</p>', '', '0000-00-00', '00:00:00', 2),
(6, 'Engenharia Especializada', 'fa fa-gear', '', '<p>Nosso departamento de engenharia inicia os trabalhos, visando a futura homologa&ccedil;&atilde;o. &Eacute; realizada a entrada da documenta&ccedil;&atilde;o junto &agrave; concession&aacute;ria de energia el&eacute;trica.</p>', '', '0000-00-00', '00:00:00', 2),
(7, 'Execução', 'fa fa-thumbs-up', '', '<p>O servi&ccedil;o de execu&ccedil;&atilde;o segue um rigoroso padr&atilde;o de qualidade, seguran&ccedil;a e normas t&eacute;cnicas, conforme determina a resolu&ccedil;&atilde;o 482/2012 da ANEEL. Tamb&eacute;m s&atilde;o observadas as Normas NR10 e NR35 na m&atilde;o de obra de instala&ccedil;&atilde;o.</p>', '', '0000-00-00', '00:00:00', 2),
(8, 'Homologação', 'fa fa-check', '', '<p>A norma da ANEEL estabelece que a concession&aacute;ria tem um prazo definido para fazer a troca do medidor comum pelo medidor bidirecional. Dentro deste prazo, a concession&aacute;ria comparecer&aacute; ao local da instala&ccedil;&atilde;o.</p>', '', '0000-00-00', '00:00:00', 2),
(9, 'Manutenção do Sistema', 'fa fa-wrench', '', '<p>A manuten&ccedil;&atilde;o do sistema de energia solar &eacute; m&iacute;nima e de baixo custo, mas deve ser feita. A manuten&ccedil;&atilde;o consiste basicamente em limpar as placas solares a cada ano, ou quando o sistema apresentar uma queda na produ&ccedil;&atilde;o de energia.</p>', '', '0000-00-00', '00:00:00', 2),
(10, 'Marcas que Trabalhamos', '', 'certificacao-de-paineis-importados-produtos-que-comercializamos-202001232219.jpg', '', '', '0000-00-00', '00:00:00', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `informacoes_gerais`
--

CREATE TABLE `informacoes_gerais` (
  `nome_empresa` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `mapa` longtext DEFAULT NULL,
  `horario_atendimento` varchar(255) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `whatsapp` varchar(45) DEFAULT NULL,
  `celular1` varchar(45) DEFAULT NULL,
  `celular2` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `email_contato` varchar(100) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `pinterest` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `logo_principal` varchar(255) DEFAULT NULL,
  `logo_secundaria` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `informacoes_gerais`
--

INSERT INTO `informacoes_gerais` (`nome_empresa`, `titulo`, `descricao`, `mapa`, `horario_atendimento`, `telefone`, `whatsapp`, `celular1`, `celular2`, `email`, `email_contato`, `facebook`, `twitter`, `instagram`, `youtube`, `linkedin`, `pinterest`, `favicon`, `logo_principal`, `logo_secundaria`) VALUES
('Solius Energia Solar', 'Solius Energia Solar', 'Empresa especializada em sistemas fotovoltaicos de pequeno à grande porte com grande expertise em projetos, consultoria, venda e instalação de equipamentos fotovoltaicos.', '', 'Segunda a sexta: <br>08:30 - 12:00 <br>13:30 - 18:00', '(45) 3029-9925', '(45) 3029-9925', '', '', 'contato@solius.com.br', 'contato@solius.com.br', 'SoliusEnergiaSolar', '', 'solius_solar', '', '', '', 'favicon-solius-202001072032.png', 'logo-solius-202001072032.png', 'logo-alternativa-solius-202001072032.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `missao_visao_valores`
--

CREATE TABLE `missao_visao_valores` (
  `icone_missao` varchar(255) DEFAULT NULL,
  `imagem_missao` longtext DEFAULT NULL,
  `texto_missao` longtext DEFAULT NULL,
  `icone_visao` varchar(255) DEFAULT NULL,
  `imagem_visao` longtext DEFAULT NULL,
  `texto_visao` longtext DEFAULT NULL,
  `icone_valores` varchar(255) DEFAULT NULL,
  `imagem_valores` longtext DEFAULT NULL,
  `texto_valores` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `missao_visao_valores`
--

INSERT INTO `missao_visao_valores` (`icone_missao`, `imagem_missao`, `texto_missao`, `icone_visao`, `imagem_visao`, `texto_visao`, `icone_valores`, `imagem_valores`, `texto_valores`) VALUES
('', '', 'Nossa missão é fornecer soluções personalizadas e suporte ao longo da vida, capacitando pessoas, comunidades e empresas a controlar a maneira como aproveitam a energia limpa.', '', '', 'Nossa visão é um mundo onde a energia limpa é alimentada por indivíduos, engenhosidade e independência.', '', '', 'Respeito ao Meio Ambiente, Ética, Transparência, Honestidade, Tecnologia, Inovação, Qualidade, Compromisso, Integridade, Eficiência e Comprometimento.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `paginas`
--

CREATE TABLE `paginas` (
  `id_paginas` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `icone` int(11) DEFAULT NULL,
  `imagem_destaque` int(11) DEFAULT NULL,
  `texto` int(11) DEFAULT NULL,
  `link` int(11) DEFAULT NULL,
  `data` int(11) DEFAULT NULL,
  `hora` int(11) DEFAULT NULL,
  `posicao` int(11) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `paginas`
--

INSERT INTO `paginas` (`id_paginas`, `titulo`, `icone`, `imagem_destaque`, `texto`, `link`, `data`, `hora`, `posicao`, `url`) VALUES
(1, 'Vantagens', 0, 1, 1, 0, 0, 0, 0, ''),
(2, 'Etapas do Processo', 1, 0, 1, 0, 0, 0, 0, ''),
(3, 'Marcas que Trabalhamos', 0, 1, 0, 0, 0, 0, 0, ''),
(4, 'Loja', 0, 0, 0, 1, 0, 0, 1, 'https://loja.solius.com.br/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas_frequentes`
--

CREATE TABLE `perguntas_frequentes` (
  `id_perguntas_frequentes` int(11) NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `pergunta` varchar(255) DEFAULT NULL,
  `resposta` longtext DEFAULT NULL,
  `id_servicos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `id_servicos` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `resumo` varchar(255) DEFAULT NULL,
  `descricao` longtext DEFAULT NULL,
  `icone` varchar(255) DEFAULT NULL,
  `imagem` longtext DEFAULT NULL,
  `url_amigavel` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id_servicos`, `titulo`, `resumo`, `descricao`, `icone`, `imagem`, `url_amigavel`, `status`) VALUES
(1, 'Para sua Indústria ou Grande Comércio ', 'Minigeração Distribuída – Soluções em energia solar destinada para suprir o consumo de grandes comércios e indústrias. São instalações fotovoltaicas com potência instalada superior à 75kW.', '<p class=\"txt-normal\">Desenvolvemos projetos para gera&ccedil;&atilde;o de energia renov&aacute;vel (Fotovoltaica, E&oacute;lica, CGH, PCH e UTE Biog&aacute;s e Biomassa).&nbsp;</p>\r\n<p class=\"txt-normal\">Projetos de Conex&atilde;o:</p>\r\n<p class=\"txt-normal\">&nbsp; &nbsp; &nbsp; Projetos de Entrada de Energia;</p>\r\n<p class=\"txt-normal\">&nbsp; &nbsp; &nbsp; Projetos de Cabines Prim&aacute;rias;</p>\r\n<p class=\"txt-normal\">&nbsp; &nbsp; &nbsp; Estudos de coordena&ccedil;&atilde;o e seletividade;</p>\r\n<p class=\"txt-normal\">&nbsp; &nbsp; &nbsp; Estudos de Estabilidade Transit&oacute;ria e Fluxo de Pot&ecirc;ncia;</p>\r\n<p class=\"txt-normal\">&nbsp; &nbsp; &nbsp; Relat&oacute;rios de Impacto no Sistema Eletrico (RISE);</p>\r\n<p class=\"txt-normal\">&nbsp; &nbsp; &nbsp; Estudos de Harm&ocirc;nicas;</p>\r\n<p class=\"txt-normal\">&nbsp; &nbsp; &nbsp; Dimensionamento de Equipamentos e Instala&ccedil;&otilde;es;</p>\r\n<p class=\"txt-normal\">&nbsp; &nbsp; &nbsp; Projetos de Malhas de Aterramento e SPDA.</p>\r\n<p class=\"txt-normal\">Processos de Solicita&ccedil;&atilde;o de Acesso de Minigera&ccedil;&atilde;o Distribu&iacute;da com expertise em v&aacute;rias distribuidoras de energia do Brasil, entre elas: CEMIG, COPEL, CPFL, ENEL/GO, CEPISA, CELPA, CEMAR, ELEKTRO, LIGHT, ENERGISA SS, RGE, CELPE e COELBA.</p>\r\n<p class=\"txt-normal\">Busca e avalia&ccedil;&atilde;o de &aacute;reas para implanta&ccedil;&atilde;o de empreendimentos fotovoltaicos de minigera&ccedil;&atilde;o distribu&iacute;da com baixo custo de conex&atilde;o.</p>\r\n<p class=\"txt-normal\">Desenvolvimento de Projetos de Gera&ccedil;&atilde;o Fotovoltaica.</p>', '', 'para-sua-industria-ou-grande-comercio--202001231851.jpg', 'para-sua-industria-ou-grande-comercio-', 1),
(2, 'Para sua Residência ou Pequeno Comércio', 'Microgeração Distribuída – Soluções em energia solar destinada para suprir o consumo de residência e pequenos e médio comércios. São instalações fotovoltaicas com potência instalada inferior à 75kW', '<p>Projeto e instala&ccedil;&atilde;o de sistemas fotovoltaicos residenciais e comerciais, com instala&ccedil;&atilde;o em telhado, solo ou Carport (Garagem Solar);</p>\r\n<p>Revenda de equipamentos para gera&ccedil;&atilde;o fotovoltaica;</p>\r\n<p>Dimensionamento e instala&ccedil;&atilde;o de sistemas de recarregamento de ve&iacute;culos el&eacute;tricos.</p>\r\n<p>&nbsp;</p>', '', 'para-sua-residencia-ou-pequeno-comercio-202001231903.jpg', 'para-sua-residencia-ou-pequeno-comercio', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobre`
--

CREATE TABLE `sobre` (
  `resumo_texto` varchar(255) DEFAULT NULL,
  `texto` longtext DEFAULT NULL,
  `imagem` longtext DEFAULT NULL,
  `link` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `sobre`
--

INSERT INTO `sobre` (`resumo_texto`, `texto`, `imagem`, `link`) VALUES
('Empresa especializada em sistemas fotovoltaicos de pequeno à grande porte com grande expertise em projetos, consultoria, revenda e instalação de equipamentos fotovoltaicos.', '<p class=\"txt-normal\">Empresa especializada em sistemas fotovoltaicos de pequeno &agrave; grande porte com grande expertise em projetos, consultoria, revenda e instala&ccedil;&atilde;o de equipamentos fotovoltaicos.<br /> Nosso objetivo inicial &eacute;, acima de tudo, trazer prosperidade e liberdade &agrave; vida de todos.<br />Oferecemos uma sele&ccedil;&atilde;o de produtos dos melhores fabricantes a n&iacute;vel mundial e com garantia total de fabrica&ccedil;&atilde;o e performance dos equipamentos.<br /> Cada membro de nossa equipe experiente, altamente qualificada, contribui para cada etapa do projeto. Alguns trouxeram seus conhecimentos e ideias brilhantes, outros nos ajudaram com suas habilidades e experi&ecirc;ncias.<br />Fornecer solu&ccedil;&otilde;es em energia renov&aacute;vel, contribuindo para a sociedade e meio ambiente &eacute; nossa principal prioridade.<br />Junto a crescente busca da popula&ccedil;&atilde;o por energia limpa e renov&aacute;vel, e com o foco cada vez mais voltado para a sustentabilidade, identificamos a necessidade de oferecer sistemas de gera&ccedil;&atilde;o de energia solar que possam aliar viabilidade econ&ocirc;mica e crescimento sustent&aacute;vel.</p>', 'sobre-a-empresa-202001231933.jpg', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `nome` longtext DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `imagem_perfil` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `nome`, `login`, `senha`, `imagem_perfil`, `status`) VALUES
(1, 'Gabriel Dezan', 'gabriel.dezan', 'f1ccbb92591d22f719a88c5be8b1161a', 'perfil-gabriel-dezan-201905071953.jpg', 1),
(2, 'Solius', 'solius', '140fb4affbfa8f1127486615efc1e040', '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vitrine_categoria`
--

CREATE TABLE `vitrine_categoria` (
  `id_vitrine_categoria` int(11) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vitrine_grupo`
--

CREATE TABLE `vitrine_grupo` (
  `id_vitrine_grupo` int(11) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `imagem` longtext DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vitrine_grupo`
--

INSERT INTO `vitrine_grupo` (`id_vitrine_grupo`, `descricao`, `imagem`, `status`) VALUES
(1, 'Teste', 'teste-201911061514.png', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vitrine_produto`
--

CREATE TABLE `vitrine_produto` (
  `id_vitrine_produto` int(11) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `detalhes` longtext DEFAULT NULL,
  `garantia` varchar(45) DEFAULT NULL,
  `peso` varchar(45) DEFAULT NULL,
  `dimensoes` varchar(45) DEFAULT NULL,
  `materiais` varchar(100) DEFAULT NULL,
  `manual` varchar(255) DEFAULT NULL,
  `informacao_adicional_1` longtext DEFAULT NULL,
  `informacao_adicional_2` longtext DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `valor` varchar(255) DEFAULT NULL,
  `situacao` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `url_amigavel` varchar(255) DEFAULT NULL,
  `id_vitrine_categoria` int(11) DEFAULT NULL,
  `id_vitrine_subgrupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vitrine_produto`
--

INSERT INTO `vitrine_produto` (`id_vitrine_produto`, `descricao`, `detalhes`, `garantia`, `peso`, `dimensoes`, `materiais`, `manual`, `informacao_adicional_1`, `informacao_adicional_2`, `link`, `valor`, `situacao`, `status`, `url_amigavel`, `id_vitrine_categoria`, `id_vitrine_subgrupo`) VALUES
(1, 'Teste', '', '', '', '', '', '', '<p><strong>teste 1</strong></p>\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: 189px; top: 32px;\">&nbsp;</div>', '<p style=\"text-align: center;\">teste 2</p>\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: 169px; top: -14px;\">&nbsp;</div>', '', '', 1, 1, NULL, 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vitrine_produto_cores`
--

CREATE TABLE `vitrine_produto_cores` (
  `id_vitrine_produto_cores` int(11) NOT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `cor_hexadecimal` varchar(45) DEFAULT NULL,
  `referencia` varchar(45) DEFAULT NULL,
  `imagem1` varchar(255) DEFAULT NULL,
  `imagem2` varchar(255) DEFAULT NULL,
  `imagem3` varchar(255) DEFAULT NULL,
  `imagem4` varchar(255) DEFAULT NULL,
  `imagem5` varchar(255) DEFAULT NULL,
  `url_amigavel` varchar(255) DEFAULT NULL,
  `id_vitrine_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vitrine_produto_cores`
--

INSERT INTO `vitrine_produto_cores` (`id_vitrine_produto_cores`, `descricao`, `cor_hexadecimal`, `referencia`, `imagem1`, `imagem2`, `imagem3`, `imagem4`, `imagem5`, `url_amigavel`, `id_vitrine_produto`) VALUES
(1, 'teste', '#ee0000', 'MR-MI062-BR', 'imagem1-teste-201911062032.jpg', 'imagem2-teste-201911062032.jpg', 'imagem3-teste-201911062032.jpg', 'imagem4-teste-201911062032.jpg', 'imagem5-teste-201911062032.jpg', 'teste', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vitrine_subgrupo`
--

CREATE TABLE `vitrine_subgrupo` (
  `id_vitrine_subgrupo` int(11) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `nome_pagina` varchar(100) DEFAULT NULL,
  `imagem_capa` varchar(255) DEFAULT NULL,
  `id_vitrine_grupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vitrine_subgrupo`
--

INSERT INTO `vitrine_subgrupo` (`id_vitrine_subgrupo`, `descricao`, `status`, `nome_pagina`, `imagem_capa`, `id_vitrine_grupo`) VALUES
(1, 'Teste', 1, 'Mesas', '', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Índices para tabela `blog_imagens`
--
ALTER TABLE `blog_imagens`
  ADD PRIMARY KEY (`id_blog_imagens`);

--
-- Índices para tabela `blog_marcadores`
--
ALTER TABLE `blog_marcadores`
  ADD PRIMARY KEY (`id_blog_marcadores`);

--
-- Índices para tabela `blog_postagem`
--
ALTER TABLE `blog_postagem`
  ADD PRIMARY KEY (`id_blog_postagem`),
  ADD KEY `fk_blog_postagem_usuarios1_idx` (`id_usuarios`),
  ADD KEY `fk_blog_postagem_blog_marcadores1_idx` (`id_blog_marcadores`);

--
-- Índices para tabela `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id_cases`),
  ADD KEY `fk_cases_clientes1_idx` (`id_clientes`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_clientes`);

--
-- Índices para tabela `depoimentos`
--
ALTER TABLE `depoimentos`
  ADD PRIMARY KEY (`id_depoimentos`),
  ADD KEY `fk_depoimentos_clientes1_idx` (`id_clientes`);

--
-- Índices para tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`id_enderecos`);

--
-- Índices para tabela `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`id_equipe`);

--
-- Índices para tabela `equipe_contato`
--
ALTER TABLE `equipe_contato`
  ADD PRIMARY KEY (`id_equipe_contato`),
  ADD KEY `fk_equipe_contato_equipe1_idx` (`id_equipe`);

--
-- Índices para tabela `galeria_grupo`
--
ALTER TABLE `galeria_grupo`
  ADD PRIMARY KEY (`id_galeria_grupo`);

--
-- Índices para tabela `galeria_imagem`
--
ALTER TABLE `galeria_imagem`
  ADD PRIMARY KEY (`id_galeria_imagem`),
  ADD KEY `fk_galeria_item_galeria_grupo_idx` (`id_galeria_grupo`);

--
-- Índices para tabela `informacoes`
--
ALTER TABLE `informacoes`
  ADD PRIMARY KEY (`id_informacoes`),
  ADD KEY `fk_informacoes_paginas1_idx` (`id_paginas`);

--
-- Índices para tabela `paginas`
--
ALTER TABLE `paginas`
  ADD PRIMARY KEY (`id_paginas`);

--
-- Índices para tabela `perguntas_frequentes`
--
ALTER TABLE `perguntas_frequentes`
  ADD PRIMARY KEY (`id_perguntas_frequentes`),
  ADD KEY `fk_perguntas_frequentes_servicos1_idx` (`id_servicos`);

--
-- Índices para tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id_servicos`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- Índices para tabela `vitrine_categoria`
--
ALTER TABLE `vitrine_categoria`
  ADD PRIMARY KEY (`id_vitrine_categoria`);

--
-- Índices para tabela `vitrine_grupo`
--
ALTER TABLE `vitrine_grupo`
  ADD PRIMARY KEY (`id_vitrine_grupo`);

--
-- Índices para tabela `vitrine_produto`
--
ALTER TABLE `vitrine_produto`
  ADD PRIMARY KEY (`id_vitrine_produto`),
  ADD KEY `fk_vitrine_produto_vitrine_subgrupo1_idx` (`id_vitrine_subgrupo`);

--
-- Índices para tabela `vitrine_produto_cores`
--
ALTER TABLE `vitrine_produto_cores`
  ADD PRIMARY KEY (`id_vitrine_produto_cores`),
  ADD KEY `fk_vitrine_produto_cores_vitrine_produto1_idx` (`id_vitrine_produto`);

--
-- Índices para tabela `vitrine_subgrupo`
--
ALTER TABLE `vitrine_subgrupo`
  ADD PRIMARY KEY (`id_vitrine_subgrupo`),
  ADD KEY `fk_vitrine_subgrupo_vitrine_grupo1_idx` (`id_vitrine_grupo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `blog_imagens`
--
ALTER TABLE `blog_imagens`
  MODIFY `id_blog_imagens` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `blog_marcadores`
--
ALTER TABLE `blog_marcadores`
  MODIFY `id_blog_marcadores` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `blog_postagem`
--
ALTER TABLE `blog_postagem`
  MODIFY `id_blog_postagem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cases`
--
ALTER TABLE `cases`
  MODIFY `id_cases` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_clientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `depoimentos`
--
ALTER TABLE `depoimentos`
  MODIFY `id_depoimentos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `id_enderecos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `equipe`
--
ALTER TABLE `equipe`
  MODIFY `id_equipe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `equipe_contato`
--
ALTER TABLE `equipe_contato`
  MODIFY `id_equipe_contato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `galeria_grupo`
--
ALTER TABLE `galeria_grupo`
  MODIFY `id_galeria_grupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `galeria_imagem`
--
ALTER TABLE `galeria_imagem`
  MODIFY `id_galeria_imagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `informacoes`
--
ALTER TABLE `informacoes`
  MODIFY `id_informacoes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `paginas`
--
ALTER TABLE `paginas`
  MODIFY `id_paginas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `perguntas_frequentes`
--
ALTER TABLE `perguntas_frequentes`
  MODIFY `id_perguntas_frequentes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id_servicos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `vitrine_categoria`
--
ALTER TABLE `vitrine_categoria`
  MODIFY `id_vitrine_categoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `vitrine_grupo`
--
ALTER TABLE `vitrine_grupo`
  MODIFY `id_vitrine_grupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `vitrine_produto`
--
ALTER TABLE `vitrine_produto`
  MODIFY `id_vitrine_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `vitrine_produto_cores`
--
ALTER TABLE `vitrine_produto_cores`
  MODIFY `id_vitrine_produto_cores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `vitrine_subgrupo`
--
ALTER TABLE `vitrine_subgrupo`
  MODIFY `id_vitrine_subgrupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `blog_postagem`
--
ALTER TABLE `blog_postagem`
  ADD CONSTRAINT `fk_blog_postagem_blog_marcadores1` FOREIGN KEY (`id_blog_marcadores`) REFERENCES `blog_marcadores` (`id_blog_marcadores`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_blog_postagem_usuarios1` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id_usuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `cases`
--
ALTER TABLE `cases`
  ADD CONSTRAINT `fk_cases_clientes1` FOREIGN KEY (`id_clientes`) REFERENCES `clientes` (`id_clientes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `depoimentos`
--
ALTER TABLE `depoimentos`
  ADD CONSTRAINT `fk_depoimentos_clientes1` FOREIGN KEY (`id_clientes`) REFERENCES `clientes` (`id_clientes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `equipe_contato`
--
ALTER TABLE `equipe_contato`
  ADD CONSTRAINT `fk_equipe_contato_equipe1` FOREIGN KEY (`id_equipe`) REFERENCES `equipe` (`id_equipe`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `galeria_imagem`
--
ALTER TABLE `galeria_imagem`
  ADD CONSTRAINT `fk_galeria_item_galeria_grupo` FOREIGN KEY (`id_galeria_grupo`) REFERENCES `galeria_grupo` (`id_galeria_grupo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `informacoes`
--
ALTER TABLE `informacoes`
  ADD CONSTRAINT `fk_informacoes_paginas1` FOREIGN KEY (`id_paginas`) REFERENCES `paginas` (`id_paginas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `perguntas_frequentes`
--
ALTER TABLE `perguntas_frequentes`
  ADD CONSTRAINT `fk_perguntas_frequentes_servicos1` FOREIGN KEY (`id_servicos`) REFERENCES `servicos` (`id_servicos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `vitrine_produto`
--
ALTER TABLE `vitrine_produto`
  ADD CONSTRAINT `fk_vitrine_produto_vitrine_subgrupo1` FOREIGN KEY (`id_vitrine_subgrupo`) REFERENCES `vitrine_subgrupo` (`id_vitrine_subgrupo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `vitrine_produto_cores`
--
ALTER TABLE `vitrine_produto_cores`
  ADD CONSTRAINT `fk_vitrine_produto_cores_vitrine_produto1` FOREIGN KEY (`id_vitrine_produto`) REFERENCES `vitrine_produto` (`id_vitrine_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `vitrine_subgrupo`
--
ALTER TABLE `vitrine_subgrupo`
  ADD CONSTRAINT `fk_vitrine_subgrupo_vitrine_grupo1` FOREIGN KEY (`id_vitrine_grupo`) REFERENCES `vitrine_grupo` (`id_vitrine_grupo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
