 <?php

	  #############################################
##procura erros ortograficostttt555
######################ESTUDO DA VIRGULA##################################################00099887

###1231321###################ESTUDO DA ponto FINAL (verifica se palavra começa por maiuscula depois de ponto final##################################################
		
#23423342######################################################################################
#estuda erros ortograficos NAOTERMINADO
######################################################################################
###645646###################ESTUDO DA ponto FINAL (verifica se palavra começa por maiuscula depois de ponto final##################################################

###########
#34534543INICIO
#################################################################ESTUDO PONTO finl PARGRAFO######################################################

######################################
#098098098detecta repeticao de palavras escritas consecutivamente



	 require_once('./Connections/dic2me.php'); ?>
<?php  session_start(); ?>
<?php
header('Content-Type: text/html; charset=utf-8');

/////////////////
mysql_select_db($database_bdteste, $dic2me);
#

#########################estuda pontuacao

require_once('./funcoes/funcoes.php'); 



$codigoTPC=$_GET['codigoTPC'];
echo "MUIMUI";
echo $codigoTPC;
#
$idtpc=obteriddotextoa_partir_id_do_TPC($codigoTPC);
#

?><br /><?php

?><br /><?php
#
#exit;
$inicio_fim=geramarcadormilisegundos();
#$DADOS_ditado_feito=gera_lsta_ditado_escrito_e_limpo($_POST['ditado']);

$nif_aluno=obtemnnif($_GET['CONTROLO']);


$inciciotempo=$_POST['tempoiniciomilisegundos'];

?>
<input name="tempoFIMmilisegundos" type="hidden" value="<?php echo $inicio_fim?>">


<?php
$inciciotempo=$_POST['tempoiniciomilisegundos'];
$diferenca1=($inicio_fim-$inciciotempo)/1000;
$diferenca=($inicio_fim-$inciciotempo);
$controlo=$_GET['CONTROLO'];
$codigoTPC=$_GET['codigoTPC'];

#############################registar em BD ditado feito pelo menino
registar_em_bd_ditado_do_menino($_POST['ditado'],$codigoTPC,$nif_aluno,$diferenca);

#########################################################################

#############################################
##procura erros ortograficostttt555

$id_testo=1;



#########################fim procura erros ortograficos




$_SESSION['iddotpc']=$idtpc;


?> <input name="idditado" type="hidden" id="ip" value=<?php echo  $geraid; ?> /> <?php

?>

    <?php
	
	 require_once('./Connections/dic2me.php'); ?>
<?php  session_start(); ?>
<?php
header('Content-Type: text/html; charset=utf-8');

/////////////////
mysql_select_db($database_bdteste, $dic2me);


#########################estuda pontuacao

  $dadostextonaBDt=ler_texto_em_BD($idtpc);


$dentrot=($dadostextonaBDt[0]);
$dimt=$dadostextonaBDt[1];

###########################################################
#primeiro estuda estuda o texto escrito
#segundo refaz a pilha de texto escrito, corrigindo por exemplo suituações scom virgula colada de modo aa compara com texto original correctamente
#########################################################

#Primeiro#Estudo de pvirgulas
#se tiver virgulas validar se tem espaço a seguir à virgula, se nao tiver é erro.

$ditadoescrito=$_POST['ditado'];

 $ditadolimpo=explode(" ",$ditadoescrito);
	   		$nulotamanho=count($ditadolimpo);
			
$arr1 = str_split($ditadoescrito);
		$ditadolimpo_tamanho=count($arr1);



