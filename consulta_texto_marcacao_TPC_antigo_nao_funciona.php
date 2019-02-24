<?php require_once('./funcoes/funcoes.php');
echo "pois188"; ?>

<!--#funcoes para marcar TPC na tabel dic2me_TPC FINAZ
galo1BOI
Aluno a quem quer marcar o ditado pois Idioma
#aqui que faz a geracao do id geral do tpc para todos o alunos 	 
#098098098098
	#da tabela dic2me_controlo_id_do_tpc_mostrar_miudos
	$id_a_mostrar_alunos_do_tpcBD=obter_id_da_tabela_dic2me_controlo_id_do_tpc_mostrar_miudos ($controlo);

	$id_a_mostrar_alunos_do_tpc=$id_a_mostrar_alunos_do_tpcBD+1;



exit
hoje
Texto Original
inserir_em_dic2me_controlo_id_do_tpc_mostrar_miudos_id_do_TPC($controlo,$id_texto,$controloid)
$id_do_TPC_para_miudos=gerir_dic2me_controlo_id_do_tpc_mostrar_miudos($controlo, $id_linha);
 $quantos=garante_obter_unico_obter_id_da_tabela_dic2me_controlo_id_do_tpc_mostrar_miudos($id_a_mostrar_alunos_do_tpc);
Esta é a funcao que faz o insert do tcp a cada aluno
$id_do_tpc_dos_alunos=inserir_TPC_ALUNO_por_alunos($controlo, $id_linha,$identificador,$descricao,$contador,$id_a_mostrar_alunos_do_tpc );
funcao que gera o ID:
$id_a_mostrar_alunos_do_tpcBD=obter_id_da_tabela_dic2me_controlo_id_do_tpc_mostrar_miudos ($controlo);

#Esta tabela é onde controla o id do tpc a mostrar ao aluno  dic2me_controlo_id_do_tpc_mostrar_miudos; funcao obter_id_da_tabela_dic2me_controlo_id_do_tpc_mostrar_miudos
#$id_do_tpc_dos_alunos=inserir_TPC_ALUNO_por_alunos($controlo, $id_linha,$identificador,$descricao,$contador,$id_a_mostrar_alunos_do_tpc );
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dit2me</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">



    <!-- Custom styles for this template -->
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/floater-bar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar-fixed-top">
      <div class="container">

        <ul>
            <li><a href="#">Dit2me intenacional</a></li>
            <span>|</span>
            <li>
              <a href="#">Siga-nos</a>
            </li>
            <li class="social facebook">
              <a href="#"><img src="images/facebook.png"></a>
            </li>
            <li class="social">
              <a href="#"><img src="images/twitter.png"></a>
            </li>
            <li class="social">
              <a href="#"><img src="images/instagram.png"></a>
            </li>
            <li class="social">
              <a href="#"><img src="images/linkedin.png"></a>
            </li>
        </ul>
      </div>
    </nav>

    <div class="row" id="wrapper">

      <div class="jumbotron col-md-12 col-sm-12 col-xs-12">
        <div class="login hidden-xs">
          <ul>
           
        </div>
          <img class="logo col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3" src="images/logo.png">
          <ul class="nav main_nav navbar-nav hidden-xs">
            <li>
              <a href="#" class="btn_inicio">
                <svg version="1.1" id="btn_inicio" x="0px" y="0px" width="89.333px" height="40.667px" viewBox="0 0 109.333 40.667" enable-background="new 0 0 109.333 40.667" xml:space="preserve">
                <path fill="#1890CF" d="M6.667,45.334L1.333,11c0,0-0.417-5.083,2.708-5.708C6.292,4.917,102.333,2,102.333,2S109,1.333,108,8.667 s-4,31.832-4.667,33s-0.834,5.501-7.333,6C87,47.667,11.667,49,9.333,48S6.667,45.334,6.667,45.334z"/>
                </svg>
                <span class="menu-title"></span>
              </a>
            </li>
            <li class="dropdown">
              <a data-toggle="dropdown" href="#" class="btn_about" style="z-index: 9999">
                <svg version="1.1" id="btn_about" x="0px" y="0px" width="176.667px" height="40.667px" viewBox="0 0 196.667 40.667" enable-background="new 0 0 196.667 40.667" xml:space="preserve">
                <path fill="#1890CF" d="M10.755,44.35L1.034,10.016c0,0-0.759-5.083,4.936-5.708c4.102-0.375,179.136-3.292,179.136-3.292 s12.152-0.667,10.33,6.667s-7.289,31.832-8.506,33c-1.215,1.168-1.521,5.502-13.363,6c-16.402,0-153.699,1.334-157.953,0.334 C11.36,46.016,10.755,44.35,10.755,44.35z"/>
                </svg>
                <span class="menu-title">Manual de ajuda</span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="./MAnual_dic2me_professor.pdf">Manual do professor</a></li>
                <li><a href="./MAnual_dic2me_professor.pdf">Manual do professor</a></li>
                <li><a href="#">A startup</a></li>
              </ul>
            </li>

            <li>
              <a href="#" class="btn_ditado">
                <svg version="1.1" id="btn_ditado" x="0px" y="0px" width="151.5px" height="40.667px" viewBox="0 0 171.5 40.667" enable-background="new 0 0 171.5 40.667" xml:space="preserve">
                <path fill="#1890CF" d="M9.452,44.349L1.029,10.016c0,0-0.658-5.083,4.276-5.708C8.859,3.933,160.51,1.016,160.51,1.016 s10.529-0.667,8.949,6.667c-1.579,7.334-6.316,31.831-7.369,32.999s-1.317,5.502-11.578,6c-14.211,0-133.165,1.334-136.851,0.334 S9.452,44.349,9.452,44.349z"/>
                </svg>
                <span class="menu-title"></span>
              </a>
            </li>
            <li>
              <a href="#" class="btn_help">
                <svg version="1.1" id="btn_help" x="0px" y="0px" width="191.5px" height="40.667px" viewBox="0 0 211.5 40.667" enable-background="new 0 0 211.5 40.667" xml:space="preserve">
                <path fill="#1890CF" d="M11.439,44.349L1.036,10.015c0,0-0.813-5.082,5.282-5.707c4.391-0.375,191.715-3.292,191.715-3.292 s13.004-0.667,11.055,6.667c-1.951,7.334-7.803,31.832-9.105,33c-1.299,1.168-1.627,5.5-14.301,6 c-17.555,0-164.49,1.332-169.042,0.332C12.088,46.015,11.439,44.349,11.439,44.349z"/>
                </svg>
                <span class="menu-title"></span>
              </a>
            </li>

            <li class="dropdown">
              <a data-toggle="dropdown" href="#" class="btn_register">
                <svg version="1.1" id="btn_register" x="0px" y="0px" width="99.667px" height="40.667px" viewBox="0 0 119.667 40.667" enable-background="new 0 0 119.667 40.667" xml:space="preserve">
                <path fill="#1890CF" d="M7.193,45.833L1.335,11.5c0,0-0.458-5.083,2.974-5.708C6.781,5.417,112.264,2.5,112.264,2.5 s7.324-0.667,6.227,6.667c-1.1,7.334-4.395,31.833-5.127,33s-0.916,5.5-8.053,6c-9.887,0-92.626,1.332-95.19,0.332 S7.193,45.833,7.193,45.833z"/>
                <span class="menu-title">HOME</span>
                </svg>
              </a>
              <?php 
