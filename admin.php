<?php 
include_once("header.php"); 

if(!isset($_SESSION["logado"])) {
    header("location: login.php");
}

?>

<section id="admin">
    <div class="container my-5">
        <div class="row">
            <div class="col">
                <h1>Painel Administrativo</h1>
            </div>
            <div class="col">
                <a href="criar_servico.php" class="btn btn-primary">+ Novo Serviço</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Imagem</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $servicos = listarServicos();

                            if(count($servicos) > 0) {
                                foreach($servicos as $indice => $valor){
                                    // var_dump($servicos[$indice]);
                                    echo "<tr>
                                        <td>" . $servicos[$indice]["nome"] . "</td>
                                        <td>" . $servicos[$indice]["descricao"] . "</td>
                                        <td><img src='". $servicos[$indice]["imagem"] ."' alt=''></td>
                                        <td>
                                            <a href='#' class='btn btn-info'>Editar</a>
                                            <a href='#' class='btn btn-danger'>Excluir</a>
                                        </td>
                                    </tr>";
                                }
                            }
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>

<?php include_once("footer.php"); ?>