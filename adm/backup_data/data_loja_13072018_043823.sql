
--
-- Criacao da Tabela : categoria
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) NOT NULL DEFAULT '',
  `dat_cadastro` date DEFAULT NULL,
  `hor_cadastro` time DEFAULT NULL,
  `responsavel` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ;

--
-- Dados a serem incluidos na tabela
--

INSERT INTO `categoria` (`id`, `descricao`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '1', 'Calça Feminina', '2018-07-11', '09:05:00', 'Rochett Tavares');
INSERT INTO `categoria` (`id`, `descricao`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '2', 'Regata Masculina', '2018-07-12', '12:11:03', 'Rochett Tavares');
INSERT INTO `categoria` (`id`, `descricao`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '3', 'Bermuda Masculina', '2018-07-03', '16:31:34', 'Rochett Tavares');
INSERT INTO `categoria` (`id`, `descricao`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '4', 'Meia Feminina', '2018-07-12', '12:53:08', 'Rochett Tavares');

--
-- Criacao da Tabela : config_sistema
--

CREATE TABLE `config_sistema` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_empresa` varchar(256) NOT NULL,
  `site` varchar(256) NOT NULL,
  `define_sistema` varchar(256) NOT NULL,
  `pasta_imagens_user` varchar(256) DEFAULT NULL,
  `pasta_imagens_slider` varchar(256) NOT NULL,
  `pasta_videos` varchar(256) DEFAULT NULL,
  `pasta_telas` varchar(256) DEFAULT NULL,
  `pasta_secoes` varchar(255) DEFAULT NULL,
  `pasta_ofertas` varchar(256) DEFAULT NULL,
  `pasta_banner` varchar(256) DEFAULT NULL,
  `pasta_imagens_produto` varchar(256) DEFAULT NULL,
  `pasta_backup` varchar(256) DEFAULT NULL,
  `dat_cadastro` date NOT NULL,
  `hor_cadastro` time NOT NULL,
  `responsavel` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ;

--
-- Dados a serem incluidos na tabela
--

INSERT INTO `config_sistema` (`id`, `nome_empresa`, `site`, `define_sistema`, `pasta_imagens_user`, `pasta_imagens_slider`, `pasta_videos`, `pasta_telas`, `pasta_secoes`, `pasta_ofertas`, `pasta_banner`, `pasta_imagens_produto`, `pasta_backup`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '1', 'LojaTeste', 'http://www.infrasis.com.br/loja_teste', 'LT', 'img/foto/', '../slider_site/Jssor.Slider.FullPack/img/1920/', '../video_produto/', '../image_marca/', '../image_secao/', '../banner/images/large/', '../image_banner/', '../image_produto/', 'backup_data/', '2018-07-12', '18:44:39', 'Rochett Tavares');

--
-- Criacao da Tabela : config_site
--

CREATE TABLE `config_site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero_loja` int(2) NOT NULL,
  `nome_empresa` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `telefone` varchar(16) NOT NULL DEFAULT '',
  `endereco` varchar(255) NOT NULL DEFAULT '',
  `cidade` varchar(255) NOT NULL DEFAULT '',
  `estado` varchar(255) NOT NULL DEFAULT '',
  `pais` varchar(255) NOT NULL DEFAULT '',
  `cep` varchar(10) NOT NULL DEFAULT '',
  `mapa` longtext NOT NULL,
  `video_entrada` varchar(255) NOT NULL DEFAULT '',
  `banner` varchar(255) NOT NULL DEFAULT '',
  `link_facebook` varchar(255) DEFAULT NULL,
  `link_twitter` varchar(255) DEFAULT NULL,
  `link_googleplus` varchar(255) DEFAULT NULL,
  `link_pinterest` varchar(255) DEFAULT NULL,
  `link_instagram` varchar(255) DEFAULT NULL,
  `link_youtube` varchar(255) DEFAULT NULL,
  `atendimento` longtext NOT NULL,
  `titulo_apresentacao` varchar(255) NOT NULL DEFAULT '',
  `apresentacao` longtext NOT NULL,
  `dat_cadastro` date DEFAULT NULL,
  `hor_cadastro` time DEFAULT NULL,
  `responsavel` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ;

--
-- Dados a serem incluidos na tabela
--

INSERT INTO `config_site` (`id`, `numero_loja`, `nome_empresa`, `email`, `telefone`, `endereco`, `cidade`, `estado`, `pais`, `cep`, `mapa`, `video_entrada`, `banner`, `link_facebook`, `link_twitter`, `link_googleplus`, `link_pinterest`, `link_instagram`, `link_youtube`, `atendimento`, `titulo_apresentacao`, `apresentacao`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '2', '1', 'Loja Teste', 'contato@infrasis.com.br', '+55 85 3025.3315', 'Av. Santos Dumont, 2088, Sala 301', 'Fortaleza', 'CE', 'Brasil', '60000-000', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.348270069569!2d-38.507567185773496!3d-3.7340568442455995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c748606fbf2ee7%3A0xf199376bdb233cf6!2sAv.+Santos+Dumont%2C+2088+-+301+-+Aldeota%2C+Fortaleza+-+CE%2C+60150-160!5e0!3m2!1spt-BR!2sbr!4v1530355396421\" width=\"800\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'https://www.youtube.com/embed/ZEJawQOlcrg', 'adv4--1170x143.png', 'https://www.facebook.com/bleezecommerce', 'https://twitter.com/bleezecommerce', '', '', 'https://www.instagram.com/bleezecommerce/', '', 'Segunda à sexta-feira das 10 às 20 horas e sábado das 10 às 12 horas (Horário de Brasília)', 'Quem Somos', 'Ousadia, modernidade, personalidade e elegância são palavras presentes na vida de homens e mulheres diariamente. A LojaTeste aposta nessas características para oferecer aos seus clientes uma grande variedade de coleções de renomadas marcas.', '2018-07-13', '01:02:21', 'Rochett Tavares');

--
-- Criacao da Tabela : contato
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `assunto` varchar(255) NOT NULL DEFAULT '',
  `telefone` varchar(15) DEFAULT NULL,
  `mensagem` longtext NOT NULL,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1 ;

--
-- Dados a serem incluidos na tabela
--

INSERT INTO `contato` (`id`, `nome`, `email`, `assunto`, `telefone`, `mensagem`, `data`, `hora`) VALUES ( '23', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'Contato via site', '(51) 8294-5939', 'teste ç á', '2018-07-11', '12:50:22');
INSERT INTO `contato` (`id`, `nome`, `email`, `assunto`, `telefone`, `mensagem`, `data`, `hora`) VALUES ( '58', 'Clark Kent', 'rochett.tavares@gmail.com', 'Dúvidas', '', 'hjgfjh hjf h fhfhg hf íóúçã', '2018-07-02', '10:23:02');
INSERT INTO `contato` (`id`, `nome`, `email`, `assunto`, `telefone`, `mensagem`, `data`, `hora`) VALUES ( '59', 'Bruce Wayne', 'rochett.tavares@gmail.com', 'Sugestões', '', 'çãíóú', '2018-07-02', '10:31:41');
INSERT INTO `contato` (`id`, `nome`, `email`, `assunto`, `telefone`, `mensagem`, `data`, `hora`) VALUES ( '61', 'Hal Jordan', '', 'Telefone', '(85) 99898-9898', '', '2018-07-02', '10:54:23');
INSERT INTO `contato` (`id`, `nome`, `email`, `assunto`, `telefone`, `mensagem`, `data`, `hora`) VALUES ( '63', 'Carl Segan', '', 'Telefone', '(85) 99898-9898', 'Contato Telefone', '2018-07-02', '11:03:06');
INSERT INTO `contato` (`id`, `nome`, `email`, `assunto`, `telefone`, `mensagem`, `data`, `hora`) VALUES ( '64', 'Carl Segandfsdf', '', 'Telefone', '(85) 99898-9898', 'Contato Telefone', '2018-07-02', '11:04:27');
INSERT INTO `contato` (`id`, `nome`, `email`, `assunto`, `telefone`, `mensagem`, `data`, `hora`) VALUES ( '65', 'Barry Allen', 'barry.allen@ccpd.com', 'Newsletter', '', 'Cadastro de Newsletter', '2018-07-02', '13:12:47');
INSERT INTO `contato` (`id`, `nome`, `email`, `assunto`, `telefone`, `mensagem`, `data`, `hora`) VALUES ( '66', 'Peter Parker', 'parker@dailybugle.com', 'Newsletter', '', 'Cadastro de Newsletter', '2018-07-02', '13:13:48');
INSERT INTO `contato` (`id`, `nome`, `email`, `assunto`, `telefone`, `mensagem`, `data`, `hora`) VALUES ( '67', 'Hal Jordan', '', 'Telefone', '(21) 4545-7878', 'Contato Telefone', '2018-07-02', '21:31:05');
INSERT INTO `contato` (`id`, `nome`, `email`, `assunto`, `telefone`, `mensagem`, `data`, `hora`) VALUES ( '68', 'Hal Jordan', '', 'Telefone', '(85) 98957-2543', 'Contato Telefone', '2018-07-02', '21:31:18');
INSERT INTO `contato` (`id`, `nome`, `email`, `assunto`, `telefone`, `mensagem`, `data`, `hora`) VALUES ( '69', 'Rochett Tavares', 'rochett.tavares@criart-ce.com.br', 'DÃºvidas', '', 'teste çáõ', '2018-07-09', '18:32:11');
INSERT INTO `contato` (`id`, `nome`, `email`, `assunto`, `telefone`, `mensagem`, `data`, `hora`) VALUES ( '70', 'Rochett Tavares', 'rochett.tavares@criart-ce.com.br', 'DÃƒÂºvidas', '', 'teste çáõ', '2018-07-09', '18:35:30');
INSERT INTO `contato` (`id`, `nome`, `email`, `assunto`, `telefone`, `mensagem`, `data`, `hora`) VALUES ( '71', 'Rochett Tavares', 'rochett.tavares@criart-ce.com.br', 'Sugestões', '', 'çãé', '2018-07-09', '18:36:04');
INSERT INTO `contato` (`id`, `nome`, `email`, `assunto`, `telefone`, `mensagem`, `data`, `hora`) VALUES ( '72', 'Rochett Tavares', 'rochett.tavares@gmail.com', '', '', 'çãíó', '2018-07-10', '14:12:36');

--
-- Criacao da Tabela : cor
--

CREATE TABLE `cor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) NOT NULL DEFAULT '',
  `dat_cadastro` date DEFAULT NULL,
  `hor_cadastro` time DEFAULT NULL,
  `responsavel` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ;

