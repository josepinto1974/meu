<?php $config_estatistica=10; ?>
split

<?php 

#linha 442$lista_original_limpa[$limpo]=$texto_original[$jbad];

#importante 23423423 esta lista estsincronizada com ao texto original.
# se tiver escrito texto 
#a galinha castnha ....moinhuz ....para poder comparar terei que ter uma lista com as palavras originais:
#a galinha castanh vive perto do moinho
#portanto as palvras -vive perto do- não podem estar na pilha de originais de compara porque não form escritas e driam falsos erro.
#nedste exemplo temos que ter em atnnção que a palavar moinhuz está mal escrita mas não na totalidade,por isso temos qu analisra estatisticamnete os erro para saber se a palvra deve ou não ser #descrartada.Se só tiver algumas letra diferente, entõ deve ser considerado...simplesmente dev ser um erro.

#	$lista_original_limpa[$limpo]=$texto_original[$jbad];




select 

#Importante 0998753247523				
#pode acontecer o caso mais compleso: 
#Original
#a galinha castanha vive
# se for escrito
# a galinha vive
#Foi esquecido a palavra castanha, e isso dessincroniza tudo, atenção que esquecido é diferente de um espaço em branco
#o algoritmo deve ser 
#comparo primeiro todas as palavras que deveriam ter sido escritas e não foram, é um pouco ao contrario de que está a ser feito
#caso mais complexo é distinguir erros de palvra omitidas.


#980 : muda fundo onde e escrito frase com e sem erros
#952 :  muda fundo onde dfoi escrito
#_______________________________________________________________________________________________________________

##Importante:09987654332343 aqui removemos as asneiras do ditado original e substituimos as palavras po -------------


#Importante000008888
#palavra escrita pelo aluno
#					$palavra_escrita=$strip_certo[0];

#palavra que deveria ter sido escritsa
#					$palavra_na_BD=$strip_certo[1];

#echo $strip_certo[0];
#echo "#2\n";
#echo $strip_certo[1];
#echo "#3\n";

#IMPORTANTE0999999999999988888888888887777777777777777722222222
#ALG:
#Se forem iguais, então escrevo a amarelo
#Se forem fiferentes verifico SE $palavra_escrita, é erro ortografico ou não, se for então palavra _na_BD é a correcta
#Posso também verificar se é uma questao de CASE

 #1# vivu#2 vive#3 
 
 
# erro:a:correrro:A:::::erro:galinha:correrro:galinha:::::erro:castanha:correrro:castanha:::::erro:vivu:correrro:vive:::::erro:perto:correrro:perto:::::erro:do:correrro:do:::::erro:moinho:correrro:moinho:::::******222222 ####===999 #########_________ #1# erro:a#2 A#3

#----------------------------------------------------------------------------------------------------------------------------------

#Importante9 : aqui compara p+alavra original e palavra corrigida
#$str1=$palavra_correcta[$i];
#$str2=$palavra_corrigida[$i]; 

		#	importantee00	#Se corr > 1 a palavra certa está em $correcta_palavra_erro[1], palavra errada em $correcta_palavra_erro[2]

#	importantee00	#Se corr > 1 a palavra certa está em $correcta_palavra_erro[1], palavra errada em $correcta_palavra_erro[2]
#				echo "######################################\n";
#				echo $correctas[$p];
#				echo "»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»\n";
#				echo $correc_num_erro;
#				echo "####****\n";
#		echo "***lkjkljlkj*********+++++++++++++++++++\n";
#echo $correcta_palavra_erro[0];
#echo "####PPPPP###\n\n";



#nota importante 12345
#$correcta_palavra_corrigida[0] : castanhu (erro)
#$correcta_palavra_corrigida[1] castanha (corrigida 

##importante 333445665
#aqui coloco tudo entre erro: e correrro, o motivo é para ter tudo o texto numa so string e assim, deve
#estrair o que esta entre erro e correrro	e comparar, se for igual então não há erro
?>


    <?php require_once('./Connections/dic2me.php'); ?>
<?php  session_start(); ?>
<?php
header('Content-Type: text/html; charset=utf-8');


if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

/////////////////
mysql_select_db($database_bdteste, $dic2me);


 $Recordset22 =sprintf("use itgptech_interna ");
mysql_query($Recordset22, $dic2me) or die(mysql_error());
$valTEXT='1';

mysql_select_db($database_bdteste, $dic2me);
   $query_Recordset2 =sprintf("SELECT linha_texto FROM dic2me_linhas WHERE id_linha=%s ",
    GetSQLValueString($valTEXT, "text")); 

echo $query_Recordset2;

$Recordset2 = mysql_query($query_Recordset2, $dic2me) or die(mysql_error());

while($arrayRow = mysql_fetch_assoc($Recordset2)) {
	
      $regcodigo=$arrayRow[linha_texto];
   }
  mysqli_close($liga);

echo "TOTALLLLLLLLLLO";
echo $regcodigo;
$texto_original = explode(" ", $regcodigo);
$tamanho_na_bd=count($texto_original);

//FIM processar o que está na BD
//or

//Ler texto escrito

$ditado=explode(" ",$_POST['ditado']);  
$tamanho_escrito=count($ditado);


function limpa_palavra($palavra1) 
{
 $textolimpo = trim($palavra1, "\0");
$outros = explode(".", $textolimpo);
$valida=count($outros);

if ( $valida > 0)
  {
 
 $clear=$outros[0];
 $textolimpo=$clear;
return  $textolimpo; 
  }

 $textolimpo = trim($palavra1, "\0");
$outros = explode(",", $textolimpo);
$valida=count($outros);



if ( $valida > 0)
  {
 
 $clear=$outros[0];
 $textolimpo=$clear;
 
  }
 
     
  
}





for ($jb___ = 0; $jb___ < $tamanho_escrito; $jb___++){
	$ferro++;
	 mysql_select_db($database_dic2me, $dic2me);
	# echo "VALORRRRRRRRRRRRRRRRRRRRRR\n";
	 #echo $ditado[$jb___];
	 #echo "#########6666666666666#############################\n";
	 #echo "############fim 6################################\n";
	 #echo "numero \n";
	 #echo $jb___;
	 
	 
													 $query_Recordset2 =sprintf("SELECT palavra FROM dic2me_palavras_individuais_PORTUGUES WHERE palavra=%s ",
														  GetSQLValueString($ditado[$jb___], "text"));
												  $Recordset2 = mysql_query($query_Recordset2, $dic2me) or die(mysql_error());
												  $Recordset2 = mysql_query($query_Recordset2, $dic2me);
												  $totalRows_Recordset1 = mysql_num_rows($Recordset2);
			  $comparar="SIM";
											  if($totalRows_Recordset1 == 0)
												  {
													  #importante: se for zero é porque é erro então anao comparar, para verificar se foi ou nao escrito, porque o termo de comparação que esta no ditado e ele proprio um erro ortoografico
													  #se comparar for nunca então o que foi escrito é um erro e não serve para comparar
													$comparar="NUNCA";  

												  }

	$foi_encontrado_uma_vez="NAO";  
	#echo $comparar;
	#echo "#############**************************************************************\n";
	#echo $ditado[$jb___];
	#echo $query_Recordset2;
	#echo "numerossssssssssssssssss\n";
	#echo $jb___;
	#echo "TEXTO ORIGINALLLLLLLLLLLLLLLLLLLOOPP\n";
	#echo $texto_original[$jb___];
	#echo "##############FIMMMMMMMMMMMMMMMMMMM\n";
	#echo $ditado[$jb___];

	
	
$palavra_a_esctudar=limpa_palavra($texto_original[$jb___]);	
if ((strcasecmp($ditado[$jb___], $palavra_a_esctudar) !== 0) && ($comparar !== "NUNCA"))
{


	$foi_encontrado_uma_vez="NAO";  
$contadiferencas_totai=0;
for ($estudo = 0; $estudo <= $tamanho_escrito; $estudo++){

#aqui vamos comparar todas as palavras na BD com o que foi escrito
#SE foram escritas 5 palavras e são 5 diferentes,  nenhum for erro ortografico
#ENTÃO essa palavra é candidata a ser uma palavra omitida no ditado


		  if (strcasecmp($ditado[$estudo], $palavra_a_esctudar) !== 0)
		  {
		  $contadiferencas_totai++;	

#echo "numerossssssssssssssssss\n";
#	echo $jb___;
#	echo "TEXTO ORIGINALLLLL4645LLLLLLLLLLLLLLOOPP\n";
#	echo $palavra_a_esctudar;
#	echo "##############FIMMMMMM456456MMMMMMMMMMMMM\n";
#	echo $ditado[$jb___];

		  }
		  
		  		  if (strcasecmp($ditado[$estudo], $palavra_a_esctudar) == 0)
		  {
			  

	 
			  		  $contadiferencas_totai=0;	
 $foi_encontrado_uma_vez="SIM";
		  }
}

		  $deveir_para_tabela="NAO";
		  if (strcasecmp($ditado[$estudo], $palavra_a_esctudar) == 0)
		  {
		 # $contadiferencas_totai=0;	
		  
			  #significa que encontrou pelo menos uma vez, ou seja esta palavra foi escrita e está correcta 
		  }
	
			if ($contadiferencas_totai >= $tamanho_escrito )
			{
				$deveir_para_tabela="SIM";
	
				$contadiferencas_totai=0;
				
						  $procura=$palavra_a_esctudar;
						#  echo $procura;
					
			}



#AL: objectivo é verificar se nao foi encontrado uma unica vez, então, nesse caso é porquw realmente nao esta na palavra: exemplo em baix:

#a galinha vive perto do moinho

#Na BD
#a galinha castanha vive perto do moinho


#como vemos falta a palvra castanh, o algoritmo o que faz é estudar cada palavra na BD e verificar se foi escrita.Se não escrita então, uma das palavras testadas, vai dar como resposta, que não existe nunhum igual
#nese caso registar na tabela palavras que não existenmm esse que não aparece.

#verificar se por acaso não é erro, deveremos verificar se essa palavra.Pois se escrivi uma palavra errada, e depois vou comparar com o que está na BD, é obvio que 
#se a palvra escrita tiver um erro ortografico, não deve ser comparado,  pois daria sempre falta

# echo "palavras faltammmmmmm\n";
#echo "######:::::::::::::::::::::::::\n";
#echo $palavra_a_esctudar;
#echo "###***********************\n";
#echo $foi_encontrado_uma_vez;
#echo "DEVEEEEEEEEEEEEEEEir para tabela\n";
#				echo $palavra_a_esctudar;
#				echo "DEVE ir para tabela:::::::::::::::\n";	
#				echo $deveir_para_tabela;
$analisar_esta="SIM";
		  if ($deveir_para_tabela == "SIM" )
		  {
			  $conta_palavras_falta++;
			  $entrou++;

			  if ( $entrou == 1)			  
			  {
				  $entrou=0;
				 ## $tamanho_escrito=0;
				   $palavras_em_falta[$conta_palavras_falta]=$palavra_a_esctudar;	
$pslvraemfalta=$palavra_a_esctudar;
$analisar_esta="NAO";

			  }
		  }

	

}













#A galinha castanha vive perto

#a galinha vive perto do

#Analise do texto que esta na BD comparando com o que foi escrito...portanto é um processsso oposto
#é igual, então tudo bem, coloca na pilha, é diferente ?...é erro ?...se for diferente ou erro passa a frente, e estuda o seguinte, e repete-se

#é igual ? se sim tudo bem...se é diferente....é erro ?...não...então é porque não está escrito no ditado feito

#se for diferente, pode acontecer:
#ver se é erro, ou não se não for erro a palavra em falta é porque foi esquecida, colocar n apilha de esquecidas, se for erro, então colocar na pilha de palavrasescritas com erro mas nao se consegue comparar, activar flag a dizer para nos processos segguintes de comparação se essa flag estiver activa nada comparar.


#A galinha castanha vive perto do moinho.
#a galinha vive perto do moinho

	
}


//FIM processar o que está na BD
//or

//Ler texto escrito ou seja ditado

$ditadofeito=explode(" ",$_POST['ditado']);  
$tamanho_escrito=count($ditadofeito);

$texto_original = explode(" ", $regcodigo);
$tamanho_na_bddd=count($texto_original);
#gatos



##Compara se escreveu tudi o e as que faltam


#limpar pilhas e tentar sincronizar







#####################################################################################################################################################
#*ESTUDO das letras novo
#***************************************************************************************************************************************************

