<?php
function Age($date_naissance)
{
    $arr1 = explode('/', $date_naissance);
    $arr2 = explode('/', date('d/m/Y'));

    if(($arr1[1] < $arr2[1]) || (($arr1[1] == $arr2[1]) && ($arr1[0] <= $arr2[0])))
    return $arr2[2] - $arr1[2];

    return $arr2[2] - $arr1[2] - 1;
}
$mon_age = Age('16/04/1994');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Nicolas Leucci - Technicien supérieur en informatique</title>
	<meta charset="utf-8" />
	<meta name="author" content="LEUCCI Nicolas" />
	<meta name="description" content="Nicolas Leucci - Portfolio et CV en ligne" />
	<meta name="keywords" content="nicolas, leucci, website, developper, internet, flat, design, nicolasleucci" />
	<meta name="viewport"  content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta property="og:image" content="http://nicolasleucci.fr/img/logo-nico.png" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/bootstrap-theme.min.css" />
	<link rel="stylesheet" href="css/cslider.css" />
    <link rel="stylesheet" href="css/jquery.powertip.min.css" />
	<link rel="stylesheet" href="css/style_responsive.css" />
	<link rel="start" title="Accueil" href="index.php" />
	<link rel="icon" type="image/png" href="img/favicon.png" />