--
-- Dados a serem incluidos na tabela
--

INSERT INTO `cor` (`id`, `descricao`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '1', 'Vermelho', '2018-07-11', '09:05:00', 'Rochett Tavares');
INSERT INTO `cor` (`id`, `descricao`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '2', 'Azul', '2018-07-12', '12:11:03', 'Rochett Tavares');
INSERT INTO `cor` (`id`, `descricao`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '3', 'Amarelo', '2018-07-11', '18:25:27', 'Rochett Tavares');
INSERT INTO `cor` (`id`, `descricao`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '4', 'Branco', '2018-07-12', '19:37:04', 'Rochett Tavares');
INSERT INTO `cor` (`id`, `descricao`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '5', 'Verde-Limão', '2018-07-03', '16:47:02', 'Rochett Tavares');
INSERT INTO `cor` (`id`, `descricao`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '6', 'Purpura', '2018-07-12', '12:53:44', 'Rochett Tavares');

--
-- Criacao da Tabela : crono_eventos
--

CREATE TABLE `crono_eventos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `dat_comeco` date DEFAULT NULL,
  `dat_final` date DEFAULT NULL,
  `hor_inicial` time DEFAULT NULL,
  `hor_final` time DEFAULT NULL,
  `dia_inteiro` varchar(1) NOT NULL,
  `loja` int(3) DEFAULT NULL,
  `dat_cadastro` date DEFAULT NULL,
  `hor_cadastro` time DEFAULT NULL,
  `observacao` longtext,
  `status` int(3) DEFAULT NULL,
  `responsavel` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ;

--
-- Dados a serem incluidos na tabela
--

INSERT INTO `crono_eventos` (`id`, `titulo`, `dat_comeco`, `dat_final`, `hor_inicial`, `hor_final`, `dia_inteiro`, `loja`, `dat_cadastro`, `hor_cadastro`, `observacao`, `status`, `responsavel`) VALUES ( '1', 'Entrega Loja/Sistema ADM', '2018-06-30', '2018-07-13', '08:00:00', '08:00:00', 's', '1', '2017-11-23', '08:25:36', 'Teste', '2', 'Rochett Tavares');

--
-- Criacao da Tabela : disponibilidade
--

CREATE TABLE `disponibilidade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) NOT NULL DEFAULT '',
  `dat_cadastro` date DEFAULT NULL,
  `hor_cadastro` time DEFAULT NULL,
  `responsavel` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ;

--
-- Dados a serem incluidos na tabela
--

INSERT INTO `disponibilidade` (`id`, `descricao`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '1', 'No Estoque', '2018-07-11', '09:05:00', 'Rochett Tavares');
INSERT INTO `disponibilidade` (`id`, `descricao`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '2', 'Pre-Venda', '2018-07-12', '12:11:03', 'Rochett Tavares');

--
-- Criacao da Tabela : log_backup
--

CREATE TABLE `log_backup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `arquivo` varchar(256) DEFAULT NULL,
  `dat_cadastro` date DEFAULT NULL,
  `hor_cadastro` time DEFAULT NULL,
  `responsavel` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 ;

--
-- Dados a serem incluidos na tabela
--


--
-- Criacao da Tabela : log_usuarios_adm
--

CREATE TABLE `log_usuarios_adm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `acao` varchar(20) DEFAULT NULL,
  `dat_log` date DEFAULT NULL,
  `hor_log` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1 ;

--
-- Dados a serem incluidos na tabela
--

INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '15', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogIn', '2018-07-10', '14:10:54');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '16', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogOut', '2018-07-10', '14:51:08');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '17', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogIn', '2018-07-10', '14:51:13');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '18', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogOut', '2018-07-10', '14:58:15');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '19', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogIn', '2018-07-10', '14:58:19');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '20', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogOut', '2018-07-10', '14:59:50');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '21', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogIn', '2018-07-10', '14:59:55');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '22', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogOut', '2018-07-11', '07:25:56');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '23', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogIn', '2018-07-11', '07:26:01');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '24', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogIn', '2018-07-11', '15:52:41');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '25', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogOut', '2018-07-12', '06:32:50');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '26', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogIn', '2018-07-12', '06:32:57');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '27', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogOut', '2018-07-12', '07:12:28');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '28', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogIn', '2018-07-12', '07:12:33');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '29', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogOut', '2018-07-12', '07:14:08');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '30', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogIn', '2018-07-12', '07:14:14');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '31', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogOut', '2018-07-12', '07:14:47');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '32', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogIn', '2018-07-12', '07:14:54');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '33', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'Bloqueio', '2018-07-12', '07:37:05');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '34', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'Desbloqueio', '2018-07-12', '07:37:11');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '35', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogIn', '2018-07-12', '08:45:16');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '36', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogOut', '2018-07-12', '09:13:25');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '37', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogIn', '2018-07-12', '09:13:29');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '38', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogIn', '2018-07-12', '12:01:37');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '39', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogOut', '2018-07-12', '16:46:02');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '40', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogIn', '2018-07-12', '16:46:06');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '41', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogOut', '2018-07-12', '16:47:22');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '42', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogIn', '2018-07-12', '16:47:25');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '43', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogOut', '2018-07-12', '16:48:01');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '44', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogIn', '2018-07-12', '16:48:06');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '45', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogOut', '2018-07-12', '16:53:09');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '46', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogIn', '2018-07-12', '16:53:36');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '47', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogOut', '2018-07-12', '17:37:29');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '48', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogIn', '2018-07-12', '17:38:47');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '49', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogOut', '2018-07-12', '18:38:38');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '50', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogIn', '2018-07-12', '18:38:42');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '51', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogOut', '2018-07-12', '18:44:40');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '52', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogIn', '2018-07-12', '18:44:45');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '53', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogIn', '2018-07-13', '01:28:22');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '54', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogOut', '2018-07-13', '01:34:40');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '55', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogIn', '2018-07-13', '01:34:50');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '56', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogOut', '2018-07-13', '01:47:29');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '57', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogIn', '2018-07-13', '01:47:38');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '58', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogOut', '2018-07-13', '02:18:53');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '59', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogIn', '2018-07-13', '02:18:58');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '60', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogOut', '2018-07-13', '02:21:13');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '61', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogIn', '2018-07-13', '02:21:17');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '62', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'Bloqueio', '2018-07-13', '02:21:20');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '63', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'Desbloqueio', '2018-07-13', '02:21:25');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '64', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogIn', '2018-07-13', '03:18:30');
INSERT INTO `log_usuarios_adm` (`id`, `usuario`, `login`, `acao`, `dat_log`, `hor_log`) VALUES ( '65', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'LogIn', '2018-07-13', '03:58:47');

--
-- Criacao da Tabela : lojas
--

CREATE TABLE `lojas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) NOT NULL DEFAULT '',
  `texto` longtext NOT NULL,
  `video_loja` varchar(255) NOT NULL DEFAULT '',
  `dat_cadastro` date DEFAULT NULL,
  `hor_cadastro` time DEFAULT NULL,
  `responsavel` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ;

--
-- Dados a serem incluidos na tabela
--

INSERT INTO `lojas` (`id`, `descricao`, `texto`, `video_loja`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '1', 'Loja Teste Fortaleza-CE', 'Dorem ipsum dolor sit amet consectetur adipiscing elit congue sit amet erat roin tincidunt vehicula lorem in adipiscing urna iaculis vel.', 'http://www.youtube.com/embed/NBuLeA7nNFk', '2018-07-11', '09:05:00', 'Rochett Tavares');

--
-- Criacao da Tabela : marcas
--

CREATE TABLE `marcas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL DEFAULT '',
  `link_site` varchar(255) NOT NULL DEFAULT '',
  `imagem` varchar(255) NOT NULL DEFAULT '',
  `dat_cadastro` date DEFAULT NULL,
  `hor_cadastro` time DEFAULT NULL,
  `responsavel` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 ;

--
-- Dados a serem incluidos na tabela
--

