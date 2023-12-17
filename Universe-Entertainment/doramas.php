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
							<li class="current"><a href="doramas.php">Doramas</a></li>
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
							<h2>Top 20 Doramas</h2>
							<p>Essa lista é baseada nos Doramas mais populares e comentados atualmente.</p>
						</header>

						<header>
							<h2 style="color:#000;">The Fiery Priest</h2>
							<p>Um padre, uma promotora e dois detetives vão se juntar para desmascarar a morte de um padre e tentar mostrar 	para a população um grupo de corruptos que estão ficando cada dia mais ricos com o dinheiro do povo.
							</p>
						</header>
						<span class="image featured"><img src="images/Doramas/TheFieryPriest.png" alt="Banner The Fiery Priest" /></span>

						<header>
						<h2 style="color:#f8dba4;">Hello, My Twenties</h2>
						<p>Acompanha o dia-a-dia de cinco amigas estudantes universitárias. Enquanto Jin-Myung está muito ocupada se 			sustentando financeiramente sozinha ao mesmo tempe em que se dedica a faculdade, Ye-Eun é bem clara sobre o que 	gosta ou não em relação ao namorado.
						</p>
						</header>
						<span class="image featured"><img src="images/Doramas/HelloMyTwenties.png" alt="Banner Hello, My Twenties" /></span>

						<header>
							<h2 style="color:#092061;">Hotel Del Luna</h2>
							<p>Convidado para gerenciar um hotel para almas penadas, ele acaba conhecendo a antiga proprietária do lugar e seu 		mundo sobrenatural.
							</p>
						</header>
						<span class="image featured"><img src="images/Doramas/HotelDelLuna.png" alt="Banner Hotel Del Luna" /></span>

						<header>
							<h2 style="color:#e4aab6;">Strong Woman Do Bong-Soon</h2>
							<p>Embora Bong Soon anseie por ser uma mulher elegante e delicada pela qual os homens se apaixonam, ela não pode 	renunciar seu poder. Felizmente, este é o atributo especial permite que ela consiga um emprego como 				guarda-costas de Ahn Min Hyuk, o herdeiro com tendências excêntricas que administra uma empresa de jogos.
							</p>
						</header>
						<span class="image featured"><img src="images/Doramas/StrongWomanDoBongSoon.png" alt="Banner Strong Woman Do Bong Soon" /></span>

						<header>
							<h2 style="color:#9f1730;">Goblin: The Lonely and Great God</h2>
							<p>Kim Shin é um goblin imortal responsável por proteger as almas dos humanos. Ele está decidido a perder sua imortalidade, mas um goblin só pode pôr fim à sua vida se ele se casar com uma pessoa. É por isso que agora ele investe todos os seus esforços para conquistar a bela Ji Eun-tak.
							</p>
						</header>
						<span class="image featured"><img src="images/Doramas/Goblin.png" alt="Banner Goblin" /></span>

						<header>
							<h2 style="color: #35b992;">Extra-ordinary you</h2>
							<p>Acompanha a garota do ensino médio Eun Dan-oh, que é uma estudante de uma academia de prestígio. Um dia, por 	acaso, ela descobre que ela e todos os outros em seu mundo são na verdade personagens de uma história em 		quadrinhos intitulada Secret.
							</p>
						</header>
						<span class="image featured"><img src="images/Doramas/ExtraordinaryYou.png" alt="Banner Extraordinary You" /></span>

						<header>
							<h2 style="color: #60412d;">Crash Landing on You</h2>
							<p>Depois de um acidente de parapente uma herdeira sul-coreana vai parar na Coreia do Norte. Lá, ela acaba 			conhecendo um oficial do exército, que vai ajudá-la a se esconder.
							</p>
						</header>
						<span class="image featured"><img src="images/Doramas/CrashLandingOnYou.png" alt="Banner Crash Landing On You" /></span>

						<header>
							<h2 style="color: #372c3c;">Doom at your service</h2>
							<p>Conta a história da editora Tak Dong Kyung, que é diagnosticada com um câncer múltiplo em seu 	estágio final e tem aproximadamente 3 meses de vida restantes. Após um péssimo dia, ela deseja a desgraça para 		o mundo inteiro.
							</p>
						</header>
						<span class="image featured"><img src="images/Doramas/DoomAtYourService.png" alt="Banner Doom At Your Service" /></span>

						<header>
							<h2 style="color: #d2b797;">Descendants of the sun</h2>
							<p>Conta a história de um capitão das forças especiais que se apaixona por uma médica e após alguns 				desentendimentos, ambos são enviados para uma operação especial em um país em guerra.
							</p>
						</header>
						<span class="image featured"><img src="images/Doramas/DescendantsOfTheSun.png" alt="Banner Descendants Of The Sun" /></span>

						<header>
							<h2 style="color: #0a0d18;">Tomorrow</h2>
							<p>Depois se tornar meio humano e meio espírito por acidente, um jovem entra para uma equipe de anjos da morte 		para realizar missões especiais.
							</p>
						</header>
						<span class="image featured"><img src="images/Doramas/Tomorrow.png" alt="" /></span>

						<header>
							<h2 style=color:#a8363f>My Roommate is a Gumiho</h2>
							<p>Shin Woo Yeo é um professor bonito e inteligente. Ele também é uma raposa de nove caudas de 999 anos. Para se 	tornar um humano, ele coleta energia humana em uma conta.
							</p>
						</header>
						<span class="image featured"><img src="images/Doramas/MyRoommateIsAGumiho.png" alt="" /></span>

						<header>
						<h2 style="color:#28334f;">What's Wrong with Secretary Kim</h2>
						<p>Conta a história do presidente narcisista de uma grande corporação, Lee Young-joon, e sua altamente capacitada 		secretária, Kim Mi-so. Mal-entendidos surgem quando ela anuncia que vai renunciar de sua posição, depois de 		trabalhar para Lee Young-joon por nove anos.
						</p>
						</header>
						<span class="image featured"><img src="images/Doramas/WhatsWrongWithSecretariaKim.png" alt="" /></span>

						<header>
							<h2 style="color:#cf628b;">Hey ghost let's fight</h2>
							<p>Conta a história de Park Bong-pal que cresceu com a habilidade de ver fantasmas. Ele usa seus poderes trabalhando como exorcista, banindo espirítos malignos para outra dimensão.
							</p>
						</header>
						<span class="image featured"><img src="images/Doramas/HeyGhostLetsFight.png" alt="" /></span>

						<header>
							<h2 style="color:#607249;">Mystic pop up bar</h2>
							<p>Um cara com um dom especial começa a trabalhar num bar centenário, onde a dona mergulha nos sonhos dos clientes 		para resolver os problemas emocionais deles.
							</p>
						</header>
						<span class="image featured"><img src="images/Doramas/MysticPopUpBar.png" alt="" /></span>

						<header>
							<h2 style="color:#cd5756;">Reply 1988</h2>
							<p> Os cinco amigos de infância e moradores da mesma vizinhança, Sung Duk-sun, Choi Taek , Sung Sun-woo , Kim 		Jung-hwan e Ryu Dong-ryong, passam seu tempo livre juntos, enquanto terminam seus últimos anos de adolescência 		e do ensino médio.
							</p>
						</header>
						<span class="image featured"><img src="images/Doramas/Reply1988.png" alt="" /></span>

						<header>
							<h2 style="color: #000;">Kill me, Heal me</h2>
							<p>Cha Do-ryun é um jovem herdeiro que, depois de várias experiências traumáticas desenvolveu o transtorno 			dissociativo de identidade, ou seja, ele tem várias personalidades que tomam controle de seu corpo e agem 		contra sua vontade.
							</p>
						</header>
						<span class="image featured"><img src="images/Doramas/KillMeHealMe.png" alt="" /></span>

						<header>
							<h2 style="color: #2c4434;">All of us are dead</h2>
							<p>Uma escola secundária da Coreia do Sul se torna o ponto zero no início de um apocalipse zumbi. Os estudantes 	presos no campus devem lutar para sobreviver contra um vírus desconhecido e um grupo de mortos-vivos 			sanguinários.
							</p>
						</header>
						<span class="image featured"><img src="images/Doramas/AllOfUsAreDead.png" alt="" /></span>

						<header>
							<h2 style="color: #000;">The Uncanny Counter</h2>
							<p>Empregados de um restaurante de noodles durante o dia e caçadores de demónios à noite: os counters usam os seus 		poderes especiais para perseguir espíritos malignos.
							</p>
						</header>
						<span class="image featured"><img src="images/Doramas/TheUncannyCounter.png" alt="" /></span>

						<header>
							<h2 style="color: #000;">It's Okay to Not Be Okay</h2>
							<p>O encontro entre uma escritora de livros infantis e um cuidador de doentes mentais dá início a uma jornada de 	superação dos problemas emocionais que ambos enfrentam.
							</p>
						</header>
						<span class="image featured"><img src="images/Doramas/ItsOkaytoNotBeOkay.png" alt="" /></span>

						<header>
							<h2 style="color: #000;">Vincenzo</h2>
							<p>Ao visitar sua terra natal, um advogado coreano que trabalha para a máfia italiana se envolve numa batalha 		contra um poderoso conglomerado. E faz justiça a seu modo.
							</p>
						</header>
						<span class="image featured"><img src="images/Doramas/Vincenzo.png" alt="" /></span>

						<p>Para mais doramas e informações acesse: <a href="https://www.aficionados.com.br/melhores-doramas-romanticos/" target="_blank">Top 29 Doramas românticos</a></p>

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