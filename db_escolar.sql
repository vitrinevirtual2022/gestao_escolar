-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 22/06/2021 às 02:16
-- Versão do servidor: 10.4.15-MariaDB-cll-lve
-- Versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u967259221_escolar`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `responsavel` varchar(20) DEFAULT NULL,
  `data_nascimento` date NOT NULL,
  `data_cadastro` date NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `sexo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `cpf`, `nis`, `telefone`, `email`, `endereco`, `responsavel`, `data_nascimento`, `data_cadastro`, `foto`, `sexo`) VALUES
(1, 'Ana Sophia de Moraes', '915.484.253-03', '11122233312', '(99) 98123-1345', 'anasophia@gmail.com', 'Avenida Pedro Neiva de Santana, nº 236, bairro Centro', '872.540.685-09', '2015-04-03', '2021-01-29', 'img07.jpg', 'F'),
(2, 'Bruna Firmino de Sousa', '155.717.227-70', '23154656346', '(99) 98496-7845', 'brunafirmino@gmail.com', 'Rua Jardin Amaro, nº 53, bairro Zona Sul', '136.401.348-77', '2015-07-03', '2021-01-29', 'img06.jpg', 'F'),
(3, 'Gustavo Almeida Siqueira', '921.957.114-50', '89032543', '(99) 88123-4512', 'daniela@gmail.com', 'Rua Fortunato Fialho, nº 07, bairro Centro', '872.540.685-09', '2013-02-19', '2021-02-06', 'img09.jpg', 'M'),
(4, 'Gabriel Alves de Sousa', '233.630.463-59', '22314567', '(99) 88888-8888', 'flavio@gmail.com', 'Avenida Rio Amazonas, Quadra 05, nº 21, bairro Trezidela', '247.594.566-43', '2013-06-06', '2021-02-06', 'img10.jpg', 'M'),
(5, 'Ana Maria de Brito', '713.139.755-59', '23567190', '(99) 98201-3465', 'anamaria@gmail.com', 'Rua Jardin Verde, n° 184, bairro Cohab', '459.774.614-53', '2013-05-14', '2021-02-07', 'sem-foto.jpg', 'M'),
(6, 'ANTONIO SOARES', '435.467.568-93', '4456567778877', '', 'soares@gmail.com', '', '456.767.909-09', '2010-02-07', '2021-02-07', 'sem-foto.jpg', 'M'),
(7, 'Gisele Melo Pereira Silva', '62123844365', '144234235232', '', 'giselemelo538@gmail.com', 'rua proj 10', '231.457.689-73', '2010-02-07', '2021-02-07', 'sem-foto.jpg', 'M'),
(8, 'VIKTORIA RHAFIZA ALMEIDA DE ARAUJO', '454.565.767-78', '63457768769', '(99) 98457-8224', 'viktoriarhafizaalmeidadearaujo@gmail.com', 'RUA RIO BRANCO,POVOADO MONTE CASTELO,96', '041.491.133-43', '2012-03-09', '2021-02-08', 'sem-foto.jpg', 'M'),
(9, 'Gisele Melo Pereira Silva', '62123844365', '789899000', '(99) 98414-9741', 'giselemelo538@gmail.com', 'AV BEZERRA ,395 SAO RAIMUNDO  DO DOCA BEZERRA', '034.492.843-80', '2012-05-23', '2021-02-08', 'sem-foto.jpg', 'M'),
(10, 'LUCIANO CAMARGO', '657.799.809-00', '44565677788754', '', 'ziluca@gmail.com', 'AV PEDRO NEIVA DE SANTANA 678, B CORDA MA', '546.787.809-90', '2012-02-08', '2021-02-08', 'sem-foto.jpg', 'M'),
(11, 'Gabriele Melo Pereira', '621.238.423-11', '1900334240701', '(99) 98402-7014', 'umperira2021@gmail.com', 'Rua Antonio neto', '936.906.063-49', '2010-12-09', '2021-02-09', 'sem-foto.jpg', 'F'),
(12, 'Gisele Melo Pereira Silva', '62123844365', '23740873368', '(99) 98458-0528', 'giselemelo538@gmail.com', 'Cento do graça', '606.785.293-45', '2018-02-12', '2021-02-24', 'sem-foto.jpg', 'F'),
(13, 'Gisele Melo Pereira Silva', '62123844365', '1609862891301', '', 'giselemelo538@gmail.com', 'Cento do graça', '091.368.593-38', '2018-02-18', '2021-02-25', 'sem-foto.jpg', 'F'),
(14, 'Gisele Melo Pereira Silva', '62123844365', '1657712263701', '(99) 98423-2159', 'giselemelo538@gmail.com', 'Cento do graça', '621.305.143-08', '2015-07-30', '2021-02-25', 'sem-foto.jpg', 'F'),
(15, 'Gisele Melo Pereira Silva', '62123844365', '1629395938901', '(99) 84482-789', 'giselemelo538@gmail.com', 'Cento do graça', '616.406.913-08', '2016-07-22', '2021-02-25', 'sem-foto.jpg', 'M'),
(16, 'Gisele Melo Pereira Silva', '62123844365', '16267083161', '(99) 98468-5648', 'giselemelo538@gmail.com', 'Cento do graça', '311.622.218-52', '2016-04-30', '2021-02-25', 'sem-foto.jpg', 'F'),
(17, 'Gisele Melo Pereira Silva', '62123844365', '1600770160402', '(99) 98448-2789', 'giselemelo538@gmail.com', 'Cento do graça', '023.857.473-32', '2016-04-29', '2021-02-25', 'sem-foto.jpg', 'F'),
(18, 'Gisele Melo Pereira Silva', '62123844365', '', '(99) 98458-0528', 'giselemelo538@gmail.com', 'Cento do graça', '606.785.293-45', '2015-06-14', '2021-02-25', 'sem-foto.jpg', 'M'),
(19, 'Gisele Melo Pereira Silva', '62123844365', '21211744908', '(99) 98481-6589', 'giselemelo538@gmail.com', 'Cento do graça', '038.447.863-84', '2015-04-01', '2021-02-25', 'sem-foto.jpg', 'M'),
(20, 'Gisele Melo Pereira Silva', '62123844365', '1636373616202', '(99) 98455-8391', 'giselemelo538@gmail.com', 'Cento do graça', '033.959.723-21', '2015-07-17', '2021-02-25', 'sem-foto.jpg', 'M'),
(21, 'Gisele Melo Pereira Silva', '62123844365', '16401033461', '', 'giselemelo538@gmail.com', 'Cento do graça', '028.936.423-06', '2015-07-23', '2021-02-25', 'sem-foto.jpg', 'F'),
(22, 'Gisele Melo Pereira Silva', '62123844365', '16670562897', '', 'giselemelo538@gmail.com', 'Cento do graça', '041.655.133-50', '2015-11-04', '2021-02-25', 'sem-foto.jpg', 'M'),
(23, 'Gisele Melo Pereira Silva', '62123844365', '16110842460', '(99) 98426-8936', 'giselemelo538@gmail.com', 'Cento do graça', '611.708.903-18', '2015-04-02', '2021-02-25', 'sem-foto.jpg', 'M'),
(24, 'Gisele Melo Pereira Silva', '62123844365', '16578426648', '(99) 85010-001', 'giselemelo538@gmail.com', 'Cento do graça', '616.415.483-98', '2014-06-15', '2021-02-25', 'sem-foto.jpg', 'F'),
(25, 'Gisele Melo Pereira Silva', '62123844365', '16518403560', '(99) 98428-8994', 'giselemelo538@gmail.com', 'Cento do graça', '048.601.343-03', '2014-11-18', '2021-02-25', 'sem-foto.jpg', 'F'),
(26, 'Gisele Melo Pereira Silva', '62123844365', '2100665090502', '(99) 98444-6961', 'giselemelo538@gmail.com', 'Cento do graça', '604.544.023-41', '2015-02-10', '2021-02-25', 'sem-foto.jpg', 'M'),
(27, 'Gisele Melo Pereira Silva', '62123844365', '16578494252', '(99) 98473-1565', 'giselemelo538@gmail.com', 'Cento do graça', '620.102.603-76', '2013-11-02', '2021-02-25', 'sem-foto.jpg', 'M'),
(28, 'Gisele Melo Pereira Silva', '62123844365', '', '(61) 94364-377', 'giselemelo538@gmail.com', 'Cento do graça', '563.780.503-25', '2013-08-16', '2021-02-25', 'sem-foto.jpg', 'M'),
(29, 'Gisele Melo Pereira Silva', '62123844365', '16401056992', '(99) 98431-8294', 'giselemelo538@gmail.com', 'Cento do graça', '042.378.853-13', '2012-09-18', '2021-02-25', 'sem-foto.jpg', 'F'),
(30, 'Gisele Melo Pereira Silva', '62123844365', '16013801933', '(99) 98458-3320', 'giselemelo538@gmail.com', 'Cento do graça', '604.538.063-09', '2012-07-07', '2021-02-25', 'sem-foto.jpg', 'M'),
(31, 'Gisele Melo Pereira Silva', '62123844365', '21006650344', '(99) 98438-1314', 'giselemelo538@gmail.com', 'Cento do graça', '017.852.263-55', '2012-09-30', '2021-02-25', 'sem-foto.jpg', 'F'),
(32, 'Gisele Melo Pereira Silva', '62123844365', '16310468562', '', 'giselemelo538@gmail.com', 'Cento do graça', '008.795.973-99', '2006-12-18', '2021-02-25', 'sem-foto.jpg', 'F'),
(33, 'Gisele Melo Pereira Silva', '62123844365', '33340045', '(99) 98473-6218', 'giselemelo538@gmail.com', 'Cento do graça', '609.399.943-21', '2011-01-17', '2021-02-25', 'sem-foto.jpg', 'M'),
(34, 'Gisele Melo Pereira Silva', '62123844365', '21210017034', '(99) 98493-5019', 'giselemelo538@gmail.com', 'Cento do graça', '021.426.983-36', '2012-03-22', '2021-02-25', 'sem-foto.jpg', 'M'),
(35, 'Gisele Melo Pereira Silva', '62123844365', '16013805785', '(99) 98436-0313', 'giselemelo538@gmail.com', 'Cento do graça', '010.940.783-01', '2010-09-14', '2021-02-25', 'sem-foto.jpg', 'F'),
(36, 'Gisele Melo Pereira Silva', '62123844365', '2121425493', '(99) 88376-595', 'giselemelo538@gmail.com', 'Cento do graça', '871.928.373-10', '2011-07-30', '2021-02-25', 'sem-foto.jpg', 'M'),
(37, 'Gisele Melo Pereira Silva', '62123844365', '10577009822', '(99) 98423-2159', 'giselemelo538@gmail.com', 'Cento do graça', '977.703.883-68', '2007-10-20', '2021-02-25', 'sem-foto.jpg', 'M'),
(38, ' Kauã Vitor de Freitas Sousa Castro', '048.561.023-03', '20455680927', '(99) 98455-8391', 'cirineudecastrolima@gmail.com', 'Cento do graça', '048.561.023-03', '2015-04-17', '2021-02-25', 'sem-foto.jpg', 'M'),
(39, 'Gisele Melo Pereira Silva', '62123844365', '20748361191', '(99) 85044-770', 'giselemelo538@gmail.com', 'Cento do graça', '035.342.033-64', '2016-01-27', '2021-02-25', 'sem-foto.jpg', 'F'),
(40, 'Gisele Melo Pereira Silva', '62123844365', '16007701604', '(99) 98448-2789', 'giselemelo538@gmail.com', 'Cento do graça', '023.857.473-32', '2014-08-26', '2021-02-26', 'sem-foto.jpg', 'M'),
(41, 'Gisele Melo Pereira Silva', '62123844365', '20658954045', '(99) 98420-7270', 'giselemelo538@gmail.com', '', '044.966.323-06', '2012-12-27', '2021-02-26', 'sem-foto.jpg', 'F');

