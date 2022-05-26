<?php
$nome = $_POST['nome'];
echo $nome;

$conexao = new PDO('sqlite:dw.db'); //Estabele conexão
$query = "INSERT INTO categoria (nome) values ('$nome')"; // monta script
$conexao->exec($query); //executa query

header('Location: categoria.php'); //direciona para categoria.php

?>
