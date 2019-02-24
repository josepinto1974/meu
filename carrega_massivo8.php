
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
$valTEXT='8';

mysql_select_db($database_bdteste, $dic2me);
   $query_Recordset2 =sprintf("SELECT linha_texto FROM dic2me_linhas WHERE id_linha=%s ",
    GetSQLValueString($valTEXT, "text")); 







$Recordset2 = mysql_query($query_Recordset2, $dic2me) or die(mysql_error());

while($arrayRow = mysql_fetch_assoc($Recordset2)) {
	
      $regcodigo=$arrayRow[linha_texto];
   }
  mysqli_close($liga);

$texto = explode(" ", $regcodigo);
$tamanho_na_bd=count($texto);

//FIM processar o que está na BD
//or

//Ler texto escrito

$ditado=explode(" ",$regcodigo);  
$tamanho_escrito=count($ditado);

////////////////////////////////


 $ditado_pedido=$regcodigo;
$texto = explode(" ", $regcodigo);


//FIM processar o que está na BD
//or

//Ler texto escrito ou seja ditado

$ditado=explode(" ",$_POST['ditado']);  
$tamanho_escrito=count($ditado);



$m=0;
$c=0;
for ($j = 0; $j <= $tamanho_escrito-1; $j++){
  $ditadolimpo = trim($ditado[$j], "\0");
            $ditadolimpo = $ditadolimpo;
            $textolimpo = trim($texto[$j], "\0");
$outros = explode(".", $textolimpo);
$valida=count($outros);

if ( $tamanho_valida > 1)
{

 $textolimpo =$outros[0];
$tamanho_escrito=$tamanho_escrito-$valida;
}

 if (strcmp($ditadolimpo, $textolimpo) !== 0)
{
$palavra_correcta[$c]=$textolimpo;
$palavra_errada[$c]=$ditadolimpo;
}
if (strcmp($ditadolimpo, $textolimpo) == 0)
{
$palavra_correcta[$c]= $textolimpo;
$palavra_errada[$c]= $ditadolimpo;
}
$c++;
}



//Validar erros
$m=0;

for ($j = 0; $j <= $tamanho_escrito; $j++){
$c++;
  $ditadolimpo = trim($ditado[$j], "\0");
            $ditadolimpo = $ditadolimpo;
            $textolimpo = trim($texto[$j], "\0");
			
 if (strcmp($ditadolimpo, $textolimpo) !== 0)
{
$palavra_errada[$c]=$ditadolimpo;
}
}