INSERT INTO `marcas` (`id`, `nome`, `link_site`, `imagem`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '1', 'Diesel', 'http://www.diesel.com.br', '11-80x80.png', '2018-07-11', '14:48:03', 'Rochett Tavares');
INSERT INTO `marcas` (`id`, `nome`, `link_site`, `imagem`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '2', 'Adidas', 'http://www.adidas.com.br', '13-80x80.png', '2018-07-12', '15:52:01', 'Rochett Tavares');
INSERT INTO `marcas` (`id`, `nome`, `link_site`, `imagem`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '3', 'Dior', 'http://www.dior.com', '15-80x80.png', '2018-07-11', '18:25:27', 'Rochett Tavares');
INSERT INTO `marcas` (`id`, `nome`, `link_site`, `imagem`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '4', 'Lacoste', 'http://www.lacoste.com.br', '16-80x80.png', '2018-07-12', '19:37:04', 'Rochett Tavares');
INSERT INTO `marcas` (`id`, `nome`, `link_site`, `imagem`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '5', 'Lewis', 'http://www.lewis.com', '17-80x80.png', '2018-07-10', '19:46:21', 'Rochett Tavares');
INSERT INTO `marcas` (`id`, `nome`, `link_site`, `imagem`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '6', 'Nike', 'http://www.nike.com.br', '18-80x80.png', '2018-07-12', '19:49:46', 'Rochett Tavares');

--
-- Criacao da Tabela : ofertas_site
--