for ($jbad = 0; $jbad <= $tamanho_escrito; $jbad++){

$galo++;
echo "ESewrweTUDO de\n";
echo $jbad;
#			echo $texto_original[$jbad];
#			echo "DITrwertrtADO escrito\n";
			echo  $ditadofeito[$jbad];
			

			$PROCESSA="SIM";
			
		for ($jbac = 0; $jbac <= $tamanho_na_bddd; $jbac++){
			
		#	echo "###FINNNN##\n";
		#	$CONTINUA="SIM";
		#	$REPETIDO="NAO";
			
			#protege naonulo


################################################################################################################################################################
##Casoo seja igual podemos colocar na pilha, ou se pelo contrario a relação entre letra for inferiror a 80%, porqu^^E
#Porque se houver desincronização, a quantiadde de comparaçoes positivas é baixa, quando numa comparação cruzada, o indice de diferenças for baixo, entãpo existe a probabilidade dessa palvra, ou #ter# um erro ortgrafico, mas estar na posição certa, eaassim termo um palavra para comparar com os ditados
#exemplo
#Escrito
#a galinha castanhus moinho
#na BBD  a galinha castanha vive perto do moinho
#segundo este algoritmo, entre castanho e moinho não existe qualquer palavra igual ao original
#entõ a quantidade de não igualdades de letras será muito grande, so estando em valores aceitaveis na palavra moinho, e então a palavra moinho vai para a pilha original de comparar
##############################################################################################################################################################			
if (isset($ditadofeito[$jbad]))
{
								  
									  if((isset($ditadofeito[$jbad])) && (strcasecmp($texto_original[$jbac], $ditadofeito[$jbad]) == 0)) {
										  
										  echo "####RdentroRAA##\n";
			echo $jbac;
		echo $texto_original[$jbac];
		echo $ditadofeito[$jbad];
		echo $jbad;
#								echo "IGUAISSSSSSSSSSSSSS\n";
#echo $tamanho_escrito;
#	echo "COMPARAimportanteultimo\n";
#	echo $jbac;
#	echo $ditadofeito[$jbac];
#	echo "COMTESTOoriginal\n";
#	echo $tamanho_na_bddd;
	echo "####00#\n";
	echo $texto_original[$jbac];
	echo $jbac;
#importante 23423423 esta lista estsincronizada com ao texto original.
# se tiver escrito texto 
#a galinha castnha ....moinhuz ....para poder comparar terei que ter uma lista com as palavras originais:
#a galinha castanh vive perto do moinho
#portanto as palvras -vive perto do- não podem estar na pilha de originais de compara porque não form escritas e driam falsos erro.
#nedste exemplo temos que ter em atnnção que a palavar moinhuz está mal escrita mas não na totalidade,por isso temos qu analisra estatisticamnete os erro para saber se a palvra deve ou não ser #descrartada.Se só tiver algumas letra diferente, entõ deve ser considerado...simplesmente dev ser um erro.
    $limpo++;
	$BOI++;

	echo "BOIVALORRRRRRRRRRR\n";
	echo $BOI;
	echo "GLOOOOOOOOOOOOOOOOOOOOOOOOOO\n";
	echo $galo;
#	echo "CARREEGAAAAAAAAAAAA\n";
#	echo $texto_original[$jbad];
#	echo $limpo;
	#$lista_original_limpa[$limpo]=$texto_original[$jbad];
	if (isset($texto_original[$jbac]))
	{
		echo "##########################********************#################################\n";
		echo $texto_original[$jbac];
		echo $galo;
#		$lista_original_limpa_BOI[$BOI]=$texto_original[$jbac];
		$lista_original_limpa_GALO[$galo]=$texto_original[$jbac];
		$lista_oguerra[$galo]=$texto_original[$jbac];
		echo "####----####";
		echo $texto_original[$jbac];
		echo $galo;
     	echo "#####:::###";
		echo $lista_oguerra[$galo];

#		$lista_original_limpa_GALO[$galo]="GAAGAS";
#		echo "numeroooooo\n";
#		echo $lista_original_limpa_BOI[$BOI];
		echo $BOI;
		echo $lista_original_limpa_GALO[$galo];
		echo "##antesgalo####\n";
		echo $jbac;
		echo "#--------#\n";
	$lista_original_limpa_BOI[$BOI]=$texto_original[$jbac];
	}
	echo "###BOI#####\n";
	echo $galo; 
	echo $lista_oguerra[$galo];
	echo "######galo;;;;####_____#####\n";
	echo $lista_original_limpa_GALO[$galo];
#	echo "####____boi1\n";
#	echo $lista_original_limpa_BOI[1];
#	echo "####::::#####\n";
#	echo $lista_original_limpa_BOI[0];
#	echo "#####+++++###\n";
#	echo $lista_original_limpa_BOI[1];
#	echo "##########:::::\n";
#	echo $texto_original[$jbac];
	if (isset($texto_original[$jbac]))
	{
		echo "nao e nulo\n";
	echo $texto_original[$jbac];
	echo $lista_original_limpa_BOI[$BOI];
	}
	
		if (empty($texto_original[$jbac]))
	{
		echo "**** e nulo\n";
	echo $texto_original[$jbad];
	}

#echo "LISTASSSS\n";
#echo $lista_original_limpa[$limpo];
#echo "######***###\n";

									  }

									    if((isset($ditadofeito[$jbad])) && (strcasecmp($texto_original[$jbac], $ditadofeito[$jbad]) !== 0)) 
										
										{
#														echo "diferentes\n";
#																										  echo "COMPARAimportanteultimo\n";
#																		  echo $ditadofeito[$jbac];
#																		  echo "COM TESTO\n";
#																		  echo $texto_original[$jbad];
											  ###############################################################################################################################
											  #vai proecessar letra a letra para o caso de que as palavras sao diferentes
											  ###############################################################################################################################
											  
																			  $lista_original = str_split($texto_original[$jbac]);
																	  $lista_ditados = str_split($ditadofeito[$jbad]);
																	  $tamanho__original=count($lista_original);
																	  $tamanho_no_ditado=count($lista_ditados);

###############################################################################################################################
#FIM vai proecessar letra a letra para o caso de que as palavras sao diferentes
###############################################################################################################################


											for ($jk = 0; $jk <= $tamanho__original; $jk++)
											
											{
												
												$ajudapc=0;
												#echo "####VAI LIMPARRRRRRRRRRRRRRRRRRRRRRRRRRRRR\n";
												#echo $conta_igual;
												#echo "LIMPARRRRTT\n";
																	#	echo $conta_diferencas;
																		$conta_diferencas=0;
																		$conta_igual=0;
																		$contaletras++;
														#					echo "POIS1EEEEEEEEEEEEEEEEEE\n";
														#					echo $jk;
																  for ($jkx = 0; $jkx <= $tamanho_no_ditado; $jkx++){
																	  $contaletraz++;
																	  ######################################################################
																	  ##aqui vamos avaliar a quantidad de diferencas e igualdades
																	  ######################################################################
																	  
																	    if (strcmp($lista_original[$jk], $lista_ditados[$jkx]) !== 0) {
																		   $conta_diferencas++;
																		   
																		   $prova++;
#																		   echo "PROVAFINAL::\n";
																		     $prova_letra_ditadosdiferente_limpa_BOI[$prova]=$lista_ditados[$jkx];
																			 $prova_letra_origibnadiferente_limpa_BOI[$prova]=$lista_original[$jk];
#																			 echo $lista_ditados[$jkx];
#															   echo $lista_original[$jk];				 
				  		  	  	  $prova_letra_pesus[$prova]=$lista_ditados[$jkx];
																	   }
																	   
						  

																	   
																   if (isset($lista_original[$jk]) && (strcmp($lista_original[$jk], $lista_ditados[$jkx]) == 0)) {
					  
					  
																		   $conta_igual++;
																		   
							#	  echo "SAO IGUAIS**************************************\n";
							#	  echo $lista_original[$jk];
							#	  echo "#GPPP+++;;;;;;;;;;;;;;;;;£££££££££££££££££££££\n";
							#	  echo $lista_ditados[$jkx];
																		   
																	   }
					  
																	  
																	  
																	  #####################################################################
																	  ###Fim de avaliar quantidade de diferencas e igualdades
																	  ####################################################################
																	  $ajudapc++;
																		
																  }
																  
																  
#																  echo "CARREEGAAAAAAAAAAAA1\n";
#	echo $texto_original[$jbad];
#	echo $limpo;
	#$lista_original_limpa[$limpo]=$texto_original[$jbad];
#echo "LISTASSSS\n";
#echo $lista_original_limpa[$limpo];
#echo "######***###\n";
																  #echo "VAI SALTAR\n";
																  
			
																  ################################################################
																  #Caslculo do peso
																  ################################################################
																							  
																							  if (empty($conta_igual))
																							  {
																								  $conta_igual=0;

																							  }
																							  #echo "ONDE ENTRA\n";
																							  #echo $conta_diferencas;
																							  #echo $conta_igual;
																							  
															  #echo "1111111111111111133333333333333FORAAAAAAAAAAAAAAAAAAAA\n";
																#							  echo $RESULTADO;
																#							  echo "___________________\n";

																							  if ( $conta_diferencas == $conta_igual)
																							  
																							  {
																								  $RESULTADO="IGUAL";
														                                    	 # echo "IGUALLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLL\n";
																								$peso_=$conta_diferencas/$conta_igual;
																								$peso_=$peso*100;
																								#echo $peso;
																								#echo "peso calculos3\n";
																								#echo $peso_;

																							  }
																							  
																											#	  echo "11111111111111111FORAAAAAAAAAAAAAAAAAAAA\n";
																							  #echo $RESULTADO;
																							  #echo "___________________\n";

																  																   if ( $conta_diferencas < $conta_igual)
																							  {
																								  $RESULTADO="MAIOR";
															  #echo "AQUIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII9\n";
															  #echo $conta_diferencas;
																							  #echo $conta_igual;
																								$peso_=$conta_diferencas/$conta_igual;
																								$peso_=$peso*100;
																		#echo $peso;
																		#echo $conta_diferencas;
																							 # echo $conta_igual;
																								#echo "peso calculos2\n";
																								#echo $peso_;

																							  }
																							  #echo "FORAAAAAAAAAAAAAAAAAAAA\n";
																							  #echo $RESULTADO;
																							  #echo "___________________\n";
																							  
#																							 echo "CARREEGAAAAAAAAAAAA2\n";
#	echo $texto_original[$jbad];
#	echo $limpo;
#	$lista_original_limpa[$limpo]=$texto_original[$jbad];
#echo "LISTASSSS\n";
#echo $lista_original_limpa[$limpo];
#echo "######***###\n";
																							  
																							    if ($conta_igual< $conta_diferencas)
																							  {
																								$peso=$conta_igual/$conta_diferencas;
																								$peso_=$peso*100;
				#																										  echo "PESOCALCULOS\n";
				#																				  
																		
				#								  echo $peso_;
						
				#		echo "##contaigual##\n";
#echo $conta_igual;
#echo "contadiferente\n";
#echo $conta_diferencas;
																								  $RESULTADO="MENOR";
				
																								$peso_=$conta_igual/$conta_diferencas;
#																								echo $peso_;
																							  }	
																							  
#																							  echo "CARREEGAAAAAAAAAAAA4\n";
#	echo $texto_original[$jbad];
#	echo "JBAD\n";
#	echo $jbad;
#	echo "#################\n";
#	echo $limpo;
#	echo "#::::::::::::::::::###\n";
#	$lista_original_limpa[$limpo]=$texto_original[$jbad];
#echo "LISTASSSS\n";
#echo $lista_original_limpa[$limpo];
#echo "	\n";

 					
#					  for ($limp = 0; $limp <= $limpo; $limp++){
#						  echo "QUEDEU\n";
#						  echo $texto_original[$jbad];
#	  echo "NUMERO:::::carrega44\n";
#	  echo $limp;
#	  echo "LISTA FINALLLLLLLLLLLLLLLLLL\n";
#	  echo $lista_original_limpa[$limp];
 # }																		  
																							  	   if ($conta_igual < $conta_diferencas)
																							  {
																								#  echo "AQUIIIIIIIIIIIIIIIIIIIIII2\n";
																								  $RESULTADO="MAIOR";
															  
																							  }
																							  
																							  $contaestudoletra++;


#echo "#ESTUDOVITAL#\n";
#		echo "CI";			  
#												echo 						   $conta_igual;
#							echo "CD";
																		   					echo  $conta_diferencas;
																										echo  $ditadofeito[$jbad];
													
																		   			echo $texto_original[$jbac];
																					echo $peso_;
#echo "#FIMESTUDOVITAL#\n";
echo "IMPORTANTEerrroaqui\n";
echo $jbac;
echo $texto_original[$jbac];
echo "###LUA###";
echo $galo;
if ($peso_ < $config_estatistica )
  {
echo "###dentrodepesogalos\n";
#$lista_original_limpa_GALO[$galo]=$texto_original[$jbac];
echo $lista_original_limpa_GALO[$galo];
	  $oitentamenor++;
#	  	  	  echo "oitenta_meaior\n";
echo $oitentamenor;
echo $lista_original_limpa_BOI[$BOI];
echo $BOI;
echo "SOBREPOR_o_VALOR";
echo $lista_original_limpa_BOI[$oitentamenor];
	  	  $lista_original_limpa_BOI[$oitentamenor]=$texto_original[$jbac];
		   
	 #problema aqui sera
	 echo "PROBLEEMAS";
	 echo $texto_original[$jbac];
	 echo "SERA\n";
		$lista_original_limpa_GALO[$galo]=$texto_original[$jbac];
		$lista_com_valores_menores[$oitentamenor]=$texto_original[$jbac];




#	  	  echo "oitenta meaior\n";
	  	  $letra_original_limpa_BOI[$oitentamenor]=$lista_original[$jk];
		  	  	  $letra_ditados_limpa_BOI[$oitentamenor]=$lista_ditados[$jkx];
				  		  	  	  $letra_pesus[$oitentamenor]=$lista_ditados[$jkx];

	  $lista_original_limpa[$limpo]=$texto_original[$jbac];
	
	##echo "REZULTADOS: menor80\n";
		#																					  echo $texto_original[$jbad];
		#																					  echo "#----#\n";
		#																				      echo $ditadofeito[$jbac];
		#																					  echo "PEZUZ\n";
		#																					  echo $peso_;
}

#															  echo "MERDASSSSSSSSSSSSS13\n";
#															  echo $lista_original_limpa[1];

 for ($ivaaa = 0; $ivaaa <= $galo; $ivaaa++){
	  echo $texto_original[$jbac];
	 echo "SERAfinal\n";
	  echo "especial888:";
	  echo $ivaaa;
	 echo  $lista_original_limpa_GALO[$ivaaa];								  
	 }if ($peso_ > $config_estatistica )
  {

	 # $oitentamaior++;
	  #echo "oitenta_menor\n";
	  	#  $lista_original_limpa_BOI[$oitentamaior]=$texto_original[$jbad];
	  #$lista_original_limpa[$limpo]=$texto_original[$jbad];
	 # echo "RESZULTADOSmaior que 80\n";
	#echo "totalmente fora de contexto\n";
	#																						  echo $texto_original[$jbad];
	#																						  echo "#----#\n";
	#																					      echo $ditadofeito[$jbac];
	#																						  echo "PEXUZ\n";
}

#															  echo "MERDASSSSSSSSSSSSS14\n";
#															  echo $lista_original_limpa[1];

#echo "CARREEGAAAAAAAAAAAA7777\n";
#	echo $texto_original[$jbad];
#	echo $limpo;

	$lista_original_limpa[$limpo]=$texto_original[$jbac];
#echo "LISTASSSS\n";
#echo $lista_original_limpa[$limpo];
#echo "######***###\n";


if ($peso_ = $config_estatistica )
  {
	  echo "DENTROGALOS\n";

#$lista_original_limpa_GALO[$galo]=$texto_original[$jbac];
#	  $oitentaigual++;
#	  	  	  echo "oitentaigual\n";
#	  	  $lista_original_limpa_BOI[$oitentaigual]=$texto_original[$jbad];

#	  $lista_original_limpa_BOI[$oitentaigual]=$texto_original[$jbad];
#	  $lista_original_limpa[$limpo]=$texto_original[$jbad];
	 # echo "RESZULTADOSigual 80\n";
#	echo "totalmente fora de contexto\n";
#																							  echo $texto_original[$jbad];
#																							  echo "#----#\n";
#																						      echo $ditadofeito[$jbac];
#																							  echo "PEXUZ\n";
}

																								
																							  
#																							  $letra="castanhu";
 #                                                                                             echo $controlo;
																							   if (strcmp($letra, $ditadofeito[$jbac]) == 0) {
																								   
	#												  echo "MERDASSSSSSSSSSSSS17\n";
	#														  echo $lista_original_limpa[1];

    #                                                                                          $controlo++;
		#																					  echo "###############################################################################\n";
		#																					  echo "CONTROLO castanhu\n";
		#																					  echo "###############################################################################\n";																							         #                                                                                     echo $controlo;
			#																				  echo "PALAVRAS\n";
			#																				  echo $texto_original[$jbad];
			#																				  echo "#----#\n";
			#																			      echo $ditadofeito[$jbac];
			#																				   echo "valorespa#####racalculos\n";
 			#													  echo $conta_diferencas;
			#													  echo "###;;\n";
			#													  echo $conta_igual;
																  
             #                       							  echo "PESOCALCULOS\;n";
				#								  echo $peso_;
				
			
																							   }
								
																						
																  
																  ##################################################################
																  ##################################################################

	
										}
										
									  }
									  
	
}

	
		}
		
		 for ($ivaaa = 0; $ivaaa <= $galo; $ivaaa++){
	
	 echo "SERA\n";
	  echo "especial888022000:";
	  echo $ivaaa;
	 echo  $lista_original_limpa_GALO[$ivaaa];								  
	 
	 	 if (empty ($lista_original_limpa_GALO[$ivaaa]))
	 {
		 echo "NULO15";
	 }

	 }
	 
	  for ($ivaaa = 0; $ivaaa <= $galo; $ivaaa++){
	  echo $texto_original[$jbac];
	 echo "SERA\n";
	  echo "especial88800005557:";
	  echo $ivaaa;
	 echo  $lista_original_limpa_GALO[$ivaaa];								  
	 	 if (empty ($lista_original_limpa_GALO[$ivaaa]))
	 {
		 echo "NULO17";
	 }

	 }
}


	#														  echo "MERDASSSSSSSSSSSSS1999\n";
															  #echo $lista_original_limpa[1];