#estuda virgulas
 for ($lat = 0; $lat <= $nulotamanho; $lat++)
   {

echo "ESTUDASOL";
$palavraescrita=$ditadolimpo[$lat];
echo $palavraescrita;
				  ?><br><?php
				  





###########################################################################################################
###################inicio novo
###########################################################################################################

					  $arr = array(",", ".", "!", "=");
							  echo "CICLOIMPORTANTE";
							  ?><br><?php
							  #######################################################################################################
							  ###primeiro vai verificar se tem pontuacao, depois é que vamos estudar palavra a palavra
							  ##isto porqu se a palavra tiver a pontuacao de certo ue é erro33
		   					  #######################################################################################################
			         foreach ($arr as &$value) {
		 $carater_a_limpar= "$value";
		 
		              if ( $carater_a_limpar == ",")
					   {
					 #################
					 if ( verifica_se_tem_pontuacao_de_palavra_estudo($palavraescrita,$carater_a_limpar))
									   {
										   echo "temvirgula";
										  ?><br><?php
								echo "NOMEPROPRIOESTUDOantes";
								echo $palavraescrita;
								
								###verifica espacamento m nulo depois de pontuacao
								
								$valorees=obter_valores_limpos_de_pontuacao_primeiro_e_seguinte($palavraescrita,",");

                                  $valor1=$valorees[0];
                                   $valor2=$valorees[1];
                                 $ERRO="33";
								 echo "VAL1";
								 echo $valor1;
								 								 echo "VAL2";
								 echo $valor2;

                				  regra_da_espaco_em_branco_depois($valor1,$valor2,$palavraescrita,$idtpc,$ERRO,$lat);
								
								###fim verifica espacamento nulo depois de pontuacao
		
							if (verificaSE_SO_SE_EE_NOMESPROPRIOS($palavraescrita))
							{
								echo "NOMEPROPRIOESTUDO";
								  ?><br><?php
								echo $palavraescrita;
							  if (valida_se_regra_verifica_se_palavra_comeca_por_Letramaiuscula_apenas($palavraescrita))
								{
									echo "ERROMASUSCULA";
																			  ?><br><?php
									$ERRO="77";
									inser_erros_individual_para_substituirpilhas_na_BD($palavra,$lat,$ERRO,$idtpc,$palavracorrigida,$ID_DE_EXECUCAO);
								}
								
							}						
					 
					 
					 ###############
					 
					 
					 
					   }

		              if ( $carater_a_limpar == ",")
					   {
					 
					   }
		              if ( $carater_a_limpar == ",")
					   {
					 
					   }
		              if ( $carater_a_limpar == ",")
					   {
					 
					   }
		
		
					 }
					 

					 }
###########################################################################################################
###################FIM inicio novo
###########################################################################################################
				  
				  
######################ESTUDO DA VIRGULA##################################################00099887

  if (verifica_se_tem_pontuacao_de_palavra_estudo($palavraescrita,","))
			  {
				  $ERRO=337;
				  				  $valorees=obter_valores_limpos_de_pontuacao_primeiro_e_seguinte($palavraescrita,",");

$valor1=$valorees[0];
$valor2=$valorees[1];

				  regra_da_espaco_em_branco_depois($valor1,$valor2,$palavraescrita,$idtpc,$ERRO,$lat);
				  				  echo "NOVOTEMVIRGULA-----------------------------------------------------------------------------------------------------------------------------------------";
				  ?><br><?php

echo "VALOR1";
	  ?><br><?php
echo $valor1;
	  ?><br><?php
echo "VLOR2";
	  ?><br><?php
echo $valor2	;

				  echo "NOVOTEMVIRGULA";
				  ?><br><?php
				  echo $palavraescrita;
				  				  ?><br><?php
				  ###apagapartidaqui
				  $palavraescritalimpa=processamento_caso_erros_de_virgula($palavraescrita);
#				verifica_se_proximo_e_nulo
							 
			  }


			
###1231321###################ESTUDO DA ponto FINAL (verifica se palavra começa por maiuscula depois de ponto final##################################################

  if (verifica_se_tem_pontuacao_de_palavra_estudo($palavraescrita,"."))
			  {
			#	  echo "PONTUACOOOOOOOOOOOOOOOOOOOOOOOOOOOpontofibal";
				  
			#	  echo $palavraescrita;
				  $ERRO=338;
				  				  $valorees=obter_valores_limpos_de_pontuacao_primeiro_e_seguinte($palavraescrita,".");

$valor1=$valorees[0];
$valor2=$valorees[1];

#echo "ESTUDOMAIUSCULA";

regra_Letramaiuscula_logo_depois_de_pontuacao_ou_outro_depois($palavraescrita, $valor2);
$ERRO="224";
				  regra_da_espaco_em_branco_depois($valor1,$valor2,$palavraescrita,$idtpc,$ERRO,$lat);

				  ###apagapartidaqui
				  $palavraescritalimpa=processamento_caso_erros_de_virgula($palavraescrita);
#				verifica_se_proximo_e_nulo
							 
			  }


#############################################################################################################################################################
######################ESTUDO DA ponto FINAL (letra maiusculalogo de seguida##################################################
#############################################################################################################################################################
  if (verifica_se_tem_pontuacao_de_palavra_estudo($palavraescrita,"."))
			  {
				  $ERRO=339;
				  				  $valorees=obter_valores_limpos_de_pontuacao_primeiro_e_seguinte($palavraescrita,".");

$valor1=$valorees[0];
$valor2=$valorees[1];

				  regra_da_espaco_em_branco_depois($valor1,$valor2,$palavraescrita,$idtpc,$ERRO,$lat);
				  ###apagapartidaqui
				  $palavraescritalimpa=processamento_caso_erros_de_virgula($palavraescrita);
#				verifica_se_proximo_e_nulo
							 
			  }




   }




