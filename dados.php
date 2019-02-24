<?php require_once('./Connections/dic2me.php'); ?>
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form")) {
  $insertSQL = sprintf("INSERT INTO dic2me_linhas (id_livro_texto, idioma, ano, nome, descricao, `file`, url, redatora, patrocinador, leitora, escola_autor, nivel, linha_texto,casosleitura) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s,%s)",
                       GetSQLValueString($_POST['id_livro_texto'], "int"),
                       GetSQLValueString($_POST['idioma'], "text"),
                       GetSQLValueString($_POST['ano'], "text"),
                       GetSQLValueString($_POST['nome_texto'], "text"),
                       GetSQLValueString($_POST['descricao'], "text"),
                       GetSQLValueString($_POST['nome_file'], "text"),
                       GetSQLValueString($_POST['url'], "text"),
                       GetSQLValueString($_POST['redatora'], "text"),
                       GetSQLValueString($_POST['patrocinador'], "text"),
                       GetSQLValueString($_POST['leitora'], "text"),
                       GetSQLValueString($_POST['escola'], "text"),
                       GetSQLValueString($_POST['nivel'], "text"),
					   GetSQLValueString($_POST['texto'], "text"),
                         GetSQLValueString($_POST['casosteste'], "text"));



    session_start();
    echo "<h3> PHP List All Session Variables</h3>";
    foreach ($_POST as $key=>$val)
    echo $key." ".$val."<br/>";


echo $insertSQL ;
  mysql_select_db($database_dic2me, $dic2me);
  $Result1 = mysql_query($insertSQL, $dic2me) or die(mysql_error());
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<form name="form" action="<?php echo $editFormAction; ?>" method="POST" target="_self">
nome texto
<input name="nome_texto" type="text" />
nome file
<input name="nome_file" type="text" />
idioma
<input name="idioma" type="text" />
ano
<input name="ano" type="text" />

url
<input name="url" type="text" />

nivel
<input name="nivel" type="text" />

descricao
<input name="descricao" type="text" />
id livro
<input name="id_livro_texto" type="text" />
nome prof
<input name="nome prof" type="text" />
patrocinio
<input name="patrocinador" type="text" />
leitora
<input name="leitora" type="text" />
redatora
<input name="redatora" type="text" />
escola
<input name="escola" type="text" />
ilustradora
<input name="desenho" type="text" />
casos leitura
<input name="casosteste" type="text" />



<textarea name="texto" cols="" rows=""></textarea>
<input type="hidden" name="MM_insert" value="form" />
<input name="" type="submit" />
</form>
</body>
</html>