#echo "LIMPOVSLEEEE\n";
#echo $limpo;
#echo "####RATOS####\n";
 for ($ivaaa = 0; $ivaaa <= $galo; $ivaaa++){
	  echo $texto_original[$jbac];
	 echo "SERA\n";
	  echo "especial8889990000:";
	  echo $ivaaa;
	 echo  $lista_original_limpa_GALO[$ivaaa];								  
	 	 if (empty ($lista_original_limpa_GALO[$ivaaa]))
	 {
		 echo "NULO18";
	 }

	 }
#echo "valores ointenta\n";
#	  echo 	  $oitentamenor;
#	  echo "MENOR\n";
#	  echo $oitentamaior;
#echo "IGUAL\n";
	  $oitentaigual++;
	  
	   for ($ivaaa = 0; $ivaaa <= $galo; $ivaaa++){
	  echo $texto_original[$jbac];
	 echo "SERA\n";
	  echo "especial88899900007777:";
	  
	 
	  echo $ivaaa;
	 echo  $lista_original_limpa_GALO[$ivaaa];								  
	 	 if (empty ($lista_original_limpa_GALO[$ivaaa]))
	 {
		 echo "NULO19";
	 }

	 }
#echo "####FIMOITENTA#####\n";

#$lista_original_limpa_BOI[$oitentamaior]
 # for ($ivaa = 0; $ivaa <= $prova; $ivaa++){
#echo "IVAAAAAAAAAAAAAAARUSSOAAAAAAAAAAAAAAAA\n";

#echo $prova_letra_ditadosdiferente_limpa_BOI[$prova];
#echo $prova_letra_origibnadiferente_limpa_BOI[$prova];
#									 echo  $prova_letra_pesus[$ivaa];
 # }

#echo "############################################VANKAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA#################\n";

 for ($ivaaa = 0; $ivaaa <= $galo; $ivaaa++){

	 echo "GALOpicoshiena\n";
	  echo "especial8880000:";
	  echo $ivaaa;
	 echo  $lista_oguerra[$ivaaa];								  
	 	 if (empty ($lista_oguerra[$ivaaa]))
	 {
		 echo "NULO20";
	 }

	 }
	 
	 
echo "VALEGALOS\n";
echo $galo;
echo  $lista_original_limpa_GALO[0];
echo  $lista_original_limpa_GALO[1];
echo  $lista_original_limpa_GALO[2];
echo  $lista_original_limpa_GALO[3];
echo "FIMGALOS\n";
echo $galo;
  for ($iva = 0; $iva <= $galo; $iva++){
	  echo "NUMEROiva9999:::::\n";
	  echo $iva;
	 echo  $lista_original_limpa_GALO[$iva];
#	echo   $lista_original_limpa_BOI[$iva];
	  $prova_letra_ditadosdiferente_limpa_BOI[$prova]=$lista_ditados[$jkx];
																			 $prova_letra_origibnadiferente_limpa_BOI[$prova]=$lista_original[$jk];
#	  echo "letra original\n";
#echo 	  	  	  $letra_original_limpa_BOI[$iva];
#echo "letra do ditado\n";
#echo 		  	 $letra_ditados_limpa_BOI[$iva];
#echo "PESUSUSUSUSU\n";
#echo 	  	  $letra_pesus[$iva];

	  #echo "LISTA FINALLLLLLLLLLLLLLLLLL\n";
	  #echo $lista_original_limpa[$limp];
#	  echo "ivankaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\n";
#	  echo $lista_original_limpa_BOI[$iva];
#	  echo "LASSS\n";
  }


echo "MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM\n";

	echo "####____boi12\n";
	echo $lista_original_limpa_BOI[1];

echo $limpo;
	  echo  $lista_original_limpa_BOI[0];
	  echo "######:::###\n";
	  echo  $lista_original_limpa_BOI[1];

  for ($limp = 1; $limp <= $limpo; $limp++){
	  #echo "NUMERO:::::\n";
	  #echo $limp;
	  #echo "LISTA FINALLLLLLLLLLLLLLLLLL\n";
	  #echo $lista_original_limpa[$limp];
	  echo "LIMPO###\n";
	  echo $limp;
	  echo  $lista_original_limpa_BOI[0];
	  echo  $lista_original_limpa_BOI[1];
	  echo "TRUMPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPe33PPPPPPPPPPPPPPPPP\n";
	  echo $lista_original_limpa_BOI[$limp];
	  #echo "LASSS\n";
  }
#  echo "MANUAL\n";
  
 # $TTT=count($lista_original_limpa);
 # echo "TTTTTTTTT\n";
 # echo $TTT;
 # echo "ZERO\n";
 # echo  $lista_original_limpa[0];
 # echo "######www###\n";
 # echo "UM\n";
 # echo  $lista_original_limpa[1];
#####################################################################################################################################################
#*FIM ESTUDO das letras novo
#***************************************************************************************************************************************************


			





//Validar erros
$m=0;
$cv=0;
for ($j = 0; $j <= $tamanho_na_bd; $j++){
$c++;
	
			
 
}



$erro="sim";

	// for ($i = 0; $i <= $tamanho_na_bd; $i++){
		  $erro="nao";

 

	
	$ditadolimpo = trim($texto[$ii], "\0");
	$outros_t = explode(".", $palavra1);	
	$valida_t=count($outros_t);

//ditado tem o escrito no ditado e texto ii tem o que esta na BD
	$certos=0;
	$errados=0;
	$encontrou="nao";
	$err++;
	$bom++;
