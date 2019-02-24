 <?php
 
 
 ###################################################################################
##Estudo da finalização do ditaod feito, se termina ou não com ponto
#ler_ditado_original($tcp_id);
##9897897987
##terminado, OK 27-10-2017
#ERRO=== 30
#
###################################################################################

#########################################################################################################################################################
####INICIO Estudo espaçamento depois de virgula ou ponto final
##983456873653847658374
#estuda_espacamento_no_caso_de_pontuacao
##valido 26-10-17
##ERRO 53
#########################################################################################################################################################

######################################################################################################################################################################################
#inicio estudoerrosortograficos
#986876876876868
##a trabalhar neste:valido: 27-10
##ERRO 9
######################################################################################################################################################################################	



#importante:
#estuda_pontuacao_todas_palavras_individual_pontuacao($palavraescrita,$lat,$ERRO,$idtpc)
#Valor122333
###############################
##inicio estudo primeira palavra para ver se primeira letra escirta e maiusculaou naão
#9238794759834759834
##############################
###################################################################################

###############Estuda inicio  maiuscula depois de ponto paragrafo
#896876876876876876887  em 25-10
#REVER
#########################################################################################



###############################################################################


####################################################################################################
###################################################################################################
#estudo comparativo ditado com texto original
#26-10-2017
#naovalidado
#92798473239784987
####################################################################################################




	 require_once('./Connections/dic2me.php'); ?>
<?php
header('Content-Type: text/html; charset=utf-8');
echo "CAO1";
/////////////////
mysql_select_db($database_bdteste, $dic2me);
#
echo "CAO1";
#########################estuda pontuacao

require_once('./funcoes/funcoes.php'); 

echo "MEMORIAAAA";
$mem = memory_get_usage();



$codigo_interno_do_tpc=obter_IDDOTPCDECADA_ALUNO();

$codigo_interno_do_tpc=$_POST['id_doTPC'];



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



$inciciotempo=$_POST['tempoiniciomilisegundos'];

?>
<input name="tempoFIMmilisegundos" type="hidden" value="<?php echo $inicio_fim?>">


<?php

$inciciotempo=$_POST['tempoiniciomilisegundos'];
$diferenca1=($inicio_fim-$inciciotempo)/1000;
$diferenca=($inicio_fim-$inciciotempo);
$controlo=$_GET['CONTROLO'];
$codigoTPC=$_GET['codigoTPC'];

$ditado_escrito=$_POST['ditado'];
obter_id_cookie_aluno();
		$ID_DITADO=$_POST['id_doTPC'];


echo "BILASSS";
$id_tp_geral_turma=obter_id_do_ditado_marcado_pelo_professor($codigoTPC);
echo "OSRA:";
echo $id_tp_geral_turma;
echo "FIa";

$nif_aluno=obter_id_cookie_aluno();
		$ID_DITADO=$_POST['id_doTPC'];
if (mostrar_ditado_escrito_pelo_aluno_nao_repetir_insercao($ID_DITADO,$nif_aluno) == 0)
{


		$geraid=geramarcadormilisegundos();
$idtpc=obteriddotextoa_partir_id_do_TPC($codigoTPC);
$idtpc=obter_IDDOTPCDECADA_ALUNO();



# dic2me_ditado_feito_pelo_aluno
registar_em_bd_ditado_do_menino($geraid,$ditado_escrito,$codigoTPC,$nif_aluno,$diferenca,$id_tp_geral_turma,$idtpc);

}

#########################################################################  ditadofeirto*****
# 	$geraid=geramarcadormilisegundos();

$ditado_escrito_mas_na_BD=ler_ditado_feito_pelo_aluno($codigoTPC);
mostra(ditadoescritoputo);
mostra($ditado_escrito_mas_na_BD);


 evitarrpeticao_inser_mesmo_erro_memo_ditado($palavra,$codigoTPC);
 
##############################################################################################################################################################################
###inicio do estudo do ditado#################################################################################################################################################
###26-10-2017
###############################################################################################################################################################################
 
 
 
