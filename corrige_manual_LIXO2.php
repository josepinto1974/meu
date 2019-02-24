<?php
	 require_once('./Connections/dic2me.php'); ?>
<?php
header('Content-Type: text/html; charset=utf-8');

/////////////////
mysql_select_db($database_bdteste, $dic2me);
#

#########################estuda pontuacao

require_once('./funcoes/funcoes.php'); 
gala(galo1);

tele(corrige_manual);

$mem = memory_get_usage();

copia(MEMORIA);
copia($mem);

$codigo_interno_do_tpc=obter_IDDOTPCDECADA_ALUNO();

$codigo_interno_do_tpc=$_POST['id_doTPC'];

gala(galo2);

$codigoTPC=$_GET['codigoTPC'];


$idtpc=obteriddotextoa_partir_id_do_TPC($codigoTPC);

$inicio_fim=geramarcadormilisegundos();




$cookie_name="login_aluno";
if(isset($_COOKIE[$cookie_name])) {
	$temcookie="SIM";    

 $cookie_value=$_COOKIE[$cookie_name];
    $cookie_ID=$_COOKIE[$cookie_name];
    $datacookie=dados_do_cookie($cookie_ID);

	$nif_aluno=$datacookie[2];

	$pass_aluno=$datacookie[0];
	$cod_escola=$datacookie[1];
		$lastlogin=$datacookie[3];
}

gala(galo3);

$inciciotempo=$_POST['tempoiniciomilisegundos'];

?>
<input name="tempoFIMmilisegundos" type="hidden" value="<?php echo $inicio_fim?>">
?>
<script>
var timeleft = 20;
var downloadTimer = setInterval(function(){
  document.getElementById("progressBarovo").value = 20 - --timeleft;
  if(timeleft <= 0)
    clearInterval(downloadTimer);
},1000);
</script>


<?php

$inciciotempo=$_POST['tempoiniciomilisegundos'];
$diferenca1=($inicio_fim-$inciciotempo)/1000;
$diferenca=($inicio_fim-$inciciotempo);
$controlo=$_GET['CONTROLO'];
$codigoTPC=$_GET['codigoTPC'];

$ditado_escrito=$_POST['ditado'];
mostra(POI9456456456);
obter_id_cookie_aluno();
mostra(POI9);
		$ID_DITADO=$_POST['id_doTPC'];



$id_tp_geral_turma=obter_id_do_ditado_marcado_pelo_professor($codigoTPC);

mostra(POI9SERA567868678);
$nif_aluno=obter_id_cookie_aluno();
mostra(POI9MARSERA567868678);
mostra(POI9345353);
		$ID_DITADO=$_POST['id_doTPC'];

if (mostrar_ditado_escrito_pelo_aluno_nao_repetir_insercao($ID_DITADO,$nif_aluno) == 0)
{


		$geraid=geramarcadormilisegundos();
$idtpc=obteriddotextoa_partir_id_do_TPC($codigoTPC);
$idtpc=obter_IDDOTPCDECADA_ALUNO();



# dic2me_ditado_feito_pelo_aluno nao e necessario registar de novo o ditado
####registar_em_bd_ditado_do_menino($geraid,$ditado_escrito,$codigoTPC,$nif_aluno,$diferenca,$id_tp_geral_turma,$idtpc);

}

gala(galo4);

# VIOOOOOOOOOOOOOOOOOOOO
#########################################################################  ditadofeirto*****
# 	$geraid=geramarcadormilisegundos();

