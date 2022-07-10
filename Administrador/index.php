<?php
include 'conexao.php';
include 'cabecalho.php';

$result = $pdo->prepare("SELECT * FROM cursos");
$result->execute();
?>

    <!--Seção-->

    <section>
        <div class="container my-5">
            <div class="card my-5">
                <div class="card-header" style="background-color: #0D3B66; color: #119DA4;">
                  <div class="d-flex justify-content-around">
                      <h2> Cursos Cadastrados </h2>    
                        <form action="search.php" method="post" class="d-flex">
                         <input class='form-control me-2' type='text' placeholder='Procure algo' name="nome">
                         <button class='btn btn-primary' style='background-color: #6D9DC5' type='submit'>Buscar</button>

                      </form>
                  </div>
                </div>
                <div class="card-body shadow">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead style="background-color: #6d9dc5;">
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Carga Horaria</th>
                                <th> Lista de conteúdo </th>
                                <th> Link da aula do curso </th>
                                <th colspan="3">Ações</th>
                            </thead>

                            <tbody>
                                <form action="delete.php" method="POST">
                                    <?php
                                    if (isset($result)) {
                                        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                            echo "<tr>";
                                            echo "<td>" . $row['nome'] . "</td>";
                                            echo "<td>" . $row['descricao'] . "</td>";
                                            echo "<td>" . $row['ch'] . "</td>";
                                            echo "<td>" . $row['conteudo'] . "</td>";
                                            echo "<td>" . $row['aula'] . "</td>";
                                            echo " 
                                                <td> <button type='submit' name='delete' 
                                                class='btn btn-primary my-1' style='background-color: #6D9DC5' value='{$row['id']}' >Deletar</button>
                                                <a class='btn btn-primary my-1' style='background-color: #6D9DC5' href='edit.php?id={$row['id']}'> Editar</a>
                                                
                                                </td> ";
                                                          
                                            echo "</tr>";
                                        }
                                    }

                                    ?>
                                </form>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

    </section>
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