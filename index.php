<?php

	require_once 'classes/usuarios.php';
	session_start();
	if(isset($_SESSION['id_usuario'])){
		$us = new Usuario("projeto_comentarios", "localhost", "root", "");
		$informação = $us->BuscarDados($_SESSION['id_usuario']);
	}elseif(isset($_SESSION['id_master'])){
		$us = new Usuario("projeto_comentarios", "localhost", "root", "");
		$informação = $us->BuscarDados($_SESSION['id_master']);
	}

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>GOAT SPORTS</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
	<link rel="stylesheet" href="footer.css">
	<link rel="stylesheet" href="css/fotos.css">
	<link href="css/index.css" rel="stylesheet">
    
	<link rel="shortcut icon" type="image/jpg" href="img/pngfind.com-goat-png-520451.png"/>


	
</head>
<body>

	
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

		<div class="container">
			<img src="img/pngfind.com-goat-png-520451.png" width="60" height="50" class="d-inline-block align-top" alt="">
			<a class="navbar-brand" href="index.html"><span class="text-warning">GOAT</span>SPORTS</a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
                
	  </a>
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home</a>
					</li>
						<a class="nav-link" href="galeria.php">Galeria</a>
					</li>
					<div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Lendas
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="ayrton.php">Ayrton Senna</a></li>
            <li><a class="dropdown-item" href="daiane.php">Daiane dos Santos</a></li>
            <li><a class="dropdown-item" href="giba.php">Giba</a></li>
			<li><a class="dropdown-item" href="r10.php">Ronaldinho Gaúcho</a></li>
          </ul>
        </li>
		
						<a class="nav-link" href="cadastrar.php">Cadastrar</a>
					</li>
					
<?php
				if(isset($_SESSION['id_master']))
				{ ?>
					<a href="dados.php">Dados</a></li>
				<?php } 
			?>
				
			<?php 
				if(isset($informação)) 
				{ ?>
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="sair.php">Sair</a>
				<?php } else { ?>
					
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="entrar.php">Entrar</a>
				
					
					
				<?php } ?>
		</ul>
 </li>
	

	<?php
	
	if(isset($_SESSION['id_master']) or isset($_SESSION['id_usuario']))
	{ ?>
		<h6 style="position: absolute; top: 0; right: 0; font-size: smaller;">
			<?php 
			echo "Olá! ";
			echo $informação['nome'];
			echo " , seja bem vindo(a)!";
			?>
		</h6>
	<?php }