$ditadoescrito=$_POST['ditado'];

 $ditadolimpo=explode(" ",$ditadoescrito);
	   		$nulotamanho=count($ditadolimpo);
			
$arr1 = str_split($ditadoescrito);
		$ditadolimpo_tamanho=count($arr1);
		
		
#23423342######################################################################################
#estuda erros ortograficos
######################################################################################


###############estudo novo
#################################

 for ($lat = 0; $lat <= $ditadolimpo_tamanho; $lat++)
   {
			

			$palavraescrita=$ditadolimpo[$lat];
							  
							  
#################################################################################
							  
							  
							  
							  
							  #######################
             #verifica nomesproprios234234
	
	    
		  #caso nao seja nome proprio verificar 
		
			  
	
#	                $valor1=$estudo_palvra_com_virgulas[$lat];		
					
							  $arr = array(",", ".", "!", "=");
							  echo "CICLOIMPORTANTE";
							  ?><br><?php
							  #######################################################################################################
							  ###primeiro vai verificar se tem pontuacao, depois é que vamos estudar palavra a palavra
							  ##isto porqu se a palavra tiver a pontuacao de certo ue é erro33
		   					  #######################################################################################################
			         foreach ($arr as &$value) {
				
							$carater_a_limpar= "$value";
							echo "palavraeztudar";
							echo $palavraescrita;
							$palavra=$palavraescrita;
										  ?><br><?php
										  ########################################################################
										  ###################estuda so se nao tiver pontuacao
										  ########################################################################
							if ( ! verifica_se_tem_pontuacao_de_palavra_estudo($palavraescrita,$carater_a_limpar))
									   {
										   echo "NAOTEMPONTUACAO";
										  ?><br><?php
								echo "NOMEPROPRIOESTUDOantes";
								echo $palavraescrita;
		
							if (verificaSE_SO_SE_EE_NOMESPROPRIOS($palavraescrita))
							{
								echo "NOMEPROPRIOESTUDO";
								  ?><br><?php
								echo $palavraescrita;
							  if (valida_se_regra_verifica_se_palavra_comeca_por_Letramaiuscula_apenas($palavraescrita))
								{
									echo "ERROMASUSCULA";
																			  ?><br><?php
									$ERRO="77";
									inser_erros_individual_para_substituirpilhas_na_BD($palavra,$lat,$ERRO,$idtpc,$palavracorrigida,$ID_DE_EXECUCAO);
								}
								
							}						
									   
										   if ( valida_APENAS_so_se_erros_ortograficos($palavra))
										   {
											   echo "ERROTOGTRRAFICO";
											   										  ?><br><?php
											   echo $palavra;
											   $ERRO=9;
											   inser_erros_individual_para_substituirpilhas_na_BD($palavra,$lat,$ERRO,$idtpc,$palavracorrigida,$ID_DE_EXECUCAO);
										   }
							   
									   }
					     }  
							  $arr = array(",", ".", "!", "=");
							  echo "CICLOIMPORTANTE";
							  ?><br><?php
							  #######################################################################################################
							  ###primeiro vai verificar se tem pontuacao, depois é que vamos estudar palavra a palavra
							  ##isto porqu se a palavra tiver a pontuacao de certo ue é erro
		   					  #######################################################################################################
			         foreach ($arr as &$value) {
				
							$carater_a_limpar= "$value";
							echo "palavraeztudar";
							echo $palavraescrita;
										  ?><br><?php
										  #se tiver pontuacao entao faz....
										  ########################################
										  ##estuda se tivr pontuacao
										  ###########################################
							if (verifica_se_tem_pontuacao_de_palavra_estudo($palavraescrita,$carater_a_limpar))
									   {
										   
										    
											
										   ################mesmocom pontuacaopode haver nomes proprio, estudo disso
										   
										   								echo "NOMEPROPRIOESTUDOantesnapontuacao";
								echo $palavraescrita;
		
		#estuda se nomes proprio#####################
		
							if (verificaSE_SO_SE_EE_NOMESPROPRIOS($palavraescrita))
							{
								echo "NOMEPROPRIOESTUDO";
								  ?><br><?php
								echo $palavra;
							  if (valida_se_regra_verifica_se_palavra_comeca_por_Letramaiuscula_apenas($palavra))
								{
									echo "ERROMASUSCULA";
																			  ?><br><?php
									$ERRO="77";
									inser_erros_individual_para_substituirpilhas_na_BD($palavra,$lat,$ERRO,$idtpc,$palavracorrigida,$ID_DE_EXECUCAO);
								}
								
							}								   

										   
										   
										   #############fim estudo nomes proprios

										echo "VAIESTUDARESSAdentrociclopontuacao";
									  ?><br><?php
									  echo $palavraescrita;
									 $estudo_palvra_com_virgulas=explode($carater_a_limpar,$palavraescrita);
											  $tamanho_palavra_com_virgulas=count($estudo_palvra_com_virgulas);
								  
											  echo $tamanho_palavra_com_virgulas;
								  #			echo "principal";
									  ?><br><?php
									  
										
											   for ($latvir = 0; $latvir <= $tamanho_palavra_com_virgulas; $latvir++)
													   {

														$valor1=$estudo_palvra_com_virgulas[$latvir];		
														echo "VALOR1";
																		  ?><br><?php
														echo $valor1;
																		  ?><br><?php
															$ERRO="999999";		
															echo "Val1";	  
																																	  ?><br><?php
															echo $valor1;
																																	  ?><br><?php
															echo "VAL2";
																																	  ?><br><?php
															echo $valor2;
																																	  ?><br><?php
															echo "PALESCRITA";
																																	  ?><br><?php
															echo $palavraescrita;
																																	  ?><br><?php
													 regra_da_espaco_em_branco_depois($valor1,$valor2,$palavraescrita,$idtpc,$ERRO,$lat);				  
														valida_so_se_erros_ortograficos($valor1,$palavraescrita,$idtpc,$lat);	  
													  }
						
									  }
			############
			
			
			
			                                 
											 ##################################
											 
											 $ERRO=337;
				  				  $valorees=obter_valores_limpos_de_pontuacao_primeiro_e_seguinte($palavraescrita,",");

$valor1=$valorees[0];
$valor2=$valorees[1];

				  regra_da_espaco_em_branco_depois($valor1,$valor2,$palavraescrita,$idtpc,$ERRO,$lat);
				  				  echo "NOVOTEMVIRGULA-----------------------------------------------------------------------------------------------------------------------------------------";
				  ?><br><?php
				  
											 #############
											 
											  $valorees=obter_valores_limpos_de_pontuacao_primeiro_e_seguinte($palavraescrita,".");
			
			$valor1=$valorees[0];
			$valor2=$valorees[1];
			$ERRO="333";
							  regra_da_espaco_em_branco_depois($valor1,$valor2,$palavraescrita,$idtpc,$ERRO,$lat);
							  ###apagapartidaqui
							  $palavraescritalimpa=processamento_caso_erros_de_virgula($palavraescrita);
			#				verifica_se_proximo_e_nulo
										 
						  
			
				
				
				?><br><?php
				echo  "$value";
				
			}
			
			echo "REPETIZ";
			echo $palavraescrita;
   }
   
   




