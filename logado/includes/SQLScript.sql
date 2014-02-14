SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `u454564541_mydb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comp_pc`
--

CREATE TABLE IF NOT EXISTS `comp_pc` (
  `ID_comp` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `desc` varchar(10000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tp_componente` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `princ_marcas` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modelos` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_comp`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='				' AUTO_INCREMENT=24 ;

--
-- Extraindo dados da tabela `comp_pc`
--

INSERT INTO `comp_pc` (`ID_comp`, `nome`, `desc`, `tp_componente`, `princ_marcas`, `modelos`) VALUES
(6, 'Processador', 'O Processador é o cara, aquele severino da escola/empresa... É responsável por todo o processamento do computador, desde o calculo de 1+1 na calculadora do sistema até manter sua musica tocando, enquanto navega na internet, com sua planilha aberta', 'Principal', 'Intel, AMD', 'i7, i3, Bulldozer, Tricore'),
(7, 'Bateria', 'Você pode pensar: "Pra que uma bateria de relógio num computador enorme desses?" É interessante a pergunta, pra manter o computador ligado quando cair a luz que não é. Ele é responsável por manter na ativa as informações importantes do computador (como configurações da BIOS, informaçoes do CMOS e até mesmo o relógio)', 'Periférico', NULL, NULL),
(8, 'Chipset Norte', 'Chipset norte é o irmão mais esperto... Cuida dos componentes que mais rápidos (PCI-e, Memória RAM, Processador)', 'Principal', 'Via, SIS, Intel', 'vt832, SiS900'),
(9, 'Chipset Sul', 'Chipset SUL é o que gerencia os dispositivos mais lentos (PCI, Som, etc)', 'Principal', 'Via, Intel, SiS', NULL),
(10, 'Cooler', 'Cooler é aquele "ventiladorzinho" (nunca diga ventilador.. há relatos de pessoas que foram demitidas e nunca mais vistas após pronunciar isso) que refrigera algum componente. Sempre terá um em cima do Processador, e outro dentro da fonte.. mas pode haver mais. O quanto você quiser, onde você quiser.', 'Periférico', 'Cooler Master, Corsair', NULL),
(11, 'Leitor CD/DVD', 'O Leitor de CD/DVD (caindo em desuso atualmente, mas ainda firme e forte!) é quem consegue ler e gravar seus cds de música, seus filmes etc. Usa as conexões SATA ou IDE para se conectar ao computador.', 'Periférico', 'Samsung, LG, CCE ', NULL),
(12, 'Fonte', 'Fonte como o nome já diz é a fonte de energia do computador, ele que pega a energia da tomada e distribui para os outros componentes. Quanto mais componentes o computador possui, maior deve ser a capacidade da Fonte', 'Principal', 'Cooler Master, Corsair, Wise', NULL),
(13, 'Gabinete', 'Gabinete (Conhecido também como Case, Chassis, Caixinha, ou coisa pesada) é quem protege os componentes mais sensíveis (frescos) do computador. bons gabinetes tem saídas de ar localizadas, espaço para coolers e etc.', 'Periférico', 'Cooler Master, SilverStone,ThermalTake', NULL),
(14, 'Monitor', 'Sem descrição', 'Periférico', 'Samsung, LG, Dell', NULL),
(15, 'Disco Rígido', 'Sem Descrição', 'Principal', 'Seagate, Western Digital, Samsung', NULL),
(16, 'Conexão IDE', 'Sem Descrição', 'Componente', NULL, NULL),
(17, 'Memória RAM', 'Memória RAM é aquela pecinha magrinha e discreta encaixada na sua Placa-mãe. Serve pra armazenar tudo que tá em execução no seu Computador. Ela tem o diferencial de ser bem rápida, para poder executar seus programinhas mais rapidamente!', 'Principal', 'Corsair, Kingston', NULL),
(18, 'PCI', 'Sem Descrição', 'Componente', NULL, NULL),
(19, 'PCI-Express', 'Sem descrição', 'Componente', NULL, NULL),
(20, 'Placa-Mãe', 'Sem Descrição', 'Componente', 'Asus, Intel, ASRock', NULL),
(21, 'Placa de Vídeo', 'Placa de vídeo é o queridinho pra quem gosta de jogar. Se instalado, ele fica responsável por todo tipo de processamento gráfico (Jogos, vídeos, imagens, etc.)', 'Periférico', 'Nvidia, ATI', NULL),
(22, 'SATA', 'SATA é a porta de conexão para Dispositivos de armazenamento em Massa (HDs, DVDs, etc) mais moderninhos.. Está em sua versão III, transfere até 6Gbps por Segundo (veja tabela de nomenclaturas)', 'Componente', NULL, NULL),
(23, 'Soquete', 'Sem descrição', '', '', NULL);


--
-- INSERT NA TABELA RESPOSTA
--

INSERT INTO `resposta` (`ID_resposta`, `ID_comp`, `resposta`) VALUES
(null, 6, 'Processador'),
(null, 7, 'Bateria'),
(null, 8, 'Chipset Norte'),
(null, 9, 'Chipset Sul'),
(null, 10, 'Cooler'),
(null, 11, 'Leitor CD/DVD'),
(null, 12, 'Fonte'),
(null, 13, 'Gabinete'),
(null, 14, 'Monitor'),
(null, 15, 'Disco Rígido'),
(null, 16, 'Conexão IDE'),
(null, 17, 'Memória RAM'),
(null, 18, 'PCI'),
(null, 19, 'PCI-Express'),
(null, 20, 'Placa-Mãe'),
(null, 21, 'Placa de Vídeo'),
(null, 22, 'SATA'),
(null, 23, 'Soquete');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estatiticas`
--

CREATE TABLE IF NOT EXISTS `estatiticas` (
  `ID_estatiticas` int(11) NOT NULL AUTO_INCREMENT,
  `ID_usuario` int(11) NOT NULL,
  `acertos` int(11) DEFAULT NULL,
  `erros` int(11) DEFAULT NULL,
  `pontuacao_geral` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_estatiticas`),
  KEY `fk_estatiticas_usuario1_idx` (`ID_usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel_pergunta`
--

CREATE TABLE IF NOT EXISTS `nivel_pergunta` (
  `ID_nivel_pergunta` int(11) NOT NULL AUTO_INCREMENT,
  `dsc_nivel` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_nivel_pergunta`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pergunta`
--

CREATE TABLE IF NOT EXISTS `pergunta` (
  `ID_pergunta` int(11) NOT NULL AUTO_INCREMENT,
  `ID_tp_pergunta` int(11) NOT NULL,
  `ID_usuario` int(11) NOT NULL,
  `ID_nivel_pergunta` int(11) NOT NULL,
  `Pergunta` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_pergunta`),
  KEY `fk_pergunta_Tp_pergunta1_idx` (`ID_tp_pergunta`),
  KEY `fk_pergunta_usuario1_idx` (`ID_usuario`),
  KEY `fk_pergunta_nivel_pergunta1_idx` (`ID_nivel_pergunta`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='	' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `resposta`
--

CREATE TABLE IF NOT EXISTS `resposta` (
  `ID_resposta` int(11) NOT NULL AUTO_INCREMENT,
  `ID_pergunta` int(11) NOT NULL,
  `ID_comp` int(11) NOT NULL,
  `resposta` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_resposta`),
  KEY `fk_resposta_comp_pc1_idx` (`ID_comp`),
  KEY `fk_resposta_pergunta1_idx` (`ID_pergunta`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Tp_pergunta`
--

CREATE TABLE IF NOT EXISTS `Tp_pergunta` (
  `ID_tp_pergunta` int(11) NOT NULL AUTO_INCREMENT,
  `assunto` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_tp_pergunta`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Tp_usuario`
--

CREATE TABLE IF NOT EXISTS `Tp_usuario` (
  `ID_tp_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `dsc_tipo` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_tp_usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `Tp_usuario`
--

INSERT INTO `Tp_usuario` (`ID_tp_usuario`, `dsc_tipo`) VALUES
(1, 'Aluno'),
(2, 'Professor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `ID_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `ID_tp_usuario` int(11) NOT NULL,
  `usuario` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `senha` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nome` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sobrenome` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dt_nasc` date DEFAULT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefone` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instituicao` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_usuario`),
  KEY `fk_usuario_Tp_usuario1_idx` (`ID_tp_usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='	' AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `usuario`
--
DELIMITER $$
CREATE TRIGGER CriaEstatistica
  AFTER INSERT ON usuario
  FOR EACH ROW BEGIN
    INSERT INTO estatiticas VALUES (null,NEW.ID_usuario,0,0,0);
  END$$
DELIMITER ;

INSERT INTO `usuario` (`ID_usuario`, `ID_tp_usuario`, `usuario`, `senha`, `nome`, `sobrenome`, `dt_nasc`, `email`, `telefone`, `instituicao`) VALUES
(1, 1, 'filpgame', 'felipe', 'Felipe', 'Rodrigues', '1993-12-12', 'feliipe@outlook.com', NULL, NULL),
(2, 1, 'cristian', '0000', 'Cristian', 'Anterio', '1994-07-30', 'csanterio@gmail.com', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

/* Trigger para colocar o usuário na tabela estatística*/
