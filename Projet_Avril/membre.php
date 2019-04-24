<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Construction</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/jquery.min.js"></script>
<script src="js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<link href='//fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
</head>
<body>
 

	<div class="h_menu">
		<a id="touch-menu" class="mobile-menu" href="#">Menu</a>
		<nav>
		<ul class="menu list-unstyled">
			<li class="activate"><a href="index.php">Accueil</a>
			</li>	
			<li><a href="membre.php">Services</a>
			</li>
			<li><a href="services.php">Voir mes services</a></li>
			
			<li>
				<?php if ($_SESSION['email']) {
				echo '<a href="deconnexion.php">Déconnexion</a>';
			}else{
				header('Location:index.php');
			} ?>
			</li>
			<div class="clear"> </div>
		</ul>
		</nav> 
		<script src="js/menu.js" type="text/javascript"></script>
		</div>

			 <div class="header_bottom_center_images" >
              <section class="slider">
				  <div class="flexslider">
					<ul class="slides">
						<li><img src="images/maçon.jpg" alt=""/></li>
						<li><img src="images/electricien.jpg" alt=""/></li>
						<li><img src="images/plombier.jpg" alt=""/></li>
				    </ul>
				  </div>
	      </section>
	    </div>
	    <h1 style="font-size: 40px"><marquee style="color:orange">Le prix d'un ouvrier quelque soit le service est 4000 Fcfa/jours</marquee></h1>
	 
    		<div class="clear"></div>
    	</div>
			<div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="compte.php"><img src="images/plombier.jpg" alt="" /></a>
					
					 <h2>Besoin de plombier pour vos traveaux ? </h2>
				     <div class="button"><a href="demande_service.php" class="cart-button">Demander un service</a> </div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="compte.php"><img src="images/plombier.jpg" alt="" /></a>
					
					 <h2>Besoin de Menuisier pour vos traveaux ? </h2>
				     <div class="button"><a href="demande_service.php" class="cart-button">Demander un service</a> </div>
				</div>
					 
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="compte.php"><img src="images/electricien.jpg" alt="" /></a>
					
					 <h2>Besoin d'Electricien pour vos traveaux ? </h2>
				     <div class="button"><a href="demande_service.php" class="cart-button">Demander un service</a> </div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="compte.php"><img src="images/maçon.jpg" alt="" /></a>
					 <h2>Besoin de maçon pour vos traveaux ? </h2>
				     <div class="button"><a href="demande_service.php" class="cart-button">Demander un service</a></div>
				</div>
			</div>
    </div>
 </div>
</div>
   <div class="footer">	
			<div class="copy_right">
				<p style="color: white">&copy; 2019 Construction. Tous droits réservés</p>
		   </div>
     </div>
    <script type="text/javascript">
		$(document).ready(function() {
			
			var defaults = {
	  			containerID: 'toTop',
				containerHoverID: 'toTopHover',
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
    <link href="css/flexslider.css" rel='stylesheet' type='text/css' />
							  <script defer src="js/jquery.flexslider.js"></script>
							  <script type="text/javascript">
								$(function(){
								  SyntaxHighlighter.all();
								});
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
							  </script>



</body>
</html>

