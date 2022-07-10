<?php
    include 'conexao.php';
    include 'header.html';
?>

<section>
    <div class="container my-5">
        <div class="card border-0">
            <div class="card-header fs-4 d-flex justify-content-center">Cursos Selecionados</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="fs-5 fw-bolder" style="background-color: #119DA4;">
                                <th>Curso</th>
                                <th>Carga Horária</th>
                                <th>Descrição</th>
                                <th colspan="3"> </th>
                            </thead>

                            <tbody>
                                <form action="curso.php" method="POST">
                                    <?php
                                        $dados = filter_input_array (INPUT_POST, FILTER_DEFAULT);

                                        if(empty($dados)){
                                            $controleP=false;
                                        } else{
                                            $controleP=true;
                                        }

                                        if (isset($dados) && $controleP==true){
                                            $nome = "%" . $dados['nome'] . "%";
                                            $busca = $pdo->prepare("SELECT * FROM cursos WHERE nome like :nome");
                                            $busca->bindParam(':nome',$nome);
                                            $busca->execute();
            
                                            while ($row = $busca->fetch(PDO::FETCH_ASSOC)) {
                                                echo "<tr>";
                                                echo "<td class='my-4 fs-5'>" . $row['nome'];
                                                echo "<img src='curso_informatica.jpg' width='75%'></td> ";   
                                                echo "<td>" . $row['ch'] . " horas </td>";
                                                echo "<td>" . $row['descricao'] . "</td>";                               
                                                echo "<td> <a class='btn btn-primary' href='curso.php?id={$row['id']}'> Visualizar </a> </td> ";       
                                                echo "</tr>";                      
                                            }
                                        }
                                        else {         
                                            echo "<div class='container d-flex align-items-center justify-content-center'>";
                                            echo "<div class='card'> "; 
                                            echo " <p class='fs-3'> Nenhum resultado foi encontrado... </p> <br> <br>";
                                            /* botão de voltar */
                                            echo "<a href='index.php' class='btn'>  <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-chevron-double-left' viewBox='0 0 16 16'> <path fill-rule='evenodd' d='M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/>  <path fill-rule='evenodd' d='M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/> </svg>  Voltar  </a> ";
                                            echo " </div> </div>";
                                            
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
    include "footer.php";
?>
</body>
 
</html>
