20_2

ALTER TABLE dic2me_turma_prof_escola
add COLUMN idioma TINYINT;

ALTER TABLE dic2me_prof_portugal add COLUMN sucesso TINYINT;


#####
18-2-2018

drop table dic2me2_registo_logs;
CREATE TABLE `dic2me2_registo_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `funcao` varchar(50) CHARACTER SET utf8  DEFAULT '',
  `ip` varchar(50) CHARACTER SET utf8  DEFAULT '',	  
		`nif`  varchar(40) CHARACTER SET utf8 DEFAULT '',
		`pais` varchar(50) CHARACTER SET utf8  DEFAULT '',
		`cidade` varchar(50) CHARACTER SET utf8  DEFAULT '',
		`SO` varchar(50) CHARACTER SET utf8  DEFAULT '',
  `dataregisto` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




#####################################################################################
update dic2me_linhas set url='A_GALINHA2_LEITURA.MP3' where id_linha=1;
update dic2me_linhas set url='o_coelho.MP3' where id_linha=2;
 update dic2me_linhas set url='RATO_RATAO_grande.MP3' where id_linha=3;
 
 update dic2me_linhas set url='A_Segunda_Feira_da_Sara_grande.MP3' where id_linha=4;
 
 update dic2me_linhas set url='A_horta_grande.MP3' where id_linha=6;
 
 update dic2me_linhas set url='a_ra_rita_grande.MP3' where id_linha=7;
 
 update dic2me_linhas set url='Uma_avo_especial_grande.MP3' where id_linha=8;
 
 update dic2me_linhas set url='Quando_o_Inverno_chega_grande.MP3' where id_linha=9;
 
 update dic2me_linhas set url='O_castelo_encantado_grande.MP3' where id_linha=10;
 
 select id_linha, url, id_livro_texto, ano descricao from dic2me_linhas where id_linha=11;
 
  
 
  update dic2me_linhas set url='A_historia_dos_amigos_Conceicaoo_e_Joao.MP3' where id_linha=12;
  
  

  update dic2me_linhas set url='O_Tomas_e_o_seu_cabaz.MP3' where id_linha=16;
  
  update dic2me_linhas set url='A_menina_que_queria_ser_passaro.MP3' where id_linha=17;

  
    update dic2me_linhas set url='Um_dia_de_verao.MP3' where id_linha=19;
	
    update dic2me_linhas set url='UM_DIA_COMO_ESTRELA_DE_ESPETACULO.MP3' where id_linha=21;
	
	update dic2me_linhas set url='A_COLONIA_DE_FERIAS.MP3' where id_linha=22;
	
	update dic2me_linhas set url='A_COLONIA_DE_FERIAS.MP3' where id_linha=22;
	
	
	
		update dic2me_linhas set url='O_PRIMEIRO_DIA_NA_COLONIA_DE_FERIAS.MP3' where id_linha=23;
		
			update dic2me_linhas set url='UMA_VISITA_AO_OCEANARIO_grande.MP3' where id_linha=29;
	
	
	ALTER TABLE dic2me_TPC
add COLUMN dia TINYINT;
	

		ALTER TABLE dic2me_TPC
add COLUMN mes TINYINT;

	ALTER TABLE dic2me_TPC
add COLUMN ano_calendario TINYINT;

ALTER TABLE dic2me_temporaria_erros_ditados
add COLUMN massivo TINYINT;



limpar em PRD:

delete from dic2me_palavras_individuais_PORTUGUES_ultima;

delete from itgp_TT_tecnicos ; delete from dic2me_vendedores_lixo_apaga25577 ; delete from dic2me_vendedores_lixo_apaga2 ; delete from dic2me_vendedores_lixo_apaga ; delete from dic2me_vendedores_lixo

delete from dic2me_temporaria_erros_ditados_LIX ; delete from dic2me_temporaria_erros_ditados_LIXUSS ; delete from dic2me_temporaria_erros_ditados_lixo ; delete from dic2me_temporaria_erros_ditadoshh;

drop table itgp_ip_phone;

###TEXTOS4 ano
INSERT INTO dic2me_linhas (id_livro_texto, idioma, ano, nome, descricao, `file`, url, redatora, patrocinador, leitora, escola_autor, nivel, linha_texto,casosleitura) VALUES (134, 'PT', '4', 'D. DINIS', 'D. DINIS', 'DINIS.MP3', 'DINIS.MP3', 'claudia baixinho', '0', 'silvia', '0', '1', 'D. Dinis, para além de ter sido rei e de se ter preocupado com a agricultura, foi também um grande poeta português, escrevendo mais de cem poemas e as músicas que os acompanhavam, uma vez que na época de D. Dinis a poesia era cantada por trovadores. Daí que D. Dinis tenha ficado conhecido como o rei poeta ou o rei lavrador.\r\nD. Dinis era filho de D. Afonso III e de D. Beatriz e nasceu em Lisboa, no ano de 1261.\r\nEm 1282 casou-se com D. Isabel de Aragão. \r\nD. Dinis era um grande defensor da língua portuguesa, como tal fundou em Lisboa a primeira universidade portuguesa e decretou que todos os documentos oficiais passariam a ser escritos em português e não em latim como era prática comum.\r\nD. Isabel preocupava-se muito em ajudar os pobres e, como tal, era muito amada pelo seu povo. Atribuíram-lhe vários milagres, sendo o mais famoso o milagre das rosas. D. Isabel ficou conhecida como rainha Santa Isabel.\r\nD. Dinis foi o responsável pela plantação do pinhal de Leiria e também mandou plantar vinhas e pomares. Para além disso, atribuiu algumas herdades.\r\nO rei D. Dinis também quis desenvolver o comércio, criando as Feiras Francas, feiras nas quais os vendedores podiam vender os seus produtos sem terem de pagar imposto ao rei.\r\nD. Dinis e D. Isabel foram pais de D. Constança e de D. Afonso, futuro rei D. Afonso IV. \r\n','0');

INSERT INTO dic2me_linhas (id_livro_texto, idioma, ano, nome, descricao, `file`, url, redatora, patrocinador, leitora, escola_autor, nivel, linha_texto,casosleitura) VALUES (135, 'PT', '4', 'A excelência dos livros', '5.1 A EXCELÊNCIA DOS LIVROS', 'A_EXCELENCIA_DOS_LIVROS.MP3', 'A_EXCELENCIA_DOS_LIVROS.MP3', 'claúdia baixinho', '0', '0', '0', '1', 'Num país distante, o Presidente da República considerava os livros objetos de excelência. Segundo ele, ninguém podia viver sem ler livros, porque uma pessoa não podia ser ignorante e não saber que havia livros que ensinavam coisas tão importantes como: a felicidade, a tolerância, a justiça, o amor e a consciência ambiental. \r\nHavia também livros que informavam como se podia tratar de pessoas que sofriam de impaciência ou arrogância! Para não falar dos livros de poesia que ele considerava a “ciência” das palavras. \r\n- O nosso país precisa de dar aos livros a devida importância! - gritou um dia o Presidente, durante um discurso. \r\nEntão, decidiu enviar, com urgência, uma caixa cheia de livros para cada residência do seu país. Quando os habitantes abriram as caixas, para além de livros, encontraram um bilhete que tinha escrito: “Ler é uma emergência nacional! \r\n','0'); 

INSERT INTO dic2me_linhas (id_livro_texto, idioma, ano, nome, descricao, `file`, url, redatora, patrocinador, leitora, escola_autor, nivel, linha_texto,casosleitura) VALUES (136, 'PT', '4', 'D. AFONSO HENRIQUES ', 'AFONSO_HENRIQUES.MP3', 'AFONSO_HENRIQUES.MP3', '4.9.D_AFONSO_HENRIQUES.MP3', '0', '0', '0', '0', '1', 'D. Afonso Henriques foi o primeiro rei de Portugal. Filho do conde D. Henrique de Borgonha e de D. Teresa, nasceu por volta do ano de 1109 no Condado Portucalense que se situava entre o rio Minho e o sul de Coimbra. Este território tinha o nome de condado porque era um pedaço de terra que tinha sido cedido a um conde.\r\n Depois da morte do seu pai, D. Afonso Henriques ficou entregue aos cuidados do seu aio, Egas Moniz. Um aio era a pessoa responsável pela educação das crianças das famílias nobres.\r\n Com treze anos, D. Afonso Henriques armou-se cavaleiro a si próprio na catedral de Zamora. Este foi um ato de grande coragem, pois só os reis podiam escolher quem queriam para cavaleiros.\r\n Em 1128 D. Afonso Henriques lutou contra as tropas da sua mãe na Batalha de São Mamede, perto de Guimarães.\r\n Em 1139, na Batalha de Ourique, após a derrota dos mouros, D. Afonso Henriques foi aclamado rei pelas suas tropas.\r\n Durante o seu reinado construíram-se muitos castelos e fortalezas para defender os territórios que se iam conquistando aos mouros.\r\n Em 1143, D. Afonso Henriques assinou o tratado de Zamora para garantir a independência de Portugal face ao reino de Leão e Castela. Mas só em 1179 é que Portugal foi reconhecido, pelo Papa Alexandre III através de uma Bula, como um reino independente e D. Afonso Henriques como rei.\r\n','0'); 

INSERT INTO dic2me_linhas (id_livro_texto, idioma, ano, nome, descricao, `file`, url, redatora, patrocinador, leitora, escola_autor, nivel, linha_texto,casosleitura) VALUES (137, 'pt', '4', 'PORTUGAL', 'PORTUGAL.mp3', 'PORTUGAL.mp3', 'PORTUGAL.mp3', '0', '0', '0', '0', '0', 'Portugal localiza-se na extremidade mais ocidental do continente europeu. Os arquipélagos da Madeira e dos Açores também fazem parte de Portugal, embora sejam regiões autónomas e possuam governos regionais. \r\nA capital portuguesa é Lisboa e outras cidades importantes do nosso país são: Porto, Coimbra e Braga. Os portugueses foram o primeiro povo europeu a enfrentar o mar para partir à descoberta de novos territórios.\r\nPortugal é famoso internacionalmente pelos vinhos do Porto e da Madeira e também o era graças a outras culturas como a da batata, do tomate e da azeitona. No entanto, hoje em dia, a agricultura deixou de ter um papel tão importante na economia portuguesa.\r\nAtualmente é o turismo que desempenha um papel importantíssimo e o Algarve ocupa lugar de destaque, recebendo muitos turistas de outros países, sobretudo durante o verão.\r\nAo nível da indústria, a cortiça ocupa o lugar cimeiro, sendo o produto português mais exportado.\r\nPortugal é também conhecido internacionalmente pela sua gastronomia, sobretudo pela doçaria conventual, confecionada à base de gemas de ovo. Nos conventos, as claras eram utilizadas pelas freiras para engomar os seus hábitos e chapéus, por isso aproveitavam as gemas para cozinhar.\r\nO ponto alto da História do nosso país corresponde ao período das Descobertas durante o qual Portugal foi uma potência europeia, desafiando os mares, descobrindo novos territórios e expandindo o seu domínio por quatro continentes.\r\n','0');


INSERT INTO dic2me_linhas (id_livro_texto, idioma, ano, nome, descricao, `file`, url, redatora, patrocinador, leitora, escola_autor, nivel, linha_texto,casosleitura) VALUES (138, 'PT', '4', 'O QUE FAZER EM CASO DE SISMO', 'O QUE FAZER EM CASO DE SISMO', 'O_QUE_FAZER_EM_CASO_DE_SISMO.MP3', 'O_QUE_FAZER_EM_CASO_DE_SISMO.MP3', 'claúdia baixinho', '0', 'silvia', '0', '1', 'Alguns sismos, embora sejam detetados e medidos com aparelhos que os cientistas possuem, não são sentidos por nós. Outros, no entanto, são muito fortes fazendo as paredes tremerem, árvores caírem e provocando danos significativos em áreas residenciais e, às vezes, até dando origem à morte de pessoas. Podem cair edifícios, estradas e pontes e podem ocorrer incêndios provocados pelo rebentamento de tubagens de gás ou de fios elétricos caídos ou estragados.\r\n Durante um sismo, em primeiro lugar é preciso manter a calma. O mais importante é baixarmo-nos sobre os joelhos e proteger a cabeça e o pescoço com as mãos e os braços. Por último, aguardamos que a terra pare de tremer.\r\nSe estivermos nos andares mais altos de um edifício não nos devemos precipitar para as escadas nem utilizar o elevador. Neste caso, o que temos a fazer é abrigarmo-nos no vão de uma porta interior, nos cantos das divisões da casa ou debaixo de uma mesa ou cama. Temos de nos manter afastados de janelas e espelhos e é preciso ter cuidado com a queda de candeeiros, móveis e outros objetos.\r\nSe estivermos na rua, devemos afastarmo-nos de árvores, postes de eletricidade, muros e edifícios. É preciso ter cuidado com cabos de alta tensão caídos e com objetos que estejam em contacto com estes cabos. É fundamental procurar um local distante dos edifícios. Por isso, devemos procurar praças, jardins ou avenidas largas. Se vivermos no campo, devemos procurar um descampado.\r\n','0');

INSERT INTO dic2me_linhas (id_livro_texto, idioma, ano, nome, descricao, `file`, url, redatora, patrocinador, leitora, escola_autor, nivel, linha_texto,casosleitura) VALUES (139, 'PT', '4', 'COMO PREVENIR INCÊNDIOS FLORESTAIS', 'COMO PREVENIR INCÊNDIOS FLORESTAIS', 'COMO_PREVENIR_INCENDIOS_FLORESTAIS.MP3', 'COMO_PREVENIR_INCENDIOS_FLORESTAIS.MP3', '0', '0', '0', '0', '1', 'Como todos sabemos as florestas são essenciais para a nossa vida. São elas que enriquecem e purificam o ar, evitam a erosão do solo e tornam-no mais fértil com as folhas e os ramos que caem e se transformam em fertilizante.\r\nO desaparecimento das florestas daria origem a uma catástrofe, por isso é fundamental protegê-las e um dos maiores perigos que estas enfrentam é o risco de incêndio.\r\nÉ, então, fundamental que tomemos algumas medidas para prevenir os riscos de incêndios florestais. Em primeiro lugar, nunca devemos deixar lixo nas florestas, sobretudo os vidros, uma vez que são bons criadores de fogo.\r\nDepois, devemos limpar as florestas de excessos de ramos e folhas que possam ser bons propagadores de fogo e abrir caminhos para facilitar o acesso dos bombeiros ao interior das florestas.\r\nÉ expressamente proibido fazer fogueiras e também é preciso ter muito cuidado com as pontas de cigarro. É necessário que tenhamos a certeza de que o cigarro fica devidamente apagado.\r\nPor fim, é preciso vigiar as florestas, especialmente durante o verão.\r\nAgora que já sabes os cuidados que devemos ter, não te esqueças de alertar todos os teus amigos e os adultos que conheces.\r\nVamos proteger as nossas florestas!\r\n','0') 

INSERT INTO dic2me_linhas (id_livro_texto, idioma, ano, nome, descricao, `file`, url, redatora, patrocinador, leitora, escola_autor, nivel, linha_texto,casosleitura) VALUES (140, 'PT', '4', 'REGRAS DE PRIMEIROS SOCORROS ', 'REGRAS DE PRIMEIROS SOCORROS ', 'REGRAS_DE_PRIMEIROS_SOCORROS.MP3', 'REGRAS_DE_PRIMEIROS_SOCORROS.MP3', '0', '0', '0', '0', '1', 'Neste pequeno texto vais ficar a saber algumas regras de primeiros socorros que te podem vir a ser muito úteis. \r\n Se fores mordido por um cão, gato ou rato deves, em primeiro lugar, manter-te calmo e lavar o local da mordedura com água e sabão. Depois, deves desinfetar a ferida com Betadine ou água oxigenada. Em seguida, no caso de ter sido um cão ou um gato a morder-te, deves tentar saber se o animal está vacinado e, por fim, dirigires-te ao centro de saúde mais próximo.\r\n Nas picadelas dos insetos, em primeiro lugar, deves ver se o inseto deixou o ferrão espetado e, se tiver ficado, retirá-lo com o auxílio de uma pinça. Depois, aplicas gelo para aliviar a dor e retirar o inchaço e só deves ir ao médico em caso de reação alérgica à picadela.\r\n Se te queimares deves arrefecer a zona queimada com água fria e ir ao médico no caso de a queimadura ser grave. No caso das queimaduras, embora muita gente diga que se deve colocar manteiga, margarina ou outros produtos gordurosos na área afetada, não se deve fazê-lo porque se corre o risco de infetar a ferida.\r\n Ah e muito importante, só deves socorrer alguém acidentado se não houver nenhum adulto por perto. No caso de saberes que há um adulto, deves primeiro chamá-lo para resolver a situação.\r\n','0');

INSERT INTO dic2me_linhas (id_livro_texto, idioma, ano, nome, descricao, `file`, url, redatora, patrocinador, leitora, escola_autor, nivel, linha_texto,casosleitura) VALUES (141, 'PT', '4', 'TRADIÇÕES DE NATAL', 'TRADIÇÕES DE NATAL', 'TRADICOES_DE_NATAL.MP3', 'TRADICOES_DE_NATAL.MP3', '0', '0', '0', '0', '1', 'Quando chegamos a novembro a nossa cabeça começa a pensar no natal que aí vem. Também não poderia ser de outra forma, uma vez que em todas as montras se começam a ver as luzes e os enfeites típicos desta época.\r\n A tradição dizia que era o Menino Jesus que nos trazia as prendas, no entanto, nos últimos anos a imagem do Pai Natal tem ganho cada vez mais importância.\r\n O crescente valor que o comércio tem adquirido quase que anulou o valor desta festividade: o nascimento de Jesus.\r\n No entanto, em muitas casas ainda existe um presépio com as figuras de Nossa Senhora, São José e o Menino Jesus, mas também com a vaca e o burrinho (que aqueceram Jesus com o seu bafo) e com os Reis Magos com as suas prendas.\r\n Na maioria dos lares portugueses existe também uma árvore de Natal e há quem decore a sua casa com mais umas decorações natalícias.\r\n A ceia de Natal inclui bacalhau cozido com batatas e couve, bem regados com azeite. No entanto, no norte do país, o polvo também tem lugar de destaque na consoada.\r\n Por volta da meia-noite, algumas famílias vão à Missa do Galo e quando regressam a casa é que abrem os presentes que, entretanto, já foram deixados.\r\n No entanto, este costume de ir à missa na noite de Natal está a cair em desuso e muitas são as crianças que deixam leite e bolachas para o Pai Natal e só na manhã de dia 25 abrem as prendas.\r\n Mas o Natal também é uma época de comer muitos doces: rabanadas, azevias, sonhos, coscorões, broas e bolo-rei, entre outros, dependendo da região do país em que nos encontramos.\r\n','0');

INSERT INTO dic2me_linhas (id_livro_texto, idioma, ano, nome, descricao, `file`, url, redatora, patrocinador, leitora, escola_autor, nivel, linha_texto,casosleitura) VALUES (142, 'PT', '4', 'D. JOSÉ', 'D. JOSE', 'JOSE.MP3', 'JOSE.MP3', '0', '0', '0', '0', '1', 'D. José I nasceu em Lisboa em 1714 e era filho de D. João V e de D. Maria Ana de Áustria.\r\n Em 1750, quando foi aclamado rei, confiou a governação do país a Sebastião José de Carvalho e Melo, tornando-o depois ministro do reino e atribuindo-lhe o título de Conde de Oeiras e, posteriormente, de Marquês de Pombal.\r\n No dia 1 de novembro de 1755, dia de Todos os Santos, deu-se o Terramoto de Lisboa que deixou a cidade em ruínas. O terramoto foi seguido de um maremoto que fez com que as águas chegassem até ao local onde encontramos hoje o Rossio. Também por toda a cidade se assistiram a inúmeros incêndios, dando origem à perda de muitas vidas e à destruição de grande parte de Lisboa.\r\n A família real não foi afetada por esta tragédia, pois estava a dormir fora do centro da cidade e assim que sentiu o primeiro abalo fugiu em direção ao campo. No entanto, D. José continuava com receio de voltar à cidade.\r\nFoi então que o Marquês de Pombal se tornou fundamental, tomando conta da situação e restabelecendo a ordem. Mandou enterrar os mortos e tratar dos sobreviventes e preocupou-se com a reconstrução da cidade. É a ele que devemos o traçado da baixa que encontramos hoje em Lisboa e que é denominada de baixa pombalina.\r\nD. José faleceu em 1777 e o Marquês de Pombal foi, então, afastado do seu cargo.\r\n','0');

insert into  dic2me_codigo_erros_ortioograficos(codigo, descricao, como_corrigir) values('19','fizeste um duplo --, ou seja um duplo hiffen','não existe diplo tracinho, só existe - e não --');

INSERT INTO dic2me_linhas (id_livro_texto, idioma, ano, nome, descricao, `file`, url, redatora, patrocinador, leitora, escola_autor, nivel, linha_texto,casosleitura) VALUES (143, 'PT', '4', 'D. SEBASTIÃO', 'D. SEBASTIÃO', 'D_SEBASTIAO.MP3', 'D_SEBASTIAO.MP3', '0', '0', '0', '0', '1', 'Filho de D. Joana da Áustria e do príncipe D. João Manuel, D. Sebastião nasceu em Lisboa em 1554.\r\nD. Sebastião nunca chegou a conhecer o seu pai, pois este faleceu ainda antes do seu nascimento.\r\nQuando Sebastião nasceu, era o seu avô, D. João III, o rei de Portugal. E o nascimento de Sebastião foi celebrado por todos, porque o rei D. João III estava sem descendentes que lhe sucedessem no trono.\r\nNo entanto, aquando da morte de D. João III, D. Sebastião tinha apenas três anos, motivo pelo qual foi a sua avó, D. Catarina, que teve de assegurar a governação do país e, mais tarde, esse papel ficou a cargo do seu tio-avô, o cardeal D. Henrique.\r\nD. Sebastião subiu ao trono com catorze anos e rapidamente começou a preparar uma expedição ao norte de África porque pretendia conquistar Marrocos.\r\nO monarca ambicionava conquistar territórios aos Muçulmanos para fundar um grande império português.\r\nNo entanto, D. Sebastião desapareceu na batalha de Alcácer Quibir, sem deixar qualquer descendência, possibilitando que a coroa portuguesa fosse entregue aos reis Filipe de Espanha.\r\nÀ sua volta nasceu o mito de que Sebastião regressaria um dia, numa manhã de nevoeiro, para salvar Portugal de todos os problemas que o país enfrentava.\r\n','0') 


insert into  dic2me_codigo_erros_ortioograficos(codigo, descricao, como_corrigir) values('13','não deste um espaço depois da virgula','DEpois de virgula dar sempe um espaco com a próxima palavra');
insert into  dic2me_codigo_erros_ortioograficos(codigo, descricao, como_corrigir) values('14','não deste um espaço depois do ponto fnal','DEpois de poto dar sempe um espaco com a próxima palavra');
insert into  dic2me_codigo_erros_ortioograficos(codigo, descricao, como_corrigir) values('15','não deste um espaço depois da ponto de interrogação','DEpois de ponto de interrogação dar sempe um espaco com a próxima palavra');
insert into  dic2me_codigo_erros_ortioograficos(codigo, descricao, como_corrigir) values('16','não deste um espaço depois da ponto de exclamação','DEpois de ponto de exclamação dar sempe um espaco com a próxima palavra');