?>
				</ul>
			</div>
		</div>
		</nav>
	<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
		<div class="carousel-indicators">
			<button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button> 
			<button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button>
			<button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
			<button aria-label="Slide 4" data-bs-slide-to="3" data-bs-target="#carouselExampleIndicators" type="button"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img alt="..." class="d-block w-100" src="https://www.ofutebolero.com.br/__export/1627672514862/sites/elfutboleromx/img/2021/07/30/naom_58a89193030d9_1.jpg_1800405350.jpg">
				<div class="carousel-caption">
					<h5>RONALDINHO GAÚCHO</h5>
					<p>Conheça a história do Bruxo, o rei dos "dibres"</p>
					<p><a class="btn btn-warning mt-3" href="r10.php">Saiba mais!</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="https://gamerview.uai.com.br/wp-content/uploads/2018/04/1no7W6dOZpFI8d8EX3WdCU52sSh.jpg">
				<div class="carousel-caption">
					<h5>AYRTON SENNA</h5>
					<p>Conheça a história do maior brasileiro na história da Fórmula 1.</p>
					<p><a class="btn btn-warning mt-3" href="ayrton.php">Saiba mais!</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="https://media-manager.noticiasaominuto.com.br/1920/naom_5a876ce4f4044.jpg">
				<div class="carousel-caption">
					<h5>GIBA</h5>
					<p>A carreira do brasileiro que por muitos é o maior atleta no vôlei</p>
					<p><a class="btn btn-warning mt-3" href="giba.php">Saiba mais!</a></p>
				</div>
			
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="https://conteudo.imguol.com.br/2012/07/29/daiane-dos-santos-faz-seus-exercicios-na-eliminatoria-individual-e-por-equipes-da-ginastica-artistica-1343552678298_1920x1080.jpg">
				<div class="carousel-caption">
					<h5>DAIANE DOS SANTOS</h5>
					<p>Quem foi a maior ginnasta da história do Brasil</p>
					<p><a class="btn btn-warning mt-3" href="daiane.php">Saiba mais!</a></p>
				</div>
			</div>


			</div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
	</div><!-- about section starts -->

	<section class="portfolio section-padding" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h2>Lendas</h2>
						<p>Lendas que já estão em nosso software:
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-12 col-lg-3">
					<div class="card text-light text-center bg-warning pb-2">
						<div class="card-body text-dark">
							<div class="img-area mb-4"><img alt="" class="img-fluid" src="" width="300"></div>
							<img alt="" class="img-fluid rounded-circle" src="img/ayrton.png" width="190">
							<h3 class="card-title">Ayrton Senna</h3>
							<a class="btn btn-success bg-primary" href="ayrton.php" role="button">Saiba mais!</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-3">
					<div class="card text-light text-center bg-warning pb-2">
						<div class="card-body text-dark">
							<div class="img-area mb-4"><img alt="" class="img-fluid"  src="" width="300"></div>
							<img alt="" class="float-left rounded-circle" src="img/r10.jpg" width="190">
							<h3 class="card-title">Ronaldinho</h3>
							<a class="btn btn-success bg-primary" href="r10.php" role="button">Saiba mais!</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-3">
					<div class="card text-light text-center bg-warning pb-2">
						<div class="card-body text-dark">
							<div class="img-area mb-4"><img alt="" class="img-fluid" src="" width="300"></div>
							<img alt="" class="img-fluid rounded-circle" src="img/giba.png" width="190">
							<h3 class="card-title">Giba</h3>
							<a class="btn btn-success bg-primary" href="giba.php" role="button">Saiba mais!</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-3">
					<div class="card text-light text-center bg-warning pb-2">
						<div class="card-body text-dark">
							<div class="img-area mb-4"><img alt="" class="img-fluid" src="" width="300"></div>
							<img alt="" class="img-fluid rounded-circle" src="img/daiane.png" width="190">
							<h3 class="card-title">Daiane dos Santos</h3>
							<a class="btn btn-success bg-primary" href="daiane.php" role="button">Saiba mais!</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><br><br><br>







	<section class="about section-padding" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-12">
					<div class="about-img"><img alt="" class="img-fluid" src="img/GS.png"></div>
				</div>
				<div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
					<div class="about-text">
						<h2>Nossa história</h2><br>
						
						<p>Nós brasileiros somos apaixonados por esportes em geral, ao longo da história tivemos várias lendas do esporte, que revolucionaram várias épocas. Temos grandes nomes no futebol, basquete, automobilismo, tênis etc. O esporte brasileiro e seus atletas têm várias histórias para contar e vamos falar um pouco sobre elas.</p>
							<p>"GOAT" é o nome da nossa empresa e representa uma sigla em inglês que significa "Greatest of All Time", que em português pode ser traduzido como "O Maior de Todos os Tempos".
							Escolhemos o nome "GOAT" para nossa empresa porque queremos transmitir a mensagem de que buscamos a grandeza, a excelência e o reconhecimento como os melhores em nossa área, assim como os atletas que são considerados os maiores de todos os tempos em seus esportes.
							</p>
					</div>
				</div>
			</div>
		</div>
	</section><br><br><br>

	

	<section class="portfolio section-padding" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h2>Equipe</h2>
						<p>A Goat Sports é composta por profissionais altamente capacitados e colaborativos,<br>
						segue a nossa equipe:</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-light text-center bg-white pb-2">
						<div class="card-body text-dark">
							<div class="img-area mb-4"><img alt="" class="img-fluid" src="img/filipe.png" width="250"></div>
							<h3 class="card-title">Filipe Rocha</h3>
							<p class="lead">Responsável por cuidar de toda a estrutura de banco de dados, e cuidar do Back-end
								e implementação da caixa de comentários.
							</p>
								<a class="hover-target" a href="https://api.whatsapp.com/send?phone=5531995589642"><i class="bi bi-whatsapp"></i></a>
								<a class="hover-target" a href="https://api.whatsapp.com/send?phone=5531995589642"><i class="bi bi-github"></i></a>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-light text-center bg-white pb-2">
						<div class="card-body text-dark">
							<div class="img-area mb-4"><img alt="" class="img-fluid"  src="img/pedro.png" width="281"></div>
							<h3 class="card-title">Pedro Augusto</h3>
							<p class="lead">Responsável por cuidar da estrutura de banco de dados, front-end
								e design <UI>
								<UX></UX></p>
								<a class="hover-target" a href="https://api.whatsapp.com/send?phone=5531999231660"><i class="bi bi-whatsapp"></i></a>
								<a class="hover-target" a href="https://github.com/pedroaugusto1404" ><i class="bi bi-github"></i></a>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-light text-center bg-white pb-2">
						<div class="card-body text-dark">
							<div class="img-area mb-4"><img alt="" class="img-fluid" src="img/joao.png" width="272"></div>
							<h3 class="card-title">João Pedro</h3>
							<p class="lead"></p><p class="lead">Responsável por cuidar da estrutura de banco de dados, Back-end
								e design</p>
							<a class="hover-target" a href="https://api.whatsapp.com/send?phone=5532984287165"><i class="bi bi-whatsapp"></i></a>
							<a class="hover-target" a href="https://github.com/Jonesevill" ><i class="bi bi-github"></i></a>
							</div>
					</div>
				</div>
			</div>
		</div>
	</section><br><br><br>

	<section class="team section-padding" id="team">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h2>Experiência</h2>
						<p>Gostaria de compartilhar com vocês,<br>
						alguns comentários sobre o nosso software:</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-6 col-lg-3">
					<div class="card text-center">
						<div class="card-body">
							<img alt="" class="img-fluid rounded-circle" src="img/boscatti.jpg" width="126">
							<h3 class="card-title py-2">Matheus Boscatti</h3>
							<p class="card-text">Este site proporciona uma jornada empolgante pelos feitos históricos e personagens icônicos que moldaram nossa paixão esportiva.</p>
							
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<div class="card text-center">
						<div class="card-body">
							<img alt="" class="img-fluid rounded-circle" src="img/aninha.jpg" width="124">
							<h3 class="card-title py-2">Ana Vitória</h3>
							<p class="card-text">Uma homenagem emocionante às lendas do esporte brasileiro, mantendo vivo o espírito e a memória de nossos heróis esportivos para sempre.</p>
							
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<div class="card text-center">
						<div class="card-body">
							<img alt="" class="img-fluid rounded-circle" src="img/borba2.jpg" width="126">
							<h3 class="card-title py-2">Lucas Cassimiro</h3>
							<p class="card-text">Uma viagem emocionante pelas lendas do esporte brasileiro, relembrando momentos históricos e inspiradores que ecoam até hoje.</p>
							
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<div class="card text-center">
						<div class="card-body">
							<img alt="" class="img-fluid rounded-circle" src="img/cassimiro.jpg" width="126">
							<h3 class="card-title py-2">Marcelo Mio</h3>
							<p class="card-text">Um site emocionante às lendas do esporte brasileiro, preservando e compartilhando suas histórias para inspirar a paixão pelo esporte.
	</p>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><br><br><br>
	<hr>
	<section class="contact-area" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="contact-content text-center">
                        <a href="#"><img src="img/GS.png" alt="logo"></a>
                        <p>"O passado se torna eterno: celebrando as lendas do esporte brasileiro, o legado que nunca se apaga."</p>
                        <div class="hr"></div>
                        <h6>Av. Maria de Paula Santana, 3815.</h6>
                        <h6>Cep: 36.570-001<span>|</span>Viçosa-MG</h6>
                        <div class="contact-social">
                            <ul>
								<li><a class="hover-target" href="https://www.facebook.com/profile.php?id=100092380021591&mibextid=ZbWKwL
									"><i class="bi bi-facebook"></i></i></a></li>
                                <li><a class="hover-target" href=" https://instagram.com/goat_sports_ofc?igshid=ZGUzMzM3NWJiOQ=="><i class="bi bi-instagram"></i></i></a></li>
                                <li><a class="hover-target" href="https://twitter.com/GoatSportsofc?t=CgVQihT7h0GwWmczCnP8wA&s=09"><i class="bi bi-twitter"></i></i></a></li>
								<li><a class="hover-target" a href="https://api.whatsapp.com/send?phone=5531995589642"><i class="bi bi-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
    <!-- =============== 1.9 Contact Area End ====================-->
    <!-- =============== 1.9 Footer Area Start ====================-->
    <footer>
        <p>Copyright &copy; 2023  All Rights Reserved.</p>
    </footer>
	<script src="js/bootstrap.bundle.min.js"></script> 
</body>
</html>