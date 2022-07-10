<?php
  include 'conexao.php';
  include 'header.html';
  
  $id = $_GET['id'];
  $result = $pdo->prepare("SELECT * FROM cursos WHERE id = $id");
  $result->execute();
?>


        <section>
            <?php
                if (isset($result)) {        
                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                        echo "<div class='d-flex flex-column mx-auto bg-danger mb-5 mt-1'>"; 
                            /* Nome do curso e ch*/
                            echo "<div class='p-4 d-flex justify-content-start' style='background-color: rgb(13, 59, 102, 0.8); 
                            color: #F1E0C5;'>"; 
                                echo "<div style='margin: auto 25%;'>";
                                    echo "<h2 style='auto 25% auto auto' class='fs-1 fw-2'>" . $row['nome'] . "</h2>";
                                    echo "<p class='ml-2 mb-4 fs-5'> Periodo do curso: " . $row['ch'] . " horas.</p>"; 
                                echo "</div>";
                                echo "<div class='d-flex align-items-center justify-content-start'>";
                                    echo "<button class='btn btn-danger ml-5'> Inscrever </button>";
                                echo "</div>";
                                echo "</div>";
                            echo "</div>";

                            /* Conteudos do curso */
                            echo "<div class='border border-5 m-5 p-4'>";
                                echo "<h3 style=' color: #0D3B66;' class='label'> Descrição </h3> <span class='mx-5 fs-5'>". $row['descricao'] ."</span>";
                            echo "</div>";

                            echo "<div class='border border-5 m-5 p-4 d-flex flex-column'>";
                                echo "<h3 style=' color: #0D3B66;' class='mb-2'> Lista de Conteudo </h3> <ul class='mx-5 fs-5 border border-5 p-1'> <li>". $row['conteudo'] ."</li> </ul>";
                                echo "<div class='d-flex justify-content-center'> <iframe width='560' height='315' src='https://www.youtube.com/embed/8mei6uVttho' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe> </div>";
                            echo "</div'>";
                            /*
                            echo "<p class='my-5' style='width: 80%;'>" . $row['descricao'] . "</p>";
                            echo "<h2 class='m-5'>" . $row['ch'] . "</h2>";
                            echo "<h2 class='m-5'>" . $row['aula'] . "</h2>";
                            */
                        echo "</div>";
                    }
                }

                include "footer.php";
                ?>
        </section>
</html>