###################################################################################
##Estudo da finalização do ditaod feito, se termina ou não com ponto
#ler_ditado_original($tcp_id);
##9897897987
##terminado, OK 27-10-2017
###################################################################################
mostra(VAICHAMARVERIICAULTIMAPALAVRA);
mostra($codigoTPC);
vaerifica_ultima_palavra_escrita($codigoTPC);

###################################################################################
##FIM Estudo da finalização do ditaod feito, se termina ou não com ponto
#ler_ditado_original($tcp_id);
##9897897987
##terminado, OK 27-10-2017
###################################################################################




#############################################################################





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



	echo "BOLERO00000000";

$pilhacom_refeita_com_indicacao_palavras_escritas_com_nulo=refaz_pilha_analisando_as_palavras_que_faltam($ditadoescrito,$codigoTPC,$ID_DE_EXECUCAO);


			  $dim=count($pilhacom_os_valores_nao_escritos);
			 $codigoERRO="777";
			 detecta_palavras_escreitas_repetidamente_e_consexutivos($pilhacom_refeita_com_indicacao_palavras_escritas_com_nulo,$codigoTPC,$codigoERRO);
	echo "BOLERO11111111";

#FIM----------------------Valida palavras escritas repetidas consecutivamente

#ERROS INICIO ortograficos#################exit


	echo "BOLERO222222";

 $ditadolimpo=explode("###",$pilhacom_refeita_com_indicacao_palavras_escritas_com_nulo);
	   		$nulotamanho=count($ditadolimpo);
			
		#estudo_nomes_proprios($ditado_escrito_mas_na_BD,$codigoTPC);
#####################################################################################################	
#	ESTUDAparafrafo
#####################################################################################################
#MALA();

######################################################################################
#####################################################################################
# inicio verific ultima palavra escrita
#87687687687
######################################################################################
#####################################################################################

#vaerifica_ultima_palavra_escrita($codigoTPC);

######################################################################################
#####################################################################################
# FIM verific ultima palavra escrita
#87687687687
######################################################################################
#####################################################################################

	echo "BOLERO44444";
	




		
		$nif_aluno=obter_id_cookie_aluno();
		echo "PIORRR";
		$ID_DITADO=$_POST['id_doTPC'];
		

		
		$ditadofeito_aluno=mostrar_ditado_escrito_pelo_aluno($nif_aluno,$ID_DITADO); 
		mostra(CAFORA);
		mostra($ditadofeito_aluno);
		
		 $ditadolimpo_aluno=explode("\r\n",$ditadofeito_aluno);
 				mostra(CAFORA111);
	   		$nulotamanho_aluno=count($ditadolimpo_aluno);
	
	# ESTUDAPONTOFINALboi
#######################################################################################################################
#######################################################################################################################
#limpeza consecutiva
#criacao de lista de ditado escrito removendo escrita consecutiva igual
#limpar dic2me_ditado_feito_pelo_aluno
#######################################################################################################################
$ID_DITADO=$_POST['id_doTPC'];
#cria_lista_escrita_totalmente_sincronizada($pilhacom_refeita_com_indicacao_palavras_escritas_com_nulo,$ID_DITADO);



#cria ditado removendo palavras escritas consecutivas e igais, por exemplo se tivr "o gato comme ratos ratos"; o novo texto ficara "o gato comme ratos"
#evai ser esse o texto que irá ser analisado

	$limpinha=cria_lista_removendo_iguas_consecutivos($pilhacom_refeita_com_indicacao_palavras_escritas_com_nulo);    

	
######################################################################################################################################################################################
#inicio estudoerrosortograficos
#986876876876868
##a trabalhar neste:valido: 27-10
######################################################################################################################################################################################	
			# BOISPOSICAOBAIXO
			
			$pilhacom_refeita_com_indicacao_palavras_escritas_com_nulo=refaz_pilha_analisando_as_palavras_que_faltam($ditadoescrito,$codigoTPC,$ID_DE_EXECUCAO);

			$pilha_palavra_separada_do_ditado_feito_aluino=	($pilhacom_refeita_com_indicacao_palavras_escritas_com_nulo);
			detecta_erro_ortograficos_MAIN($pilha_palavra_separada_do_ditado_feito_aluino,$nif_aluno,$ID_DITADO);

			#detecta_todos_erros_ortograficos($palavra);
			
			###NAOe
			$lista_palavranova=cria_lista_palavra_separadaspor»»»($palavra);
			