$boi++;

 
 $encontrou="nao";
		for ($ii = 0; $ii < $tamanho_escrito; $ii++){
		  $erro="nao";
		  
		  $textolimpo = trim($texto[$ii], "\0");
		
 
		  
		  $fim="nao";
		 	 
						   $ditadolimpo= trim($ditado[$ii], "\0");
				
#						  echo "LLOOOOOIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII\n";
#						  echo $textolimpo;
#						  echo "***************************************************************\n";
#						  echo $ditadolimpo;
#						  echo ":_________________________________________________________:\n";
			//verifica caracteres estranho
//LIMPA PONTO			
			$outros_t = explode(".", $ditado[$ii]);	
	$valida_t=count($outros_t);			  
	
		if	($valida_t >1)
			{
				       $ditadolimpo_2 = trim($ditado[$ii], ".");

			}
			
						$outros_t = explode(",", $ditado[$ii]);	
	$valida_t=count($outros_t);			  
		if	($valida_t >1)
			{
				       $ditadolimpo_2 = trim($ditado[$ii], ".");
			}

			
		$textolimpo = trim($texto[$ii], "\0");
			
			$textolimpo = trim($textolimpo, ".");

       $ditadolimpo_2 = trim($ditado[$ii], ".");
	   


$asneirasfonte="putas;merda;caralho;conas;foder;puta;merdas;carallhos;colhões;cabrao;violar;";
			      		$asneiras = explode(";",  $asneirasfonte);	
				$num_asneiras=count($asneiras);	

for ($jz = 0; $jz <= $num_asneiras; $jz++){
	
	if ($ditadolimpo == $asneiras[$jz])
	{
	$temasneira="SIM";	
	$ditadolimpo="-------------------";
	 
	}
	
}


			
//devo limpar aqui o textolimpo de . e ,		 
				
		//estudar palavras simples sem limpar , ou .
		if (strcasecmp($ditadolimpo_2, $textolimpo) == 0)
						  {

		                  $cv++;
#barril rito

##Importante:09987654332343 aqui removemos as asneiras do ditado original e substituimos as palavras po -------------

##importante 333445665
#aqui coloco tudo entre erro: e correrro, o motivo é para ter tudo o texto numa so string e assim, deve
#estrair o que esta entre erro e correrro	e comparar, se for igual então não há erro
						$palavra[$cv]="".$textolimpo."MM";
									#		$MAU="CCcorrecta:".$textolimpo."corr:".$textolimpo;
									$MAU="erro:".$ditadolimpo.":correrro:".$textolimpo;
#						$MAU="CCcorrecta:".$textolimpo."corr:".$textolimpo;
					      if($limpa == 0)
						   {
							$MAUANT=$MAUANT.$MAU.":::::";
							$limpa=0;
							
						   }
							   						
                    

						$encontrou="sim";
					

						
						  }	
						  
        else
		{
	
			
			
$cv++;
$contador++;
$erro[$contador]=$ditadolimpo;
$erro_corrigido[$contador]=$textolimpo;
$erros++;
$MAU="erro:".$ditadolimpo.":correrro:".$textolimpo;


						$palavra[$peu]="MAU";
                          if($limpa == 0)
						   {
							$MAUANT=$MAUANT.$MAU.":::::";
							$limpa=0;
							
						   }
						   
				           $palavra_errada[$erros]= $ditadolimpo;
						  
						   $palavra_errada_validar[$erros]= $ditadolimpo;
			
			
		}

$erro[$contador]=$ditadolimpo;
$erro_corrigido[$contador]=$textolimpo;

						
						  
		  $outros = explode(".", $ditadolimpo);
		  $valida=count($outros);
		  if ($valida >0)
		  {
		  $palavra=$outros[0];
		  }
		  else
		  {
		  $palavra= $ditadolimpo;
		  }

//aqui esta o problema, antes daqui nao estou a analisar palavra a palavra falta o ciclo com o texto


#NULOnaoescrito
		   if ((strcmp($palavra, $erro_corrigido[$contador]) == 0) && ($palavra !== "NULOnaoescrito" ))
						  { 

 ?>
						  
											  
								 <font color="yellow"><?php echo  $erro_corrigido[$contador]  ?></font>
											<?php 
						  }
					  $textolimpo = trim($texto[$i], "\0");
				
		   if (strcmp($ditadolimpo, $textolimpo) == 0)
						  { 
						  $palavra_correcta[$c]= $textolimpo;
						  $c++;
						
						  }
		  	 for ($ik = 0; $ik <= $erros; $ik++)
						  { 
					
					$ditadolimpo="-------------------";
	 $textolimpo="-----------";
						 
		                                   $erro="sim";
								           $errados++;
										   $palavraerrada=$ditadolimpo;
										   $pala=$textolimpo;
		  if ($palavra_errada_validar[$ik] !== "-------------------")
		      {
											   mysql_select_db($database_dic2me, $dic2me);
													 $query_Recordset2 =sprintf("SELECT palavra FROM dic2me_palavras_individuais_PORTUGUES WHERE palavra=%s ",
														  GetSQLValueString($palavra_errada_validar[$ik], "text"));
												  $Recordset2 = mysql_query($query_Recordset2, $dic2me) or die(mysql_error());
												  $Recordset2 = mysql_query($query_Recordset2, $dic2me);
												  $totalRows_Recordset1 = mysql_num_rows($Recordset2);
			  
											  if($totalRows_Recordset1 == 0)
												  {
													  
													  
													  $ci++;
			  $palavraerradas[$ci]=$palavra_errada_validar[$ik];
			  
			  $palavraboa[$ci]=$palavra_corrigida[$ik];
												  }
			  
			  //sincronizacao parar encontrar palavra errada e palavra correcta em funcao posicao
			   }
		  

			 if($totalRows_Recordset1 > 0)
												  {
	  
		  
		  
		 
		  ////se frem diferentes ver se é por ter . ou ,, poderemos aqui tambem procesasar outras diferencas como ter escrito moinho , nao
		  
		  
		  if ((strcmp($ditadolimpo,  $texto[$i]) !== 0)  && ($palavra !== "NULOnaoescrito" ))
		  {
		  
		  
			  //devemos limpar $palavra1 e limpar $ditado[$j];
					$vari=".";
				$compara=$ditadolimpo.$vari;
			  
			  
			  //aqui tenho que comparar sem case sensitive
		  
				if (strcasecmp($ditadolimpo, $textolimpo) == 0)
				{
				$erro="nao";
				if ( $erro == "nao")
												{
													$memoria="sim";
												}
												if ($memoria == "sim")
												{
												 $erro="nao";
												}
				}
				
				$erro="sim";
				
			
			   //Comparacao se escreveu diferente do texto, mas pode nao ser erro. 
				if(strcmp($erro, "sim") == 0)
				{
				   
					
					//aqui vou ver se a palavra é erro ortografico, se não for então é so mesmo diferenca entre texto e ditado
					
			   mysql_select_db($database_dic2me, $dic2me);
													 $query_Recordset2 =sprintf("SELECT palavra FROM dic2me_palavras_individuais_PORTUGUES WHERE palavra=%s ",
														  GetSQLValueString($ditadolimpo, "text"));
												  $Recordset2 = mysql_query($query_Recordset2, $dic2me) or die(mysql_error());
												  $Recordset2 = mysql_query($query_Recordset2, $dic2me);
												  $totalRows_Recordset1 = mysql_num_rows($Recordset2);		  
											  if($totalRows_Recordset1 == 0)
												  {		 
					
					
				$cc++;
		  
				$palavrasemerroerradas[$cc]=$textolimpo;
				$palavraerro_contexto[$cc]=$ditadolimpo;	  
				}
				}
				
				
				}
				}
		  
												  }
		  
		  


							   if (strcmp($ditadolimpo, $textolimpo) == 0)
											 {
		  $mm;
		  $palavraerrada="";
		   $textolimpo1=$texto[$i];
		   $semerros[$mm]=$ditadolimpo;
		  
		  $erro="nao";
												 $limpo=$ditadolimpo;
												if ( $erro == "nao")
												{
													$memoria="sim";
												}
												if ($memoria == "sim")
												{
												 $erro="nao";
												}
						  $trancavalidacao="sim";
						  $certos++;
						  
						  } 

		  

//}



 
$c++;
if(strcmp($erro, "nao") == 0)
{
  $palavraerrada="";
$palavra_corrigida[$c]=$textolimpo;
}

if(strcmp($erro, "sim") == 0)
{
$palavra_errada[$c]=$ditadolimpo;
  $palavraerrada=$palavraerrada;
$m++;
     $repetido=$m;
	 
	 //aqui devo verificar se a palavra não está a ser comparada em loop, ou seja, se não está a comparar uma palavra com todas as
	 //restantes, é obvio que nesse caso existe um momento, em que não é erro, e os restantes é erro
	 //devo percorrer todas as palavras, e se houver uma em que seja igual, então não é erro.
	 //essa validação deve ser com s palavras que foram escritas no ditado
	 //quer se evitar o seguinte:
	 //como podemos ver compara castanha e dixz sim é diferente, depois compara com fofinho, e claro, é diferente
//	 castanha@@@@@@@@@@@@@@@@@@@@ castanha::::::::::::::::: fofinho.sim======================================== +++++++++++++++++++++++++++++++++++++ castanha@@@@@@@@@@@@@@@@@@@@ castanha::::::::::::::::: Elasim======================================== +++++++++++++++++++++++++++++++++++++ castanha@@@@@@@@@@@@@@@@@@@@ castanha::::::::::::::::: 

for ($jf = 0; $jf < $tamanho_escrito; $jf++){
	
	$ditadolimpopoi = trim($ditado[$jf], "\0");
	
}
	
     $arepetir[$m]=$palavraerrada;
$erro="nao";

}


}

					
$ditadok=explode(".",$palavra1);  
$tamanho_escritok=count($ditadok);	



if ( $tamanho_escritok == 0 )
{
$palavra=$ditado[0];
$erroerro="sim";
}	

if ( $tamanho_escritok == 1 )
{
$palavra=$ditadok[0];
}	
  for ($a = 0; $a < $m ; $a++){
$tamanho_escritok=0;
$palavra=$arepetir[$a];
		if ($tamanho_escritok < 2)
		  {		
		  
					  mysql_select_db($database_dic2me, $dic2me);
					   $query_Recordset2 =sprintf("SELECT palavra FROM dic2me_palavras_individuais_PORTUGUES WHERE palavra=%s ",
						GetSQLValueString($palavra, "text")); 
					$Recordset2 = mysql_query($query_Recordset2, $dic2me) or die(mysql_error());
					$Recordset2 = mysql_query($query_Recordset2, $dic2me);
					$totalRows_Recordset1 = mysql_num_rows($Recordset2);
					
					
					$erro="nao";
					$nao="nao";
					
					if ($totalRows_Recordset1 == 1)
					{
								$erro="nao";
$bom++;
					$nao="sim";
                    $palavra_bom[$bom]=$palavra;
					}

					if ($totalRows_Recordset1 == 0)
					{
$err++;
					$erro="sim";
					$nao="sim";
					$erroerro="sim";
 $palavra_erro[$err]=$palavra;
                   
									
					}
}	
			
     }
while($arrayRow = mysql_fetch_assoc($Recordset2)) {
	
      $regcodigo=$arrayRow[linha_texto];
   }
  mysqli_close($liga);
				if ($palavra  != $texto[$i])
				{
             $erro="sim";				
				 $errados++;
				} 

				if ($palavra  == $texto[$i])
				{
				$certo="sim";
				$certos++;
				
				} 

				
  
   
   if($certos == 0) {

 
   $erros[$m]=$palavra;
$m++;  
   }



//pelavras a repetir:
//$ditado[$i]  != $palavra1
//ditado contem o ditado feito pelo aluno
//texto contem o texto guardado na BD e serve para comparar

// Palavras a repetir




?> 

<?php echo "AQUI"; ?>    
<?php