CREATE TABLE `ofertas_site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL DEFAULT '',
  `texto` longtext NOT NULL,
  `imagem` varchar(255) NOT NULL DEFAULT '',
  `posicao` varchar(255) NOT NULL DEFAULT '',
  `exibir` char(1) DEFAULT '1',
  `dat_cadastro` date DEFAULT NULL,
  `hor_cadastro` time DEFAULT NULL,
  `responsavel` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ;

--
-- Dados a serem incluidos na tabela
--

INSERT INTO `ofertas_site` (`id`, `titulo`, `texto`, `imagem`, `posicao`, `exibir`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '1', 'Primeira Oferta', 'Comentário referente à oferta', '3.jpg', 'banner1', '1', '2018-07-11', '09:05:00', 'Rochett Tavares');
INSERT INTO `ofertas_site` (`id`, `titulo`, `texto`, `imagem`, `posicao`, `exibir`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '2', 'Segunda Oferta', 'Comentário referente à oferta.', '2.jpg', 'banner2', '1', '2018-07-12', '12:11:03', 'Rochett Tavares');
INSERT INTO `ofertas_site` (`id`, `titulo`, `texto`, `imagem`, `posicao`, `exibir`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '3', 'Terceira Oferta', 'Comentário referente à oferta.', '3.jpg', 'banner3', '1', '2018-07-10', '18:25:27', 'Rochett Tavares');

--
-- Criacao da Tabela : pedidos
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `cod_produto` int(3) NOT NULL,
  `descricao` varchar(256) NOT NULL,
  `cor` varchar(30) NOT NULL,
  `tamanho` varchar(30) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `quantidade` int(4) NOT NULL,
  `tipo_entrega` varchar(256) NOT NULL,
  `prazo_entrega` varchar(256) NOT NULL,
  `valor_frete` decimal(10,2) NOT NULL,
  `valor_produto` decimal(10,2) NOT NULL,
  `dat_cadastro` date NOT NULL,
  `hor_cadastro` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1 ;

--
-- Dados a serem incluidos na tabela
--

INSERT INTO `pedidos` (`id`, `nome`, `email`, `cod_produto`, `descricao`, `cor`, `tamanho`, `cep`, `quantidade`, `tipo_entrega`, `prazo_entrega`, `valor_frete`, `valor_produto`, `dat_cadastro`, `hor_cadastro`) VALUES ( '2', 'Hal Jordan', 'rochett.tavares@gmail.com', '2', 'Meia Feminina Plus-Size Vermelha', 'Verde-Limão', 'P', '60130450', '2', 'PAC', '11 Dias', '29.40', '100.00', '2018-07-12', '14:48:03');
INSERT INTO `pedidos` (`id`, `nome`, `email`, `cod_produto`, `descricao`, `cor`, `tamanho`, `cep`, `quantidade`, `tipo_entrega`, `prazo_entrega`, `valor_frete`, `valor_produto`, `dat_cadastro`, `hor_cadastro`) VALUES ( '3', 'Hal Jordan', 'rochett.tavares@gmail.com', '10', 'hgjhgj', 'Branco', 'XGG', '60130450', '2', 'PAC', '11 Dias', '29.40', '8.00', '2018-07-12', '15:52:01');
INSERT INTO `pedidos` (`id`, `nome`, `email`, `cod_produto`, `descricao`, `cor`, `tamanho`, `cep`, `quantidade`, `tipo_entrega`, `prazo_entrega`, `valor_frete`, `valor_produto`, `dat_cadastro`, `hor_cadastro`) VALUES ( '5', 'Clark Kent', 'rochett.tavares@gmail.com', '10', 'ggggg', 'Verde-Limão', 'M', '60130450', '5', 'PAC', '11 Dias', '38.60', '20.00', '2018-07-12', '18:25:27');
INSERT INTO `pedidos` (`id`, `nome`, `email`, `cod_produto`, `descricao`, `cor`, `tamanho`, `cep`, `quantidade`, `tipo_entrega`, `prazo_entrega`, `valor_frete`, `valor_produto`, `dat_cadastro`, `hor_cadastro`) VALUES ( '6', 'tesyye', 'rochett.tavares@gmail.com', '10', 'ggggg', 'Amarelo', 'G', '60130450', '1', 'PAC', '11 Dias', '29.40', '4.00', '2018-07-12', '19:37:04');
INSERT INTO `pedidos` (`id`, `nome`, `email`, `cod_produto`, `descricao`, `cor`, `tamanho`, `cep`, `quantidade`, `tipo_entrega`, `prazo_entrega`, `valor_frete`, `valor_produto`, `dat_cadastro`, `hor_cadastro`) VALUES ( '7', 'Clark Kent', 'rochett.tavares@gmail.com', '10', 'ggggg', 'Branco', 'P', '60130450', '2', 'SEDEX', '4 Dias', '66.00', '8.00', '2018-07-12', '19:46:21');
INSERT INTO `pedidos` (`id`, `nome`, `email`, `cod_produto`, `descricao`, `cor`, `tamanho`, `cep`, `quantidade`, `tipo_entrega`, `prazo_entrega`, `valor_frete`, `valor_produto`, `dat_cadastro`, `hor_cadastro`) VALUES ( '9', 'Hal Jordan', 'rochett.tavares@gmail.com', '3', 'Bermuda Feminina Plus-Size Vermelha', 'Azul', 'M', '60130540', '2', 'PAC', '11 Dias', '29.40', '100.00', '2018-07-12', '10:41:57');
INSERT INTO `pedidos` (`id`, `nome`, `email`, `cod_produto`, `descricao`, `cor`, `tamanho`, `cep`, `quantidade`, `tipo_entrega`, `prazo_entrega`, `valor_frete`, `valor_produto`, `dat_cadastro`, `hor_cadastro`) VALUES ( '10', 'Clark Kent', 'rochett.tavares@gmail.com', '3', 'Bermuda Feminina Plus-Size Vermelha', 'Verde-Limão', 'XGG', '60130450', '3', 'SEDEX', '4 Dias', '66.00', '150.00', '2018-07-12', '10:49:00');
INSERT INTO `pedidos` (`id`, `nome`, `email`, `cod_produto`, `descricao`, `cor`, `tamanho`, `cep`, `quantidade`, `tipo_entrega`, `prazo_entrega`, `valor_frete`, `valor_produto`, `dat_cadastro`, `hor_cadastro`) VALUES ( '11', 'Barry Allen', 'rochett.tavares@gmail.com', '3', 'Bermuda Feminina Plus-Size Vermelha', 'Azul', 'M', '60130450', '4', 'PAC', '11 Dias', '32.30', '200.00', '2018-07-12', '10:49:59');
INSERT INTO `pedidos` (`id`, `nome`, `email`, `cod_produto`, `descricao`, `cor`, `tamanho`, `cep`, `quantidade`, `tipo_entrega`, `prazo_entrega`, `valor_frete`, `valor_produto`, `dat_cadastro`, `hor_cadastro`) VALUES ( '12', 'Peter Parker', 'rochett.tavares@gmail.com', '2', 'Meia Feminina Plus-Size Vermelha', 'Vermelho', 'M', '60130450', '2', 'PAC', '11 Dias', '29.40', '100.00', '2018-07-12', '11:43:09');
INSERT INTO `pedidos` (`id`, `nome`, `email`, `cod_produto`, `descricao`, `cor`, `tamanho`, `cep`, `quantidade`, `tipo_entrega`, `prazo_entrega`, `valor_frete`, `valor_produto`, `dat_cadastro`, `hor_cadastro`) VALUES ( '13', 'Diana Prince', 'rochett.tavares@gmail.com', '10', 'ggggg', 'Azul', 'XGG', '60130450', '2', 'SEDEX', '4 Dias', '66.00', '8.00', '2018-07-12', '11:46:22');
INSERT INTO `pedidos` (`id`, `nome`, `email`, `cod_produto`, `descricao`, `cor`, `tamanho`, `cep`, `quantidade`, `tipo_entrega`, `prazo_entrega`, `valor_frete`, `valor_produto`, `dat_cadastro`, `hor_cadastro`) VALUES ( '14', 'Peter Parker', 'rochett.tavares@gmail.com', '10', 'Luvas de Teste', 'Purpura', 'XXGG', '60130450', '10', 'PAC', '11 Dias', '38.60', '49.90', '2018-07-12', '17:35:20');
INSERT INTO `pedidos` (`id`, `nome`, `email`, `cod_produto`, `descricao`, `cor`, `tamanho`, `cep`, `quantidade`, `tipo_entrega`, `prazo_entrega`, `valor_frete`, `valor_produto`, `dat_cadastro`, `hor_cadastro`) VALUES ( '15', 'Peter Parker', 'rochett.tavares@gmail.com', '10', 'Luvas de Teste', 'Purpura', 'XXGG', '60130450', '2', 'PAC', '11 Dias', '29.40', '9.98', '2018-07-13', '01:12:11');
INSERT INTO `pedidos` (`id`, `nome`, `email`, `cod_produto`, `descricao`, `cor`, `tamanho`, `cep`, `quantidade`, `tipo_entrega`, `prazo_entrega`, `valor_frete`, `valor_produto`, `dat_cadastro`, `hor_cadastro`) VALUES ( '16', 'Diana Prince', 'rochett.tavares@gmail.com', '3', 'Bermuda Feminina Plus-Size Vermelha', 'Amarelo', 'G', '60130450', '1', 'SEDEX', '4 Dias', '60.90', '50.00', '2018-07-13', '01:13:05');
INSERT INTO `pedidos` (`id`, `nome`, `email`, `cod_produto`, `descricao`, `cor`, `tamanho`, `cep`, `quantidade`, `tipo_entrega`, `prazo_entrega`, `valor_frete`, `valor_produto`, `dat_cadastro`, `hor_cadastro`) VALUES ( '17', 'Jimmy Olsen', 'rochett.tavares@gmail.com', '3', 'Bermuda Feminina Plus-Size Vermelha', 'Amarelo', 'G', '60130450', '2', 'SEDEX', '4 Dias', '66.00', '100.00', '2018-07-13', '01:50:08');
INSERT INTO `pedidos` (`id`, `nome`, `email`, `cod_produto`, `descricao`, `cor`, `tamanho`, `cep`, `quantidade`, `tipo_entrega`, `prazo_entrega`, `valor_frete`, `valor_produto`, `dat_cadastro`, `hor_cadastro`) VALUES ( '18', 'Clark Kent', 'rochett.tavares@gmail.com', '10', 'Luvas de Teste', 'Verde-Limão', 'XGG', '60130450', '11', 'SEDEX', '4 Dias', '101.70', '54.89', '2018-07-13', '03:59:57');
INSERT INTO `pedidos` (`id`, `nome`, `email`, `cod_produto`, `descricao`, `cor`, `tamanho`, `cep`, `quantidade`, `tipo_entrega`, `prazo_entrega`, `valor_frete`, `valor_produto`, `dat_cadastro`, `hor_cadastro`) VALUES ( '19', 'Hal Jordan', 'rochett.tavares@gmail.com', '10', 'Luvas de Teste', 'Azul', 'XXGG', '60130450', '11', 'SEDEX', '4 Dias', '101.70', '54.89', '2018-07-13', '04:22:38');
INSERT INTO `pedidos` (`id`, `nome`, `email`, `cod_produto`, `descricao`, `cor`, `tamanho`, `cep`, `quantidade`, `tipo_entrega`, `prazo_entrega`, `valor_frete`, `valor_produto`, `dat_cadastro`, `hor_cadastro`) VALUES ( '20', 'Clark Kent', 'rochett.tavares@gmail.com', '10', 'Luvas de Teste', 'Verde-Limão', 'XGG', '60130450', '6', 'SEDEX', '4 Dias', '79.60', '29.94', '2018-07-13', '04:24:34');
INSERT INTO `pedidos` (`id`, `nome`, `email`, `cod_produto`, `descricao`, `cor`, `tamanho`, `cep`, `quantidade`, `tipo_entrega`, `prazo_entrega`, `valor_frete`, `valor_produto`, `dat_cadastro`, `hor_cadastro`) VALUES ( '21', 'Clark Kent', 'rochett.tavares@gmail.com', '10', 'Luvas de Teste', 'Verde-Limão', 'XGG', '60130450', '6', 'SEDEX', '4 Dias', '79.60', '29.94', '2018-07-13', '04:27:05');
INSERT INTO `pedidos` (`id`, `nome`, `email`, `cod_produto`, `descricao`, `cor`, `tamanho`, `cep`, `quantidade`, `tipo_entrega`, `prazo_entrega`, `valor_frete`, `valor_produto`, `dat_cadastro`, `hor_cadastro`) VALUES ( '22', 'Peter Parker', 'rochett.tavares@gmail.com', '10', 'Luvas de Teste', 'Amarelo', 'G', '60130450', '3', 'SEDEX', '4 Dias', '66.00', '14.97', '2018-07-13', '04:28:28');
INSERT INTO `pedidos` (`id`, `nome`, `email`, `cod_produto`, `descricao`, `cor`, `tamanho`, `cep`, `quantidade`, `tipo_entrega`, `prazo_entrega`, `valor_frete`, `valor_produto`, `dat_cadastro`, `hor_cadastro`) VALUES ( '23', 'Barry Allen', 'rochett.tavares@gmail.com', '10', 'Luvas de Teste', 'Amarelo', 'G', '60130450', '5', 'PAC', '11 Dias', '32.30', '24.95', '2018-07-13', '04:30:02');
INSERT INTO `pedidos` (`id`, `nome`, `email`, `cod_produto`, `descricao`, `cor`, `tamanho`, `cep`, `quantidade`, `tipo_entrega`, `prazo_entrega`, `valor_frete`, `valor_produto`, `dat_cadastro`, `hor_cadastro`) VALUES ( '24', 'Diana Prince', 'rochett.tavares@gmail.com', '10', 'Luvas de Teste', 'Verde-Limão', 'M', '60130450', '3', 'SEDEX', '4 Dias', '66.00', '14.97', '2018-07-13', '04:34:08');

--
-- Criacao da Tabela : produtos
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL DEFAULT '',
  `descricao` longtext NOT NULL,
  `marca` int(11) NOT NULL DEFAULT '0',
  `detalhes` longtext NOT NULL,
  `peso` int(5) NOT NULL DEFAULT '0',
  `largura` int(4) NOT NULL DEFAULT '0',
  `altura` int(4) NOT NULL DEFAULT '0',
  `comprimento` int(4) NOT NULL DEFAULT '0',
  `loja` int(11) NOT NULL DEFAULT '0',
  `quantidade` int(4) NOT NULL DEFAULT '0',
  `link_video` varchar(255) DEFAULT NULL,
  `link_video_capa` varchar(255) DEFAULT NULL,
  `video_produto` char(1) NOT NULL DEFAULT '',
  `disponibilidade` int(11) NOT NULL DEFAULT '0',
  `preco_venda` decimal(10,2) NOT NULL DEFAULT '0.00',
  `preco_promocional` decimal(10,2) NOT NULL DEFAULT '0.00',
  `exibir_preco_venda` char(1) DEFAULT NULL,
  `exibir_preco_promocional` char(1) DEFAULT NULL,
  `dat_comeco_promocao` date DEFAULT NULL,
  `dat_fim_promocao` date DEFAULT NULL,
  `categoria` int(11) NOT NULL DEFAULT '0',
  `imagem_destaque` varchar(255) NOT NULL DEFAULT '',
  `imagem_sobre_destaque` varchar(255) DEFAULT NULL,
  `imagem_oferta` varchar(255) DEFAULT NULL,
  `imagem_normal` varchar(255) DEFAULT NULL,
  `imagem_ampliar` varchar(255) DEFAULT NULL,
  `imagem_extra` varchar(255) DEFAULT NULL,
  `exibir_produto` char(1) DEFAULT '0',
  `oferta` char(1) DEFAULT '0',
  `destaque` char(1) NOT NULL DEFAULT '0',
  `novidade` char(1) DEFAULT '0',
  `capa_site` char(1) DEFAULT NULL,
  `dat_cadastro` date DEFAULT NULL,
  `hor_cadastro` time DEFAULT NULL,
  `responsavel` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 ;

--
-- Dados a serem incluidos na tabela
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `marca`, `detalhes`, `peso`, `largura`, `altura`, `comprimento`, `loja`, `quantidade`, `link_video`, `link_video_capa`, `video_produto`, `disponibilidade`, `preco_venda`, `preco_promocional`, `exibir_preco_venda`, `exibir_preco_promocional`, `dat_comeco_promocao`, `dat_fim_promocao`, `categoria`, `imagem_destaque`, `imagem_sobre_destaque`, `imagem_oferta`, `imagem_normal`, `imagem_ampliar`, `imagem_extra`, `exibir_produto`, `oferta`, `destaque`, `novidade`, `capa_site`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '1', 'Calça Feminina Super-Size Vermelha!!!', 'Intel Core 2 Duo processor

Powered by an Intel Core 2 Duo processor at speeds up to 2.16GHz, the new MacBook is the fastest ever.

1GB memory, larger hard drives

The new MacBook now comes with 1GB of memory standard and larger hard drives for the entire line perfect for running more of your favorite applications and storing growing media collections.

Sleek, 1.08-inch-thin design

MacBook makes it easy to hit the road thanks to its tough polycarbonate case, built-in wireless technologies, and innovative MagSafe Power Adapter that releases automatically if someone accidentally trips on the cord.

Built-in iSight camera

Right out of the box, you can have a video chat with friends or family,2 record a video at your desk, or take fun pictures with Photo Booth', '1', 'Intel Core 2 Duo processor

Powered by an Intel Core 2 Duo processor at speeds up to 2.16GHz, the new MacBook is the fastest ever.

1GB memory, larger hard drives', '450', '22', '15', '32', '1', '50', 'http://www.youtube.com/embed/30T_ujbBkuw', 'vid1.mp4', '1', '1', '50.00', '5.99', '1', '1', '2018-07-06', '2018-07-09', '1', 'produto01_270x350.jpg', 'produto01_02_270x350.jpg', 'produto01_oferta_80x80.jpg', 'produto01_370x480.jpg', 'produto01_570x740.jpg', 'produto07_570x740.jpg', '1', '1', '1', '0', '1', '2018-07-11', '09:35:00', 'Rochett Tavares');
INSERT INTO `produtos` (`id`, `nome`, `descricao`, `marca`, `detalhes`, `peso`, `largura`, `altura`, `comprimento`, `loja`, `quantidade`, `link_video`, `link_video_capa`, `video_produto`, `disponibilidade`, `preco_venda`, `preco_promocional`, `exibir_preco_venda`, `exibir_preco_promocional`, `dat_comeco_promocao`, `dat_fim_promocao`, `categoria`, `imagem_destaque`, `imagem_sobre_destaque`, `imagem_oferta`, `imagem_normal`, `imagem_ampliar`, `imagem_extra`, `exibir_produto`, `oferta`, `destaque`, `novidade`, `capa_site`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '2', 'Meia Feminina Plus-Size Vermelha', 'Intel Core 2 Duo processor

Powered by an Intel Core 2 Duo processor at speeds up to 2.16GHz, the new MacBook is the fastest ever.

1GB memory, larger hard drives

The new MacBook now comes with 1GB of memory standard and larger hard drives for the entire line perfect for running more of your favorite applications and storing growing media collections.

Sleek, 1.08-inch-thin design

MacBook makes it easy to hit the road thanks to its tough polycarbonate case, built-in wireless technologies, and innovative MagSafe Power Adapter that releases automatically if someone accidentally trips on the cord.

Built-in iSight camera

Right out of the box, you can have a video chat with friends or family,2 record a video at your desk, or take fun pictures with Photo Booth', '1', 'Intel Core 2 Duo processor

Powered by an Intel Core 2 Duo processor at speeds up to 2.16GHz, the new MacBook is the fastest ever.

1GB memory, larger hard drives', '300', '22', '15', '32', '1', '45', '', 'vid2.mp4', '0', '1', '50.00', '8.50', '1', '1', '2018-07-06', '2018-07-09', '2', 'produto02_270x350.jpg', '', '', 'produto02_370x480.jpg', 'produto02_570x740.jpg', 'produto07_570x740.jpg', '1', '0', '1', '1', '1', '2018-07-11', '08:25:36', 'Rochett Tavares');
INSERT INTO `produtos` (`id`, `nome`, `descricao`, `marca`, `detalhes`, `peso`, `largura`, `altura`, `comprimento`, `loja`, `quantidade`, `link_video`, `link_video_capa`, `video_produto`, `disponibilidade`, `preco_venda`, `preco_promocional`, `exibir_preco_venda`, `exibir_preco_promocional`, `dat_comeco_promocao`, `dat_fim_promocao`, `categoria`, `imagem_destaque`, `imagem_sobre_destaque`, `imagem_oferta`, `imagem_normal`, `imagem_ampliar`, `imagem_extra`, `exibir_produto`, `oferta`, `destaque`, `novidade`, `capa_site`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '3', 'Bermuda Feminina Plus-Size Vermelha', 'Intel Core 2 Duo processor

Powered by an Intel Core 2 Duo processor at speeds up to 2.16GHz, the new MacBook is the fastest ever.

1GB memory, larger hard drives

The new MacBook now comes with 1GB of memory standard and larger hard drives for the entire line perfect for running more of your favorite applications and storing growing media collections.

Sleek, 1.08-inch-thin design

MacBook makes it easy to hit the road thanks to its tough polycarbonate case, built-in wireless technologies, and innovative MagSafe Power Adapter that releases automatically if someone accidentally trips on the cord.

Built-in iSight camera

Right out of the box, you can have a video chat with friends or family,2 record a video at your desk, or take fun pictures with Photo Booth', '1', 'Intel Core 2 Duo processor

Powered by an Intel Core 2 Duo processor at speeds up to 2.16GHz, the new MacBook is the fastest ever.

1GB memory, larger hard drives', '300', '22', '15', '32', '1', '50', 'http://www.youtube.com/embed/30T_ujbBkuw', 'vid3.mp4', '1', '1', '50.00', '5.00', '1', '0', '0000-00-00', '0000-00-00', '2', 'produto03_270x350.jpg', '', '', 'produto03_370x480.jpg', 'produto03_570x740.jpg', 'produto07_570x740.jpg', '1', '0', '1', '0', '1', '2018-07-12', '12:11:03', 'Rochett Tavares');
INSERT INTO `produtos` (`id`, `nome`, `descricao`, `marca`, `detalhes`, `peso`, `largura`, `altura`, `comprimento`, `loja`, `quantidade`, `link_video`, `link_video_capa`, `video_produto`, `disponibilidade`, `preco_venda`, `preco_promocional`, `exibir_preco_venda`, `exibir_preco_promocional`, `dat_comeco_promocao`, `dat_fim_promocao`, `categoria`, `imagem_destaque`, `imagem_sobre_destaque`, `imagem_oferta`, `imagem_normal`, `imagem_ampliar`, `imagem_extra`, `exibir_produto`, `oferta`, `destaque`, `novidade`, `capa_site`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '4', 'Saia Feminina Plus-Size Vermelha', 'Intel Core 2 Duo processor

Powered by an Intel Core 2 Duo processor at speeds up to 2.16GHz, the new MacBook is the fastest ever.

1GB memory, larger hard drives

The new MacBook now comes with 1GB of memory standard and larger hard drives for the entire line perfect for running more of your favorite applications and storing growing media collections.

Sleek, 1.08-inch-thin design

MacBook makes it easy to hit the road thanks to its tough polycarbonate case, built-in wireless technologies, and innovative MagSafe Power Adapter that releases automatically if someone accidentally trips on the cord.

Built-in iSight camera

Right out of the box, you can have a video chat with friends or family,2 record a video at your desk, or take fun pictures with Photo Booth', '1', 'Intel Core 2 Duo processor

Powered by an Intel Core 2 Duo processor at speeds up to 2.16GHz, the new MacBook is the fastest ever.

1GB memory, larger hard drives', '300', '22', '15', '32', '2', '30', 'http://www.youtube.com/embed/30T_ujbBkuw', 'vid4.mp4', '', '1', '50.00', '5.00', '1', '0', '', '', '1', 'produto04_270x350.png', '', '', 'produto04_370x480.png', 'produto04_570x740.png', 'produto07_570x740.jpg', '1', '0', '1', '1', '1', '2018-07-10', '08:25:36', 'Rochett Tavares');
INSERT INTO `produtos` (`id`, `nome`, `descricao`, `marca`, `detalhes`, `peso`, `largura`, `altura`, `comprimento`, `loja`, `quantidade`, `link_video`, `link_video_capa`, `video_produto`, `disponibilidade`, `preco_venda`, `preco_promocional`, `exibir_preco_venda`, `exibir_preco_promocional`, `dat_comeco_promocao`, `dat_fim_promocao`, `categoria`, `imagem_destaque`, `imagem_sobre_destaque`, `imagem_oferta`, `imagem_normal`, `imagem_ampliar`, `imagem_extra`, `exibir_produto`, `oferta`, `destaque`, `novidade`, `capa_site`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '5', 'Calça Feminina Plus-Size Vermelha', 'Intel Core 2 Duo processor

Powered by an Intel Core 2 Duo processor at speeds up to 2.16GHz, the new MacBook is the fastest ever.

1GB memory, larger hard drives

The new MacBook now comes with 1GB of memory standard and larger hard drives for the entire line perfect for running more of your favorite applications and storing growing media collections.

Sleek, 1.08-inch-thin design

MacBook makes it easy to hit the road thanks to its tough polycarbonate case, built-in wireless technologies, and innovative MagSafe Power Adapter that releases automatically if someone accidentally trips on the cord.

Built-in iSight camera

Right out of the box, you can have a video chat with friends or family,2 record a video at your desk, or take fun pictures with Photo Booth', '1', 'Intel Core 2 Duo processor

Powered by an Intel Core 2 Duo processor at speeds up to 2.16GHz, the new MacBook is the fastest ever.

1GB memory, larger hard drives

The new MacBook now comes with 1GB of memory standard and larger hard drives for the entire line perfect for running more of your favorite applications and storing growing media collections.

Sleek, 1.08-inch-thin design

MacBook makes it easy to hit the road thanks to its tough polycarbonate case, built-in wireless technologies, and innovative MagSafe Power Adapter that releases automatically if someone accidentally trips on the cord.

Built-in iSight camera

Right out of the box, you can have a video chat with friends or family,2 record a video at your desk, or take fun pictures with Photo Booth', '300', '22', '15', '32', '1', '76', 'http://www.youtube.com/embed/30T_ujbBkuw', '', '1', '1', '50.00', '5.00', '1', '0', '0000-00-00', '0000-00-00', '1', 'produto05_270x350.jpg', '', '', 'produto05_370x480.jpg', 'produto05_570x740.jpg', 'produto07_570x740.jpg', '1', '0', '1', '0', '0', '2018-07-12', '12:12:04', 'Rochett Tavares');
INSERT INTO `produtos` (`id`, `nome`, `descricao`, `marca`, `detalhes`, `peso`, `largura`, `altura`, `comprimento`, `loja`, `quantidade`, `link_video`, `link_video_capa`, `video_produto`, `disponibilidade`, `preco_venda`, `preco_promocional`, `exibir_preco_venda`, `exibir_preco_promocional`, `dat_comeco_promocao`, `dat_fim_promocao`, `categoria`, `imagem_destaque`, `imagem_sobre_destaque`, `imagem_oferta`, `imagem_normal`, `imagem_ampliar`, `imagem_extra`, `exibir_produto`, `oferta`, `destaque`, `novidade`, `capa_site`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '6', 'Calça Feminina Plus-Size Vermelha', 'Intel Core 2 Duo processor

Powered by an Intel Core 2 Duo processor at speeds up to 2.16GHz, the new MacBook is the fastest ever.

1GB memory, larger hard drives

The new MacBook now comes with 1GB of memory standard and larger hard drives for the entire line perfect for running more of your favorite applications and storing growing media collections.

Sleek, 1.08-inch-thin design

MacBook makes it easy to hit the road thanks to its tough polycarbonate case, built-in wireless technologies, and innovative MagSafe Power Adapter that releases automatically if someone accidentally trips on the cord.

Built-in iSight camera

Right out of the box, you can have a video chat with friends or family,2 record a video at your desk, or take fun pictures with Photo Booth', '1', 'Intel Core 2 Duo processor

Powered by an Intel Core 2 Duo processor at speeds up to 2.16GHz, the new MacBook is the fastest ever.

1GB memory, larger hard drives', '300', '22', '15', '32', '1', '15', 'http://www.youtube.com/embed/30T_ujbBkuw', '', '', '1', '50.00', '5.00', '1', '0', '', '', '1', 'produto06_270x350.png', '', '', 'produto06_370x480.png', 'produto06_570x740.png', 'produto07_570x740.jpg', '1', '0', '1', '1', '0', '2018-07-10', '15:52:01', 'Rochett Tavares');
INSERT INTO `produtos` (`id`, `nome`, `descricao`, `marca`, `detalhes`, `peso`, `largura`, `altura`, `comprimento`, `loja`, `quantidade`, `link_video`, `link_video_capa`, `video_produto`, `disponibilidade`, `preco_venda`, `preco_promocional`, `exibir_preco_venda`, `exibir_preco_promocional`, `dat_comeco_promocao`, `dat_fim_promocao`, `categoria`, `imagem_destaque`, `imagem_sobre_destaque`, `imagem_oferta`, `imagem_normal`, `imagem_ampliar`, `imagem_extra`, `exibir_produto`, `oferta`, `destaque`, `novidade`, `capa_site`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '7', 'Calça Feminina Plus-Size Vermelha', 'Intel Core 2 Duo processor

Powered by an Intel Core 2 Duo processor at speeds up to 2.16GHz, the new MacBook is the fastest ever.

1GB memory, larger hard drives

The new MacBook now comes with 1GB of memory standard and larger hard drives for the entire line perfect for running more of your favorite applications and storing growing media collections.

Sleek, 1.08-inch-thin design

MacBook makes it easy to hit the road thanks to its tough polycarbonate case, built-in wireless technologies, and innovative MagSafe Power Adapter that releases automatically if someone accidentally trips on the cord.

Built-in iSight camera

Right out of the box, you can have a video chat with friends or family,2 record a video at your desk, or take fun pictures with Photo Booth', '1', 'Intel Core 2 Duo processor

Powered by an Intel Core 2 Duo processor at speeds up to 2.16GHz, the new MacBook is the fastest ever.

1GB memory, larger hard drives', '300', '22', '15', '32', '1', '29', 'http://www.youtube.com/embed/30T_ujbBkuw', '', '', '1', '50.00', '5.00', '1', '0', '', '', '1', 'produto07_270x350.jpg', 'produto07_02_270x350.jpg', '', 'produto07_370x480.jpg', 'produto07_570x740.jpg', 'produto07_570x740.jpg', '1', '0', '1', '0', '0', '2018-07-10', '18:25:27', 'Rochett Tavares');
INSERT INTO `produtos` (`id`, `nome`, `descricao`, `marca`, `detalhes`, `peso`, `largura`, `altura`, `comprimento`, `loja`, `quantidade`, `link_video`, `link_video_capa`, `video_produto`, `disponibilidade`, `preco_venda`, `preco_promocional`, `exibir_preco_venda`, `exibir_preco_promocional`, `dat_comeco_promocao`, `dat_fim_promocao`, `categoria`, `imagem_destaque`, `imagem_sobre_destaque`, `imagem_oferta`, `imagem_normal`, `imagem_ampliar`, `imagem_extra`, `exibir_produto`, `oferta`, `destaque`, `novidade`, `capa_site`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '8', 'JetPack', 'Intel Core 2 Duo processor

Powered by an Intel Core 2 Duo processor at speeds up to 2.16GHz, the new MacBook is the fastest ever.

1GB memory, larger hard drives

The new MacBook now comes with 1GB of memory standard and larger hard drives for the entire line perfect for running more of your favorite applications and storing growing media collections.

Sleek, 1.08-inch-thin design

MacBook makes it easy to hit the road thanks to its tough polycarbonate case, built-in wireless technologies, and innovative MagSafe Power Adapter that releases automatically if someone accidentally trips on the cord.

Built-in iSight camera

Right out of the box, you can have a video chat with friends or family,2 record a video at your desk, or take fun pictures with Photo Booth', '1', 'Intel Core 2 Duo processor

Powered by an Intel Core 2 Duo processor at speeds up to 2.16GHz, the new MacBook is the fastest ever.

1GB memory, larger hard drives', '300', '22', '15', '32', '1', '78', 'http://www.youtube.com/embed/30T_ujbBkuw', '', '', '1', '50.00', '5.00', '1', '1', '', '', '1', 'produto08_270x350.jpg', '', 'produto08_oferta_80x80.jpg', 'produto08_370x480.jpg', 'produto08_570x740.jpg', 'produto07_570x740.jpg', '1', '1', '1', '1', '0', '2018-07-09', '19:37:04', 'Rochett Tavares');
INSERT INTO `produtos` (`id`, `nome`, `descricao`, `marca`, `detalhes`, `peso`, `largura`, `altura`, `comprimento`, `loja`, `quantidade`, `link_video`, `link_video_capa`, `video_produto`, `disponibilidade`, `preco_venda`, `preco_promocional`, `exibir_preco_venda`, `exibir_preco_promocional`, `dat_comeco_promocao`, `dat_fim_promocao`, `categoria`, `imagem_destaque`, `imagem_sobre_destaque`, `imagem_oferta`, `imagem_normal`, `imagem_ampliar`, `imagem_extra`, `exibir_produto`, `oferta`, `destaque`, `novidade`, `capa_site`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '10', 'Luvas de Teste', 'teste', '4', 'teste', '250', '22', '15', '32', '1', '82', 'https://www.youtube.com/embed/lgSLz5FeXUg', 'vid2.mp4', '1', '1', '40.20', '4.99', '1', '1', '2018-07-03', '2018-07-17', '3', 'produto04_270x350.png', 'produto01_270x350.jpg', 'produto08_oferta_80x80.jpg', 'produto02_370x480.jpg', 'produto08_570x740.jpg', 'produto05_570x740.jpg', '1', '1', '1', '1', '0', '2018-07-12', '12:23:52', '');

--
-- Criacao da Tabela : revenda
--

CREATE TABLE `revenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `assunto` varchar(255) NOT NULL DEFAULT '',
  `telefone` varchar(15) NOT NULL DEFAULT '',
  `cnpj` varchar(18) NOT NULL DEFAULT '',
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1 ;