$ditado_escrito_mas_na_BD=ler_ditado_feito_pelo_aluno($codigoTPC);
mostra(ditadoescritoputo);
mostra($ditado_escrito_mas_na_BD);
gala(galo5);
$naoinserirmais="NAO";
 if (evitarrpeticao_inser_mesmo_erro_memo_ditado($palavra,$codigoTPC) )
 {
	 $naoinserirmais="SIM";
 }	 



 if ( $naoinserirmais == "SIM")
 {	 
 gala(galo20);
###################################################################################
##Estudo da finalização do ditaod feito, se termina ou não com ponto
#ler_ditado_original($tcp_id);
##9897897987
##terminado, OK 27-10-2017
###################################################################################
mostra(VAICHAMARVERIICAULTIMAPALAVRA);
mostra($codigoTPC);

###tempu(vaerifica_ultima_palavra_escritainicio);
###########################################estranhovaerifica_ultima_palavra_escrita($codigoTPC);
#####tempu(vaerifica_ultima_palavra_escritaFIM);
###################################################################################
##FIM Estudo da finalização do ditaod feito, se termina ou não com ponto
#ler_ditado_original($tcp_id);
##9897897987
##terminado, OK 27-10-2017
###################################################################################







					  ?><br><?php
					  

#estudo_nomes_proprios($ditado_escrito_mas_na_BD,$codigoTPC);

#por exemplo se fizer    galinha,Paulinz , daria sempre erro ortografico poris ele ia estudar (galinha,Paulinz), e o estudo deveria serr galinha  e DEPOIS Paulinz

########################################################################################################################################################
##inicio Estudo de pontuacao colada a palavras
#exemplo galinha,Paulinz , daria sempre erro ortografico poris ele ia estudar (galinha,Paulinz), e o estudo deveria serr galinha  e DEPOIS Paulinz
#87687687678
########################################################################################################################################################
mostra(AQUI888pois);
#estudo_palavra_que_tem_colada_pontuacao($ditado_escrito_mas_na_BD,$codigoTPC);
mostra(AQUI888pois000mmmm);
#exit
############################################################################
##FIM Estudo de pontuacao colada a palavras
#87687687678
############################################################################




#############################################
##procura erros ortograficostttt555

$id_testo=1;
$ditadoescrito=$ditado_escrito_mas_na_BD;



	

#$pilhacom_refeita_com_indicacao_palavras_escritas_com_nulo=refaz_pilha_analisando_as_palavras_que_faltam($ditadoescrito,$codigoTPC,$ID_DE_EXECUCAO);


			  $dim=count($pilhacom_os_valores_nao_escritos);
			 $codigoERRO="777";
			 	
			 #detecta_palavras_escreitas_repetidamente_e_consexutivos($pilhacom_refeita_com_indicacao_palavras_escritas_com_nulo,$codigoTPC,$codigoERRO);
	

#FIM----------------------Valida palavras escritas repetidas consecutivamente

#ERROS INICIO ortograficos#################exit


	


 $ditadolimpo=explode("###",$pilhacom_refeita_com_indicacao_palavras_escritas_com_nulo);
 
 
	   		$nulotamanho=count($ditadolimpo);
	bar(AQUI1);		
	



	#	mostra(POI2342349);
		$nif_aluno=obter_id_cookie_aluno();
	
		
		$codigoTPC=$_GET['codigoTPC'];
	
		
		$ditadofeito_aluno=mostrar_ditado_escrito_pelo_aluno($nif_aluno,$ID_DITADO); 
	
		
		 $ditadolimpo_aluno=explode("\r\n",$ditadofeito_aluno);
 	
	   		$nulotamanho_aluno=count($ditadolimpo_aluno);
	
	# ESTUDAPONTOFINALboi PULA
	
	function tempu($valor)
{
}


	tempu(vale999);
#######################################################################################################################
#######################################################################################################################
#limpeza consecutiva
#criacao de lista de ditado escrito removendo escrita consecutiva igual
#limpar dic2me_ditado_feito_pelo_aluno
#######################################################################################################################
$ID_DITADO=$_POST['id_doTPC'];
$ID_DITADO=$_GET['codigoTPC'];
ver(VITAMINAS);
ver($ID_DITADO);
#cria_lista_escrita_totalmente_sincronizada($pilhacom_refeita_com_indicacao_palavras_escritas_com_nulo,$ID_DITADO);



#cria ditado removendo palavras escritas consecutivas e igais, por exemplo se tivr "o gato comme ratos ratos"; o novo texto ficara "o gato comme ratos"
#evai ser esse o texto que irá ser analisado


	$limpinha=cria_lista_removendo_iguas_consecutivos($pilhacom_refeita_com_indicacao_palavras_escritas_com_nulo);    
	bar(LIMPINHAOUT);
   bar($limpinha);
   
   tempu(vale1);
#    dic2me_palavras_individuais_PORTUGUES_testes;
#detecta_erro_ortograficos_MAIN

$funcao="detecta_erros_ortograficos";
$funcao="112";
$palvra_corrigida="estuda";
$tipoerro=9;
ver(IDDITADO);
ver($ID_DITADO);

##################################################################
##obter nif e id do TPC
##################################################################

		$ID_DITADO=$_POST['id_doTPC'];
		bar(ERRO1);
$iddotpc_base=obtem_idtpc_da_tabela_dic2me_TPC($ID_DITADO, $nif_aluno);
		bar(ERRO12);
$codigoTPC=obter_IDDOTPCDECADA_ALUNO();
		bar(ERRO133);
	$entrada2=$_POST['id_doTPC'];
	$entrada1=$_GET['CONTROLO'];
			bar(ERRO144);
    $NIF_ALUNO=obtemnnif($entrada1);
			bar(ERRO177777);
			
			tempu(vale12);
##################################################################
##FIM  obter nif e id do TPC
##################################################################
	
#####

############################################################################################
##codetecta palavra escritas mas que não pertencem ao ditado 987987698789
##e não são erro ortografico
####concluido a 02-12-2017
######ERROCODIGO 000
################ ############################################################################

?><br><?php
# inser_erros_individual_para_substituirpilhas_na_BD($primeiraplavra, $erro,$ID_DITADO,$funcao,$palvra_corrigida);
# NOVO_detecta_diferencas_escrito_original_com_ditado_e_nao_e_considerado_erro($ID_DITADO,$funcao);
#MELHOR_detecta_diferencas_escrito_original_com_ditado_e_nao_e_considerado_erro($ID_DITADO,$funcao);
#estudocomparativo();

?><br><?php


############################################################################################
##codetecta erros ortograficos 987987698789
####concluido a 02-12-2017
######ERROCODIGO 9
######MASSIVO ERROCODIGO 9
############################################################################################ 30
 
vopia(MASSIVOERROCODIG9O);
gala(galo9);

tempu(detecta_erros_ortograficos_nova_abordagem_finalINICIO);
#*******************************************BOM
vopia(vale13detectaerrosorto);
			
			
			detectaerros_para_funcao_processa_a_pediddo_analise_de_erros();

vopia(FIMdetectaerrosortograicos);
			

#function cria_ditado_escrito_por_aluno_com_carater_especial()
$PILHAESCRITA=cria_ditado_escrito_por_aluno_com»»»_e_limpeza_de_virgulas();

		bar(ERRO1000000000000000);
#dar(ESTUDODEgera_pilha_separado_por»»»»);
#	gera_pilha_separado_por»»»»();
	$PILHACOMTEXTOORIGINAL=gera_pilha_separado_por»»»TEXTOORIGINAL($ID_DITADO);
			bar(ERRO44444444);
	dar($PILHAESCRITA);
	dar(BAIXOORIGINAL);
	dar($PILHACOMTEXTOORIGINAL);
dar(FIMESTUDODAR);
			bar(ERRO555544444444);
			exit;
######################################################################################################################################################################################
#FIMm estudoerrosortograficos
######################################################################################################################################################################################	

###############################
##inicio estudo primeira palavra para ver se primeira letra escirta e maiusculaou naão
#9238794759834759834
######ERROCODIGO 5224
ter(INICIODEESTUDOestudaprimeirapalavra);
vopia(iniciodetectestudaprimeirapalavracoderro5224);
#antiga estudaprimeirapalavra($limpinha,$primeiraplavra, $erro,$ID_DITADO,1,$palvra_corrigida);
#========================================================================================================================
MANUAL_estudaprimeirapalavra($nif_aluno,$ID_DITADO);
#========================================================================================================================
vopia(FIMiniciodetectestudaprimeirapalavracoderro5224);
###Estudo de primeira palavra no ditado
### FIM 3-12-2017


##################################################################################################################

#########################################################################################

#function descobre_ponto_final_paragrafo($pilhacom_refeita_com_indicacao_palavras_escritas_com_nulo,$ERRO,$codigoTPC)

################
######ERROCODIGO 224
######MASSIVO ERROCODIGO 224
#####################
#vopia(######inicioMASSIVOERROCODIGO224);
copia(inicioESTUDAR_MANUAL_regra_Letramaiuscula_logo_depois_de_pontuacao);
vopia(inicioMANUAL_regra_Letramaiuscula_logo_depois_de_pontuacao224);
#========================================================================================================================
MANUAL_regra_Letramaiuscula_logo_depois_de_pontuacao ($nif_aluno,$tipoerro,$funcao);
#========================================================================================================================
	vopia(FIMMANUAL_regra_Letramaiuscula_logo_depois_de_pontuacao224);
###################################################################################
###############Estuda FIM  maiuscula depois de ponto paragrafo
#896876876876876876887  em 23-10
#########################################################################################

#########################################################################################################################################################
####INICIO Estudo espaçamento depois de virgula ou ponto final
##983456873653847658374
#estuda_espacamento_no_caso_de_pontuacao
##valido 26-10-17

################
######ERROCODIGO 53
###MANUAL estudo 53
#####################
#########################################################################################################################################################
		mostra(estudaespacamentos);
		mostra(dadosparaestudoespacamento);
mostra($idtpc);
mostra($ID_DE_EXECUCAO);
$idtpc=obter_id_do_TPC();
ter(ESTUDAESPACAMENTO);
ter($nif_aluno);

tempu(estuda_espacamentonulodepoispontuacao_NOVO_inicio);
$tipoerro="53";
$funcao="92";
ter(ESTRANHO);
ter($idtpc);
#estuda_espacamentonulodepoispontuacao_NOVO($idtpc,$tipoerro, $funcao);
copia(ESTUDAMANUAL_estuda_espacamentonulodepoispontuacao_NOVO);
vopia(INICIOANUAL_estuda_espacamentonulodepoispontuacao_NOVO53);
MANUAL_estuda_espacamentonulodepoispontuacao_NOVO($idtpc,$tipoerro, $funcao);
vopia(FIMMANUAL_estuda_espacamentonulodepoispontuacao_NOVO53);
tempu(vale14fimdetetaerrosorto_vale14fimdetetaerrosorto);
		tempu(vale14fimdetetaerrosorto);
		
tempu(estuda_espacamentonulodepoispontuacao_NOVO_FIM);

######################################################################################################################################################	
## inicio Estudonomes proprois
#987687687687
######ERROCODIGO 77
######################################################################################################################################################	
	vopia(vale14fimdetetaerrosorto_estudo_nomes_proprios_palavra);
	
	$palavra_limpa=limpa_palavra_pontuacao_e_refaz_nova_pilha_dois($palavra);
	$codigoTPC=obter_IDDOTPCDECADA_ALUNO();
	vopia(INICIOANUAL_MANUAL_estudo_nomes_proprios_palavra);	
MANUAL_estudo_nomes_proprios_palavra($palavra_limpa,$codigoTPC,$ID_DE_EXECUCAO);	
	vopia(FIMANUAL_estuda_espacamentonulodepoispontuacao_NOVO577);


##########################################################################################################
###estudo se cada pagrafo termina com ponto final
##Valido  4-12-2017

################
######ERROCODIGO 44
#####################
##########################################################################################################
	tempu(vale14fimdetetaerrosorto_estudo_nomes_proprios_palavraregra_cada_paragrafo_termina_com_ponto_final);
ter(ESTUDODEregra_cada_paragrafo_termina_com_ponto_final);
vopia(INICIOregra_cada_paragrafo_termina_com_ponto_final44);
MANUAL_regra_cada_paragrafo_termina_com_ponto_final ();
###############LIXO regra_cada_paragrafo_termina_com_ponto_final ($nif_aluno,$tipoerro,$funcao);
	tempu(vale14fimdetetaerrosorto_estudo_nomes_proprios_palavraregra_cada_paragrafo_termina_com_ponto_finalFIM);
	vopia(INICIOregra_cada_paragrafo_termina_com_ponto_final44);
##########################################################################################################
###estudo se cada pagrafo termina com ponto final
##Valido  4-12-2017
##########################################################################################################

###########Estudo comparativo_palavra_a_palavra_para inserir em dic2me_compara_palvra_palavra_posicao_refazer_ditado
##aqui vouu apenas compara o que foi escrito com o que devia ter sido escrito
########ESTUDOCOMPARATIVO
?>
	
<?php

far(VAIFAZERESTUDOCOMPARATIVO);
#estudocomparativo();
far(ACABOUESTUDOCOMPARATIVO);
tempu(estudocomparativoFIM);



###################################################################################
##Estudo da finalização do ditaod feito, se termina ou não com ponto
#ler_ditado_original($tcp_id);
##9897897987
######ERROCODIGO 30
##NAO terminado, OK 27-10-2017
###################################################################################224
tempu(estudocomparativoFIMvaerifica_ultima_palavra_escritainicio);
mostra(VAICHAMARVERIICAULTIMAPALAVRA);
mostra($codigoTPC);
copia(vaerifica_ultima_palavra_escrita);
MANUAL_vaerifica_ultima_palavra_escrita();
copia(vaerifica_ultima_palavra_escritaFIM);
tempu(estudocomparativoFIMvaerifica_ultima_palavra_escritaFIM);
###################################################################################
##Estudo da finalização do ditaod feito, se termina ou não com ponto
#ler_ditado_original($tcp_id);
##9897897987
##NAOterminado, OK 27-10-2017
###################################################################################
	
 }
 else
 {
	 echo "Estas a repetir o ditado ou carregaste duas vezes no enviar o ditdo pra a pofessora";
	 echo "a professora já tem o teu ditado";
	 echo "O ditado só se poe fazer uma vez";
 }	 
	

