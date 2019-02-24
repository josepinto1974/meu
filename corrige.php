<?php require_once('Connections/bdteste.php'); ?><?php
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

$MM_restrictGoTo = "update_tecnico_dados.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($QUERY_STRING) && strlen($QUERY_STRING) > 0) 
  $MM_referrer .= "?" . $QUERY_STRING;
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 

}
?><?php
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}


		

	
  $updateSQL = sprintf("UPDATE itgp_rh SET raio_zona1=%s, longitude_zona1=%s, latitude_zona1=%s, andar_terreno=%s, NOME=%s,  Morada=%s,   Contactos_1=%s,   email=%s,  nif_=%s,  telemovel=%s,   zip=%s,    codigo_encrip=%s, supwin=%s, supli=%s, supservwin=%s, supservlin=%s, win8w1pro=%s, win8=%s, winxp=%s, word=%s, excell=%s, ppoint=%s, project=%s, visio=%s, liword=%s, liexcell=%s, lippoint=%s, liproject=%s, livisio=%s, fedora=%s, ubuntu=%s, centos=%s, BI=%s WHERE id=%s AND email=%s",
 GetSQLValueString($_POST['raio_zona1'], "text"),	 
 GetSQLValueString($_POST['longitude_zona1'], "text"),	 
 GetSQLValueString($_POST['latitude_zona1'], "text"),	 
 GetSQLValueString($_POST['andar_terreno'], "text"),	                        
                         GetSQLValueString($_POST['nome'], "text"),
                
                       GetSQLValueString($_POST['email'], "text")
					      					      
					      	);



 $liga=mysql_select_db($database_bdteste, $bdteste);
  $Result1 = mysql_query($updateSQL, $bdteste);
    log_BD ('./LOGS/ITGP/update_tecnico_dados.txt', mysql_error(), $updateSQL, "P2");
mysqli_close($liga);
  $updateGoTo = "informaregisto.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_update_dados_construtor = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_update_dados_construtor = $_SESSION['MM_Username'];
}
mysql_select_db($database_bdteste, $bdteste);
$query_update_dados_construtor = sprintf("SELECT * FROM dic2me_linhas WHERE id_livro_texto = %s", GetSQLValueString($_SESSION['INT_TET'], "text"));
$update_dados_construtor = mysql_query($query_update_dados_construtor, $bdteste) ;
    log_BD ('./LOGS/ITGP/update_tecnico_dados.txt', mysql_error(), $query_update_dados_construtor, "P22");


$row_update_dados_construtor = mysql_fetch_assoc($update_dados_construtor);
$totalRows_update_dados_construtor = mysql_num_rows($update_dados_construtor);
mysqli_close($liga);

$OMAIL=$_POST['email'];


?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">


<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
 <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link rel="stylesheet" href="styles.css">
   <script src="//code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
      <link rel="stylesheet" href="styles.css">
      <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="paragrafos.css">
   <link rel="stylesheet" href="val.css">


<link href="css/butoes.css" rel="stylesheet" type="text/css" />
 
<title></title>


<script type="text/javascript">
   


      </script>

<!--

Para validação de campos
-->
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<!--

Fim Para validação de campos
-->




  </head>



<body>

<!--
MENU

-->

   <div class="container-fluid">
      <h1><div class="col-md-12  " align="center"><img style="max-width:100%;height:auto;" src="./imagens/logo_meu.png" alt="ITGP" /></div></h1>
       <h1><div class="col-md-12  " align="center"><br></div></h1>
  

<!--
FIM MENU

-->




<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />







<form action="<?php echo $editFormAction; ?>" method="POST" name="dados" target="_self">


<div class="branco"> 
<?php echo memory_get_usage() . "branco." . "\n"; ?>
<?php echo $_POST['textarea4']  ?>
</div>
<div class="branco"> 
</div>
<div class="bottom_menu_update_tec1 ">
			<legend><letras>Dados:</letras><letras22> <?php echo $cliente_base ?><letras22> </legend> 
			<div class="bottom_menu_update_tec2 col-md-3 col-md-offset-3 ; col-xs-1 col-sm-4">   
			    <div style="float: left; width: 90%;">
							
							Seu nome:
							        <span class="textfieldRequiredMsg">texto guardado</span><span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span><span id="sprytextfield6">
							        <label>
							        <input name="nome" type="text" id="nome" value="<?php echo $row_update_dados_construtor['linha_texto']; ?>" size="55" />
							        </label>
							        <span class="textfieldRequiredMsg">Obrigatorio.</span><span class="textfieldMaxCharsMsg">Utilize um nome mais pequeno.</span></span>
							
							</div>
							
			   </div>
			   
	

</div>



  <div class="branco"> 
</div>

<input type="hidden" name="MM_insert" value="dados" />
  <input name="hiddenField" type="hidden" id="hiddenField" value="<?php echo $row_update_dados_construtor['id']; ?>" />
<input type="hidden" name="MM_update" value="dados" />





<br/>
<br/>
  
<br></br>
<br></br>

   

<script type="text/javascript">

var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email", {isRequired:true, minChars:5, maxChars:90});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "integer", {isRequired:true, minChars:7, maxChars:40});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "integer", {isRequired:false, minChars:7, maxChars:15});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {isRequired:true, minChars:5, maxChars:15});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "integer", {isRequired:true, minChars:5, maxChars:15});
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8", "none", {isRequired:true, maxChars:150, minChars:10});
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9", "none", {isRequired:true, minChars:8, maxChars:150});
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10", "none", {isRequired:true, minChars:4, maxChars:20});
var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytextfield11", "none", {isRequired:true, minChars:4, maxChars:40});
var sprytextfield99 = new Spry.Widget.ValidationTextField("sprytextfield11", "none", {isRequired:true, minChars:8, maxChars:50});


</script>


    </form>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>





<?php
mysql_free_result($update_dados_construtor);
?>
