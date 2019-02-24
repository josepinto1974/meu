
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dit2me</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">



    <!-- Custom styles for this template -->
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/floater-bar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar-fixed-top">
      <div class="container">

        <ul>
            <li><a href="#">Dit2me intenacional</a></li>
            <span>|</span>
            <li>
              <a href="#">Siga-nos</a>
            </li>
            <li class="social facebook">
              <a href="#"><img src="images/facebook.png"></a>
            </li>
            <li class="social">
              <a href="#"><img src="images/twitter.png"></a>
            </li>
            <li class="social">
              <a href="#"><img src="images/instagram.png"></a>
            </li>
            <li class="social">
              <a href="#"><img src="images/linkedin.png"></a>
            </li>
        </ul>
      </div>
    </nav>

    <div class="row" id="wrapper">

      <div class="jumbotron col-md-12 col-sm-12 col-xs-12">
        <div class="login hidden-xs">
          <ul>
            <li class="dropdown">
              <?php
	  require_once('./funcoes/funcoes.php');
	  require_once('./Connections/dic2me.php');
	 
	 
	
	 
	 
	  ?><?php
             if (validalogin_professor())
	  {?>

<a href="logout.php"> <img src="imagens/logout_btn.png" ></a>
          
	  <?php } ?>
      
          
            </li>
          
        </div>
          <img class="logo col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3" src="images/logo.png">
          <ul class="nav main_nav navbar-nav hidden-xs">
            <li>
             <?php    $Controlid=$_GET['CONTROLO'];
		   $HOME="./main_professores.php?CONTROLO=$Controlid"; ?>
              <a  href="<?php echo $HOME ?>"" class="btn_inicio">
                <svg version="1.1" id="btn_inicio" x="0px" y="0px" width="89.333px" height="40.667px" viewBox="0 0 109.333 40.667" enable-background="new 0 0 109.333 40.667" xml:space="preserve">
                <path fill="#1890CF" d="M6.667,45.334L1.333,11c0,0-0.417-5.083,2.708-5.708C6.292,4.917,102.333,2,102.333,2S109,1.333,108,8.667 s-4,31.832-4.667,33s-0.834,5.501-7.333,6C87,47.667,11.667,49,9.333,48S6.667,45.334,6.667,45.334z"/>
                </svg>
                <span class="menu-title">HOME</span>
              </a>
            </li>
            <li>
              <a href="http://qa01.dic2me.com/dic2me/MAnual_dic2me_professor.pdf" class="btn_inicio">
                <svg version="1.1" id="btn_inicio" x="0px" y="0px" width="89.333px" height="40.667px" viewBox="0 0 109.333 40.667" enable-background="new 0 0 109.333 40.667" xml:space="preserve">
                <path fill="#1890CF" d="M6.667,45.334L1.333,11c0,0-0.417-5.083,2.708-5.708C6.292,4.917,102.333,2,102.333,2S109,1.333,108,8.667 s-4,31.832-4.667,33s-0.834,5.501-7.333,6C87,47.667,11.667,49,9.333,48S6.667,45.334,6.667,45.334z"/>
                </svg>
                <span class="menu-title"><b>MANUAL</b></span>
              </a>
            </li>
            <li>
              <a href="#" class="btn_ditado">
                <svg version="1.1" id="btn_ditado" x="0px" y="0px" width="151.5px" height="40.667px" viewBox="0 0 171.5 40.667" enable-background="new 0 0 171.5 40.667" xml:space="preserve">
                <path fill="#1890CF" d="M9.452,44.349L1.029,10.016c0,0-0.658-5.083,4.276-5.708C8.859,3.933,160.51,1.016,160.51,1.016 s10.529-0.667,8.949,6.667c-1.579,7.334-6.316,31.831-7.369,32.999s-1.317,5.502-11.578,6c-14.211,0-133.165,1.334-136.851,0.334 S9.452,44.349,9.452,44.349z"/>
                </svg>
                <span class="menu-title"></span>
              </a>
            </li>
            <li>
              <a href="#" class="btn_help">
                <svg version="1.1" id="btn_help" x="0px" y="0px" width="191.5px" height="40.667px" viewBox="0 0 211.5 40.667" enable-background="new 0 0 211.5 40.667" xml:space="preserve">
                <path fill="#1890CF" d="M11.439,44.349L1.036,10.015c0,0-0.813-5.082,5.282-5.707c4.391-0.375,191.715-3.292,191.715-3.292 s13.004-0.667,11.055,6.667c-1.951,7.334-7.803,31.832-9.105,33c-1.299,1.168-1.627,5.5-14.301,6 c-17.555,0-164.49,1.332-169.042,0.332C12.088,46.015,11.439,44.349,11.439,44.349z"/>
                </svg>
                <span class="menu-title"></span>
              </a>
            </li>

            <li class="dropdown">
       
              <a href="#" class="btn_contact_us">
                <svg version="1.1" id="btn_contact_us" x="0px" y="0px" width="140.167px" height="40.667px" viewBox="0 0 160.167 40.667" enable-background="new 0 0 160.167 40.667" xml:space="preserve">
                  <path fill="#1890CF" d="M9.198,45.333L1.342,11c0,0-0.614-5.083,3.988-5.708C8.646,4.917,150.104,2,150.104,2 s9.82-0.667,8.348,6.667c-1.473,7.334-5.893,31.833-6.875,33s-1.229,5.5-10.801,6C127.52,47.667,16.562,49,13.125,48 S9.198,45.333,9.198,45.333z"/>
                  <span class="menu-title">Fala Connosco</span>
                </svg>
              </a>
            </li>
          </ul>
          <div class="navbar-header navbar-header-mobile">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
      </div>



      <div class="container">
      <nav class="navbar navbar-default mobile-nav visible-xs">
                <div class="container">

                  <div id="navbar" class="navbar-collapse collapse">
                 
                    </ul>
                    <ul class="nav nav2 navbar-nav" style="max-width: 100%; margin: auto;z-index: 1;margin-top: -0.5em;position: relative;">
                      <li class="contat_us_entrada"><a href="#contat_us_entrada">Fala Connosco</a></li>
                      <li class="login_entrada"><a href="#login_entrada">Login</a></li>
                      <li class="loja_online_entrada"><a href="#loja_online_entrada">Loja Online</a></li>
                      <li class="tpc_entrada"><a href="#tpc_entrada">TPC</a></li>

                    </ul>

                  </div><!--/.nav-collapse -->
                </div>
        </nav>
		
		<div> <!--/.nav-collapse inicio-->
			

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<?php require_once('./funcoes/funcoes.php'); ?>
<?php require_once('./Connections/dic2me.php'); ?>
<?php