if ($_POST['TPC_ENVIA'] != "")
 {
   $cod_ditado=$_POST['TPC_ENVIA'];
   }
   else
  {
   $cod_ditado="aluno";
   }

		 for ($i = 0; $i <= $caca; $i++){
		 $erro="nao";	
		 $semafro="nao";

		 	  for($j=0; $j<=$repetido ; $j++) {
		 	  	
              if("$texto[$i]" == "$arepetir[$j]") {
            
              	$erro="sim";
              	
               }
			 

			 
               if( $erro == "sim") {
				   
               	$escreve_erro=$arepetir[$j];
				$total_palavras=$arepetir[$j]." ; ".$total_palavras;
                  $semafro="sim";
                  $erro="nao";               
               	}
               	
               	else {
                   $escreve=$texto[$i];
                  } 
             }  	
       
	  
  if("sim" == "sim") {
	   

    ?>  
    
		


<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
header1 {
		background: linear-gradient(to right,rgba(0,102,255,0.96) 0,rgba(62,188,207,0.96) 100%);
		border-bottom: 1px solid rgba(0,0,0,.1);
		box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
		display: block;
		position: relative;
		width: 100%;
		z-index: 1000;
	}
	
	header1 > nav > ul {
		display: flex;
		flex-wrap: wrap;
		justify-content: flex-start;
		list-style: none;
		margin: 0;
		padding: 0;
	}
	
		header1 > nav > ul > li {
			flex: 0 1 auto;
			margin: 0;
			padding: 0;
			position: relative;
			transition: all linear 0.1s;	
		}
		
			header1 > nav > ul > li:hover {
				background: rgba(0,0,0,1);
			}
			
			header1 > nav > ul > li a + div {
				background: linear-gradient(to bottom,rgba(255,255,0,1) 0,rgba(255,255,0,0.96) 100%);
				border-radius: 0 0 2px 2px;
				box-shadow: 0 3px 1px rgba(0,0,0,.05);
				display: none;
				font-size: 1rem;
				position: absolute;
				width: 195px;
				
			}gatu
			
				header1 > nav > ul > li:hover a + div {
					display: block;
				}
				
				header1 > nav > ul > li a + div > ul {
					list-style-type: none;	
				}
				
					header1 > nav > ul > li a + div > ul > li {
						margin: 0;
						padding: 0;
						
					}
					
						header1 > nav > ul > li a + div > ul > li > a {
							color: rgba(0,0,0,.9);
							display: block;	
							font-size: 0.75rem;
							font-bold;
							letter-spacing: 1.5px;
							padding: .25rem 1.5rem;
							
							text-decoration: none;
							text-transform: uppercase;
						}
						
							header1 > nav > ul > li a + div > ul > li:hover > a {
								background-color: rgba(0,0,0,.15);	
							}
	
			header1 > nav > ul > li > a {
				align-items: flex-start;
				color: #fff;
				display: flex;
				font-size: 0.25rem;
				
				font-weight: 10;
				letter-spacing: 1px;
				max-width: 130px;
				padding: 1rem 1.5rem;
				text-decoration: none;
				text-shadow: 0 1px 1px rgba(0,0,0,.1);
				transition: all linear 0.1s;
			}
			
				header1 > nav > ul > li > a > div > span {
					color: rgba(255,255,255,.75);
					display: block;
					
					font-family: Georgia, "Times New Roman", Times, serif;
					font-size: .7rem;	
					font-style: italic;
					line-height: 1rem;
					max-width: 260px;
				}

@media (min-width: 990px) {
  header1 > nav > ul > li > a {
    max-width: 500px;
    font-size: 1.7rem;
	line-height: 0.8rem;
	
  }
  
  header1 > nav > ul > li > a > div > span {
	  margin: 4px 0 0;  
  }
}

	
	
	
	
	
	
	
	
	
	
	
.flex
   {
      /* basic styling */
      width: 
      height: 200px;
      border: 1px solid #555;
      font: 14px Arial;
     
      /* flexbox setup */
      display: -webkit-flex;
      -webkit-flex-direction: row;

      display: flex;
      flex-direction: row;
   }


.flex2
   {
      /* basic styling */
      width: 350px;
      height: 20px;
	  border-radius: 7pt;
      border: 0px solid #ffffff;
      font: 14px Arial;

      /* flexbox setup */
      display: -webkit-flex;
      -webkit-flex-direction: row;

      display: flex;
      flex-direction: row;
   }
   
   
   .flex > div
   {
      -webkit-flex: 1 1 auto;
      flex: 1 1 auto;

      width: 30px; /* To make the transition work nicely.  (Transitions to/from
                      "width:auto" are buggy in Gecko and Webkit, at least.
                      See http://bugzil.la/731886 for more info.) */

      -webkit-transition: width 0.7s ease-out;
      transition: width 0.7s ease-out;
   }


.flex2 > div
   {
      -webkit-flex: 1 1 auto;
      flex: 1 1 auto;

      width: 30px; /* To make the transition work nicely.  (Transitions to/from
                      "width:auto" are buggy in Gecko and Webkit, at least.
                      See http://bugzil.la/731886 for more info.) */

      -webkit-transition: width 0.7s ease-out;
      transition: width 0.7s ease-out;
   }
   
   /* colors */
   .flex > div:nth-child(1){ background : #009246; }
   .flex > div:nth-child(2){ background : #F1F2F1; }
   .flex > div:nth-child(3){ background : #CE2B37; }
    .flex2 > div:nth-child(1){ background : #000000; }
   .flex > div:hover
   {
        width: 200px;
   }
  body {
   font: 24px Helvetica;
   background: #999999;
  }

  #main {
   min-height: 800px;
   margin: 0px;
   padding: 0px;
   display: -webkit-flex;
   display:         flex;
   -webkit-flex-flow: row;
           flex-flow: row;
   }
 
  #main > article {
   margin: 4px;
   padding: 5px;
   border: 1px solid #cccc33;
   border-radius: 7pt;
   background: #FFFFFF;
   -webkit-flex: 3 1 60%;
           flex: 3 1 60%;
   -webkit-order: 2;
           order: 2;
   }
  
  #main > nav {
   margin: 4px;
   padding: 5px;
   border: 1px solid #8888bb;
   border-radius: 7pt;
   background: #ccccff;
   -webkit-flex: 1 6 20%;
           flex: 1 6 20%;
   -webkit-order: 1;
           order: 1;
   }
  
  #main > aside {
   margin: 4px;
   padding: 5px;
   border: 1px solid #8888bb;
   border-radius: 7pt;
   background: #ccccff;
   -webkit-flex: 1 6 20%;
           flex: 1 6 20%;
   -webkit-order: 3;
           order: 3;
   }
 
  header {
   display: block;
   margin: 4px;
   padding: 5px;
   min-height: 100px;
   border: 1px solid #FF3300;
   border-radius: 7pt;
   background: #FF3300;
   }
 
 
    footer {
   display: block;
   margin: 4px;
   padding: 5px;
   min-height: 100px;
   border: 1px solid #FF3300;
   border-radius: 7pt;
   background: linear-gradient(to top,rgba(255,51,0,0.96) 0,rgba(0,0,0,0.96) 100%);

   }
 
 
  header__ {
   display: block;
   margin: 4px;
   padding: 5px;
   min-height: 99px;
   border: 1px solid #eebb55;
   border-radius: 7pt;
   background: #ffffff;
   
   display: flex;
  align-items: center;
  justify-content: center;
   }
  /* Too narrow to support three columns */
  @media all and (max-width: 640px) {
  
   #main, #page {
    -webkit-flex-flow: column;
            flex-direction: column;
   }

   #main > article, #main > nav, #main > aside {
    /* Return them to document order */
    -webkit-order: 0;
            order: 0;
   }
  
   #main > nav, #main > aside, header, footer {
    min-height: 50px;
    max-height: 50px;
   }
   
      #main >  header__ {
    min-height: 20px;
    max-height: 20px;
   }
  }

 #apDiv1 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
}  </style>
  </head>
<body>
 <header>
 <header__>
 <img src="imagens/dic2me-1_3.png" alt="DIC2ME">
 </header__>

 
 <header1 role="banner">
	<nav role="navigation">
		<ul>
			<li>
			</li>
			
            
            <?php if ($_SESSION['MM_Username'] != "") { ?>
            	<li>
                  <div>
				</div>
		  </li> <?php } ?>

 <?php if ($_SESSION['MM_Username'] == "") { ?>            
			<li>
            
						
					</ul>
				</div>
				</a>
			</li>
            
            <?php } ?>
			<li>
					</div>
				</a>
			</li>
		</ul>
	</nav>
</header1>
 
 
 
 
 
 
 </header>
 <div id='main'>
    <article>article
    <p>Flexbox nuovo</p>
    <?php echo "Erros ortográficos:" ?>
  <div class="flex">
    <div>
<?php



?>

<input type="button" value="Fechar esta janela" onclick="self.close()">

<form  method="POST" name="dados" target="_self">
A vermelho Palavras que foram escritas por ti mas com um erro ortográfico
<p>
Para saber qual o erro consulta a tabela T1
<p>
A preto, as palavras que foram escritas com erro ortográfico,
<p>
 mas diferente do ditado.
<p>
A azul, todas as outras palavras que escreveste sem qualquer tipo de erro.
<p>
<?php
    session_start();
?>
 
<?php



$correcta = explode("CCcorrecta:",  $MAUANT);	
	$correc_num=count($correcta);
$erro_err = explode(":err:", $MAUANT);	
	$erro_num=count($erro_err);

	if ($correc_num < $erro_num)
	{
	$referencia= $erro_num;
	$correcta = explode("CCcorrecta:",  $MAUANT);	
	$correc_num=count($correcta);
    $ERRO="SIM";
	}
	
	
	
	if ($correc_num > $erro_num)
	{
	$referencia= $correc_num;
	$erro_err = explode(":err:", $MAUANT);	
	$erro_num=count($erro_err);
    $ERRO="NAO";
	}
	