-- --------------------------------------------------------

--
-- Estrutura para tabela `aulas`
--

CREATE TABLE `aulas` (
  `id` int(11) NOT NULL,
  `turma` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `arquivo` varchar(255) DEFAULT NULL,
  `periodo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `aulas`
--

INSERT INTO `aulas` (`id`, `turma`, `nome`, `descricao`, `arquivo`, `periodo`) VALUES
(1, 7, 'Os seres vivos', 'Os seres vivos e a natureza', 'Aula01-diversidade-da-vida.pdf', 1),
(2, 7, 'Os animais vertebrados', 'Animais vertebrados', '', 1),
(6, 8, 'O corpo em movimento', '', NULL, 3),
(7, 9, 'O sistema Solar', 'Conhecendo o sistema solar', NULL, 5),
(8, 8, 'RECICLAGEM', 'HISTORIA DO PAEL', 'criação-da-data-surgiu-da-necessidade-de-conscientizar-a-população-da-importância-das-árvores-para-o-meio-ambiente.pdf', 3),
(9, 8, 'HISTORIA DO PAEL', 'A IMPORTANCIA DO PAEL EM NOSSO MEIO', 'HISTORIA-DO-PAPEL.pdf', 3),
(10, 8, 'MEIO AMBIENTE', 'A IMPORTANCIA', 'HISTORIA-DO-PAPEL.pdf', 3),
(12, 8, 'RECICLAGEM', 'A HISTORIA DO PAPEL', 'HISTORIA-DO-PAPEL-pdf.pdf', 3),
(13, 8, 'CORES E FORMAS', 'historia do papel', 'HISTORIA-DO-PAPEL-pdf.pdf', 3),
(14, 8, 'O movimento do corpo', '', NULL, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `chamadas`
--

CREATE TABLE `chamadas` (
  `id` int(11) NOT NULL,
  `turma` int(11) NOT NULL,
  `aluno` int(11) NOT NULL,
  `aula` int(11) NOT NULL,
  `presenca` varchar(5) NOT NULL,
  `justificativa` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `periodo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `chamadas`
--

INSERT INTO `chamadas` (`id`, `turma`, `aluno`, `aula`, `presenca`, `justificativa`, `data`, `periodo`) VALUES
(6, 7, 6, 1, 'P', '', '2021-01-18', 1),
(7, 7, 2, 1, 'P', '', '2021-01-18', 1),
(8, 7, 3, 1, 'J', '', '2021-01-18', 1),
(9, 7, 5, 1, 'F', '', '2021-01-18', 1),
(10, 7, 6, 2, 'P', '', '2021-01-18', 1),
(11, 7, 2, 2, 'F', '', '2021-01-18', 1),
(12, 7, 3, 2, 'J', '', '2021-01-18', 1),
(13, 7, 5, 2, 'P', '', '2021-01-18', 1),
(14, 8, 6, 3, 'F', '', '2021-01-19', 3),
(15, 8, 1, 3, 'P', '', '2021-01-19', 3),
(16, 8, 2, 3, 'P', '', '2021-01-19', 3),
(17, 8, 3, 3, 'P', '', '2021-01-19', 3),
(18, 8, 5, 3, 'J', '', '2021-01-19', 3),
(19, 8, 2, 4, 'F', '', '2021-01-31', 3),
(20, 8, 1, 4, 'J', '', '2021-01-31', 3),
(21, 8, 1, 5, 'P', '', '2021-02-02', 3),
(22, 8, 2, 5, 'P', '', '2021-02-02', 3),
(23, 8, 1, 6, 'J', '', '2021-02-02', 3),
(24, 8, 2, 6, 'P', '', '2021-02-02', 3),
(25, 9, 1, 7, 'P', '', '2021-02-03', 5),
(26, 9, 2, 7, 'P', '', '2021-02-03', 5),
(27, 8, 1, 9, 'P', '', '2021-02-16', 3),
(28, 8, 2, 9, 'J', '', '2021-02-16', 3),
(29, 8, 1, 10, 'P', '', '2021-02-19', 3),
(30, 8, 2, 10, 'J', '', '2021-02-19', 3),
(31, 8, 1, 12, 'P', '', '2021-02-26', 3),
(32, 8, 2, 12, 'J', '', '2021-02-26', 3),
(33, 8, 1, 13, 'F', '', '2021-02-26', 3),
(34, 8, 2, 13, 'J', '', '2021-02-26', 3),
(35, 8, 1, 14, 'J', '', '2021-03-10', 3),
(36, 8, 2, 14, 'F', '', '2021-03-10', 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `coordenadores`
--

CREATE TABLE `coordenadores` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `formacao` varchar(100) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `coordenadores`
--

INSERT INTO `coordenadores` (`id`, `nome`, `formacao`, `cpf`, `email`, `telefone`, `endereco`, `foto`) VALUES
(1, 'Ruben Sousa de Matos', 'Pós-graduação em Supervisão Escolar', '857.416.040-72', 'rubensousa@gmail.com', '(99) 98421-0234', 'Avenida Rio Amazonas, Quadra 05, nº 21', 'img02.png'),
(2, 'Jeorge Augusto Sousa', 'Pedagogia', '387.250.532-72', 'jeorge@gmail.com', '(99) 99123-8123', '', 'sem-foto.jpg'),
(3, 'MARIA CELESTINA DE CARVALHO CASTRO', 'LETRAS', '823.946.873-04', 'celestinamari@hotmail.com', '(99) 98859-8176', 'POV. TRES LAGOAS N°128', 'IMG-20200209-WA0178.jpg'),
(4, 'ANTONIO CARLOS SILVA MOTA', 'CIÊNCIAS', '335.386.703-15', 'carlosmota31@hotmail.com', '(99) 98423-5127', 'POVOADO TRÊS LAGOAS', 'sem-foto.jpg'),
(5, 'Terezinha moreno da Silva costa', 'Biologia ', '550.354.853-15', 'morenotherezinha@hotmail.com', '(99) 98431-0371', 'AV MORENO', 'IMG-20200312-WA0182.jpg'),
(6, 'Gercilene de Sousa Oliveira', 'Pós graduação em psicopedagogia e gestão', '837.785.943-20', 'Gercilene 123olivei@gmail.com', '(99) 84480-045', 'Povoado Monte Castelo ', 'sem-foto.jpg'),
(7, 'Camilla Rayane Silva Lima ', 'Pos Graduação', '604.595.743-10', 'kamylla04rayane@gmail.com', '(99) 98479-3170', 'Rua do Passeio Povoado Monte Castelo', 'sem-foto.jpg'),
(8, 'CLEBER SOUZA SILVA', 'POS GRADUAÇÃO EM HISTÓRIA DA FILOSOFIA', '769.526.223-49', 'clebersousa1977@gmail.com', '(99) 98457-0582', 'AV MANOEL MORENO, 152 - POVOADO TRES LAGOAS', 'IMG_20210208_112752.jpg'),
(9, 'Clara Renata dos Santos Oliveira', 'Pos Graduação', '925.436.423-15', 'clara123renata@gmail.com', '(99) 98460-7086', 'Rua do Comercio Povoado Monte Castelo', 'sem-foto.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `disciplinas`
--

INSERT INTO `disciplinas` (`id`, `nome`) VALUES
(7, 'Educação Física'),
(8, 'Ensino Religioso'),
(9, 'Arte'),
(10, 'Geografia'),
(11, 'História'),
(12, 'Ciências'),
(13, 'Matemática'),
(14, 'Português'),
(15, 'INGLES/RELIGIÃO/ARTE/MATEMATICA/CIENCIAS'),
(16, 'Gabriele Melo Pereira');

-- --------------------------------------------------------

--
-- Estrutura para tabela `docs_escola`
--

CREATE TABLE `docs_escola` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arquivo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `docs_escola`
--

INSERT INTO `docs_escola` (`id`, `nome`, `descricao`, `arquivo`) VALUES
(1, 'Plano Anual', 'Modelo a ser adotado pelas escolas do municipio de Barra do Corda', 'PLANO-ANUAL-MODELO-2021.docx');

-- --------------------------------------------------------

--
-- Estrutura para tabela `documentos`
--

CREATE TABLE `documentos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arquivo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `escolas`
--

CREATE TABLE `escolas` (
  `id` int(11) NOT NULL,
  `nome_school` varchar(150) NOT NULL,
  `codigo` int(11) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cnpj_escola` varchar(50) NOT NULL,
  `endereco` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `escolas`
--

INSERT INTO `escolas` (`id`, `nome_school`, `codigo`, `telefone`, `email`, `cnpj_escola`, `endereco`) VALUES
(1, 'Maria Emidia Brandes Caldas', 12576208, '(99) 98124-0893', 'mariaemidia@gmail.com', '12.345.000/1451-23', 'Rua Projetada 05, nº 64, bairro Cohab'),
(2, 'Unid. Int. Maria Safira da Silva', 12345678, '(99) 98421-0234', 'mariasafira@gmail.com', '12.345.000/1451-22', 'Rua 03, nº 12, Vila Nair'),
(3, 'Unid. Int. Ezaltina', 23098345, '(99) 99123-8123', 'ezaltina@gmail.com', '12.345.000/1451-24', 'Rua 06, nº 23, bairro Vila Mariano 2'),
(4, 'UNIDADE ESCOLAR JOSE RODRIGUES ', 21102317, '(99) 98121-4344', 'grupoescolarjoserodrigues@gmail.com', '43.546.457/4632-23', 'RUA SAO RAIMUNDO'),
(5, 'Unidade Escolar Antônia Moreno ', 21102376, '(99) 98431-5720', 'escolaidalinaoliveira@gmail.com', '12.345.678/90', 'Povoado três lagoas'),
(6, 'UNIDADE ESCOLAR PRINCESA ISABEL', 21102104, '(99) 98434-1479', 'jacianemendes66@GMAIL.COM', '01.161.183/6000-19', 'POVOADO TRES RIOS'),
(7, 'ESCOLA MUNICIPAL NOSSA SENHORA DE FÁTIMA', 21192915, '(99) 98423-5127', 'escolanossasenhora2915@gmail.com', '01.611.836/0001-95', 'POVOADO NOVA ZELÂNDIA'),
(8, 'Escola Municipal Presidente Dutra ', 21102082, '(99) 98430-7670', 'unidadeescolarpresidentedultra@gmail.com', '09.876.554/3221-12', 'Povoado centro do Conrado'),
(9, 'UNIDADE ESCOLAR PEDRO BEZERRA', 21102325, '(99) 98411-3326', 'mariarodriguescostaepb@gmail.com', '435464574632-24', 'AV BEZERRA ,139 SAO RAIMUNDO  DO DOCA BEZERRA'),
(10, 'Unidade Integrada Francisco Moreno', 21101647, '(99) 98441-0461', 'unidadei.f.moreno09@gmail.com', '98.766.552/4457-68', 'Avenida Bezerra '),
(11, 'Creche Comunitária Pingo de Gente ', 21206104, '(99) 98408-5274', 'crechepingodegente01@gmail. com', '76.321.990/0097-66', 'Rua Boa esperança '),
(12, 'Unidade Escolar Teodoro Fernandes ', 21102309, '(99) 98408-3394', 'marcos.levisoares@hotmail.com', '90.008.765/4433-32', 'Povoado centro do Graça '),
(13, 'Escola Municipal José Silvestre', 21102414, '(99) 98448-2003', 'emdoralicebrasil@hotmail.com', '43.215.688/5790-00', 'Povoado centro do Aureliano '),
(14, 'Unidade Escolar Enrique Muniz', 21101949, '(99) 98402-5442', 'Elianelimasilva567@gmail.com', '03.806.774/1000-10', 'Rua Antonio Neto'),
(15, 'ESCOLA MUNICIPAL SANTA MADALENA', 21101698, '(99) 98423-5127', 'escolasantamadalena1698@hotmail.com', '02.611.836/0001-95', 'POVOADO CENTRO DO MADALENA'),
(16, 'ESCOLA MUNICIPAL SÃO RAIMUNDO', 21102210, '(99) 98423-5127', 'escolasaoraimundo2210@gmail.com', '01.611.836/0001-91', 'POVOADO CENTRO DO CHIQUINHO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `matriculas`
--

CREATE TABLE `matriculas` (
  `id` int(11) NOT NULL,
  `turma` int(11) NOT NULL,
  `aluno` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `matriculas`
--

INSERT INTO `matriculas` (`id`, `turma`, `aluno`, `data`) VALUES
(49, 9, 2, '2021-01-29'),
(50, 8, 2, '2021-01-31'),
(51, 8, 1, '2021-01-31'),
(52, 10, 1, '2021-01-31'),
(53, 9, 1, '2021-02-01'),
(54, 10, 2, '2021-02-06'),
(55, 11, 4, '2021-02-07'),
(56, 11, 3, '2021-02-07'),
(57, 11, 5, '2021-02-07'),
(58, 12, 7, '2021-02-07'),
(59, 14, 7, '2021-02-07'),
(61, 18, 1, '2021-03-10');

-- --------------------------------------------------------

--
-- Estrutura para tabela `mensagens`
--

CREATE TABLE `mensagens` (
  `id` int(11) NOT NULL,
  `turma` int(11) NOT NULL,
  `conteudo` text NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `mensagens`
--

INSERT INTO `mensagens` (`id`, `turma`, `conteudo`, `data`) VALUES
(5, 8, 'Olá alunos!', '2021-02-04'),
(6, 8, 'Lembrando a todos que amanhã iremos realizar nossa atividade no laboratório de informática.', '2021-02-04'),
(10, 8, 'Aproveitem para realizar as atividades complementares', '2021-02-04'),
(11, 8, 'TRTERTUJ', '2021-02-12'),
(12, 8, 'bom dia alunos', '2021-02-16'),
(13, 8, 'Boa noite alunos!', '2021-02-17'),
(14, 8, 'boa tarde', '2021-02-19'),
(15, 8, 'BOM DIA', '2021-02-26'),
(16, 8, 'CRIANÇAS BOA TARDE \r\nNÃO ESQEÇAM DA REUNIÃO DIA 26/02 AS 16 HS', '2021-02-26');

-- --------------------------------------------------------

--
-- Estrutura para tabela `notas`
--

CREATE TABLE `notas` (
  `id` int(11) NOT NULL,
  `turma` int(11) NOT NULL,
  `periodo` int(11) NOT NULL,
  `aluno` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `nota` int(11) NOT NULL,
  `nota_max` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `notas`
--

INSERT INTO `notas` (`id`, `turma`, `periodo`, `aluno`, `descricao`, `nota`, `nota_max`) VALUES
(6, 3, 7, 3, 'Trabalho Bimestral', 7, 10),
(7, 3, 7, 3, 'Prova Bimestral', 8, 10),
(10, 3, 7, 3, 'Participação', 4, 5),
(11, 3, 6, 3, 'Trabalho Bimestral', 7, 8),
(13, 3, 6, 3, 'Prova Bimestral', 5, 10),
(14, 3, 6, 5, 'Trabalho Bimestral', 5, 8),
(15, 3, 6, 5, 'Prova Bimestral', 9, 10),
(17, 3, 6, 5, 'Participação', 5, 7),
(18, 3, 7, 5, 'Prova Bimestral', 8, 10),
(20, 3, 6, 2, 'Prova Bimestral', 8, 10),
(21, 3, 7, 5, 'Participação', 4, 5),
(22, 3, 7, 5, 'Trabalho Bimestral', 8, 10),
(23, 3, 8, 5, 'Trabalho Bimestral', 10, 10),
(24, 3, 8, 5, 'Prova Bimestral', 10, 10),
(25, 3, 8, 5, 'Participação', 3, 5),
(0, 7, 0, 6, 'particpacao', 20, 25),
(0, 7, 1, 6, 'Paraticipação as aulas', 9, 25),
(0, 8, 3, 1, 'Participação', 10, 25),
(0, 8, 3, 1, 'PARTICIPAÇAO', 8, 25),
(0, 8, 3, 1, 'PARTICIPAÇÃO', 8, 25),
(0, 8, 3, 1, 'PARTICIPAÇAO', 8, 25),
(0, 8, 3, 1, 'PARTICIPAÇAO', 8, 25),
(0, 8, 3, 1, 'Atividade de clase', 8, 25);

-- --------------------------------------------------------

--
-- Estrutura para tabela `periodos`
--

CREATE TABLE `periodos` (
  `id` int(11) NOT NULL,
  `turma` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_final` date NOT NULL,
  `total_pontos` int(11) NOT NULL,
  `minimo_media` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `periodos`
--

INSERT INTO `periodos` (`id`, `turma`, `nome`, `data_inicio`, `data_final`, `total_pontos`, `minimo_media`) VALUES
(1, 7, '1º Periodo', '2021-02-01', '2021-04-16', 25, 20),
(2, 2, '1º Periodo', '2021-02-01', '2021-04-16', 25, 20),
(3, 8, '1º Periodo', '2021-02-01', '2021-04-16', 25, 20),
(4, 7, '2º Periodo', '2021-04-19', '2021-07-16', 25, 20),
(5, 9, '1º Periodo', '2021-02-08', '2021-12-17', 25, 20),
(6, 8, '2º periodo', '2021-04-19', '2021-07-16', 30, 25);

-- --------------------------------------------------------

--
-- Estrutura para tabela `plano_anual`
--

CREATE TABLE `plano_anual` (
  `id` int(11) NOT NULL,
  `nome_plano` varchar(50) NOT NULL,
  `turma` int(11) NOT NULL,
  `escola` varchar(200) NOT NULL,
  `plano_professor` int(11) NOT NULL,
  `plano_disciplina` int(11) NOT NULL,
  `plano_serie` int(11) NOT NULL,
  `arquivo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `plano_anual`
--

INSERT INTO `plano_anual` (`id`, `nome_plano`, `turma`, `escola`, `plano_professor`, `plano_disciplina`, `plano_serie`, `arquivo`) VALUES
(11, 'Plano Anual', 8, '2', 4, 9, 18, 'Plano-Anual.pdf'),
(12, 'Plano 1º periodo', 8, '11', 11, 13, 20, 'CALENDÁRIO-LETIVO-2021.pdf');

-- --------------------------------------------------------

--
-- Estrutura para tabela `professores`
--

CREATE TABLE `professores` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `formacao` varchar(100) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `nome_escola` int(11) NOT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `professores`
--

INSERT INTO `professores` (`id`, `nome`, `formacao`, `cpf`, `telefone`, `email`, `endereco`, `nome_escola`, `foto`) VALUES
(3, 'Francisco Viana do Nascimento', 'Licenciatura em Letras', '950.835.556-54', '(99) 88888-8888', 'franciscoviana@gmail.com', 'Rua Arão Brito, nº 42, bairro Centro', 1, 'img04.png'),
(4, 'Fagne Almeida de Castro', 'Matemática', '751.408.952-77', '(99) 97777-7777', 'fagnealmeida@gmail.com', 'Rua 04, nº 125, bairro Vila Nair', 1, 'img12.png'),
(5, 'Pedro Cardoso da Silva', 'Licenciatura em Letras', '434.465.174-05', '(99) 99208-7564', 'pedrocardoso@gmail.com', 'Rua Coronel José Nava, nº 126, bairro Centro', 2, 'sem-foto.jpg'),
(6, 'Marcos Gonçalves', 'Informática', '538.516.129-22', '(99) 98257-1369', 'apolimarkus@gmail.com', 'Rua 04, nº 207, bairro Vila Nair', 2, 'sem-foto.jpg'),
(7, 'ANTONIO PERREIRA SILVA', 'POS GRADUADO', '455.454.545-45', '', 'antoniosilva@bol.com', 'AV PEDRO NEIVA DE SANTANA 678, B CORDA MA', 1, 'sem-foto.jpg'),
(8, 'LAZARO MOTTA', 'POS GRADUADO', '324.253.664-57', '', 'lazzaromota@bol.com.br', 'AV PEDRO NEIVA DE SANTANA 478, B CORDA MA', 1, 'sem-foto.jpg'),
(10, 'Camilla Rayane Silva Lima', 'Pós Graduação', '604.595.743-10', '(99) 98479-4170', 'Kamylla04rayane@gmail.com', 'Rua do Passei Monte Castelo ', 4, 'sem-foto.jpg'),
(11, 'CRISTIANE DA SILVA NASCIMENTO', 'POS GRADUADA', '865.588.703-04', '(99) 98439-3709', 'crissnascimento01@gmail.com', 'AV MORENO ,SAO RAIMUNDO DO DOCA BEZERRA', 9, 'sem-foto.jpg'),
(12, 'Francisca Elda Oliveira de Alencar ', 'Pós Graduada ', '772.805.393-00', '(99) 94415-8369', 'franciscaelda2019@gmail.com', 'Rua principal S/N Centro do Conrado ', 8, 'sem-foto.jpg'),
(13, 'ZEZE DI CARMAGO', 'POS GRADUADO', '765.767.787-68', '', 'zezedi@gmail.com', 'AV BEZERRA ,395 SAO RAIMUNDO  DO DOCA BEZERRA', 12, 'sem-foto.jpg'),
(14, 'Laurinete Lopes do Nascimento', 'Graduada', '866.218.743-91', '(99) 98408-5274', 'lopeslaurinete7@gmail.com', 'Av bezerra 147', 11, 'sem-foto.jpg'),
(15, 'ISAIAS ALVES DE SOUZA', 'POS GRADUADO', '865.986.603-78', '(99) 98153-9205', 'sousaisaiasalves@gmail.com', 'AV MORENO SAORAIMUNDO DO DOCA BEZERRA', 9, 'sem-foto.jpg'),
(16, 'Francisca Pinto Lima ', 'Graduada', '890.435.293-20', '(99) 98450-0345', 'Francisca.pinto029@gmail.com', 'Rua Antonio Neto n23', 14, 'sem-foto.jpg'),
(17, 'Eva franciellen', 'Graduada', '022.450.232-30', '(81) 09183-2', 'eva.franciellen@hotmail.com', 'Rua coelho neto 1043 São Raimundo do Doca Bezerra', 11, 'sem-foto.jpg'),
(18, 'Maria Raimunda Pereira de Souza', 'Letras', '869.180.363-00', '(99) 98436-5895', 'mr690840@gmail.com', 'Avenida Bezerra', 9, 'sem-foto.jpg'),
(19, 'Ivanete do Nascimento de Carvalho ', 'Pós graduada', '937.007.333-72', '(99) 98462-6864', 'ivonetecarvalho081@gmail.com', 'Centro do Graça', 12, 'sem-foto.jpg'),
(20, 'Edilme Araujo meneses', 'pedagogia', '764.268.433-00', '(99) 98462-4476', 'edilme123@gmail.com', 'Esperantinópolis', 10, 'sem-foto.jpg'),
(21, 'ANA LUCIA SILVA DE ALMEIDA', '', '879.408.333-91', '(99) 98441-0735', 'analuciasouzaalmeida@hotmail.com', 'RUA ZECA MARCELINO', 9, 'sem-foto.jpg'),
(22, 'JONAS MACIEL CAMPOS', 'POS GRADUADO', '545.565.677-68', '(78) 88990-0009', 'jonasmaciel@gmail.com', 'av castelo branco s domingos', 7, 'sem-foto.jpg'),
(23, 'Anita Santana de Almeida ', 'Graduada', '865.363.383-91', '(55) 99850-4611', 'anitasantana489@gmail.com', 'Povoado centro do Conrado', 8, 'sem-foto.jpg'),
(24, 'Rosinalde Santos silva', 'Magisterio', '515.706.703-82', '(99) 98408-3394', 'rosinaldesilvasantos@gmail.com', 'Cento do Graça', 12, 'sem-foto.jpg'),
(25, 'Osmarina Santos Reis', 'Magisterio', '840.561.263-72', '(86) 94282-052', 'giselemelo538@gmail.com', 'Cento do Graça', 12, 'sem-foto.jpg'),
(26, 'Maria Conceição de Castro Lima', 'Pós-Graduada', '563.780.503-25', '(99) 84065-610', 'mariaconceicaocastrolima087@gmail.com', 'Cento do Graça', 12, 'sem-foto.jpg'),
(27, 'Edna Souza dos Santos', 'Pós-Graduada', '710.248.163-20', '(99) 98422-6531', 'ednasouzadossantos329@gmail.com', 'Cento do Graça', 12, 'sem-foto.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `responsaveis`
--

CREATE TABLE `responsaveis` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `responsaveis`
--

INSERT INTO `responsaveis` (`id`, `nome`, `cpf`, `email`, `telefone`, `endereco`) VALUES
(1, 'Maria Severina Silva', '136.401.348-77', 'mariaseverina@hotmail.com', '(99) 99208-7564', 'Rua Jardin Amaro, nº 53, bairro Zona Sul'),
(2, 'Daniela Almeida Siqueira', '872.540.685-09', 'daniela@gmail.com', '(99) 98123-6754', 'Rua Fortunato Fialho, nº 07, bairro Centro'),
(3, 'Danilo Alves de Albuquerque', '459.774.614-53', 'danilo@gmail.com', '(99) 99123-1456', 'Rua Joaquim Sousa, nº 204, bairro Altamira'),
(4, 'Flávio Lima de Sousa', '247.594.566-43', 'flavio@gmail.com', '(99) 98442-5637', 'Avenida Rio Amazonas, Quadra 05, nº 21, bairro Trezidela'),
(5, 'FRANCISCA SOARES', '456.767.909-09', 'soares@gmail.com', '', 'rua proj 4'),
(6, 'JOSE FRANCISCO NETO', '231.457.689-73', 'netoneto@bol.com.br', '', 'rua proj 10'),
(7, 'Edineia da Silva Almeida', '041.491.133-43', 'edineiadasilvaalmeida@gmail.com', '(99) 98457-8224', 'RUA RIO BRANCO,POVOADO MONTE CASTELO'),
(8, 'GEIZA RODRIGUES UCHOA SOARES', '034.492.843-80', 'marcos.levisoares@hotmail.com', '(99) 98413-6123', 'AV BEZERRA ,395 SAO RAIMUNDO  DO DOCA BEZERRA'),
(9, 'ZILU CAMARGO', '546.787.809-90', 'ziluca@gmail.com', '', 'POVOADO TRES RIOS'),
(10, 'Ulda Melo Pereira', '936.906.063-49', 'umperira2021@gmail.com', '(99) 98402-7014', 'Rua Antonio neto'),
(11, 'Jaqueline vieira da silva', '606.785.293-45', 'Jaqline625@gmail.com', '(99) 98458-0528', 'Cento do graça'),
(12, 'Ana lúcia melo de souza', '091.368.593-38', 'analuciamelo275@gmail.com', '', 'Cento do graça'),
(13, 'Shyrley da silva de lima', '621.305.143-08', 'gc99981237519@gmail.com', '(99) 98423-2159', 'Cento do graça'),
(14, 'Jaiane da Silva Félix', '616.406.913-08', 'joseguilhermejaiane@gmail.com', '(99) 84482-789', 'Cento do graça'),
(15, 'Jaime Gomes Vieira', '311.622.218-52', 'jaimeGOjaimegomesvieira@:gmail.com', '(99) 98468-5648', 'Cento do graça'),
(16, 'Adriana Gomes Vieira', '038.447.863-84', 'joseerivanymaciel@gmail.com', '', 'Cento do graça'),
(17, 'Maria Patricia Soares de Freitas', '033.959.723-21', 'jadesousa540@gmail.com', '(99) 84558-391', 'Cento do graça'),
(18, 'Jade de Freitas Sousa', '048.561.023-03', 'cirineudecastrolima@gmail.com', '(99) 98455-8391', 'Cento do graça'),
(19, 'Laudiana de Castro Silva', '035.342.033-64', 'castrolia6@gmail.com', '', 'Cento do graça'),
(20, 'Cleonice de Lima Santos', '028.936.423-06', 'soaresclaudinet342@gmail.com', '', 'Cento do graça'),
(21, 'Raimunda de Castro Silva Nascimento', '041.655.133-50', 'raimundacastro665@gmail.com', '', 'Cento do graça'),
(22, 'Dalielma Alves da Silva Luiz', '611.708.903-18', 'dalielmaluiz@gmail.com', '', 'Cento do graça'),
(23, ' Amanda Vieira da Silva', '616.415.483-98', 'vieiraamanda538@gmail.com', '(99) 85010-001', 'Cento do graça'),
(24, 'Claudiene de Souza Aquino da Silva', '048.601.343-03', 'claudianesouza41@gmail.com', '(99) 98428-8994', 'Cento do graça'),
(25, ' Cirenir de Castro Silva', '604.544.023-41', 'edsonsilvaed1234@gmail.com', '', 'Cento do graça'),
(26, ' Antonia Dayane da Silva Felix', '023.857.473-32', 'mariaguilherminasilva871@gmail.com', '(99) 98448-2789', 'Cento do graça'),
(27, 'Tamires Santos Soares', '620.102.603-76', 'soaresclaudinete342@gmail.com', '', 'Cento do graça'),
(28, ' Osiane de Castro Lima e Silva', '563.780.503-25', 'mariadaconceiçãocastrolima087@gmail.com', '(61) 94364-377', 'Cento do graça'),
(29, 'Lenir Barbosa da Silva', '042.378.853-13', 'lenirmelo610@gmail.com', '(99) 98431-8294', 'Cento do graça'),
(30, ' Antonia Ferreira do Nascimento', '044.966.323-06', 'an7912732@gmail.com', '', 'Cento do graça'),
(31, 'Antonia Leite Silva', '604.538.063-09', 'joselial064@gmail.com', '(99) 98458-3320', 'Cento do graça'),
(32, ' Antonia Cleude Nascimento Sousa', '010.940.783-01', 'josevieira@gmail.com', '', 'Cento do graça'),
(33, ' Edinet Pessoa Castro', '017.852.263-55', 'ednetpessoa@gmail.com', '(99) 98438-1314', 'Cento do graça'),
(34, ' Elba Neto de Melo', '064.643.983-93', '', '', 'Cento do graça'),
(35, 'Iranilde da Silva Luiz Nascimento', '008.795.973-99', 'iranildeluiz@gmail.com', '', 'Cento do graça'),
(36, ' Eliene Fernandes da Silva', '021.426.983-36', 'carleanesilvabertoz@gmail.com', '(99) 98493-5019', 'Cento do graça'),
(37, ' Elisangela do Nascimento Castro Sousa', '871.928.373-10', 'elizangeladonascimento23@gmail.com', '', 'Cento do graça'),
(38, ' Sandra Maria Lopes da Silva', '977.703.883-68', 'rn6942640@gmail.com', '(99) 98423-2159', 'Cento do graça'),
(39, ' Eva do Nascimento Sousa', '609.399.943-21', 'eva39091@gmail.com', '(99) 98473-6218', 'Cento do graça');

-- --------------------------------------------------------

--
-- Estrutura para tabela `secretarios`
--

CREATE TABLE `secretarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nome_escola` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `secretarios`
--

INSERT INTO `secretarios` (`id`, `nome`, `nome_escola`, `email`, `cpf`, `telefone`, `endereco`, `foto`) VALUES
(1, 'Regina Vieira do Carmo', 1, 'reginavieira@gmail.com', '226.094.928-20', '(99) 99999-9999', 'Rua Almir Silva, bairro Centro', 'img08.jpg'),
(2, 'Cristiano Sousa Borges', 2, 'cristiano@gmail.com', '619.481.743-75', '(99) 98234-5609', 'Rua Augusto Sousa, nº 17, bairro Cohab', 'img11.jpg'),
(3, 'Brenda Correa de Araujo', 3, 'brenda@gmail.com', '851.465.622-88', '(99) 98442-5637', 'Avenida Ubiraçi Guaraja, nº 05, bairro Vila Nova', 'sem-foto.jpg'),
(4, 'LAZARO M DE SOUSA', 1, 'lazzaromota@hotmail.com', '736.821.603-53', '(99) 98461-4250', 'AV PEDRO NEIVA DE SANTANA 678, B CORDA MA', 'sem-foto.jpg'),
(5, 'Carlos Aguiar dos Santos', 3, 'carlosaguiar@gmail.com', '747.164.778-78', '(99) 98122-0324', 'Rua da Pipoca, n° 20, bairro Campinas', 'sem-foto.jpg'),
(6, 'RAIMUNDA DE SOUSA MOREIRA SILVA', 4, 'raimundabdc0123@gmail.com', '849.305.603-06', '(99) 99647-9927', 'RUA SAO RAIMUNDO', 'sem-foto.jpg'),
(7, 'Terezinha moreno da Silva costa', 4, 'morenotherezinha@hotmail.com', '550.354.853-15', '(99) 98431-0371', 'AV MORENO', 'IMG-20200312-WA0199.jpg'),
(8, 'MARCIO JANSEN LIMA OLIVEIRA', 4, 'joselitaoliveira14@gmail.com', '918.590.343-49', '(99) 98814-5224', 'RUA DO COMERCIO ,POV ,MONTE CASTELO', 'sem-foto.jpg'),
(9, 'José Machado da Silva', 5, 'machadovere17@gmail.com', '003.749.743-06', '(99) 98400-2544', 'povo. trés lagoas-', 'sem-foto.jpg'),
(10, 'Sarah Santos Vieira', 4, 'sarah2016s.v@gmail.com', '618.920.353-16', '(99) 98428-1222', 'Rua São Raimundo Monte Castelo', 'sem-foto.jpg'),
(11, 'Aldeides dos Santos vieira ', 7, 'vieira1310manoel@gmail.com', '002.822.163-08', '(99) 84093-667', 'Praça Tristão Ximendes de melo', 'sem-foto.jpg'),
(12, 'Angra Cristina Oliveira Gomes ', 6, 'Angragaby32@gmail.com ', '032.574.433-58', '(99) 98446-0424', 'Povoado:Três rios', 'Screenshot_20210129-183329_Instagram.jpg'),
(13, 'Eva Brito da Silva Melo', 5, 'evab02344@gmail.com', '616.416.643-80', '(99) 98465-0839', 'Rua do Valdir. povoado três Lagoas do piraca ', 'IMG_20200830_201747_221.jpg'),
(14, 'Antônia Rodrigues de Oliveira ', 5, 'antonia5765243@gmail.com', '001.732.753-97', '(99) 84582-477', 'Avenida Manoel  Moreno ', 'sem-foto.jpg'),
(15, 'ANTONIO FRANCISCO ASSUNÇÃO FERREIRA DA CONCEIÇÃO ', 6, 'antoniofranciscodssuncaoferrei@gmail.com', '621.178.303-58', '(99) 98451-8328', 'POVOADO TRES RIOS', 'sem-foto.jpg'),
(16, 'Antonio Carlos Silva Mota', 7, 'carlosmota31@hotmail.com', '335.386.703-15', '(99) 98423-5127', 'Travessa Vicente Gomes, povoado Três Lagoas', 'sem-foto.jpg'),
(17, 'Maria Celestina de Carvalho Castro', 5, 'celestinamari@hotmail.com', '823.946.873-04', '(99) 98859-8176', 'Povoado Três Lagoas n 128', 'sem-foto.jpg'),
(18, 'DUCILEIA ALVES DE SOUSA BESSA', 9, 'ducbessa2020@gmail.com', '918.551.873-53', '(99) 98487-4257', 'RUA FRANCISCO RENOVATO,SAO RAIMUNDO DO DOCA BEZERRA', 'sem-foto.jpg'),
(19, 'Klenilda Oliveira de Alencar ', 8, 'Klenildaoliver2@gmail.com ', '616.382.213-75', '(99) 98430-7670', 'Rua principal S/N Centro do Conrado ', 'PhotoGrid_1586023012577_mh1593569288733.jpg'),
(20, 'Raimunda Laíza Santos de Almeida ', 10, 'raimundalaizasantosdealmeida@gmail.com', '868.167.643-15', '(99) 98427-1443', 'Av Bezerra', 'sem-foto.jpg'),
(21, 'Ana Cleude Araújo Sousa Silva', 10, 'anacleudesilvasilva830@gmail.com', '610.902.383-39', '(99) 98429-4618', 'Av Moreno', 'sem-foto.jpg'),
(22, 'Luana Flávia  Ribeiro Sousa', 10, 'luanarsousa@gmail.com', '606.926.793-16', '(99) 98428-1751', 'Av Bezerra', 'sem-foto.jpg'),
(23, 'Marileide Nascimentoda Costa', 9, 'marileidecosta068@gmail.com', '921.567.623-68', '(99) 98406-7243', 'Rua Franciscoalbino', 'sem-foto.jpg'),
(24, 'Ivaneide de oliveira carvalho', 11, 'Carvalho Ivaneide 63@gmail.com', '003.694.683-41', '(99) 98422-5579', 'Rua Vereador Francisco Renovato 31/ São Raimundo do Doca Bezerra ', '16128090005946390282884186785106.jpg'),
(25, 'Antonio de Matos e Silva ', 11, 'Antoniomatoss460@gmail.com ', '936.086.403-04', '(99) 98408-3394', 'Povoado Centro do Graça ', 'sem-foto.jpg'),
(26, 'Eliane Lima Silva', 14, 'Elianelimasilva567@gmail.com', '023.680.423-50', '(99) 98402-5442', 'Rua Antonio Neto', 'sem-foto.jpg'),
(27, 'Elisângela da Silva e Silva', 13, 'es512668@gmail.com', '616.406.933-00', '(99) 98450-0600', 'Centro do Aureliano', 'sem-foto.jpg'),
(28, 'Gisele Melo Pereira Silva', 12, 'giselemelo538@gmail.com', '621.238.443-65', '(99) 98485-8770', 'Povoado centro do Graça ', 'sem-foto.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `serie`
--

CREATE TABLE `serie` (
  `id` int(11) NOT NULL,
  `serie_ano` varchar(30) NOT NULL,
  `descricao` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `serie`
--

INSERT INTO `serie` (`id`, `serie_ano`, `descricao`) VALUES
(18, '1º Ano - Matutino', 'Fundamental Menor'),
(19, '1º Ano - Vespertino', 'Fundamental Menor'),
(20, '2º Ano - Matutino', 'Fundamental Menor'),
(21, '3º Ano - Matutino', 'Fundamental Menor'),
(22, '4º Ano - Matutino', 'Fundamental Menor'),
(23, '4 e 5 ANO VESPERTINO', 'FUNDAMENTAL MENOR'),
(24, '6 Ano ', 'Fundamental maior '),
(25, '7 Ano', 'Fundamental maior '),
(26, '8 Ano', 'Fundamental maior '),
(27, '9 Ano ', 'Fundamental maior ');

-- --------------------------------------------------------

--
-- Estrutura para tabela `turmas`
--

CREATE TABLE `turmas` (
  `id` int(11) NOT NULL,
  `disciplina` int(11) NOT NULL,
  `serie` int(11) NOT NULL,
  `professor` int(11) NOT NULL,
  `nome_escola` int(11) NOT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_final` date DEFAULT NULL,
  `horario` varchar(30) DEFAULT NULL,
  `dia` varchar(30) DEFAULT NULL,
  `valor_mensalidade` decimal(7,2) DEFAULT NULL,
  `ano` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `turmas`
--

INSERT INTO `turmas` (`id`, `disciplina`, `serie`, `professor`, `nome_escola`, `data_inicio`, `data_final`, `horario`, `dia`, `valor_mensalidade`, `ano`) VALUES
(8, 9, 18, 4, 1, '2021-02-01', '2021-12-17', '07:00 às 11:15', 'sexta-feira', '0.00', 2021),
(9, 12, 18, 3, 1, '2021-02-08', '2021-12-17', '07:00 às 11:15', 'Terça, Quinta e Sexta-feira', NULL, 2021),
(10, 10, 18, 3, 1, '2021-02-08', '2021-12-17', '07:00 às 11:15', 'Segunda, quarta e quinta-feira', NULL, 2021),
(11, 12, 20, 5, 2, '2021-02-08', '2021-12-17', '07:00 às 11:15', 'Terça e Quinta-feira', NULL, 2021),
(12, 9, 21, 3, 1, '2021-02-07', '2021-12-17', '7:00 as 11:30', 'QUINTA', NULL, 2021),
(13, 12, 21, 8, 1, '2021-02-07', '2021-12-17', '7:00 as 11:30', 'QUINTA', NULL, 2021),
(14, 8, 21, 8, 1, '2021-02-07', '2021-12-17', '7:00 as 11:30', 'QUINTA', NULL, 2021),
(15, 15, 23, 9, 4, '2021-03-01', '2021-12-17', '7:00 as 11:30', 'QUINTA/SEXTA', NULL, 2021),
(16, 14, 20, 11, 9, '2021-03-07', '2021-12-17', '7:00 as 11:30', 'QUARTA/QUINTA', NULL, 2021),
(17, 8, 20, 13, 12, '2021-03-01', '2021-12-17', '7:00 as 7:50', 'QUINTA', NULL, 0),
(18, 9, 20, 21, 9, '2020-03-07', '2021-12-21', '7:30 a 9:15', 'quarta,terça, sexta', NULL, 2021);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(25) NOT NULL,
  `nivel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cpf`, `email`, `senha`, `nivel`) VALUES
(38, 'Regina Vieira do Carmo', '226.094.928-20', 'reginavieira@gmail.com', '123', 'secretaria'),
(39, 'Francisco Viana do Nascimento', '950.835.556-54', 'franciscoviana@gmail.com', '123', 'professor'),
(40, 'Fagne Almeida de Castro', '751.408.952-77', 'fagnealmeida@gmail.com', '123', 'professor'),
(41, 'Ana Sophia de Moraes', '915.484.253-03', 'anasophia@gmail.com', '123', 'aluno'),
(42, 'Bruna Firmino de Sousa', '155.717.227-70', 'brunafirmino@gmail.com', '123', 'aluno'),
(43, 'Jeorge Augusto Sousa', '387.250.532-72', 'jeorge@gmail.com', '123', 'coordenador'),
(44, 'Administrador', '000.000.000-00', 'vitrinevirtual@gmail.com', '123', 'Admin'),
(45, 'João da Silva', '213.543.567-23', 'joaosilva@gmail.com', '123', 'secretaria'),
(46, 'Pedro Cardoso da Silva', '434.465.174-05', 'pedrocardoso@gmail.com', '123', 'professor'),
(47, 'Cristiano Sousa Borges', '619.481.743-75', 'cristiano@gmail.com', '123', 'secretaria'),
(48, 'Gabriel Alves de Sousa', '233.630.463-59', 'flavio@gmail.com', '123', 'aluno'),
(49, 'Brenda Correa de Araujo', '851.465.622-88', 'brenda@gmail.com', '123', 'secretaria'),
(50, 'LAZARO M DE SOUSA', '736.821.603-53', 'lazzaromota@hotmail.com', '123', 'secretaria'),
(51, 'Carlos Aguiar dos Santos', '747.164.778-78', 'carlosaguiar@gmail.com', '123', 'secretaria'),
(52, 'Marcos Gonçalves', '538.516.129-22', 'apolimarkus@gmail.com', '123', 'professor'),
(53, 'Ana Maria de Brito', '713.139.755-59', 'anamaria@gmail.com', '123', 'aluno'),
(54, 'ANTONIO PERREIRA SILVA', '455.454.545-45', 'antoniosilva@bol.com', '123', 'professor'),
(55, 'ANTONIO SOARES', '435.467.568-93', 'soares@gmail.com', '123', 'aluno'),
(56, 'VIKTORIA RHAFIZA ALMEIDA DE ARAUJO', '454.565.767-78', 'viktoriarhafizaalmeidadearaujo@gmail.com', '123', 'aluno'),
(57, 'LAZARO MOTTA', '324.253.664-57', 'lazzaromota@bol.com.br', '123', 'professor'),
(58, 'RAIMUNDA DE SOUSA MOREIRA SILVA', '849.305.603-06', 'raimundabdc0123@gmail.com', '123', 'secretaria'),
(60, 'VIKTORIA RHAFIZA ALMEIDA DE ARAUJO', '454.565.767-78', 'viktoriarhafizaalmeidadearaujo@gmail.com', '123', 'aluno'),
(61, 'MARIA CELESTINA DE CARVALHO CASTRO', '823.946.873-04', 'celestinamari@hotmail.com', '123', 'coordenador'),
(62, 'Antonio Carlos Silva Mota', '335.386.703-15', 'carlosmota31@hotmail.com', '123', 'coordenador'),
(63, 'Terezinha moreno da Silva costa', '550.354.853-15', 'morenotherezinha@hotmail.com', '123', 'secretaria'),
(64, 'Terezinha moreno da Silva costa', '550.354.853-15', 'morenotherezinha@hotmail.com', '123', 'coordenador'),
(65, 'Gercilene de Sousa Oliveira', '837.785.943-20', 'Gercilene 123olivei@gmail.com', '123', 'coordenador'),
(66, 'MARCIO JANSEN LIMA OLIVEIRA', '918.590.343-49', 'joselitaoliveira14@gmail.com', '123', 'secretaria'),
(67, 'José Machado da Silva', '003.749.743-06', 'machadovere17@gmail.com', '123', 'secretaria'),
(68, 'Sarah Santos Vieira', '618.920.353-16', 'sarah2016s.v@gmail.com', '123', 'secretaria'),
(69, 'Camilla Rayane Silva Lima ', '604.595.743-10', 'kamylla04rayane@gmail.com', '123', 'coordenador'),
(70, 'Aldeides dos Santos vieira ', '002.822.163-08', 'vieira1310manoel@gmail.com', '123', 'secretaria'),
(71, 'Angra Cristina Oliveira Gomes ', '032.574.433-58', 'Angragaby32@gmail.com', '', 'secretaria'),
(72, 'Eva Brito da Silva Melo', '616.416.643-80', 'evab02344@gmail.com', '123', 'secretaria'),
(73, 'CLEBER SOUZA SILVA', '769.526.223-49', 'clebersousa1977@gmail.com', '123', 'coordenador'),
(74, 'Antônia Rodrigues de Oliveira ', '001.732.753-97', 'antonia5765243@gmail.com', '123', 'secretaria'),
(75, 'ANTONIO FRANCISCO ASSUNÇÃO FERREIRA DA CONCEIÇÃO ', '621.178.303-58', 'antoniofranciscodssuncaoferrei@gmail.com', '123', 'secretaria'),
(76, 'Clara Renata dos Santos Oliveira', '925.436.423-15', 'clara123renata@gmail.com', '123', 'coordenador'),
(77, 'Antonio Carlos Silva Mota', '335.386.703-15', 'carlosmota31@hotmail.com', '123', 'secretaria'),
(78, 'Camilla Rayane Silva Lima', '604.595.743-10', 'Kamylla04rayane@gmail.com', '123', 'professor'),
(79, 'Maria Celestina de Carvalho Castro', '823.946.873-04', 'celestinamari@hotmail.com', '123', 'secretaria'),
(80, 'DUCILEIA ALVES DE SOUSA BESSA', '918.551.873-53', 'ducbessa2020@gmail.com', '123', 'secretaria'),
(81, 'CRISTIANE DA SILVA NASCIMENTO', '865.588.703-04', 'crissnascimento01@gmail.com', '123', 'professor'),
(82, 'Gisele Melo Pereira Silva', '62123844365', 'giselemelo538@gmail.com', '123', 'aluno'),
(83, 'Klenilda Oliveira de Alencar ', '616.382.213-75', 'Klenildaoliver2@gmail.com ', '123', 'secretaria'),
(84, 'Francisca Elda Oliveira de Alencar ', '772.805.393-00', 'franciscaelda2019@gmail.com', '123', 'coordenador'),
(85, 'Raimunda Laíza Santos de Almeida ', '868.167.643-15', 'raimundalaizasantosdealmeida@gmail.com', '123', 'secretaria'),
(86, 'Ana Cleude Araújo Sousa Silva', '610.902.383-39', 'anacleudesilvasilva830@gmail.com', '123', 'secretaria'),
(87, 'Francisca Elda Oliveira de Alencar ', '772.805.393-00', 'franciscaelda2019@gmail.com', '123', 'professor'),
(88, 'Luana Flávia  Ribeiro Sousa', '606.926.793-16', 'luanarsousa@gmail.com', '123', 'secretaria'),
(89, 'Marileide Nascimentoda Costa', '921.567.623-68', 'marileidecosta068@gmail.com', '', 'secretaria'),
(90, 'Ivaneide de oliveira carvalho', '003.694.683-41', 'Carvalho Ivaneide 63@gmail.com', '123', 'secretaria'),
(91, 'Antonio de Matos e Silva ', '936.086.403-04', 'Antoniomatoss460@gmail.com ', '123', 'secretaria'),
(92, 'ZEZE DI CARMAGO', '765.767.787-68', 'zezedi@gmail.com', '123', 'professor'),
(93, 'LUCIANO CAMARGO', '657.799.809-00', 'ziluca@gmail.com', '123', 'aluno'),
(94, 'Eliane Lima Silva', '023.680.423-50', 'Elianelimasilva567@gmail.com', '123', 'secretaria'),
(95, 'Laurinete Lopes do Nascimento', '866.218.743-91', 'lopeslaurinete7@gmail.com', '123', 'professor'),
(96, 'ISAIAS ALVES DE SOUZA', '865.986.603-78', 'sousaisaiasalves@gmail.com', '123', 'professor'),
(97, 'Francisca Pinto Lima ', '890.435.293-20', 'Francisca.pinto029@gmail.com', '123', 'professor'),
(98, 'Elisângela da Silva e Silva', '616.406.933-00', 'es512668@gmail.com', '123', 'secretaria'),
(99, 'Eva franciellen', '022.450.232-30', 'eva.franciellen@hotmail.com', '123', 'professor'),
(100, 'Maria Raimunda Pereira de Souza', '869.180.363-00', 'mr690840@gmail.com', '123', 'professor'),
(101, 'Ivanete do Nascimento de Carvalho ', '937.007.333-72', 'ivonetecarvalho081@gmail.com', '123', 'professor'),
(102, 'Edilme Araujo meneses', '764.268.433-00', 'edilme123@gmail.com', '123', 'professor'),
(103, 'ANA LUCIA SILVA DE ALMEIDA', '879.408.333-91', 'analuciasouzaalmeida@hotmail.com', '123', 'professor'),
(104, 'Gabriele Melo Pereira', '621.238.423-11', 'umperira2021@gmail.com', '123', 'aluno'),
(105, 'JONAS MACIEL CAMPOS', '545.565.677-68', 'jonasmaciel@gmail.com', '123', 'professor'),
(106, 'Anita Santana de Almeida ', '865.363.383-91', 'anitasantana489@gmail.com', '123', 'professor'),
(107, 'Gisele Melo Pereira Silva', '621.238.443-65', 'giselemelo538@gmail.com', '123', 'secretaria'),
(108, 'Rosinalde Santos silva', '515.706.703-82', 'rosinaldesilvasantos@gmail.com', '123', 'professor'),
(109, 'Osmarina Santos Reis', '840.561.263-72', 'giselemelo538@gmail.com', '123', 'professor'),
(110, 'Maria Conceição de Castro Lima', '563.780.503-25', 'mariaconceicaocastrolima087@gmail.com', '123', 'professor'),
(111, 'Edna Souza dos Santos', '710.248.163-20', 'ednasouzadossantos329@gmail.com', '123', 'professor'),
(112, 'Antonio Kauã Vieira de Sousa', '', 'giselemelo538@gmail.com', '123', 'aluno'),
(113, 'Antonio Kauã Vieira de Sousa', '', 'giselemelo538@gmail.com', '123', 'aluno'),
(114, 'Antonio Kauã Vieira de Sousa', '', 'giselemelo538@gmail.com', '123', 'aluno'),
(115, 'Antonio Kauã Vieira de Sousa', '', 'giselemelo538@gmail.com', '123', 'aluno'),
(116, 'Antonio Kauã Vieira de Sousa', '', 'giselemelo538@gmail.com', '123', 'aluno'),
(117, 'Antonio Kauã Vieira de Sousa', '', 'giselemelo538@gmail.com', '123', 'aluno'),
(118, 'Antonio Kauã Vieira de Sousa', '', 'giselemelo538@gmail.com', '123', 'aluno'),
(119, 'Antonio Kauã Vieira de Sousa', '', 'giselemelo538@gmail.com', '123', 'aluno'),
(120, 'Antonio Kauã Vieira de Sousa', '', 'giselemelo538@gmail.com', '123', 'aluno'),
(121, 'Antonio Kauã Vieira de Sousa', '', 'giselemelo538@gmail.com', '123', 'aluno'),
(122, 'Antonio Kauã Vieira de Sousa', '', 'giselemelo538@gmail.com', '123', 'aluno'),
(123, 'Antonio Kauã Vieira de Sousa', '', 'giselemelo538@gmail.com', '123', 'aluno'),
(124, 'Antonio Kauã Vieira de Sousa', '', 'giselemelo538@gmail.com', '123', 'aluno'),
(125, 'Antonio Kauã Vieira de Sousa', '', 'giselemelo538@gmail.com', '123', 'aluno'),
(126, 'Antonio Kauã Vieira de Sousa', '', 'giselemelo538@gmail.com', '123', 'aluno'),
(127, 'Antonio Kauã Vieira de Sousa', '', 'giselemelo538@gmail.com', '123', 'aluno'),
(128, 'Antonio Kauã Vieira de Sousa', '', 'giselemelo538@gmail.com', '123', 'aluno'),
(129, 'Antonio Kauã Vieira de Sousa', '', 'giselemelo538@gmail.com', '123', 'aluno'),
(130, 'Antonio Kauã Vieira de Sousa', '', 'giselemelo538@gmail.com', '123', 'aluno'),
(131, 'Antonio Kauã Vieira de Sousa', '', 'giselemelo538@gmail.com', '123', 'aluno'),
(132, 'Antonio Kauã Vieira de Sousa', '', 'giselemelo538@gmail.com', '123', 'aluno'),
(133, 'Antonio Kauã Vieira de Sousa', '', 'giselemelo538@gmail.com', '123', 'aluno'),
(134, 'Antonio Kauã Vieira de Sousa', '', 'giselemelo538@gmail.com', '123', 'aluno'),
(135, 'Antonio Kauã Vieira de Sousa', '', 'giselemelo538@gmail.com', '123', 'aluno'),
(136, 'Antonio Kauã Vieira de Sousa', '', 'giselemelo538@gmail.com', '123', 'aluno'),
(137, 'Antonio Kauã Vieira de Sousa', '', 'giselemelo538@gmail.com', '123', 'aluno'),
(138, ' Kauã Vitor de Freitas Sousa Castro', '048.561.023-03', 'cirineudecastrolima@gmail.com', '123', 'aluno'),
(139, 'Antonio Kauã Vieira de Sousa', '', 'giselemelo538@gmail.com', '123', 'aluno'),
(140, ' Luiz Fernando da Silva dos Santos ', '', 'rosinaldesilvasantos@gmail.com', '123', 'aluno'),
(141, ' Adylla Victória do nascimento Souza', '', 'an7912732@gmail.com', '123', 'aluno');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `aulas`
--
ALTER TABLE `aulas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `chamadas`
--
ALTER TABLE `chamadas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `coordenadores`
--
ALTER TABLE `coordenadores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `docs_escola`
--
ALTER TABLE `docs_escola`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `escolas`
--
ALTER TABLE `escolas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `matriculas`
--
ALTER TABLE `matriculas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `mensagens`
--
ALTER TABLE `mensagens`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `periodos`
--
ALTER TABLE `periodos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `plano_anual`
--
ALTER TABLE `plano_anual`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `responsaveis`
--
ALTER TABLE `responsaveis`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `secretarios`
--
ALTER TABLE `secretarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `serie`
--
ALTER TABLE `serie`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `turmas`
--
ALTER TABLE `turmas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de tabela `aulas`
--
ALTER TABLE `aulas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `chamadas`
--
ALTER TABLE `chamadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `coordenadores`
--
ALTER TABLE `coordenadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `docs_escola`
--
ALTER TABLE `docs_escola`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `escolas`
--
ALTER TABLE `escolas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `matriculas`
--
ALTER TABLE `matriculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de tabela `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `periodos`
--
ALTER TABLE `periodos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `plano_anual`
--
ALTER TABLE `plano_anual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `professores`
--
ALTER TABLE `professores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `responsaveis`
--
ALTER TABLE `responsaveis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de tabela `secretarios`
--
ALTER TABLE `secretarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `serie`
--
ALTER TABLE `serie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `turmas`
--
ALTER TABLE `turmas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
