<?php require_once('../Connections/dic2me.php'); ?>
Inicio
<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 

<?php
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

if($_GET['lang'] != "")
{
$lang=$_GET['lang'];
}

if($_POST['lang'] != "")
{
$lang=$_POST['lang'];
}

if($lang == "")
{
$lang="PT";
}

$PEDE="1";
mysql_select_db($database_dic2me, $dic2me);

$query_Recordset1 = "SELECT * FROM dic2me_linhas WHERE  dic2me_linhas.id_linha='1'  ORDER BY NOME ASC";
$Recordset1 = mysql_query($query_Recordset1, $dic2me) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);


$nifalu_Recordset13 = '12345';
if (isset($_SESSION['MM_Username'])) {
  $nifalu_Recordset13 = $_SESSION['MM_Username'];
}
$turmas_Recordset13 = '12345_15/16_1_2';
if (isset($_SESSION['turmas'])) {
  $turmas_Recordset13 = $_SESSION['turmas'];
}
$id_cod_escola_Recordset13 = '12345';
if (isset($_SESSION['cod_escola'])) {
  $id_cod_escola_Recordset13 = $_SESSION['cod_escola'];
}



mysql_select_db($database_dic2me, $dic2me);
$query_Recordset2 = sprintf("SELECT dic2me_linhas.id_livro_texto, dic2me_linhas.nome FROM dic2me_linhas WHERE ano=%s ORDER BY NOME ASC", GetSQLValueString($ano, "text"));

$Recordset2 = mysql_query($query_Recordset2, $dic2me) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysql_num_rows($Recordset2);



//Obter nome ficheiro
mysql_select_db($database_dic2me, $dic2me);
$query_Recordset7 = sprintf("SELECT dic2me_linhas.file, dic2me_linhas.id_linha FROM dic2me_TPC, dic2me_linhas WHERE dic2me_linhas.idioma=%s and dic2me_linhas.id_linha=dic2me_TPC.id_linha  and  dic2me_linhas.id_linha=%s", GetSQLValueString($lang, "text"), GetSQLValueString(1, "text"));


$Recordset7 = mysql_query($query_Recordset7, $dic2me) or die(mysql_error());
$row_Recordset7 = mysql_fetch_assoc($Recordset7);
$totalRows_Recordset7 = mysql_num_rows($Recordset7);


?><!DOCTYPE html>
<html lang="en">
  <head>
         <link rel="stylesheet" type="text/css" href="estilos.css">

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
      border: 0px solid #000000;
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
   background: #000000;
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
}  </style>
  </head>
<body>
 <header>
 <header__>
 <img src="imagens/dic2me-1_3.png" alt="DIC2ME" /> </header__>
 </header__>
 
 <?php 
 

 if (($lang ==""))
        {
		$destino="http://www.dic2me.com/main.php";
		}
		else
		{$destino="http://www.dic2me.com/main.php";
		}?>
		
 <header1 role="banner">
	<nav role="navigation">
		<ul>
			<li>
				<a href="<?php echo $destino ?>">
					
						página principal						
					
				</a>
			</li>
			
		
	 
		</ul>
	</nav>
</header1>
 
 
 
 
 
 
 
 </header>
 <div id='main'>
    <article>Ditados em:
    <?php if (( $lang == "PT") || ($lang == "" ))
	{
	?>
    <img src="imagens/bandeira_portugal_quad.jpg" alt="PT" width="25" height="25">
    <p></p>
 
   <?php } ?>

 <?php if (( $lang == "ENG"))
	{
	?>
    <img src="imagens/bandeia_ing_quadrada.jpg" alt="ENG" width="25" height="25">
    <p></p>
 
   <?php } ?>

 <?php if (( $lang == "FR"))
	{
	?>
    <img src="imagens/ban_franca_quadra.jpg" alt="FR" width="25" height="25">
    <p></p>
 
   <?php } ?>
  <div class="flex">
  



  <?php 
session_start(); 




 
?>


    <div>A versão de avaliação, permite apenas fazer um ditado com um único texto, e não se tem acesso às ferramentas 
    de controlo do professor. <p>Nem estatisticas
    Caso deseje utilizar esta ferramenta WEB para ditado online, fale com a professora dos seus filhos (ensino primário)
    A utilização é grátis.<p>
    O registo no nosso portal, só deve ser feito pelos encarregados de educação.E só estes poderão registar os seus educandos.
    <p>
    </div>
  

   
    </div>
    
    
    <div class="flex">
   

  <?php 
session_start(); 






 


 $ano=$row_Recordset13['ano'];
?>


    <div>
   O registo também pode ser feito pelo professor, ou escola.
    <p>
    Este serviço, deve ser utilizado utilizando o Firefox.
    
     </div>
   
    </div>
    
  <div class="flex2">
    <div>
   
     </div>
  
  </div>
   <div class="flex">
    <div>
    
   
    
    <?php  $vale=$row_Recordset1['file']; 
     ?>
    <div> <form action="<?php echo $vale ?>" method="post" enctype="multipart/form-data" name="form" target="_self" id="form">
    
   Escolha texto, e depois clica em ir para ditado
    
     <form action="" method="post" enctype="multipart/form-data" target="_self" name="form1" id="form1">
    Ditados, português, para o seu ano <?php echo $ano ?>
   <select name="Texto">
     <option value="Escolha"> </option>
     <?php
do {  
?>
     <option value="<?php echo $row_Recordset1['id_livro_texto']?>"><?php echo $row_Recordset1['nome']?></option>
     <?php
} while ($row_Recordset1 = mysql_fetch_assoc($Recordset1));
  $rows = mysql_num_rows($Recordset1);
  if($rows > 0) {
      mysql_data_seek($Recordset1, 0);
	  $row_Recordset1 = mysql_fetch_assoc($Recordset1);
  }
?>
   </select>
   <br>
   <input name="id_texto" type="hidden" value="4">
    <input name="ditado" type="submit" value="Ir para ditado">

    
    </form>
    
   <?php
    session_start();

?>
    
    </div>
  
  </div>
    </article>
    <nav>Publicidade1</nav>
    <aside>aside</aside>
 </div>
 <footer>footer</footer>
</body>
</html>
<?php
mysql_free_result($Recordset1);

mysql_free_result($Recordset2);

mysql_free_result($Recordset13);

mysql_free_result($Recordset3);
?>
