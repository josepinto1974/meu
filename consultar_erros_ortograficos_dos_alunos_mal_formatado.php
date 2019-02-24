
<?php 
require_once('./funcoes/funcoes.php');
require_once('./Connections/dic2me.php'); ?>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<?php
header('Content-Type: text/html; charset=utf-8');



//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// Start the session
session_start();

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
      width: 550px;
      height: 900px;
      border: 1px solid #555;
      font: 14px Arial;

      /* flexbox setup */
      display: -webkit-flex;
      -webkit-flex-direction: row;

      display: flex;
      flex-direction: row;
   }


.flex7
   {
      /* basic styling */
      width: 550px;
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
      width: 500px;
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
      width: 400px;
      height: 250px;
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

idioma
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
 <?php

 $entrada1=$_GET['CONTROLO'];
	$maincomcontrolo = "main_professores.php?CONTROLO=$entrada1";?>  ?>
 <header1 role="banner">
	<nav role="navigation">
		<ul>
			<li>
				<a href=<?php echo $maincomcontrolo ?>>
					<div>
						Home
						
					</div>
				</a>
			</li>
			
            
          


</header1>
 
 
 
 
 
 
 
 </header>
 <div id='main'>



	

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
?>
	<b><label>Aluno do qual o professor que ver o ditado</label></b>
    <?php



crialista_alunos_paramarcar_ditado_individual_NOVO($controlo,$alunosnif);



  $contaz++;
	$controlo=$_GET['CONTROLO'];
# marca_TP_so_um_aluno
$nifalunovertpcmarcado=$_POST['nif_do_aluno_escolhido'];
$nifalunovertpcmarcado=$_POST['alunos'];

$iddotpc=$_POST['id_do_TPC'];

?>
<br>
<p>
	<b><label>Escolha o ID do TPC que que ver do aluno (*)</label></b>
    <?php


 cria_combobox_com_id_dos_tpc_do_aluno($controlo, $nifalunovertpcmarcado,$iddotpc);
 ?>(*) Este é o mesmo id que com que deu aos alunos <?php

?>
 <input type="hidden" name="nifaluno" value="<?php echo $_POST['alunos'] ?> ">
  <input type="hidden" name="id_TPC" value="<?php echo $_POST['id_do_TPC'] ?> ">
<?php
$ID_DITADO=$_POST['id_do_TPC'];
$NIF_ALUNO=$_POST['nifaluno'];



$dados_ditado_mostra_professora=mostrar_ditado_escrito_pelo_aluno($NIF_ALUNO,$ID_DITADO); 

	
$ditadofeito=$dados_ditado_mostra_professora[0];

$tempoquedemorouafazerditado=$dados_ditado_mostra_professora[1];

$dataregisto=$dados_ditado_mostra_professora[2];

?>	

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
			  <div class="flex2">
				<b><div>DITADO FEITO PELO ALUNO</div></b>
			 
			  </div>
			   <div class="flex7">
                <?php echo $ditadofeito; ?>
               <?php	
#			   $ID_DITADO=$_POST['id_do_TPC'];
			   

			
	?>
				<div>
			 
			
			
		
						
						</div>
                      
					  </div>
					  
					
					 </form>
					  
					  
					   <div class="flex2">
						<div>erro</div>
					  
					  </div>
                     
  
					  
					  
					  
					  Texto
					  <div class="flex">
						<div>
					   <?php  
					   header('Content-Type: text/html; charset=utf-8');
					   
					   			   $ID_DITADO=$_POST['id_do_TPC'];
			   
						mostrar_erros_do_ditado_a_professorapelo_aluno_mostra_tabela($ID_DITADO);
					 ?>
						</div>
<?php					  obterlista_textos__para_professor_compara_com_texto_escrito_aluno($ID_DITADO);  ?>
					  </div>
					  
					  
						</article>
						<nav>nav</nav>
						<aside>aside</aside>
					 </div>
					 <footer>footer</footer>
					</body>
					</html>
			<?php } 
      

mysql_free_result($Recordset7);

mysql_free_result($Recordset1);
?>