?>

<?php

$totalRows_Recordset2 = mysql_num_rows($Recordset2);

		
		$controlo=$_SESSION["controlo"];
		
		
if ( $_COOKIE[$cookie_name] ==  "" )
{
	mostra(cookienada);
$controlo=$_POST['id_cookie_novo'];
mostra($cookie_ID);
}

#$cookie_ID=$_GET['CONTROLO'];
if ( $_POST['id_cookie_novo'] ==  "" )
{
	mostra(postnadaPOIS);
$controlo=$_GET['CONTROLO'];
mostra($cookie_ID);
}


$query_Recordset2=obterdadoslunos();

mostra($query_Recordset2);
$Recordset2 = mysql_query($query_Recordset2, $dic2me) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysql_num_rows($Recordset2);

$controlo=obter_id_cookie_prof();
?>

<a href="http://vmi100391.contabo.host/dic2me/imprime_lista_alunos_do_professor.php?id=<?php echo $controlo ?>" title="imprimirtexto" target="new">imprimir <img src="imagens/impressora.jpg" width="130" height="88"></a>

    
     
     
     <table width="50%" border="2">
  <tr>
    <td>nome</td>
    <td>nif</td>
    <td>data</td>
  </tr>
         <?php
	 do { ?>
  <tr>
    <td>			<?php echo $row_Recordset2['NOME']; ?></td>
    <td> <?php echo $row_Recordset2['NIF']; ?></td>
    <td><?php echo $row_Recordset2['datageracao']; ?></td>
  </tr>
  
  <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
</table>


  <?php $A="0"; ?>
       <?php do { ?>
        <?php if ($A == "1")
        { ?>
         <div id="pagewrapper2">
     	<?php 
		$A="0";
		}  ?>
        
        <?php if ($A == "0")
        { ?>
         <div id="pagewrapper">
     	<?php 
		$A="1";
		}  ?>
        
        <div class="row">
			<div class="column-half">
				
			<?php echo $row_Recordset2['NOME']; ?>
			</div>
			<div class="column-half">
				 
				 <?php echo $row_Recordset2['NIF']; ?>
			</div>
            
            <div class="column-half">
				
			<?php echo $row_Recordset2['datageracao']; ?>
			</div>
         
		
		</div>
	 </div>
        
         
          <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>     
     
        
     
    
</div>

<?php
mysql_free_result($Recordset2);

mysql_free_result($Recordset1);
?>
		</div><!--/.nav-collapse fim-->

      </div><!-- /.container -->

      <div class="row panel_03" style="padding-bottom: 5em;position: relative;">
        <!--<img src="images/quadriculado.png" style="position: absolute;width: 100%;bottom: 0;">-->
        <div class="col-md-10 col-md-offset-1 col-sm-12">
            <div class="col-md-4 col-sm-4 newsletter">
              <div class="trapezoid trapezoid-newsletter">
                <img src="images/trapezoid-orange-small.svg">
                <span>newsletter</span>
              </div>
              <div class="informations col-xs-12">
                <h3>Subscreve a nossa <span class="uppercase">newsletter</span></h3>
                <p></p>
                <div class="form-group">
                  <input type="text" class="form-control" id="usr" placeholder="Nome">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="trapezoid trapezoid-subscrever">
                  <img id="subscribe-trapezoid" src="images/trapezoid-orange-small.svg">
                  <span onmouseover="subscribeTrapezoid.src='images/trapezoid-orange-small-over.svg';" onmouseout="subscribeTrapezoid.src='images/trapezoid-orange-small.svg';">subscrever</span>
                </div>
              </div>
            </div>

            <script type="text/javascript">
              var subscribeTrapezoid = document.getElementById("subscribe-trapezoid");
              var seeAllTrapezoid = document.getElementById("see-all-trapezoid");
            </script>




            <div class="col-md-4 col-sm-4 loja">
              <div class="trapezoid trapezoid-loja">
                <img src="images/trapezoid-green-small.svg">
                <span>loja</span>
              </div>
              <div class="informations col-xs-12">
                <h3>Visite a nossa loja online dit2meloja.com </h3>
                <p></p>
                <img src="images/loja-online.png">
              </div>
            </div>

            <div class="col-md-4 col-sm-4 dit2me">
              <div class="trapezoid trapezoid-dit2me">
                <img src="images/trapezoid-blue-small.svg">
                <span>Dit2me</span>
              </div>
              <div class="informations col-xs-12">
                <h3 class="uppercase" style="margin-bottom: 0;">Dit2me</h3>
                <h3 style="margin-top: 0;">International</h3>
                <p></p>
                <img src="images/balao.png">

              </div>
            </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container">
          <div class="col-md-3 col-sm-3 col-xs-6 contacts">
            <h4 class="uppercase bold">Contactos</h4>
 <p><?php echo obtemmailsuporte(1); ?></p>

            <p><span class="glyphicon glyphicon-earphone" aria-hidden="true" style="margin-right: 0.5em;"></span><?php echo obtemmailsuporte(2); ?></p>

            <div class="address">
            <p><span class="glyphicon glyphicon-map-marker" aria-hidden="true" style="margin-right: 0.5em;"></span><?php echo obtemmailsuporte(3); ?>
            <p><?php echo obtemmailsuporte(4); ?>
            <p><?php echo obtemmailsuporte(5); ?></p>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-6 site-map">
            <h4 class="uppercase bold">Mapa do Site</h4>
            <p><a href="#">Início</a></p>
            <p><a href="#">Sobre</a></p>
            <p><a href="#">Ditados</a></p>
            <p><a href="#">Ajuda</a></p>
            <p><a href="#">Contactos</a></p>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-6 links">
            <h4 class="uppercase bold">Outros Links</h4>
            <p><a href="#">Loja DIT2ME</a></p>
            <p><a href="#">DIT2ME International</a></p>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-6 follow">
            <h4 class="uppercase bold">Siga-nos</h4>
            <ul class="social-network">
              <li><a href="#"><img src="images/facebook.png"></a></li>
              <li><a href="#"><img src="images/instagram.png"></a></li>

            </ul>
            <ul class="social-network">
              <li><a href="#"><img src="images/twitter.png"></a></li>
              <li><a href="#"><img src="images/linkedin.png"></a></li>
            </ul>
          </div>
      </footer>

    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

<div id='rookieslab_floatingsharebar'>
  <div class='sbutton' id='gb'>
    <script src="http://connect.facebook.net/pt_PT/all.js#xfbml=1"></script>
    <fb:like layout="box_count" show_faces="false" font="" data-href="/old/dit2me">
    <fb:like>
  </div>
  <div class="sbutton" id="gplusone"/>
    <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
    <g:plusone size="tall"></g:plusone>
  </div>
</div>
  </body>
   <script type="text/javascript">
    $(document).ready(function() {
      var jumbotron = $(".jumbotron").height();
      var headerMobile = $(".navbar-header-mobile").height();
      console.log(jumbotron);




      /*$('#navbar').on('shown.bs.collapse', function () {
        $('body').css('overflow-y','hidden');
      });

      $('#navbar').on('hidden.bs.collapse', function () {
        $('body').css('overflow-y','auto');
      });*/


      $('.mobile-nav').css('top',jumbotron);


      $(".btn_inicio, .btn_about, .btn_ditado, .btn_help, .btn_register, .btn_contact_us").mouseenter(function() {
        $(this).find("path").attr("fill", "#e04b4a");

     });
    $(".btn_inicio, .btn_about, .btn_ditado, .btn_help, .btn_register, .btn_contact_us").mouseleave(function() {
        $(this).find("path").attr("fill", "#1890cf");

     });









    $(function(){
      $('.dropdown').hover(function() {
          $(this).addClass('open');
      },
      function() {
          $(this).removeClass('open');
      });
    });

    /*Possibilidade de fazer pausa e novamente play no vídeo*/
    $('.clip video').click(function() {
        this.paused ? this.play() : this.pause();
    });





});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55662004-3', 'auto');
  ga('send', 'pageview');

</script>
</html>