;
 for ($i = 0; $i < 	$correc_num; $i++){

	$palavra1 = explode(":::::CCcorrecta:",  $erro_err[$i]);	
	$correc_num=count($palavra1);
	$correcta_palavra_erro = explode(":::::erro:",  $erro_err[$i]);	
	$correc_num_erro=count($correcta_palavra_erro);	
	if ($correc_num_erro > 0)
	{
		$TEM_ERRO="SIM";
	}
	
	for ($ppo = 0; $ppo < $correc_num; $ppo++){
		$correctas = explode("corr:",  $palavra1[$ppo]);	
	$correc_nump=count($correctas);	
		for ($p = 0; $p < $correc_nump; $p++){
			$correcta_palavra_erro = explode(":::::erro:",  $correctas[$p]);	
	$correc_num_erro=count($correcta_palavra_erro);	
	
if ($p == 0){
	
	#garantir que a primeira limpeza foi feita e que nao aparece o primeiro delimitador
	
	$palavra_delimitador = explode(":::::CCcorrecta:",  $palavra1[$p]);	
	$correc_delimitador=count($palavra_delimitador);
	$palavra_garantir_limpeza_delimitadorCCoreerta = explode(":::::CCcorrecta:",  $palavra1[$p]);	
	$correc_delimitador__=count($palavra_garantir_limpeza_delimitadorCCoreerta);
	if ($correc_delimitador__ > 0)
     {
			$palavra_limpa2 = explode("corr:",  $palavra_garantir_limpeza_delimitadorCCoreerta[0]);	
	$correc_delimitador__=count($palavra_garantir_limpeza_delimitadorCCoreerta);
	 }


	 
$palavra_delimitador_valida = explode(":::::CCcorrecta:",  $correctas[$p]);	
	$correc_delimitador=count($palavra_delimitador_valida);
  
  

  
    if($correc_delimitador == 1)
	{
		
	$correcta_palavra_corrigida = explode(":correrro:",  $correctas[1]);	
				$correc_num_erro_corrigido_valor=count($correcta_palavra_erro);	
				$correcta_palavra_erro = explode("erro:",  $correctas[1]);	
				$correc_num_erro_corrigido=count($correcta_palavra_erro);




			$palavra_limpa = explode(".",  $correcta_palavra_erro[2]);
			$limpa_pontos=count($palavra_limpa);	
			
			if ( $limpa_pontos > 1)
			{
			
				mysql_select_db($database_dic2me, $dic2me);
													 $query_Recordset2 =sprintf("SELECT palavra FROM dic2me_palavras_individuais_PORTUGUES WHERE palavra=%s ",
														  GetSQLValueString($palavra_limpa[0], "text"));
												  $Recordset2 = mysql_query($query_Recordset2, $dic2me) or die(mysql_error());
												  $Recordset2 = mysql_query($query_Recordset2, $dic2me);
												  $totalRows_Recordset1 = mysql_num_rows($Recordset2);
		 
		  
		  
		  $conta++;
											  if($totalRows_Recordset1 > 0)
												  {	
					

												  $palavra_correta[$conta]=$palavra_limpa[0];
												//Devo limpar este de , ou .
												  }

											  if($totalRows_Recordset1 == 0)
												  {	
												  $_palavra_errada[$conta]=$palavra_limpa[0];
												  }

			}
			$palavra_limpa = explode(",",  $correcta_palavra_erro[2]);
			$limpa_pontos=count($palavra_limpa);	
			if ( $limpa_pontos > 0)
			{
			}

			if ($iim == 1)
			{
				$correcta_palavra_erro[$iim];
			
			}
			

	
	
##ver ##importante 333445665: importante 99998989898
#aqui vou estrair todos os que têm erro:	


					$strip_erro = explode(":::::erro:",  $correctas[0]);	
				$correc_num_erro_corrigido=count($strip_erro);





## $strip_certo[1]: contem a palavra corrigida
##  $strip_certo[0] : contem a palavra com erro ortografico
	for ($ki = 0; $ki < $correc_num_erro_corrigido; $ki++){
	#echo $strip_erro[$ki];
	$erro_CASE= "NAO";
						
					
					
					

				if ($correc_num_erro_corrigido > 0)
				{
					
					
			
			      		$strip_certo = explode(":correrro:",  $strip_erro[$ki]);	
				$correc_num_erro_corrigido____=count($strip_certo);	
					$palqvra_certa=$strip_certo[1];
#					echo "#1#\n";
					$palavra_escrita=$strip_certo[0];
					$palavra_na_BD=$strip_certo[1];
					$completa++;
$frase_completa[$completa]=$strip_certo[1];

#REMOVER asneiras:


#Importante000008888
#palavra escrita pelo aluno
#					$palavra_escrita=$strip_certo[0];

#palavra que deveria ter sido escritsa
#					$palavra_na_BD=$strip_certo[1];





#IMPORTANTE0999999999999988888888888887777777777777777722222222
#ALG:
#Se forem iguais, então escrevo a amarelo
#Se forem fiferentes verifico SE $palavra_escrita, é erro ortografico ou não, se for então palavra _na_BD é a correcta
#Posso também verificar se é uma questao de CASE

 #1# vivu#2 vive#3 
 
# erro:a:correrro:A:::::erro:galinha:correrro:galinha:::::erro:castanha:correrro:castanha:::::erro:vivu:correrro:vive:::::erro:perto:correrro:perto:::::erro:do:correrro:do:::::erro:moinho:correrro:moinho:::::******222222 ####===999 #########_________ #1# erro:a#2 A#3
##________________________________________________________________________________________________________________________
##Comparacao Simples
##________________________________________________________________________________________________________________________

#Comparacao de Case 

##------------------------------------------------------------------------------------------------------------
				
																	

##A palavra, ultima, da BD, devido às concantenacoes, pode vir preceda de ::: (moinho:::::, por isso deveremos limpar a palvra de referencia que está na BD.

#-------
#limpeza da :::::: devido a contenacao em BD
#-------
                           $temp = explode(":::::",  $palavra_na_BD);	
				$limpa_corrigido___NUM=count($temp);
				if ($limpa_corrigido___NUM>0)
				{
					
					$palavra_na_BD=$temp[0];
				}


#_______________________________________________________________________________________________
#--caso a palavra escrita e na bd sejam iguais não há erro, então escreve yellow.
#____________________________________________________________________________________________________																			
					
				
		#		echo "AGORAAAAAAAAAAAAAAAAAAKKKK23423KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK4234353253534\n";
		#		echo $palavra_case_errada;
		#		echo "::::::::::::::::::::234234::::::::::::::::::::1241421214:::::::::::::::::::\n";
		#		echo $palavra_escrita;
		#		echo "ERRRRRRRRRRRRRRROOOOOOOOOOOOOOO4324243OOOOOOOOOOO\n";
		#		echo $palavra_na_BD;	
					$teste1_p = explode(".",  $palavra_escrita);	
				$teste1=count($teste1_p);
				if ($teste1 == 2 )
				  {
				$palavra_escrita=$teste1_p[0];	  
				  }
			


																			
 if (strcasecmp($palavra_escrita, $palavra_na_BD) == 0)
				{


						
 ?>
						  
											  
								 <font color="yellow"><?php echo  $palavra_escrita  ?></font>
											<?php 
				}


 
 #Estudar o facto d eserem diferentes:
 
 #Pode ser por uma diferenca de case, ou apanhar um caracter estranho
 
 #no caso de caracter estranho, normalmente no final da palavra  com um ponto final ou virgula, deveremos fazer a sua remocao
 #E estudar a palavra de novo
 
 #No caso de ser case, tem um tratamento dedicado a este problema
 
 #Pode haver o caso de falha de sincronismos, ou seja falta de palavras
 
 
$palavra_nulaD="NULOnaoescrito";


					  
					 

 if ((strcasecmp($palavra_escrita, $palavra_nulaD) == 0))
				{
					$ne++;
					$palavras_nao_escritas[$ne]=$palavra_na_BD;


				}


#Importante 0998753247523				
#pode acontecer o caso mais compleso: 
#Original
#a galinha castanha vive
# se for escrito
# a galinha vive
#Foi esquecido a palavra castanha, e isso dessincroniza tudo, atenção que esquecido é diferente de um espaço em branco
#o algoritmo deve ser 

#echo "AQUI8\n";
#echo $palavra_escrita;

		echo "::::::::::::::::::::werwer::::::::::::::::::::1241421214:::::::::::::::::::\n";
			echo $palavra_escrita;
  $palavra_escita_limpa = explode("erro:",  $palavra_escrita);	
				$limpa_corrigido___NUM=count($palavra_escita_limpa);
				
				if ($limpa_corrigido___NUM > 1)
				{
						 $palavra_case_errada=$palavra_escita_limpa[1];

				}
				

				



				echo "NORMAAAAAAAAAAAAAAAAAAAAA\n";
echo $palavra_escita_limpa[1];				
#				echo "AGORAAAAAAAAAAAAAAAAAAKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK4234353253534\n";
#				echo $palavra_case_errada;
echo $palavra_escita_limpa[1];
				echo "::::::::::::::::::::::::::::::::::::::::1241421214:::::::::::::::::::\n";
			echo $palavra_escrita;
				echo "ERRRRRRRRRRRRRRROOOOOOOOOOOOOOOOOOOOOOOOOO\n";
				echo $palavra_na_BD;
 if ((strcasecmp($palavra_escrita, $palavra_na_BD) !== 0)  && (strcasecmp($palavra_escrita, $palavra_nulaD) !== 0))
				{

#echo "AQ4444UI8\n";
#echo $palavra_escrita;
					
					#Pode ser diferente, entre o escrito e não ser erro, pode ter sido escrito casas, , este caso também vai ser aqui acautelado, além de acautelar também desssincronias, ou seja, se falhar uma palavra, nao comecar a comparar erradamente.
					#------------------------------------------------------------------------------------
					#___sao diferentes, vou estudar agora o case, cuidado que aqui vai ter a palavra err: e temos que limpar e extrair a palavra, exemplo: #####4 erro:a
					#_____________________________________________________________________________________
					
                    $grande_palavra_escrita=strtoupper($palavra_escrita);
					$grande_palavra_na_BD=strtoupper($palavra_na_BD);
					
# $grande_palavra_escrita contem a palavra a estudar juntamente com a palavra ERRO já convertida em maiuscula
#agora vou estrair a palavra para comparar com a original, ou seja com $grande_palavra_na_BD.
#Se for igual então significa que convertendo para maiuscula tudo, que existe um erro em relação ao CASE.
#MAS pode não ser um erro ortografico.Mas colocar numa tabela à parte e mostrar com outra cor.


$limpa_corrigido = explode("ERRO:",  $grande_palavra_escrita);	
				$limpa_corrigido___NUM_case_upper=count($limpa_corrigido);
				if ($limpa_corrigido___NUM_case_upper > 1)
				{
				$palavra_upper_escrita=$limpa_corrigido[1];
				}

						  
						 #importante 0009989898 a variavel $palavra_escrita contem por exemplo 
						 ##3 erro:aerro:a, devemos portanto limpar a palra erro para termos a palavra original limpa
						 #contem $palavra_escita_limpa[1] a palavra neste caso em lowercase que esta errada.
						
						
                           $palavra_escita_limpa = explode("erro:",  $palavra_escrita);	
				$limpa_corrigido___NUM=count($palavra_escita_limpa);
				
				if ($limpa_corrigido___NUM > 1)
				{
						 $palavra_case_errada=$palavra_escita_limpa[1];

				}
				
					
#------------------------------------------------------------------------------------------------------
#No caso de ter palavras maiusculas.Ou seja onde o erro está no case
#-------------------------------------------------------------------------------------------------------
				##$palavra_case_errada contem a palavra com o case errado
				##E $palavra_na_BD contem a palavra correcta que esta na BD
##aqui fizemos o upper das letras, se forem iguais então o erro esta no case.
#red



					  if (strcasecmp($palavra_upper_escrita, $grande_palavra_na_BD) == 0)
					  {
						
						
						  $nh++;
						  $erro_CASE="SIM";
						  if ($erro_CASE == "SIM")
									{	
						
						  #echo "ESTRANHO2 palavra escrita a seguir erro case\n";
						  #echo $palavra_upper_escrita;
						  #echo "NA BDDDDDD\n";
						  #echo $grande_palavra_na_BD;
								
						  $erro_case_com_erro[$nh]=$palavra_case_errada;
						  $erro_case_sem_erro[$nh]=$palavra_na_BD;
						
						  
						   $grande_palavra_escrita=strtoupper($palavra_escrita);
					$grande_palavra_na_BD=strtoupper($palavra_na_BD);
					echo "VAI COMPARAR\n";
					echo $palavra_escrita;
					echo "A BDDDD\n"; 
					echo $palavra_na_BD;
					echo "UPPERRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRR\n";
					echo $grande_palavra_escrita;
					echo "OUTRAAAAAAAAAAAAAAAAAAAAAAAAAAAAA\n";
					echo $erro_case_com_erro[$nh];
					echo "UPPER                BDDDDDDDDDDDDDDDDDDDD\n";
					echo $grande_palavra_na_BD;


  $estudos11=explode(" ",$_POST['ditado']);  
	  $estudo1=count($estudos11);
	  echo "VAI VERRRRRRRRRRRRRRRRRRRRRRRRRRRRR\n";
	  echo $estudo1;
	   for ($jvv = 0; $jvv <= $estudo1; $jvv++){
		    if (strcasecmp($$estudos11, $erro_case_com_erro[$nh]) == 0)
			   {
				   echo "NUMEROOOOOOOOOOOOOOOOOOOOOOOOOOOOO\n";
	  
	               echo $jvv;
				   echo "#########\n";
			   }
	   }
#						  (strcasecmp($palavra_escrita, $palavra_na_BD) !== 0)
						  $pka++;							
											$palavra_CASE_correta[$pka]=$palavra_na_BD;								
											$palavra_CASE_escrita[$pka]=$erro_case_com_erro[$nh];

						  	 ?>
						   
							<font color="blue"><?php echo $palavra_case_errada ?></font> <font color="hotpink"><?php echo  $palavra_na_BD  ?></font>				  
											<?php 
									}
									
									
					  	if ($erro_CASE == "NAO")
									{			


						  ?>
						  

								   <font color="yellow"><?php echo  $grande_palavra_na_BD  ?></font>
											<?php 

#									$pka++;							
#											$palavra_CASE_correta[$pka]=$palavra_na_BD;								

#											$palavra_CASE_escrita[$pka]=$palavra_escrita;
									}
					  
						 
					  }
					
					

					
#IMPORTANTE:
#deveremos limpar aqui a palavra a testar na BD, deveremos limpar de , de . etc.Foi feito um teste que deu esta indicação.
					




				  
				if ($limpa_corrigido___NUM_case_upper > 1)
				{
						 $palavra_case_errada=$palavra_escita_limpa[1];

				}
	
							  
								 mysql_select_db($database_dic2me, $dic2me);
							$query_Recordset2 =sprintf("SELECT palavra FROM dic2me_palavras_individuais_PORTUGUES WHERE palavra=%s ",
								GetSQLValueString($palavra_estudar, "text"));
								$Recordset2 = mysql_query($query_Recordset2, $dic2me) or die(mysql_error());
								$Recordset2 = mysql_query($query_Recordset2, $dic2me);
								$totalRows_Recordset1 = mysql_num_rows($Recordset2);
								
											#no caso de palavra errada nao existir no dicionario então é mesmo um erro ortografico
									#se existir no dicionario, simplesmente é diferente do texto
						  
						  
						  
#333###00000### #######ppppppppppppppp############# a#################------------------######33223344 a##ESTUDA:::: aCOMPARA COM A####################**************************################################ EROOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO a A galinhzzz galinha #####333###00000### #######ppppppp
						  #ou seja maior que zero não é erro, mas vamos ver se é iferente doque deveria ter sido
	#se for maoir que zero => existe, mas se forem diferentes então nao é erro ortigrafico mas escreveu de outra maneira, deve aparecer com outra cor tamvbém					  
	
#						  echo "ESTRANHO1 \n";
#								echo "ESTUDO DE::::::::::::::::::::::::::::\n";
#								echo $palavra_escrita;
#								echo $query_Recordset2;
#								echo "PALAVRA ESCRITAAAAAAAAAAAAAAAAAAAAAA\n";
#								echo $palavra_escrita;
#								echo "NA BDDD2342DDDrgegerDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD\n";
#						        echo $palavra_na_BD;

#echo "palavra em falertertaAAAAAAAAA\n";
#echo $pslvraemfalta;
#echo "an123alisar esta ou nao?????\n";
#echo $palavra_escrita;
				
								  

#echo "palavra em faltaAAAAAAAAA\n";
#echo $pslvraemfalta;
#echo "analisar esta ??????????????????????????????\n";
#echo $palavra_na_BD;
#echo "analisar esta hjhjhjkortyrtyrtu nao?????\n";
#echo $analisar_esta;
#echo "tamanhoooooooooooooooooooooooooooooooo\n";
#echo $tamanho_escrito;




#	echo "#############**************************************************************\n";
#	echo $ditado[$jb___];
#	echo $query_Recordset2;
#	echo "numerossssssssssssssssss\n";
#	echo $jb___;
#	echo "TEXTO ORIGINALLLLLLLLLLLLLLLLLLLOOPP\n";
#	echo $texto_original[$jb___];
#	echo "##############FIMMMerterterMMMMMMMMMMMMMMMM\n";
#	echo $ditado[$jb___];
#	for ($jba___ = 0; $jba___ < $tamanho_escrito; $jba___++){
#		echo "ditado\n";
#		echo $jba___;
#		echo $ditado[$jba___];
		
#	}
		
		
#			echo "COM444PARRRRRRRRRRRRRRRRRRRRRRRRRRRRRRR\n";
#echo $palavra_escrita;
#echo "BDDDDDDDDDDDDDDDDD4444DDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD\n";
#echo  $palavra_na_BD;
#	for ($estudot = 0; $estudot <= $tamanho_escrito; $estudot++){
	
#	echo "numeroooooooooooooooooooooooooo\n";
#		echo $estudot;
#		echo "escritoooooooooooo\n";
#		echo  $texto_original[$estudot];
		
#		echo "o doisssssssssssssssssssssssssssssssssssssssss\n";
#		echo  $ditado[2];
#		echo "ORIGINAL 222222222222222222222\n";
#		echo  $texto_original[2];
#		echo "DOISSSSSSSSSSSSSSSSSSSSSSSSSSSSS\n";
#		echo $ditado[2];
#		echo "DITADOOOOOOOOOOOOOOOOOPPO\n";
#		echo $estudot;
#		echo "ditado333333333333333333\n";
#		 echo $ditado[3];
#		echo "ORIGINAL 3333333333333\n";
#		echo  $texto_original[3];
#		echo "TRESSSSSSSSSSSSSSSSSSSSSSSSSSS\n";

#	}

				
							if($totalRows_Recordset1 > 0)
										{	
				#---------------------------------------------------------------------------------------------------
				#Verificar se poderá ser ou nao uma questão de sincronização

				#Contem a palavra registada em BD $palavra_na_BD;

				#contem a palavra escrita $palavra_escrita;

				#-------------------------------------------------------------------------------------------------------

								
					
					 if (strcasecmp($palavra_escrita, $palavra_na_BD) == 0)
					 {
					
										 ?>												
									 <font color="yellow"><?php echo  $palavra_escrita  ?></font>
																<?php 
																
					 }

				
###--------------------------------------------------------------------------------------------------------------------------
##aqui vamos escrever as palavras, embora não sendo erradas, são diferentes do texto original
##Dentro deste if entramos porque a palavra escrita nao é um erro ortografico
####------------------------------------------------------------------------------------------------------------------------
	
#	echo "COMPARRRRRRRRRRRRRRRRRRRRRRRRRRRRRRR\n";
#echo $palavra_escrita;
#echo "BDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD\n";
#echo  $palavra_na_BD;



					if (strcasecmp($palavra_escrita, $palavra_na_BD) !== 0)
					  {	
					  $contador_original++;
				  $nao_e_original[$contador_original]=$palavra_escrita;
					  }
						  
						  
																			}
						   
	
							if($totalRows_Recordset1 == 0)
						
																			{	
																			#galos white
																		
									

									if ($erro_CASE == "NAO")
									{			
									

									 mysql_select_db($database_dic2me, $dic2me);
							$query_Recordset2 =sprintf("SELECT palavra FROM dic2me_palavras_individuais_PORTUGUES WHERE palavra=%s ",
								GetSQLValueString($palavra_escrita, "text"));
								$Recordset2 = mysql_query($query_Recordset2, $dic2me) or die(mysql_error());
								$Recordset2 = mysql_query($query_Recordset2, $dic2me);
								$totalRows_Recordset1_nao_existentes = mysql_num_rows($Recordset2);
		
$existe="";
#echo "estranho 8\n";


for ($jbbba = 0; $jbbba <= $tamanho_escrito; $jbbba++){


$ditado=explode(" ",$_POST['ditado']);  
$tamanho_escrito=count($ditado);

#echo "DITADO escrito \n";
#echo $ditado[$jbbba];


}

for ($jbbb = 0; $jbbb <= $tamanho_escrito; $jbbb++){


	  $ditado=explode(" ",$_POST['ditado']);  
	  $tamanho_escrito=count($ditado);
	  
#	  echo "nyumero\n";
#	  echo $tamanho_escrito;
#	  echo "______________2334242___________________________________\n";
#		  echo $vales;
#		  echo "NUMEROOOOOOOOhgghhjOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO\n";
#		  echo $palavra_escrita;
#		  echo ";;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;\n";
#	  echo $palavra_na_BD;
#	  echo "VA345345LESSSSSSSSSSSSSSSS\n";
#		  echo $texto_original[$jbbb];
		  $vales = $texto_original[$jbbb];
	  
	  
	  if ((strcasecmp($texto_original[$jbbb], $palavra_na_BD) !== 0) && ( $existe !== "SIM"))
							{
							  $pv++;  	
#							echo $texto_original[$jbbb];
#							echo "a palavra nao existeeeeeeeeeeeeee\n";
#							echo $palavra_na_BD;
							$provisorio[$pv]=$palavra_na_BD;
							}
	  
	 

#echo $palavra_na_BD;
#	  echo "VA345345LESSSSSSSSSSSSwerwerSSSS\n";
#		  echo $texto_original[$jbbb];
		  if (strcasecmp($texto_original[$jbbb], $palavra_na_BD) == 0)
							{	
							
#							echo $palavra_na_BD;
#	  echo "VA345345LESSSSSSSSSSS3465436545645645SSSSS\n";
#		  echo $texto_original[$jbbb];
#							echo "a palavra existeeeeeeeeeeeeee\n";
#							echo $palavra_na_BD;
							$existe="SIM";
							}
	  
	  #	if (strcasecmp($texto_original[$jbbb], $palavra_na_BD) !== 0)
	  #					  {	
	  #					  echo "a palavra NAOOOOOOOOOO existeeeeeeeeeeeeee\n";
	  #					  echo $palavra_na_BD;
							
	  #					  }
	  
	  
	  $ditado=explode(" ",$_POST['ditado']);  
	  $tamanho_escrito=count($ditado);


		  //processar diff
		  
		  
		  
		  //Comparacao e correcao
		  // o que esta na BD
		  
		  $encontrou__="NAO";
		  
		  //Validar erros
		  $m=0;
#		  for ($jv = 0; $jv <= $tamanho_escrito; $jv++){
#		  echo "oque foi escrito\n";
#		  echo "posicao\n";
#		  echo $jv;
#		  echo "palavras;;\n";
		  
#		  }
		  
		  
		  if ( $ditado[$jv] == $palavra_na_BD)
		  {
		  
#		  echo $ditado[$jv];
#			  echo ";;;;qweq;;;sddgdfgdfg;;;;;igual;;;;;;;;;;;;;;;;;;;;;;;;;;;;;\n";
#		  echo $palavra_na_BD;
#		  echo "VA345345LESS342342342SSSSSSSSSSSSSS\n";
		  $encontrou__="SIM";
#		  echo "ENCONTROUUUUUUUUUUUUUUUUUUUUUUUUUU\n";
#			  echo $encontrou__;
			  
		  }
			 
			 
}


#echo "VAI DIZERRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRR\n";

for ($jbbb = 0; $jbbb <= $tamanho_escrito; $jbbb++){

#	if ($provisorio[$jbbb] == $palavra_na_BD )
#	   {
	    # echo "encontrouuuuuuuuuuuuuuuuuuuuuuuuuuuuuu\n";
#echo  $provisorio[$jbbb];
#echo "#####33333\n";
#echo  $palavra_na_BD;

#									}
									


if ($palavra_escrita ==  $vales)
{
	$existe="SIM";
#	echo "a palavrauruyryrrtye igual, ou seja exite  nao deve estar na tabela das que estao mal\n";
#	echo $vales;
}
	

}
	
	
	
									$nao_e_erro="S";	
									#Importante 1000
									#Este caso a palavra escrita esta bem escrit amas não faz parte do Texto original.
									
									#Verificar se não faz mesmo parte do texto original, vamos analisar de novo todas as palavras do texto original.
									#aqui estamos aevitar o erro de quando esquecemos um palavra o sistema estar a comparar desfasadamente.
									#assim vou verificar SE a palavra em causa não existe mesmo.
									#Se não existir, então é uma palvra escrita que não está no otexto
									#Se existtir então tudo bem, não deve aparecer na tabela de palavras escritas não existentes
									#em concreto:
									#Palavras que escreveste no ditado mas não pertencem ao texto:
									#ou seja se indico que existe, é porque essa palavra está escrita e não deve constar na tabela de palavras escritas e nao existem no texto
									
									
									
#	echo ";;;;qweq;;;;;;;;igual;;;;;;;;;;;;;;;;;;;;;;;;;;;;;\n";
#echo $palavra_na_BD;
#echo "VA345345LESS3423escrita42342SSSSSSSSSSSSSS\n";
#echo $palavra_escrita;
#echo $encontrou;
#echo "#########E#E#E#E\n";
#echo $encontrou__;
	if (($encontrou__ == "SIM"))
								{
									
#									echo $ditado[$jv];
#	echo ";;;;qweq;;;sddgdfgdfg;;;;;reerteigual;;;;;;;;;;;;;;;;;;;;;;;;;;;;;\n";
#echo $palavra_na_BD;
#echo "VA345345LESS342342342SSSSStretSSSSSSSSS\n";
$encontrou__="SIM";
#echo "ENCONTROUUUUUUUUUUUUwerwerUUUUUUUUUUUUUU\n";
	echo $encontrou__;
#									echo "esta palavra existe no texto\n";
#									echo $vales;
#									echo "####P#P#P#P###################\n";
#									echo $palavra_na_BD;
#echo "VA345345LESS3423werwdfgdfgdfggdffgdfescrita42342SSSSSSSSSSSSSS\n";
#echo $palavra_escrita;
								}
								
								
								if (($encontrou__ !== "SIM"))
								{
#									echo "estaghkkhj nao palavra existe no texto\n";
#									echo $vales;
									
#									echo $palavra_na_BD;
#echo "VA345345LESS3423dfgdfgdfggdffgdfescrita42342S23423442SSSSSSSSSSSSS\n";
#echo $palavra_escrita;
								}
								if (($totalRows_Recordset1_nao_existentes == 1) && ($existe != "SIM") && ($encontrou !== "SIM"))
								{
#									echo "estwerwerwa palavra existe no texto\n";
#									echo $vales;
									$mk++;
									$nao_escritas++;

#limpar palavras malcriadas 

												$nao_e_erro="N";
																$palavranao_existente[$mk]=$palavra_escrita;								
																$palavranao_escrita[$nao_escritas]=$palavra_na_BD;																		 ?>
														  
											 <font color="DeepPink"><?php echo $palavra_escrita ?></font> 
														<?php 
						  
								}
								if ($totalRows_Recordset1_nao_existentes == 0)
												{

$pka__++;
 
$mostra_palavra_tabela_correcta[$pka__]=$palavra_na_BD;
								
$mostra_palavra_tabela_errada[$pka__]=$palavra_escrita;
													
									
									
									
													
												$pk++;							
												$mostra_palavra_tabela_correcta[$pk]=$palavra_na_BD;								
												$mostra_palavra_tabela_errada[$pk]=$palavra_escrita;
								$pilha_palavras_com_erros_ortograficos=$palavra_escrita.";".$pilha_palavras_com_erros_ortograficos;
								$pilha_palavras_corrigidas=$mostra_palavra_tabela_correcta[$pk].";".$pilha_palavras_corrigidas;
                                      if ( $palavra_escrita == " ")
												{

											?> <mark> <?php echo  $palavra_na_BD  ?></mark>				
												 <?php }

                                      if ( $palavra_escrita !== " ")
												{
$erros_ortograficos="SIM";

?>
		
											 <font color="red"><?php echo $palavra_escrita ?></font><font color="blue"><?php echo $palavra_na_BD ?></font> 
														<?php  }
																										 
									  
														  

	
	
						  
									}
								
									}
																			}
						  
							  }
							  
							  
							  
							  
							
				
			


               
				}
					
               

		   
}
}
}

			

?>
	    <?php
	
	




	
	
	
		}
	}
	
	


	 $valida_c=explode("correcta",$palavra[$cv]);  
$tamanho_escrit_co=count($valida);
	 $valida_e=explode(":errada:",$palavra[$cv]);  
$tamanho_escrito_e=count($valida_e);	
		  } 
		  

