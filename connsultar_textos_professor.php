
<?php require_once('./Connections/dic2me.php'); ?><?php
header('Content-Type: text/html; charset=utf-8');

//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "main.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
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

$val_cod_prof_Recordset3 = $_SESSION['MM_Username'];
if (isset($_SESSION['MM_Username'])) {
  $val_cod_prof_Recordset3 = $_SESSION['MM_Username'];
}
$val_id_escola_Recordset3 = $_SESSION['cod_escola'];
if (isset($_SESSION['cod_escola'])) {
  $val_id_escola_Recordset3 = $_SESSION['cod_escola'];
}


mysql_select_db($database_dic2me, $dic2me);
$query_Recordset3 = sprintf("SELECT dic2me_turma_prof_escola.id_prof, dic2me_turma_prof_escola.id_turma, dic2me_turma_prof_escola.id_cod_escola, dic2me_turmas.ano, dic2me_turmas.numero_turma FROM dic2me_turma_prof_escola, dic2me_turmas WHERE dic2me_turma_prof_escola.id_prof=%s AND dic2me_turma_prof_escola.id_cod_escola=%s AND dic2me_turma_prof_escola.id_turma=dic2me_turmas.cod_interno_turma", GetSQLValueString($val_cod_prof_Recordset3, "text"),GetSQLValueString($val_id_escola_Recordset3, "text"));
$Recordset3 = mysql_query($query_Recordset3, $dic2me);

log_BD ('./LOGS/dados_log.txt', mysql_error(), $query_Recordset1);
$row_Recordset3 = mysql_fetch_assoc($Recordset3);
$totalRows_Recordset3 = mysql_num_rows($Recordset3);

function log_BD ($ficheiro, $erro, $outro)
{
   if (mysql_error())
      {
       $file = $ficheiro;
// The new person to add to the file
$person = "MESS DE ERRO: ".$erro."QUERY que deu prob: ".$outro;

file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
echo "Lamentamos, ocorreu um erro, a sessão vai ser encerrada\n";
 die();
  session_destroy();
  exit;
  
      }
    
}


$var_idioma_Recordset1 = $_POST['idioma'];
if (isset($_POST['idioma'])) {
  $var_idioma_Recordset1 = $_POST['idioma'];
}
$var_ano_Recordset1 = $_POST['ano'];
if (isset($_POST['ano'])) {
  $var_ano_Recordset1 = $_POST['ano'];
}



if ($_POST['texto'] == "")
{
$var_id_linha_Recordset1="%";
mysql_select_db($database_dic2me, $dic2me);
$query_Recordset1 = sprintf("SELECT dic2me_linhas.nome, dic2me_linhas.descricao, dic2me_linhas.id_linha, dic2me_linhas.linha_texto FROM dic2me_linhas WHERE  dic2me_linhas.idioma=%s AND dic2me_linhas.ano=%s AND dic2me_linhas.id_linha like %s", GetSQLValueString($var_idioma_Recordset1, "text"),GetSQLValueString($var_ano_Recordset1, "text") ,GetSQLValueString($var_id_linha_Recordset1, "text"));
echo $query_Recordset1;
$Recordset1 = mysql_query($query_Recordset1, $dic2me);
log_BD ('./LOGS/dados_log.txt', mysql_error(), $query_Recordset1);
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

}
else
{

mysql_select_db($database_dic2me, $dic2me);
$query_Recordset2 = sprintf("SELECT dic2me_linhas.nome, dic2me_linhas.descricao, dic2me_linhas.id_linha, dic2me_linhas.linha_texto FROM dic2me_linhas WHERE  dic2me_linhas.idioma=%s AND dic2me_linhas.ano=%s", GetSQLValueString($var_idioma_Recordset1, "text"),GetSQLValueString($var_ano_Recordset1, "text"));
$Recordset2 = mysql_query($query_Recordset2, $dic2me);
log_BD('./LOGS/dados_log.txt', mysql_error(), $query_Recordset2);
$row_Recordset2 = mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysql_num_rows($Recordset2);
//echo $query_Recordset2;
}

