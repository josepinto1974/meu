nao funciona, mas devia

Resultado de uma query:
mysql> select codigointernoprofessor from dic2me_prof_portugal_testes where NIF in (select nif from dic2me_cookies_lixo where id_cookie='1512088327' and escolaid='171773' );select codigointernoprofessor from dic2me_prof_portugal_testes where NIF in (select nif from dic2me_cookies_lixo where id_cookie='1512088327' and escolaid='171773' );
ERROR 1267 (HY000): Illegal mix of collations (utf8_unicode_ci,IMPLICIT) and (utf8_general_ci,IMPLICIT) for operation '='



drop table dic2me_cookies_lixo;
CREATE TABLE `dic2me_cookies_lixo` (
  `dataregisto` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_cookie` varchar(50) COLLATE utf8_unicode_ci DEFAULT '',
  `nif` varchar(50) CHARACTER SET utf8 DEFAULT '',
  `escolaid` varchar(50) COLLATE utf8_unicode_ci DEFAULT '',
  `pass` varchar(50) COLLATE utf8_unicode_ci DEFAULT '',
  `prof` tinyint(4) DEFAULT NULL,
  `aluno` tinyint(4) DEFAULT NULL,
  `ip` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT  COLLATE=utf8_unicode_ci;

INSERT INTO `dic2me_cookies_lixo`(id_cookie,nif,escolaid,pass,prof,aluno,ip) VALUES ('1512088327','221283994', '171773','1','1','1','1');

INSERT INTO `dic2me_cookies_testes`(id_cookie,nif,escolaid,pass,prof,aluno,ip) VALUES ('1512088327','221283994', '171773','1','1','1','1');
 Ferreira','0',NULL,'0',NULL,55440,'0',NULL,NULL,'rgaferreira@gmail.com',NULL,'5c5f2240b7eb7782804a059b01cde1c59ee2ff56','2017-04-04 13:18:56','/','/',NULL,NULL,'221283994','171773',NULL,NULL,NULL,NULL,'Lisbon');

 select codigointernoprofessor from dic2me_prof_portugal_testes where NIF in (select nif from dic2me_cookies_lixo where id_cookie='1512088327' and escolaid='171773' );
 
 
 




DROP TABLE IF EXISTS `dic2me_prof_portugal dic2me_prof_portugal_testes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dic2me_prof_portugal_testes` (
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
  `nif` varchar(50)  DEFAULT '',
  `cod_escola` varchar(201) CHARACTER SET utf8 DEFAULT NULL,
  `cod_escola2` varchar(201) CHARACTER SET utf8 DEFAULT NULL,
  `codigo_encrip` varchar(451) CHARACTER SET utf8 DEFAULT NULL,
  `escola` varchar(9) CHARACTER SET utf8 DEFAULT NULL,
  `ano_lectivo` varchar(9) CHARACTER SET utf8 DEFAULT NULL,
  `cidade` varchar(90) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`,`NIF`),
  UNIQUE KEY `nif` (`NIF`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT;
/*!40101 SET character_set_client = @saved_cs_client */;
