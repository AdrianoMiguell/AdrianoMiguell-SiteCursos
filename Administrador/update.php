<?php
include 'conexao.php';

$id=$_POST['id'];
$nome=$_POST['nome'];
$descricao=$_POST['descricao'];
$ch=$_POST['ch'];
$conteudo=$_POST['conteudo'];
$aula=$_POST['aula'];

$stmt = $pdo->prepare("UPDATE cursos SET  ch = :ch, aula = :aula, conteudo = :conteudo, descricao = :descricao, nome = :nome WHERE id = :id");
$stmt->execute(
    array(
        ':nome' => $nome, 
        ':descricao' => $descricao,
        ':ch' => $ch,
        ':conteudo' => $conteudo,
        ':aula' => $aula,
        ':id' => $id
));
header("Location: index.php");
