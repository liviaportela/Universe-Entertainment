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
        include('conexao.php');

        $email = $_POST['email'];
        $senha = MD5($_POST['senha']);

        $sqlcode = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'";
        $resultado = mysqli_query($conexao, $sqlcode);
        $linhas = mysqli_affected_rows($conexao);
                
        if($linhas>0){
            session_start();
            $_SESSION["email"] = $email;
            $_SESSION["senha"] = $senha;

            header("Location: home.php");
        }else{
            echo "Falha ao logar! E-mail ou senha incorretos";
            echo("<p><a href=\"index.html\">Tentar novamente</a></p>");
        }
        ?>
</body>
</html>