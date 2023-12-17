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
							<li class="current"><a href="filmes.php">Filmes</a></li>
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
							<h2>Top 10 Filmes</h2>
							<p>Essa lista é baseada nos Filmes mais populares e comentados atualmente.</p>
						</header>

						<header>
							<h2 style=color:#a11111>Harry Potter</h2>
							<p>Harry Potter é um garoto órfão que vive infeliz com seus tios, os Dursleys. Ele recebe uma carta contendo um 	convite para ingressar em Hogwarts, uma famosa escola especializada em formar jovens bruxos. Inicialmente, 		Harry é impedido de ler a carta por seu tio, mas logo recebe a visita de Hagrid, o guarda-caça de Hogwarts, 	que chega para levá-lo até a escola. Harry adentra um mundo mágico que jamais imaginara, vivendo diversas 		aventuras com seus novos amigos, Rony Weasley e Hermione Granger.
							</p>
						</header>
						<span class="image featured"><img src="images/Filmes/HarryPotter.png" alt="" /></span>

						<header>
							<h2 style=color:#acacac>Quatro Vidas de um Cachorro</h2>
							<p>Um cachorro morre e reencarna várias vezes na Terra. Embora encontre novas pessoas e viva muitas aventuras, ele 		mantém o sonho de reencontrar Ethan, o seu primeiro dono, que sempre foi seu maior amigo.
							</p>
						</header>
						<span class="image featured"><img src="images/Filmes/QuatroVidasDeUmCachorro.png" alt="" /></span>

						<header>
							<h2 style=color:#a66a45>Sempre ao Seu Lado</h2>
							<p>Professor universitário encontra na estação de trem um filhote de cachorro da raça Akita, conhecida por sua 		lealdade. O cão passa a acompanhá-lo até a estação de trem e esperar sua volta. Até que um acontecimento 		inesperado altera sua vida.
							</p>
						</header>
						<span class="image featured"><img src="images/Filmes/SempreAoSeuLado.png" alt="" /></span>

						<header>
							<h2 style="color: #000;">Your Name</h2>
							<p>Mitsuha é a filha do prefeito de uma pequena cidade, mas sonha em tentar a sorte em Tóquio. Taki trabalha em um 	restaurante em Tóquio e deseja largar o seu emprego. Os dois não se conhecem, mas estão conectados pelas imagens 	de seus sonhos.
							</p>
						</header>
						<span class="image featured"><img src="images/Filmes/YourName.png" alt="" /></span>

						<header>
							<h2 style="color: #0e6d5d;">Weathering With You</h2>
							<p>Em um dia de chuva extrema, o estudante do ensino médio Hodaka Morishima foge de sua problemática casa rural 	para Tóquio e faz amizade com uma menina órfã que tem o poder de manipular o clima.
							</p>
						</header>
						<span class="image featured"><img src="images/Filmes/WeatheringWithYou.png" alt="" /></span>

						<header>
							<h2 style=color:#d8887f>A Viagem de Chihiro</h2>
							<p>Chihiro e seus pais estão se mudando para uma cidade diferente. A caminho da nova casa, o pai decide pegar um 	atalho. Eles se deparam com uma mesa repleta de comida, embora ninguém esteja por perto. Chihiro sente o 			perigo, mas seus pais começam a comer. Quando anoitece, eles se transformam em porcos. Agora, apenas Chihiro 	pode salvá-los.
							</p>
							</header>
							<span class="image featured"><img src="images/Filmes/AViagemDeChihiro.png" alt="" /></span>
	
							<header>
								<h2 style=color:#f35309>Big Fish & Begonia</h2>
								<p>Em um reino místico povoado por seres mágicos, Chun participa de um ritual de amadurecimento onde é 			transportada para o mundo humano na forma de um golfinho vermelho, afim de entender como funcionam os 		humanos e as leis da natureza no nosso mundo.
								</p>
							</header>
							<span class="image featured"><img src="images/Filmes/BigFish&Begonia.png" alt="" /></span>

						<header>
							<h2 style="color: #49c045;">A Voz do Silêncio</h2>
							<p>Uma estudante com problemas de audição sofre com o bullying dos colegas e decide mudar de escola. Anos mais 		tarde, um dos rapazes que a importunavam resolve se redimir.
							</p>
						</header>
						<span class="image featured"><img src="images/Filmes/AVozDoSilencio.png" alt="" /></span>

						<header>
							<h2 style="color: #d53035;">O Castelo Animado</h2>
							<p>Uma bruxa lança uma terrível maldição sobre a jovem Sophie transformando-a numa velha de 90 anos. Desesperada, 	ela embarca numa odisseia em busca do Castelo Andante, onde reside um misterioso feiticeiro que poderá ajudá-la 	a reverter o feitiço.
							</p>
						</header>
						<span class="image featured"><img src="images/Filmes/OCasteloAnimado.png" alt="" /></span>

						<header>
							<h2 style="color: #282e46;">Meu Amigo Totoro</h2>
							<p>As irmãs Satsuki e Mei se mudam para o campo para ficar mais perto do hospital onde sua mãe está internada. Lá 	conhecem os Totoros, adoráveis criaturas místicas e alegres, que só podem ser vistas pelas crianças. Com eles, 		as duas irmãs viverão mágicas aventuras no campo.
							</p>
						</header>
						<span class="image featured"><img src="images/Filmes/MeuAmigoTotoro.png" alt="" /></span>

						<p>Para mais filmes e informações acesse: <a href="https://www.oficinadanet.com.br/netflix2018/23817-os-melhores-filmes-para-assistir-na-netflix-em-2018" target="_blank">Top 25 filmes na netflix</a></p>

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