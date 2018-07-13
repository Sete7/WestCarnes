-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 13-Jul-2018 às 17:03
-- Versão do servidor: 5.7.19
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `westcarnes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `thumb` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`cod`, `thumb`, `titulo`, `url`, `descricao`, `status`, `data`) VALUES
(1, 'categoria/2018/07/bovinos.png', 'Bovino', 'bovino', ' Carne bovina', 1, '2018-07-13 10:11:43'),
(2, 'categoria/2018/07/suino.png', 'Suino', 'suino', 'Carne suina', 1, '2018-07-13 10:14:26'),
(3, 'categoria/2018/07/aves.png', 'Aves', 'aves', 'Carne de frango', 1, '2018-07-13 10:15:52'),
(4, 'categoria/2018/07/outros-1531487907.png', 'Outros', 'outros', 'Outros tipos de carnes', 1, '2018-07-13 10:18:27');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `valor` varchar(200) DEFAULT NULL,
  `estoque` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `data` datetime NOT NULL,
  `tipo` varchar(30) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`cod`, `titulo`, `categoria`, `url`, `descricao`, `valor`, `estoque`, `status`, `thumb`, `data`, `tipo`) VALUES
(1, 'Lagarto', '1', 'lagarto', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;O Lagarto &eacute; um tipo de corte da carne bovina. Esta localizado na parte traseira do animal e representa, aproximadamente, 3,73% da carca&ccedil;a traseira. Tamb&eacute;m denominada na regi&atilde;o sul do Brasil como tatu. Na Bahia &eacute; conhecido como paulista.&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', '30,00', 100, 1, 'produtos/2018/07/lagarto.png', '2018-07-13 10:32:49', 'produto'),
(2, 'Paleta', '2', 'paleta', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;A paleta &eacute; a parte superior do membro anterior do su&iacute;no. A terminologia da paleta varia muito, dependendo da regi&atilde;o. A parte superior da paleta, comumente chamada de sobrepaleta, vem da &aacute;rea perto do lombo e cont&eacute;m o osso da paleta.&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', '29,99', 100, 1, 'produtos/2018/07/paleta.png', '2018-07-13 10:34:55', 'produto'),
(3, 'Peito', '3', 'peito', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;O&nbsp;frango&nbsp;&eacute; uma das prote&iacute;nas animais mais consumidas no Brasil: &eacute; uma carne magra, econ&ocirc;mica e muito vers&aacute;til. O&nbsp;peito de frango&nbsp;&eacute; o corte que est&aacute; mais presente na mesas dos brasileiros e, com ele, &eacute; poss&iacute;vel fazer muitas receitas diferentes e deliciosas.&nbsp;&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', '29,99', 100, 1, 'produtos/2018/07/peito.jpg', '2018-07-13 10:41:31', 'produto'),
(4, 'Miudos', '4', 'miudos', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;ol class=&quot;breadcrumb&quot;&gt;\r\n&lt;li class=&quot;active ng-binding&quot;&gt;Moela de Frango Congelada SADIA Bandeja 1kg&lt;/li&gt;\r\n&lt;/ol&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', '29,99', 100, 1, 'produtos/2018/07/miudos.jpg', '2018-07-13 10:46:12', 'produto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `receita`
--

DROP TABLE IF EXISTS `receita`;
CREATE TABLE IF NOT EXISTS `receita` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `status` int(11) NOT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `data` datetime NOT NULL,
  `tipo` varchar(30) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `receita`
--

INSERT INTO `receita` (`cod`, `titulo`, `categoria`, `url`, `descricao`, `status`, `thumb`, `data`, `tipo`) VALUES
(1, 'ESFIRRA BOLINHA', '1', 'esfirra-bolinha', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;h3 class=&quot;ingredients-title box-title&quot;&gt;INGREDIENTES&lt;/h3&gt;\r\n&lt;h3 class=&quot;part-title gray-box&quot;&gt;MASSA:&lt;/h3&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;&lt;span class=&quot;p-ingredient&quot;&gt;1 x&iacute;cara de leite morno&lt;/span&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;span class=&quot;p-ingredient&quot;&gt;1 tablete de fermento biol&oacute;gico fresco&lt;/span&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;span class=&quot;p-ingredient&quot;&gt;1 colher (sopa) de manteiga&lt;/span&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;span class=&quot;p-ingredient&quot;&gt;1 colher (ch&aacute;) de a&ccedil;&uacute;car&lt;/span&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;span class=&quot;p-ingredient&quot;&gt;1 colher (ch&aacute;) de &oacute;leo&lt;/span&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;span class=&quot;p-ingredient&quot;&gt;2 gemas&lt;/span&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;span class=&quot;p-ingredient&quot;&gt;sal a gosto&lt;/span&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;span class=&quot;p-ingredient&quot;&gt;3 + 1/2 x&iacute;caras (ch&aacute;) de farinha de trigo&lt;/span&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;h3 class=&quot;part-title gray-box&quot;&gt;RECHEIO:&lt;/h3&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;&lt;span class=&quot;p-ingredient&quot;&gt;2 colheres (sopa) de azeite&lt;/span&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;span class=&quot;p-ingredient&quot;&gt;1 cebola picada&lt;/span&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;span class=&quot;p-ingredient&quot;&gt;2 dentes de alho picado&lt;/span&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;span class=&quot;p-ingredient&quot;&gt;500 g de carne mo&iacute;da&lt;/span&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;span class=&quot;p-ingredient&quot;&gt;sal a gosto&lt;/span&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;span class=&quot;p-ingredient&quot;&gt;pimenta-do-reino a gosto&lt;/span&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;span class=&quot;p-ingredient&quot;&gt;3 tomates picados&lt;/span&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;span class=&quot;p-ingredient&quot;&gt;salsinha a gosto&lt;/span&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;span class=&quot;p-ingredient&quot;&gt;2 gemas batidas&lt;/span&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'produtos/2018/07/esfirra-bolinha.jpg', '2018-07-13 11:01:18', 'receitas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_sliders`
--

DROP TABLE IF EXISTS `tb_sliders`;
CREATE TABLE IF NOT EXISTS `tb_sliders` (
  `slider_cod` int(11) NOT NULL AUTO_INCREMENT,
  `slider_titulo` varchar(255) NOT NULL,
  `slider_status` int(11) NOT NULL,
  `slider_link` varchar(255) NOT NULL,
  `slider_thumb` varchar(255) NOT NULL,
  `slider_tamanho` char(1) NOT NULL,
  PRIMARY KEY (`slider_cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `senha` varchar(255) NOT NULL,
  `nivel` int(1) NOT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `bairro` varchar(180) DEFAULT NULL,
  `cidade` varchar(180) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod`, `usuario`, `email`, `status`, `nome`, `senha`, `nivel`, `cep`, `bairro`, `cidade`, `endereco`, `estado`, `data`) VALUES
(1, 'admin', 'admin@westcarnes.com', 1, 'Administrador', '827ccb0eea8a706c4c34a16891f84e7b', 1, '72631-100', '...', 'Brasília', 'Quadra 405', 'DF', '2018-07-12 17:57:00'),
(2, 'Inove', 'inovepublicidadedf@gmail.com', 1, 'Inove', '827ccb0eea8a706c4c34a16891f84e7b', 1, ' 71950-904', 'Areal (Águas Claras)', 'Brasília', 'QS 1 Rua 210 Lote 40', 'DF', '2018-07-13 09:48:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