#              $controlo=$_GET['CONTROLO'];
     $HOME = "./main_professores.php?CONTROLO=$controlo"; ?>
              <ul class="dropdown-menu">
                <li><a href="<?php echo $HOME ?>">HOME</a></li>
                
              </ul>
            </li>


            <li>
              <a href="#" class="btn_contact_us">
                <svg version="1.1" id="btn_contact_us" x="0px" y="0px" width="140.167px" height="40.667px" viewBox="0 0 160.167 40.667" enable-background="new 0 0 160.167 40.667" xml:space="preserve">
                  <path fill="#1890CF" d="M9.198,45.333L1.342,11c0,0-0.614-5.083,3.988-5.708C8.646,4.917,150.104,2,150.104,2 s9.82-0.667,8.348,6.667c-1.473,7.334-5.893,31.833-6.875,33s-1.229,5.5-10.801,6C127.52,47.667,16.562,49,13.125,48 S9.198,45.333,9.198,45.333z"/>
                  <span class="menu-title">Fala Connosco</span>
                </svg>
              </a>
            </li>
          </ul>
          <div class="navbar-header navbar-header-mobile">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
      </div>



      <div class="container">
      <nav class="navbar navbar-default mobile-nav visible-xs">
                <div class="container">

                  <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav nav1 navbar-nav" style="max-width: 100%;width: 100%;margin: auto;z-index: 2;position: relative;background-color: #1890cf;">

                     

                      <div class="dropdown">
                        <li class="register_entrada dropdown-toggle" data-toggle="dropdown"><a href="#register_entrada">Registar</a></li>
                        <ul class="dropdown-menu">
                     
                        </ul>
                      </div>

                    </ul>
                    <ul class="nav nav2 navbar-nav" style="max-width: 100%; margin: auto;z-index: 1;margin-top: -0.5em;position: relative;">
                      <li class="contat_us_entrada"><a href="#contat_us_entrada"></a></li>
                      <li class="login_entrada"><a href="#login_entrada">Logout</a></li>
                      <li class="loja_online_entrada"><a href="#loja_online_entrada"></a></li>
                      <li class="tpc_entrada"><a href="#tpc_entrada">TPC</a></li>

                    </ul>

                  </div><!--/.nav-collapse -->
                </div>
        </nav>
		
		<div> <!--/.nav-collapse inicio-->
			ver
        <!--/Inserir conteúdo aqui INICIO -->
			
<?php 
 echo "-----------------------------------pois18899.......... FIM......"; 
 ####################################chamadas funcoes
 echo "kala4";
 $cookie_ID=obter_valor_do_cookie_prof();
 echo "kala9";
    $datacookie=dados_do_cookie($cookie_ID);
echo "kala5";	
	$nif_pro=$datacookie[2];
	$pass_pro=$datacookie[0];
	$cod_escola=$datacookie[1];
		$lastlogin=$datacookie[3];
 
 
 
 ##################################################################
 
 #require_once('./Connections/dic2me.php');
#require_once('./funcoes/funcoes.php');
 #echo "pois18800000-"; 
#require_once('./Connections/dic2me.php'); 

echo "tanque";
?>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<?php
#require_once('./Connections/dic2me.php');
#require_once('./funcoes/funcoes.php');
 echo "pois18800000-"; 
#header('Content-Type: text/html; charset=utf-8');

echo "kala";
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}echo "kala1";

// Start the session
session_start();

echo "kala2";

    session_start();
    

$cookie_name="cookie_login_professor";
$controlo=$_SESSION['CONTROLO'];
#$controlo=$_GET['CONTROLO'];


 $cookie_ID=$_COOKIE[$cookie_name];




###ler dados do cookie que estao na tabels dic2me__controlo

echo "kala4";
echo $nif_pro;
  #  $datacookie=dados_do_cookie($cookie_ID);
echo "kala5";	
	#$nif_pro=$datacookie[2];
	#$pass_pro=$datacookie[0];
	#$cod_escola=$datacookie[1];
	#	$lastlogin=$datacookie[3];

echo "lulu";








#$DADOS=obterdados_turma_do_professor($_SESSION['CONTROLO']); biluscao
echo "MARIAestudo2";
$DADOS=obterdados_turma_do_professor($cookie_ID);

echo "lulu2";



$ano=$DADOS[0];
$idioma=$DADOS[1];

