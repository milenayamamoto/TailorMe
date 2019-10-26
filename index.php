<?php include_once("header.php"); ?>

		<section id="banner">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item carousel-1 active">
						<img src="https://images.unsplash.com/photo-1497997092403-f091fcf5b6c4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" class="d-block w-75 img-fluid mx-auto" alt="...">
					</div>
					<div class="carousel-item">
						<img src="https://images.unsplash.com/photo-1490427712608-588e68359dbd?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" class="d-block w-75 img-fluid mx-auto" alt="...">
					</div>
					<div class="carousel-item">
						<img src="https://images.unsplash.com/photo-1485125639709-a60c3a500bf1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" class="d-block w-75 img-fluid mx-auto" alt="...">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Anterior</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Próximo</span>
				</a>
			</div>
		</section>

		<section id="planos">
			<div class="container">
				<div class="row">
					<div class="col">
						<h2 class="mb-5">Planos</h2>
					</div>
				</div>
				<div class="row">

					<?php listarServicos(); ?>

					<!-- <div class="col">
						<div class="card">
							<img src="https://images.unsplash.com/photo-1544441893-675973e31985?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" class="card-img-top" alt="...">
							<div class="card-body">
								<p class="card-text"><h3 class="text-center">TailorMe Básico</h3></p>
								<ul class="lista-items">
									<li><i class="fas fa-check-circle text-success"></i> 1x Camiseta(s)/Blusa(s)</li>
									<li><i class="fas fa-check-circle text-success"></i> 1x Calça(s)/Saia(s)</li>
									<li><i class="fas fa-times-circle text-dark"></i> Acessório(s)</li>
									<li><i class="fas fa-times-circle text-dark"></i> Calçado(s)</li>
								</ul>
								<div class="text-center">
									<p class="preco">R$150</p>
									<button class="btn btn-outline-dark">Escolher</button>
								</div>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</section>

		<section id="sobre">
			<div class="container">
				<div class="row d-lg-flex align-items-center">
					<div class="col">
						<img src="imagens/undraw_online_shopping_ga73.svg" alt="" class="img-fluid">
					</div>
					<div class="col">
						<h2>Sobre</h2>
						<p>A TailorMe presta um serviço de roupas customizadas e sob medida. 
							De acordo com uma avaliação inicial, trabalhamos para entender seu estilo único e apresentamos
						possíveis peças que combinem com seu gosto. Atualmente, roupas sob medida possuem um viés elitizado, porém, 
						trabalhamos ao máximo com pacotes que caibam no seu bolso, para que possamos te auxiliar no armário de seus sonhos
						sem abrir mão da qualidade.</p>
					</div> 
				</div>
			</div>
		</section>

		<div class="container m-0 py-5 newsletter">
			<div class="row p-5">
				<div class="col col-4 text-right align-self-center">
					<h2>Assine nossa newsletter: </h2>
				</div>
				<div class="col col-8">
					<form class="form-inline">
						<div class="form-group mx-sm-3 mb-2">
							<label for="inputEmail" class="sr-only">Email</label>
							<input type="email" class="form-control" id="inputEmail" placeholder="Digite seu email...">
						</div>
						<button type="submit" class="btn btn-light mb-2">Enviar</button>
					</form>
				</div>
			</div>
		</div>
		
		<section id="contato">
			<div class="container">
				<div class="row">
					<div class="col">
						<h2>Entre em contato</h2>
						<form>
							<div class="form-group">
								<label for="nome">Nome</label>
								<input type="text" class="form-control" id="nome">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="text" class="form-control" id="email">
							</div>
							<div class="form-group">
								<label for="mensagem">Mensagem</label>
								<textarea name="mensagem" id="mensagem" class="form-control"></textarea>
							</div>
							<div class="form-group">
								<button class="btn dark-primary-color">Enviar</button>
							</div>
						</form>
					</div>
					<div class="col">
						<iframe
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.0512298831054!2d-46.67744548518781!3d-23.60249558466246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce50ab7feb4519%3A0x739f0ddb0439cf94!2sDigital%20House%20S%C3%A3o%20Paulo!5e0!3m2!1spt-BR!2sbr!4v1569681973625!5m2!1spt-BR!2sbr"
							width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
				</div>
			</div>
		</section>

		<div class="toTop">
			<a href="#banner"><i class="fas fa-arrow-alt-circle-up top"></i></a>
			
		</div>

<?php include_once("footer.php"); ?>