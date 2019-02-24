<?php require_once('./funcoes/funcoes.php'); ?>
<?php require_once('./Connections/dic2me.php'); ?>

<?php 
function inserir_dados_mensagem_cclientes_novo($palavra)
{
	
	
global $username_dic2me, $hostname_dic2me, $password_dic2me, $database_dic2me, $tamanho_na_bd;

$dic2me = mysql_pconnect($hostname_dic2me, $username_dic2me, $password_dic2me);
   mysql_select_db($database_dic2me, $dic2me);



 $Recordset22 =sprintf("use itgptech_interna ");
mysql_query($Recordset22, $dic2me);
	
 require_once('./Connections/dic2me.php'); 
$dic2me = mysql_pconnect($hostname_dic2me, $username_dic2me, $password_dic2me);
   mysql_select_db($database_dic2me, $dic2me);


$nomeproprio="1";
$insertSQL = sprintf("INSERT INTO ddic2me2_palavras_testes (palavra) VALUES (%s)",$palavra);
													 



# $insertSQLtempos = sprintf("INSERT INTO dic2me_email_de_clientes (emailcontacto, nome,contacto_telefone,assunto,conteudo,pais,ip) VALUES (%s, %s,%s, %s,%s, %s,%s)",
#							   ($ip));

										   
 #$insertSQLtempos = sprintf("INSERT INTO dic2me_email_de_clientes (emailcontacto, nome,contacto_telefone,assunto,conteudo,pais,ip) VALUES (%s, %s,%s, %s,%s, %s,%s)",
				#			   GetSQLValueString($emailcontacto, "text"),
				#			   GetSQLValueString($nome, "text"),
				#			   GetSQLValueString($telephone, "text"),
				#			   GetSQLValueString($assunto, "text"),
				#			   GetSQLValueString($conteudo, "text"),
				#			   GetSQLValueString($pais, "text"),
				#			   GetSQLValueString($ip, "text"));
 
 
 
# escrevefile('registos_alunos_do_enc_tudo',  $insertSQLtempos);
 
require_once('./Connections/dic2me.php'); 
 


global $username_dic2me, $hostname_dic2me, $password_dic2me, $database_dic2me, $tamanho_na_bd;

$dic2me = mysql_pconnect($hostname_dic2me, $username_dic2me, $password_dic2me);
   mysql_select_db($database_dic2me, $dic2me);

require_once('./Connections/dic2me.php'); 
 

echo "entra000000";

global $username_dic2me, $hostname_dic2me, $password_dic2me, $database_dic2me, $tamanho_na_bd;

$dic2me = mysql_pconnect($hostname_dic2me, $username_dic2me, $password_dic2me);
   mysql_select_db($database_dic2me, $dic2me);

 $Recordset22 =sprintf("use itgptech_interna ");
mysql_query($Recordset22, $dic2me) ;



?><br/><?php

####echo $insertSQL_TPC_FONTE_so_para_referenciador; ovos3po
echo "entra12345";
echo $insertSQL;
mysql_query($insertSQL, $dic2me);
echo "casota";
}








$myfile = fopen("portuguese.dic", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  inserir_dados_mensagem_cclientes_novo($myfile);
  echo fgets($myfile);
  ?><br><?php
}

?> 