$str1=$palavra_correcta[$i];
$str2=$palavra_corrigida[$i];
$str1=trim($str1, "\0");
$str2=trim($str2, "\0");

$str11=trim($str1, "\t");
$str222=trim($str2, "\t");

$str1111=trim($str11, "\n");
$str2222=trim($str222, "\n");
$str11111=trim($str1111, "\r");
$str22222=trim($str2222, "\r");

$str111111=trim($str11111, "\x0B");
$str222222=trim($str22222, "\x0B");

$str1=ltrim($str11111, "\0");
$str2=ltrim($str22222, "\0");

$str11=ltrim($str1, "\t");
$str222=ltrim($str2, "\t");

$str1111=ltrim($str11, "\n");
$str2222=ltrim($str222, "\n");
$str11111=ltrim($str1111, "\r");
$str22222=ltrim($str2222, "\r");

$str111111=ltrim($str11111, "\x0B");
$str222222=ltrim($str22222, "\x0B");



if ($str111111 !== $str222222)
{
			  
		  
		 
		  
		  //else
		  //{
				
				
				
				 
				

 ################corrigida##################################
#Importante9 : aqui compara p+alavra original e palavra corrigida
#$str1=$palavra_correcta[$i];
#$str2=$palavra_corrigida[$i];
		  
		  }
		  //}
 }