#######################fim estudonovo
#######################################



   
   
   
    for ($lat = 0; $lat <= $ditadolimpo_tamanho; $lat++)
   {

echo "ESTUDASOL";
$palavraescrita=$ditadolimpo[$lat];
echo $palavraescrita;


######################limpeza no caso de ter  VIRGULA##################################################

  if (verifica_se_tem_pontuacao_de_palavra_estudo($palavraescrita,","))
			  {
		
		#vamos tratar como se fosse uma pilha, para o caso de ter muitas virgulas seguidas:
				  
				   $estudo_palvra_com_virgulas=explode(",",$palavraescrita);
	   		$tamanho_palavra_com_virgulas=count($estudo_palvra_com_virgulas);

			echo $tamanho_palavra_com_virgulas;
#			echo "principal";

	   echo $palavraescrita;
			 for ($latvir = 0; $latvir <= $tamanho_palavra_com_virgulas; $latvir++)
                     {
				      $valor1=$estudo_palvra_com_virgulas[$latvir];		
   			          valida_so_se_erros_ortograficos($valor1,$palavraescrita,$idtpc,$lat);	  
                    }
	   



							 
			  }


###645646###################ESTUDO DA ponto FINAL (verifica se palavra começa por maiuscula depois de ponto final##################################################

  if (verifica_se_tem_pontuacao_de_palavra_estudo($palavraescrita,"."))
			  {
			#	  echo "PONTUACOOOOOOOOOOOOOOOOOOOOOOOOOOOpontofibal";
				  
			#	  echo $palavraescrita;
				  $ERRO=335;
				  				  $valorees=obter_valores_limpos_de_pontuacao_primeiro_e_seguinte($palavraescrita,".");

$valor1=$valorees[0];
$valor2=$valorees[1];

#echo "ESTUDOMAIUSCULA";
$ERRO="224";
regra_Letramaiuscula_logo_depois_de_pontuacao_ou_outro_depois($palavraescrita, $valor2,$idtpc,$ERRO,$lat);

				  regra_da_espaco_em_branco_depois($valor1,$valor2,$palavraescrita,$idtpc,$ERRO,$lat);

				  ###apagapartidaqui
				  $palavraescritalimpa=processamento_caso_erros_de_virgula($palavraescrita);
#				verifica_se_proximo_e_nulo
							 
			  }


######################ESTUDO DA ponto FINAL (letra maiusculalogo de seguida##################################################

  if (verifica_se_tem_pontuacao_de_palavra_estudo($palavraescrita,"."))
			  {
				  $ERRO=336;
				  				  $valorees=obter_valores_limpos_de_pontuacao_primeiro_e_seguinte($palavraescrita,".");

$valor1=$valorees[0];
$valor2=$valorees[1];

				  regra_da_espaco_em_branco_depois($valor1,$valor2,$palavraescrita,$idtpc,$ERRO,$lat);
				  ###apagapartidaqui
				  $palavraescritalimpa=processamento_caso_erros_de_virgula($palavraescrita);
#				verifica_se_proximo_e_nulo
							 
			  }




   }