$codprofessor=$DADOS[2];


$idioma=$DADOS[1];
$codtuma=$DADOS[3];

$anolectivo=$DADOS[4];
$codescola=$DADOS[5];


echo "lulupois3";


// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  #$_SESSION['MM_Username'] = NULL;  fontao
  #$_SESSION['MM_UserGroup'] = NULL;
  #$_SESSION['PrevUrl'] = NULL;
  #unset($_SESSION['MM_Username']);
  #unset($_SESSION['MM_UserGroup']);
  #unset($_SESSION['PrevUrl']);
	
#     $controlo=$_GET['CONTROLO'];vive
     $MM_redirectLoginSuccess = "consulta_texto_marcacao_TPC.php?CONTROLO=$controlo";
    
  $logoutGoTo = "consulta_texto_marcacao_TPC.php?CONTROLO=$controlo";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
echo "forca";
?>
<?php

echo "fontao";
$Recordset7=obtem_lista_alunos();
echo "fontao2";
#IIOMA




echo "podence";
$row_Recordset7 = mysql_fetch_assoc($Recordset7);

$totalRows_Recordset7 = mysql_num_rows($Recordset7);
echo "podence09";
# $controlo=$_GET['CONTROLO'];
$editFormAction =  "consulta_texto_marcacao_TPC.php?CONTROLO=$controlo";
$pede="1";






		
		 session_start();
if($_POST['aluno'] != "")
{
$_SESSION['alunovv']=$_POST['aluno'];
}
if($_POST['ano'] != "")
{
$_SESSION['anovv']=$_POST['ano'];
}

if($_POST['descreve'] != "")
{
$_SESSION['descrevevv']=$_POST['descreve'];
}


echo "podence0099";
	  mysql_select_db($database_bdteste, $bdteste);
$conta_ID_TPC =obterquantos_tcps_já_marcados_os_ids();
echo "podence0000008888";




$query_Recordset6=obtem_titulos_ditados($_POST['texto']);
echo "podence00022222111111";

#$row_Recordset6=obtem_titulos_ditados($_POST['taro']);


$Recordset6 = mysql_query($query_Recordset6, $dic2me);
#
#log_BD ('./LOGS/dados_log.txt', mysql_error(), $query_Recordset6);
$row_Recordset6 = mysql_fetch_assoc($Recordset6);







$aluno="toda_turma";


echo "belas";

#return array($ano,$idioma,$codprofessor,$codtuma, $anolectivo, $cod_escola);
$dadosaluno=obterdados_nifalunos_codcontrolo($controlo);
echo "canelas";
$nif_aluno=$dadosaluno[0];
$nome_aluno=$dadosaluno[1];
$texto=$_POST['texto'];
$descricao=$_POST['descreve'];





$identificador= round(microtime(true) * 1000);

echo "canelas1111111";





	$codescola=$total[5];



	
	$id_linha="0";
	
	$texto_outro=$_POST['taro'];
	
	


	if (isset($_POST['texto']))
	{
	
	$id_linha=$_POST['texto'];
	}
	
	if (isset($_POST['taro']))
	{
	
	$id_linha=$_POST['taro'];
	}


echo "cana11111";



