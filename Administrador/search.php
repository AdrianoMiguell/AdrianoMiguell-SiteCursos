<?php
include 'conexao.php';
include 'cabecalho.php';
?>
 
    <div class="container">
        <div class="card my-5">
            <div class="card-header" style="background-color: #0D3B66; color: #119DA4;">
                <h2>
                    Sua pesquisa
                </h2>
            </div>
            <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered mt-2 mb-2">
                            <thead style="background-color: #6d9dc5;">
                                <th>nome do curso</th>
                                <th>Descrição</th>
                                <th>Carga Horaria</th>
                                <th> Lista de conteúdo </th>
                                <th> Link da aula do curso </th>
                            </thead>

                            <tbody>
                        <?php
                                include 'conexao.php';
 
                        $dados = filter_input_array (INPUT_POST, FILTER_DEFAULT);
 
                        if (isset($dados)){
        $nome = "%" . $dados['nome'] . "%";
                            $busca = $pdo->prepare("SELECT * FROM cursos WHERE nome like :nome");
                            $busca->bindParam(':nome',$nome);
                            $busca->execute();
 
                            while ($row = $busca->fetch(PDO::FETCH_ASSOC)) {
                                echo "<tr>";
                                echo "<td>" . $row['nome'] . "</td>";
                                echo "<td>" . $row['descricao'] . "</td>";
                                echo "<td>" . $row['ch'] . "</td>";
                                echo "<td>" . $row['conteudo'] . "</td>";
                                echo "<td>" . $row['aula'] . "</td>";
                                echo "</tr>";
 
                        }
                    }
                    ?>      
                </table>
            </div>
                <div class="d-flex justify-content-center my-2">
                    <a class="btn btn-primary" href="index.php">
                        <-- Voltar
                    </a>
                </div>       
            </div>
        </div>
    </div>

    <!--footer-->
    <footer>
        <div class="d-flex justify-content-start"> <h2> Equipe: </h2> </div> 
        <div class="d-flex flex-column justify-content-center p-2" style="margin: auto;">
            <div><h4> Adriano Miguel </h4></div> 
            <div class="mr-2"><h4> Geiziane Rodrigues </h4></div>
            <div class="mr-2"><h4> Lucas Guilherme </h4></div>
        </div>
    </footer>
</body>
 
</html>
