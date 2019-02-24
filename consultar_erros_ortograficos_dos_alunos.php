<?php
#$iddotpc_base
#VIOOOOOOOOOOOOOOOOOOOO
#function mostrar_erros_do_ditado_a_professorapelo_aluno_mostra_tabela($idTPC,$tipo_erro_a_mostrar)

#mostrar_erros_do_ditado_a_professorapelo_aluno_mostra_tabela($ID_DITADO,$erro);

?>

Clique nos menus em baixo
<?php
#$iddotpc_base
  $cookie_name="cookie_login_professsor";





?>

#Este é o mesmo id que com que deu aos alunos
<?php require_once('./Connections/dic2me.php');

require_once('./funcoes/funcoes.php'); 

  $cookie_name="cookie_login_professsor";





?>
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
            <li class="dropdown">
             <ul>
           <a href="logout.php" target="logout"><img src="imagens/logout_btn.png" width="92" height="27" alt="logout" /></a>
          </ul>
                <ul class="dropdown-menu">
                   <li><a href="#">Professores</a></li>
                   <li><a href="#">Escolas</a></li>
                   <li><a href="#">Alunos</a></li>
                </ul>
            </li>
             
          </ul>
        </div>
          <img class="logo col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3" src="images/logo.png">
          <ul class="nav main_nav navbar-nav hidden-xs">
            <li>
              <a href="#" class="btn_inicio">
                <svg version="1.1" id="btn_inicio" x="0px" y="0px" width="89.333px" height="40.667px" viewBox="0 0 109.333 40.667" enable-background="new 0 0 109.333 40.667" xml:space="preserve">
                <path fill="#1890CF" d="M6.667,45.334L1.333,11c0,0-0.417-5.083,2.708-5.708C6.292,4.917,102.333,2,102.333,2S109,1.333,108,8.667 s-4,31.832-4.667,33s-0.834,5.501-7.333,6C87,47.667,11.667,49,9.333,48S6.667,45.334,6.667,45.334z"/>
                </svg>
                <span class="menu-title">Início</span>
              </a>
            </li>
            <li class="dropdown">
              <a data-toggle="dropdown" href="#" class="btn_about" style="z-index: 9999">
                <svg version="1.1" id="btn_about" x="0px" y="0px" width="176.667px" height="40.667px" viewBox="0 0 196.667 40.667" enable-background="new 0 0 196.667 40.667" xml:space="preserve">
                <path fill="#1890CF" d="M10.755,44.35L1.034,10.016c0,0-0.759-5.083,4.936-5.708c4.102-0.375,179.136-3.292,179.136-3.292 s12.152-0.667,10.33,6.667s-7.289,31.832-8.506,33c-1.215,1.168-1.521,5.502-13.363,6c-16.402,0-153.699,1.334-157.953,0.334 C11.36,46.016,10.755,44.35,10.755,44.35z"/>
                </svg>
                <span class="menu-title">O que é o Dit2me?</span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#">Apresentação</a></li>
                <li><a href="#">Objectivos</a></li>
                <li><a href="#">A startup</a></li>
              </ul>
            </li>

            <li>
              <a href="#" class="btn_ditado">
                <svg version="1.1" id="btn_ditado" x="0px" y="0px" width="151.5px" height="40.667px" viewBox="0 0 171.5 40.667" enable-background="new 0 0 171.5 40.667" xml:space="preserve">
                <path fill="#1890CF" d="M9.452,44.349L1.029,10.016c0,0-0.658-5.083,4.276-5.708C8.859,3.933,160.51,1.016,160.51,1.016 s10.529-0.667,8.949,6.667c-1.579,7.334-6.316,31.831-7.369,32.999s-1.317,5.502-11.578,6c-14.211,0-133.165,1.334-136.851,0.334 S9.452,44.349,9.452,44.349z"/>
                </svg>
                <span class="menu-title">Faz um ditado</span>
              </a>
            </li>
            <li>
              <a href="#" class="btn_help">
                <svg version="1.1" id="btn_help" x="0px" y="0px" width="191.5px" height="40.667px" viewBox="0 0 211.5 40.667" enable-background="new 0 0 211.5 40.667" xml:space="preserve">
                <path fill="#1890CF" d="M11.439,44.349L1.036,10.015c0,0-0.813-5.082,5.282-5.707c4.391-0.375,191.715-3.292,191.715-3.292 s13.004-0.667,11.055,6.667c-1.951,7.334-7.803,31.832-9.105,33c-1.299,1.168-1.627,5.5-14.301,6 c-17.555,0-164.49,1.332-169.042,0.332C12.088,46.015,11.439,44.349,11.439,44.349z"/>
                </svg>
                <span class="menu-title">Precisas de Ajuda?</span>
              </a>
            </li>