$erro="sim";
for ($j = 0; $j < $tamanho_escrito; $j++){
	$certos=0;
	$errados=0;
	$err++;
	$bom++;
$boi++;
if(strcmp($erro, "nao") == 0)
{
$erro="sim";
}

		 for ($i = 0; $i <= $tamanho_na_bd; $i++){
$erro="nao";
                $ditadolimpo = trim($ditado[$j], "\0");
			
            $ditadolimpo = $ditadolimpo;
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

            $textolimpo = trim($texto[$i], "\0");


               if (strcmp($ditadolimpo, $textolimpo) !== 0)
				{ 
				
$erro="sim";
				       $errados++;
                                 $palavraerrada=$ditadolimpo;
                                 $pala=$textolimpo;

                                     mysql_select_db($database_dic2me, $dic2me);
                                           $query_Recordset2 =sprintf("SELECT palavra FROM dic2me_palavras_individuais_PORTUGUES WHERE palavra=%s ",
                                                GetSQLValueString($palavra, "text"));
                                        $Recordset2 = mysql_query($query_Recordset2, $dic2me) or die(mysql_error());
                                        $Recordset2 = mysql_query($query_Recordset2, $dic2me);
                                        $totalRows_Recordset1 = mysql_num_rows($Recordset2);

                                    if($totalRows_Recordset1 == 0)
                                        {
    $palavraerradas[$c]=$palavra;
    $palavraboa[$c]=$texto[$j];

}

   if($totalRows_Recordset1 > 0)
                                        {





 if (strcmp($ditadolimpo,  $palavra) == 0)
{



			
		///pato adicionar caracteres palaeliminar falsoso erros de contexto, por exemplo adicionar um ponto final a uma palavra
		$erro="nao";
		$vari=",";
		$compara=$ditadolimpo.$vari;
		if (strcmp($compara,  $textolimpo) == 0)
		{
		$erro="nao";
		}
		else
		{
		$erro="sim";
		}
}
////se frem diferentes ver se é por ter . ou ,, poderemos aqui tambem procesasar outras diferencas como ter escrito moinho , nao


if (strcmp($ditadolimpo,  $texto[$i]) !== 0)
{



	//devemos limpar $texto[$j] e limpar $ditado[$j];
		  $vari=".";
	  $compara=$ditadolimpo.$vari;
	  
	  if (strcmp($compara, $textolimpo) == 0)
	  {
	  $erro="nao";
	  }
	  else
	  {
	  $erro="sim";
	  }
	  
	  
	  if(strcmp($erro, "sim") !==0)
	  {
	  $cc++;
	  $palavrasemerroerradas[$cc]=$texto[$j];
	  $palavraerro_contexto[$cc]=$ditadolimpo;
	  
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

                                       $limpo=$ditadolimpo;
                                       $erro="nao";
				$trancavalidacao="sim";
				$certos++;
				
				} 


}
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
     $arepetir[$m]=$palavraerrada;
$erro="nao";

}


}

					
$ditadok=explode(".",$texto[$j]);  
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
//$ditado[$i]  != $texto[$j]
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

		 for ($i = 0; $i <= $err; $i++){
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
       
	   
  if($semafro == "sim") {
	   

$datah=date("Y-m-d");
  mysql_select_db($database_dic2me, $dic2me);
  if ($escreve_erro == "")
  {
  $escrever="SEM_ERROS";
  }
  else
  {
  $escrever=$escreve_erro;
  }
 mysql_select_db($database_dic2me, $dic2me);
	       	
			
			
			
					   

  
$datah=date("Y-m-d");
  mysql_select_db($database_dic2me, $dic2me);
  $insertSQL = sprintf("INSERT INTO dic2me_estatisticas_PORTUGUES_total (id_aluno, id_palavra, id_TPC ,data) VALUES (%s, %s,%s,%s)",
                       GetSQLValueString($_SESSION['MM_Username'], "text"),
                       GetSQLValueString($total_palavras, "text"),
                       GetSQLValueString($cod_ditado, "text"),
					   GetSQLValueString($datah, "text")
                       );
  $Result1 = mysql_query($insertSQL, $dic2me) or die(mysql_error());

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
A preto, as palavras que foram escritas sem ser erro ortográfico,
<p>
 mas diferente do ditado.
<p>
A azul, todas as outras palavras que escreveste sem qualquer tipo de erro.
<p>
<?php
    session_start();

 //vital 
 for ($i = 0; $i < $c-1; $i++){

$str1=$palavra_correcta[$i];
$str2=$palavra_errada[$i];
$str1=trim($palavra_correcta[$i], "\0");
$str2=trim($palavra_errada[$i], "\0");

$str11=trim($str1, "\t");
$str222=trim($str2, "\t");

$str1111=trim($str11, "\n");
$str2222=trim($str222, "\n");
$str11111=trim($str1111, "\r");
$str22222=trim($str2222, "\r");

$str111111=trim($str11111, "\x0B");
$str222222=trim($str22222, "\x0B");

if (strcmp($str111111, $str222222) == 0)  
{
?>
 <font color="blue"><?php echo  $palavra_correcta[$i]; ?></font> <?php 
}
else
{

 $query_Recordset33 =sprintf("SELECT palavra FROM dic2me_palavras_individuais_PORTUGUES WHERE palavra=%s and palavra is NOT NULL ",
                                                GetSQLValueString($palavra_errada[$i], "text"));


                                        $Recordset33 = mysql_query($query_Recordset33, $dic2me) or die(mysql_error());

                                        $Recordset33 = mysql_query($query_Recordset33, $dic2me);
                                        $totalRows_Recordset33 = mysql_num_rows($Recordset33);




?>
<?php if ($totalRows_Recordset33 == 0)
{ ?>
 <b><font color="black"><?php echo  $palavra_correcta[$i]; ?></font ></b> <?php
} ?>
<?php if ($totalRows_Recordset33 > 0)
{

$vari=".";
$compara=$palavra_errada[$i].$vari;


if (strcmp($compara,  $palavra_correcta[$i]) == 0)
{
$erro="nao";
}
else
{

$erro="sim";
}

?>
 <font color="red"><?php echo  $palavra_correcta[$i]; ?></font> <?php
}

}
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
		
		
		$texto__=explode(".",$texto[$j]);  
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
	


$palavrasemerroerradas[$cc]=$texto[$j];
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


					if (strcmp($palavra_tt,$palavra) != 0)
				{
             $erro="sim";				
				 $errados++;
				 
				 //aqui query para ver erro
				   mysql_select_db($database_dic2me, $dic2me);
					   $query_Recordset2 =sprintf("SELECT palavra FROM dic2me_palavras_individuais_PORTUGUES WHERE palavra=%s and palavra is NOT NULL ",
						GetSQLValueString($palavra, "text")); 
				
					
					$Recordset2 = mysql_query($query_Recordset2, $dic2me) or die(mysql_error());
					
					$Recordset2 = mysql_query($query_Recordset2, $dic2me);
					$totalRows_Recordset1 = mysql_num_rows($Recordset2);
					
				 /// erro palavras dicionario
				
				} 

                 if (($totalRows_Recordset1 == 0))
				 {
				 $erro_ortigrafico="sim";
			   
			   
			     $erro_ort++;
				 
				   $erros_ortografico[$erro_ort]=$palavra;
				  $A=$erro_ort-1;
				  if (strcmp($erros_ortografico[$A],$palavra) != 0)
				  {
				   $A__++;
				  $erros_ortograficos__[$A]=$palavra;
				   $erros_ortografico[$erro_ort]=$palavra;
				  	}		
					
		          }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////				  
///////////////////////////////////////////////////////////////////////////////////////////////////////////				  
////////////////////////////////////////////////////////////////////////////////////////////////////////				  
///////////////////////////////////////////////////////////////////////////////////////////////////////////				
////////////////////////////////////////////////////////////////////////////////////////////////////////////              
///limpeza da palavra como no caso para o dicionario

		
		
		
		$texto__=explode(".",$palavra);  
$texto__=count($texto__);
if ( $texto__ > 0)
{
$tt_palavra=$texto__[1];

}
else
{
$ttt_palavra=$texto[0];

}
if( !empty($ttt_palavra))
{
$palavra_p=$ttt_palavra;
}
if( !empty($tt_palavra))
{
$palavra_p=$ttt_palavra;
}


	$ditado__=explode(".",$palavra_p);  
$tamanho__=count($ditado__);
if ( $tamanho__ > 0)
{
$palavra_l=$ditado__[1];
}
else
{
$palavra_ll=$ditado[1];

}


if( !empty($palavra_l))
{
$palavra_pl=$palavra_l;
}
if( !empty($palavra_ll))
{
$palavra_pl=$palavra_ll;
}

if( !empty($palavra_pl))
{
$palavra=$palavra_pl;
}
if( !empty($palavra_p))
{
$palavra=$palavra_p;
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

		if  ( $texto__ == 0)
		{
		$palavra_t=$texto_L[0];
			

		}

		if  ( $texto__ == 1)
		{
		$palavra_t=$texto_L[1];
		
		
		}

		
		$palavra=$palavra_t;
		
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




$trimmed = trim($palavra, " \t.");
$palavra=$trimmed;
?>




<?php

//fim limpeza das palavras				 
//limpeza do texto

		$ttpalavra=$texto[$j];
		
		$textott__=explode(".",$ttpalavra);  
$textottt__=count($textott__);
if ( $textottt__ == 0)
{
$palavrat=$textott__[0];

}

if ( $textottt__ == 1 )
{
$tpalavrat=$textott__[1];

}



if( !empty($tt_palavra))
{
$palavrat=$tt_palavra;
}
if( !empty($tt_palavra))
{
$palavrat=$tt_palavra;
}


    session_start();
    


		$ditado_Lt____=explode(" ",$palavrat);  
$ditado__t=count($ditado_Lt____);

		if  ( $ditado__t == 0)
		{
		$palavratttt=$ditado_Lt____[0];
		}
		
		//aqui pode haver eerros no ==== e indice:


if ( $ditado__t > 0)
{
		$palavratttt=$ditado_Lt____[1];


		}

		
$palap = trim($palavratttt, "\0");
$palavratttt=$pala_pp;

$palat = trim($palavratttt, "\x0B");
$palavratttt=$pala_t;

$pala = trim($palavratttt, " ");
$palavratttt=$pala;
				$erro_ditado="sim";

 $nao="sim";

				 if (strcmp($ditado[$j],$texto[$i]) == 0) 
				{
				$erro_ditado="nao";
				
				
				}
				 $sim="nao";
				 $recc="sim";
				 if (strcmp($recomecar, $recc) == 0)
				  {
				   if (strcmp($erro_ditado,$sim) == 0) 
				
				 {
				 
				
							  
					
					
						
						 $erros_texto++;
										 $erro_nao_orto[$erros_texto]=$ditado[$j];	
						
						  $A=$erros_texto-1;
						  $A__B=$erros_texto-1;
						  $A__C=$erros_texto-1;
						  $erro_nao_orto__[$A__]=$ditado[$j];
						  $erro_nao_orto__[$A__B]=$ditado[$j];
						   $erro_nao_orto__[$A__C]=$ditado[$j];
						  if (strcmp( $erro_nao_orto[$A],$ditado[$j]) !== 0)
						  {
						   $A__A++;
						   $erro_nao_orto__[$A__A]=$ditado[$j];
							$erro_nao_orto[$erro_ort]=$ditado[$j];
						 
							}										
							}			
								
					}		

		

				
   }
   
   if($certos == 0) {

 
   $erros[$m]=$ditado[$j];
$m++;  
   
   }
}

//pelavras a repetir:
//$ditado[$i]  != $texto[$j]
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
		
				$palavra=$texto[$j];
				
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
echo "Erros dados por ti no ditado\n";
?>
<p>
  <?php 

  if ($A__ == "")
  {
  $mess="Parabens, Não fez erros neste ditado";
        echo "</font> <font color=white size='3pt'>  $mess  </font>";
		?> 
        <p>
		<img src="imagens/Depositphotos_67958629_s-2015.jpg" width="60"> <p><?php
}	

?>
Tabela T2
<p>
<table border="1">
	<tr>
 <th>Errada </th>
            <th>corrigida </th>
<?php
  for($m=0; $m<=$c; $m++) {

if(empty($palavraboa[$m]))
{$erro="erro2";
}
else
{
$total_bom=$palavraboa[$m]." ; ".$total_bom;
}

if(empty($palavraerradas[$m]))

{
$erro="erro2";
}
else
{
$total_mau=$palavraerradas[$m]." ; ".$total_mau;
}


if(empty($palavraerradas[$m]))
{
$erro="erro2";
}
else
{
 mysql_select_db($database_dic2me, $dic2me);
  $insertSQL = sprintf("INSERT INTO dic2me_estatisticas_PORTUGUES (id_aluno, id_palavra, id_TPC, data) VALUES (%s, %s, %s, %s)",
                       GetSQLValueString($_SESSION['MM_Username'], "text"),
                       GetSQLValueString($palavraerradas[$m], "text"),
                       GetSQLValueString($cod_ditado, "text"),
                        GetSQLValueString($datah, "text")
                       );

  $Result1 = mysql_query($insertSQL, $dic2me) or die(mysql_error());

}

?>
<?php
if($palavraerradas[$m] != "")
{
?>
<tr>
            <th><?php echo " $palavraerradas[$m] ";?> </th>
            <th><?php echo "$palavraboa[$m] ";?> </th> <?php
}
 
}
$datah=date("Y-m-d");
  mysql_select_db($database_dic2me, $dic2me);
  $insertSQL = sprintf("INSERT INTO dic2me_estatisticas_PORTUGUES_total (id_aluno, id_palavra, id_TPC ,data) VALUES (%s, %s,%s,%s)",
                       GetSQLValueString($_SESSION['MM_Username'], "text"),
                       GetSQLValueString($total_mau, "text"),
                       GetSQLValueString($cod_ditado, "text"),
                                           GetSQLValueString($datah, "text")
                       );
  $Result1 = mysql_query($insertSQL, $dic2me) or die(mysql_error());
$datah=date("Y-m-d");
  mysql_select_db($database_dic2me, $dic2me);
  $insertSQL = sprintf("INSERT INTO dic2me_estatisticas_PORTUGUES_pormenor_palavras_correctas (id_aluno, id_palavra, id_TPC ,data) VALUES (%s, %s,%s,%s)",
                       GetSQLValueString($_SESSION['MM_Username'], "text"),
                       GetSQLValueString($total_bom, "text"),
                       GetSQLValueString($cod_ditado, "text"),
                                           GetSQLValueString($datah, "text")
                       );
  $Result1 = mysql_query($insertSQL, $dic2me) or die(mysql_error());

	      	
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
Tabela T1
<table border="1">
        <tr>
 <th>Errada </th>
            <th>correcta </th>
<?php
  for($m=0; $m<=$cc; $m++) {

?>
<?php
if($palavrasemerroerradas[$m] != "")
{
?>
<tr>
            <th><?php echo " $palavrasemerroerradas[$m] ";?> </th>
            <th><?php echo "$palavraerro_contexto[$m] ";?> </th> <?php
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
  <p>
  <?php
  
for($m=0; $m<=$n; $m++) {
	
	      echo "</font> <font color=red size='3pt'>$pal_erro[$m] ; </font>"; 
	      
	      }  
	      	
	      ?>
          
 <p></p>
 <p></p>
<p></p>

correcta


   <div class="flex">
    <div>
    

          <br>
          <?php  
		 
if ($tamanho_na_bd< $A__A	)
{	    	
				 for ($i = 0; $i <= $tamanho_na_bd; $i++){
				 $erro="nao";	
				 $semafro="nao";
		
					  for($j=0; $j<=$A__A ; $j++) {
						$semafro="nao";
					
					  if("$texto[$i]" == "$arepetir[$j]") {
					
						$erro="sim";
						
					   }
					   if( "$erro" == "sim") {
						$escreve_erro=$erros_ortograficos__[$j];
						  $semafro="sim";
						  $erro="nao";     
						   echo "</font> <font color=red size='3pt'>$escreve_erro</font>";            
						}
						
						else {
						   $escreve=$ditado[$i];
						   
						   echo "</font> <font color=blue size='2pt'>$escreve</font>"; 
						  } 
						
			 }
					 
						
		}
}

if ($tamanho_na_bd > $A__A	)
{	    	

				 for ($i = 0; $i <= $tamanho_na_bd; $i++){
				 $erro="nao";	
				 $semafro="nao";
	
					  for($j=0; $j<= $A__A ; $j++) {
						$semafro="nao";
					
					  if("$ditado[$i]" == "$erros_ortograficos__[$j]") {
					
						$erro="sim";
						
					   }
					   if( "$erro" == "sim") {
						$escreve_erro=$erros_ortograficos__[$j];
						  $semafro="sim";
						  $erro="nao";     
						   echo "</font> <font color=red size='3pt'>$escreve_erro</font>";            
						}
						
						else {
						   $escreve=$ditado[$i];
						
						   echo "</font> <font color=blue size='2pt'>$escreve</font>"; 
						  } 
						
			 }
					 
						
		}
}
  }}
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
