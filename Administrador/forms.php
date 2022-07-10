<?php
    include 'cabecalho.php';
?>
 
    <div class="container mt-5">
        <div class="card mb-5">
                <div class="card-header" style="background-color: #0D3B66; color: #119DA4;">
                  <div class="d-flex justify-content-around">
                      <h2> Dados do Curso </h2>
                  </div>
                </div>
                <div class="card-body shadow">
                    <form action="inserir.php" method="POST">
                        <div class="mb-3">
                            <label  class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Descrição</label>
                            <input type="text" class="form-control" id="descricao" name="descricao" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Carga horaria</label>
                            <input type="text" class="form-control" id="ch" name="ch" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Lista de conteúdo</label>
                            <input type="text" class="form-control" id="conteudo" name="conteudo" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Link da aula do curso</label>
                            <input type="text" class="form-control" id="aula" name="aula" aria-describedby="emailHelp" required>
                        </div>
                        <div class="my-3 d-flex justify-content-center"> 
                            <button type="submit" class="btn btn-primary" style='background-color: #6D9DC5'>Enviar</button>
                        </div>   
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


