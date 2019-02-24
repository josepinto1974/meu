<?php require_once('Connections/bdteste.php');?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>

 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
 
 <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    

<title>Registo de técnicos</title>





<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script language="JavaScript" src="chainselect_registo_alarme.js" type="text/javascript">
</script>
<script language="JavaScript" src="config_PRD.js" type="text/javascript"></script>
<script type="text/javascript">
   
   





function mostratooltip(event) {

	var scrOfX = 0, scrOfY = 0;
	if( typeof( window.pageYOffset ) == 'number' ) {
		scrOfY = window.pageYOffset; scrOfX = window.pageXOffset;
	} else if( document.body && ( document.body.scrollLeft || document.body.scrollTop ) ) {
		scrOfY = document.body.scrollTop; scrOfX = document.body.scrollLeft;
	} else if( document.documentElement && ( document.documentElement.scrollLeft || document.documentElement.scrollTop ) ) {

		scrOfY = document.documentElement.scrollTop; 
		scrOfX = document.documentElement.scrollLeft;
	}

	X=event.clientX + scrOfX;
	Y=event.clientY + scrOfY + 22;
	
	document.getElementById('tecnologias_info').style.left=X+"px";
	document.getElementById('tecnologias_info').style.top=Y+"px";
	document.getElementById('tecnologias_info').style.visibility='visible';
}






function valida_popup(form) {
Item = form.pai.selectedIndex;
    Result00 = form.pai.options[Item].text;
	if (( Result00 == "" ) || ( Result00 == "..." ))
	{
	alerta1="SIM";
	alert("Falta indicar o PAIS- Ver ab Localizaçao");
	}
	 Item = form.make.selectedIndex;
    Result11 = form.make.options[Item].text;
	if (( Result11 == "" ) || ( Result11 == "..." ) || ( Result11 == "Not available" ))
	{
	alerta2="SIM";
	alert("Falta indicar o DISTRITO- Ver Tab Localizaçao");
	}
	 Item = form.type.selectedIndex;
    Result22 = form.type.options[Item].text;
	if (( Result22 == "" ) || ( Result22 == "..." ) || ( Result22 == "Not available" ))
	{
	alerta3="SIM";
	alert("Falta indicar o CONCELHO- Ver Tab Localizaçao");
	}
	
	Item = form.model.selectedIndex;
    Result222 = form.model.options[Item].text;
	if (( Result222 == "" ) || ( Result222 == "..." ) || ( Result222 == "Not available" ))
	{
		aler="SIM";
	alerta3="SIM";
	alert("Falta indicar a FREGUESIA- Ver Tab Localizaçao");
	}

Result223 = form.morada.value;

	if (( Result223 == "" ) || ( Result223 == "..." ) || ( Result223 == "Not available" ))
	{
		aler="SIM";
	alerta3="SIM";
	alert("Falta indicar a MORADA- Ver Tab Localizaçao");
	}
	
	}



function valida_pai(form) {

    Item = form.pai.selectedIndex;
    Result00 = form.pai.options[Item].text;
	  document.form1.pai_ob.value = Result00;
	  }
	  
function valida_dis(form) {

    Item = form.make.selectedIndex;
    Result11 = form.make.options[Item].text;
	  document.form1.dis_ob.value = Result11;
	  }

function valida_conc(form) {

    Item = form.type.selectedIndex;
    Result22 = form.type.options[Item].text;
	  document.form1.dis_conc.value = Result22;
	  }	  	  
		  
function valida_freg(form) {

    Item = form.model.selectedIndex;
    Result33 = form.model.options[Item].text;
	  document.form1.dis_freg.value = Result33;
	  }	 
	  
function wri_P(form) {
  valida_popup(form);
    Item = form.pai.selectedIndex;
    Result = form.pai.options[Item].text;
	  document.form1.pais.value = Result;
	  
	  Item1 = form.model.selectedIndex;
    Result1a = form.model.options[Item1].text;
	
	ResultMO = form.morada.value;

if (Result !="...")
{
<?php $Submit_Form="Submit Form"; ?>	  




	  
	  Item = form.pai.selectedIndex;
    Result = form.pai.options[Item].text;
	  document.form1.pais.value = Result;


 Item = form.make.selectedIndex;
    Result = form.make.options[Item].text;
	if (Result == '')
	{
	Result = '%';
	}
	  document.form1.hma.value = Result;
	
	 
	
   Item = form.type.selectedIndex;
    Result = form.type.options[Item].text;
	if (Result == '')
	{
	Result = '%';
	}
	  document.form1.hmb.value = Result;

	  
	   Item = form.model.selectedIndex;
    Result = form.model.options[Item].text;
	if (Result == '')
	{
	Result = '%';
	}
	  document.form1.hmc.value = Result;
	  

}
else
{

$eeee="0";
}	  
  }

      </script>


<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
.




<?php 
$lingua_ = $_GET['lingua'];
?>
<input type="hidden" name="lingual" id="lingual" value=<?php echo $lingua_ ?>/>
 
 <script type="text/javascript">
 // Leitura de lingua para COOKIE
 
