
<?php require_once('./Connections/dic2me.php'); ?>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<?php
header('Content-Type: text/html; charset=utf-8');


  function log_BD ($ficheiro, $erro, $outro, $posicao)
{
   if (mysql_error())
      {
      	rollback();
       $file = $ficheiro;
// The new person to add to the file
$person = "MESS DE ERRO: ".$erro."QUERY que deu prob: ".$outro."POSICAO: ".$posicao;

file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
echo "Lamentamos, ocorreu um erro, a sessão vai ser encerrada\n";
 die();
  session_destroy();
  exit;
  
      }
    
}

  function log_f ($ficheiro, $erro, $outro, $posicao)
{
       $file = $ficheiro;

$person = $posicao;

file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
}

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
	
  $logoutGoTo = "consulta_texto_marcacao_TPC.php";
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

mysql_select_db($database_dic2me, $dic2me);
$query_Recordset7 = "SELECT * FROM dic2me_alunos_turmas ORDER BY nome_aluno ASC";
$Recordset7 = mysql_query($query_Recordset7, $dic2me) or die(mysql_error());
$row_Recordset7 = mysql_fetch_assoc($Recordset7);
$totalRows_Recordset7 = mysql_num_rows($Recordset7);

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
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


	  mysql_select_db($database_bdteste, $bdteste);
$query_Recordset17 = sprintf("select id from dic2me_TPC order by id desc limit 1");


$Recordset17 = mysql_query($query_Recordset17, $dic2me);
log_BD ('./LOGS/consulta_tpc.txt', mysql_error(), $query_Recordset17);
$row_Recordset17 = mysql_fetch_assoc($Recordset17);

 session_start();
    echo "<h3> PHP List All Session Variables</h3>";
    foreach ($_SESSION as $key=>$val)
    echo $key." ".$val."<br/>";
    session_start();
    echo "<h3> PHP List All POST Variables</h3>";
    foreach ($_POST as $key=>$val)
    echo $key." ".$val."<br/>";
	
	
	  mysql_select_db($database_bdteste, $bdteste);
$query_Recordset6 = sprintf("SELECT dic2me_linhas.nome FROM dic2me_linhas WHERE dic2me_linhas.id_linha=%s", GetSQLValueString($_POST['texto'], "text"));