if (isset ($_POST['MM_insert']))
{

				
echo "DADI";
$contador_BD=contagem_TPC_para_marcar($controlo);
	$Todaaturma=0;
$contador=$contador_BD+1;




$contador_BD=contagem_TPC_para_marcar($controlo);
	$Todaaturma=0;
$contador=$contador_BD+1;




#inserir TPC por aluno da turma IMP00022
				
echo "canelas2";
$quantos_alunos_tem_a_turma=valida_quantos_alunos_estao_na_turma_professor($controlo);
echo "canelas3";

if ($quantos_alunos_tem_a_turma == 0)
{
	echo "Mensagem informtiva: o professor ainda não tem qualquer aluno inscrito na sua turma, pode marcar um ditado para trabalho de casa";
	echo "Quando os alunos se registarem imediatamente será atribuido o ditado que marcou";
	echo "nao se esqueça de guardar o número do TPC";
}



echo "remedios";

###inserir o TPC marcado a cada aluno individualmente98712398
##o id do TPC aquel que se indica ao aluno deve ser igal para otodos os alunos,eees id não deve mudar nunca e deve ser unico
##é dado por $contador
#$id_do_TPC_para_miudos= gera_id_para_os_miudos($controlo,$id_linha);

if (($id_linha !=0) && ($id_linha != null))
{
#este é o processo para gerar este numeor no insert  do TPC.

echo "cadela2";
$id_do_TPC_para_miudos=gerir_dic2me_controlo_id_do_tpc_mostrar_miudos($controlo, $id_linha);
#$total_alunos=obtem_total_alunos_por_turma($controlo);
#substituido por        $id_do_tpc_dos_alunos

}
echo "FODER";


#   limpar inutil MM_insert

#funcoes para marcar TPC na tabel dic2me_TPC


if ( $_POST['marcaTPC'] == "MARCAR TPC" )
{

	
	
#$cookie_name="dadosdit2metesteztfinallixozzfinal";
 #$cookie_value=$_COOKIE[$cookie_name];
 
 ###
 $cookie_name="cookie_login_professor";



    

	
	
		$cookie_value=$_COOKIE[$cookie_name];
 
 ####
 
$controlo=$cookie_value;

	$cookie_name="cookie_login_professor";
	echo "cadela7";
	$id_do_TPC_para_miudos=gerir_dic2me_controlo_id_do_tpc_mostrar_miudos($controlo, $id_linha);
	
	
	# max(distinct id) from dic2me_TPC
	#gelo$id_do_TPC_para_miudos=obterfile_id_de_TPC_para_marcarditados ($controlo);
	
	
	#da tabela dic2me_controlo_id_do_tpc_mostrar_miudos
	echo "MARE";
	$id_a_mostrar_alunos_do_tpcBD=obter_id_da_tabela_dic2me_controlo_id_do_tpc_mostrar_miudos ($controlo);
	echo "POIZXCD";
	echo $id_a_mostrar_alunos_do_tpcBD;
     echo "mijar";
	##inserir valores para controlo do id do TPC a mostrar aos alunos no caso de tpc para toda a turma
	echo "parvomerdas";
	$id_do_TPC_para_miudos=gerir_dic2me_controlo_id_do_tpc_mostrar_miudos($controlo, $id_linha);
	echo $id_do_TPC_para_miudos;
	echo "LUAD";
	
	# max(distinct id) from dic2me_TPC
#gelo	$id_do_TPC_para_miudos=obterfile_id_de_TPC_para_marcarditados ($controlo);
	
	
	

	##inserir valores para controlo do id do TPC a mostrar aos alunos no caso de tpc para toda a turma
	
	

	#Código do TPC	
#ERRO $id_do_TPC_para_miudos
	
	
#aqui que faz a geracao do id geral do tpc para todos o alunos 	 
#098098098098
	#da tabela dic2me_controlo_id_do_tpc_mostrar_miudos burro5
#devemos proteger em primeiro a garantia de que não estamos a remarcar o mesmo TCP, e logo de seguida se esse id já foi ou não marcado PARA o MESMO PROFESSOR
	echo "MERDAFG FIMZ ";
	$protege_mesmo_dia=proteger_marcacao_do_mesmo_ditado($controlo, $id_linha, $id_do_TPC_para_miudos);
	echo "CADA1";
	echo $protege_mesmo_dia;
	echo "foi----------------------------------------- pois18999";
	if (( $protege_mesmo_dia > 0))
	{
		echo "cabra";
	$mesmodia_igual="sim";
	}
	if (( $protege_mesmo_dia == 0))
	{
	do {
		echo "porcos";
	 $mais="sim";
	 echo "cadela1";
	 		$id_do_TPC_para_miudos=gerir_dic2me_controlo_id_do_tpc_mostrar_miudos($controlo, $id_linha);
			echo "cola1";
				$id_a_mostrar_alunos_do_tpcBD=obter_id_da_tabela_dic2me_controlo_id_do_tpc_mostrar_miudos ($controlo);
				echo "COLA2";
				
			 $quantos=garante_obter_unico_obter_id_da_tabela_dic2me_controlo_id_do_tpc_mostrar_miudos($id_a_mostrar_alunos_do_tpc);
			 echo "COLA3";
			 
			 
			 
			if (($quantos > 0) || ($protege == 0) && ($protege_mesmo_dia == 0))
			  {
    $quantos=garante_obter_unico_obter_id_da_tabela_dic2me_controlo_id_do_tpc_mostrar_miudos($id_a_mostrar_alunos_do_tpc);
$id_a_mostrar_alunos_do_tpc++;
$protege++;
			  }
			  
			  				  echo "protege fora do if";
				  echo $protege;
				  ?><br><?php

}while (($quantos > 0) || ($protege == 10) );
	}
	

	
	
	
	

	
	
	
	
		
	 $cookie_ID=$_COOKIE[$cookie_name];

###ler dados do cookie que estao na tabels dic2me__controlo

    $datacookie=dados_do_cookie($cookie_ID);
	$nif_pro=$datacookie[2];
	$pass_pro=$datacookie[0];
	$cod_escola=$datacookie[1];
		$lastlogin=$datacookie[3];
		





$controlo=$cookie_ID;
	
###obter id geral do TPC e proteger contra repeticoes

if ( $_POST['marcaTPC'] == "MARCAR TPC" )
{
	


 #valida_com_data_em_dic2me_controlo_id_do_tpc_mostrar_miudos_id_do_TPC($controlo,$id_linha,$id_do_TPC_para_miudos);


#qui vamos gerar o id_generico do TPC que será igual para todos os alunos

	$id_do_TPC_para_miudos=gerar_dic2me_controlo_id_do_tpc_mostrar_miudos($controlo, $id_linha);
	

#vamos vlidar se o  $id_do_TPC_para_miudos , garantir em 1 que esse id não foi ainda gerado  $controlo=

			 $quantos=garante_obter_unico_obter_id_da_tabela_dic2me_controlo_id_do_tpc_mostrar_miudos($controlo,$id_do_TPC_para_miudos);
			 echo "FODER";
			 $proteger_marcacao_do_mesmo_ditado=proteger_marcacao_do_mesmo_ditado($controlo, $id_texto, $id_do_tpc_dados_alunos);
			echo "PUTASconas ";
			 $valida_que_o_id_gerado_não_existe_na_tabela=valida_que_o_id_gerado_não_existe_na_tabela_dic2me_controlo_id_do_tpc_mostrar_miudos_id_do_TPC($controlo,$id_do_TPC_para_miudos);	
echo "CONAS";
#Este ciclo vai garantir-me um id  de TPC geral, quenão existe para esse professor (embora posssa existir para outros professores)
#SE tivermos:

#($quantos > 0)
#significa que para um determinado professor o id gerado já existe...ntão temos que prourar um id mais alto

#($proteger_marcacao_do_mesmo_ditado == 0))
#se for zero então não estou a repetir a marcação
#Se estiver a repetir  marcação então não deve faze nada
 

if (($quantos > 0) && ($proteger_marcacao_do_mesmo_ditado == 0))
{
 do {			 
 
# 	$id_do_TPC_para_miudos=gerar_dic2me_controlo_id_do_tpc_mostrar_miudos($controlo, $id_linha); VITALboi
	$id_do_TPC_para_miudos++;
    $protege++;
			 $quantos=garante_obter_unico_obter_id_da_tabela_dic2me_controlo_id_do_tpc_mostrar_miudos($controlo,$id_do_TPC_para_miudos);
			 
	$valida_que_o_id_gerado_não_existe_na_tabela=valida_que_o_id_gerado_não_existe_na_tabela_dic2me_controlo_id_do_tpc_mostrar_miudos_id_do_TPC($controlo,$id_do_TPC_para_miudos);	


}while (($quantos > 0) || ($protege == 5) );
}

if (($quantos == 0) && ($proteger_marcacao_do_mesmo_ditado == 0))
{
#estead já tudo bem vamos marcar o TPC
echo "galao1222";
inserir_em_dic2me_controlo_id_do_tpc_mostrar_miudos_id_do_TPC($controlo,$id_texto,$id_do_TPC);
echo "galao1222444";
	$id_do_tpc_dos_alunos=inserir_TPC_ALUNO_por_alunos($controlo, $id_linha,$identificador,$descricao,$contador,$id_a_mostrar_alunos_do_tpc );
	echo "galao12226666";
	$codigo_interno_do_professor=dados_do_professor_codigo_interno_do_professor_obter_codigointernoprofessor($controlo);
	echo "galao1222777";
	$quantos_TPCmarcados=TPCforamcriados($id_a_mostrar_alunos_do_tpc,$codigo_interno_do_professor);

echo "galao122299999";

##Valida TPC marcados
$quantos_TPCmarcados=TPCforamcriados($id_a_mostrar_alunos_do_tpc,$codigo_interno_do_professor);
	echo "galao12220000000000000000000000";
	echo "VACAZ";
	echo $quantos_TPCmarcados;
	echo "vacao";
	$total_alunos=obtem_total_alunos_por_turma($controlo);

echo "BOILAO";
?><br><?php
echo $quantos_TPCmarcados;
?><br><?php
echo "GALAOZZZZZZZ";
?><br><?php
echo $total_alunos;
}

 echo "pois18899kkkkkkkkkkkkkkkkkkkkkkkkkkk";
# 	if (($quantos == 0) && ($protege == 0))
#	{
 
 #do {
	# $mais="sim";
	 #		$id_do_TPC_para_miudos=gerir_dic2me_controlo_id_do_tpc_mostrar_miudos($controlo, $id_linha);
		#	 $quantos=garante_obter_unico_obter_id_da_tabela_dic2me_controlo_id_do_tpc_mostrar_miudos($id_a_mostrar_alunos_do_tpc);
			 
			 
			 
		#	if (($quantos > 0) || ($protege == 0) && ($protege_mesmo_dia == 0))
		#	  {
    #$quantos=garante_obter_unico_obter_id_da_tabela_dic2me_controlo_id_do_tpc_mostrar_miudos($id_a_mostrar_alunos_do_tpc);
#$id_a_mostrar_alunos_do_tpc++;
#$protege++;
#			  }
			  
#			  				  echo "protege fora do if";
#				  echo $protege;
#				  ?><br><?php

#}while (($quantos > 0) || ($protege == 10) );

#}


echo "bombas";
if (($quantos == 0)  && ($protege_mesmo_dia == 0))

{
	$id_do_tpc_dos_alunos=inserir_TPC_ALUNO_por_alunos($controlo, $id_linha,$identificador,$descricao,$contador,$id_a_mostrar_alunos_do_tpc );
	
	$codigo_interno_do_professor=dados_do_professor_codigo_interno_do_professor_obter_codigointernoprofessor($controlo);
	
	$quantos_TPCmarcados=TPCforamcriados($id_a_mostrar_alunos_do_tpc,$codigo_interno_do_professor);
	
	echo "VACAZ";
	echo $quantos_TPCmarcados;
	echo "vacao";
	$total_alunos=obtem_total_alunos_por_turma($controlo);


	

}

 
 echo "DADOS";
 	  ?><br><?php
 echo $quantos ;
 	  ?><br><?php
 echo "D1:";
 echo $id_linha;
 	  ?><br><?php
	  echo "B2;";
 echo $id_do_TPC_para_miudos;
 
 	if (($quantos == 0) && ($id_linha != "") && ($id_do_TPC_para_miudos != ""))
	{
		echo "entrouuuuu";
#		$id_do_TPC_para_miudos=gerir_dic2me_controlo_id_do_tpc_mostrar_miudos($controlo, $id_linha);

#é aqui que é inserido o numero da bd de controlo: dic2me_controlo_id_do_tpc_mostrar_miudos
echo "galao1";
		inserir_em_dic2me_controlo_id_do_tpc_mostrar_miudos_id_do_TPC($controlo,$id_texto,$id_do_TPC_para_miudos);
	}

 

$total_tpc_criados_com_este_tpc_id=obtem_total_de_tcp_criados_para_um_determinado_id_de_tpc($id_do_TPC_para_miudos);

$total_alunos=obtem_total_alunos_por_turma($controlo);



$id_linha=$_POST['texto'];	
#é aqui que é inserido o numero da bd de controlo: dic2me_controlo_id_do_tpc_mostrar_miudos
#    inserir_em_dic2me_controlo_id_do_tpc_mostrar_miudos_id_do_TPC($controlo, $id_linha,$id_do_TPC_para_miudos);


	$id_do_tpc_dos_alunos=inserir_TPC_ALUNO_por_alunos($controlo, $id_linha,$identificador,$descricao,$contador,$id_a_mostrar_alunos_do_tpc );
	
	$codigo_interno_do_professor=dados_do_professor_codigo_interno_do_professor_obter_codigointernoprofessor($controlo);
	
	$quantos_TPCmarcados=TPCforamcriados($id_a_mostrar_alunos_do_tpc,$codigo_interno_do_professor);
	
	echo "VACAZ";
	echo $quantos_TPCmarcados;
	echo "vacao";
	$total_alunos=obtem_total_alunos_por_turma($controlo);



}

	
	
	
	
	
?><br><?php	
echo "SABERRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRR";
?><br><?php
echo $quantos_TPCmarcados;
?><br><?php
echo "POIZ";
?><br><?php
echo $total_alunos;

	
	if (( $quantos_TPCmarcados >= $total_alunos) && ($protege_mesmo_dia == 0) && ($mesmodia_igual != "sim"))
	{
		echo "*******************PUTAS*********************************************************************************************";
		foreach ($_POST as $param_name => $param_val) {
    echo "Param: $param_name; Value: $param_val<br />\n";
}
		$criou_bem="SIM";

	}
	
	
}








#$contadorID=inserir_TPC_para_referencia_novos_alunos($controlo, $id_linha,$identificador,$descricao,$contador );



#no caso de novos alunos na turma ou esquecidos, assim ter a referencia certa para criar esse ditados no novo aluno
#processo para inserir referenciador para futuros alunos dessa turma importante 0999888  choraboi fodasse biluscao
echo "DOM";
criar_insert_do_tpc_para_fnovos_alunos_para_referenciador($id_do_TPC_para_miudos,$controlo,$id_linha);

echo "MARIO";
$total=obterdados_turma_do_professor($controlo);
echo "BARCO";
$codprofessor=$total[2];


$codtuma=$total[3];


$Todaaturma="1";





}
echo "PUTAS";
	?>
    
		<?php	  
  
  ?>
   <input name="acabou" type="hidden" value="sim">
   




   <?php




		
		if ( $_POST['segundoano'] == "segundoano" )
		    {
				$ano="2";
			}
			
					if ( $_POST['terceiroano'] == "terceiroano" )
		    {
				$ano="3";
			}



    session_start();