<?php
 $Controlid=$_GET['CONTROLO'];
		   $main="./main_professores.php?CONTROLO=$Controlid"; ?>
            <li class="dropdown">
              <a data-toggle="dropdown" href="<?php echo $main ?>" class="btn_register">
                <svg version="1.1" id="btn_register" x="0px" y="0px" width="99.667px" height="40.667px" viewBox="0 0 119.667 40.667" enable-background="new 0 0 119.667 40.667" xml:space="preserve">
                <path fill="#1890CF" d="M7.193,45.833L1.335,11.5c0,0-0.458-5.083,2.974-5.708C6.781,5.417,112.264,2.5,112.264,2.5 s7.324-0.667,6.227,6.667c-1.1,7.334-4.395,31.833-5.127,33s-0.916,5.5-8.053,6c-9.887,0-92.626,1.332-95.19,0.332 S7.193,45.833,7.193,45.833z"/>
                <span class="menu-title">HOME</span>
                </svg>
                </a>
              <ul class="dropdown-menu">
                 <li><a href="<?php echo $main; ?>">HOME</a></li>


                
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

                      <li class="active"><a href="#">Início</a></li>
                      <li class="dit2me_entrada"><a href="#dit2me_entrada">O que é o Dit2me?</a></li>
                      <li class="ditado_entrada"><a href="#ditado_entrada">Faz um ditado</a></li>
                      <li class="help_entrada"><a href="#help_entrada">Precisas de Ajuda?</a></li>

                      <div class="dropdown">
                        <li class="register_entrada dropdown-toggle" data-toggle="dropdown"><a href="#register_entrada">Registar</a></li>
                        <ul class="dropdown-menu">
                          <li><a href="#">Professores</a></li>
                          <li><a href="#">Escolas</a></li>
                          <li><a href="#">Alunos</a></li>
                        </ul>
                      </div>

                    </ul>
                    <ul class="nav nav2 navbar-nav" style="max-width: 100%; margin: auto;z-index: 1;margin-top: -0.5em;position: relative;">
                      <li class="contat_us_entrada"><a href="#contat_us_entrada">Fala Connosco</a></li>
                      <li class="login_entrada"><a href="#login_entrada">Login</a></li>
                      <li class="loja_online_entrada"><a href="#loja_online_entrada">Loja Online</a></li>
                      <li class="tpc_entrada"><a href="#tpc_entrada">TPC</a></li>

                    </ul>

                  </div><!--/.nav-collapse -->
                </div>
        </nav>
		
		<div> <!--/.aqui inicio-->
tempo
<?php 
require_once('./funcoes/funcoes.php');
require_once('./Connections/dic2me.php'); ?>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<?php
header('Content-Type: text/html; charset=utf-8');



//initialize the session
$controlo=$_SESSION['CONTROLO'];


#obterdados_turma_do_professor($controlo);
// ** Logout the current user. **
?>
<?php

#$Recordset7=obtem_lista_alunos();
#IIOMA

#$resultado=obterdados_ano_e_diomado_aluno_quero_fazer_ditados($controlo);
#$ano=$resultado['0'];
#$idioma=$resultado['1'];
#$anolectivo=$resultado['2'];
#$codigointerno__turma=$resultado['4'];

#$row_Recordset7 = mysql_fetch_assoc($Recordset7);

#$totalRows_Recordset7 = mysql_num_rows($Recordset7);

#$editFormAction = $_SERVER['PHP_SELF'];
#$pede="1";



		
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











#$query_Recordset1=obterdados_turma_do_professor($ano,$idioma);
$DADOS=obterdados_turma_do_professor($_SESSION['CONTROLO']);



$ano=$DADOS[0];
$idioma=$DADOS[1];

$codprofessor=$DADOS[2];


$idioma=$DADOS[1];
$codtuma=$DADOS[3];
$anolectivo=$DADOS[4];
$codescola=$DADOS[5];
$Todaaturma="1";

$codescola=$total[5];
;

		
    session_start();





?>



<!DOCTYPE html>
<html lang="en">

<body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
 <header>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 



 <div id='main'>

<?php






?>

   




	

  <div class="flex3">
    <div>

    <?php 
	$entrada1=$_GET['CONTROLO'];
	$MMTCPPROF = "consultar_erros_ortograficos_dos_alunos.php?CONTROLO=$entrada1";?>