$Recordset6 = mysql_query($query_Recordset6, $dic2me);
log_BD ('./LOGS/dados_log.txt', mysql_error(), $query_Recordset6);
$row_Recordset6 = mysql_fetch_assoc($Recordset6);

   
if ((isset($_POST["texto"])) && ($_POST["texto"] !== "") && ($_SESSION['turmas'] != "")) {

	  
	  $aluno="toda_turma";
	  
	  $conta=$row_Recordset17[id]+1;
	  
	  
		$insertSQL = sprintf("INSERT INTO dic2me_TPC (id_prof, id_linha, id_escola, idioma, descricao, `data`, ano, ano_lectivo, id_turma, prof_pede,titulo,nif_aluno,nome_aluno,id_central) VALUES (%s,%s,%s, %s, %s, %s, %s, %s, %s, %s, %s, %s,%s,%s)",
							 GetSQLValueString($_POST['id_prof'], "text"),
							 GetSQLValueString($_POST['texto'], "text"),
							 GetSQLValueString($_POST['id_cod_escola'], "text"),
							 GetSQLValueString($_POST['idioma'], "text"),
							 GetSQLValueString($_SESSION['descrevevv'], "text"),
							 GetSQLValueString($_POST['datah'], "date"),
							 GetSQLValueString($_SESSION['anovv'], "text"),
							 GetSQLValueString($_POST['ano_lectivo'], "text"),
							 GetSQLValueString($_POST['id_turma'], "text"),
												 GetSQLValueString($pede, "text"),
												 GetSQLValueString($row_Recordset6[nome], "text"),
												 GetSQLValueString($aluno, "text"),
												 GetSQLValueString($aluno, "text"),
												 GetSQLValueString($conta, "text"));
	  
		  
		  
			  
		  session_start();
		  
					
		mysql_select_db($database_dic2me, $dic2me);
		$Result1 = mysql_query($insertSQL, $dic2me);
		 log_BD ('./LOGS/consulta_text_marcacao_tpc.txt', mysql_error(), $insertSQL, "P2");?>
		 <input name="acabou" type="hidden" value="sim">
		 
	  
	  
	  
	  
		 <?php
		$insertGoTo = "consulta_texto_marcacao_TPC.php?ola";
		if (isset($_SERVER['QUERY_STRING'])) {
		  $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?" ? "PP" : "lll";
		  $insertGoTo .= $_SERVER['QUERY_STRING'];
		  
		}
		header(sprintf("Location: %s", $insertGoTo));
	  }
	  echo "imprtante\n";
	  echo $_POST['ola'];
	  $val_cod_prof_Recordset3 = $_SESSION['MM_Username'];
	  if (isset($_SESSION['MM_Username'])) {
		$val_cod_prof_Recordset3 = $_SESSION['MM_Username'];
	  }
	  $val_id_escola_Recordset3 = $_SESSION['cod_escola'];
	  if (isset($_SESSION['cod_escola'])) {
		$val_id_escola_Recordset3 = $_SESSION['cod_escola'];
	  }
	  
	  
	  
	  $var_idioma_Recordset1 = $_POST['idioma'];
	  if (isset($_POST['idioma'])) {
		$var_idioma_Recordset1 = $_POST['idioma'];
	  }
	  $var_ano_Recordset1 = 2;
	  if (isset($_POST['ano'])) {
		$var_ano_Recordset1 = 2;
	  }
	  
	  
	  $var_id_linha_Recordset1="%";
	  mysql_select_db($database_dic2me, $dic2me);
	  $query_Recordset1 = sprintf("SELECT dic2me_linhas.nome, dic2me_linhas.descricao, dic2me_linhas.id_linha, dic2me_linhas.linha_texto FROM dic2me_linhas WHERE  dic2me_linhas.idioma=%s AND dic2me_linhas.ano=%s AND dic2me_linhas.id_linha like %s", GetSQLValueString($var_idioma_Recordset1, "text"),GetSQLValueString($var_ano_Recordset1, "text") ,GetSQLValueString($var_id_linha_Recordset1, "text"));
	  $Recordset1 = mysql_query($query_Recordset1, $dic2me);
	  log_BD ('./LOGS/dados_log.txt', mysql_error(), $query_Recordset1, "P4");
	  $row_Recordset1 = mysql_fetch_assoc($Recordset1);
	  $totalRows_Recordset1 = mysql_num_rows($Recordset1);
	  
	  
			  
		  session_start();
	  
	  
	  
	  $var_id_linha_Recordset5 = $_POST['texto'];
	  if (isset($_POST['texto'])) {
		$var_id_linha_Recordset5 = $_POST['texto'];
	  }
	  //if ($_POST['ano'] != "" and $_POST['ano'] !=  "Escolha") and ($_POST['idioma'] != "" and $_POST['idioma'] != "Escolha") and ( 
	  $query_Recordset5 = sprintf("SELECT dic2me_linhas.file, dic2me_linhas.nome, dic2me_linhas.descricao, dic2me_linhas.id_linha, dic2me_linhas.linha_texto FROM dic2me_linhas WHERE  dic2me_linhas.idioma=%s AND dic2me_linhas.ano=%s AND dic2me_linhas.id_linha=%s", GetSQLValueString($var_idioma_Recordset1, "text"),GetSQLValueString($var_ano_Recordset1, "text") ,GetSQLValueString($var_id_linha_Recordset5, "text"));
	  $Recordset5 = mysql_query($query_Recordset5, $dic2me);
	  log_BD ('./LOGS/dados_log.txt', mysql_error(), $query_Recordset5, "P5");
	  $row_Recordset5 = mysql_fetch_assoc($Recordset5);
	  $totalRows_Recordset5 = mysql_num_rows($Recordset5);