?>
<?php
//$palavra_corrigida
//$palavra_errada



//FIM processar o que está na BD
//or

//Ler texto escrito

$ditado=explode(" ",$_POST['ditado']);  
$tamanho_escrito=count($ditado);


//processar diff



//Comparacao e correcao
// o que esta na BD






//Validar erros
$m=0;
for ($j = 0; $j <= $tamanho_escrito; $j++){
	$certos=0;
	$errados=0;
	$recomecar="sim";
	
		 for ($i = 0; $i <= $tamanho_na_bd; $i++){
		$recomecar="nao";
		
		#ratu white

		if ($texto[$j] !== " ")
		{
			$palavra1=$texto[$j];
		
		}
	
		$texto__=explode(".",$palavra1);  
$texto__=count($texto__);
if ( $texto__ > 0)
{
$tt_palavra=$texto__[1];

}
else
{
$tt_palavra=$texto[0];

}


	$ditado__=explode(".",$ditado[$j]);  
$tamanho__=count($ditado__);
if ( $tamanho__ > 0)
{
$palavra=$ditado__[0];
}
else
{
$palavra=$ditado[1];
}

		$ditado_L=explode(" ",$palavra);  
$ditado__=count($ditado_L);
if ( $tamanho_L == 0)
{
		if  ( $tamanho_L > 0)
		{
		$palavra=$palavra__[0];
		}
		
		


if ( $tamanho_L > 0)
{
		$palavra=$palavra__[1];


		}
		
		
}


	
		$texto_L=explode(" ",$palavra);  
$texto__=count($texto_L);
if ( $texto_L == 0)
{
		if  ( $texto_L > 1)
		{
		$palavra_t=$texto__[0];
		}
}
		if ($t_palavra != "")
		{
		$t_palavra=$palavra_t;
		}
		else
		{
		$t_palavra=$palavra_tt;
		}
	

#-----------------------------------------------------------------------------------------------------------------
#___Limpeza das palavras escritas 
#-----------------------------------------------------------------------------------------------------------------

$palavrasemerroerradas[$cc]=$palavra1;
$palavraerro_contexto[$cc]=$ditadolimpo;	
		
$pala = trim($palavra, "\0");
$tpala_p = trim($palavra_tt, "\0");
$palavra=$pala;
$palavra_tt=$pala_p;

$pala = trim($palavra, "\x0B");
$tpala_p = trim($palavra_tt, "\x0B");
$palavra=$pala;
$palavra_tt=$pala_p;

$pala = trim($palavra, " ");
$tpala_p = trim($palavra_tt, " ");
$palavra=$pala;
$palavra_tt=$pala_p;



$comparador=$palavra;




		


//fim limpeza das palavras				 
//limpeza do texto


	

 
				
				
   }
   
 

}

//pelavras a repetir:
//$ditado[$i]  != $palavra1
//ditado contem o ditado feito pelo aluno
//texto contem o texto guardado na BD e serve para comparar

$m=0;


	
for ($j = 0; $j <= $tamanho_na_bd; $j++){
	$certos=0;
	$errados=0;
	
			$ditado__=explode(".",$ditado[$i]);  
$tamanho__=count($ditado__);
if ( $tamanho__ > 1)
{
$palavra=$ditado__[0];
}
else
{
$palavra=$ditado[$i];
}

		$ditado_L=explode(" ",$palavra);  
$ditado__=count($ditado_L);
if ( $tamanho_L == 0)
{
		if  ( $tamanho_L > 1)
		{
		$palavra=$ditado__[0];
		}
}
		 for ($i = 0; $i <= $tamanho_escrito; $i++){
		
				$palavra=$palavra1;
				
   }
   
 
}
// Palavras a repetir




?> 

          
 <p></p>
 <p></p>
 <p></p>




</div>
  
  </div>
 
   <div class="flex">
    <div>
<?php
echo "o texto que devias ter escrito, sem erros\n";
?>

  <?php 


for($comp=0; $comp<=$completa; $comp++) {


  ?>
						  
											  
								 <font color="yellow"><?php echo  $frase_completa[$comp]  ?></font>
											<?php 
}

   if ($pk ==0)
   {
 
  $mess="Parabens, Não fez erros neste ditado";
        echo "</font> <font color=white size='3pt'>  $mess  </font>";
		?> 
        <p>
		<img src="imagens/sem_erros.png" width="100"> <p><?php
}	

   if (($pk >0) && ($temasneira !== "SIM"))
   {
  $mess="Infelizmente dizeste alguns erros neste ditado";
        echo "</font> <font color=white size='3pt'>  $mess  </font>";
		?> 
        <p>
		<img src="imagens/erro_orto.png" width="100"> <p><?php
}	
	


   if ($temasneira == "SIM")
   {
  $mess="Infelizmente escreveste palavras mal educadas no ditado";
        echo "</font> <font color=white size='3pt'>  $mess  </font>";
		?> 
        <p>
		<img src="imagens/maeducacao.jpg" width="100"> <p><?php
}	


?>
					
				
<table border="1">
        <tr>
           
<?php

if (($mk >0) && ( $mk  !== ""))
{
  for($me=0; $me<=$mk; $me++) {


?>

            <th><?php echo "$palavranao_existente[$me] ";?> </th>
            <?php


}

}
              ?>
         </table>

<table border="1">

Palavras que nao escreveste no ditado: na tabela abaixo está a lista das palavras que devias ter escrito no ditado, mas nao o fizeste.
           
<?php

if (($nao_escritas >0) && ( $nao_escritas  !== ""))
{
  for($me__=0; $me__<=$nao_escritas; $me__++) {


?>

            <th><?php echo "$palavranao_escrita[$me__] ";?> </th>
            <?php


}

}
              ?>
         </table>


 


<?php
#FIMTabela de palavras nao escritas
#=======================================================================
?>

erros de maiusculas 
O que aqui se apresenta não são erros ortográficos, são falhas sobre as maiusculas, por exemlpo inicio de um parafrago,nomes proprios.
Tabela T2
<p>
<table border="1">
	<tr>
 <th>Errada </th>
            <th>corrigida </th>
<?php

  for($m=0; $m<=$pka__; $m++) {

if(empty($palavracorrecta[$m]))
{$erro="erro2";
}
else
{
$total_bom=$erro_case_sem_erro[$m]." ; ".$total_bom;
}

$total_mau= $erro_case_com_erro[$m]." ; ".$total_mau;

if(empty($palavrama[$m]))

{
$erro="erro2";
}
else
{
$total_mau= $erro_case_com_erro[$m]." ; ".$total_mau;
}

if(($mostra_palavra_tabela_errada[$m] != "")  && ($temasneira !== "SIM"))
{
			  ?>
			  <tr>
						  <th><?php echo " $mostra_palavra_tabela_errada[$m] ";?> </th>
						  <th><?php echo "$mostra_palavra_tabela_correcta[$m] ";?> </th> <?php
			  }
			   
			  }
			  $datah=date("Y-m-d");
			  
				mysql_select_db($database_dic2me, $dic2me);
				

####Remove ; de asneira e detecta se foi colocado ---- se sim não deve inserir esse texto ------na BD 

$ditado__=explode(";",$pilha_palavras_com_erros_ortograficos);  
$tamanho__=count($ditado__);

$asneira__=explode("-------------------",$ditado__[0]);  
$asneira___tamanho=count($asneira__);





 
				if (($asneira___tamanho < 1)  || ($erros_ortograficos == "SIM"))
                    {
								
								$insertSQL = sprintf("INSERT INTO dic2me_estatisticas_PORTUGUES_total_sem_erros (id_aluno, id_palavra, id_TPC ) VALUES (%s, %s,%s)",
													 GetSQLValueString($_SESSION['MM_Username'], "text"),
													 GetSQLValueString($pilha_palavras_com_erros_ortograficos, "text"),
													 GetSQLValueString($cod_ditado, "text")
												
													 );
								$Result1 = mysql_query($insertSQL, $dic2me) or die(mysql_error());
								
							  $datah=date("Y-m-d");
								mysql_select_db($database_dic2me, $dic2me);
								$insertSQL = sprintf("INSERT INTO dic2me_estatisticas_PORTUGUES_pormenor_palavras_correctas (id_aluno, id_palavra, id_TPC ,data) VALUES (%s, %s,%s,%s)",
													 GetSQLValueString($_SESSION['MM_Username'], "text"),
													 GetSQLValueString($pilha_palavras_corrigidas, "text"),
													 GetSQLValueString($cod_ditado, "text"),
																		 GetSQLValueString($datah, "text")
													 );

								$Result1 = mysql_query($insertSQL, $dic2me) or die(mysql_error());
					}
	      	
	      ?>
         </table> 
 <p></p>
 <p></p>
 <p></p>


Erros de contexto apenas diferem do texto original mas não sao erros ortográficos
<p>
Estes erros acontecem, quando o aluno esceve uma palavra diferente do que está no texto.
<p>
Por exemplo se o ditado indicar, gato, mas o aluno escrever gatos, gatos não está errado a nível ortográfico.
<p>
Tabela T1 aqui  compara: 

##processa erros, para yter a inteligencia de distyinguir o tipo de erros e dar sugestões

$estudo_inteligencia=explode(" ",$_POST['ditado']);  
$tamanho_escrito_inteligencia=count($estudo_inteligencia;
						
  for($m=0; $m<=$tamanho_escrito_inteligencia; $m++) {
  
  
  
  
  
  }                        
                        
					
<table border="1">
        <tr>
 <th>Errada </th>
            <th>Correcta</th>
<?php
  for($m=0; $m<=$nh; $m++) {
$mostra_palavra_tabela_correcta[$pka]=$palavra_na_BD;
								
$mostra_palavra_tabela_errada[$pka]=$palavra_escrita;

?>

<?php
if($palavra_CASE_escrita[$m] != "")
{
?>
<tr>
            <th><?php echo "$palavra_CASE_escrita[$m] ";?> </th>
            <th><?php echo "$palavra_CASE_correta[$m] ";?> </th> <?php
}

}

              ?>
         </table>
 <p></p>
 <p></p>


Erros de contexto apenas diferem do texto original mas não sao erros ortográficos
<p>
Estes erros acontecem, quando o aluno esceve uma palavra diferente do que está no texto.
<p>
Por exemplo se o ditado indicar, gato, mas o aluno escrever gatos, gatos não está errado a nível ortográfico.
<p>
Tabela T1: 

						
					
<table border="1">
        <tr>
 <th>Palavra em falta </th>
            
<?php
  for($tbm=0; $tbm<=$conta_palavras_falta; $tbm++) {


?>

<?php
if($palavras_em_falta[$tbm] != "")
{
?>
<tr>
            <th><?php echo " $palavras_em_falta[$tbm] ";?> </th>
             <?php
}

}

              ?>
         </table>
 <p></p>
 <p></p>




</div>
  
  </div>
  

  <?php


echo "Texto escrito pelo aluno"; ?>
<p>  <?php 
echo "A vermelho, palavras escritas com erro pelo aluno no ditado"; ?>
<p><?php
echo "A azul, palavras, escritas sem erros ortográfico pelo aluno";
	      ?>
<p></p>

correcta


   <div class="flex">
    <div>
    

          <br>
          <?php  
		 


  }
    ?>  
    
</div>
  
  </div>

    </article>
    <nav>nav</nav>
    <aside>aside</aside>
 </div>
 <footer>footer</footer>
</body>
</html>