$val_id_linha_Recordset2 = $_POST['texto'];
if (isset($_POST['texto'])) {
  $val_id_linha_Recordset2 = $_POST['texto'];
}
//$var_id_linha_Recordset2 = $row_Recordset1['id_linha'];
mysql_select_db($database_dic2me, $dic2me);
$query_Recordset4 = sprintf("SELECT dic2me_linhas.nome, dic2me_linhas.descricao, dic2me_linhas.id_linha, dic2me_linhas.linha_texto FROM dic2me_linhas WHERE  dic2me_linhas.idioma=%s AND dic2me_linhas.ano=%s AND dic2me_linhas.id_linha=%s", GetSQLValueString($var_idioma_Recordset1, "text"),GetSQLValueString($var_ano_Recordset1, "text"), GetSQLValueString($val_id_linha_Recordset2, "text"));
$Recordset4 = mysql_query($query_Recordset4, $dic2me);
log_BD('./LOGS/dados_log.txt', mysql_error(), $query_Recordset4);
$row_Recordset4 = mysql_fetch_assoc($Recordset4);
$totalRows_Recordset4 = mysql_num_rows($Recordset4);
//echo $query_Recordset4;




###############################################################################################
####OBTER NIF
###############################################################################################

function obtemnnif($entrada1)
{
	

	require_once('./Connections/dic2me.php'); 
 
$myfile = fopen("Connections/dados_testes.php","r") or die("Unable to open file!");

global $username_dic2me, $hostname_dic2me, $password_dic2me, $database_dic2me;

$dic2me = mysql_pconnect($hostname_dic2me, $username_dic2me, $password_dic2me);
   mysql_select_db($database_dic2me, $dic2me);


 global $username_dic2me, $hostname_dic2me, $password_dic2me, $database_dic2me;
	
$query_Recordset2 = sprintf("SELECT nif FROM dic2me_controlo WHERE controlo1=%s", GetSQLValueString($entrada1, "text"));

mysql_select_db($database_dic2me, $dic2me);



$Recordset2 = mysql_query($query_Recordset2, $dic2me) or die(mysql_error());

$row_Recordset2 = mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysql_num_rows($Recordset2);
	
$NIF=$row_Recordset2['nif'];

return ($NIF);

	
}

##########################################################################################################################
###Registo de acessos e atividade no dic2me funcao
##########################################################################################################################

$fim = microtime(true);

$inicio=$_POST['inicio'];

function regista_controlode_registos ($entradafile)
{
	
$IP=getIP();	

$tags=json_decode(file_get_contents('http://getcitydetails.geobytes.com/GetCityDetails?fqcn='. getIP()), true);


#print_r($tags[geobytescity]);
$CIDADE=$tags[geobytescity];
$pais=$tags[geobytescountry];
$MEUIP=$tags[geobytesipaddress];
$filenname="connsultar_textos_professor";

require_once('./Connections/dic2me.php'); 
 



#VITAL

  if (isset($_GET['CONTROLO']))
		{
			$entradaz=$_GET['CONTROLO'];
				  $MM_redirectLoginSuccess = "main_professores.php?CONTROLO=$entradaz";
			$entrada1=$_SESSION["CONTROLO"];
		}

	    if (isset($_SESSION["CONTROLO"]))
		{
			$entradaz=$_SESSION["CONTROLO"];
				  $MM_redirectLoginSuccess = "main_professores.php?CONTROLO=$entradaz";
			$entrada1=$_SESSION["CONTROLO"];
		}
		
$nifproff=obtemnnif($entrada1);
	


global $username_dic2me, $hostname_dic2me, $password_dic2me, $database_dic2me, $Recordset126;


$dic2me = mysql_pconnect($hostname_dic2me, $username_dic2me, $password_dic2me) or trigger_error(mysql_error(),E_USER_ERROR);
	

   mysql_select_db($database_dic2me, $dic2me);
	

$dic2me = mysql_pconnect($hostname_dic2me, $username_dic2me, $password_dic2me) or trigger_error(mysql_error(),E_USER_ERROR);


   mysql_select_db($database_dic2me, $dic2me);

	$insertSQL = sprintf("INSERT INTO controloacessos (filechamado, nif_prof ,ip, pais) VALUES (%s, %s,%s,%s)",
													 GetSQLValueString($filenname, "text"),
													 GetSQLValueString($nifproff, "text"),
													 
																		 GetSQLValueString($IP, "text"),
																	 GetSQLValueString($pais, "text")			 
													 );
								echo $insertSQL;
								exit;
													
								$Result1 = mysql_query($insertSQL, $dic2me) or die(mysql_error());

}