######################################################################################################################################################################################
#FIMm estudoerrosortograficos
######################################################################################################################################################################################	
			
		$pilhapalavra=$pilhapalavra.$lista_palavranova;
		
echo "CAO222234234";

#############################################################################
###estudo_ortograficoerror
### FIM 987687687###################################inicio 15-10-2017

###################

###############################
##inicio estudo primeira palavra para ver se primeira letra escirta e maiusculaou naão
#9238794759834759834
##############################

#####################################primainicio
$primeiraplavra=obterprimeirapalavarnoditad($nif_aluno,$ID_DITADO);
#######################primaFIM
##################### exit
mostra(primeirapalavraagora);
mostra($primeiraplavra);


		  mostra(AQUIfff);
		     
			  if (MALA($primeiraplavra,$codigoTPC))
			  {
				  $erro="5224";
				  mostra(idditado);
				  mostra($ID_DITADO);
				  inser_erros_individual_para_substituirpilhas_na_BD($primeiraplavra, $erro,$ID_DITADO,1,$palvra_corrigida);
				  
			 
			  $palavraprimeiraum=$ditadolimpo[$lat];
			 
			  }
			  
###############################
##FIM estudo primeira palavra para ver se primeira letra escirta e maiusculaou naão
#9238794759834759834
##############################


######################################################################################################################################################	
## inicio Estudonomes proprois
#987687687687
######################################################################################################################################################	
	
	$palavra_limpa=limpa_palavra_pontuacao_e_refaz_nova_pilha_dois($palavra);
	$codigoTPC=obter_IDDOTPCDECADA_ALUNO();
	estudo_nomes_proprios_palavra($palavra_limpa,$codigoTPC,$ID_DE_EXECUCAO);	


			  
