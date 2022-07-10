<?php 
    include 'header.html';
    include 'conexao.php';

    $result = $pdo->prepare("SELECT * FROM  cursos");
    $result->execute();  
?>

<section>
        <div class="container my-5">
            <div class="card border-0">
                <div class="card-header fs-4 d-flex justify-content-center">Cursos Disponiveis</div>
                <div class="card-body shadow">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead style="background-color: #119DA4;">
                                <th>nome</th>
                                <th>descricao</th>
                                <th>ch</th>
                                <th colspan="3">Ações</th>
                            </thead>

                            <tbody>
                                <form action="curso.php" method="POST">
                                    <?php
                                    if (isset($result)) {
                                        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                            echo "<tr>";
                                            echo "<td class='my-4 fs-5'>" . $row['nome'];
                                            echo "<img src='curso_informatica.jpg' width='75%'></td> ";   
                                            echo "<td>" . $row['ch'] . " horas </td>";
                                            echo "<td>" . $row['descricao'] . "</td>";                               
                                            echo "<td> <a class='btn btn-primary' href='curso.php?id={$row['id']}'> Visualizar </a> </td> ";       
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

        </div>

    </section>

<?php
    include 'footer.php';
?>