</head>
	<body>

	<section id="header" class="container_parallax relative">

		<div class="hidden-xs col-md-2 "></div>

		<div class="col-xs-12 col-sm-12 col-md-8">

			<p class="title relative text-center"><b>B</b>onjour !</p>
			<p class="subtitle relative p1 text-center"><b>J</b>e m'appelle Nicolas Leucci</p>
			<p class="subtitle relative p2 text-center"><b>e</b>t je suis développeur.</p>
			<p class="relative text-center display_none"><img src="img/menu_arrow.png" class="menu_arrow img-responsive" /></p>

		</div>

		<div class="hidden-xs col-md-2"></div>

	</section> <!-- /header -->

	<div class="under-navbar">

		<div id="nav" class="navbar navbar-style relative affix-top" role="navigation">

			<ul class="text-center">
				<li>
					<img src="img/navbar/about.png" alt="About me" class="navbar-img" id="aboutme"/>
				</li>
				<li>
					<img src="img/navbar/skills.png" alt="Skills" class="navbar-img" id="skills_nav"/>
				</li>
				<li>
					<img src="img/navbar/portfolio.png" alt="Portfolio" class="navbar-img" id="portfolio_nav"/>
				</li>
				<li>
					<img src="img/navbar/contact.png" alt="Contact" class="navbar-img" id="contact_nav"/>
				</li>
			</ul>

            <ul class="flag">
                <li><a href="/en/" class="bulle"><img src="img/en_flag.png" alt="In english please" /></a></li>
            </ul>

		</div> <!-- /navbar -->

	</div> <!-- /Undernavbar -->

	<div class="baro bar-blue"></div>

	<section id="about" class="relative">

		<div class="row">

			<div class="container">

				<div class="col-xs-12 hidden-sm hidden-md hidden-lg text-center picture">
					<img src="img/nicolasleucci.png" style="width: 250px;"/>
				</div>

				<div class="hidden-xs col-sm-4 col-md-4 text-center">

					<img src="img/polaroid_up.png" class="hidden-xs polaroid polaroid_up" />
					<img src="img/polaroid_down.png" class="hidden-xs polaroid polaroid_down" />
					<img src="img/nicolasleucci.png" class="hidden-xs polaroid polaroid_picture" />

				</div>

				<div class="col-xs-12 col-sm-8 col-md-8 about_text">

					<br />
					<p class="about_title">
						J'ai <?php echo $mon_age; ?> ans et je suis un <span style="color: white; background:#EC6454;">&nbsp;technicien supérieur en informatique&nbsp;</span>.
					</p>
					<br /><br />
					<p class="about_subtext">
						J'étudie à Arras à l'Ecole Privée des Sciences Informatiques (EPSI), où j'ai acquis le BTS des Services Informatiques aux Organisations (SIO).
						<br /><br />
						Je suis passionné par les nouvelles technologies,  l'actualité numérique et je développe à mes heures perdues.

						<br /><br />
						J'aime également:<br />
						<ul class="enjoy_list">
							<li>Être bénévole à la SPA</li>
							<li>Faire de l'équitation</li>
							<li>Pratiquer le Laser Game</li>

						</ul>

					</p>

				</div> <!-- /about_text -->

			</div> <!-- /container -->

		</div> <!-- /row -->

	</section> <!-- /about -->

	<section id="school" class="relative">

		<div class="row">

			<div class="container">

				<div class="col-xs-12 col-sm-4 col-md-6 epsi">

					<a href="http://www.epsi.fr" target="_blank"><div class="school_epsi school_logo"></div></a><br /><br /><br />
					<a href="http://www.epnet.fr" target="_blank"><div class="school_epnet school_logo"></div></a>

				</div>
				<div class="col-xs-12 col-sm-8 col-md-6 bubble">

					<p class="school_title">
						EPSI<br />École d'ingénierie informatique</p>
						<p class="school_desc">Délivre le BTS de Services Informatiques aux Organisations et un Master Informatique. Nous étudions notamment le management, l'économie, la programmation, le réseau et le matériel informatique. </p>

						<br />
						<br />

						<p class="school_title">EPNet<br />Association de développement Web</p>
						<p class="school_desc">Je suis également membre de cette association qui a pour but de développer des applications web pour entreprise ou particulier. </p>

					</p>

				</div> <!-- /bubble -->

			</div> <!-- /container -->

		</div> <!-- /row -->

	</section> <!-- /school -->

	<section id="quote_back" class="relative container_parallax">

		<p class="text-center quote">
			&ldquo; La vie, c’est comme une bicyclette, il faut avancer pour ne pas perdre l’équilibre. &rdquo;<br />
			&mdash; Albert Einstein
		</p>

	</section> <!-- /quote -->

	<section id="skills" class="relative">

		<div class="row">

			<div class="container">

				<div class="col-xs-12 col-sm-12 col-md-12">

					<div id="da-slider" class="da-slider">

						<div class="da-slide">

							<h2>Responsive design</h2><br /><br />
							<p>
								Les sites internet en responsive design permettent <b>une mise en page pour tablettes et mobiles pour une adaptation parfaite</b>.
								 Passer d'un ordinateur à un téléphone portable ? Ce n'est pas un problème.
								<br /><br />
							</p>
							<div class="da-link">Grâce à: BootStrap - HTML5</div>
							<div class="da-img da-img-margin"><img src="img/cslider/Responsive-Design.png" alt="Responsive design" /></div>
						</div>

						<div class="da-slide">
							<h2>Accès sécurisés</h2><br /><br />
							<p>
								Une <b>interface d'administration sécurisées avec nom d'utilisateur et mot de passe</b>, c'est possible !
								<br /><br />
							</p>
							<div class="da-link">Grâce à: PHP5 - MySQL</div>
							<div class="da-img"><img src="img/cslider/lock.png" alt="Rocket developper" /></div>
						</div>

						<div class="da-slide">
							<h2>Créativité et rapidité</h2><br /><br />
							<p>
								<b>De belles animations, un design moderne et un site internet agréable pour vous et vos visiteurs</b>.<br />Je vous aide à modéliser vos idées tout en donnant le meilleur de moi-même.
								<br /><br />
							</p>
							<div class="da-link">Grâce à : JavaScript / jQuery, CSS3</div>
							<div class="da-img"><img src="img/cslider/rocket.png" alt="Rocket developper" /></div>
						</div>

						<nav class="da-arrows">
							<span class="da-arrows-prev"></span>
							<span class="da-arrows-next"></span>
						</nav>

					</div> <!-- /da-slider -->

				</div>

			</div> <!-- /container -->

		</div> <!-- /row -->

	</section> <!-- /skills -->

	<section id="portfolio" class="relative">

		<div class="row">

			<div class="container">

				<p class="project_title">Mon projet actuel</p><br />
				<figure>
					<img id="current_project" src='img/portfolio/small/cc2sources_small.png' data-zoom-image="img/portfolio/large/cc2sources_large.jpg"/>
					<figcaption>« Communauté de Communes des 2 sources »</figcaption>
				</figure>
				<br /><br /><br /><br />

				<p class="project_title">Projets terminés</p><br />

				<div class="view view-first">
				     <img src="img/portfolio/steve-c-foto.png" />
				     <div class="mask">
					     <h2>Steve C Foto</h2>
					     <p>Site pour un photographe avec un thème sombre et bleu.</p>
					     <a href="http://steve-c-foto.fr/" class="info" target="_blank">VOIR</a>
				     </div>
				</div>

				<div class="view view-first">
				     <img src="img/portfolio/nicolasleucci.png" />
				     <div class="mask">
					     <h2>Nicolas Leucci</h2>
					     <p>Site portfolio personnel, celui-ci même.</p>
					     <a href="http://nicolasleucci.fr/" class="info" target="_blank">VOIR</a>
				     </div>
				</div>

			</div> <!-- /container -->

		</div> <!-- /row -->

	</section> <!-- /portfolio -->

	<section id="map_section">

		<div id="map"></div>

	</section> <!-- /footer -->

	<section id="contact">

		<div class="row">

			<div class="container">

				<center>

				<div class="col-xs-12 col-sm-12 col-md-12 contact_div">

					<p class="contact_text contact_title">Une idée, un projet ? Contactez-moi !</p>
                    <p class="contact_text contact_phone">Vous pouvez aussi <b><a href="/cv/" >voir mon CV</a></b></p>


					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<a href="mailto: leucci.nicolas@gmail.com" target="_blank"><img src="img/mail.png" class="contact_logo" alt="Email me" /></a>
							</div>
							<div class="back">
								<a href="mailto: leucci.nicolas@gmail.com" target="_blank"><img src="img/mail_hover.png" class="contact_logo" alt="Email me" /></a>
							</div>
						</div>
					</div>
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<a href="https://www.facebook.com/nicolas.leucci.9" target="_blank"><img src="img/facebook.png" class="contact_logo" alt="Join my Facebook" /></a>
							</div>
							<div class="back">
								<a href="https://www.facebook.com/nicolas.leucci.9" target="_blank"><img src="img/facebook_hover.png" class="contact_logo" alt="Join my Facebook" /></a>
							</div>
						</div>
					</div>
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<a href="https://plus.google.com/u/0/117681078485805734289/posts" target="_blank"><img src="img/googleplus.png" class="contact_logo" alt="Join my Google plus" /></a>
							</div>
							<div class="back">
								<a href="https://plus.google.com/u/0/117681078485805734289/posts" target="_blank"><img src="img/googleplus_hover.png" class="contact_logo" alt="Join my Google plus" /></a>
							</div>
						</div>
					</div>

					<p class="contact_text contact_phone"><img src="img/phone.png" alt="phone" /> (+33) 6 80 51 98 76</p>


				</div>

				</center>

			</div> <!-- /container -->

		</div> <!-- /row -->

	</section> <!-- /contact -->


	<section id="copyright" class="relative">

		<div class="row">

			<div class="container">

				  Imaginé et développé par Nicolas Leucci <img src="img/rainbow.png" alt="Rainbow" class="rainbow"/> 2014

			</div> <!-- /container -->

		</div> <!-- /row -->

	</section> <!-- /copyright -->

	<script type="text/javascript" src="js/jquery/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery/jquery.easing-1.3.min.js"></script>
	<script type="text/javascript" src="js/jquery/jquery.hoverpulse.js"></script>
	<script type="text/javascript" src="js/jquery/jquery.parallax-1.1.js"></script>
	<script type="text/javascript" src="js/jquery/jquery.scrollTo-min.js"></script>
	<script type="text/javascript" src="js/jquery/jquery.elevateZoom-3.0.8.min.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
    <script type="text/javascript" src="js/jquery/jquery.powertip.min.js"></script>
	<script type="text/javascript" src="js/jquery/jquery.cslider.js"></script>
	<script type="text/javascript" src="js/waypoints.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/googlemap_api.js"></script>
	<script type="text/javascript" src="js/google.js"></script>
	<script type="text/javascript">
	$(function() {
		$('#da-slider').cslider({
			bgincrement	: 0
		});
	});
    $('.bulle').powerTip({
    placement: 'sw'
    });
    $('.bulle').data('powertip', 'In english please');

	</script>
</body>
</html>
