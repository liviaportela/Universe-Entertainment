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
							<li class="current"><a href="animes.php">Animes</a></li>
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
							<h2>Top 10 Animes</h2>
							<p>Essa lista é baseada nos Animes mais populares e comentados atualmente.</p>
						</header>

						<header>
							<h2 style=color:#4dba9b>Demon Slayer : Kimetsu no Yaiba - 鬼滅きめつの刃</h2>
							<p>Tanjiro, um bondoso jovem que ganha a vida vendendo carvão descobre que sua família foi massacrada por um demônio. E, para piorar, Nezuko, sua irmã mais nova e única 				sobrevivente, também acabou transformada em um demônio. Arrasado com essa sombria realidade, Tanjiro decide se tornar um matador de demônios para fazer	sua irmã voltar a ser 		humana e para destruir o demônio que matou seus entes queridos.
							</p>
						</header>
						<span class="image featured"><img src="images/Animes/DemonSlayer.png" alt="Banner Demon Slayer" /></span>

						<header>
						<h2 style=color:#d8887f>Jujutsu Kaisen - 呪術廻戦</h2>
						<p>Itadori é um estudante comum e normal do ensino médio. Apesar do seu talento nos esportes,
							ele decide participar do Clube de Ocultismo, onde pode relaxar, sair com seus amigos e visitar
							seu	avô no hospital. Certo dia, os membros do clube encontram um objeto amaldiçoado na escola e
							retiram o selo de proteção, atraindo criaturas chamadas de "maldições". Para salvar os amigos que estavam
							sendo atacados, Itadori engole o objeto, absorvendo a maldição. Desse momento em diante, o garoto e a
							maldição compartilham o mesmo corpo, e a vida de Itadori muda completamente.
						</p>
						</header>
						<span class="image featured"><img src="images/Animes/JujutsuKaisen.png" alt="Banner Jujutsu Kaisen" /></span>

						<header>
							<h2 style=color:#f35309>Naruto - ナルト</h2>
							<p>Um jovem aspirante a ninja de 12 anos, Naruto cresceu sob o desprezo dos moradores de sua vila, a Vila Oculta da Folha. Por este motivo, ele sonhava em crescer como ninja e um 		dia se tornar Hokage, líder do local, para ganhar o respeito das aldeias. Naruto entende que esse desafio será ainda maior do que esperava ao descobrir que é o hospedeiro de 		uma raposa demoníaca conhecida como Nove Caudas. Essa entidade devastou a Vila Oculta da Folha há 12 anos. Por este motivo, Naruto sempre foi tratado mal por sua aldeia, uma 		vez que a entidade, após ser vencida, foi selada nele.
							</p>
						</header>
						<span class="image featured"><img src="images/Animes/Naruto.png" alt="Banner Naruto" /></span>

						<header>
							<h2 style=color:#acacac>Fullmetal Alchemist: Brotherhood - 鋼の錬金術師</h2>
							<p>Depois de perderem sua mãe, Alphonse e Edward Elric tentam trazê-la de volta usando uma técnica de alquimia proíbida. Contudo, o princípio básico da alquimia é a "troca 			equivalente", e tentar ressucitar alguém custa muito alto. Ed perde sua perna, e Al perde seu corpo. Ed consegue selar a alma de Al dentro de uma grande armadura metálica, 		dando em troca seu braço. Anos depois, Ed (com dois membros de metal) e Al (ainda preso na armadura) deixam a sua cidade natal. Ed, que possui um talento nato para a alquimia, 	se torna um alquimista com certificado nacional, e logo passa a ser chamado de "fullmetal alchemist". Mas o verdadeiro objetivo dos irmãos é encontrar a pedra filosofal, na 		esperança de recuperarem os seus corpos originais. Logo eles descobrem que essa mística pedra, que pode nem existir, é visada não só por eles, mas como muitas outras pessoas 		também.
							</p>
						</header>
						<span class="image featured"><img src="images/Animes/FullmetalAlchemist.png" alt="Banner FullMetal Alchemist" /></span>

						<header>
							<h2 style=color:#a66a45>Attack on Titan - 進撃の巨人</h2>
							<p>A humanidade vive dentro de cidades cercadas por três enormes muralhas que
								os protegem dos gigantescos humanóides devoradores de humanos chamados de Titãs; a história
								segue Eren Yeager, que jura exterminar os Titãs após um Titã causar a destruição de sua cidade natal e a
								morte de sua mãe.
							</p>
						</header>
						<span class="image featured"><img src="images/Animes/AttackOnTitan.png" alt="Banner Attack On Titan" /></span>

						<header>
							<h2 style="color: #000;">Death Note - デスノート</h2>
							<p>Light é um adolescente responsável e um aluno brilhante, filho de uma figura importante da polícia japonesa. A sua vida se altera quando encontra o "Death Note" e o seu 			proprietário, um Shinimigami chamado Ryuk. Através daquelas páginas, Light passa a conseguir matar qualquer pessoa, desde que conheça o seu rosto e escreva o seu nome no 			caderno.  Com o objetivo de construir uma sociedade mais justa, ele começa a matar os criminosos da região. Tentando se manter anônimo e travando uma longa batalha contra as 		forças policiais, Light conhece um adversário à altura: L., conhecido internacionalmente pelos seus poderes de dedução.
							</p>
						</header>
						<span class="image featured"><img src="images/Animes/DeathNote.png" alt="Banner Death Note" /></span>

						<header>
							<h2 style="color: #0e6d5d;">My Hero Academia - 僕のヒーローアカデミア</h2>
							<p>Em um mundo onde (quase) todas as pessoas possuem superpoderes, o tímido estudante Izuku Midoriya teve a infelicidade de nascer sem nenhum dom especial. Grande fã do sorridente 	All Might, o herói máximo desse mundo, Deku, como é chamado pelos colegas, sofre com a frustração de saber que jamais terá uma individualidade especial para que possa se 			tornar, assim como seu grande ídolo, em um defensor dos fracos e oprimidos. Mesmo achincalhado por seus amigos de escola, como o arrogante Katsuki, o garoto nunca abandonou o 		herói existente dentro de si. Gentil e generoso, ele está sempre pronto a ajudar quem precisa. Porém, um inesperado encontro irá mudar o destino de Deku. Destino esse que o 		levará a ingressar no tão sonhado colégio U.A., instituição para onde todos os futuros grandes heróis vão estudar e treinar. A partir daí, as cortinas de uma fantástica 			aventura repleta de personagens cativantes e temerosos vilões se abrem para o jovem Midoriya.
							</p>
						</header>
						<span class="image featured"><img src="images/Animes/BokuNoHero.png" alt="Banner Boku no Hero" /></span>

						<header>
							<h2 style="color: #49c045;">Hunter × Hunter - ハンター×ハンター</h2>
							<p>A série conta a história de Gon Freecss, um garoto de 12 anos que pretende se tornar um Hunter, um caçador de tesouros, lugares perdidos e criaturas estranhas. Contudo, ao 			contrário da maioria dos Hunters que procuram fama e dinheiro, o herói da história tem uma motivação maior para querer ser um caçador – encontrar seu pai – um dos mais famosos 	hunters do mundo. Mas não é qualquer um que pode se tornar um Hunter. Para poder praticar essa reconhecida profissão, é necessário ter uma licença especial – e para tirá-la é 		preciso passar – e sobreviver – a exames com milhares de inscritos. Uma vez aprovado e com sua licença Hunter em mãos, o caçador passa a ter direito a acessar áreas restritas,		informações secretas e consegue acumular facilmente uma grande fortuna de acordo com seus feitos, incluindo ir atrás de Hunters que usam seus poderes para objetivos escusos.
							</p>
						</header>
						<span class="image featured"><img src="images/Animes/HunterXHunter.png" alt="Banner Hunter X Hunter" /></span>

						<header>
							<h2 style="color: #282e46;"> Haikyuu!! - ハイキュー!!</h2>
							<p>Shouyou Hinata, ao ver uma partida de voleibol, fica fascinado com “o Pequeno Gigante”, um
								habilidoso jogador de vôlei, então decide juntar-se ao clube de vôlei de sua escola, no entanto ele é o
								único membro do clube. Após 3 anos ele finalmente completa o time e ruma para a disputa do Torneio de Primavera. No entanto,
								seu primeiro oponente de cara é o preferido das finais. É neste momento que ocorre o encontro de Hinata com Tobio Kageyama, o
								“Rei das quadras”. Embora tenham perdido a partida, Shouyou ainda está determinado a tomar o título de Kageyama, e ser
								aquele que permanece na quadra. Ao entrar na escola secundária, ele surpreende-se ao ver que ele e Kageyama, antes
								adversários, estão agora na mesma escola e clube!
							</p>
						</header>
						<span class="image featured"><img src="images/Animes/Haikyuu.png" alt="Banner Haikyuu" /></span>

						<header>
							<h2 style="color: #d53035;">Cells At Work - はたらく細胞</h2>
							<p>Se passa em um corpo humano e traz o dia a dia de trabalho das células dentro do dele. mostra
								as células do corpo humano de maneira antropomórfica, tendo dois protagonistas: um Glóbulo Vermelho
								representado por uma garota de cabelos curtinhos e um Neutrófilo representado por um rapaz que se veste
								totalmente de branco, eles vivem se esbarrando em suas jornadas pelo corpo humano. Os personagens não
								possuem nomes, são tratados pelo nome de suas células.
							</p>
						</header>
						<span class="image featured"><img src="images/Animes/CellsAtWork.png" alt="Banner Cells At Work" /></span>
						
						<p>Para encontrar mais animes e informações, acesse:<a style="font-weight:bold; text-decoration:none;" href="https://www.aficionados.com.br/bons-animes-para-assistir/" target="_blank"> Top 39 Animes</a></p>

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