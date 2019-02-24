funciona

CREATE TABLE `dic2me_prof_portugal` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(150) CHARACTER SET utf8 NOT NULL,
  `entidade_que_apresentou` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `id_red_vendedoresdic2me` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `opiniaodi2me` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `socionumero` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `codigointernoprofessor` bigint(20) DEFAULT NULL,
  `recomendar` varchar(9) CHARACTER SET utf8 DEFAULT NULL,
  `quantosalunos` varchar(9) CHARACTER SET utf8 DEFAULT NULL,
  `contacto` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(201) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `socio` varchar(101) CHARACTER SET utf8 DEFAULT NULL,
  `pass` varchar(201) CHARACTER SET utf8 DEFAULT NULL,
  `datainscricao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pais` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `IP` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  `activo_servicos` tinyint(1) DEFAULT NULL,
  `NIF` varchar(201) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `cod_escola` varchar(201) CHARACTER SET utf8 DEFAULT NULL,
  `cod_escola2` varchar(201) CHARACTER SET utf8 DEFAULT NULL,
  `codigo_encrip` varchar(451) CHARACTER SET utf8 DEFAULT NULL,
  `escola` varchar(9) CHARACTER SET utf8 DEFAULT NULL,
  `ano_lectivo` varchar(9) CHARACTER SET utf8 DEFAULT NULL,
  `cidade` varchar(90) CHARACTER SET utf8 DEFAULT NULL,
  `passnormal` varchar(13) COLLATE utf8_unicode_ci DEFAULT '',
  PRIMARY KEY (`id`,`NIF`),
  UNIQUE KEY `nif` (`NIF`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


##################################################LIXO
drop table dic2me_cookies_testes;
CREATE TABLE `dic2me_cookies_testes` (
  `dataregisto` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_cookie` varchar(50) COLLATE utf8_unicode_ci DEFAULT '',
  `nif` varchar(50)   DEFAULT '',
  `escolaid` varchar(50) COLLATE utf8_unicode_ci DEFAULT '',
  `pass` varchar(50) COLLATE utf8_unicode_ci DEFAULT '',
  `prof` tinyint(4) DEFAULT NULL,
  `aluno` tinyint(4) DEFAULT NULL,
  `ip` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT  COLLATE=utf8_unicode_ci;

 select codigointernoprofessor from dic2me_prof_portugal_testes where NIF in (select nif from dic2me_cookies_testes where id_cookie='1512088327' and escolaid='171773' );