// lingas=form1.lingual.value;
 //createCookie('primeiro', lingas, 0);


 
 </script>






 <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    



---
 <style>


pp {
    display: block;
    margin-top: 1em;
    margin-bottom: 1,2em;
    margin-left: 0;
    margin-right: 0;
     color:blue;
   font-weight: bold;
    font-size: 14px;
}


pa {
    display: block;
    margin-top: 0,3em;
    margin-bottom: 0,2em;
    margin-left: 0;
    margin-right: 0;
   
    font-size: 13px;
}

paa {
    display: block;
    margin-top: 0,3em;
    margin-bottom: 0,2em;
    margin-left: 0;
    margin-right: 0;
   
    font-size: 13px;
}


ppp {
    display: block;
    margin-top: 3em;
    margin-bottom: 2.5em;
    margin-left: 0;
    margin-right: 0;
     color:#00CCFF;
   font-weight: bold;
    font-size: 35px;

}




preco {
    display: block;
    margin-top: 1em;
    margin-bottom: 1em;
    margin-left: 0;
    margin-right: 0;
     color:#00CCFF;
   font-weight: bold;
    font-size: 25px;

}



#footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
   padding:45px;	 	 
}

#footer2 {
   background-color:#eeeeee;
    color:white;
    clear:both;
    text-align:center;
   padding:45px;	 	 
}


table.formatHTML5 {
width: 100%;
border-collapse:collapse;
text-align:left;
color: #606060;
}    
    
      
      h1 {
    color:white;
   
    font-size:180%;
};
   
   
         h2 {
    color:blue;
   font-weight: bold;
    font-size:180%;
};   
      
            h22 {
    color:blue;
   
    font-size:50%;
};



            h3 {
    color:#0066FF;
   
    font-size: 2.5em;
};


    </style>
<script type="text/javascript" src="https://platform.verishow.com/client?get=chat&aid=8474&call_button=true&img_url=https://platform.verishow.com/resources/embed_images/tab-right-blue.png&img_alt=LIVE EXPERT&alignment=right&isDynamic=true&label=LIVE EXPERT&agent_img=https://platform.verishow.com/resources/embed_images/agent1.jpg"></script>
  </head>

---


<body>

<!--
MENU

-->

   <div class="container-fluid">
      <h1><div class="col-md-12  " align="center"><img style="max-width:100%;height:auto;" src="./imagens/logo_meu.png" alt="ITGP" /></div></h1>
       <h1><div class="col-md-12  " align="center"><br></div></h1>
             <h1><div class="col-md-12  " align="center">
  

 <div class="col-md-6 col-md-offset-5 ; col-xs-1 col-sm-4">

<div id='cssmenu'>
<ul>
   <li class='active'><a href='index.php'>Home</a></li>
   <li><a href='#'>Login</a></li>
</ul>
</div>

</div></h1></div>

<!--
FIM MENU

-->


<div class="row">
  
  <div class="col-md-6 col-md-offset-2 ; col-xs-1 col-sm-4">
  <br>
  <br>
  <br>
  <br>
  <br>
  <h3>
  <?php 
session_start(); 


if ($_POST['email'] == '')