###########
#34534543INICIO
#################################################################ESTUDO PONTO finl PARGRAFO######################################################
#################################################################ESTUDO PONTO finl PARGRAFO######################################################
#################################################################ESTUDO PONTO finl PARGRAFO######################################################
#################################################################ESTUDO PONTO finl PARGRAFO######################################################
#################################################################ESTUDO PONTO finl PARGRAFO######################################################

$ditadoescrito=$_POST['ditado'];

 $ditadolimpo=explode(" ",$ditadoescrito);
	   		$nulotamanho=count($ditadolimpo);
			
$arr1 = str_split($ditadoescrito);
		$ditadolimpo_tamanho=count($arr1);
		

 for ($lat = 0; $lat <= $ditadolimpo_tamanho; $lat++)
   {

echo "ESTUDAPARAGRAFO";
		  ?><br><?php
echo "ESTUDA";
		  ?><br><?php
echo $ditadolimpo[$lat];
		  ?><br><?php
echo "DEPOIS";
		  ?><br><?php
echo $ditadolimpo[$lat+1];
		  ?><br><?php
$palavraescrita=$ditadolimpo[$lat];
		  ?><br><?php
		  echo "palavraescrita";
		  		  ?><br><?php
echo $palavraescrita;
$result=newline_type($palavraescrita);
  ?><br><?php
echo "GALOSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS";
  ?><br><?php
echo $result;
  ?><br><?php
if ($result != "")
{
	echo$palavraescrita;
if (verifica_se_tem_pontuacao_de_palavra_estudo($palavraescrita,"."))
			  {
				    ?><br><?php
echo "AQUIIIIIIIIIIII222";
  ?><br><?php
				  				  $valorees=obter_valores_limpos_de_pontuacao_primeiro_e_seguinte($palavraescrita,".");

$valor1=$valorees[0];
echo "VAL1";
echo $valor1;
$valor2=$valorees[1];
echo "VAL2";
echo $valor2;
			  }

$erroid="221";
regra_Letramaiuscula_logo_depois_de_pontuacao_ou_outro_depois($palavraescrita, $valor2,$erroid);
   }
   }