echo $_POST['texto'];
echo "FICAZ";
$var_id_linha_Recordset5 = $_POST['texto'];
if (isset($_POST['texto'])) {
  $var_id_linha_Recordset5 = $_POST['texto'];
}
foreach ($_POST as $param_name => $param_val) {
    echo "Paramultimap: $param_name; Value: $param_val<br />\n";
}
echo "cao";
obterfile_que_vai_ler($idioma, $ano,$numlinha);


       if ($_POST['segundoano'] == "segundoano")
{
	$idioma=PT;
$query_Recordset5=obterlista_textos_e_ditados_para_quero_fazer__ditado_SEGano($idioma, $ano);
}


        if ($_POST['terceiroano'] == "terceiroano")
{
		$idioma=PT;
$query_Recordset5=obterlista_textos_e_ditados_para_quero_fazer__ditado_tano($idioma, $ano);
}


$query_RecordsetDADOS_TEXTOS=obterlista_textos_e_ditados_para_quero_fazer__ditado_so_dados_texto($idioma, $ano, $_POST['texto']);

$RecordsetRecordsetDADOS_TEXTOS = mysql_query($query_RecordsetDADOS_TEXTOS, $dic2me);
log_BD ('./LOGS/dados_log.txt', mysql_error(), $query_Recordset5, "P5");