##lixoapagar	if (( $palavra != NULL) && ($palavra != "cuidadoz"))
	{
		
		if ($lat == 1)
		  {
		#	  mostra(AQUIfff);
		 #     $resultado=MALA($palavra,$codigoTPC);	  
			#  mostra($resultado);
			  #funcao_binaria_valida_se_primeira_letra_e_valida_ou_nao($letra, $palavra,$codigoTPC)
			#  $palavraprimeiraum=$ditadolimpo[$lat];
			  #MALA($palavraprimeira,$codigoTPC);	  

			  
			  
			  
			  
			  
########################################################################################
##INICIO Estudar regras inicio do ditado
#7868768768768726837468726
#ve se é maiuscula ou não.
#	  echo "ERROPRIMAPALAVRACASE";
#######################################################################################
mostra(primeirapalavra);
			  motra($palavraprimeiraum);
			  principal_estudar_primeira_palvra_do_ditado($palavraprimeiraum,$codigoTPC);
########################################################################################
##FIM Estudar regras inicio do ditado
#7868768768768726837468726
#ve se é maiuscula ou não.
#	  echo "ERROPRIMAPALAVRACASE";
#######################################################################################
			  
			  
		  }
		
######################################################################################################################################################	
## inicio Estudonomes proprois
#987687687687
######################################################################################################################################################	
	
	$palavra_limpa=limpa_palavra_pontuacao_e_refaz_nova_pilha_dois($palavra);
	$codigoTPC=obter_IDDOTPCDECADA_ALUNO();
	estudo_nomes_proprios_palavra($palavra_limpa,$codigoTPC,$ID_DE_EXECUCAO);	

######################################################################################################################################################	
## FIM Estudonomes proprois
#987687687687
######################################################################################################################################################	

		
		
		
#	$palavra_limpa=limpa_palavra_pontuacao_e_refaz_nova_pilha_dois($palavra);
	
	#ESTUDOPONTOFINAL
	
	mostra(ESTUDAPONTOFINALboi);
#minusculadeoisde ponto final	2212
#	descobre_ponto_final_paragrafo($pilhacom_refeita_com_indicacao_palavras_escritas_com_nulo,$ERRO,$codigoTPC);
mostra(UDETE123antes);
		
	$ditadofeito_aluno=mostrar_ditado_escrito_pelo_aluno($nif_aluno,$ID_DITADO); 
#		
mostra(UDETE123depois);
mostra($ditadofeito_aluno);
mostra(UDETE123);
		 $ditadolimpo_aluno=explode("\r\n",$ditadofeito_aluno);
		 mostra(DEMPILHA);
 		mostra($ditadolimpo_aluno);
	   		$nulotamanho_aluno=count($ditadolimpo_aluno);
			mostra(tamalinas);
			mostra($nulotamanho_aluno);
###################################################################################
###############Estuda inicio  maiuscula depois de ponto paragrafo
#896876876876876876887  em 25-10
#aprovadoateaqui25-10-2017 detecta_erro_ortograficos_MAIN
						#aqui faz-se o estudo ortografico
						#947985734957938475

#########################################################################################

#function descobre_ponto_final_paragrafo($pilhacom_refeita_com_indicacao_palavras_escritas_com_nulo,$ERRO,$codigoTPC)

	#regra_Letramaiuscula_logo_depois_de_pontuacao_ou_outro_depois_para_ponto_final_paragrafo($palavra,$erroid,$lat,$codigoTPC);
	mostra(ESTUDOPONTUACAOAGORAEESTENAOTERMINADO);
	mostra($nif_aluno);
	mostra(nifantesidditadodepois);
	mostra($ID_DITADO);
	
		regra_Letramaiuscula_logo_depois_de_pontuacao ($nif_aluno,$ID_DITADO);
	
###################################################################################
###############Estuda FIM  maiuscula depois de ponto paragrafo
#896876876876876876887  em 23-10
#########################################################################################

		#function valida_APENAS_so_se_erros_ortograficos($palavra)
		
		#$quantos=verifica_se_tem_carateres_especiais_virgula($palavra);
		#$pontuacao=",";

#########################################################################################################################################################
####INICIO Estudo espaçamento depois de virgula ou ponto final
##983456873653847658374
#estuda_espacamento_no_caso_de_pontuacao
##valido 26-10-17
#########################################################################################################################################################
		mostra(estudaespacamentos);
		mostra(dadosparaestudoespacamento);
mostra($idtpc);
mostra($ID_DE_EXECUCAO);

		estuda_espacamentonulodepoispontuacao_NOVO($nif_aluno,$ID_DITADO);
		mostra(INESCACABOU);
				mostra(estudaespacamentosFIM);
		
		
	##LIXO	estuda_pontuacao_todas_palavras_individual_pontuacao($palavra,$lat,$codigoTPC);
		
		####verifica_se_tem_carateres_especiais($palavra);
		
		###LIXO 	$palavra_limpa=limpa_palavra_pontuacao_e_refaz_nova_pilha_dois($palavra);
				##LIXO			   detecao_palavras_com_erros_ortograficos($palavra_limpa,$codigoTPC,$lat);
   


	}
	
	##acabaaqui
  #}		 


#=========================================================================================================================
#=========================================================================================================================
#copmecaaqui768768768
#=========================================================================================================================
#=========================================================================================================================
#ERROS INICIO ortograficos#################
#########################fim procura erros ortograficos


print_r(array(

  'memory' => (memory_get_usage() - $mem) / (1024),


));



$_SESSION['iddotpc']=$codigoTPC;


?> <input name="idditado" type="hidden" id="ip" value=<?php echo  $geraid; ?> /> <?php

?>

    <?php
	
	 require_once('./Connections/dic2me.php');
	 
	  ?>
     
<?php

header('Content-Type: text/html; charset=utf-8');

/////////////////
mysql_select_db($database_bdteste, $dic2me);


#########################estuda pontuacao

#  $dadostextonaBDt=ler_texto_em_BD($idtpc);


$dentrot=($dadostextonaBDt[0]);
$dimt=$dadostextonaBDt[1];