--
-- Dados a serem incluidos na tabela
--

INSERT INTO `revenda` (`id`, `nome`, `email`, `assunto`, `telefone`, `cnpj`, `data`, `hora`) VALUES ( '12', 'Hal Jordan', 'rochett.tavares@gmail.com', 'Cadastro de Revendedor', '(21) 3226-4545', '40.036.819/0001-23', '2018-07-02', '21:15:16');
INSERT INTO `revenda` (`id`, `nome`, `email`, `assunto`, `telefone`, `cnpj`, `data`, `hora`) VALUES ( '14', 'Bruce Wayne', 'rochett.tavares@gmail.com', 'Cadastro de Revendedor', '(85) 98957-2543', '40.036.819/0001-23', '2018-07-02', '21:28:57');
INSERT INTO `revenda` (`id`, `nome`, `email`, `assunto`, `telefone`, `cnpj`, `data`, `hora`) VALUES ( '15', 'Barry Allen', 'rochett.tavares@gmail.com', 'Cadastro de Revendedor', '(47) 3223-5841', '40.036.819/0001-23', '2018-07-02', '21:29:22');
INSERT INTO `revenda` (`id`, `nome`, `email`, `assunto`, `telefone`, `cnpj`, `data`, `hora`) VALUES ( '16', 'Kurt Wagner', 'rochett.tavares@gmail.com', 'Cadastro de Revendedor', '(85) 98957-2543', '29.491.383/0001-20', '2018-07-04', '11:57:24');
INSERT INTO `revenda` (`id`, `nome`, `email`, `assunto`, `telefone`, `cnpj`, `data`, `hora`) VALUES ( '17', 'Flash Gordon', 'rochett.tavares@gmail.com', 'Cadastro de Revendedor', '(85) 3636-4545', '29.491.383/0001-20', '2018-07-04', '12:01:38');
INSERT INTO `revenda` (`id`, `nome`, `email`, `assunto`, `telefone`, `cnpj`, `data`, `hora`) VALUES ( '18', 'Peter Parker', 'rochett.tavares@gmail.com', 'Cadastro de Revendedor', '(85) 98957-2543', '29.491.383/0001-20', '2018-07-04', '12:02:57');
INSERT INTO `revenda` (`id`, `nome`, `email`, `assunto`, `telefone`, `cnpj`, `data`, `hora`) VALUES ( '19', 'teste da silva', 'rochett.tavares@gmail.com', 'Cadastro de Revendedor', '(85) 9999-9999', '40.036.819/0001-23', '2018-07-05', '16:37:58');

