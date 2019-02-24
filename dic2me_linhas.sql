dic2me_ditado_feito_pelo_aluno

CREATE TABLE `ddic2me2_palavras_testes` (
  `palavra`  varchar(85) CHARACTER SET utf8 NOT NULL DEFAULT '',
  PRIMARY KEY (`palavra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `ddic2me2_palavras_testes33` (
  `palavra`  varchar(85) CHARACTER SET utf8 NOT NULL DEFAULT '',
  PRIMARY KEY (`palavra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


 dic2me_codigo_erros_ortioograficos

dic2me_ditado_feito_pelo_aluno

CREATE TABLE `dic2me_TPC_escolhido_aluno` (

  `id_linha` varchar(21) CHARACTER SET utf8 DEFAULT '',
  `titulo` varchar(9001) CHARACTER SET utf8 DEFAULT '',
  `codigo_interno_do_tpc` varchar(201) CHARACTER SET utf8 NOT NULL DEFAULT '', 
  `idioma` varchar(201) CHARACTER SET utf8 DEFAULT '',
 
  `datageracao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,


  `ano` varchar(30) CHARACTER SET utf8 DEFAULT '',
  `aluno_pede` varchar(99) CHARACTER SET utf8 DEFAULT '',


  `nif_aluno` varchar(90) CHARACTER SET utf8 DEFAULT '',
  `feito` varchar(9) CHARACTER SET utf8 DEFAULT '',
  `nome_aluno` varchar(301) CHARACTER SET utf8 DEFAULT '',
  `data_de_inicio` varchar(99) CHARACTER SET utf8 DEFAULT '',
  `data_de_feito` varchar(99) CHARACTER SET utf8 DEFAULT '',
  `anulado` varchar(99) CHARACTER SET utf8 DEFAULT '',


  PRIMARY KEY (`codigo_interno_do_tpc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;



CREATE TABLE `dic2me_TPC_escolhido_aluno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idtexto` int(5),
  `idioma`  varchar(5) CHARACTER SET utf8 NOT NULL DEFAULT '',
	    `nif_aluno` varchar(10) CHARACTER SET utf8 DEFAULT '',
		`tempoquedemorouafazerditado` varchar(10) CHARACTER SET utf8 DEFAULT '',
		`codigodeexecucaoditado` varchar(4) CHARACTER SET utf8 DEFAULT '',
  `dataregisto` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




INSERT INTO dic2me_controlo_id_do_tpc_mostrar_miudos (codigo_professor, id_mostrar_criancas,id_texto) VALUES (55440, '2','5');
CREATE TABLE `lixo` (

  `query` varchar(5000) CHARACTER SET utf8 NOT NULL DEFAULT ''

) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


dic2me_TPC


-- dic2me_ditado_feito_pelo_aluno
-- Table structure for table `dic2me_temporaria_erros_ditados`
--
 dic2me_temporaria_erros_ditados
DROP TABLE IF EXISTS `dic2me_temporaria_erros_ditados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;


DROP TABLE IF EXISTS `dic2me_temporaria_erros_ditados`;
CREATE TABLE `dic2me_gerir_autorizacoes_de_delete_passwd` (
  `codigoautorizacao` varchar(70) CHARACTER SET utf8 DEFAULT '',
  `ip` varchar(70) CHARACTER SET utf8 DEFAULT '',
  `nif_aluno` varchar(70) CHARACTER SET utf8 DEFAULT '',
    `email` varchar(70) CHARACTER SET utf8 DEFAULT '',
  `ordem` int(11) DEFAULT NULL,
  `posicao` int(11) DEFAULT NULL,
  `id` varchar(90) CHARACTER SET utf8 DEFAULT '',
		`codigodeexecucaoditado` varchar(4) CHARACTER SET utf8 DEFAULT '',
  `tipoerro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;


DROP TABLE IF EXISTS `dic2me_controlo_id_do_tpc_mostrar_miudos`;
CREATE TABLE `dic2me_controlo_id_do_tpc_mostrar_miudos` (
  `codigo_controlo` varchar(70) CHARACTER SET utf8 DEFAULT '',
  `datamarcacao`  TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `codigo_professor` varchar(70) CHARACTER SET utf8 DEFAULT '',
    `id_mostrar_criancas` INTEGER,
    `id_texto` varchar(4) CHARACTER SET utf8 DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;


DROP TABLE IF EXISTS `dic2me_temporaria_erros_ditados`;
CREATE TABLE `dic2me_temporaria_erros_ditados` (
  `palavra` varchar(70) CHARACTER SET utf8 DEFAULT '',
  `palavra_corrigida` varchar(70) CHARACTER SET utf8 DEFAULT '',
  `palavra_anterior` varchar(70) CHARACTER SET utf8 DEFAULT '',
  `ordem` int(11) DEFAULT NULL,
  `posicao` int(11) DEFAULT NULL,
  `id` varchar(90) CHARACTER SET utf8 DEFAULT '',
		`codigodeexecucaoditado` varchar(4) CHARACTER SET utf8 DEFAULT '',
  `tipoerro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

ALTER TABLE dic2me_TPC
ADD feirto_sem_erros varchar(1) CHARACTER SET utf8 DEFAULT '';


INSERT INTO dic2me_ditado_feito_pelo_aluno_apaga(ditadofeito, codigo_interno_do_tpc, nif_aluno , tempoquedemorouafazerditado, processado,id_tp_geral_turma,codigodeexecucaoditado ) VALUES ('no ultimo natal,deram-me um soldadoz de papeli','1502662407339',NULL,'424265','0','16','1505330988');

dic2me_temporaria_erros_ditados
DROP TABLE IF EXISTS `dic2me_ditado_feito_pelo_aluno`;

DROP TABLE dic2me_ditado_feito_pelo_aluno
CREATE TABLE `dic2me_ditado_feito_pelo_aluno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ditadofeito` varchar(5000) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `codigo_interno_do_tpc` varchar(150) CHARACTER SET utf8 DEFAULT '',
	    `processado` tinyint ,
		`nif_aluno` int ,
		`id_tp_geral_turma` int ,
		`tempoquedemorouafazerditado` bigint,
		`codigodeexecucaoditado` varchar(4) CHARACTER SET utf8 DEFAULT '',
  `dataregisto` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE  dic2me_ditado_feito_pelo_aluno
	ADD processado varchar(50);


CREATE TABLE `dic2me_dados_dos_filmes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filme` varchar(5000) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `filme_resumo` varchar(5000) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `id_linha` varchar(5000) CHARACTER SET utf8 NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


/*
Navicat MySQL Data Transfer

Source Server         : qa01
Source Server Version : 50717
Source Host           : localhost:3309
Source Database       : itgptech_interna

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2017-02-13 12:04:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for dic2me_linhas
-- ----------------------------
DROP TABLE IF EXISTS `dic2me_linhas`;
CREATE TABLE `dic2me_linhas` (
  `id_linha` int(255) NOT NULL AUTO_INCREMENT,
  `id_livro_texto` int(255) NOT NULL,
  `linha_texto` varchar(955) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `idioma` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `ano` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `nome` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `descricao` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `file` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `url` varchar(201) CHARACTER SET utf8 DEFAULT NULL,
  `activo` varchar(201) CHARACTER SET utf8 DEFAULT NULL,
  `redatora` varchar(201) CHARACTER SET utf8 DEFAULT NULL,
  `patrocinador` varchar(201) CHARACTER SET utf8 DEFAULT NULL,
  `url_patrocionio` varchar(201) CHARACTER SET utf8 DEFAULT NULL,
  `ilustradora` varchar(201) CHARACTER SET utf8 DEFAULT NULL,
  `leitora` varchar(201) CHARACTER SET utf8 DEFAULT NULL,
  `url_leitora` varchar(201) CHARACTER SET utf8 DEFAULT NULL,
  `escola_autor` varchar(201) CHARACTER SET utf8 DEFAULT NULL,
  `nivel` varchar(201) CHARACTER SET utf8 DEFAULT NULL,
  `cv_redatora` varchar(201) CHARACTER SET utf8 DEFAULT NULL,
  `email_ilustradora` varchar(201) CHARACTER SET utf8 DEFAULT NULL,
  `email_leitora` varchar(201) CHARACTER SET utf8 DEFAULT NULL,
  `cv_ilustradora` varchar(201) CHARACTER SET utf8 DEFAULT NULL,
  `casosleitura` varchar(201) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id_linha`),
  UNIQUE KEY `id_dic2me_linha_UNIQUE` (`id_linha`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of dic2me_linhas
-- ----------------------------
INSERT INTO `dic2me_linhas` VALUES ('1', '1', 'A galinha castanha vive perto do moinho. O ninho é de palha e muito fofinho. Ela põe muitos ovos no seu ninho e aquece-os.\r\n Um dia, a galinha foi buscar comida e deixou os ovos sozinhos. Quando voltou reparou que faltava um.\r\nFoi a raposa que o levou para o seu jantarinho.\r\n', 'PT', '2', 'A GALINHA', 'a galinha castanha', 'leitura_003_prof.php', 'A_GALINHA2_LEITURA.mp3,', null, 'Rosário', 'ITGP', null, null, 'Silvia Fereira', null, 'PEdro santarém, lisboa, benfica', '9', null, null, null, null, null);
INSERT INTO `dic2me_linhas` VALUES ('2', '2', 'Era uma vez um coelhinho com olhos encarnados e esbugalhados. Tinha as orelhas e pernas compridas. Ele gostava de roer ervas, cenouras e repolho.\r\nQueria ser amigo dos javalis e dos pássaros que viviam em liberdade. Todos os dias treinava para conseguir passar a cerca que rodeava a coelheira.\r\nCerto dia, o coelho saltou tão alto, tão alto que escapou e desapareceu pelas árvores.\r\n', 'PT', '2', 'o coelho', 'O coelho', 'leitura_004_prof.php', 'o_coelho.mp3', null, 'Rosário', 'ITGP', null, null, 'Silvia Ferreira', null, 'pedro santarém, lisboa benfic', '2', null, null, null, null, null);
INSERT INTO `dic2me_linhas` VALUES ('3', '3', 'O Ratão é um rato muito esperto e matreiro. Ele vive num buraquinho no corredor de um restaurante. \r\nUm dia, o Ratão descobriu um grande queijo na cozinha! Então, correu para ele e roeu-o muito rápido para o cozinheiro não o apanhar. \r\nQuando terminou, estava tão barrigudo que ficou três dias a dormir no seu pequeno buraquinho.\r\n', 'PT', '2', 'rato ratão', 'o rato ratão', 'leitura_005_prof.php', 'orato.mp4', null, 'Sílvia', 'itgp', null, null, 'Sílvia', null, 'Sílvia', '1', null, null, null, null, null);
INSERT INTO `dic2me_linhas` VALUES ('4', '4', 'Na segunda-feira, a Sara não foi à escola porque acordou com febre e muita tosse. \r\nPara a animar, o pai cozinhou massa colorida e salada de frutas para o almoço. À tarde, viram um filme sobre dinossauros. O dia passou tão depressa como a febre, e a Sara até se esqueceu que estava doente!\r\nNa terça-feira pela manhã, a Sara já se sentia melhor e regressou à escola. ', 'PT', '2', 'A segunda-feira da Sara', 'A segunda feira de Sara', 'leitura_006_prof.php', 'Segunda_Feira_da_Sara_total.mp3', null, 'Silvia', 'SEM', null, null, 'Sílvia', null, 'Silvia', '1', null, null, null, null, null);
INSERT INTO `dic2me_linhas` VALUES ('5', '5', 'O caracol Raul, o melro Altino e o pardal Gil são grandes amigos. O Raul vive entre as ervas e o Altino e o Gil no alto das árvores. \r\nNum dia primaveril, combinaram almoçar juntos. Cada um levou a sua comida preferida. O Altino e o Gil levaram alpista. O Raul, que foi o último a chegar, levou uma folha de alface. \r\nDepois de um almoço delicioso, os três amigos passaram a tarde a apanhar sol.\r\n', 'PT', '2', 'O caracol o melro e o pardal', 'O caracol o melro e o pardal', 'leitura_007_prof.php', 'Segunda_Feira_da_Sara_total', null, 'Silvia', 'SEM', null, null, 'Sílvia', null, 'Silvia', '1', null, null, null, null, null);
INSERT INTO `dic2me_linhas` VALUES ('6', '6', 'A Marta e o Artur foram conhecer a horta da tia Alberta, irmã do avô Urbano. \r\nNa horta aprenderam a cavar, a semear, a regar e muito mais! A Marta gostou imenso de apanhar ervilhas, já o Artur preferiu arrancar as cenouras e as ervas daninhas.\r\nO momento mais divertido foi quando a tia Alberta adormeceu debaixo de uma árvore. A Marta e o Artur começaram a rir, rir sem parar, acordando a tia com as suas gargalhadas.\r\n', 'PT', '2', 'A horta', 'A horta', 'leitura_008_prof', 'leitura_008_prof', null, 'Silvia', 'NULO', null, null, 'Silvia', null, 'nuulo', '1', null, null, null, null, null);
INSERT INTO `dic2me_linhas` VALUES ('7', '7', 'A Rita é uma rã que sonha ser cantora e atleta. Ela vive num rio e passa os seus dias a treinar, pois segundo ela nada se consegue sem trabalho! \r\nAssim ao amanhecer faz corridas por entre as pedras com o pardal Rui. Pela noite dentro dá concertos nas margens do rio com o rouxinol Orlando.\r\nÀ tarde, a rã Rita adormece no seu nenúfar e até sonha com a sua brilhante carreira.\r\n', 'PT', '2', 'rã Rita', 'a rã Rita', 'leitura_007_prof', null, null, 'Silvia', 'nulo', null, null, 'Silvia', null, 'Silvia', '1', null, null, null, null, null);
INSERT INTO `dic2me_linhas` VALUES ('8', '8', 'A avó Jacinta foi passar cinco dias à cidade com a sua neta Celina. \r\nDurante estes dias, a Celina foi com a avó ao circo, ao cinema e ao centro comercial. Quando chegava da escola tinha sempre uma sobremesa especial à sua espera! Mas, o pior é que também tinha sopa de cebola…\r\nQuando a avó foi embora, a Celina passou uma semana a sonhar com toucinho do céu e bolo de cenoura!\r\n', 'PT', '2', 'uma avó especial', 'uma avó especial', 'leitura_008_prof.php', null, null, 'Silvia', 'nulo', null, null, 'Silvia', null, 'Silvia', '1', null, null, null, null, null);
INSERT INTO `dic2me_linhas` VALUES ('9', '9', 'Quando o inverno chega a Maria fica contente. Ela adora andar de guarda-chuva, de galochas e de ver as chaminés a deitar fumo. Já a Simone, a sua melhor amiga, não gosta nada de chuva nem de calçar botas de borracha.\r\nA Maria adora calçar chinelos quentinhos e beber chocolate quente à lareira. A Simone detesta usar cachecol e beber chá a fumegar.\r\nQuando o inverno acaba e chega a primavera, a Simone fica muito animada e a Maria muito chateada!\r\n', 'PT', '2', '6-	Quando o inverno chega', 'quando o inverno chega', 'leitura_009_prof.php', null, null, 'Silvia', 'nulo', null, null, 'Silvia', null, 'Silvia', '1', null, null, null, null, null);
INSERT INTO `dic2me_linhas` VALUES ('10', '10', 'Era uma vez um mágico que vivia num castelo gigantesco e encantado. \r\n Quando os adultos passavam por esse castelo viam uma casa como todas as outras com janelas, portas e feita em tijolos.\r\nSó as crianças conseguiam ver o verdadeiro castelo, feito de gelado de chocolate e com girafas de gomas.\r\n', 'PT', '2', 'O castelo encantado', 'O castelo encantado', 'leitura_010_prof.php', '2', null, 'Cláudia Baixinho', null, null, null, 'Silvia', null, null, '1', null, null, null, null, 'ge/ gi');
INSERT INTO `dic2me_linhas` VALUES ('11', '11', 'Há muitos anos atrás havia dinossauros no nosso planeta. \r\nOs dinossauros eram uns animais muito grandes e há quem diga que morreram por causa de uma queda de meteoritos.\r\n Hoje em dia, ainda há marcas destes animais. Espalhados pelo planeta há pegadas e fósseis de dinossauros. \r\n Apesar de já terem sido descobertas muitas pegadas e fósseis, ainda há muitos por descobrir.\r\n', 'PT', '2', 'No tempo dos dinossauros', 'No tempo dos dinossauros', 'leitura_011_prof.php', '2', null, 'Cláudia Baixinho', null, null, null, 'Silvia', null, null, '1', null, null, null, null, 'à/ há');
INSERT INTO `dic2me_linhas` VALUES ('12', '12', 'A Conceição e o João são dois bons amigos que não moram na mesma cidade mas que se costumam encontrar na festa de verão da aldeia dos seus pais.\r\nTodos os anos, os meninos adoram ir a essa festa porque se divertem com balões coloridos, comem algodão doce e cantam as canções lá da aldeia. É sempre uma animação! \r\nEste ano, os dois amigos estão muito entusiasmados porque sabem que irão atuar palhaços, músicos e malabaristas. Serão uns dias cheios de diversão! \r\n', 'PT', '2', 'A história dos amigos Conceição e João ', 'A história dos amigos Conceição e João ', 'leitura_012_prof.php', '2', null, 'Cláudia Baixinho', null, null, null, 'Silvia', null, null, '1', null, null, null, null, 'am/ ão');
INSERT INTO `dic2me_linhas` VALUES ('13', '13', 'A Cecília é uma menina que gosta muito de ir ao cinema com os seus tios: a Celeste e o Sebastião.\r\n O tio Sebastião tem um enorme sinal na cara e a tia Celeste adora flores, especialmente as açucenas. \r\n No sábado, antes de irem ao cinema, a Cecília foi almoçar a casa dos tios e comeu uma enorme taça de cerejas.\r\nA caminho do cinema, a tia passou um sinal vermelho e agora vai ter de pagar uma multa, mas o filme foi muito giro.\r\n \r\n', 'PT', '2', 'A Cecília e o cinema ', 'A Cecília e o cinema ', 'leitura_013_prof.php', '2', null, 'Cláudia Baixinho', null, null, null, 'Silvia', null, null, '1', null, null, null, null, 'ce/ ci');
INSERT INTO `dic2me_linhas` VALUES ('14', '14', ' Um certo dia, a Sara foi à papelaria da dona Maria e pediu uma caneta amarela ou dourada para o canário.\r\n - Para o canário? – perguntou-lhe admirada a dona Maria.\r\n - Sim dona Maria. – respondeu a Sara. - A Carla deu-me um desenho muito bonito e eu quero colori-lo. No desenho há vários pássaros: uma arara, uma coruja, um canário e um periquito. A caneta amarela ou dourada é para pintar o canário\r\n\r\n \r\n', 'PT', '2', 'Na papelaria da dona Maria', 'Na papelaria da dona Maria', 'leitura_014_prof.php', '2', null, 'Cláudia Baixinho', null, null, null, 'Silvia', null, null, '1', null, null, null, null, '…r…');
INSERT INTO `dic2me_linhas` VALUES ('15', '15', 'A minha colega Ester faz anos hoje e vamos ter festa na escola. \r\nA sua mãe fez um grande bolo de ananás e o Dinis, que gosta muito de ajudar, foi logo colocar o bolo na mesa.\r\nA professora colocou as sete velas no bolo para que a Ester as possa apagar. Vamos todos cantar os parabéns e bater palmas. E o melhor vai ser comer o bolo!\r\n\r\n\r\n \r\n', 'PT', '2', 'Na A festa de anos da Ester ', 'A festa de anos da Ester ', 'leitura_015_prof.php', '2', null, 'Cláudia Baixinho', null, null, null, 'Silvia', null, null, '1', null, null, null, null, 'as/ es/ is/ os/ us');
INSERT INTO `dic2me_linhas` VALUES ('16', '31', 'Estava a Dona Maria muito descansada a ouvir o rádio quando surgiu a seguinte notícia:\r\n “- Notícia de última hora! Desapareceu do Jardim Zoológico um hipopótamo! Enquanto o tratador estava a deixar a alimentação para a família de hipopótamos, o macho aproveitou a porta aberta do espaço reservado a estes animais e conseguiu, inclusivamente, fugir do recinto do Jardim Zoológico.\r\n Pede-se a quem avistar um hipopótamo a passear pelas ruas que não o tente travar, uma vez que se trata de um animal com um peso considerável e que pode causar graves danos com uma simples pisadela.\r\nEm caso de avistamento devem contactar, de imediato, os serviços do Jardim Zoológico, o número de emergência médica ou a nossa estação de rádio.”\r\nQual não foi o espanto da Dona Maria quando, após ter ouvido a notícia no rádio, se dirigiu à janela e viu o dito hipopótamo já rodeado pelos tratadores e pela polícia e assistiu ao vivo à captura do animal.\r\n', 'PT', '3', 'NOTÍCIA DE ÚLTIMA HORA', 'NOTÍCIA DE ÚLTIMA HORA', 'leitura_031_prof.php', '2', null, 'Cláudia Baixinho', null, null, null, 'Silvia', null, null, '1', null, null, null, null, 'naotem');
INSERT INTO `dic2me_linhas` VALUES ('24', '17', 'A Vanessa é uma menina com sete anos que sonhava ser pássaro. Por isso, montada na vassoura, passeava pela sala aos saltinhos.\r\n - Ah se eu fosse pássaro… - sonhava a pequena Vanessa.\r\n E passava os dias nisto.\r\n Até que um dia a mãe lhe respondeu:\r\n- Sossega Vanessa porque a vassoura não voa e as meninas não podem ser pássaro! Mas já que queres tanto voar, estas férias vamos dar um passeio de avião.\r\n\r\n\r\n \r\n', 'PT', '2', 'A menina que queria ser pássaro ', 'A menina que queria ser pássaro ', 'leitura_017_prof.php', '2', null, 'Cláudia Baixinho', null, null, null, 'Silvia', null, null, '1', null, null, null, null, 'ss');
INSERT INTO `dic2me_linhas` VALUES ('25', '33', 'Há uns tempos comecei a ver umas andorinhas a ir e vir do beirado do meu telhado mas nem me apercebi do que se estava a passar.\r\n No entanto, há umas semanas comecei a ouvir barulho de passarinhos sempre que ia à janela. Quando olhei para cima vi que estavam quatro passarinhos minúsculos dentro de um ninho de andorinha e que a mãe lhes estava a dar de comer.\r\n Comecei a acompanhar a azáfama daqueles pais para virem alimentar as suas crias e apaixonei-me por aquela família.\r\n Todos os dias ia dizer bom dia às andorinhas e ia várias vezes ver se estava tudo bem. Os filhotes foram crescendo a olhos vistos. Também pudera, estavam sempre a ser alimentados pelos pais. \r\nRapidamente as andorinhas se tornaram adultas e deixaram o ninho mas nunca mais as vou esquecer.\r\n\r\n', 'PT', '3', '.A FAMÍLIA QUE SE INSTALOU NA MINHA CASA', '.A FAMÍLIA QUE SE INSTALOU NA MINHA CASA', 'leitura_033_prof.php', '2', null, 'Cláudia Baixinho', null, null, null, 'Silvia', null, null, '1', null, null, null, null, 'naotem');
INSERT INTO `dic2me_linhas` VALUES ('26', '34', 'No mês de julho fiz oito anos e estava toda entusiasmada. Levantei-me pela manhã à espera de que os meus pais me dessem os parabéns e me enchessem de beijinhos, como de costume, mas isso não aconteceu.\r\n Os meus pais deram-me os bons dias e a minha mãe fez-me o pequeno -almoço mas nada de parabéns.\r\n Será que se esqueceram do meu aniversário? – pensei eu.\r\n Quando cheguei ao trabalho da mãe, para onde costumo ir quando estou de férias, fui confirmar no calendário qual era o dia. Não fosse eu estar enganada… E confirmava-se. Era mesmo o meu dia de anos.\r\n À hora de almoço saí com a mãe para ir almoçar e aí sim ia caindo para o lado com o espanto!\r\nFomos até a um jardim e tinha lá todos os meus amigos! Os meus pais tinham-me organizado uma festa surpresa com todas as pessoas de quem gosto imenso. Era um piquenique com muitas brincadeiras à mistura e foi um dia extraordinário.\r\n\r\n\r\n', 'PT', '3', 'UM DIA DE ANOS ESPECIAL', 'UM DIA DE ANOS ESPECIAL', 'leitura_034_prof.php', '2', null, 'Cláudia Baixinho', null, null, null, 'Silvia', null, null, '1', null, null, null, null, 'naotem');
INSERT INTO `dic2me_linhas` VALUES ('27', '35', 'Os golfinhos, embora pareçam peixes grandes, são mamíferos. Existem mais de trinta e cinco espécies destes animais que se dividem em dois grupos: os golfinhos de água doce e os golfinhos de água salgada. Os golfinhos de água doce apenas existem na América do Sul e na Ásia.\r\n O golfinho precisa de vir à superfície da água para respirar, recorrendo a um orifício que possui no alto da cabeça.\r\n Famosos pela inteligência e pelo gosto por brincadeiras, os golfinhos vivem em grupos que podem ter até duzentos golfinhos e utilizam sons para comunicarem.\r\n\r\n\r\n', 'PT', '3', 'OS GOLFINHOS', 'OS GOLFINHOS', 'leitura_035_prof.php', '2', null, 'Cláudia Baixinho', null, null, null, 'Silvia', null, null, '1', null, null, null, null, 'naotem');
INSERT INTO `dic2me_linhas` VALUES ('28', '36', 'Depois de ter ouvido a história do Pinóquio e de me ter sido apresentado o grilo falante, apeteceu-me aprender um pouco mais sobre os grilos.\r\n Peguei numa enciclopédia e fiquei a saber que o grilo é um inseto pequeno que, mesmo tendo asas, não consegue voar.\r\n Existem cerca de duas mil e quatrocentas espécies de grilos que vivem nas áreas quentes do mundo e que podem ser encontradas em campos, árvores e arbustos.\r\n Os grilos alimentam-se de plantas e são, normalmente, ativos durante a noite. Passam o dia escondidos e saem após o pôr do sol para procurarem comida.\r\nNormalmente são os machos que fazem aquele som característico dos grilos para atraírem as fêmeas. Porém, os grilos podem emitir sons diferentes de acordo com a finalidade\r\n\r\n\r\n', 'PT', '3', 'O GRILO', 'O GRILO', 'leitura_036_prof.php', '2', null, 'Cláudia Baixinho', null, null, null, 'Silvia', null, null, '1', null, null, null, null, 'naotem');
INSERT INTO `dic2me_linhas` VALUES ('29', '37', 'Os insetos formam o maior grupo de animais uma vez que cerca de setenta e cinco por cento de todos os animais são insetos.\r\n Os insetos são muito mais antigos no planeta Terra do que os seres humanos e existem, hoje em dia, cerca de um milhão de espécies conhecidas de insetos. Como exemplos de insetos temos: borboletas, formigas, moscas, gafanhotos e abelhas.\r\n Podemos encontrar insetos em qualquer parte do mundo pois eles conseguem sobreviver em todos os climas desde que tenham alimento disponível.\r\nA maioria dos insetos nasce de ovos e muitos deles são úteis aos seres humanos e a outros animais. Por um lado, alguns insetos alimentam-se de outros, ajudando a controlar pragas. Por outro lado, há insetos que servem de alimento a outros animais. Para além disso, alguns deles produzem produtos valiosos como o mel ou a seda.\r\n\r\n\r\n\r\n', 'PT', '3', 'OS INSETOS', 'OS INSETOS', 'leitura_037_prof.php', '2', null, 'Cláudia Baixinho', null, null, null, 'Silvia', null, null, '1', null, null, null, null, 'naotem');
INSERT INTO `dic2me_linhas` VALUES ('30', '38', 'Os lagartos são répteis com o corpo coberto de escamas e existem mais de três mil espécies de lagartos. \r\n São animais de sangue frio. Por isso, a maioria deles procura regiões quentes para viver.\r\nNa verdade, as lagartixas são pequenos lagartos conhecidos pela capacidade que possuem de andar em qualquer tipo de superfície mesmo que se trate de uma parede ou do teto. \r\n Uma das diferenças entre o lagarto e a lagartixa é que a maioria dos lagartos é ativa durante o dia e repousa à noite, enquanto que as lagartixas são exatamente o oposto.\r\nQuando, por algum motivo, um lagarto vê a sua cauda cortada, cresce-lhe uma nova. Aliás, quando os lagartos se sentem ameaçados por algum inimigo, a sua cauda desprende-se do corpo quando é tocada e fica a retorcer-se no chão, acabando por distrair a atenção do inimigo. Os lagartos aproveitam esta distração para fugir.\r\n\r\n\r\n\r\n\r\n', 'PT', '3', '.LAGARTO OU LAGARTIXA?', '.LAGARTO OU LAGARTIXA?', 'leitura_038_prof.php', '2', null, 'Cláudia Baixinho', null, null, null, 'Silvia', null, null, '1', null, null, null, null, 'naotem');
INSERT INTO `dic2me_linhas` VALUES ('31', '39', 'A língua é um órgão do corpo humano que se encontra dentro da boca e é constituída por músculos. \r\n Para muitos animais a língua ajuda a mastigar e a engolir os alimentos. Os músculos da parte da frente da língua distribuem os alimentos durante a mastigação e os de trás ajudam a engolir, empurrando a comida para o fundo da boca.\r\n Também é a língua o órgão responsável pelo sentido paladar uma vez que é ela, através das papilas gustativas, que permite sentir os sabores.\r\n A língua tem, ainda, um papel muito importante na fala, pois ajuda-nos a produzir muitos dos sons necessários.\r\nEste órgão pode desempenhar também outras funções em alguns animais. Por exemplo, os gatos e os cães usam-no para se limparem e os sapos recorrem à língua para apanhar insetos.\r\n\r\n\r\n\r\n\r\n\r\n', 'PT', '3', 'LÍNGUA', 'LÍNGUA', 'leitura_039_prof.php', '2', null, 'Cláudia Baixinho', null, null, null, 'Silvia', null, null, '1', null, null, null, null, 'naotem');
INSERT INTO `dic2me_linhas` VALUES ('32', '16', 'O Tomás é um rapaz que vive perto da foz de um rio. \r\nA semana passada, vestiu o seu casaco com capuz e foi com os pais visitar o seu avô. \r\nO petiz levava um cabaz com dez ananases para dar ao avô.\r\nO seu avô ficou feliz porque o ananás é o seu fruto preferido.\r\n\r\n\r\n \r\n', 'PT', '2', 'O Tomás e o seu cabaz ', 'O Tomás e o seu cabaz ', 'leitura_016_prof.php', '2', null, 'Cláudia Baixinho', null, null, null, 'Silvia', null, null, '1', null, null, null, null, 'az/ ez/ iz/ oz/ uz');
INSERT INTO `dic2me_linhas` VALUES ('34', '18', 'A Vanessa é uma menina com sete anos que sonhava ser pássaro. Por isso, montada na vassoura, passeava pela sala aos saltinhos.\r\n - Ah se eu fosse pássaro… - sonhava a pequena Vanessa.\r\n E passava os dias nisto.\r\n Até que um dia a mãe lhe respondeu:\r\n- Sossega Vanessa porque a vassoura não voa e as meninas não podem ser pássaro! Mas já que queres tanto voar, estas férias vamos Era uma vez uma família muito peculiar: o galo, a galinha e os seus pintainhos. \r\nUm dia, foram todos passear. No entanto, quando chegaram a casa, repararam que ninguém tinha a chave. E agora?\r\nTodos começaram a procurar a chave no chão. Mas nada…Onde estaria? \r\nProcuraram e procuraram até que o galo se lembrou que pela manhã tinha deixado a chave em cima do telhado e lá a foi buscar.\r\nMas que grande chatice!\r\n\r\n\r\n\r\n \r\n', 'PT', '2', 'A aventura com as chaves ', 'A aventura com as chaves ', 'leitura_018_prof.php', '2', null, 'Cláudia Baixinho', null, null, null, 'Silvia', null, null, '1', null, null, null, null, 'ch/ nh/');
INSERT INTO `dic2me_linhas` VALUES ('35', '19', 'Durante o verão, o Félix adora ir à praia. Um dos seus passatempos favoritos é apanhar conchas.\r\nUm dos dias, já o Félix tinha passeado na lancha do seu tio Xavier e saltado da prancha na piscina, quando começou a chover.\r\nParecia que nunca mais ia parar de chover. E, por isso, os tios resolveram apanhar um táxi e voltar a casa.\r\nAo final do dia, o Félix estava com febre e tosse por causa da chuva que tinha apanhado e a sua tia deu-lhe um xarope de cenoura para ver se o menino melhorava.\r\n\r\n\r\n\r\n\r\n \r\n', 'PT', '2', 'Um dia de verão ', 'Um dia de verão ', 'leitura_019_prof.php', '2', null, 'Cláudia Baixinho', null, null, null, 'Silvia', null, null, '1', null, null, null, null, 'x/ ch');
INSERT INTO `dic2me_linhas` VALUES ('36', '20', 'Num passeio com o avô Tomé pela sua quinta vi passar um coelho a correr e gritei:\r\n - Olha avô aquele deve ter fugido da coelheira!\r\n O meu avô sorriu e respondeu muito calmamente:\r\n - Não fiques preocupado que aquela não mora em nenhuma coelheira. Aquela vive em liberdade no campo. Já ouviste falar da história da lebre e da tartaruga?\r\n - Sim, claro que sim. Em que a tartaruga pachorrenta vence a lebre veloz.\r\n - Pois acabaste de ficar a conhecer uma lebre. As lebres e os coelhos são muito parecidos, mas geralmente as lebres são maiores e mais pesadas do que os coelhos. Para além disso, as lebres têm orelhas mais compridas e patas traseiras maiores do que os coelhos.\r\n Nunca tinha visto nenhuma lebre perto de mim, mas agora já sei que existem a sério e não apenas nas histórias.\r\n\r\n\r\n\r\n\r\n\r\n \r\n', 'PT', '3', 'O COELHO EM FUGA', 'O COELHO EM FUGA ', 'leitura_020_prof.php', '2', null, 'Cláudia Baixinho', null, null, null, 'Silvia', null, null, '1', null, null, null, null, 'naotem');
INSERT INTO `dic2me_linhas` VALUES ('37', '21', 'Hoje foi, finalmente, o dia da apresentação da peça de teatro para a qual andamos a ensaiar há tanto tempo.\r\n A ideia surgiu depois de termos ido visitar um teatro e, com a ajuda da professora, escrevemos o texto, decidimos quais seriam as personagens e dividimos as tarefas entre todos os elementos da turma. Sim, porque para que uma peça de teatro tenha sucesso não importa só termos atores e atrizes, é preciso pensarmos em que espaço vai ser apresentado o espetáculo, quais os cenários a construir, os adereços, as roupas e, neste caso, até tivemos de realizar os convites que entregámos aos pais e aos outros professores e turmas da escola.\r\nAntes de entrar em cena, mal conseguia aguentar a emoção por ir apresentar a tanta gente o resultado do nosso trabalho. Mas respirei fundo, enchi-me de coragem e, no final, correu lindamente. Todos nós estivemos muito bem e o espetáculo foi um sucesso.\r\n\r\n\r\n\r\n\r\n\r\n \r\n', 'PT', '3', 'UM DIA COMO ESTRELA DE ESPETÁCULO', 'UM DIA COMO ESTRELA DE ESPETÁCULO', 'leitura_021_prof.php', '2', null, 'Cláudia Baixinho', null, null, null, 'Silvia', null, null, '1', null, null, null, null, 'naotem');
INSERT INTO `dic2me_linhas` VALUES ('38', '22', 'Com as férias de verão veio uma experiência nova na minha vida. Os avós já estão velhotes e já não conseguem tomar conta de mim e os pais não me podem levar para o trabalho com eles, por isso, este ano, vou para uma colónia de férias.\r\nMas a experiência vai ser ainda mais radical porque vou estar durante quinze dias seguidos fora da minha casa e longe dos meus pais. Não posso negar que estou curiosa, mas também sei que vou ficar cheia de saudades. Nunca estive tantos dias longe deles. Mesmo quando ficava nos avós, os pais não passavam um fim de semana sem me ir ver.\r\nPor um lado, acho que vai ser muito bom porque vou fazer novos amigos e porque sei que vamos fazer atividades diferentes, mas, por outro lado, estou tão nervosa. Veremos como vai correr.\r\n\r\n\r\n\r\n\r\n\r\n\r\n \r\n', 'PT', '3', 'A COLÓNIA DE FÉRIAS', 'A COLÓNIA DE FÉRIAS', 'leitura_022_prof.php', '2', null, 'Cláudia Baixinho', null, null, null, 'Silvia', null, null, '1', null, null, null, null, 'naotem');
INSERT INTO `dic2me_linhas` VALUES ('39', '23', 'Hoje foi então o meu primeiro dia na colónia de férias. O momento em que os meus pais se foram embora foi muito complicado porque fiquei a pensar que queria ir com eles também. Mas depois resolvi que tinha de aproveitar aqueles quinze dias e tudo o que tinham para me oferecer.\r\n Os monitores foram muito simpáticos e mostraram-nos os quartos para que pudéssemos arrumar as nossas coisas nos armários.\r\n Eu fiquei num quarto enorme com mais três raparigas da mesma idade que eu. Dentro do quarto existem dois beliches e estivemos a decidir quem ficava nas camas de cima e nas de baixo.\r\n Depois de arrumarmos as nossas coisas e de falarmos um bocadinho sobre cada uma de nós, chegou o momento de começarmos as atividades e fizemos uma caça ao tesouro para ficarmos a conhecer todos os espaços da colónia.\r\n Todos me parecem muito simpáticos e acho que vou passar aqui os melhores quinze dias da minha vida.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n \r\n', 'PT', '3', 'O PRIMEIRO DIA NA COLÓNIA DE FÉRIAS', 'O PRIMEIRO DIA NA COLÓNIA DE FÉRIAS', 'leitura_023_prof.php', '2', null, 'Cláudia Baixinho', null, null, null, 'Silvia', null, null, '1', null, null, null, null, 'naotem');
INSERT INTO `dic2me_linhas` VALUES ('40', '24', 'A minha avó mora no campo e tem um enorme quintal. Como tem sempre a porta da cozinha aberta e é por lá que costumamos entrar, tem umas fitas para impedir que a casa se encha de moscas.\r\nNo outro dia, estava eu muito descansada a entrar em casa, quando afasto as fitas e dou de caras com um gafanhoto enorme. Verde e monstruoso lá estava ele a olhar para mim! Soltei um grito e larguei logo as fitas mas não fui a tempo.\r\nO gafanhoto saltou para o meu braço e eu gritei ainda mais. Nunca gostei de gafanhotos! Fazem-me impressão! Comecei a sacudir o braço, mas quanto mais sacudia, mais ele se agarrava.\r\nA minha avó, ao ouvir-me gritar daquela forma, veio ver o que se passava e pediu-me que me acalmasse. Muito calmamente retirou o bicho do meu braço, soltou-o e explicou-me que os gafanhotos não fazem mal nenhum e que quanto mais sacudia o braço mais ele se agarrava porque estava com medo de cair.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n \r\n', 'PT', '3', '. ENCONTRO IMEDIATO COM UM GAFANHOTO', '. ENCONTRO IMEDIATO COM UM GAFANHOTO', 'leitura_024_prof.php', '2', null, 'Cláudia Baixinho', null, null, null, 'Silvia', null, null, '1', null, null, null, null, 'naotem');
INSERT INTO `dic2me_linhas` VALUES ('41', '25', 'O cavalo-marinho é um peixe diferente com a cabeça parecida com a de um cavalo. Há mais de vinte espécies de cavalos-marinhos mas todos vivem em águas mornas e calmas.\r\n Os cavalos-marinhos são pequenos, medindo entre quatro e trinta centímetros e têm o corpo coberto por anéis ósseos em vez de escamas.\r\n Os cavalos-marinhos movimentam-se na posição vertical, mas não são grandes nadadores. \r\n A sua reprodução é diferente da dos outros animais. A fêmea coloca os ovos numa bolsa abaixo da cauda do macho e é o macho que transporta os ovos até os filhotes nascerem.\r\nOs cavalos-marinhos são animais muito engraçados e há pessoas que têm cavalos-marinhos em aquários.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n \r\n', 'PT', '3', 'CAVALO-MARINHO', 'CAVALO-MARINHO', 'leitura_025_prof.php', '2', null, 'Cláudia Baixinho', null, null, null, 'Silvia', null, null, '1', null, null, null, null, 'naotem');
INSERT INTO `dic2me_linhas` VALUES ('42', '26', 'O crocodilo é um animal carnívoro e é o maior membro do grupo dos répteis. Existem mais de dez espécies de crocodilos que variam muito em tamanho.\r\n Podemos encontrar crocodilos em alguns locais da Ásia, da África, da Austrália e do continente americano. Muitos dos crocodilos vivem em locais de água doce (pântanos, lagos e rios) nas regiões quentes, mas algumas espécies vivem no oceano. \r\n Embora passem muito tempo na água, os crocodilos também andam em terra.\r\n Os crocodilos têm a pele dura composta por grandes placas e escamas. Os seus olhos, orelhas e narinas situam-se no topo da cabeça, permitindo que o crocodilo veja, ouça e respire enquanto a maior parte do seu corpo flutua debaixo de água. Assim, consegue aproximar-se das suas presas sem que estas se apercebam.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n \r\n', 'PT', '3', 'O CROCODILO', 'O CROCODILO', 'leitura_026_prof.php', '2', null, 'Cláudia Baixinho', null, null, null, 'Silvia', null, null, '1', null, null, null, null, 'naotem');
INSERT INTO `dic2me_linhas` VALUES ('43', '27', 'A palavra dinossauro teve origem em palavras gregas que significavam “lagarto terrível” e alguns dinossauros eram criaturas enormes e medonhas.\r\n Foram os principais animais do planeta Terra durante muito tempo e eram répteis.\r\n Já estão extintos há milhões de anos. Apenas sabemos que existiram e como eram porque fomos encontrando fósseis.\r\n Havia dinossauros de todos os tamanhos, desde uns mais pequenos do que uma galinha, a outros que eram dez vezes maiores e mais pesados do que os elefantes.\r\n Pensa-se que todos os dinossauros fossem ovíparos.\r\n Ainda não se tem a certeza do motivo que terá conduzido à extinção dos dinossauros. Alguns cientistas defendem que se deveu a um aquecimento e outros a um arrefecimento enorme do planeta.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n \r\n', 'PT', '3', 'OS DINOSSAUROS', 'OS DINOSSAUROS', 'leitura_027_prof.php', '2', null, 'Cláudia Baixinho', null, null, null, 'Silvia', null, null, '1', null, null, null, null, 'naotem');
INSERT INTO `dic2me_linhas` VALUES ('44', '28', 'Os elefantes são os maiores animais terrestres e dividem-se em três espécies: o elefante de savana africano, o elefante de floresta africano e o elefante asiático.\r\n A pele dos elefantes é grossa, rugosa e pouco peluda e a sua cor varia entre o cinzento e o castanho. A sua tromba é uma extensão do nariz e do lábio superior e é utilizada para levar os alimentos e a água à boca. \r\n Os elefantes migram em busca de alimentos e só comem plantas. Costumam descansar durante as horas mais quentes do dia e à noite dormem poucas horas.\r\n Vivem, em média, sessenta a setenta anos. Muitos elefantes são mortos devido ao valor elevado do marfim das suas presas.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n \r\n', 'PT', '3', 'OS ELEFANTES', 'OS ELEFANTES', 'leitura_028_prof.php', '2', null, 'Cláudia Baixinho', null, null, null, 'Silvia', null, null, '1', null, null, null, null, 'naotem');
INSERT INTO `dic2me_linhas` VALUES ('45', '30', 'A semana passada fui ao Oceanário de Lisboa com os meus pais. Tal como o próprio nome indica, o Oceanário tenta mostrar-nos algumas das espécies que existem em cada um dos oceanos. É como se fosse um Jardim Zoológico mas com animais que vivem na água.\r\n A visita torna-se engraçada porque vemos muitos dos peixes que só estamos habituados a ver no prato. Esses peixes, naquele aquário gigante, estão vivinhos e no seu habitat natural.\r\n Por exemplo, é divertido ver o bacalhau. Eu só o conhecia espalmado e salgado, mas afinal é um peixe com um formato semelhante ao dos outros. \r\n Também foi muito interessante ver peixes como a garoupa ou a raia. Aliás, as raias adoram andar coladinhas ao vidro. Parece que estão a pedir festinhas.\r\n Adorei esta visita e a quem estiver na dúvida, vale mesmo a pena ir até ao Oceanário!\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n \r\n', 'PT', '3', 'UMA VISITA AO OCEANÁRIO', 'UMA VISITA AO OCEANÁRIO', 'leitura_030_prof.php', '2', null, 'Cláudia Baixinho', null, null, null, 'Silvia', null, null, '1', null, null, null, null, 'naotem');
INSERT INTO `dic2me_linhas` VALUES ('46', '31', 'Estava a Dona Maria muito descansada a ouvir o rádio quando surgiu a seguinte notícia:\r\n “- Notícia de última hora! Desapareceu do Jardim Zoológico um hipopótamo! Enquanto o tratador estava a deixar a alimentação para a família de hipopótamos, o macho aproveitou a porta aberta do espaço reservado a estes animais e conseguiu, inclusivamente, fugir do recinto do Jardim Zoológico.\r\n Pede-se a quem avistar um hipopótamo a passear pelas ruas que não o tente travar, uma vez que se trata de um animal com um peso considerável e que pode causar graves danos com uma simples pisadela.\r\nEm caso de avistamento devem contactar, de imediato, os serviços do Jardim Zoológico, o número de emergência médica ou a nossa estação de rádio.”\r\nQual não foi o espanto da Dona Maria quando, após ter ouvido a notícia no rádio, se dirigiu à janela e viu o dito hipopótamo já rodeado pelos tratadores e pela polícia e assistiu ao vivo à captura do animal.\r\n', 'PT', '3', 'NOTÍCIA DE ÚLTIMA HORA', 'NOTÍCIA DE ÚLTIMA HORA', 'leitura_031_prof.php', '2', null, 'Cláudia Baixinho', null, null, null, 'Silvia', null, null, '1', null, null, null, null, 'naotem');
INSERT INTO `dic2me_linhas` VALUES ('47', '33', 'Há uns tempos comecei a ver umas andorinhas a ir e vir do beirado do meu telhado mas nem me apercebi do que se estava a passar.\r\n No entanto, há umas semanas comecei a ouvir barulho de passarinhos sempre que ia à janela. Quando olhei para cima vi que estavam quatro passarinhos minúsculos dentro de um ninho de andorinha e que a mãe lhes estava a dar de comer.\r\n Comecei a acompanhar a azáfama daqueles pais para virem alimentar as suas crias e apaixonei-me por aquela família.\r\n Todos os dias ia dizer bom dia às andorinhas e ia várias vezes ver se estava tudo bem. Os filhotes foram crescendo a olhos vistos. Também pudera, estavam sempre a ser alimentados pelos pais. \r\nRapidamente as andorinhas se tornaram adultas e deixaram o ninho mas nunca mais as vou esquecer.\r\n\r\n', 'PT', '3', '.A FAMÍLIA QUE SE INSTALOU NA MINHA CASA', '.A FAMÍLIA QUE SE INSTALOU NA MINHA CASA', 'leitura_033_prof.php', '2', null, 'Cláudia Baixinho', null, null, null, 'Silvia', null, null, '1', null, null, null, null, 'naotem');
INSERT INTO `dic2me_linhas` VALUES ('48', '38', 'Os lagartos são répteis com o corpo coberto de escamas e existem mais de três mil espécies de lagartos. \r\n São animais de sangue frio. Por isso, a maioria deles procura regiões quentes para viver.\r\nNa verdade, as lagartixas são pequenos lagartos conhecidos pela capacidade que possuem de andar em qualquer tipo de superfície mesmo que se trate de uma parede ou do teto. \r\n Uma das diferenças entre o lagarto e a lagartixa é que a maioria dos lagartos é ativa durante o dia e repousa à noite, enquanto que as lagartixas são exatamente o oposto.\r\nQuando, por algum motivo, um lagarto vê a sua cauda cortada, cresce-lhe uma nova. Aliás, quando os lagartos se sentem ameaçados por algum inimigo, a sua cauda desprende-se do corpo quando é tocada e fica a retorcer-se no chão, acabando por distrair a atenção do inimigo. Os lagartos aproveitam esta distração para fugir.\r\n\r\n\r\n\r\n\r\n', 'PT', '3', 'LAGARTO OU LAGARTIXA?', '.LAGARTO OU LAGARTIXA?', 'leitura_038_prof.php', '2', null, 'Cláudia Baixinho', null, null, null, 'Silvia', null, null, '1', null, null, null, null, 'naotem');
INSERT INTO `dic2me_linhas` VALUES ('49', '33', 'Há uns tempos comecei a ver umas andorinhas a ir e vir do beirado do meu telhado mas nem me apercebi do que se estava a passar.\r\n No entanto, há umas semanas comecei a ouvir barulho de passarinhos sempre que ia à janela. Quando olhei para cima vi que estavam quatro passarinhos minúsculos dentro de um ninho de andorinha e que a mãe lhes estava a dar de comer.\r\n Comecei a acompanhar a azáfama daqueles pais para virem alimentar as suas crias e apaixonei-me por aquela família.\r\n Todos os dias ia dizer bom dia às andorinhas e ia várias vezes ver se estava tudo bem. Os filhotes foram crescendo a olhos vistos. Também pudera, estavam sempre a ser alimentados pelos pais. \r\nRapidamente as andorinhas se tornaram adultas e deixaram o ninho mas nunca mais as vou esquecer.\r\n\r\n', 'PT', '3', '.A FAMÍLIA QUE SE INSTALOU NA MINHA CASA', 'A FAMÍLIA QUE SE INSTALOU NA MINHA CASA', 'leitura_033_prof.php', '2', null, 'Cláudia Baixinho', null, null, null, 'Silvia', null, null, '1', null, null, null, null, 'naotem');
SET FOREIGN_KEY_CHECKS=1;
