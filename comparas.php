imagens
<?php require_once('./Connections/dic2me.php'); ?>
<?php
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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55662004-3', 'auto');
  ga('send', 'pageview');

</script>

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

	
header2 {
		background: linear-gradient(to right,rgba(9,9,9,9) 0,rgba(9,9,9,9) 100%);
		border-bottom: 1px solid rgba(0,0,0,.1);
		box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
		display: block;
		position: relative;
		width: 100%;
		z-index: 1000;
	}
	
	header2 > nav > ul {
		display: flex;
		flex-wrap: wrap;
		justify-content: flex-start;
		list-style: none;
		margin: 0;
		padding: 0;
	}
	
		header2 > nav > ul > li {
			flex: 0 1 auto;
			margin: 0;
			padding: 0;
			position: relative;
			transition: all linear 0.1s;	
		}
		
			header2 > nav > ul > li:hover {
				background: rgba(0,0,0,1);
			}
			
			header2 > nav > ul > li a + div {
				background: linear-gradient(to bottom,rgba(9,9,9,9) 0,rgba(9,9,9,9) 100%);
				border-radius: 0 0 2px 2px;
				box-shadow: 0 3px 1px rgba(0,0,0,.05);
				display: none;
				font-size: 1rem;
				position: relative;
				width: 195px;
				
			}
			
				header2 > nav > ul > li:hover a + div {
					display: block;
				}
				
				header2 > nav > ul > li a + div > ul {
					list-style-type: none;	
				}
				
					header2 > nav > ul > li a + div > ul > li {
						margin: 0;
						padding: 0;
						
					}
					
						header2 > nav > ul > li a + div > ul > li > a {
							color: rgba(0,0,0,.9);
							display: block;	
							font-size: 0.75rem;
							font-bold;
							letter-spacing: 1.5px;
							padding: .25rem 1.5rem;
							
							text-decoration: none;
							text-transform: uppercase;
						}
						
							header2 > nav > ul > li a + div > ul > li:hover > a {
								background-color: rgba(0,0,0,.15);	
							}
	
			header2 > nav > ul > li > a {
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
			
				header2 > nav > ul > li > a > div > span {
					color: rgba(255,255,255,.75);
					display: block;
					
					font-family: Georgia, "Times New Roman", Times, serif;
					font-size: .7rem;	
					font-style: italic;
					line-height: 1rem;
					max-width: 260px;
				}

@media (min-width: 990px) {
  header2 > nav > ul > li > a {
    max-width: 500px;
    font-size: 1.7rem;
	line-height: 0.8rem;
	display: flex;
  }
  
  header2 > nav > ul > li > a > div > span {
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

 #rookieslab_floatingsharebar {position:fixed; bottom:15%; left:90px; float:left; border: 0px solid black; border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;background-color: #FFF;padding:0 0 2px 0;z-index:10;} #rookieslab_floatingsharebar .sbutton {float:right;clear:both;margin:5px 5px 0 5px;} .fb_like_count_top {width:48px !important;} .fb_like_count_top, .fb_like_count_inner {-moz-border-radius:3px;-webkit-border-radius:3px;} .FBConnectButton_Small, .FBConnectButton_RTL_Small {width:49px !important; -moz-border-radius:3px;-webkit-border-radius:3px;} .FBConnectButton_Small .FBConnectButton_Text {padding:2px 2px 3px !important;-moz-border-radius:3px;-webkit-border-radius:3px;font-size:8px;}  <!-- ACABA BARRA FLUTUANTE -->


    </style>
  
  </head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_PT/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_PT/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_PT/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
 <header>
 
 <meta property="og:url"           content="http://www.your-domain.com/your-page.html" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="Your Website Title" />
	<meta property="og:description"   content="Your description" />
	<meta property="og:image"         content="http://www.your-domain.com/path/image.jpg" />
 <header__>
 
  
    <div id="animation2">
    
    <img src="imagens/dic2me_01.jpg" alt="DIC2ME" height="1">
     <img src="imagens/dic2me_00.jpg" alt="DIC2ME" height="1">
       
</div>



 </header__>
 

 


 </header__>
 
 
 <header1 role="banner">
	<nav role="navigation">
		<ul>
			<li>
				<a href="./main.php">
					
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
		  </li>
          
         
          
          
           <?php } ?>

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
				
				<div>
				
						<li><a href="./ditado_livre.php">versao teste</a></li>
				
				</div>
			</li>
			<li>
				
                <a><div>
						Sobre
						</div>
				</a>
					<div>
						<ul>
						<li><a href="./funciona.html">Como funciona</a></li>
						<li><a href="./custos.html">Custos</a></li>
						<li><a href="./objectivos">Utilidade e objectivos</a></li>						
					 <li><a href="./Coordenadores.html">Coordenadores Pedagógicos</a></li>
                     
                      <li><a href="./email.php">Envie-nos um email</a></li>
                     
                    </ul>
					</div>
				</a>
			</li>
            
            <li>
				
                <a><div>
						Doar-Donativos
						</div>
				</a>
					<div>
						<ul>
                      <li><a href="./contribuir.html">Contribuir</a></li>
                    </ul>
					</div>
				</a>
			</li>
            
		</ul>
	</nav>
</header1>
 
 
 
 
 <meta name="google-site-verification" content="PiEHsLu3ow5TCtgoegTzd4TytEHrNwrUjDAhAx1z9lY" />
 
 
 </header>
 
 
 <div id='main'>
    <article>
   



  <div class="flex">
    <div>





 
 <div id='rookieslab_floatingsharebar' title="Get this Widget or another with Twitter"> <div class='sbutton' id='gb'><script src="http://connect.facebook.net/pt_PT/all.js#xfbml=1"></script><fb:like layout="box_count" show_faces="false" font="" data-href="/old/dic2me"></fb:like></div> <div class='sbutton' id='gplusone'><script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script><g:plusone size="tall"></g:plusone></div> <div class='sbutton' id='su'><script src="http://www.stumbleupon.com/hostedbadge.php?s=5"></script></div> <div class='sbutton' id='ad'><div class="addthis_toolbox addthis_default_style" style="background: transparent";><a class="addthis_counter"></a></div> <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js"></script></div> <p style=' line-height:15px; font-size:9px; font-weight:bold; text-align:center;'><a title="Insere este e outros widgets no teu website!" href='http://alojasites.com/ferramentas/utilidades.html' style='color:#BBBBBB;'>Widgets</a></p> <br/></div>
 
 


 
    <div id="animation">
    
    <img src="./imagens/desenho.png"  width="600" height="600"/>
    <img src="./imagens/desenho_som1.png"  width="600" height="600"/>
        <img src="./imagens/desenho_pagina_principal_F.png"  width="600" height="600"/>
    <img src="./imagens/desenho_pagina_principal_F_ondas.png"  width="600" height="600"/>
    
            <img src="./imagens/desenho_pagina_principal_FA.png"  width="600" height="600"/>
    <img src="./imagens/desenho_pagina_principal_FA_ondas.png"  width="600" height="600"/>


        <img src="./imagens/desenho_pagina_principal_FAC.png"  width="600" height="600"/>
    <img src="./imagens/desenho_pagina_principal_FAC_ondas.png"  width="600" height="600"/>

        <img src="./imagens/desenho_pagina_principal_FACO.png"  width="600" height="600"/>
        <img src="./imagens/desenho_pagina_principal_FACO_ondas.png"  width="600" height="600"/>    
        
                <img src="./imagens/desenho_pagina_principal_FACOD.png"  width="600" height="600"/>
    <img src="./imagens/desenho_pagina_principal_FACOD_ondas.png"  width="600" height="600"/>

  <img src="./imagens/desenho_pagina_principal_FACODI.png"  width="600" height="600"/>
    <img src="./imagens/desenho_pagina_principal_FACODI_ondas.png"  width="600" height="600"/>
    
      <img src="./imagens/desenho_pagina_principal_FACODIT.png"  width="600" height="600"/>
    <img src="./imagens/desenho_pagina_principal_FACODIT_ondas.png"  width="600" height="600"/>
    
      <img src="./imagens/desenho_pagina_principal_FACODITA.png"  width="600" height="600"/>
    <img src="./imagens/desenho_pagina_principal_FACODITA_ondas.png"  width="600" height="600"/>
    
      <img src="./imagens/desenho_pagina_principal_FACODITAD.png"  width="600" height="600"/>
    <img src="./imagens/desenho_pagina_principal_FACODITAD_ondas.png"  width="600" height="600"/>
    
      <img src="./imagens/desenho_pagina_principal_FACODITADO.png"  width="600" height="600"/>
    <img src="./imagens/desenho_pagina_principal_FACODITADO_ondas.png"  width="600" height="600"/>
    
          <img src="./imagens/desenho_pagina_principal_FACODITADOS.png"  width="600" height="600"/>
    <img src="./imagens/desenho_pagina_principal_FACODITADOS_ondas.png"  width="600" height="600"/>
    
     <img src="./imagens/desenho_pagina_principal_FACODITADOSD.png"  width="600" height="600"/>
    <img src="./imagens/desenho_pagina_principal_FACODITADOSD_ondas.png"  width="600" height="600"/>
    
     <img src="./imagens/desenho_pagina_principal_FACODITADOSDI.png"  width="600" height="600"/>
    <img src="./imagens/desenho_pagina_principal_FACODITADOSDI_ondas.png"  width="600" height="600"/>

     <img src="./imagens/desenho_pagina_principal_FACODITADOSDIC.png"  width="600" height="600"/>
    <img src="./imagens/desenho_pagina_principal_FACODITADOSDIC_ondas.png"  width="600" height="600"/>

     <img src="./imagens/desenho_pagina_principal_FACODITADOSDIC2.png"  width="600" height="600"/>
    <img src="./imagens/desenho_pagina_principal_FACODITADOSDIC2_ondas.png"  width="600" height="600"/>
    
     <img src="./imagens/desenho_pagina_principal_FACODITADOSDIC2M.png"  width="600" height="600"/>
    <img src="./imagens/desenho_pagina_principal_FACODITADOSDIC2M_ondas.png"  width="600" height="600"/>
    
         <img src="./imagens/desenho_pagina_principal_FACODITADOSDIC2ME.png"  width="600" height="600"/>
    <img src="./imagens/desenho_pagina_principal_FACODITADOSDIC2ME_ondas.png"  width="600" height="600"/>
    
         <img src="./imagens/desenho_pagina_principal_FACODITADOSDIC2ME.png"  width="600" height="600"/>
    <img src="./imagens/desenho_pagina_principal_FACODITADOSDIC2ME_ondas.png"  width="600" height="600"/>




</div>


</div>
  
  </div>
 

    </article>
    <nav>
    
 

    
</nav>
    <aside>
    
         <div class="flex3">
    <div>
 </div>
 </div>
 
  <div class="flex3">
    <div>
    
    <a href="main_aluno.php">

     
    
      <img src="imagens/Desenhos_saida.jpg" alt="Login" width="75"></a> 
      
       <div class="fb-like" data-href="http://www.facebook.com/dic2me" data-width="5" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
 </div>
    
    
    </aside>
 </div>
 <footer>footer</footer>
</body>


<script>

 function startAnimation() { 
    var frames = document.getElementById("animation").children;
    var frameCount = frames.length;
    var i = 1;
    setInterval(function () { 
        frames[i % frameCount].style.display = "none";
        frames[++i % frameCount].style.display = "block";
    }, 300); 
	
	
} 
  
  
   function startAnimation2()  { 
    var frames = document.getElementById("animation2").children;
    var frameCount = frames.length;
    var i = 1;
    setInterval(function () { 
        frames[i % frameCount].style.display = "none";
        frames[++i % frameCount].style.display = "block";
    }, 300); 
	
	
} 

   function startAnimation3()  { 
    var frames = document.getElementById("animation3").children;
    var frameCount = frames.length;
    var i = 1;
    setInterval(function () { 
        frames[i % frameCount].style.display = "none";
        frames[++i % frameCount].style.display = "block";
    }, 300); 
	
	
} 
  
onload =  function start(){
   startAnimation();
   startAnimation2(); 
}

</script>
</html>