##############################################################################################################
###########FIM estudo de ponto final PARAGRAFO
##############################################################################################################






#########################################FIM estudo ponto final pragrafo#################################################################




###########
#INICIO
#################################################################ESTUDO comparacao com que foi escrito######################################################
#################################################################ESTUDO comparacao com que foi escrito######################################################
#################################################################ESTUDO comparacao com que foi escrito######################################################
#################################################################ESTUDO comparacao com que foi escrito######################################################
#################################################################ESTUDO comparacao com que foi escrito######################################################

$ditadoescrito=$_POST['ditado'];

 $ditadolimpo=explode(" ",$ditadoescrito);
	   		$nulotamanho=count($ditadolimpo);
			
$arr1 = str_split($ditadoescrito);
		$ditadolimpo_tamanho=count($arr1);

		

 for ($lat = 0; $lat <= $ditadolimpo_tamanho; $lat++)
   {

echo "ESTUDAPARAGRAFO";
		  ?><br><?php
echo "ESTUDA";
		  ?><br><?php
echo $ditadolimpo[$lat];
		  ?><br><?php
echo "DEPOIS";
		  ?><br><?php
echo $ditadolimpo[$lat+1];
		  ?><br><?php
$palavraescrita=$ditadolimpo[$lat];
		  ?><br><?php
		  echo "palavraescrita";
		  		  ?><br><?php
echo $palavraescrita;
$result=newline_type($palavraescrita);
  ?><br><?php
echo "GALOSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS";
  ?><br><?php
echo $result;
  ?><br><?php
if ($result != "")
{
	echo$palavraescrita;
if (verifica_se_tem_pontuacao_de_palavra_estudo($palavraescrita,"."))
			  {
				    ?><br><?php
echo "AQUIIIIIIIIIIII222";
  ?><br><?php
				  				  $valorees=obter_valores_limpos_de_pontuacao_primeiro_e_seguinte($palavraescrita,".");

$valor1=$valorees[0];
echo "VAL1";
echo $valor1;
$valor2=$valorees[1];
echo "VAL2";
#valor2 é a palavra escrita depois da pontuacao
#$palavraescrita é a palavra toda
echo $valor2;

			  }
$ERRO="224";
regra_Letramaiuscula_logo_depois_de_pontuacao_ou_outro_depois($palavraescrita, $valor2,$ERRO,$lat);
   }
   }



##############################################################################################################
###########FIM estudo de ponto final PARAGRAFO
##############################################################################################################



######################################
#098098098detecta repeticao de palavras escritas consecutivamente


$ditadoescrito=$_POST['ditado'];
$codigoTPC=$_GET['codigoTPC'];
echo "MUIMUIzalo";
echo $codigoTPC;
echo "DITADOESCRITO";
echo $ditadoescrito;

$pilhacom_refeita_com_indicacao_palavras_escritas_com_nulo=refaz_pilha_analisando_as_palavras_que_faltam($ditadoescrito,$codigoTPC,$ID_DE_EXECUCAO);


			  $dim=count($pilhacom_os_valores_nao_escritos);
			 $codigoERRO="777";
			 detecta_palavras_escreitas_repetidamente_e_consexutivos($pilhacom_refeita_com_indicacao_palavras_escritas_com_nulo,$codigoTPC,$codigoERRO);


































#segundo estudo de maiuscula depois de ponto final


