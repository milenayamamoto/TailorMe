<?php require_once("header.php"); ?>

<section class="container">
    <div class="row">
        <div class="col-md-6">
            <h1><?php echo (isset($_GET['id'])) ? getNome($_GET['id']) : '' ?></h1>
            <p><img src="<?php echo (isset($_GET['id'])) ? getImagem($_GET['id']) : '' ?>" width="80%"></p>
            <p>
                <ul class='lista-items'>
                    <?php echo (isset($_GET['id'])) ? getDescricao($_GET['id']) : '' ?>
                </ul>
            </p>
            <p><?php echo (isset($_GET['id'])) ? getPreco($_GET['id']) : '' ?></p>
        </div>
        <div class="col-md-6">
            <img src="caminho" alt="">
        </div>
    </div>
</section>

<?php require_once("footer.php"); ?>