?> <input name="idditado" type="hidden" id="ip" value=<?php echo  $geraid; ?> /> <?php

?>

    <?php
	
	 require_once('./Connections/dic2me.php');
	 
	  ?>
     
<?php

header('Content-Type: text/html; charset=utf-8');

/////////////////
mysql_select_db($database_bdteste, $dic2me);

 
 if (verifica_se_aluno_já_TENTOU_PELO_MENOS_UMA_VEZ_CORRIGIR_O_DIITADO($codigo_interno_do_tpc) == 0)
   {
	   mostra(VAIINSERIRIRR);

         inser_erros_individual_para_substituirpilhas_na_BD($ID_DE_EXECUCAO,$palavra,$posicao,$tipoerro,$idtpc,$funcao,$codigo_interno_do_tpc,$codigo_geral_TPC);
		 update_informar_se_TPC_prof_feito_pelo_aluno_com_ou_sem_erros($codigo_interno_do_tpc);
		}
   
	

?>
<style>
body {font-family: "Lato", sans-serif;}

/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */

div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}

/*  Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>



				  ?><br>
				  
				  <?php
echo "tens erro";
$ERROS=contaerrosdoalunos($idTPC,$tipo_erro_a_mostrar);

$errosortograficos=$ERROS[0];
$errosortnaoograficos=$ERROS[1];
?> <h2>Erros ortográficos<h2>
<?php if ($errosortograficos>0)
{
	echo "tiveste";
	echo  $errosortograficos;?>
	<img src="imagens/triste.jpg" width="90" height="108">
<?php }
else{
	?>
	<img src="imagens/contente.png" width="149" height="150">
<?php } 
?>

 <h2>Erros não ortográficos<h2>
<?php if ($errosortnaoograficos>0)
{
	echo "tiveste";
	echo $errosortnaoograficos;
	?>
	<img src="imagens/triste.jpg" width="90" height="108">
<?php }
else{
	?>
	<img src="imagens/contente.png" width="149" height="150">
<?php } 
?>


<p>Clique nos menus em baixo, para consultar, por exemplo eros dados pelo aluno, ou texto original</p>
<?php mostra(AQUI1); 
$codigoTPC=obter_IDDOTPCDECADA_ALUNO();
mostra(CAOLI);
mostra($codigoTPC);
?>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">Erros Ortográficos</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Outros erros</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Ditado escrito pelo aluno</button>
      <button class="tablinks" onclick="openCity(event, 'Tokyo3')">Estatisticas comparativas</button>
  <button class="tablinks" onclick="openCity(event, 'galo')"> <n>Texto original<n></button>
</div>

<div id="London" class="tabcontent">
  <h3>Erros ortográfico</h3>

<a href="http://vmi100391.contabo.host/dic2me/imprime_lista_erro_ortograficos_aluno.php?id=<?php echo $codigoTPC ?>" title="imprimirtexto" target="new">imprimir <img src="imagens/impressora.jpg" width="130" height="88"></a>

    
   <?php


			  $erro=9; 
			  $iddotpc=$_POST['id_do_TPC'];

		$ID_DITADO=$_get['codigoTPC'];
 $iddotpc=$_POST['id_doTPC'];
mostra(DESTA12);
ver(GALA1);



		$ID_DITADO=$_POST['id_doTPC'];
$iddotpc_base=obtem_idtpc_da_tabela_dic2me_TPC($ID_DITADO, $nif_aluno);

$codigoTPC=obter_IDDOTPCDECADA_ALUNO();
	
	$entrada2=$_POST['id_doTPC'];
	$entrada1=$_GET['CONTROLO'];
	
    $NIF_ALUNO=obtemnnif($entrada1);
	
		$idtpc=obtem_idtpc_da_tabela_dic2me_TPC($entrada2, $NIF_ALUNO);
		

$erro=9;
			mostrar_erros_do_ditado_a_professorapelo_aluno_mostra_tabela($idtpc,$erro);

			?>
  
