<?php require_once("functions.php"); ?>

<!doctype html>
<html lang="pt-br">
	<head>
		<title>TailorMe | Seu plano de roupas customizadas</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/31142b226c.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="style/palette.css">
		<link rel="stylesheet" href="style/style.css">
	</head>
	<body>

		<header>
			<nav class="fixed-top navbar navbar-expand-lg navbar-dark bg-dark p-0 m-0">
				<a class="navbar-brand" href="index.php">
					<img src="imagens/TailorMe-logo-white.png" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
					aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link" href="index.php#planos">Planos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php#sobre">Sobre</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php#contato">Contato</a>
						</li>
					</ul>
					<ul class="navbar-nav mr-3 d-lg-flex align-items-center">
						<li class="nav-item mx-3">
						<?php
							if(isset($_SESSION["logado"])) {
								echo "<li><a class='nav-link'>Bem vindo, usuário</a></li>";
								echo "<li><a href='login.php?logout=true'><button type='button' class='btn btn-outline-light'><i class='far fa-user'></i> Logout</button></a></li>";
							} else {
								echo "<a href='login.php'>";
								echo "<button type='button' class='btn btn-outline-light'><i class='far fa-user'></i> Entrar</button></a>";
							}
						?>
							
						</li>
						<li class="nav-item mx-3">
							<span class="carrinho">
								<a href="#"><i class="fas fa-shopping-cart"></i></a>
							</span>
						</li>
					</ul>
					
				</div>
			</nav>
		</header>