--
-- Criacao da Tabela : secoes_site
--

CREATE TABLE `secoes_site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL DEFAULT '',
  `texto` longtext NOT NULL,
  `imagem` varchar(255) NOT NULL DEFAULT '',
  `dat_cadastro` date DEFAULT NULL,
  `hor_cadastro` time DEFAULT NULL,
  `responsavel` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 ;

--
-- Dados a serem incluidos na tabela
--

INSERT INTO `secoes_site` (`id`, `titulo`, `texto`, `imagem`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '1', 'Quem Somos', 'A LojaTeste
Ousadia, modernidade, personalidade e elegância são palavras presentes na vida de homens e mulheres diariamente. A LojaTeste aposta nessas características para oferecer aos seus clientes uma grande variedade de coleções de renomadas marcas.', '', '2018-07-11', '09:05:00', 'Rochett Tavares');
INSERT INTO `secoes_site` (`id`, `titulo`, `texto`, `imagem`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '2', 'Como Comprar', 'Cartão LojaTeste: ao solicitar seu Cartão LojaTeste o usuário deverá fornecer as seguintes informações:

Email;

Tipo pagamento: crédito/débito/boleto;

CEP;

Nome;

Código segurança

Parcelas

CPF;

Telefone;

Data de Nascimento;

UF;

Cidade;

Endereço;', '', '2018-07-12', '15:52:01', 'Rochett Tavares');
INSERT INTO `secoes_site` (`id`, `titulo`, `texto`, `imagem`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '3', 'Termos de Uso', 'TERMOS DE USO LOJATESTE

Os TERMOS DE USO descritos à seguir regulamentam o uso do SITE LojaTeste (adiante denominado apenas SITE) e de seus conteúdos, que LojaTeste, pessoa jurídica (doravante denominada LojaTeste), disponibiliza aos usuários de Internet que o utilizam.
A utilização do SITE, por qualquer USUÁRIO, implicará em adesão e expressa aceitação quanto aos termos e condições dos TERMOS DE USO vigente na data de sua utilização. Recomendamos aos USUÁRIOS, que previamente à utilização dos serviços disponíveis realizem a leitura do TERMO DE USO vigente.
Integram os presentes TERMOS DE USO todos os avisos, regulamentos de uso e instruções levados ao conhecimento do USUÁRIO pela LojaTeste.

Termos de uso

1. Objeto

2. Condições de acesso e utilização do site

2.1. Utilização do site e de seus conteúdos sob a exclusiva responsabilidade do usuário

2.2 Utilização do site e dos seus conteúdos

3. Informações sobre produtos, características técnicas e orientações de uso

4. Utilização de hiperlinks

5. Dados de caráter pessoal

6. Exclusão de garantias e de responsabilidade pelo funcionamento do site e dos seus conteúdos, pelos serviços prestados por terceiros através do site, pelos serviços e conteúdos hospedados em páginas externas ao site e pela utilização do site, dos serviços e dos conteúdos pelos usuários

6.1 Disponibilidade e continuidade do site e de seus conteúdos

6.2 Privacidade e segurança do site e dos seus conteúdos

6.3 Vírus e/ou outros elementos nocivos nos conteúdos

6.3.1 Fraude eletrônica -\"phishing\"?

6.4 Confiabilidade e utilidade do site e dos seus conteúdos

6.5 Exatidão, extensão e atualidade

6.6 Serviços prestados por terceiros através do site

6.7 Serviços e conteúdos hospedados em páginas externas ao site

6.8 Utilização do site, dos serviços e dos conteúdos pelos usuários

7. Inexistência de licenciamento

8. Recusa e retirada do acesso ao site e/ou aos seus conteúdos

9. Duração e finalização

10. Lei aplicável e jurisdição', '', '2018-07-10', '18:25:27', 'Rochett Tavares');
INSERT INTO `secoes_site` (`id`, `titulo`, `texto`, `imagem`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '4', 'Entrega e retirada', 'Em Desenvolvimento.', '', '2018-07-12', '19:37:04', 'Rochett Tavares');
INSERT INTO `secoes_site` (`id`, `titulo`, `texto`, `imagem`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '5', 'Perguntas Frequentes', 'Em Desenvolvimento.', '', '2018-07-10', '19:46:21', 'Rochett Tavares');
INSERT INTO `secoes_site` (`id`, `titulo`, `texto`, `imagem`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '6', 'Ligamos para você', 'Um de nossos atendentes fará contato com você!
 
1. Digite o numero de seu telefone com DDD (ex: 5133376680)
2. Clique no botão Enviar
3. Um de nossos atendentes vai ligar para você assim que possível dentro de 60min.  no máximo

Horário de atendimento:
Segunda à sexta-feira das 10 às 20 horas e sábado das 10 às 12 horas (Horário de Brasília)', '', '2018-07-12', '19:49:46', 'Rochett Tavares');
INSERT INTO `secoes_site` (`id`, `titulo`, `texto`, `imagem`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '7', 'Tendências', 'Depois do sucesso dos clubbers nos anos 90, a tendência está de volta e com força total, aparecendo em acessórios, sapatos, roupas ou em pequenos detalhes.  Para muitos essa mistura de cores é um verdadeiro desafio e pode resultar em looks inovadores e harmônicos ou em desastre completo!
A dica para usar essa tendência é:  Use misturando com outras peças mais neutras, ou comece pelos acessórios para as mais tímidas. Pra quem já é mais ousada, teste tudo na frente do espelho, cores que aparentemente não conversam entre si podem funcionar dependendo das peças e de quem usa, mas o resultado é sempre imprevisível.', 'tendencia.jpg', '2018-07-10', '10:05:00', 'Rochett Tavares');
INSERT INTO `secoes_site` (`id`, `titulo`, `texto`, `imagem`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '8', 'Dicas', 'Estamos no inverno, mas de olho no verão já!  E nessa próxima estação a selva tropical vai estar em alta. Ao menos, no que depender das tendências que foram apresentadas no Fashion Rio.  Animal print? Já caiu. A novidade da vez é a estampa figurativa dos animais especificamente cabeças de onças e leão. Uma forma muito mais divertida de investir nos prints animalescos. Aposte!', 'dicas.jpg', '2018-07-10', '20:05:25', 'Rochett Tavares');
INSERT INTO `secoes_site` (`id`, `titulo`, `texto`, `imagem`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '9', 'Newsletter', 'Cadastre seu e-mail e receba novidades que só a Stillera tem para você!
 
1. Digite seu nome
2. Informe seu e-mail
3. Clique no botão Enviar
4. Pronto! Agora você ficará por dentro de todas as ofertas e lançamentos exclusivos que só a Stillera oferece!

Horário de atendimento:
Segunda à sexta-feira das 10 às 20 horas e sábado das 10 às 12 horas (Horário de Brasília)', '', '2018-07-11', '12:25:00', 'Rochett Tavares');
INSERT INTO `secoes_site` (`id`, `titulo`, `texto`, `imagem`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '10', 'Cadastro', 'Cadastre seu e-mail e receba novidades que só a LojaTeste tem para você!
 
1. Digite seu nome
2. Informe seu e-mail
3. Clique no botão Enviar
4. Pronto! Agora você ficará por dentro de todas as ofertas e lançamentos exclusivos que só a LojaTeste oferece!

Horário de atendimento:
Segunda à sexta-feira das 10 às 20 horas e sábado das 10 às 12 horas (Horário de Brasília)', '', '2018-07-09', '15:55:29', 'Rochett Tavares');
INSERT INTO `secoes_site` (`id`, `titulo`, `texto`, `imagem`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '11', 'Parceiros', 'Em Desenvolvimento.', '', '2018-07-12', '16:40:07', 'Rochett Tavares');
INSERT INTO `secoes_site` (`id`, `titulo`, `texto`, `imagem`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '12', 'Marcas', 'Em Desenvolvimento.', '', '2018-07-10', '20:00:00', 'Rochett Tavares');
INSERT INTO `secoes_site` (`id`, `titulo`, `texto`, `imagem`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '13', 'Informações Especiais', 'Em Desenvolvimento.', '', '2018-07-11', '19:55:00', 'Rochett Tavares');
INSERT INTO `secoes_site` (`id`, `titulo`, `texto`, `imagem`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '14', 'Revenda', 'Um de nossos atendentes fará contato com você!
 
1. Digite o numero de seu telefone com DDD (ex: 5133376680)
2. Informe seu E-MAIL
3. Preencha o campo CNPJ corretamente
4. Clique no botão Enviar
5. Um de nossos atendentes vai ligar para você assim que possível dentro de 60min.  no máximo

Obs:

O cadastro de revendedores é apenas para PESSOA JURÍDICA

Horário de atendimento:
Segunda à sexta-feira das 10 às 20 horas e sábado das 10 às 12 horas (Horário de Brasília)', '', '2018-07-10', '18:20:15', 'Rochett Tavares');

--
-- Criacao da Tabela : slider_site
--

CREATE TABLE `slider_site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL DEFAULT '',
  `texto` longtext NOT NULL,
  `imagem` varchar(255) NOT NULL DEFAULT '',
  `thumbnail` varchar(255) NOT NULL DEFAULT '',
  `exibir` char(1) DEFAULT '1',
  `dat_cadastro` date DEFAULT NULL,
  `hor_cadastro` time DEFAULT NULL,
  `responsavel` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 ;