<form action= <?php echo $MMTCPPROF ?>  method="post" enctype="multipart/form-data" name="form1" target="_self" id="form1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >

        
        <?php 
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

$alunosnif=$_POST['alunos'];
if( isset ($_POST['alunos']))
{
$_SESSION['aluniniftpcindividual']=$_POST['alunos'];
}

# $controlo=
?>
	<b><label>Aluno do qual o professor que ver o ditado</label></b>
    <?php








$iddotpc=$_POST['id_do_TPC'];
$alunosnif=$_POST['alunos'];





$iddotpc_base=obtem_idtpc_da_tabela_dic2me_TPC($iddotpc, $alunosnif);

crialista_alunos_paramarcar_ditado_individual_NOVO($controlo,$alunosnif);


# original



	$cookie_name="cookie_login_professor";
	
if(isset($_COOKIE[$cookie_name])) {
$TEMCOOKIE="SIM";

 $cookie_value=$_COOKIE[$cookie_name];
 
 
 
 
 
 
 

$id_cookie=obter_cookie_id_professor();

$valorescookie=dados_do_cookie($id_cookie);

 $cookie_ID=$_COOKIE[$cookie_name];
$controlo=$cookie_ID;



$entrada1=$valorescookie;
$pass=$valorescookie[0];
$escolaid=$valorescookie[1];
$nif=$valorescookie[2];
$entrada1=$valorescookie;

}


	$cookie_name="cookie_login_professor";
	
	 $cookie_value=$_COOKIE[$cookie_name];
	 
if(isset($_COOKIE[$cookie_name])) {
$TEMCOOKIE="SIM";

 $cookie_value=$_COOKIE[$cookie_name];
 
 
 
 
 crialista_alunos_paramarcar_ditado_individual_NOVO($controlo,$alunosnif);
 
 # MERDAZuva--------------------------------------- DITADO FEITO PELO ALUNO
 

$id_cookie=obter_id_cookie_prof();
$valorescookie=dados_do_cookie($id_cookie);
 $cookie_ID=$_COOKIE[$cookie_name];
#$controlo=$cookie_ID;
$entrada1=$valorescookie;
$pass=$valorescookie[0];
$escolaid=$valorescookie[1];
$nif=$valorescookie[2];
$entrada1=$valorescookie;

}


  $contaz++;
	##lixo $controlo=$_GET['CONTROLO'];
# marca_TP_so_um_aluno
# #####uvabolos cookie_aluno
$nifalunovertpcmarcado=$_POST['nif_do_aluno_escolhido'];
$nifalunovertpcmarcado=$_POST['alunos'];

$iddotpc=$_POST['id_do_TPC'];


?>
<br>
<p>
	<b><label>Escolha o ID do TPC que que ver do aluno (*)</label></b>
    <?php

#$controlo=


 cria_combobox_com_id_dos_tpc_do_aluno($controlo, $nifalunovertpcmarcado,$iddotpc);
 ?>(*) Este é o mesmo id que com que deu aos alunos <?php

?>
 <input type="hidden" name="nifaluno" value="<?php echo $_POST['alunos'] ?> ">
  <input type="hidden" name="id_TPC" value="<?php echo $_POST['id_do_TPC'] ?> ">
<?php
$ID_DITADO=$_POST['id_do_TPC'];
$NIF_ALUNO=$_POST['nifaluno'];

#####uvabolos cookie_aluno

$ID_DITADO=$_POST['id_do_TPC'];
$NIF_ALUNO=$_POST['nifaluno'];




$nif_aluno=rtrim($NIF_ALUNO,' ');



dar(mostradados);
$row_Recordset1=mostrar_ditado_escrito_pelo_aluno($nif_aluno,$ID_DITADO); 

# ;;;;;;;;;;;;;;;;;;;;;;;;;;
$textooriginal=obterlista_textos__para_professor_compara_com_texto_escrito_aluno($ID_DITADO);
$ditadofeito=$row_Recordset1['ditadofeito'];
$tempoquedemorouafazerditado=$row_Recordset1['tempoquedemorouafazerditado'];
$dataregisto=$row_Recordset1['dataregisto'];

$DADOS_TPC=obteridddados_do_TPC($ID_DITADO);
$datageracao=$DADOS_TPC[0];
$descricao=$DADOS_TPC[1];



	
#$ditadofeito=$dados_ditado_mostra_professora[0];

