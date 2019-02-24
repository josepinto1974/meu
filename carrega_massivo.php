<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php require_once('./Connections/dic2me.php'); ?><?php
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
  
    $_SESSION['vercode'] = NULL;
  $_SESSION['cod_escola'] = NULL;
  unset($_SESSION['vercode']);
  unset($_SESSION['cod_escola']);
	
  $logoutGoTo = "main.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
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




    session_start();


 $colname_Recordset1 = $_SESSION['turmas'];

mysql_select_db($database_dic2me, $dic2me);
$query_Recordset1 = sprintf("SELECT ano_calendario_lectivo FROM dic2me_turmas WHERE  cod_interno_turma = %s", GetSQLValueString($colname_Recordset1, "text"));
$Recordset1 = mysql_query($query_Recordset1, $dic2me) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

#if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form"))
##  for($i = 0, $c = count($tudo); $i < $c; $i++)
echo "ENTROU?????\n";
if ("S" == "S") {

echo "ENTROU??nao???\n";






if ("S" == "S")
	{ 
	echo "SIMENTROUU!!!\n";
	
#	 GetSQLValueString($_POST['dados'], "text"),
#							   GetSQLValueString($_POST['turma'], "text"),
#							   GetSQLValueString($_POST['prof'], "text"),
#							   GetSQLValueString($_SESSION['cod_escola'], "text"),
#							   GetSQLValueString($row_Recordset1['ano_calendario_lectivo'], "text"));
	


	$m++;
	
	
	$tudo=explode("\n\r",$_POST['dados']);  
$tamanho_tudo=count($tudo);
	$tudo1=explode("\n",$_POST['dados']);  
$tamanho_tudo1=count($tudo1);

	$tudo=explode("\n\r",$_POST['dados']);  
$tamanho_tudo=count($tudo);
	$tudo1=explode("\n",$_POST['dados']);  
$tamanho_tudo1=count($tudo1);

   for ($jbas___ = 0; $jbas___ < $tamanho_tudo1; $jbas___++){
	   $tamanho_tudo11=count($tudo1);
	   	$tudo3=explode(";",$tudo1[$jbas___]);  
	   $tamanho_tudo113=count($tudo3);

echo "VALORRRRRRR\n";
echo $tudo1[$jbas___];
	   #aqui vou retirar espaço em branco nome e o nif, pois estão separados por ;
	   	#$tudo3=explode("\r\n",$tudo1[$jbas___]);





   }
		 
	
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/blocksjs-0.5.11.min.css">
<style>html, body {
	width: 100%;
	height: 100%;
	margin: 0;
}


#animation img {
    display: none;
	 max-width: 100%;
    height: auto;
}
#animation img:first-child {
    display: block;
} 


#animation2 img {
    display: none;
	 max-width: 100%;
    height: auto;
}
#animation2 img:first-child {
    display: block;
} 

#animation3 img {
    display: none;
	 max-width: 100%;
    height: auto;
}
#animation3 img:first-child {
    display: block;
} 

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
				position: relative;
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
	display: flex;
  }
  
  header1 > nav > ul > li > a > div > span {
	  margin: 4px 0 0;  
  }
}

	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
	
	
.flex
   {
      /* basic styling */
      width: 
      height: 
      border: 1px solid #555;
      font: 14px Arial;

      /* flexbox setup */
      display: -webkit-flex;
      -webkit-flex-direction: row;

      display: flex;
     align-items: center;
  justify-content: center;
	  
   }


