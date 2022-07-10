<?php
include 'conexao.php';
include 'cabecalho.php';

$id = $_GET['id'];
$result = $pdo->prepare("SELECT * FROM cursos WHERE id = $id");
$result->execute();
?>

<div class="container my-4">
    <div class="card">
        <div class="card-header d-flex justify-content-center" style="background-color: #0D3B66; color: #119DA4;">
            <h2>Editar usuário</h2>
        </div>
        <div class="card-body">
            <form action="update.php" method="post">
                <?php
                
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo "<label class='label'> id </label>";
                    echo "<input class='form-control mb-2' type='text' value='{$row['id']}' name='id'>";

                    echo "<label class='label'> nome </label>";
                    echo "<input class='form-control mb-2' type='text' value='{$row['nome']}' name='nome'>";

                    echo "<label class='label'>descricao</label>";
                    echo "<input class='form-control mb-2' type='text' value='{$row['descricao']}' name='descricao'>";

                    echo "<label class='label'>carga horária</label>";
                    echo "<input class='form-control' type='number' value='{$row['ch']}' name='ch'>";

                    echo "<label class='label'>conteudo</label>";
                    echo "<input class='form-control mb-2' type='text' value='{$row['conteudo']}' name='conteudo'>";

                    echo "<label class='label'>aula</label>";
                    echo "<input class='form-control mb-2' type='text' value='{$row['aula']}' name='aula'>";

                    echo "<div class='d-flex justify-content-center'> <button type='submit' class='btn btn-primary' style='background-color: #6D9DC5'>Modificar</button></div>";
                }
                ?>
            </form>

        </div>
    </div>
</div>

<!--footer-->
<footer>
        <div class="d-flex justify-content-start"> <h2> Equipe: </h2> </div> 
        <div class="d-flex flex-column justify-content-center p-2" style="margin: auto auto;">
            <div><h4> Adriano Miguel </h4></div> 
            <div class="mr-2"><h4> Geiziane Rodrigues </h4></div>
            <div class="mr-2"><h4> Lucas Guilherme </h4></div>
        </div>
    </footer>

</body>
</html>
