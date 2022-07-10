<?php 
include 'conexao.php';

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$ch = $_POST['ch'];
$conteudo = $_POST['conteudo'];
$aula = $_POST['aula'];

//O banco está inserindo valores na respectiva ordem do EXECUTE
$result = $pdo->prepare("INSERT INTO cursos VALUES(null, ?, ?, ?, ?, ?)");
$result->execute(array($_POST['nome'],  $_POST['descricao'],  $_POST['ch'], $_POST['conteudo'], $_POST['aula']));

header ("Location: index.php");
?>