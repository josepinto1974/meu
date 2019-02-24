<?php require_once('Connections/bdteste.php'); ?>

<?php
header('Content-Type: text/html; charset=utf-8');





function log_BD ($ficheiro, $erro, $outro, $posicao)
{
   if (mysql_error())
      {
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


		



?>


<form  method="POST" name="dados" target="_self">


<div class="branco"> 
<?php echo "agora";

 echo memory_get_usage() . "branco." . "\n";

 $liga=mysql_select_db($database_bdteste, $bdteste);
   $query_Recordset2 =sprintf("SELECT linha_texto FROM dic2me_linhas WHERE id_linha=%s ",
    GetSQLValueString('1', "text")); 

$Recordset2 = mysql_query($query_Recordset2, $bdteste) or die(mysql_error());

while($arrayRow = mysql_fetch_assoc($Recordset2)) {
	
      $regcodigo=$arrayRow[linha_texto];
   }
  mysqli_close($liga);


$texto = explode(" ", $regcodigo);
$tamanho_na_bd=count($texto);


//FIM processar o que está na BD
//or

//Ler texto escrito

$ditado=explode(" ",$_POST['textarea4']);  
$tamanho_escrito=count($ditado);



//processar diff



print ($tamanho_na_bd);

//Comparacao e correcao
// o que esta na BD
echo "\br"; 
echo "$texto[12]";
echo "FIM texto 12";




echo "$ditado[12]";
//Validar erros
$m=0;
for ($j = 0; $j <= $tamanho_escrito; $j++){
	$certos=0;
	$errados=0;
		 for ($i = 0; $i <= $tamanho_na_bd; $i++){
		
				if ($ditado[$j]  != $texto[$i])
				{
             $erro="sim";				
				 $errados++;
				} 

				if ($ditado[$j]  == $texto[$i])
				{
				$certo="sim";
				$certos++;
				
				} 

				
   }
   
   if($certos == 0) {

   echo "ERRO: $ditado[$j] \n"; 
   $erros[$m]=$ditado[$j];
$m++;  
   
   }
}

//pelavras a repetir:
$m=0;
for ($j = 0; $j <= $tamanho_na_bd; $j++){
	$certos=0;
	$errados=0;
		 for ($i = 0; $i <= $tamanho_escrito; $i++){
		
				if ($ditado[$i]  != $texto[$j])
				{
             $erro="sim";				
				 $errados++;
				} 

				if ($ditado[$i]  == $texto[$j])
				{
				$certo="sim";
				$certos++;
				
				} 

				
   }
   
   if($certos == 0) {
$repetido=$m;   	
$arepetir[$m]=$texto[$j];
$m++;  
   
   }
}
// Palavras a repetir


echo "Palavras a Repetir";
echo "\n";
for($m=0; $m<=$repetido; $m++) {
	
	      echo "</font> <font color=red size='3pt'>$arepetir[$m] ; </font>"; 
	      
	      }  
	      echo '\n';    	
	      ?>
 <p></p>
 <p></p>
 <p></p>


<?php

echo "Texto escrito pelo aluno";
	      echo '\n';    	
	      	      echo "r\n";    	
		 for ($i = 0; $i <= $tamanho_na_bd; $i++){
		 $erro="nao";	
		 $semafro="nao";

		 	  for($j=0; $j<=$repetido ; $j++) {
		 	  	
              if("$texto[$i]" == "$arepetir[$j]") {
            
              	$erro="sim";
              	
               }
               if( "$erro" == "sim") {
               	$escreve_erro=$arepetir[$j];
                  $semafro="sim";
                  $erro="nao";               
               	}
               	
               	else {
                   $escreve=$texto[$i];
                  } 
             }  	
       
  if("$semafro" == "sim") {
      echo "</font> <font color=red size='3pt'>$escreve_erro</font>";       	
   }
else { 
    echo "</font> <font color=blue size='2pt'>$escreve</font>";  
	}
}
    ?>  

<div class="branco"> 
</div>

  </body>
</html>