$row_RecordsetDADOS_TEXTOS= mysql_fetch_assoc($RecordsetRecordsetDADOS_TEXTOS);
$totalRows_Recordset5 = mysql_num_rows($Recordset5);



$Recordset5 = mysql_query($query_Recordset5, $dic2me);

  
 $controlo=$cookie_ID;
obter_dados_professor($controlo);



#log_BD ('./LOGS/dados_log.txt', mysql_error(), $query_Recordset5, "P5");  $cookie_ID=


$row_Recordset5= mysql_fetch_assoc($Recordset5);

$totalRows_Recordset5 = mysql_num_rows($Recordset5);



?>



<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
 <header>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 

<?php 
#VALIDATPCimporta100000
#o valor aqui obtido select max(distinct id) from dic2me_TPC

#gelo	$contador=obterfile_id_de_TPC_para_marcarditados($controlo);
	
	

	
	

	
if ( $_POST['marcaTPC'] == "MARCAR TPC" )
{
#esta funcao vai buscar o codigo de controlo de martcação de TPC na tabela dic2me_controlo_id_do_tpc_mostrar_miudos
#SELECT codigo_controlo FROM dic2me_controlo_id_do_tpc_mostrar_miudos WHERE codigo_professor



#$id_do_TPC_para_miudos=gerir_dic2me_controlo_id_do_tpc_mostrar_miudos($controlo, $id_linha);

?><br><?php
#$contador=obterfile_id_de_TPC_para_marcarditados($controlo);
	
	
	
	
	
	


#$total_tpc_criados_com_este_tpc_id=obtem_total_de_tcp_criados_para_um_determinado_id_de_tpc($id_do_TPC_para_miudos);

#$total_alunos=obtem_total_alunos_por_turma($controlo);

	
	


}



?>
  


  <br>
  <p> 
<?php

echo "VITALboi";
?><br><?php
echo $criou_bem;
echo "GALOS";
echo $protege;

 	if (($mesmodia_igual =="sim"))
	{

echo "Hoje já marcou esse ditado, não pode marcar no mesmo dia para a mesma turma o mesmo ditado";

?>
	<img src="imagens/if_error_512541.png" width="128" height="128" />
    
   
    <?php
	}


echo "importante";
echo $protege_mesmo_dia;


 if (($criou_bem == "SIM" ) && ($protege_mesmo_dia == 0))
  { 

  ?>
  <b>Código do  TPC (*)</b>
  <img src="imagens/dreamstime_l_7300546.jpg" width="90" height="55" />

  <h1> <?php echo $id_a_mostrar_alunos_do_tpc;
   echo $id_do_TPC_para_miudos; ?></h1>
  <br>
  <p>
  <br>
  <p>
<b>Status de como correu a marcação deste TPC</b>
<br>
<p>
	<img src="imagens/Depositphotos_67958629_s-2015.jpg" width="80" height="80" />
<?php } ?>

    
    
    
    

<br>
(*)Este deverá ser o número que deve dar aos alunos par ele saberem qual é o ditado a fazer


	

  
<?php   # $controlo=$_GET['CONTROLO'];?>
    <?php $MM_redirectLoginSuccess = "consulta_texto_marcacao_TPC.php?CONTROLO=$controlo";?>