.flex3
   {
      /* basic styling */
      width: 
      height:40px 
      border: 1px solid #555;
      font: 14px Arial;

      /* flexbox setup */
      display: -webkit-flex;
      -webkit-flex-direction: row;

      display: flex;
     align-items: center;
  justify-content: center;
	  
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
	 .flex3 > div:nth-child(1){ background : #ffffff; }
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
   
   -webkit-flex: 1 6 30%;
           flex: 1 6 30%;
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
  
    header1 > nav > ul > li > a {
    max-width: 500px;
    font-size: 1.7rem;
	line-height: 0.8rem;
	
  }
  
  header1 > nav > ul > li > a > div > span {
	  margin: 4px 0 0;  
  }
  
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
 <header>
 <header__>
 
  
    <div id="animation2">
    
    <img src="imagens/dic2me_01.png" alt="DIC2ME">
     <img src="imagens/dic2me_00.png" alt="DIC2ME">
       
</div>


 </header__>
 
 
 <header1 role="banner">
	<nav role="navigation">
		<ul>
			<li>
				<a href="./main.php">
					<div>
						Home
						<span>there's no place like it</span>
					</div>
				</a>
			</li>
			<li>
				<a>
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
            

				<a>
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
				
                <a><div>
						Sobre
						</div>
				</a>
					<div>
						<ul>
						<li><a href="./login_aluno.php">Como funciona</a></li>
						<li><a href="./login_enc_educ.php">Custos</a></li>
						<li><a href="./login_professores.php">Porque nasceu este projeto</a></li>						
					 <li><a href="./Sobre.php">Coordenadores Pedagógicos</a></li>
                    </ul>
					</div>
				</a>
			</li>
		</ul>
	</nav>
</header1>
 
 
 
 
 
 
 
 </header>
<div id='main'>
    <article>

<form name="form" action="<?php echo $editFormAction; ?>" method="POST" enctype="multipart/form-data" target="_self">



<input name="prof" type="hidden" value="<?php echo $_SESSION['MM_Username'] ?>">

<input name="turma" type="hidden" value="<?php echo $_SESSION['turmas'] ?>" ">

<input name="codescola" type="hidden" value=" <?php echo $_SESSION['cod_escola'] ?> ">

<font face="Times New Roman, Times, serif">

Basta colocar o nome dos alunos e de seguida, separado por ; o respectivo NIF dos alunos
<p>
Exemplo   joao carlos;123456789
<p>
Só necessita de fazer esta operação uma vez
<p>
A associação de alunos À turma fica logo feita
<p>
Pode em baixo fazer copy past de outro ficheiro dos dados aluno; nif
<p>
Nota: o registo destes alunos no sistema, pode demorar cerca de uma hora
<p></font>
<?php


	$tudo=explode("\n\r",$_POST['dados']);  
$tamanho_tudo=count($tudo);
	$tudo1=explode("\n",$_POST['dados']);  
$tamanho_tudo1=count($tudo1);
			$tudo=explode(' ', $_POST['dados']);
			$base=$tudo[$m];

#:aqui ja tenh acada linha que deve ser inserida
#cada linha contemNOME;NIF

for ($jb___ = 0; $jb___ <= $tamanho_tudo1; $jb___++){

		$tudo_detalho=explode(";",$tudo1[$jb___]);  
#$tamanho_tudo1=count($tudo1);

			
			$nome=$tudo_detalho[0];
			$nif=$tudo_detalho[1];



if (( isset($nif)) && (isset($nome)))
{

		$nif_limpo=explode("\r",$nif);  
		$nif_limpo_tudo=$nif_limpo[0];



}
if ( isset($nif))
{
if  (isset($nome))
{
	
	 $insertSQL = sprintf("INSERT INTO dic2me_massivo_turmas (nome_aluno,nif_aluno, turma, id_prof, id_escola, ano_lect) VALUES (%s, %s,%s, %s, %s,%s)",
							   GetSQLValueString($nome, "text"),
							   GetSQLValueString($nif_limpo_tudo, "text"),
							   GetSQLValueString($_POST['turma'], "text"),
							   GetSQLValueString($_POST['prof'], "text"),
							   GetSQLValueString($_SESSION['cod_escola'], "text"),
							   GetSQLValueString($row_Recordset1['ano_calendario_lectivo'], "text"));

	      mysql_select_db($database_dic2me, $dic2me);
		  $Result1 = mysql_query($insertSQL, $dic2me) or die(mysql_error());

}}}
		
		?>
<textarea name="dados" cols="88" rows="88"></textarea>
<input type="submit" name="MM_insert" value="form">

</form>

  </article>
    <nav>
    
    nn
    
    </nav>
    <aside>
    
        
    
    </aside>
</div>
 <footer>footer</footer>
</body>


</html><?php
mysql_free_result($Recordset1);
?>