--
-- Dados a serem incluidos na tabela
--

INSERT INTO `slider_site` (`id`, `titulo`, `texto`, `imagem`, `thumbnail`, `exibir`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '1', 'Primeiro Slider', 'Lançamento coleção 2014/15', 'red.jpg', '1.jpg', '1', '2018-07-11', '09:05:00', 'Rochett Tavares');
INSERT INTO `slider_site` (`id`, `titulo`, `texto`, `imagem`, `thumbnail`, `exibir`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '2', 'Segundo Slider', 'Ousadia, modernidade, personalidade e elegância são palavras presentes na vida de homens e mulheres diariamente.', 'blue.jpg', '2.jpg', '1', '2018-07-12', '15:52:01', 'Rochett Tavares');
INSERT INTO `slider_site` (`id`, `titulo`, `texto`, `imagem`, `thumbnail`, `exibir`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '3', 'Terceiro Slider', 'Ousadia, modernidade, personalidade e elegância são palavras presentes na vida de homens e mulheres diariamente.', 'purple.jpg', '3.jpg', '1', '2018-07-10', '18:25:27', 'Rochett Tavares');
INSERT INTO `slider_site` (`id`, `titulo`, `texto`, `imagem`, `thumbnail`, `exibir`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '4', 'Quarto slider', 'Ousadia, modernidade, personalidade e elegância são palavras presentes na vida de homens e mulheres diariamente.', 'blue.jpg', '4.jpg', '1', '2018-07-12', '19:37:04', 'Rochett Tavares');