##########################################################################################################################
###Registo de acessos e atividade no dic2me funcao
##########################################################################################################################
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
<meta charset="UTF-8">
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
    <style>
	header1 {
		background: linear-gradient(to left,rgba(54,194,182,0.96) 0,rgba(62,188,207,0.96) 100%);
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
				background: rgba(58,162,173,1);
			}
			
			header1 > nav > ul > li a + div {
				background: linear-gradient(to bottom,rgba(58,162,173,1) 0,rgba(62,188,207,0.96) 100%);
				border-radius: 0 0 2px 2px;
				box-shadow: 0 3px 1px rgba(0,0,0,.05);
				display: none;
				font-size: 1rem;
				position: absolute;
				width: 195px;
			}
			
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
							color: rgba(255,255,255,.9);
							display: block;	
							font-size: .55rem;
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
      width: 350px;
      height: ;
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
   
   
   .flex3
     {
      /* basic styling */
      width: 350px;
      height: 300px;
      border: 1px solid #555;
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


  .flex3 > div
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
   background: #dddd88;
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
 
  header, footer {
   display: block;
   margin: 4px;
   padding: 5px;
   min-height: 100px;
   border: 1px solid #eebb55;
   border-radius: 7pt;
   background: #ffeebb;
   }
 
 
  header__ {
   display: block;
   margin: 4px;
   padding: 5px;
   min-height: 99px;
   border: 1px solid #eebb55;
   border-radius: 7pt;
   background: #8feebb;
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
}
    </style>
</head>
<body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
 <header>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 

 <header__>
 </header__>
 
 
 <header1 role="banner">
	<nav role="navigation">
		<ul>
			<li>
				<a href="./main_professores.php">
					<div>
						Home
						<span>Home professores</span>
					</div>
				</a>
			</li>
			<li>
				<a href="/blog">
					<div>
						Registar
						
					</div>
				</a>
				<div>
					<ul>
						<li><a href="./protecao_enc.php">Encarregado educação</a></li>
						<li><a href="./protecao_prof.php">Professores</a></li>
						<li><a href="./protecao_escolas.php">Escolas</a></li>
					</ul>
				</div>
			</li>
            
            <?php if ($_SESSION['MM_Username'] != "") { ?>
            	<li>
				<a href="<?php echo $logoutAction ?>">
					<div>
						Logout
						
					</div>
				</a>
				<div>
					<ul>
						<li>logout</li>
						
					</ul>
				</div>
		  </li> <?php } ?>

 <?php if ($_SESSION['MM_Username'] == "") { ?>            
			<li>
            

				<a href="/contact">
					<div>
						Login
				</div>
				</a>
				<div>
					<ul>
						<li><a href="./login_aluno.php">Alunos</a></li>
						<li><a href="./login_encarregado_educacao.php">Encarregados de educação</a></li>
						<li><a href="./login_professores.php">Professores</a></li>
                        <li><a href="./login_escola.php">Escola</a></li>
						
					</ul>
				</div>
				</a>
			</li>
            
            <?php } ?>
			<li>
				<a href="/forum">
					<div>
						<ul>
						<li><a href="./login_aluno.php">Como funciona</a></li>
						<li><a href="./login_enc_educ.php">Custos</a></li>
						<li><a href="./login_professores.php">Porque nasceu este projeto</a></li>						
					</ul>
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
  <div class="flex3">
    <div>
<form action="connsultar_textos_professor.php" method="post" enctype="multipart/form-data" name="form1" target="_self" id="form">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >



<?php  regista_controlode_registos ("connsultar_textos_professor.php"); ?>


<label>Idioma</label>
<br>
<select name="idioma"   onchange="form.submit();">
 <?php if($_POST['idioma'] == "Escolha") { ?>
  <option value="Escolha" selected>Escolha</option>
  <?php 
  $idioma="Escolha";
  } else { ?>
  <option value="Escolha">Escolha</option>
 <?php } ?>
 <?php if($_POST['idioma'] == "PT") { ?>
  <option value="PT" selected>Portugês</option>
  <?php 
  $idioma="PT";
  } else { ?>
  <option value="PT">Portugês</option>
 <?php } ?>
 <?php if($_POST['idioma'] == "ENG") { ?>
  <option value="ENG" selected>Inglês</option>
  <?php 
  $idioma="ENG";
  } else { ?>
  <option value="ENG">Inglês</option>
  <?php } ?>
 <?php if($_POST['idioma'] == "FR") {?>
  <option value="FR" selected>Françês</option>
  <?php 
  $idioma="FR";
  }else {?>
  <option value="FR">Françês</option>
  <?php } ?>
</select>

<label>Ano Escolar / Nível</label>


<select name="ano" onChange="form.submit();">
 <?php if($_POST['ano'] == "Escolha") { ?>
  <option value="Escolha" selected>Escolha</option>
 <?php 
 $ano="Escolha";
 } else {?>
  <option value="Escolha">Escolha</option> <?php } ?>
  
  
 <?php if($_POST['ano'] == "1") { ?>
  <option value="1" selected>1</option>
 <?php 
 $ano="1";
 } else {?>
  <option value="1">1</option> <?php } ?>
 
  <?php if($_POST['2'] == "2") { ?>
  <option value="2" selected>2</option>
 <?php 
 $ano="2";
 } else {?> <option value="2">2</option> <?php } ?>
 
 <?php if($_POST['ano'] == "3") { ?>
  <option value="3" selected>3</option>
 <?php 
 $ano="3";
 } else { ?> <option value="3">3</option> <?php } ?>
 
 <?php if($_POST['ano'] == "4") { ?>
  <option value="4" selected>4</option>
<?php 
$ano="4";
} else { ?> <option value="4">4</option> <?php } ?>


<?php if($_POST['ano'] == "5") { ?>
  <option value="5" selected>5</option>
  <?php 
  $ano="5";
  } else { ?> <option value="5">5</option> <?php } ?>
</select>
<br>
<label>Texto a analisar</label>
<br>

<select name="texto" onChange="form.submit();">

<?php if($_POST['text'] == "Escolha") { ?>
  <option value="Escolha" selected>Escolha</option>
 <?php 
 $texto="Escolha";
 } else {?>
  <option value="Escolha">Escolha</option> <?php } ?>
  
  <?php
do {  

if($row_Recordset1['nome'] != "")
{
$nome_dados=$row_Recordset1['nome'];
$linha_id_dados=$row_Recordset1['id_linha'];
$Recordset_X=$Recordset1;
}
else
{
$nome_dados=$row_Recordset2['nome'];
$linha_id_dados=$row_Recordset2['id_linha'];
$Recordset_X=$Recordset2;
}

if ( $linha_id_dados == $_POST['texto'] )
 {?>
 
 
 
  <option value="<?php echo $linha_id_dados?>" selected><?php echo $nome_dados?></option>
<?php }
else
 { ?>
  <option value="<?php echo $linha_id_dados?>"><?php echo $nome_dados?></option>
<?php } ?>
  <?php
} while ($row_Recordset1 = mysql_fetch_assoc($Recordset_X));
  $rows = mysql_num_rows($Recordset_X);
  if($rows > 0) {
      mysql_data_seek($Recordset_X, 0);
	  $row_Recordset1 = mysql_fetch_assoc($Recordset_X);
  }
?>
</select>


<input name="ver" type="submit" value="ver">
</form>

</div>
  
  </div>
  <div class="flex2">
    <div></div>
 
  </div>
 
  
   <div class="flex2">
    <div></div>
  
  </div>
  <label>Descrição<label>
   <div class="flex">
    <div>
   
   <?php 
   header('Content-Type: text/html; charset=utf-8');

    echo $row_Recordset4['descricao'];        
 ?>
    
    </div>
  
  </div>
  
  
  Texto
  <div class="flex">
    <div>
   <?php  
   header('Content-Type: text/html; charset=utf-8');
   
    echo $row_Recordset4['linha_texto'];
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
<?php
mysql_free_result($Recordset1);
?>