<?php
	 require_once('./Connections/dic2me.php'); ?>
<?php
header('Content-Type: text/html; charset=utf-8');

/////////////////
mysql_select_db($database_bdteste, $dic2me);
#

#########################estuda pontuacao

require_once('./funcoes/funcoes.php'); 
gala(galo1);

tele(corrige_manual);

$mem = memory_get_usage();

copia(MEMORIA);
copia($mem);

$codigo_interno_do_tpc=obter_IDDOTPCDECADA_ALUNO();

$codigo_interno_do_tpc=$_POST['id_doTPC'];

gala(galo2);

$codigoTPC=$_GET['codigoTPC'];


$idtpc=obteriddotextoa_partir_id_do_TPC($codigoTPC);

$inicio_fim=geramarcadormilisegundos();




$cookie_name="login_aluno";
if(isset($_COOKIE[$cookie_name])) {
	$temcookie="SIM";    

 $cookie_value=$_COOKIE[$cookie_name];
    $cookie_ID=$_COOKIE[$cookie_name];
    $datacookie=dados_do_cookie($cookie_ID);

	$nif_aluno=$datacookie[2];

	$pass_aluno=$datacookie[0];
	$cod_escola=$datacookie[1];
		$lastlogin=$datacookie[3];
}

gala(galo3);

$inciciotempo=$_POST['tempoiniciomilisegundos'];

?>
<input name="tempoFIMmilisegundos" type="hidden" value="<?php echo $inicio_fim?>">
?>
<script>
var timeleft = 20;
var downloadTimer = setInterval(function(){
  document.getElementById("progressBarovo").value = 20 - --timeleft;
  if(timeleft <= 0)
    clearInterval(downloadTimer);
},1000);
</script>


<?php

$inciciotempo=$_POST['tempoiniciomilisegundos'];
$diferenca1=($inicio_fim-$inciciotempo)/1000;
$diferenca=($inicio_fim-$inciciotempo);
$controlo=$_GET['CONTROLO'];
$codigoTPC=$_GET['codigoTPC'];


MANUAL_geral_detetaerros();
			vopia(FIMEXECUTAVITAL);
			

?> <input name="idditado" type="hidden" id="ip" value=<?php echo  $geraid; ?> /> <?php

?>

    <?php
	
	 require_once('./Connections/dic2me.php');
	 
	  ?>
     
<?php

header('Content-Type: text/html; charset=utf-8');

/////////////////
mysql_select_db($database_bdteste, $dic2me);

 
 if (verifica_se_aluno_já_TENTOU_PELO_MENOS_UMA_VEZ_CORRIGIR_O_DIITADO($codigo_interno_do_tpc) == 0)
   {
	   mostra(VAIINSERIRIRR);

         inser_erros_individual_para_substituirpilhas_na_BD($ID_DE_EXECUCAO,$palavra,$posicao,$tipoerro,$idtpc,$funcao,$codigo_interno_do_tpc,$codigo_geral_TPC);
		 update_informar_se_TPC_prof_feito_pelo_aluno_com_ou_sem_erros($codigo_interno_do_tpc);
		}
   
	

?>
<style>
body {font-family: "Lato", sans-serif;}

/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */

div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}

/*  Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>



				  ?><br>
				  
				  <?php
echo "tens erro";
$ERROS=contaerrosdoalunos($idTPC,$tipo_erro_a_mostrar);

$errosortograficos=$ERROS[0];
$errosortnaoograficos=$ERROS[1];
?> <h2>Erros ortográficos<h2>
<?php if ($errosortograficos>0)
{
	echo "tiveste";
	echo  $errosortograficos;?>
	<img src="imagens/triste.jpg" width="90" height="108">
<?php }
else{
	?>
	<img src="imagens/contente.png" width="149" height="150">
<?php } 
?>

 <h2>Erros não ortográficos<h2>
<?php if ($errosortnaoograficos>0)
{
	echo "tiveste";
	echo $errosortnaoograficos;
	?>
	<img src="imagens/triste.jpg" width="90" height="108">
<?php }
else{
	?>
	<img src="imagens/contente.png" width="149" height="150">
<?php } 
?>


<p>Clique nos menus em baixo, para consultar, por exemplo eros dados pelo aluno, ou texto original</p>
<?php mostra(AQUI1); 
$codigoTPC=obter_IDDOTPCDECADA_ALUNO();
mostra(CAOLI);
mostra($codigoTPC);
?>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">Erros Ortográficos</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Outros erros</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Ditado escrito pelo aluno</button>
      <button class="tablinks" onclick="openCity(event, 'Tokyo3')">Estatisticas comparativas</button>
  <button class="tablinks" onclick="openCity(event, 'galo')"> <n>Texto original<n></button>
</div>

<div id="London" class="tabcontent">
  <h3>Erros ortográfico</h3>

<a href="http://vmi100391.contabo.host/dic2me/imprime_lista_erro_ortograficos_aluno.php?id=<?php echo $codigoTPC ?>" title="imprimirtexto" target="new">imprimir <img src="imagens/impressora.jpg" width="130" height="88"></a>

    
   <?php


			  $erro=9; 
			  $iddotpc=$_POST['id_do_TPC'];

		$ID_DITADO=$_get['codigoTPC'];
 $iddotpc=$_POST['id_doTPC'];
mostra(DESTA12);
ver(GALA1);



		$ID_DITADO=$_POST['id_doTPC'];
$iddotpc_base=obtem_idtpc_da_tabela_dic2me_TPC($ID_DITADO, $nif_aluno);

$codigoTPC=obter_IDDOTPCDECADA_ALUNO();
	
	$entrada2=$_POST['id_doTPC'];
	$entrada1=$_GET['CONTROLO'];
	
    $NIF_ALUNO=obtemnnif($entrada1);
	
		$idtpc=obtem_idtpc_da_tabela_dic2me_TPC($entrada2, $NIF_ALUNO);
		

$erro=9;
			mostrar_erros_do_ditado_a_professorapelo_aluno_mostra_tabela($idtpc,$erro);

			?>
  
