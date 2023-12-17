<?php
include('conexao.php');

$email = $_POST["email"];
$senha = MD5($_POST["senha"]);

$sqlcode = "INSERT INTO cadastro(email,senha) VALUES ('$email','$senha')";

if(mysqli_query($conexao, $sqlcode)){
    echo "Usuario cadastrado!";
    echo("<p><a href=\"index.html\">Entrar</a></p>");
}else{
    echo("Usuário não cadastrado!");
    echo("<p><a href=\"index.html\">Tentar novamente</a></p>");
}

mysqli_close($conexao);
?>