###########################################################
#primeiro estuda estuda o texto escrito
#segundo refaz a pilha de texto escrito, corrigindo por exemplo suituações scom virgula colada de modo aa compara com texto original correctamente
#########################################################

#Primeiro#Estudo de pvirgulas
#se tiver virgulas validar se tem espaço a seguir à virgula, se nao tiver é erro.

$ditadoescrito=$ditado_escrito_mas_na_BD;



 $ditadolimpo=explode(" ",$ditadoescrito);
 
	   		$nulotamanho=count($ditadolimpo);

$arr1 = str_split($ditadoescrito);
		$ditadolimpo_tamanho=count($arr1);



#Valida palavras escritas repetidas consecutivamente

######################################
#098098098detecta repeticao de palavras escritas consecutivamente


$ditadoescrito=$ditado_escrito_mas_na_BD;
$codigoTPC=$_GET['codigoTPC'];




$pilhacom_refeita_com_indicacao_palavras_escritas_com_nulo=refaz_pilha_analisando_as_palavras_que_faltam($ditadoescrito,$codigoTPC,$ID_DE_EXECUCAO);


			  $dim=count($pilhacom_os_valores_nao_escritos);
			 $codigoERRO="777";
			 detecta_palavras_escreitas_repetidamente_e_consexutivos($pilhacom_refeita_com_indicacao_palavras_escritas_com_nulo,$codigoTPC,$codigoERRO);


#FIM----------------------Valida palavras escritas repetidas consecutivamente

#ERROS ortograficos#################
###################################################################################
###criacao_da_pilha_com_todas_palavras_limpo_devirgulas e pontos
##agora vamos tentar emparelhar o ditado escrito com o texto original

#algoritmo é: limpamos todas as palavras , epois estudamos erros ortograficos do ditado escrito.

#Se for erro, verificamos a sua posição, e validamos a posição do ditado orinal, para a mesm posição que palavra temos.
#Por exemplo se em posição 3 for ero, vamos ver posição 3 no original


#function remove_carateres_estranhos_substitui_por_por_sinaligual($palavra)


function estuda_erros_ortograficos($pilhacom_refeita_com_indicacao_palavras_escritas_com_nulo)
{ 

 $ditadolimpo=explode("###",$pilhacom_refeita_com_indicacao_palavras_escritas_com_nulo);
	   		#$nulotamanho=count($ditadolimpo);
			#NOVO_cria_lista_palavra_separadaspor»»»($pilhacom_refeita_com_indicacao_palavras_escritas_com_nulo);
			
			
			#cria_lista_palavra_separadaspor»»»($pilhacom_refeita_com_indicacao_palavras_escritas_com_nulo);

#cria_lista_palavra_separadaspor»»»(



for ($lat = 0; $lat <= $nulotamanho; $lat++)
   {
	   $palavra=$ditadolimpo[$lat];
	   ##funciona bem
	   $palavracolada=cria_lista_palavra_separadaspor»»»($palavra);
	   
	   
	   
	   
   $separador_palavras="##==##";
	 $palavra_total=$palavra_total.$separador_palavras.$palavra;
   }

	$ID_DE_EXECUCAO1=rand(1, 4000);
$ID_DE_EXECUCAO2=rand(1, 1000);
$ID_DE_EXECUCAO=$ID_DE_EXECUCAO1+$ID_DE_EXECUCAO2;

#cria_ditado_escrito_por_aluno_com_carater_especial();

 for ($lat = 0; $lat <= $nulotamanho; $lat++)
   {

    
	
	
	$palavra=$ditadolimpo[$lat];
	
	
	if ( $palavra != NULL)
	{
		detecta_todos_erros_ortograficos($palavra);
		#funcao_binaria_detecao_palavras_com_erros_ortograficos($palavra);
		if (valida_APENAS_so_se_erros_ortograficos($palavra))
		{
			$codigo_interno_do_tpc=$_POST['id_doTPC'];
			$codigo_geral_TPC=obter_id_do_ditado_marcado_pelo_professor($codigo_interno_do_tpc);
    $funcao="valida_APENAS_so_se_erros_ortograficos";
	$tipoerro=9;

########### echo mostragaeeeeeeelo:estafuncao nao esta a ser usada
 if (verifica_se_aluno_já_TENTOU_PELO_MENOS_UMA_VEZ_CORRIGIR_O_DIITADO($codigo_interno_do_tpc) == 0)
   {

         inser_erros_individual_para_substituirpilhas_na_BD($ID_DE_EXECUCAO,$palavra,$posicao,$tipoerro,$idtpc,$funcao,$codigo_interno_do_tpc,$codigo_geral_TPC);
		 update_informar_se_TPC_prof_feito_pelo_aluno_com_ou_sem_erros($codigo_interno_do_tpc);
		}
   }
	
	#limpa_estuda_cada_palavra_nova($palavra);
		#detecao_palavras_com_erros_por_causa_do_case($palavra);
#	limpa_estuda_cada_palavra($palavra,$lat);
	}

	##acabaaqui
  }		 
}
 #-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------  
 #inicio do estudo de regras de pontuacao, espacamento, nomes proprios#####################################################################################################
  #-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------  
   #-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------  
   
 ########-----------------------------------------------------------------------------------#################################################..............................................  
