
<?php require_once('./Connections/dic2me.php');
require_once('./funcoes/funcoes.php');
require_once('./funcoes/funcoes2.php');

   ?>
<?php

					    

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
      width: 550px;
      height: 400px;
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
    <script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
</head>
<body>
 <header>
 <header__>
 <img src="imagens/dic2me-1_3.png" alt="DIC2ME" /> </header__>
 </header__>
 
 
 <header1 role="banner">
	<nav role="navigation">
		<ul>
			<li>
				<a href="./main.php">
					<div>
						Home
						<span>Home</span>
					</div>
				</a>
			</li>
			
			
		
		</ul>
	</nav>
</header1>
 
 
 
 
 
 
 
 </header>
 <div id='main'>
    <article>

  <div class="flex">
    <div><form action="<?php echo $loginFormAction; ?>" method="POST" enctype="multipart/form-data" name="form1" target="_self">
<?php







if (( $_POST['nif'] == NULL)  && ( $_POST['email'] == NULL))
{
?>
<p>
      inique a sua nova password
<p>
      

      <p>
      <br>
      <label>NIF do alunonovo  
      <input name="nif" type="text" id="nif" size="10" maxlength="9" value= <?php echo $_GET['codigoNIF']?> >
      </label>
      <p>
      <br>
      Nota:
Nota:porque isto é um ite para crianças, optamos por mostrar a pass do aluno.
      <br>
     <input name="enviar" type="submit">

<?php }  




$nif=$_POST['nif'];

	 
	  $PASSDOALUNO=mostrar_PASS_DO_ALUNO($nif);
	
	 
if (( $_POST['pass'] != NULL)  && ( $_POST['enviar'] != NULL))
{
$nif=$_POST['nif'];

	 
	  $PASSDOALUNO=mostrar_PASS_DO_ALUNO($nif);
	

}
	
 $nif=$_POST['nif'];
#      $email_enceduca=$_POST['email'];
	  $pass=$_POST['pass'];
	  
	   if (( $_POST['nif'] != NULL)  && ( $_POST['enviar'] != NULL))
{
	   echo "A tua testes PASS é:";
	 ?>
 <h1> <?php echo $PASSDOALUNO; ?></h1>
        
         <img src="imagens/contente.png" width="125" height="125">
         <?php
   }

   
	
	?>

	        <input name="nifus" type="hidden" id="nif" size="10" maxlength="9" value="<?php echo $resultado ?>" >
   
</div>
  
  </div>
  <div class="flex2">

  
  </div>
   <div class="flex">
   
    </div>
  
  </div>
    </article>
    <nav>nav</nav>
    <aside>aside</aside>
 </div>
 <footer>footer</footer>
</body>
</html>
<?php
mysql_free_result($Recordset5);
?>