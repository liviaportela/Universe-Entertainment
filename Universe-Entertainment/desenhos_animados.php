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
							<li class="current"><a href="desenhos_animados.php">Desenhos animados</a>
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
									<h2>Top 10 Desenhos Animados</h2>
									<p>Essa lista é baseada nos Desenhos Animados mais populares e comentados atualmente.</p>
								</header>

								<header>
									<h2 style="color:#a6ce22;">Scooby-Doo! Mistério S/A</h2>
									<p>Sinopse: Esta encarnação da popular série de desenho animado encontra
										Scooby-Doo e sua gangue vivendo em uma pequena cidade com uma longa
										história de fantasmas, monstros e outros mistérios prontos para serem
										solucionados.
									</p>
								</header>
								<span class="image featured"><img src="images/Desenhos_Animados/ScoobyDoo.png" alt="Banner Scooby Doo" /></span>

								<header>
								<h2 style="color:#FFD700;">Bob esponja</h2>
								<p>Sinopse: Uma esponja-do-mar chamada Bob Esponja Calça Quadrada mora com seu
									caracol de estimação na Fenda do Biquíni, no fundo do oceano. Bob trabalha
									no Siri Cascudo e, nas horas vagas, vive arrumando confusões com seu melhor amigo,
									a estrela-do-mar Patrick. 
								</p>
								</header>
								<span class="image featured"><img src="images/Desenhos_Animados/BobEsponja.png" alt="Banner Bob Esponja" /></span>

								<header>
									<h2 style="color:#DF0101;">O Novo Pica-Pau</h2>
									<p>Sinopse: O desenho acompanha as aventuras de um pássaro muito engraçado que sempre se envolve em situações
										divertidas.
									</p>
								</header>
								<span class="image featured"><img src="images/Desenhos_Animados/PicaPau.png" alt="Banner Pica-Pau" /></span>

								<header>
									<h2 style="color:#4682b4;">Gravity Falls: Um Verão de Mistérios</h2>
									<p>Sinopse: Os gêmeos Dipper e Mabel Pines passam as férias com o tio-avô numa misteriosa cidade. Eles tentam se
										adaptar	à estranha região, mas sentem algo estranho e começam a investigar. Dipper encontra um diário codificado
										e a aventura começa.
									</p>
								</header>
								<span class="image featured"><img src="images/Desenhos_Animados/GravityFalls.png" alt="Banner Gravity Falls" /></span>

								<header>
									<h2 style="color:#a00000;">Hora de Aventura</h2>
									<p>Sinopse: Com 12 anos de idade, Finn combate o mal na terra de Ooo na companhia de seu cachorro mágico, Jake.
										Quando estes dois grandes amigos se juntam e dizem as palavras mágicas "Hora de Aventura", tudo pode
										acontecer.
									</p>
								</header>
								<span class="image featured"><img src="images/Desenhos_Animados/HoraDeAventura.png" alt="Banner Hora de Aventura" /></span>

								<header>
									<h2 style="color: #e598e5;">A Pantera Cor-de-Rosa</h2>
									<p>Sinopse: A Pantera Cor-de-Rosa foi um personagem criado para fazer apenas uma introdução ao filme Pantera
										Cor-de-Rosa, de Blake Edwards. O sucesso foi tão grande que começou a ter uma série animada própria.
									</p>
								</header>
								<span class="image featured"><img src="images/Desenhos_Animados/PanteraCorDeRosa.png" alt="Banner Pantera Cor de Rosa" /></span>

								<header>
									<h2 style="color: #96afe8;">Apenas um Show</h2>
									<p>Sinopse: Mordecai e Rigby são guardas de um parque, mas esses melhores amigos são preguiçosos e não deixam o
										trabalho interferir com sua capacidade de se divertir. Os amigos acabam sempre pagando pelas suas ações
										irresponsáveis, pois se metem em mais confusões do que esperavam.
									</p>
								</header>
								<span class="image featured"><img src="images/Desenhos_Animados/ApenasUmShow.png" alt="Banner Apenas um Show" /></span>

								<header>
									<h2 style="color: #708090;">As Aventuras de Tom e Jerry</h2>
									<p>Sinopse: Sempre tramando um contra o outro, o gato Tom e o rato Jerry estão constantemente
										realizando travessuras e deixando o caos para trás.
									</p>
								</header>
								<span class="image featured"><img src="images/Desenhos_Animados/TomEJerry.png" alt="Banner Tom & Jerry" /></span>

								<header>
									<h2 style="color: #f72f00;"> O Show dos Looney Tunes</h2>
									<p> Sinopse: O conceito do show gira em torno dos companheiros de quarto Pernalonga e Patolino
										que vivem no subúrbio de Los Angeles com "vizinhos diferentes", incluindo Lola, Tina, Gaguinho,
										Frangolino, Hortelino, Frajola, Piu-Piu, Vovó, Gossamer, Eufrazino, Ligeirinho, Marvin, Pete Puma
										e muitos outros.
									</p>
								</header>
								<span class="image featured"><img src="images/Desenhos_Animados/LooneyTunes.png" alt="Banner Looney Tunes" /></span>

								<header>
									<h2 style="color: #8A0868;">Os Padrinhos Mágicos</h2>
									<p>Sinopse: As interessantes aventuras de um menino de dez anos e seus padrinhos com poderes especiais. Juntos,
										o grupo provoca um caos mágico.
									</p>
								</header>
								<span class="image featured"><img src="images/Desenhos_Animados/PadrinhosMagicos.png" alt="Banner Padrinhos Mágicos" /></span>

								<p>Para mais desenhos animados e informações acesse: <a href="https://www.maioresemelhores.com/melhores-desenhos-animados-ja-transmitidos/" target="_blank">Top 23 desenhos animados</a></p>
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