##estudo comparativo 
####################################################################################################
###################################################################################################
#estudo comparativo ditado com texto original
#26-10-2017
#naovalidado
#92798473239784987
####################################################################################################


for ($lat = 0; $lat <= $nulotamanho; $lat++)
   {
	   $palavra=$ditadolimpo[$lat];
	
	
	if ( $palavra != NULL)
	{
       ESTUDA_compara_texto_ecrito_com_original($palavra,$codigo_geral_TPC);
	}
   }


###################################outras regras##############################################################################################################################
		###################################outras regras##############################################################################################################################
		###################################outras regras##############################################################################################################################
		mostra(estudaerrosortograficos);
		
#LIXOESTUDA	estuda_erros_ortograficos($pilhacom_refeita_com_indicacao_palavras_escritas_com_nulo);
				mostra(SERAFIMestudaerrosortograficos);
		
###########################################################################################################################################################		
###############Estuda SO pontuacao  array
###########################################################################################################################################################
 
 $ditadolimpo=explode("###",$pilhacom_refeita_com_indicacao_palavras_escritas_com_nulo);
	   		$nulotamanho=count($ditadolimpo);
			
		mostra(BOIVACA);
			
			




		mostra(BOIVACApasss);


##############################################

##estudo ponto final paragrafo rever


# $ditadolimpo=explode("###",$pilhacom_refeita_com_indicacao_palavras_escritas_com_nulo);
#	   		$nulotamanho=count($ditadolimpo);
			


		$ERRO="2212";
		    

#alglutinas_estudo_paragrafo($pilhacom_refeita_com_indicacao_palavras_escritas_com_nulo,$ERRO,$codigoTPC);

	##################
	###############**
	
	
	
	
###############################################################################
##FIMMMMMMMMMMM #################################outras regras##############################################################################################################################
		###################################outras regras##############################################################################################################################
		###################################outras regras##############################################################################################################################
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

<p>Clique nos menus em baixo, para consultar, por exemplo eros dados pelo aluno, ou texto original</p>
<?php mostra(AQUI1); ?>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">Erros Ortográficos</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Outros erros</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Ditado escrito pelo aluno</button>
      <button class="tablinks" onclick="openCity(event, 'Tokyo3')">Estatisticas comparativas</button>
  <button class="tablinks" onclick="openCity(event, 'galo')"> <n>Texto original<n></button>
</div>

<div id="London" class="tabcontent">
  <h3>Erros ortográfico</h3>
  
   <?php
   
#					   			   $ID_DITADO=$_POST['id_do_TPC'];
			  $erro=9; 
###			  $iddotpc=$_POST['id_do_TPC'];
########$alunosnif=$_POST['alunos'];
## CALOTA******************


		#$nif_aluno=obter_id_cookie_aluno();
		
#		 mostra(AQUI122); 
		$ID_DITADO=$_POST['id_doTPC'];




