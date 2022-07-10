<?php
  include 'conexao.php';
  include 'header.html';
  
  $result = $pdo->prepare("SELECT * FROM  cursos");
  $result->execute();  
?>

  <!--header
   class="bg-danger d-flex justify-content-center" style="margin-top: 1%; width: 100%; height: 25vh;"

   echo "
  -->
   <header>
    <div class='mx-auto bg-danger'>
      <div class='p-2' style='background-color: rgb(13, 59, 102, 0.8); color: #F1E0C5;'> 
        <div class="d-flex justify-content-center p-2 m-auto">
          <div id="carouselExampleIndicators" class="carousel slide py-4" data-ride="carousel" style="width: 100vh;">
            <div style="margin-left: 5%;  margin-right: 5%;">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="carrossel"> <p class="fw-semibold fs-4"> Melhores cursos de infraestrutura e informática disponiceis apartir de hoje. </p> </div>
                </div>

                <div class="carousel-item">
                  <div style="background-color: #0D3B66;   margin: auto 25%; padding: 2%;"> <p class="fw-semibold fs-4"> Melhores cursos de infraestrutura e </p> </div>
                </div>

                <div class="carousel-item">
                  <div style="background-color: #0D3B66;   margin: auto 25%; padding: 2%;"> <p class="fw-semibold fs-4"> Cursos de infraestrutura e informática disponiceis apartir de hoje. </p> </div>

                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style="text-decoration: none; color: #0D3B66;">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Voltar</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"  style="text-decoration: none; color: #0D3B66;">
              <span class="sr-only">Avançar</span>
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              
            </a>
          </div>
        </div>
    </div>
    </div>
   </header>

   <!--Section-->
   <section>
        <div class="container my-5">
            <div class="card border-0">
                <div class="card-header fs-4 d-flex justify-content-center">Cursos Disponiveis</div>
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


  <!--footer-->
   <footer> 
    <h3> Seja nosso parceiro </h3>
    <div> <h4> Contato </h4>  +55 (74) 8124-5689</div>
    <div> <h4> Email </h4> cursosonline@cursos.com</div>
   </footer>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
   
</html>