?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
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
      height: 100px;
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
   .flex > div:nth-child(1){ background : #ffffff; }
   .flex > div:nth-child(2){ background : #ffffff; }
   .flex > div:nth-child(3){ background : #ffffff; }
    .flex2 > div:nth-child(1){ background : #ffffff; }
   .flex > div:hover
   {
        width: 200px;
   }
     body {
   font: 24px Helvetica;
   background: #ffffff;
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
   background: #ffffff;
   -webkit-flex: 3 1 60%;
           flex: 3 1 60%;
   -webkit-order: 2;
           order: 2;
   }
  
   /* cores da coluna esquerda */
  #main > nav {
   margin: 4px;
   padding: 5px;
   border: 1px solid #8888bb;
   border-radius: 7pt;
   		background: linear-gradient(to top,rgba(0,102,255,0.96) 0,rgba(62,188,207,0.96) 100%);

  
   -webkit-flex: 1 6 20%;
           flex: 1 6 20%;
   -webkit-order: 1;
           order: 1;
   }
  
   /* cores da coluna direita */
  #main > aside {
   margin: 4px;
   padding: 5px;
   border: 1px solid #8888bb;
   border-radius: 7pt;
background: linear-gradient(to top,rgba(230,138,0,0.96) 0,rgba(255,153,0,0.96) 100%);
   
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
						
					</div>
				</a>
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
 <?php
echo "imprtante\n";
echo $_GET['PP'];?>
<?php
    session_start();
    echo "<h3> PHP List All Session Variables</h3>";
    foreach ($_SESSION as $key=>$val)
    echo $key." ".$val."<br/>";
?>

<?php
    session_start();
    echo "<h3> PHP List All POST Variables</h3>";
    foreach ($_POST as $key=>$val)
    echo $key." ".$val."<br/>";
?>


    <article>Identificador  do TPC a indicar aos alunos:
    <?php $conta=$row_Recordset17[id]+1;
	echo $conta; ?>
    <p><?php if ($_SESSION['turmas'] == "")

	{
	echo "Não escolheu uma turma de trabalho, não pode marcar TPC";
	}
	else
	{
	echo "Turma:".$_SESSION['turmas'];
	} ?></p>
  <div class="flex3">
    <div>
<form action="consulta_texto_marcacao_TPC.php" method="post" enctype="multipart/form-data" name="form1" target="_self" id="form1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >

<?php if ($_POST['acabou'] === "sim")
{?>
	<img src="imagens/Depositphotos_67958629_s-2015.jpg" width="500" height="500">
    
    <?php } ?>
	<input name="tex_fazer" type="hidden" value=<?php echo $_SESSION['oTEXTO'];?>>
  
<?php $_SESSION['nomes']=$row_Recordset7['nome_aluno'];?>
<b><label>Idioma</label></b>

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
</br>
</p>
</select>

<b><label>Ano Escolar / Nível</label></b>


<select name="ano" onChange="form.submit();">
 <?php if($_POST['ano'] == "Escolha") { ?>
  <option value="Escolha" selected>Escolha</option>
 <?php 
 $ano=$_POST['ano'];
 } else {?>
  <option value=2>2</option> <?php } ?>
  
  
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

<b><label>Ano Escolar / Nível</label></b>
</select>

<select name="nível do aluno do aluno">
  <option value="1">com algumas dificuldades</option>
  <option value="2">Sem dificuldades</option>
  <option value="3">Avançado</option>
</select>

<br>
<label>Texto a analisar</label>




<?php
$var_idioma_Recordset1 = $_POST['idioma'];
if (isset($_POST['idioma'])) {
  $var_idioma_Recordset1 = $_POST['idioma'];
}
$var_ano_Recordset1 = $_POST['ano'];
if (isset($_POST['ano'])) {
  $var_ano_Recordset1 = $_POST['ano'];
}


 ?>



<select name="texto" onChange="form.submit();">
  <option value=Escolha>Escolha</option>
  <?php
  $_SESSION['oTEXTO']=$_POST['texto'];
do {  

if ( $row_Recordset1['id_linha'] == $_POST['texto'] )
 {?>
 
  <option value="<?php echo $row_Recordset1['id_linha']?>" selected>"<?php echo $row_Recordset1['nome']?>"</option>
<?php }
else
 { ?>
  <option value="<?php echo $row_Recordset1['id_linha']?>">"<?php echo $row_Recordset1['nome']?>"</option>
<?php }
$_SESSION['oTEXTO']=$row_Recordset1['id_linha'];
 ?>
  <?php
} while ($row_Recordset1 = mysql_fetch_assoc($Recordset1));
  $rows = mysql_num_rows($Recordset1);
  if($rows > 0) {
      mysql_data_seek($Recordset1, 0);
	  $row_Recordset1 = mysql_fetch_assoc($Recordset1);
  }
?>
</select>



<?php
 $_SESSION['id_profe']=$_POST['id_prof'];
                       $_SESSION['id_linha']=$_POST['id_linha'];
   $_SESSION['id_code_escola']=$_POST['id_cod_escola'];
   $_SESSION['idimas']=$_POST['idioma'];
   $_SESSION['notas']=$_POST['descreve_'];
   $_SESSION['data']=$_POST['datah'];
   $_SESSION['anos']=$_POST['ano'];
$_SESSION['lectivo']=$_POST['ano_lectivo'];
$_SESSION['id_turma']=$_POST['id_turma'];
$_SESSION['aluo_n']=$_POST['aluno'];

?>
  <input name="" type="submit">
</form>


</div>
  
  </div>
  <div class="flex2">
    <div></div>
 
  </div>
   <div class="flex">
    <div>
 


<form action="<?php echo $editFormAction; ?>" method="POST" enctype="multipart/form-data" target="_self" name="form2">

<?php if(($_SESSION['oTEXTO'] !== "") and ( $_POST['tex_fazer'] !== 0 ))
{ ?>
		</br>
		</p>
		<select name="ano_lectivo">
		  <option value="15/16">15/16</option>
		  <option value="16/17">16/17</option>
		
		</select>
		
		<?php
		
		echo $insertSQL;
			echo "id do TPC\n";
			echo $_POST['id_linha'];	
		
		?>
		<label>Breve resumo se necessário, para o professor</label>
		<textarea name="descreve" cols="10" rows="10"></textarea>
		
		
		
		 
		  <input name="id_prof" type="hidden" value=<?php echo $_SESSION['MM_Username'];?>>
		 <input name="id_linha" type="hidden" value=<?php echo $row_Recordset1['id_linha'];?>>
		 <input name="idioma" type="hidden" value=<?php echo $idioma ;?>>
		 <input name="id_turma" type="hidden" value=<?php echo $_SESSION['turmas'];?>>
		 <input name="id_cod_escola" type="hidden" value=<?php echo $_SESSION['cod_escola'];?>>
		  <input name="descreve_" type="hidden" value=<?php echo $_POST['descreve'];?>>
		 <input name="ano" type="hidden" value=<?php echo $ano ;?>>
		 <input name="datah" type="hidden" id="datah" value=<?php echo date("Y-m-d H:i:s"); ?>"Ymd His" />
		
		
		  <input type="hidden" name="MM_insert" value="form2">
			
			</div>
		  
		  </div>
		  
		
		 </form>
		  
		  
		   <div class="flex2">
			<div></div>
		  
		  </div>
		  <label>Descrição<label>
		   <div class="flex">
			<div>
		   
		   <?php 
		   header('Content-Type: text/html; charset=utf-8');
		
			echo $row_Recordset5['descricao'];        
		 ?>
			
			</div>
		  
		  </div>
		  
		  
		  Texto
		  <div class="flex">
			<div>
		   <?php  
		   header('Content-Type: text/html; charset=utf-8');
		   
			echo $row_Recordset5['linha_texto'];
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
<?php } ?>        
<?php
mysql_free_result($Recordset7);

mysql_free_result($Recordset1);
?>