$tempoquedemorouafazerditado=$dados_ditado_mostra_professora[1];

$dataregisto=$dados_ditado_mostra_professora[2];

?>	


		<br>
        
		<b>	<label>Data em que o professor marcou o ditado</label></b>
            <?php echo $datageracao; ?>


		<br>


		<br>

		<br>
        
		<b>	<label>Notas que o professor fez sobre este ditado aos alunos</label></b>
            <?php echo $descricao; ?>


		<br>


		<br>


        
		<b>	<label>Data em que o aluno fez o ditado</label></b>
            <?php echo $dataregisto; ?>


		<br>
     <b><label>tempo que demorou feito pelo aluno(em minutos)</label> </b>
            <?php
			$Tempoemsegundo=$tempoquedemorouafazerditado/1000;
			 $tempoemminutos=$Tempoemsegundo/50;
			echo $tempoemminutos; ?>
	

		<br>
			<label>data em que o aluno fez o ditado</label>
            <?php echo $dataregisto; ?>
			
			

			
			
			
		
			</form>
			
			
			</div>
			  
			  </div>
              <?php
              ##inicio das tabas####################rei ########################################################################################################## ?>
<!DOCTYPE html>
<html>
<head>
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

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
</head>
<body>

<p>Clique nos menus em baixo, para consultar, por exemplo eros dados pelo aluno, ou texto original</p>

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
					   			   $ID_DITADO=$_POST['id_do_TPC'];
			  $erro=9; 
			  $iddotpc=$_POST['id_do_TPC'];
$alunosnif=$_POST['alunos'];





$iddotpc_base=obtem_idtpc_da_tabela_dic2me_TPC($ID_DITADO, $alunosnif);
			 

			mostrar_erros_do_ditado_a_professorapelo_aluno_mostra_tabela($iddotpc_base,$erro);
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
								   
			  $erro=99; 
			  
			  
			  $iddotpc_base=obtem_idtpc_da_tabela_dic2me_TPC($iddotpc, $alunosnif);

			mostrar_erros_do_ditado_a_professorapelo_aluno_mostra_tabela($iddotpc_base,$erro);
			?>
  
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Ditado escrito pelo aluno</h3>
<?php dar(mostradados);
$ditadofeito=mostrar_ditado_escrito_pelo_aluno($nif_aluno,$ID_DITADO); 

# ;;;;;;;;;;;;;;;;;;;;;;;;;;



 ?>
  	<b><div>DITADO FEITO PELO ALUNO</div></b>
			 
		<?php
		 $ditadolimpo=explode("\r\n",$ditadofeito);
 
	   		$nulotamanho=count($ditadolimpo);
			
			
 for ($lat = 0; $lat <= $nulotamanho; $lat++)
   {
   echo $ditadolimpo[$lat];
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
foreach ($_POST as $param_name => $param_val) {
    echo "Param: $param_name; Value: $param_val<br />\n";
}
$ID_DITADO=$_POST['codigo_interno_do_tpc_escoilhido'];
$textooriginal=obterlista_textos__para_professor_compara_com_texto_escrito_aluno($ID_DITADO);
 $textoroginallido=explode("\r\n",$textooriginal);
 
	   		$nulotamanho=count($textoroginallido);
			
			
 for ($lat = 0; $lat <= $nulotamanho; $lat++)
   {
       echo $textoroginallido[$lat];
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



              <?php
              ##FIM das tabas############################################################################################################################## ?>
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
       
			
		
		               
					 </form>
					  
					  
					  
					
					</body>
					</html>
			<?php } 
      

mysql_free_result($Recordset7);

mysql_free_result($Recordset1);
?>
		</div><!--/.aqui fim-->

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
                <p></p>
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
                <p></p>
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
                <p></p>
                <img src="images/balao.png">

              </div>
            </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container">
          <div class="col-md-3 col-sm-3 col-xs-6 contacts">
            <h4 class="uppercase bold">Contactos</h4>
           <p><?php echo obtemmailsuporte(1); ?></p>

            <p><span class="glyphicon glyphicon-earphone" aria-hidden="true" style="margin-right: 0.5em;"></span><?php echo obtemmailsuporte(2); ?></p>

            <div class="address">
            <p><span class="glyphicon glyphicon-map-marker" aria-hidden="true" style="margin-right: 0.5em;"></span><?php echo obtemmailsuporte(3); ?>
            <p><?php echo obtemmailsuporte(4); ?>
            <p><?php echo obtemmailsuporte(5); ?></p>
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
