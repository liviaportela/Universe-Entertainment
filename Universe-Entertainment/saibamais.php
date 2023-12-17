<?php 
ob_start();
?>

<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<link rel="icon" href="images/Ícone.png">
        <title>Universe Entertainment</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<?php
		session_start();
		
		if(!isset($_SESSION["email"])){
			die("Você não pode acessar esta página porque não está logado.<p><a href=\"index.html\">Entrar</a></p>");
		}
		?>

		<!-- Header -->
			<div id="header">

				<!-- Logo -->
				<h1 style="color: white;"><a href="home.php" id="logo">Universe Entertainment</a></h1>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="home.php">Home</a></li>
							<li><a href="animes.php">Animes</a></li>
							<li><a href="desenhos_animados.php">Desenhos animados</a>
							<li><a href="doramas.php">Doramas</a></li>
							<li><a href="filmes.php">Filmes</a></li>
							<li><a href="perfil.php">Perfil</a></li>
						</ul>
					</nav>

			</div>

		<!-- Main -->
			<section class="wrapper style1">
				<div class="container">
					<div id="content">

						<!-- Content -->

							<article>
								<header>
									<h2>Saiba mais</h2>
                                    <p>A Universe Entertaiment é uma organização com o objetivo apenas de gerar entretenimento para todos os interessados. Precisamos de apoio financeiro para continuar trazendo informações e sujestões, se for possível, por favor nos ajude e doe qualquer quantia.</p>
								</header>
							</article>

					</div>
				</div>
			</section>

		<!-- Footer -->
		<div id="footer">
			<div class="container">
				<div class="row">
					<section class="3u 6u(narrower) 12u$(mobilep)">
						<h3></h3>
						<ul class="links">
							<li><a href="#"></a></li>
						</ul>
					</section>
					<section class="6u 12u(narrower)">
						<h3>Entre em contato: </h3>
						<form>
							<div class="row 50%">
								<div class="6u 12u(mobilep)">
									<input type="text" name="name" id="name" placeholder="Nome" />
								</div>
								<div class="6u 12u(mobilep)">
									<input type="email" name="email" id="email" placeholder="Email" />
								</div>
							</div>
							<div class="row 50%">
								<div class="12u">
									<textarea name="message" id="message" placeholder="Mensagem" rows="5"></textarea>
								</div>
							</div>
							<div class="row 50%">
								<div class="12u">
									<ul class="actions">
										<li><input type="submit" class="button alt" value="Enviar" /></li>
									</ul>
								</div>
							</div>
						</form>
					</section>
					<section class="3u 6u$(narrower) 12u$(mobilep)">
						<h3></h3>
						<ul class="links">
							<li><a href="#"></a></li>
						</ul>
					</section>
				</div>
			</div>

				<!-- Icons -->
				<ul class="icons">
					<li><a href="#" target="_blank" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" target="_blank" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
				</ul>

				<!-- Copyright -->
				<div class="copyright">
					<ul class="menu">
						<li>&copy; Universe Entertainment. All rights reserved</li><li>Design: <a href="http://html5up.net" target="_blank">HTML5 UP</a></li>
					</ul>
				</div>

			</div>

	</body>
</html>