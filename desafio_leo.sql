-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Jun-2021 às 04:46
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `desafio_leo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cada_pessoas`
--

CREATE TABLE `cada_pessoas` (
  `pess_id` int(11) NOT NULL,
  `pess_nm` varchar(80) NOT NULL,
  `pess_apld` varchar(20) DEFAULT NULL,
  `pess_end` varchar(45) DEFAULT NULL,
  `pess_end_nr` varchar(10) DEFAULT NULL,
  `pess_compl` varchar(30) DEFAULT NULL,
  `pess_bairro` varchar(30) DEFAULT NULL,
  `pess_cep` varchar(9) DEFAULT NULL,
  `pess_tel` int(3) DEFAULT 0,
  `pess_fax` varchar(20) DEFAULT NULL,
  `pess_cnpj_cpf` varchar(20) DEFAULT NULL,
  `pess_insc_rg` varchar(15) DEFAULT NULL,
  `pess_dt_aber_nasc` date DEFAULT NULL,
  `pess_contato` varchar(15) DEFAULT NULL,
  `pess_site` varchar(60) DEFAULT NULL,
  `pess_email` varchar(60) NOT NULL,
  `pess_dt_inc` date NOT NULL,
  `pess_tp_pessoa` enum('F','J') NOT NULL,
  `pess_delete` enum('TRUE','FALSE') NOT NULL DEFAULT 'FALSE',
  `esta_ibge` int(11) NOT NULL,
  `muni_ibge` int(11) NOT NULL,
  `pess_senha` varchar(40) NOT NULL,
  `pess_cli` enum('TRUE','FALSE') NOT NULL DEFAULT 'FALSE',
  `pess_for` enum('TRUE','FALSE') NOT NULL DEFAULT 'FALSE',
  `pess_usu` enum('TRUE','FALSE') NOT NULL DEFAULT 'FALSE',
  `pess_ven` enum('TRUE','FALSE') NOT NULL DEFAULT 'FALSE',
  `pess_fun` enum('TRUE','FALSE') NOT NULL DEFAULT 'FALSE',
  `pess_obs` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cada_pessoas`
--

INSERT INTO `cada_pessoas` (`pess_id`, `pess_nm`, `pess_apld`, `pess_end`, `pess_end_nr`, `pess_compl`, `pess_bairro`, `pess_cep`, `pess_tel`, `pess_fax`, `pess_cnpj_cpf`, `pess_insc_rg`, `pess_dt_aber_nasc`, `pess_contato`, `pess_site`, `pess_email`, `pess_dt_inc`, `pess_tp_pessoa`, `pess_delete`, `esta_ibge`, `muni_ibge`, `pess_senha`, `pess_cli`, `pess_for`, `pess_usu`, `pess_ven`, `pess_fun`, `pess_obs`) VALUES
(2, 'COMPANIA DA COUVES ATUALIZADA CIA', 'JOSE DAS COUVES', 'ENDERECO DAS COUVES,100', '01', 'Terreo', 'BAIRRO DAS COUVES', '03441001', 11, '0033333333', '16874898000167', 'isento', '1972-02-01', 'CONTATO COUVE', 'lojadivenda.com', 'lv@lojadivenda.com', '2013-03-01', 'J', 'TRUE', 35, 3550308, 'dde4b22f2d7748e09a9d91b2c49c8a10', 'FALSE', 'TRUE', 'FALSE', 'FALSE', 'TRUE', 'Teste de texto de pessoa Juridica, descrição e textos'),
(5, 'Edmilson Joaquim Cliente do tamanho do campo Razao', 'Eddie Mils On Clie', 'Rua teste do Edmilson Joaquim o Cliente', '0', '3.o Andar', 'Bairro teste Atualizacao do Cl', '03443001', 8, '00 0000-0000', '06688503883', '154409808', '1965-10-25', 'Eddie Joaquim ', 'sitedeteste.com.br', 'edjo@aquitudotem.com', '2013-03-01', 'F', 'FALSE', 35, 3500907, 'dde4b22f2d7748e09a9d91b2c49c8a10', 'TRUE', 'TRUE', 'FALSE', 'TRUE', 'FALSE', 'Teste de descrição de textos pessoa Física'),
(17, 'Comercio de Vidros Eurípedes Ltda EPP', 'Com.de Vds Eurìpedes', 'Engenheiro Soares de Camargo', '521', '', 'Cidade Patriarca', '03556000', 0, '0 000-0000', '54289699000180', '111197910110', '2014-03-26', 'Beth', '', 'comdevdseurides@hotmail.com', '2013-03-01', 'J', 'FALSE', 29, 2902104, '25f9e794323b453885f5181f1b624d0b', 'TRUE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(26, 'Casa Vânia Comércio de Vidros Planos  Ltda', 'Casa Vânia', 'Rua Francisco Augusto', '80', 'att.web', 'Jardim Alice', '07071100', 0, '11124518862', '96247200000112', '336.013.346.116', '2014-05-03', 'Val Vasconcelos', 'www.casavania.com.br', 'vendas@casavania.com.br', '2013-03-01', 'J', 'FALSE', 35, 3500600, '123456789', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(33, 'nazi', 'att.web', 'att.web', '0', 'att.web', 'att.web', '0', 0, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'att.web', 'aquitudotem_attweb', 'nazi@teste.com.br', '2013-03-01', 'F', 'FALSE', 33, 3300258, 'e10adc3949ba59abbe56e057f20f883e', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(34, 'teste1 lojadi venda de Pessoa', 'att.web Nome Pessoa', 'att.web', '0', 'att.web', 'att.web', '03504020', 5, '00 0000-0000', '06688503883', 'isento', '2013-01-01', 'att.web', 'aquitudotem_attweb', 'teste1@lojadivenda.com', '2013-03-01', 'F', 'FALSE', 53, 5300108, 'dde4b22f2d7748e09a9d91b2c49c8a10', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(119, 'Teste 2 Loja di Venda', 'att.web', 'att.web', '0', 'att.web', 'att.web', '0', 0, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'att.web', 'aquitudotem_attweb', 'teste2@lojadivenda.com', '2013-04-03', 'F', 'FALSE', 23, 2304509, 'dde4b22f2d7748e09a9d91b2c49c8a10', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(120, 'teste3', 'Apelido teste3 id 12', 'Endreco teste3 id 120', '0', 'att.web', 'Bairro id 120', '54890', 0, '00 0000-0000', '06688604085', 'isento', '2013-01-01', 'att.web', 'aquitudotem_attweb', 'teste3@lojadivenda.com', '2013-04-04', 'F', 'FALSE', 14, 1400233, 'dde4b22f2d7748e09a9d91b2c49c8a10', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(121, 'Jota Campos Cia', 'JC Informatica', 'endereco jc,10', '0', '1o. Andar', 'bairro teste JC', '03444-001', 0, '00 0000-0000', '72.587.533/0001-22', 'isento', '2015-12-18', 'Contato teste J', 'aquitudotem.com', 'jc@aquitudotem.com', '2013-07-26', 'J', 'FALSE', 35, 3518701, 'dde4b22f2d7748e09a9d91b2c49c8a10', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(122, 'Rose', 'att.web', 'att.web', '0', 'att.web', 'att.web', '0000-000', 0, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'att.web', 'attweb', 'rose_campos@aquitudotem.com', '2013-07-26', 'F', 'FALSE', 35, 3550308, '92b79b318cee71520598fcc18efcf01f', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(124, 'Laudo', 'att.web', 'att.web', '0', 'att.web', 'att.web', '0000-000', 4, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'att.web', 'attweb', 'vidracarialaudo@gmail.com', '2013-07-29', 'F', 'FALSE', 35, 3550308, 'e10adc3949ba59abbe56e057f20f883e', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(125, 'Casa de Vidros Formosa', 'Casa de Vds Formosa', 'Avenida Renata', '562', 'att.web', 'Chácara Belenzinho', '03377000', 0, '1122117182', '52835295000110', '105.542.762.119', '2014-01-09', 'Sr. Sato', 'attweb', 'vidrosformosa@hotmail.com', '2013-07-29', 'J', 'FALSE', 35, 3550308, '25f9e794323b453885f5181f1b624d0b', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(126, 'Resoleta Alves dos Santos / Vidraçaria VG Vidros', 'Resoleta Alves dos S', 'Avenida São Paulo', '448', 'att.web', 'Jardim Tranquilidade', '07052160', 0, '0 000-0000', '05310926000105', '336698358117', '2013-01-01', 'Antônio', 'attweb', 'george_180236@hotmail.com', '2013-07-29', 'J', 'FALSE', 35, 3550308, '123456789', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(127, 'VidraÃ§aria Artes MarÃ§al', 'att.web', 'att.web', '0', 'att.web', 'att.web', '0000-000', 0, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'att.web', 'attweb', 'vidracariaartesmarcal@ig.com.br', '2013-07-29', 'F', 'FALSE', 35, 3550308, 'e10adc3949ba59abbe56e057f20f883e', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(128, 'VidraÃ§aria Barbosa', 'Vidracaria Barbosa', 'Jarauara', '404', '', 'Vila Ré', '03665000', 0, '11975530682', '14814915000145', 'isento', '2014-01-17', 'Djalma/Lena', '', 'barbosa.ld@hotmail.com', '2013-07-29', 'J', 'FALSE', 35, 3550308, '25f9e794323b453885f5181f1b624d0b', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(129, 'VidraÃ§aria Almirante', 'att.web', 'att.web', '0', 'att.web', 'att.web', '0000-000', 0, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'att.web', 'attweb', 'daniel-vidros@hotmail.com', '2013-07-29', 'F', 'FALSE', 35, 3550308, 'e10adc3949ba59abbe56e057f20f883e', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(130, 'AteliÃª IreartÂ´s', 'att.web', 'att.web', '0', 'att.web', 'att.web', '0000-000', 0, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'att.web', 'attweb', 'irearts@ig.com.br', '2013-07-29', 'F', 'FALSE', 35, 3550308, 'e10adc3949ba59abbe56e057f20f883e', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(131, 'VidraÃ§aria Alvim', 'att.web', 'Endereco Alvim', '131', 'A', 'Bairro  Alvim', '01245-333', 12345678, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'contato Alvim', 'vidracariaalvim.com.br', 'roberto.borduque@gmail.com', '2013-07-29', 'J', 'FALSE', 35, 3550308, 'e10adc3949ba59abbe56e057f20f883e', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(132, 'Serralheria e VidraÃ§aria Rodrigues', 'att.web', 'att.web', '0', 'att.web', 'att.web', '0000-000', 0, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'att.web', 'attweb', 'contato@serralheriarodriguesarts.com.br', '2013-07-29', 'F', 'FALSE', 35, 3550308, 'e10adc3949ba59abbe56e057f20f883e', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(133, 'VidraÃ§aria Aguia de Haia', 'Aguia de Haia nome', 'endereco aguia de haia', '133 A', 'terreo', 'bairro Aguia de haia', '03344-001', 223344556, '00 0000-0000', '50.001.002/0001-60', '15440971', '2013-01-01', 'contato aguia', 'aguia.com.br', 'vidracariaaguia@gmail.com', '2013-07-29', 'F', 'FALSE', 35, 3550308, 'e10adc3949ba59abbe56e057f20f883e', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(134, 'SVC VidraÃ§aria Sagrado CoraÃ§Ã£o', 'att.web', 'att.web', '0', 'att.web', 'att.web', '0000-000', 0, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'att.web', 'attweb', 'luizsag@hotmail.com', '2013-07-29', 'F', 'FALSE', 35, 3550308, 'e10adc3949ba59abbe56e057f20f883e', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(138, 'Vidraçaria Cruzeiro Ltda ME', 'Vidraçaria Cruzeiro', 'Rua Aracê', '289', '', 'Vila Formosa', '03362050', 0, '11132979839', '47919303000176', '105591480114', '2014-01-17', 'Marlene', '', 'vidroscruzeiro@hotmail.com', '2013-07-31', 'J', 'FALSE', 35, 3550308, '25f9e794323b453885f5181f1b624d0b', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(140, 'WÂ´Arte', 'att.web', 'att.web', '0', 'att.web', 'att.web', '0000-000', 0, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'att.web', 'attweb', 'warte@quadrosdesign.com.br', '2013-07-31', 'F', 'FALSE', 35, 3550308, 'e10adc3949ba59abbe56e057f20f883e', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(141, 'Arte Lipe', 'att.web', 'att.web', '0', 'att.web', 'att.web', '0000-000', 0, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'att.web', 'attweb', 'arte.lipe@hotmail.com', '2013-07-31', 'F', 'FALSE', 35, 3550308, 'e10adc3949ba59abbe56e057f20f883e', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(142, 'Quadro & Cor', 'att.web', 'att.web', '0', 'att.web', 'att.web', '0000-000', 0, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'att.web', 'attweb', 'quadroecor@uol.com.br', '2013-07-31', 'F', 'FALSE', 35, 3550308, 'e10adc3949ba59abbe56e057f20f883e', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(143, 'Art Place', 'att.web', 'att.web', '0', 'att.web', 'att.web', '0000-000', 0, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'att.web', 'attweb', 'arte_maxx@hotmail.com', '2013-07-31', 'F', 'FALSE', 35, 3550308, 'e10adc3949ba59abbe56e057f20f883e', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(144, 'Elvis Arts Arte & DecoraÃ§Ã£o', 'att.web', 'att.web', '0', 'att.web', 'att.web', '0000-000', 0, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'att.web', 'attweb', 'elvisarts@hotmail.com', '2013-07-31', 'F', 'FALSE', 35, 3550308, 'e10adc3949ba59abbe56e057f20f883e', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(145, 'Los Amigos PainÃ©is e Molduras', 'att.web', 'att.web', '0', 'att.web', 'att.web', '0000-000', 0, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'att.web', 'attweb', 'losamigos@mgmidia.com.br', '2013-07-31', 'F', 'FALSE', 35, 3550308, 'e10adc3949ba59abbe56e057f20f883e', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(146, 'Syl`Arte ', 'att.web', 'att.web', '0', 'att.web', 'att.web', '0000-000', 0, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'att.web', 'attweb', 'sylarte@hotmail.com', '2013-07-31', 'F', 'FALSE', 35, 3550308, 'e10adc3949ba59abbe56e057f20f883e', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(147, 'Molduras Rai Arte e DecoraÃ§Ã£o', 'att.web', 'att.web', '0', 'att.web', 'att.web', '0000-000', 0, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'att.web', 'attweb', 'moldurasrai@hotmail.com', '2013-07-31', 'F', 'FALSE', 35, 3550308, 'e10adc3949ba59abbe56e057f20f883e', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(148, 'Conecta Vidros', 'att.web', 'att.web', '0', 'att.web', 'att.web', '0000-000', 0, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'att.web', 'attweb', 'conectavidros@hotmail.com', '2013-07-31', 'F', 'FALSE', 35, 3550308, 'e10adc3949ba59abbe56e057f20f883e', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(149, 'CP Esquadrias de AlumÃ­nio, Vidro Temperado', 'att.web', 'att.web', '0', 'att.web', 'att.web', '0000-000', 0, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'att.web', 'attweb', 'cp.esquadria@gmail.com', '2013-07-31', 'F', 'FALSE', 35, 3550308, 'e10adc3949ba59abbe56e057f20f883e', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(150, 'Pammikka Ltda EPP', 'Grupo Pammikka', 'Avenida Flora', '2089', 'Osasco', 'Jaguaribe', '06053040', 0, '11143254931', '15048379000187', '492600147119', '2014-01-28', 'Paulo/Camila', 'www.grupopammikka.com.br', 'vidros@grupopammikka.com.br', '2013-07-31', 'J', 'FALSE', 35, 3550308, '123456789', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(151, 'Porte Vidros', 'Apelido cliente id 1', 'Endreco cliente id 151', '0', 'att.web', 'Bairro id 151', '84630', 0, '00 0000-0000', '5314870000159', 'isento', '2013-01-01', 'att.web', 'attweb', 'leonardo@portevidros.com.br', '2013-07-31', 'J', 'FALSE', 13, 1300086, 'e10adc3949ba59abbe56e057f20f883e', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(152, 'Styllus Glass', 'att.web', 'att.web', '0', 'att.web', 'att.web', '0000-000', 0, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'att.web', 'attweb', 'styllusglass@hotmail.com', '2013-07-31', 'F', 'FALSE', 35, 3550308, 'e10adc3949ba59abbe56e057f20f883e', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(153, 'VidraÃ§aria Angels', 'att.web', 'att.web', '0', 'att.web', 'att.web', '0000-000', 0, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'att.web', 'attweb', 'contato@vidracariaangels.com.br', '2013-07-31', 'F', 'FALSE', 35, 3550308, 'e10adc3949ba59abbe56e057f20f883e', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(154, 'VidraÃ§aria Boa Nova', 'att.web', 'att.web', '0', 'att.web', 'att.web', '0000-000', 0, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'att.web', 'attweb', 'vidracariaboanova@terra.com.br', '2013-07-31', 'F', 'FALSE', 35, 3550308, 'e10adc3949ba59abbe56e057f20f883e', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(155, 'VidraÃ§aria FKR', 'att.web', 'att.web', '0', 'att.web', 'att.web', '0000-000', 0, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'att.web', 'attweb', 'vidracariafkr@hotmail.com ', '2013-07-31', 'F', 'FALSE', 35, 3550308, 'e10adc3949ba59abbe56e057f20f883e', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(156, 'Vidro Forte ComÃ©rcio de Vidros', 'att.web', 'att.web', '0', 'att.web', 'att.web', '0000-000', 0, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'att.web', 'attweb', 'compras@vidrofortesp.com.br', '2013-07-31', 'F', 'FALSE', 35, 3550308, 'e10adc3949ba59abbe56e057f20f883e', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(157, 'VidraÃ§aria Bom Clima', 'att.web', 'att.web', '0', 'att.web', 'att.web', '0000-000', 0, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'att.web', 'attweb', 'bomclimavidros@gmail.com', '2013-08-01', 'F', 'FALSE', 35, 3550308, 'e10adc3949ba59abbe56e057f20f883e', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(158, 'Adriana', 'att.web', 'att.web', '0', 'att.web', 'att.web', '0000-000', 0, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'att.web', 'attweb', '', '2013-08-13', 'F', 'FALSE', 35, 3550308, 'd41d8cd98f00b204e9800998ecf8427e', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(159, 'teste42', 'att.web', 'att.web', '0', 'att.web', 'att.web', '0000-000', 0, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'att.web', 'attweb', 'teste42@att.com', '2013-10-11', 'F', 'FALSE', 35, 3550308, '25d55ad283aa400af464c76d713c07ad', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(160, 'CVR-Com.de Vds Radial José Mateus da Silva', 'José Mateus da Silva', 'Joaquim Marra', '406', '', 'Vila Matilde', '03514000', 0, '0 000-0000', '39160300868', '5774185', '2014-01-17', 'Mateus', '', 'cvr@semdominio.com', '2013-10-14', 'F', 'FALSE', 35, 3550308, '25f9e794323b453885f5181f1b624d0b', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(161, 'Pammikka Vidros', 'att.web', 'att.web', '0', 'att.web', 'att.web', '0000-000', 0, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'att.web', 'attweb', 'contato@grupopammikka.com.br', '2013-10-14', 'F', 'FALSE', 35, 3550308, '25d55ad283aa400af464c76d713c07ad', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(162, 'Vid. Nossa Sra - Heitor Caetano Gonçalves ME', 'Heitor Caetano Gonça', 'Piraquara', '274', 'att.web', 'Jardim Nordeste', '03688000', 0, '0 000-0000', '62435417000134', '145873574110', '2014-01-14', 'Nilson', 'attweb', 'nsa@semdominio.com', '2013-11-21', 'J', 'FALSE', 35, 3550308, '25f9e794323b453885f5181f1b624d0b', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(165, 'Rose', 'att.web', 'att.web', '0', 'att.web', 'att.web', '0000-000', 0, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'att.web', 'attweb', 'rosecampos67@gmail.com', '2013-11-23', 'F', 'FALSE', 35, 3550308, '25f9e794323b453885f5181f1b624d0b', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(166, 'Vanessa Correa', 'att.web', 'att.web', '0', 'att.web', 'att.web', '0000-000', 0, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'att.web', 'attweb', 'vanessacorreasilva@hotmail.com', '2014-03-23', 'F', 'FALSE', 35, 3550308, '40487a06315ad238f78c913c6794195b', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(167, 'Neomar', 'att.web', 'att.web', '0', 'att.web', 'att.web', '0000-000', 0, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'att.web', 'attweb', 'NWvidros@gmail.com', '2014-08-06', 'F', 'FALSE', 35, 3550308, '750ea49a3f1caa7dbaf8073dc3994995', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(171, 'victor hugo von lohrmann da cruz', 'att.web', 'att.web', '0', 'att.web', 'att.web', '0000-000', 0, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'att.web', 'attweb', 'victorhugo_von@hotmail.com', '2014-10-18', 'F', 'FALSE', 35, 3550308, 'd6d37c0c409f1cbcb7aab7c286c260de', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL),
(172, 'Jozianne Lima', 'att.web', 'att.web', '0', 'att.web', 'att.web', '0000-000', 0, '00 0000-0000', '00.000.000/0001-00', 'isento', '2013-01-01', 'att.web', 'attweb', 'joziannylima@yahoo.com.br', '2014-10-31', 'F', 'FALSE', 35, 3550308, 'ddb61f1221bb94820a17d6ff7a479d61', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_14_210600_create_peticoes_table', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nivel` smallint(6) NOT NULL DEFAULT 0,
  `id_grup` int(11) NOT NULL DEFAULT 0,
  `status` smallint(6) NOT NULL DEFAULT 0,
  `rg_ie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `cpf_cnpj` int(11) NOT NULL DEFAULT 0,
  `endereco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `cep` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `esta_ibge` int(11) NOT NULL DEFAULT 0,
  `muni_ibge` int(11) NOT NULL DEFAULT 0,
  `complemento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `bairro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `id_fone` int(11) NOT NULL DEFAULT 0,
  `site` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `data_nasc` date NOT NULL DEFAULT '2021-04-27',
  `pessoa_tp` enum('F','J') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'F',
  `fornecedor` enum('TRUE','FALSE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'FALSE',
  `id_fornece` int(11) NOT NULL DEFAULT 0,
  `vendedor` enum('TRUE','FALSE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'FALSE',
  `id_vende` int(11) NOT NULL DEFAULT 0,
  `funcionario` enum('TRUE','FALSE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'FALSE',
  `id_funciona` int(11) NOT NULL DEFAULT 0,
  `associado` enum('TRUE','FALSE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'FALSE',
  `id_associa` int(11) NOT NULL DEFAULT 0,
  `contato` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `obs` longtext COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `nivel`, `id_grup`, `status`, `rg_ie`, `cpf_cnpj`, `endereco`, `cep`, `esta_ibge`, `muni_ibge`, `complemento`, `bairro`, `id_fone`, `site`, `data_nasc`, `pessoa_tp`, `fornecedor`, `id_fornece`, `vendedor`, `id_vende`, `funcionario`, `id_funciona`, `associado`, `id_associa`, `contato`, `obs`) VALUES
(1, 'Joaquim, Edmilson', 'admin@ca.com.br', NULL, '$2y$10$DDDAmwDpz7ZhXjykvSkjt.RpG2j3jadLJMGL.nXfUhbMGiutKIApe', NULL, '2021-04-27 22:48:40', '2021-04-27 22:48:40', 0, 0, 0, '0', 0, '', '0', 0, 0, '', '', 0, '', '2021-04-27', 'F', 'FALSE', 0, 'FALSE', 0, 'FALSE', 0, 'FALSE', 0, '', ''),
(2, 'Usuario CA-Sistema', 'usuario@ca.com.br', NULL, '$2y$10$qDYawNOuAllVfejRGA86NOFDXO7mGWZ/cff6uTkIDR71mSGvdU352', NULL, '2021-04-27 22:48:40', '2021-04-27 22:48:40', 0, 0, 0, '0', 0, '', '0', 0, 0, '', '', 0, '', '2021-04-27', 'F', 'FALSE', 0, 'FALSE', 0, 'FALSE', 0, 'FALSE', 0, '', ''),
(3, 'Edmilson Joaquim', 'edmilson.joaquim@centroavogados.com.br', NULL, '$2y$10$7AST2KkGb0sq0geLVZK46.UGvdbiQJku2UlpJ/RDgJIW39LfgSQxa', NULL, '2021-04-27 22:48:41', '2021-04-27 22:48:41', 0, 0, 0, '0', 0, '', '0', 0, 0, '', '', 0, '', '2021-04-27', 'F', 'FALSE', 0, 'FALSE', 0, 'FALSE', 0, 'FALSE', 0, '', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