--
-- Criacao da Tabela : solucoes
--

CREATE TABLE `solucoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_problema` longtext,
  `descricao` longtext,
  `solucao` longtext,
  `dat_cadastro` date DEFAULT NULL,
  `hor_cadastro` time DEFAULT NULL,
  `responsavel` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ;

--
-- Dados a serem incluidos na tabela
--

INSERT INTO `solucoes` (`id`, `tipo_problema`, `descricao`, `solucao`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '1', 'Impressora com problema. Não imprime.', 'A impressora, mesmo após ter um documento enviado para a fila, não imprime. A impressora, mesmo após ter um documento enviado para a fila, não imprime. A impressora, mesmo após ter um documento enviado para a fila, não imprime. A impressora, mesmo após ter um documento enviado para a fila, não imprime. A impressora, mesmo após ter um documento enviado para a fila, não imprime. A impressora, mesmo após ter um documento enviado para a fila, não imprime. A impressora, mesmo após ter um documento enviado para a fila, não imprime. A impressora, mesmo após ter um documento enviado para a fila, não imprime. A impressora, mesmo após ter um documento enviado para a fila, não imprime. A impressora, mesmo após ter um documento enviado para a fila, não imprime. A impressora, mesmo após ter um documento enviado para a fila, não imprime. A impressora, mesmo após ter um documento enviado para a fila, não imprime. A impressora, mesmo após ter um documento enviado para a fila, não imprime.', 'reinstalação de drivers.', '2017-10-15', '11:15:00', 'Rochett Tavares');
INSERT INTO `solucoes` (`id`, `tipo_problema`, `descricao`, `solucao`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '3', 'Teclado não funciona.', 'Mesmo conectado, teclado usb não indica funcionamento e/ou as luzes de caps, num  escroll acendem.', 'Substituição enquanto é realizada análise/reparo.', '2017-10-15', '13:47:38', 'Rochett Tavares');

--
-- Criacao da Tabela : status
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(256) DEFAULT NULL,
  `dat_cadastro` date DEFAULT NULL,
  `hor_cadastro` time DEFAULT NULL,
  `responsavel` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 ;

--
-- Dados a serem incluidos na tabela
--

INSERT INTO `status` (`id`, `descricao`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '1', 'FINALIZADO', '2017-10-10', '14:28:00', 'Rochett Tavares');
INSERT INTO `status` (`id`, `descricao`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '2', 'EXECUTANDO', '2017-10-10', '14:29:00', 'Rochett Tavares');
INSERT INTO `status` (`id`, `descricao`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '4', 'AGUARDANDO ATENDIMENTO', '2017-10-17', '16:23:57', 'Rochett Tavares');
INSERT INTO `status` (`id`, `descricao`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '5', 'AGENDADA', '2018-05-15', '10:13:51', 'Rochett Tavares');

--
-- Criacao da Tabela : tamanho
--

CREATE TABLE `tamanho` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) NOT NULL DEFAULT '',
  `dat_cadastro` date DEFAULT NULL,
  `hor_cadastro` time DEFAULT NULL,
  `responsavel` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ;

--
-- Dados a serem incluidos na tabela
--

INSERT INTO `tamanho` (`id`, `descricao`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '1', 'P', '2018-07-11', '09:05:00', 'Rochett Tavares');
INSERT INTO `tamanho` (`id`, `descricao`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '2', 'M', '2018-07-12', '12:11:03', 'Rochett Tavares');
INSERT INTO `tamanho` (`id`, `descricao`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '3', 'G', '2018-07-10', '18:25:27', 'Rochett Tavares');
INSERT INTO `tamanho` (`id`, `descricao`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '4', 'GG', '2018-07-12', '19:37:04', 'Rochett Tavares');
INSERT INTO `tamanho` (`id`, `descricao`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '5', 'XGG', '2018-07-10', '19:46:21', 'Rochett Tavares');
INSERT INTO `tamanho` (`id`, `descricao`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '6', 'XXGG', '2018-07-12', '12:54:17', 'Rochett Tavares');

--
-- Criacao da Tabela : tipo_usuario
--

CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(256) DEFAULT NULL,
  `dat_cadastro` date DEFAULT NULL,
  `hor_cadastro` time DEFAULT NULL,
  `responsavel` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ;

--
-- Dados a serem incluidos na tabela
--

INSERT INTO `tipo_usuario` (`id`, `descricao`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '1', 'Master', '2017-10-10', '14:28:00', 'Rochett Tavares');
INSERT INTO `tipo_usuario` (`id`, `descricao`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '2', 'Gerente', '2017-10-10', '14:29:00', 'Rochett Tavares');
INSERT INTO `tipo_usuario` (`id`, `descricao`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '3', 'Comum', '2017-10-13', '11:23:09', 'Rochett Tavares');
INSERT INTO `tipo_usuario` (`id`, `descricao`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '4', 'TI', '2017-10-19', '16:43:00', 'Rochett Tavares');

--
-- Criacao da Tabela : usuarios_adm
--

CREATE TABLE `usuarios_adm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) NOT NULL,
  `login` varchar(256) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `avatar` longtext NOT NULL,
  `foto` longtext NOT NULL,
  `tipo_usuario` int(3) DEFAULT NULL,
  `loja` int(3) NOT NULL,
  `dat_cadastro` date DEFAULT NULL,
  `hor_cadastro` time DEFAULT NULL,
  `responsavel` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ;

--
-- Dados a serem incluidos na tabela
--

INSERT INTO `usuarios_adm` (`id`, `usuario`, `login`, `senha`, `avatar`, `foto`, `tipo_usuario`, `loja`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '1', 'Rochett Tavares', 'rochett.tavares@gmail.com', 'whx01a9bx04', 'rochett-avatar.jpg', 'rochett.jpg', '1', '1', '2017-10-05', '09:05:00', 'Rochett Tavares');
INSERT INTO `usuarios_adm` (`id`, `usuario`, `login`, `senha`, `avatar`, `foto`, `tipo_usuario`, `loja`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '2', 'Hal Jordan', 'haljordan@ferris.com', '@GL', 'rochett-avatar.jpg', 'rochett.jpg', '1', '1', '2017-10-05', '08:25:36', 'Rochett Tavares');
INSERT INTO `usuarios_adm` (`id`, `usuario`, `login`, `senha`, `avatar`, `foto`, `tipo_usuario`, `loja`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '3', 'Bruce Wayne', 'bruce.wayne@waynetech.com', '@morcego', 'rochett-avatar.jpg', 'rochett.jpg', '2', '1', '2017-11-23', '09:35:00', 'Rochett Tavares');
INSERT INTO `usuarios_adm` (`id`, `usuario`, `login`, `senha`, `avatar`, `foto`, `tipo_usuario`, `loja`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '4', 'Barry Allen', 'barry_allen@ccpd.com', '@speed', 'rochett-avatar.jpg', 'rochett.jpg', '1', '1', '2017-11-23', '09:05:00', 'Rochett Tavares');
INSERT INTO `usuarios_adm` (`id`, `usuario`, `login`, `senha`, `avatar`, `foto`, `tipo_usuario`, `loja`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '5', 'Peter Parker', 'pepterparker@dailybugle.com', '@aranha', 'rochett-avatar.jpg', 'rochett.jpg', '1', '1', '2017-11-23', '09:05:00', 'Rochett Tavares');
INSERT INTO `usuarios_adm` (`id`, `usuario`, `login`, `senha`, `avatar`, `foto`, `tipo_usuario`, `loja`, `dat_cadastro`, `hor_cadastro`, `responsavel`) VALUES ( '6', 'Steve Rogers', 'rogers@shield.com', '@shield', 'rochett-avatar.jpg', 'rochett.jpg', '1', '1', '2017-10-05', '09:05:00', 'Rochett Tavares');