#$iddotpc_base=obtem_idtpc_da_tabela_dic2me_TPC($ID_DITADO, $nif_aluno);

#$nif_aluno=obter_id_cookie_aluno();
		$ID_DITADO=$_POST['id_doTPC'];
#$iddotpc_base=obtem_idtpc_da_tabela_dic2me_TPC($ID_DITADO, $nif_aluno);
			 
#$codigoTPC=obter_IDDOTPCDECADA_ALUNO();
$erro=9;
#			mostrar_erros_do_ditado_a_professorapelo_aluno_mostra_tabela($codigoTPC,$erro);
			?>
  
</div>

<div id="Paris" class="tabcontent">
  <h3>outros tipos de erros </h3>
  <h5>tabela com o tipo de erros analisados </h5>
  <br>
  <p>
 <h7> Tabela com os erros que são analiados pela nossa plataforms</h7>
   <br>
  <p>

 <?php mostrar_codigos_de_erros_do_ditado_a_professora(); ?>
   <br>
  <p>
<h2>Outros erros dado pelo anluno<h2>
    <?php
					   			   $ID_DITADO=$_POST['id_do_TPC'];
								   
			  $erro=9999; 
			  
			  
			  $iddotpc_base=obtem_idtpc_da_tabela_dic2me_TPC($iddotpc, $alunosnif);

#			mostrar_erros_do_ditado_a_professorapelo_aluno_mostra_tabela($iddotpc_base,$erro);
			?>
  
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Ditado escrito pelo aluno</h3>

  	<b><div>DITADO FEITO PELO ALUNO</div></b>
			 
             #;;;;;;;;;;;;;;;;;;;;;;;;;;
		<?php
		
#		$nif_aluno=obter_id_cookie_aluno();
		
		$ID_DITADO=$_POST['id_doTPC'];
		
		
		
		$ditadofeito_aluno=mostrar_ditado_escrito_pelo_aluno($nif_aluno,$ID_DITADO); 
		
		 $ditadolimpo_aluno=explode("\r\n",$ditadofeito_aluno);
 		
	   		$nulotamanho_aluno=count($ditadolimpo_aluno);
		
 for ($lat = 0; $lat <= $nulotamanho_aluno; $lat++)
   {


       echo $ditadolimpo_aluno[$lat];
	   ?><br><?php
	  
   }

		   ?>
			 

</div>



<div id="galo" class="tabcontent">
  <h3>Texto original</h3>
  	<b><div>Texto original</div></b>  
<?php 


#$arr = array("\n", "\r\n", "\r", " ");
 
#$palavralimpaz = explode(".", $palavra_entrada);

$ID_DITADO=$_POST['id_doTPC'];
#$row_Recordset1=mostrar_ditado_escrito_pelo_aluno($nif_aluno,$ID_DITADO); 

# ;;;;;;;;;;;;;;;;;;;;;;;;;; ;;;;;;FEITOOOO
$ID_DITADO=$_POST['id_doTPC'];
$textooriginal=obterlista_textos__para_professor_compara_com_texto_escrito_aluno($ID_DITADO);
$ditadofeito=$row_Recordset1['ditadofeito'];
$tempoquedemorouafazerditado=$row_Recordset1['tempoquedemorouafazerditado'];
$dataregisto=$row_Recordset1['dataregisto'];

$DADOS_TPC=obteridddados_do_TPC($ID_DITADO);
$datageracao=$DADOS_TPC[0];
$descricao=$DADOS_TPC[1];




 $ditadolimpo=explode("\r\n",$textooriginal);
 
	   		$nulotamanho=count($ditadolimpo);
	?><br><?php		
			
 for ($lat = 0; $lat <= $nulotamanho; $lat++)
   {
?><br><?php
       echo $ditadolimpo[$lat];
	   ?><br><?php
	  
   }


 ?>
</div>

<div id="Tokyo3" class="tabcontent">
  <h3>Estatisticas comparativas</h3>

  	<b><div>Estatisticas comparativas</div></b>
			 

</div>



<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
     
</body>
</html> 
				  





?> 

		
 </div>
 <footer>footer</footer>
</body>
</html>


   