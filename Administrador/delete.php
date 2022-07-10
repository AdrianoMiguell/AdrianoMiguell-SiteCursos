<?php 

include "conexao.php";
if(isset($_POST['delete'])){
    $id = $_POST['delete'];
    $result = $pdo->prepare("DELETE FROM cursos WHERE id = '$id'");
    $result->execute();
    
}

header("Location: index.php");

?>