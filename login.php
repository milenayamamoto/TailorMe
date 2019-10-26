<?php 
include_once("header.php"); 

if(isset($_SESSION["logado"]) && !isset($_GET["logout"])) {
    header("Location: admin.php");
} elseif (isset($_GET["logout"])) {
    header("Location: index.php");
}

?>

  <main id="login">
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="imagens/undraw_authentication_fsn5.svg" alt="">
            </div>
            <div class="col">
                <?php
                    if(isset($erro)) {
                        echo "<div class='alert alert-warning'> $erro </div>";
                    }
                ?>
                <h1>Login</h1>
                <form method="POST">
                    <div class="form-group w-100">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" value="<?php echo isset($_COOKIE['email']) ? $_COOKIE['email'] : ''; ?>">
                    </div>
                    <div class="form-group w-100">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" class="form-control" value="<?php echo isset($_COOKIE['senha']) ? $_COOKIE['senha'] : ''; ?>">
                    </div>
                    <div class="form-group w-100 text-left">
                        <label>
                            <input type="checkbox" name="manter_conectado"> Manter conectado
                        </label>
                    </div>
                    <div class="form-group w-100 text-right">
                        <input type="submit" name="login" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
  </main>

<?php include_once("footer.php"); ?>