{

  if ($_POST["vercode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')  { echo 'Lamentamos, mas os valores não eram coincidentes com a imagem' ?> <a href="http://itgptechnologies.com/registo_seguranca.html">Faça de novo a validação</a> <?php die("Obrigado");
     session_destroy();
      echo  '<strong>Incorrect verification code.</strong>'; 
      }  else { 
                 // add form data processing code here 
                 echo  '<strong></strong>'; 
  };
};  

 
?>
  </h3>
   
  </div>
</div>





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

function get_client_ip() {
    $ipaddress = '';
    if ($_SERVER['HTTP_CLIENT_IP'])
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if($_SERVER['HTTP_X_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if($_SERVER['HTTP_X_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if($_SERVER['HTTP_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if($_SERVER['HTTP_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if($_SERVER['REMOTE_ADDR'])
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

$IP_AD=get_client_ip();


if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "dados")) {
  $insertSQL = sprintf("INSERT INTO itgp_empresa (NOME, SITE_WEB, nome_empresa, Morada,  Contactos_1,  email_validacao, email_direccao, pass, `data`, activo, activo_servicos,  nif, telemovel,  zip, pais, distrito, conselho, freguesia,IP , codigo_encrip,num_computadores_win,num_computadores_linux,num_computadores_desk,num_computadores_port,num_serv_linux_dentro,num_serv_linux_fora,num_serv_wind, fedora,ubuntu,centos,hpux, Solaris,NOS,MEO,VODA,OUTRO,REDE_GB,NAS_SERV,Grande_nec_storage,Serv_wind_in_house,Serv_linux_in_house,Serv_wind_out_house,Serv_linux_out_house) VALUES (%s,%s,%s,%s,%s,%s,%s,%s,%s, %s,%s,%s, %s,%s,%s,%s,%s,%s, %s,%s,%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s,%s, %s,%s, %s, %s, %s, %s, %s, %s, %s, %s)",
                                        
                       GetSQLValueString($_POST['nomepessoa'], "text"),
                       GetSQLValueString($_POST['ender_web'], "text"),
                       GetSQLValueString($_POST['nomeempresa'], "text"), 
                       GetSQLValueString($_POST['morada'], "text"),                     
                       GetSQLValueString($_POST['tele'], "text"),                      
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['email_dir'], "text"),
                       GetSQLValueString(sha1($_POST['pass']), "text"),
                       GetSQLValueString($_POST['datah'], "text"),
                       GetSQLValueString($_POST['activo'], "text"),
                       GetSQLValueString($_POST['activo_servicos'], "text"),
                       GetSQLValueString($_POST['NIF'], "text"),
                       GetSQLValueString($_POST['movel'], "text"),                 
					   GetSQLValueString($_POST['zip'], "text"),
					   GetSQLValueString($_POST['pais'], "text"),
                       GetSQLValueString($_POST['hma'], "text"),
                       GetSQLValueString($_POST['hmb'], "text"),
                       GetSQLValueString($_POST['hmc'], "text"),
					   GetSQLValueString($IP_AD, "text"),					  
					      GetSQLValueString(sha1($_POST['email']), "text"),
		
                   GetSQLValueString($_POST['num_comp_win'], "text"),
					     GetSQLValueString($_POST['num_com_li'], "text"),	
					     GetSQLValueString($_POST['num_comp_desk'], "text"),
					      
					      GetSQLValueString($_POST['num_portatil'], "text"),
					      GetSQLValueString($_POST['num_serv_linux_in'], "text"),
					      GetSQLValueString($_POST['num_serv_linux_out'], "text"),
	
					      GetSQLValueString($_POST['num_serv_win'], "text"),
               					      
					      
					          GetSQLValueString($_POST['fedora'], "text"),
					          GetSQLValueString($_POST['ubuntu'], "text"),
					          GetSQLValueString($_POST['centos'], "text"),
					          GetSQLValueString($_POST['hpux'], "text"),          			
                 			GetSQLValueString($_POST['solaris'], "text"),
                 			
                 		
					          
					          GetSQLValueString($_POST['nos'], "text"),
					          GetSQLValueString($_POST['meo'], "text"),
					          GetSQLValueString($_POST['voda'], "text"),          			
                 			GetSQLValueString($_POST['outro'], "text"),
                 			GetSQLValueString($_POST['rede'], "text"),
					          GetSQLValueString($_POST['nas_serv'], "text"),          			
                 			GetSQLValueString($_POST['grande_storage'], "text"),
                 		
                 			GetSQLValueString($_POST['win_serv_in_house'], "text"),
                 			GetSQLValueString($_POST['Linux_serv_in_house'], "text"),
                 			
                 			GetSQLValueString($_POST['win_ser_out_office'], "text"),
                 			GetSQLValueString($_POST['Linux_serv_out_office'], "text")
					          
					      					      
					      	);

  mysql_select_db($database_bdteste, $bdteste);

//ALAERTA fazer o getSQL
  
$OMAIL=$_POST['email'];
$ONOME=$_POST['nome'];
$BIB=$_POST['NIF'];
$query_Recordset2 = "select email_validacao from itgp_empresa where (email_validacao='$OMAIL' or nif='$BIB') ";

$Recordset2 = mysql_query($query_Recordset2, $bdteste) or die(mysql_error());

$totalRows_Recordset2 = mysql_num_rows($Recordset2);

$query_Recordset9 = "select ip from itgp_empresa where IP='$IP_AD' ";

$Recordset9 = mysql_query($query_Recordset9, $bdteste) or die(mysql_error());

$totalRows_Recordset9 = mysql_num_rows($Recordset9);

if (  $totalRows_Recordset9 >0 )
{
?>

<div class="row">
  
  <div class="col-md-6 col-md-offset-3 ; col-xs-1 col-sm-4">
  <ppp>Já houve um registo neste IP <?php $IP_AD ?> .Se nunca fez um registo na ITGP, contacte os nossos serviços.Isto é uma medida de segurança</ppp>
  <p></p>
  <?php
  session_destroy();
  exit;
   ?>
  </div>
</div>
<?php }


if ( $totalRows_Recordset2 > 0  || $totalRows_Recordset9 >0 )
{
?>

<div class="row">
  
  <div class="col-md-6 col-md-offset-3 ; col-xs-1 col-sm-4">
  <ppp>O E-Mail <?php $OMAIL=$_POST['email']; echo $OMAIL ?> já está registado (email, e ou cartão de identificação igual)</ppp>
  <p></p>
  session_destroy();
  exit;
   
  </div>
</div>





<?php

}
else
{

 $Result1 = mysql_query($insertSQL, $bdteste) or die(mysql_error());


   $cabecalho="From:jose.pinto@itgptechnologies.com\r\n";
$cabecalho=$cabecalho . "Content-Type: text/html;\r\n charset=\"iso-8859-1\"\r\n";
$mensagem="<html><head><title>Mensagem</title></head><body><p><h2>Clique neste <a href=\"http://www.itgptec.com//valida_registo.php?&codigomail=" . $_POST['email'] . "&codigoencri=" . sha1($_POST['email']) . "&codigonome=" . $_POST['nome'] . "&REGISTO=" . "SIM" . "&UP_DATES=" . "NAO" . "\">link</a> para activar a conta.<br>Não se esqueça de enviar a rh@itgptechnologies.com um email com um scan do seu BI, ou cartão de cidadão</br></h2></body></html>";
mail($_POST['email'], "Validar conta", $mensagem, $cabecalho); ?>



<div class="row">
  
  <div class="col-md-6 col-md-offset-2 ; col-xs-1 col-sm-4">
  <ppp>Para concluir o registo, <?php $_POST['email'] ?> clique no link enviado por mail pelos nossos serviços , Obrigado.</ppp>
  <p></p>
  
   
  </div>
</div>


<?php 
}
}
?>





<form action="<?php echo $editFormAction; ?>" method="POST" enctype="multipart/form-data" name="form1" target="_self">
<body onLoad="initListGroup('vehicles', document.forms[0].pai ,document.forms[0].make, document.forms[0].type, document.forms[0].model)">

<?php if ($_POST['email'] == "") 
{ ?>

<table width="923" height="46" border="0" align="center">
  <tr>
    <td width="900" align="center" valign="top"><table width="890" height="489" border="0">
      <tr>
        <td height="37" colspan="2"><label class="registoclientes_titulo"><span class="style20">Registo de ficha para cliente empresarial </span><br />
        </label></td>
        </tr>
         <tr>
        <td height="49" class="style20">Designação da empresa</td>
        <td><span id="sprytextfield91">
        <label>
        <input name="nomeempresa" type="text" id="nomeempresa" size="55" maxlength="150"  value="" />
        </label>
        <span class="textfieldRequiredMsg">obrigatório</span><span class="textfieldMinCharsMsg">Número minimo de caracteres são 2 .</span><span class="textfieldMaxCharsMsg">O número máximo de caracteres, são 150 </span></span></td>
      </tr>
      
               <tr>
        <td height="49" class="style20">Endereço WEB do site da empresa</td>
        <td><span id="sprytextfield9">
        <label>
        <input name="ender_web" type="text" id="ender_web" size="55" maxlength="150"  value="" />
        </label>
        <span class="textfieldRequiredMsg">obrigatório</span><span class="textfieldMinCharsMsg">Número minimo de caracteres são 8 .</span><span class="textfieldMaxCharsMsg">O número máximo de caracteres, são 150 </span></span></td>
      </tr>
      
       <tr>
        <td height="49" class="style20">Nome completo responsável informática ou da  empresa</td>
        <td><span id="sprytextfield99">
        <label>
        <input name="nomepessoa" type="text" id="nomepessoa" size="55" maxlength="150"  value="" />
        </label>
        <span class="textfieldRequiredMsg">obrigatório</span><span class="textfieldMinCharsMsg">Número minimo de caracteres são 8 .</span><span class="textfieldMaxCharsMsg">O número máximo de caracteres, são 150 </span></span></td>
      </tr>
      <tr>
        <td height="53" class="style20">NIF</td>
        <td><span id="sprytextfield5">
        <label>
        <input type="text" name="NIF" id="NIF" size="20" value=""/>
        </label>
        <span class="textfieldRequiredMsg">obrigatório .</span><span class="textfieldInvalidFormatMsg">Formato invalido.</span><span class="textfieldMinCharsMsg">Número minimo de caracteres são 5.</span><span class="textfieldMaxCharsMsg">O número máximo de caracteres, são 15.</span></span></td>
      </tr>
      
--
 <tr>
        <td height="49" class="style20">NIB bancário com que efectuara pagamentos (caso não opte por multibanco)</td>
        <td><span id="sprytextfield200">
        <label>
        <input name="nib1" type="text" id="nib1" size="40" maxlength="50"  value="" />
        </label>
        <span class="textfieldInvalidFormatMsg">Formato inválido</span><span class="textfieldMinCharsMsg">Número minimo de caracteres são 10 .</span><span class="textfieldMaxCharsMsg">O número máximo de caracteres, são 40 </span></span></td>
      </tr>
      
       <tr>
        <td height="49" class="style20">Outro NIB bancário com que efectuara pagamentos (caso não opte por multibanco)</td>
        <td><span id="sprytextfield200">
        <label>
        <input name="nib2" type="text" id="nib2" size="40" maxlength="50"  value="" />
        </label>
        <span class="textfieldInvalidFormatMsg">Formato inválido</span><span class="textfieldMinCharsMsg">Número minimo de caracteres são 10 .</span><span class="textfieldMaxCharsMsg">O número máximo de caracteres, são 40 </span></span></td>
      </tr>
--      
      
      <tr>
        <td class="style20">Morada</td>
        <td><span id="sprytextfield8">
        <label>
        <input type="text" name="morada" id="morada" size="55" maxlength="150" value=""/>
        </label>
        <span class="textfieldRequiredMsg">Obrigatório.</span><span class="textfieldMaxCharsMsg">O número máximo de caracteres, são 150.</span><span class="textfieldMinCharsMsg">O número minimo de caracteres são 10.</span></span></td>
      </tr>
      <tr>
        <td class="style20">Código Postal</td>
        <td><span id="sprytextfield10">
        <label>
        <input type="text" name="zip" id="zip" value="" />
        </label>
        <span class="textfieldRequiredMsg">obrigatório</span><span class="textfieldMinCharsMsg">O número minimo de caracteres são 4 .</span><span class="textfieldMaxCharsMsg">O número máximo de caracteres, são 20.</span></span></td>
      </tr>
   
      
      
         <td>País*</td>
                        <td><select name="pai" class="style2" id="pai" style="width:110px;" onChange="valida_pai(this.form);" >
                        </select>
                          <span id="sprytextfield111">
                          <label>
                          <input name="pai_ob" type="hidden" id="pai_ob" size="1" />
                          </label>
                          <span class="textfieldRequiredMsg">Obrigatorio.</span></span><input name="datah" type="hidden" id="datah" value="<?php echo date("Y-m-d H:i:s"); ?>" /></td>
                      </tr>
                      <tr>
                        <td>Distrito/Região*</td>
                        <td><select name="make" class="style2"  id="make" style="width:180px;" onChange="valida_dis(this.form);" >
                        </select>
                          <span id="sprytextfield211">
                          <label>
                          <input name="dis_ob" type="hidden" id="dis_ob" size="1" />
                          </label>
                          <span class="textfieldRequiredMsg">Obrigatorio.</span></span></td>
                      </tr>
                      <tr>
                        <td>Concelho*</td>
                        <td><select name="type" class="style2"  id="type" style="width:180px;" onChange="valida_conc(this.form);" >
                        </select>
                          <span id="sprytextfield311">
                          <label>
                          <input name="dis_conc" type="hidden" id="dis_conc" size="1" />
                          </label>
                          <span class="textfieldRequiredMsg">Obrigatorio.</span></span></td>
                      </tr>
                      <tr>
                        <td>Freguesia*</td>
                        <td><select name="model" class="style2"  id="model" style="width:180px;"  onChange="valida_freg(this.form);" >
                        </select>
                          <span id="sprytextfield511">
                          <input type="hidden" name="dis_freg" id="dis_freg" />
                          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                      </tr>
                      <tr>


      <tr>
        <td class="style20">Password</td>
        <td><span id="sprytextfield1">
        <label>
        <input name="pass" type="password" id="pass" size="20"  maxlength="20" value="" />
        </label>
        <span class="textfieldRequiredMsg">obrigatório</span><span class="textfieldMaxCharsMsg">O número máximo de caracteres: 15.</span><span class="textfieldMinCharsMsg">O número de caracteres minimo é de 5</span></span></td>
      </tr>
      <tr>
        <td class="style20">Email:</td>
        <td>
          <label></label>        <p><span id="sprytextfield2">
          <label>
          <input type="text" name="email" id="email" size="55" maxlength="90" value=""/>
          </label>
         <span class="textfieldRequiredMsg">Coloque um email válido.</span><span class="textfieldInvalidFormatMsg">Formato de email inválido</span><span class="textfieldMinCharsMsg">O número de caracteres minimo é de 5.</span><span class="textfieldMaxCharsMsg">O número máximo de caracteres, é de 90</span></span></p></td>
        </tr>
        
        <tr>
        <td class="style20">Email do responsável  administração:</td>
        <td>
          <label></label>        <p><span id="sprytextfield23">
          <label>
          <input type="text" name="email_dir" id="email_dir" size="55" maxlength="90" value=""/>
          </label>
         <span class="textfieldRequiredMsg">Coloque um email válido.</span><span class="textfieldInvalidFormatMsg">Formato de email inválido</span><span class="textfieldMinCharsMsg">O número de caracteres minimo é de 5.</span><span class="textfieldMaxCharsMsg">O número máximo de caracteres, é de 90</span></span></p></td>
        </tr>
        
      <tr>
        <td height="45" class="style20">Telefone fixo</td>
        <td><label><span id="sprytextfield3">
        <input type="text" name="tele" id="tele" size="35" maxlength="35" value="" />
        <span class="textfieldInvalidFormatMsg">Formato inválido</span><span class="textfieldRequiredMsg">obrigatório.</span><span class="textfieldMaxCharsMsg">O número máximo de caracteres, é de 40</span><span class="textfieldMinCharsMsg">O número de caracteres minimo é de 7.</span></span></label></td>
        </tr>
      <tr>
        <td height="33" class="style20">Telemóvel</td>
        <td><label><span id="sprytextfield4">
        <input type="text" name="movel" id="movel" size="35" maxlength="35" value="" />
        <span class="textfieldMaxCharsMsg"> número máximo de caracteres, é de 40</span><span class="textfieldInvalidFormatMsg">caracteres invalidos, só números.</span><span class="textfieldRequiredMsg">obrigatório</span><span class="textfieldMinCharsMsg">O número de caracteres minimo é de 7.</span></span></label></td>
        </tr>      
      <tr>
        <td height="43" class="registocliente_outros">&nbsp;</td>
        <td>
          <input name="activo" type="hidden" id="activo" value="NAO" />
          <input name="activo_servicos" type="hidden" id="activo" value="NAO" />
          <input name="linguas" type="hidden" id="linguas" value="POR" />
          <input name="datah" type="hidden" id="datah" value=<?php echo date("Y-m-d H:i:s"); ?>"Ymd His" /></td>
      </tr>
    </table></td>
    </tr>
</table>
<input type="hidden" name="hmb" id="hmb" value=""/>
                              <input type="hidden" name="ling" id="ling" value=""/>
                              <input type="hidden" name="pais" id="pais" value=""/>
                              <input type="hidden" name="hmc" id="hmc" value="%"/>
                      <input type="hidden" name="hma" id="hma" value="%"/>            
                      
                      


<input id='lixo4'  type='hidden' value='0' name='Linux_serv_in_house'>
<input id='lixo44'  type='hidden' value='0' name='Linux_serv_out_office'>
<input id='lixo444'  type='hidden' value='0' name='win_serv_in_house'>
<input id='lixo4444'  type='hidden' value='0' name='win_ser_out_office'>
<input id='lixo44445'  type='hidden' value='0' name='nas_serv'>
<input id='lixo44444'  type='hidden' value='0' name='rede'>
<input id='lixo444441'  type='hidden' value='0' name='nos'>
<input id='lixo444442'  type='hidden' value='0' name='meo'>
<input id='lixo444443'  type='hidden' value='0' name='voda'>
<input id='lixo4444433'  type='hidden' value='0' name='outro'>
<input id='lixo4444439'  type='hidden' value='0' name='grande_storage'>



<input id='lixo5'  type='hidden' value='0' name='fedora'>
<input id='lixo55'  type='hidden' value='0' name='ubuntu'>
<input id='lixo555'  type='hidden' value='0' name='centos'>
<input id='lixo5552'  type='hidden' value='0' name='hpux'>
<input id='lixo5551'  type='hidden' value='0' name='solaris'>

<input id='lixo6'  type='hidden' value='0' name='nove_seis'>
<input id='lixo66'  type='hidden' value='0' name='sete_nove'>
<input id='lixo666'  type='hidden' value='0' name='seis_meia'>
<input id='lixo6666'  type='hidden' value='0' name='noite'>
<input id='lixo66666'  type='hidden' value='0' name='dia'>



         <td height="37" colspan="2"<span class="style20">Deverá preencher os dados em baixo indicados, em caso de dúvidas, contacte a ITGP</span><br />


<div class="row">
  
 <div class="col-md-12 col-md-offset-2 ; col-xs-1 col-sm-4">
    <div class="col-md-12  col-md-offset-0 ; col-xs-6 col-sm-4"; ><table class="tftable" border="0" ;>
              <h1><div class="col-md-12  " align="center"></div></h1>
                  
<tr bgcolor="#585858"><th height="80px"; width="150px";><h1>Descricao parque informático</h1></th><th height="50px"; width="150px";></th><th height="50px";></div></th></tr>
<tr bgcolor="#ffffff">
     <td height="53" width="150px" class="style20">Número computadores com Windows</td>
        <td><span id="sprytextfield55">
        <label>
        <input type="text" name="num_comp_win" id="num_comp_win" size="20" value=""/>
        </label>
       <span class="textfieldInvalidFormatMsg">Formato invalido.</span><span class="textfieldMinCharsMsg">Número minimo de caracteres são 5.</span><span class="textfieldMaxCharsMsg">O número máximo de caracteres, são 15.</span></span></td>
   
   
      </tr>
      
      

<tr bgcolor="#CEF6F5">

     <td height="53" class="style20">Número computadores com Linux</td>
        <td><span id="sprytextfield55">
        <label>
        <input type="text" name="num_com_li" id="num_com_li" size="20" value=""/>
        </label>
        <span class="textfieldInvalidFormatMsg">Formato invalido.</span><span class="textfieldMaxCharsMsg">O número máximo de caracteres, são 3.</span></span></td>
   
   
      </tr>

<tr bgcolor="#ffffff">

  <td height="53" class="style20"> Número computadores totais Desktp</td>
        <td><span id="sprytextfield55">
        <label>
        <input type="text" name="num_comp_desk" id="num_comp_desk" size="20" value=""/>
        </label>
     <span class="textfieldInvalidFormatMsg">Formato invalido.</span><span class="textfieldMaxCharsMsg">O número máximo de caracteres, são 3.</span></span></td>
   
   
      </tr>
      

  <td height="53" class="style20">Número computadores totais: portátil </td>
        <td><span id="sprytextfield55">
        <label>
        <input type="text" name="num_portatil" id="num_portatil" size="20" value=""/>
        </label>
  <span class="textfieldInvalidFormatMsg">Formato invalido.</span><span class="textfieldMaxCharsMsg">O número máximo de caracteres, são 3.</span></span></td>
   
   
      </tr>
      
            

<tr bgcolor="#CEF6F5">

<div class="col-md-12 col-md-offset-3 ; col-xs-1 col-sm-4">
<td height="53" class="style20">Número de servidores linux na empresa (dentro)</td>
        <td><span id="sprytextfield55">
        <label>
        <input type="text" name="num_serv_linux_in" id="num_serv_linux_in" size="20" value=""/>
        </label>
<span class="textfieldInvalidFormatMsg">Formato invalido.</span><span class="textfieldMaxCharsMsg">O número máximo de caracteres, são 3.</span></span></td>
</div>   
   
      </tr>



<tr bgcolor="#ffffff">

<div class="col-md-12 col-md-offset-3 ; col-xs-1 col-sm-4">
<td height="53" class="style20">Número de servidores linux na empresa (fora)</td>
        <td><span id="sprytextfield55">
        <label>
        <input type="text" name="num_serv_linux_out" id="num_serv_linux_out" size="20" value=""/>
        </label>
<span class="textfieldInvalidFormatMsg">Formato invalido.</span><span class="textfieldMaxCharsMsg">O número máximo de caracteres, são 3.</span></span></td>
</div>   
   
      </tr>


<tr bgcolor="#CEF6F5">

<div class="col-md-12 col-md-offset-3 ; col-xs-1 col-sm-4">
<td height="53" class="style20">Número de servidores Windows na empresa</td>
        <td><span id="sprytextfield55">
        <label>
        <input type="text" name="num_serv_win" id="num_serv_win" size="20" value=""/>
        </label>
<span class="textfieldInvalidFormatMsg">Formato invalido.</span><span class="textfieldMaxCharsMsg">O número máximo de caracteres, são 3.</span></span></td>
</div>   
   
      </tr>

</table>    </div>

</div> </div>










<div class="row">
  
 <div class="col-md-12 col-md-offset-2 ; col-xs-1 col-sm-4">
    <div class="col-md-12  col-md-offset-0 ; col-xs-6 col-sm-4"; ><table class="tftable" border="0" ;>
              <h1><div class="col-md-12  " align="center"></div></h1>
                  
<tr bgcolor="#585858"><th height="80px"; width="150px";><h1>Caracterização sistemas de informação (a preencher pela ITGP)</h1></th><th height="50px"; width="80px";></th><th height="50px";></div></th></tr>
<tr bgcolor="#ffffff"><td>Servidores Linux in house</td><td><input type="checkbox" name="Linux_serv_in_house" value="1" /></td><td></td></tr>
<tr bgcolor="#CEF6F5"><td>Servidores Linux out office </td><td><input type="checkbox" name="Linux_serv_out_office" value="1" /></td><td></td></tr>
<tr bgcolor="#ffffff"><td>Servidores Windows in house</td><td><input type="checkbox" name="win_serv_in_house" value="1" /></td><td></td></tr>
<tr bgcolor="#CEF6F5"><td>Servidores Windows out office </td><td><input type="checkbox" name="win_ser_out_office" value="1" /></td><td></td></tr>
<tr bgcolor="#ffffff"><td>NAS server</td><td><input type="checkbox" name="nas_serv" value="1" /></td><td></td></tr>
<tr bgcolor="#CEF6F5"><td>Grande necessidade de storage</td><td><input type="checkbox" name="grande_storage" value="1" /></td><td></td></tr>
<tr bgcolor="#ffffff"><td>Rede Gb</td><td><input type="checkbox" name="rede" value="1" /></td><td></td></tr>
<tr bgcolor="#CEF6F5"><td>ISP: NOS</td><td><input type="checkbox" name="nos" value="1" /></td><td></td></tr>
<tr bgcolor="#ffffff"><td>ISP: MEO</td><td><input type="checkbox" name="meo" value="1" /></td><td></td></tr>
<tr bgcolor="#CEF6F5"><td>ISP: Vodafone</td><td><input type="checkbox" name="voda" value="1" /></td><td></td></tr>
<tr bgcolor="#ffffff"><td>ISP: Outro</td><td><input type="checkbox" name="outro" value="1" /></td><td></td></tr>

</table>    </div>

</div> </div>


<div class="row">
  
<div class="col-md-12 col-md-offset-2 ; col-xs-1 col-sm-4">
    <div class="col-md-12  col-md-offset-0 ; col-xs-6 col-sm-4"; ><table class="tftable" border="0" ;>
              <h1><div class="col-md-12  " align="center"></div></h1>
                  
<tr bgcolor="#585858"><th height="80px"; width="150px";><h1>Caracterização sistemas operativos (a preencher pela ITGP)</h1></th><th height="50px"; width="80px";></th><th height="50px";></div></th></tr>
<tr bgcolor="#ffffff"><td>Fedora</td><td><input type="checkbox" name="fedora" value="1" /></td><td></td></tr>
<tr bgcolor="#CEF6F5"><td>Ubuntu </td><td><input type="checkbox" name="ubuntu" value="1" /></td><td></td></tr>
<tr bgcolor="#ffffff"><td>CentOS</td><td><input type="checkbox" name="centos" value="1" /></td><td></td></tr>
<tr bgcolor="#CEF6F5"><td>HP-UX</td><td><input type="checkbox" name="hpux" value="1" /></td><td></td></tr>
<tr bgcolor="#ffffff"><td>Solaris</td><td><input type="checkbox" name="solaris" value="1" /></td><td></td></tr>

</table>    </div>

</div> </div>


<div class="row">
  
 <div class="col-md-3 col-md-offset-3 ; col-xs-1 col-sm-4">
    <div class="col-md-12  col-md-offset-0 ; col-xs-6 col-sm-4"; ><table class="tftable" border="0" ;>
              <h1><div class="col-md-12  " align="center"></div></h1>
                  

</table>    </div>

</div> </div>






        

<div align="center">
  <input type="hidden" name="MM_insert" value="dados" />
  <input type="submit" name="inserir" id="inserir" value="Efectuar registo" onclick="wri_P(this.form); limpa() " />
</div>
</form>
<script type="text/javascript">



function limpa() {
 

 if(document.getElementById("Linux_serv_in_house").checked)
{ document.getElementById('lixo4').disabled = true; } 

 if(document.getElementById("Linux_serv_out_office").checked)
{ document.getElementById('lixo44').disabled = true; } 


 if(document.getElementById("win_serv_in_house").checked)
{ document.getElementById('lixo444').disabled = true; } 


 if(document.getElementById("win_ser_out_office").checked)
{ document.getElementById('lixo4444').disabled = true; } 


 if(document.getElementById("nas_serv").checked)
{ document.getElementById('lixo44445').disabled = true; } 


 if(document.getElementById("rede").checked)
{ document.getElementById('lixo44444').disabled = true; } 



if(document.getElementById("nos").checked)
{ document.getElementById('lixo444441').disabled = true; } 

if(document.getElementById("meo").checked)
{ document.getElementById('lixo444442').disabled = true; } 

if(document.getElementById("voda").checked)
{ document.getElementById('lixo444443').disabled = true; } 

if(document.getElementById("outro").checked)
{ document.getElementById('lixo4444433').disabled = true; } 

if(document.getElementById("grande_storage").checked)
{ document.getElementById('lixo4444439').disabled = true; } 










 if(document.getElementById("fedora").checked)
{ document.getElementById('lixo5').disabled = true; } 

 if(document.getElementById("ubuntu").checked)
{ document.getElementById('lixo55').disabled = true; } 

 if(document.getElementById("centos").checked)
{ document.getElementById('lixo555').disabled = true; } 

 if(document.getElementById("solaris").checked)
{ document.getElementById('lixo5551').disabled = true; } 

 if(document.getElementById("hpux").checked)
{ document.getElementById('lixo5552').disabled = true; } 




}




var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email", {isRequired:true, minChars:5, maxChars:90});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "integer", {isRequired:true, minChars:7, maxChars:40});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "integer", {isRequired:true, minChars:7, maxChars:40});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {isRequired:true, minChars:5, maxChars:15});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "integer", {isRequired:true, minChars:5, maxChars:15});
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8", "none", {isRequired:true, maxChars:150, minChars:10});
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9", "none", {isRequired:true, minChars:8, maxChars:150});
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10", "none", {isRequired:true, minChars:4, maxChars:20});
var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytextfield11", "none", {isRequired:true, minChars:4, maxChars:40});
var sprytextfield55 = new Spry.Widget.ValidationTextField("sprytextfield55", "integer", {isRequired:false,  maxChars:3});
var sprytextfield91 = new Spry.Widget.ValidationTextField("sprytextfield91", "none", {isRequired:true, minChars:2, maxChars:150});
var sprytextfield99 = new Spry.Widget.ValidationTextField("sprytextfield99", "none", {isRequired:true, minChars:8, maxChars:150});
var sprytextfield23 = new Spry.Widget.ValidationTextField("sprytextfield23", "email", {isRequired:true, minChars:5, maxChars:90});
var sprytextfield200 = new Spry.Widget.ValidationTextField("sprytextfield23", "integer", {isRequired:false, minChars:10, maxChars:50});


var sprytextfield111 = new Spry.Widget.ValidationTextField("sprytextfield111");
var sprytextfield211 = new Spry.Widget.ValidationTextField("sprytextfield211");
var sprytextfield311 = new Spry.Widget.ValidationTextField("sprytextfield311");

var sprytextfield511 = new Spry.Widget.ValidationTextField("sprytextfield511");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {maxChars:3000, counterId:"countsprytextarea1", counterType:"chars_remaining", isRequired:false});


</script>

<?php if ($_POST['email'] == "") 
{ 
session_write_close();
}?>


<?php } ?>

<br/>
<br/>
  
<br></br>
<br></br>

   
   <div id="footer2">
ITGP Technologies
</div>   
   
    <div id="footer">
ITGP Technologies
</div>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>
