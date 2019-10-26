<?php include_once("header.php"); ?>
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col mb-4">
                    <h1>Novo Serviço</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-6 mb-5">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome">
                        </div>
                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <textarea name="descricao" id="descricao" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="imagem">Imagem</label>
                            <input type="file" class="form-control" name="imagem" id="imagem">
                        </div>
                        <div class="form-group text-right">
                            <button class="btn btn-primary" name="cadastrar_servico">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php include_once("footer.php"); ?>