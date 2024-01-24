<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Thu Jan 18 2024 19:41:12 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="659eab658144ac62b3d366b3" data-wf-site="659eab658144ac62b3d366af">
<head>
  <meta charset="utf-8">
  <title>Javaski</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <meta name="author" content="Baptiste BLANCHET, Matthias TRUPIN, Gaspard PONS" />
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/javaski.webflow.css" rel="stylesheet" type="text/css">
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body>
	<header> 
	</header>
	<body class = "body">
		
		<div data-animation="default" data-collapse="all" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar-logo-left-container shadow-three w-nav">
		<div class="w-layout-blockcontainer w-container">
			<div class="columns w-row">
		<?php
			
			if (empty($_SESSION["login"])){
				echo $compMenu->affiche();
				// CHANGER LES ECHO SUIVANTS et les mettre en div class
				echo '<div class="w-col w-col-2"><a href="index.php?module=mod_connexion&action=formConnexion class="navbar-brand w-nav-brand"">formulaire connexion </a></div>';
			}else if ($compMenu->userAdministrateur()){
				echo $compMenu->affiche();
				echo '<div class="w-col w-col-2"><a href="index.php?module=mod_outilsAdministrateurs class="navbar-brand w-nav-brand"">deconnexion </a></div>';
				echo '<div class="w-col w-col-2"><a href="index.php?module=mod_connexion&action=deconnexion class="navbar-brand w-nav-brand"">deconnexion </a></div>';
			}else{
				echo $compMenu->affiche();
				echo '<div class="w-col w-col-2"><a href="index.php?module=mod_connexion&action=deconnexion class="navbar-brand w-nav-brand"">deconnexion </a></div>';
			}
			
		?>
			</div>
		</div>
		</div>
			<?php
				echo $affichageModule;
			?>
	</body>
	<footer>
		<?php
			echo'<section class="footer-subscribe">
			<div class="container">
			  <div class="footer-wrapper-three">
				<div class="footer-block-three">
				  <a href="#" class="footer-link-three">A propos</a>
				  <a href="#" class="footer-link-three">Features</a>
				  <a href="#" class="footer-link-three"></a>
				</div>
				<div class="footer-social-block-three">
				  <a href="#" class="footer-social-link-three w-inline-block"><img src="https://uploads-ssl.webflow.com/62434fa732124a0fb112aab4/62434fa732124a705912aaeb_facebook%20big%20filled.svg" loading="lazy" alt=""></a>
				  <a href="#" class="footer-social-link-three w-inline-block"><img src="https://uploads-ssl.webflow.com/62434fa732124a0fb112aab4/62434fa732124ab37a12aaf0_twitter%20big.svg" loading="lazy" alt=""></a>
				  <a href="#" class="footer-social-link-three w-inline-block"><img src="https://uploads-ssl.webflow.com/62434fa732124a0fb112aab4/62434fa732124a61f512aaed_instagram%20big.svg" loading="lazy" alt=""></a>
				  <a href="#" class="footer-social-link-three w-inline-block"><img src="https://uploads-ssl.webflow.com/62434fa732124a0fb112aab4/62434fa732124a717f12aaea_youtube%20small.svg" loading="lazy" alt=""></a>
				</div>
			  </div>
			  <div class="footer-divider-two"></div>
			  <div class="footer-bottom">
				<div class="footer-copyright">© 2023 Javaski.inc. Tous droits réservés - Auteurs : Baptiste BLANCHET, Matthias TRUPIN, Gaspard PONS</div>
				<div class="footer-legal-block">
				  <a href="#" class="footer-legal-link">Terms Of Use</a>
				  <a href="#" class="footer-legal-link">Privacy Policy</a>
				</div>
			  </div>
			</div>
		  </section>';
		?>
	</footer>
</body>
</html>

