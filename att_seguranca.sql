-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Maio-2021 às 03:37
-- Versão do servidor: 10.4.11-MariaDB-log
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
-- Banco de dados: `att_seguranca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `segu_aplicacoes`
--

CREATE TABLE `segu_aplicacoes` (
  `apli_id` int(11) NOT NULL,
  `apli_ds` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `segu_aplicacoes`
--

INSERT INTO `segu_aplicacoes` (`apli_id`, `apli_ds`) VALUES
(10, 'cns_funcionarios'),
(11, 'cns_pessoas'),
(12, 'cns_produtos'),
(13, 'cns_sub_etapas'),
(14, 'cns_viagens'),
(15, 'cns_viag_processos'),
(4, 'control_change_password'),
(3, 'control_login'),
(5, 'control_synchronize'),
(16, 'ctr_pessoas'),
(17, 'ctr_produtos'),
(18, 'ctr_viagens'),
(8, 'form_segu_aplicacoes'),
(6, 'form_segu_grupos'),
(1, 'form_segu_usuarios'),
(19, 'frm_atividades'),
(20, 'frm_centro_custos'),
(21, 'frm_d_subgrupos'),
(22, 'frm_estados'),
(23, 'frm_marcas'),
(24, 'frm_medidas'),
(40, 'frm_m_caracteristicas'),
(25, 'frm_m_grupos'),
(26, 'frm_operadoras'),
(27, 'frm_precos'),
(28, 'frm_prog_trabalhos'),
(29, 'frm_tp_telefones'),
(30, 'frm_viag_classes'),
(31, 'frm_viag_etapas'),
(32, 'frm_viag_processos'),
(33, 'grd_emails'),
(34, 'grd_enderecos'),
(35, 'grd_produtos_precos'),
(36, 'grd_telefones'),
(37, 'grd_viag_etapas'),
(9, 'grid_segu_aplicacoes'),
(7, 'grid_segu_grupos'),
(2, 'grid_segu_usuarios'),
(38, 'mnu_principal'),
(39, 'rel_viagens');

-- --------------------------------------------------------

--
-- Estrutura da tabela `segu_grupos`
--

CREATE TABLE `segu_grupos` (
  `grup_id` int(11) NOT NULL,
  `grup_ds` varchar(40) NOT NULL,
  `grup_nivel` smallint(3) NOT NULL DEFAULT 3
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `segu_grupos`
--

INSERT INTO `segu_grupos` (`grup_id`, `grup_ds`, `grup_nivel`) VALUES
(1, 'FINANCEIRO', 3),
(2, 'GERENCIA', 3),
(3, 'ADMINISTRADOR', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `segu_grup_apli`
--

CREATE TABLE `segu_grup_apli` (
  `apli_id` int(11) NOT NULL DEFAULT 0,
  `grup_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `segu_grup_apli`
--

INSERT INTO `segu_grup_apli` (`apli_id`, `grup_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(11, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `segu_grup_usua`
--

CREATE TABLE `segu_grup_usua` (
  `usua_id` int(11) NOT NULL DEFAULT 0,
  `grup_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `segu_grup_usua`
--

INSERT INTO `segu_grup_usua` (`usua_id`, `grup_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `segu_usuarios`
--

CREATE TABLE `segu_usuarios` (
  `usua_id` int(11) NOT NULL,
  `usua_login` varchar(40) NOT NULL,
  `usua_senha` varchar(40) NOT NULL,
  `usua_nm` varchar(40) NOT NULL,
  `usua_email` varchar(100) DEFAULT NULL,
  `usua_nivel` smallint(3) DEFAULT 0,
  `usua_grup_id` int(11) DEFAULT 0,
  `usua_grup_ds` varchar(45) DEFAULT '0',
  `usua_grup_nivel` smallint(3) DEFAULT 0,
  `usua_status` smallint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `segu_usuarios`
--

INSERT INTO `segu_usuarios` (`usua_id`, `usua_login`, `usua_senha`, `usua_nm`, `usua_email`, `usua_nivel`, `usua_grup_id`, `usua_grup_ds`, `usua_grup_nivel`, `usua_status`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'Administrador', 'edjo90@gmail.com', 5, 2, 'Gerencia', 3, 0),
(2, 'ejoaquim', '81dc9bdb52d04dc20036dbd8313ed055', 'Edmilson Joaquim', 'edjo90@yahoo.com', 5, 3, 'Adminiistrador', 5, 0),
(3, 'admin.ca', '81dc9bdb52d04dc20036dbd8313ed055', 'Administrador AppCA', 'admin@ca.com.br', 0, 3, '0', 0, 0),
(4, 'user10', '81dc9bdb52d04dc20036dbd8313ed055', 'user10 Santri', 'user10@santri', 1, 1, 'Usuario Comun', 1, 0),
(5, 'user11', '321', 'user11 Santri', 'user11@santri', 1, 1, '1', 1, 0),
(6, 'user12', '456', 'user12 Santri', 'user12@santri', 1, 1, '1', 1, 0),
(7, 'maria', '81dc9bdb52d04dc20036dbd8313ed055', 'maria da santri', 'maria@santri.com.br', 1, 1, 'descricao', 1, 0),
(8, 'Joao', '81dc9bdb52d04dc20036dbd8313ed055', 'joao da Santri', 'joao@santri.com.br', 1, 1, 'desdcricao', 1, 0),
(9, 'jose', '81dc9bdb52d04dc20036dbd8313ed055', 'jose da santri', 'jose@santri.com.br', 1, 1, 'descricao', 1, 0),
(10, 'jose joao', '81dc9bdb52d04dc20036dbd8313ed055', 'josejoao da santri', 'josejoao@santri.com.br', 1, 1, 'descricao', 1, 0),
(11, 'jose joao jose ', '81dc9bdb52d04dc20036dbd8313ed055', 'josejoaojose da santri', 'josejoaojose @santri.com.br', 1, 1, 'descricao', 1, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `segu_aplicacoes`
--
ALTER TABLE `segu_aplicacoes`
  ADD PRIMARY KEY (`apli_id`),
  ADD UNIQUE KEY `apli_ds` (`apli_ds`);

--
-- Índices para tabela `segu_grupos`
--
ALTER TABLE `segu_grupos`
  ADD PRIMARY KEY (`grup_id`),
  ADD UNIQUE KEY `grup_ds` (`grup_ds`);

--
-- Índices para tabela `segu_grup_apli`
--
ALTER TABLE `segu_grup_apli`
  ADD PRIMARY KEY (`apli_id`,`grup_id`),
  ADD KEY `grup_id` (`grup_id`);

--
-- Índices para tabela `segu_grup_usua`
--
ALTER TABLE `segu_grup_usua`
  ADD PRIMARY KEY (`usua_id`,`grup_id`),
  ADD KEY `grup_id` (`grup_id`);

--
-- Índices para tabela `segu_usuarios`
--
ALTER TABLE `segu_usuarios`
  ADD PRIMARY KEY (`usua_id`),
  ADD UNIQUE KEY `usua_login` (`usua_login`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `segu_aplicacoes`
--
ALTER TABLE `segu_aplicacoes`
  MODIFY `apli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `segu_grupos`
--
ALTER TABLE `segu_grupos`
  MODIFY `grup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `segu_usuarios`
--
ALTER TABLE `segu_usuarios`
  MODIFY `usua_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