#Estudo de espaço depois de ponto final


estudapontuacaoeespacamentos($_POST['ditado'],$idtpc,$ID_DE_EXECUCAO);
   
$ditadolimpo=explode(" ",$_POST['ditado']);  
#		$ditado=($pilhaalimpar);  
		$ditadolimpo_tamanho=count($ditadolimpo);
		
# $ditadolimpo=$limpo_a[0];
 #$ditadolimpo_tamanho=$limpo_a[1];
 		
 for ($jpa = 0; $jpa <= $ditadolimpo_tamanho; $jpa++)
   {
 #estudo de maiusculas logo depois de pontuacao
 $palavraanterior=$ditadolimpo[$jpa-1];
 $ID_DE_EXECUCAO1=rand(1, 4000);
$ID_DE_EXECUCAO2=rand(1, 1000);
$ID_DE_EXECUCAO=$ID_DE_EXECUCAO1+$ID_DE_EXECUCAO2;
 verifica_se_tem_pontuacao_a_palavra($ditadolimpo[$jpa], $jpa, $ditadolimpo[$jpa+1],$idtpc,$palavraanterior,$ID_DE_EXECUCAO);
 ##
   }



#############################################
##procura erros ortograficos
#
#$id_testo=1;

$codigoTPC=$_GET['codigoTPC'];


comparaentre_escrito_BD($_POST['ditado'],$id_testo,$codigoTPC,$ID_DE_EXECUCAO,$codigoTPC);
#
#########################fim procura erros ortograficos


#
#return array($listafinal, $jj);
#$resultado=gera_lista_final_trabalhada($ditadolimpo, $ditadolimpo_tamanho);
#$lista=$resultado[0];
#$tamanho=$resultado[1];
#
#
#$iddoditado=$_SESSION['iddotpc'];
#compara_bd_e_escrito($_POST['ditado'],$iddoditado,,$NEXTpalavra,$palavranaBD_NEXT);




##########################################################################################################################################################################
#############fim de estuda pontuacao
######################################################################################################################################################
######################################################################################################################################################





















# $Recordset22 =sprintf("use itgptech_interna ");
#mysql_query($Recordset22, $dic2me) or die(mysql_error());
#obter numero do texto com que devemos comparar;



#mysql_select_db($database_bdteste, $dic2me);
 #  $query_Recordset2 =sprintf("SELECT linha_texto FROM dic2me_linhas WHERE id_linha=%s ",
  #  GetSQLValueString($valTEXT, "text"));
  
 
##Limpa texto na BD


  $dadostextonaBD=ler_texto_em_BD($idtpc);


$dentro=($dadostextonaBD[0]);
$dim=$dadostextonaBD[1];



   $limpo_aa=limpa_da_pontuacao($dentro,"BD",$dim); 
 $ditadolimpoBDa=($limpo_aa[0]);
 $ditadolimpo_tamanhoBDa=$limpo_aa[1];
    #$oditado_escrito=$dadostextonaBD[0];
	 #   $dimensao_oditado_na_BD=$dadostextonaBD[1];

		   
	
  #Limpa texto entrada

 $limpo_a=limpa_da_pontuacao($_POST['ditado'],"escrito"); 

 $ditadolimpo=$limpo_a[0];
 $ditadolimpo_tamanho=$limpo_a[1];

$iddoditado=$_SESSION['iddotpc'];



$controlo=$_GET['CONTROLO'];
$TPCcodigo=$_GET['codigoTPC'];


vertabelaerros($controlo,$TPCcodigo,$ID_DE_EXECUCAO);

$nif_aluno=obtemnnif($controlo);

update_informar_se_TPC_prof_feito_pelo_aluno_com_ou_sem_erros($TPCcodigo,$nif_aluno);
#operacoes finais, por exemplo update de fim de ditado, e email oinformar pais.



update_aluno_fez_ditado($TPCcodigo,$controlo);

$controlo=$_GET['CONTROLO'];
$TPCcodigo=$_GET['codigoTPC'];

notifica_enceduca_sobre_ditado_feito_enviaremail($TPCcodigo,$controlo);

?> 

		
 </div>
 <footer>footer</footer>
</body>
</html>