<form action=<?php echo $MM_redirectLoginSuccess ?> method="post" enctype="multipart/form-data" name="form1" target="_self" id="form1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >

        
        <?php 
			$uri =  $_SERVER["REQUEST_URI"]; //it will print full url
			$palha = explode('php?', $uri); //convert string into array with explode
			$id1 = $palha[1];
			
			
//Se acabou bem o registo mostra esta imagem
if ($id1 === "olaPP")
{
	?>
        <img src="imagens/Depositphotos_67958629_s-2015.jpg" width="50" height="50" alt="bem"> 
        O registo foi feito com sucesso.
        Só terá de informar o numero do TPC aos alunos.
        <?php }
  else
{ ?>
   

<?php



#lista_ditados_para_marcarTPC($idioma, $ano);


$alunosnif=$_POST['alunos'];
if( isset ($_POST['alunos']))
{
$_SESSION['aluniniftpcindividual']=$_POST['alunos'];
}
?>
	<b><label>Aluno a quem quer marcar o ditado pois</label></b>
    <?php





?>
<input name="nif_alunomemoria" type="hidden" value=<?php echo $_POST['alunos'];?>>
<?php $_SESSION['nomes']=$row_Recordset7['nome_aluno'];
	
			if ($_POST['acabou'] === "sim")
			{?>
				<img src="imagens/Depositphotos_67958629_s-2015.jpg" width="500" height="500">
				
				<?php } ?>
				<input name="tex_fazer" type="hidden" value=<?php echo $_SESSION['oTEXTO'];?>>
			  
			<?php $_SESSION['nomes']=$row_Recordset7['nome_aluno'];?>
			<b><label>Idioma</label></b>
			<?php 
			#idioma_escolhahtml();
			?>
  
    
<br>
<?php

 
  
?>  





<?php        if ($_POST['segundoano'] == "segundoano")
{ ?>
     <input type="checkbox" name="segundoano" value="segundoano" onChange="form.submit();" checked="CHECKED">ve so textos 2º ano <br>
 <?php } 
 else
 {?>
	  <input type="checkbox" name="segundoano" value="segundoano" onChange="form.submit();" >ve so textos 2º ano <br>
 <?php }?> 
 
        
<?php        if ($_POST['terceiroano'] == "terceiroano")
{ ?>
  <input name="terceiroano" type="checkbox"   onChange="form.submit();" value="terceiroano" checked="CHECKED"> ver so textos 3º ano<br>  
 <?php } 
  else
 { ?>
  <input name="terceiroano" type="checkbox"   onChange="form.submit();" value="terceiroano" > ver so textos 3º ano<br>  
 <?php }?> 

 
 
          <select name="texto" onChange="form.submit();">
 <?php            
         
  

do {  

	
if (  $contaz == 0)
{
	$nometexto="escvolha um texto";

?>
	<option value="<?php echo $row_Recordset5['id_linha']?>" selected><?php echo $nometexto;?></option>
<?php	
}

if (isset($_POST['texto']))
{
	$nometexto=$row_Recordset5['nome'];
	
}

if (empty($_POST['texto']))
{
	$nometexto=$row_Recordset5['nome'];
	
}

if (  $contaz > 0)
{
		$nometexto=$row_Recordset5['nome'];
		
}



if ( $row_Recordset5['id_linha'] == $_POST['texto'] )
 {?>
  <option value="<?php echo $row_Recordset5['id_linha']?>" selected><?php echo $nometexto;?></option>
<?php }
else
 { ?>
  <option value="<?php echo $row_Recordset5['id_linha']?>"><?php echo $nometexto;?></option>
<?php } ?>
  <?php
  
   $contaz++;
} while ($row_Recordset5 = mysql_fetch_assoc($Recordset5));
  $rows = mysql_num_rows($Recordset5);
  if($rows > 0) {
      mysql_data_seek($Recordset5, 0);
	  $row_Recordset5 = mysql_fetch_assoc($Recordset5);
  }
  
  
?>
</select>
</select>
	<form action="<?php echo $editFormAction; ?>" method="POST" enctype="multipart/form-data" target="_self" name="form2">
	
			<?php if(($_SESSION['oTEXTO'] !== "") and ( $_POST['tex_fazer'] !== 0 ))
			{ ?>
					</br>
					</p>
					
					
					<label>Notas do professor ao aluno, sobre este ditado</label>
                    <br>
					<textarea name="descreve" cols="10" rows="10"></textarea>
					<br>
					  <input type="hidden" name="MM_insert" value="form92">
						
					  
					  <input name="marcaTPC" type="submit" value="MARCAR TPC">

					   <input name="taro" type="hidden" value=<?php echo $_POST['texto'];?>>
					   <input name="idioma____" type="hidden" value=<?php echo $idioma ;?>>
					 </form>
					  
					  
					  
                     

<h2> em baixo pode escutar oo ditado tal como os alunos escutam</h2>
<?php  
  $id_do_ditado=$_POST['texto'];

  ler_som_files($_POST['texto']);
  ?>
  <br>
  <p>
					  <label>Titulo<label>
                      <?php 
					   header('Content-Type: text/html; charset=utf-8');
					
				?>	<h2>	<?php echo $row_RecordsetDADOS_TEXTOS['descricao']; ?></h2>  

                      
					 
					  
					  
					 <h1> Texto Original <h1>
					  <div class="flex">
						<div>
					   <?php  
					   header('Content-Type: text/html; charset=utf-8');
					   

		 $ditadolimpo=explode("\r\n",$row_RecordsetDADOS_TEXTOS['linha_texto']);
 
	   		$nulotamanho=count($ditadolimpo);
			
			
 for ($lat = 0; $lat <= $nulotamanho; $lat++)
   {
       echo $ditadolimpo[$lat];
	   ?><br><?php
	  
   }

					 ?>
						</div>
					  
					  </div>
					  
					  
						</article>
						
					 </div>

					</body>
					</html>
			<?php } 
  }?>        
<?php
mysql_free_result($Recordset7);

mysql_free_result($Recordset1);
?>
</html>

		</div><!--/.nav-collapse fim-->

      </div><!-- /.container -->

      <div class="row panel_03" style="padding-bottom: 5em;position: relative;">
        <!--<img src="images/quadriculado.png" style="position: absolute;width: 100%;bottom: 0;">-->
        <div class="col-md-10 col-md-offset-1 col-sm-12">
            <div class="col-md-4 col-sm-4 newsletter">
              <div class="trapezoid trapezoid-newsletter">
                <img src="images/trapezoid-orange-small.svg">
                <span>newsletter</span>
              </div>
              <div class="informations col-xs-12">
                <h3>Subscreve a nossa <span class="uppercase">newsletter</span></h3>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                <div class="form-group">
                  <input type="text" class="form-control" id="usr" placeholder="Nome">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="trapezoid trapezoid-subscrever">
                  <img id="subscribe-trapezoid" src="images/trapezoid-orange-small.svg">
                  <span onmouseover="subscribeTrapezoid.src='images/trapezoid-orange-small-over.svg';" onmouseout="subscribeTrapezoid.src='images/trapezoid-orange-small.svg';">subscrever</span>
                </div>
              </div>
            </div>

            <script type="text/javascript">
              var subscribeTrapezoid = document.getElementById("subscribe-trapezoid");
              var seeAllTrapezoid = document.getElementById("see-all-trapezoid");
            </script>




            <div class="col-md-4 col-sm-4 loja">
              <div class="trapezoid trapezoid-loja">
                <img src="images/trapezoid-green-small.svg">
                <span>loja</span>
              </div>
              <div class="informations col-xs-12">
                <h3>Visite a nossa loja online dit2meloja.com </h3>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                <img src="images/loja-online.png">
              </div>
            </div>

            <div class="col-md-4 col-sm-4 dit2me">
              <div class="trapezoid trapezoid-dit2me">
                <img src="images/trapezoid-blue-small.svg">
                <span>Dit2me</span>
              </div>
              <div class="informations col-xs-12">
                <h3 class="uppercase" style="margin-bottom: 0;">Dit2me</h3>
                <h3 style="margin-top: 0;">International</h3>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                <img src="images/balao.png">

              </div>
            </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container">
          <div class="col-md-3 col-sm-3 col-xs-6 contacts">
            <h4 class="uppercase bold">Contactos</h4>
            <p>info@dit2me.com</p>

            <p><span class="glyphicon glyphicon-earphone" aria-hidden="true" style="margin-right: 0.5em;"></span>934978077</p>

            <div class="address">
            <p><span class="glyphicon glyphicon-map-marker" aria-hidden="true" style="margin-right: 0.5em;"></span>Avenida do Atlântico, Edificio Panoramic</p>
            <p>nº16, 14º Piso, Escritório 8</p>
            <p>Parque das Nações 1990-019 Lisboa</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-6 site-map">
            <h4 class="uppercase bold">Mapa do Site</h4>
            <p><a href="#">Início</a></p>
            <p><a href="#">Sobre</a></p>
            <p><a href="#">Ditados</a></p>
            <p><a href="#">Ajuda</a></p>
            <p><a href="#">Contactos</a></p>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-6 links">
            <h4 class="uppercase bold">Outros Links</h4>
            <p><a href="#">Loja DIT2ME</a></p>
            <p><a href="#">DIT2ME International</a></p>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-6 follow">
            <h4 class="uppercase bold">Siga-nos</h4>
            <ul class="social-network">
              <li><a href="#"><img src="images/facebook.png"></a></li>
              <li><a href="#"><img src="images/instagram.png"></a></li>

            </ul>
            <ul class="social-network">
              <li><a href="#"><img src="images/twitter.png"></a></li>
              <li><a href="#"><img src="images/linkedin.png"></a></li>
            </ul>
          </div>
      </footer>

    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

<div id='rookieslab_floatingsharebar'>
  <div class='sbutton' id='gb'>
    <script src="http://connect.facebook.net/pt_PT/all.js#xfbml=1"></script>
    <fb:like layout="box_count" show_faces="false" font="" data-href="/old/dit2me">
    <fb:like>
  </div>
  <div class="sbutton" id="gplusone"/>
    <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
    <g:plusone size="tall"></g:plusone>
  </div>
</div>
  </body>
   <script type="text/javascript">
    $(document).ready(function() {
      var jumbotron = $(".jumbotron").height();
      var headerMobile = $(".navbar-header-mobile").height();
      console.log(jumbotron);




      /*$('#navbar').on('shown.bs.collapse', function () {
        $('body').css('overflow-y','hidden');
      });

      $('#navbar').on('hidden.bs.collapse', function () {
        $('body').css('overflow-y','auto');
      });*/


      $('.mobile-nav').css('top',jumbotron);


      $(".btn_inicio, .btn_about, .btn_ditado, .btn_help, .btn_register, .btn_contact_us").mouseenter(function() {
        $(this).find("path").attr("fill", "#e04b4a");

     });
    $(".btn_inicio, .btn_about, .btn_ditado, .btn_help, .btn_register, .btn_contact_us").mouseleave(function() {
        $(this).find("path").attr("fill", "#1890cf");

     });









    $(function(){
      $('.dropdown').hover(function() {
          $(this).addClass('open');
      },
      function() {
          $(this).removeClass('open');
      });
    });

    /*Possibilidade de fazer pausa e novamente play no vídeo*/
    $('.clip video').click(function() {
        this.paused ? this.play() : this.pause();
    });





});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55662004-3', 'auto');
  ga('send', 'pageview');

</script>
</html>
