<?php
	session_start();
	require_once 'classes/comentarios2.php';
	$c = new Comentario("projeto_comentarios","localhost","root","");
	$coments = $c->buscarComentarios2();


	if(isset($_GET['id_exc']))
	{
		$id_exc = addslashes($_GET['id_exc']);

		if(isset($_SESSION['id_master']))
		{
			$c->excluirComentarios($id_exc, $_SESSION['id_master']);

		}elseif(isset($_SESSION['id_usuario']))
		{
			$c->excluirComentarios($id_exc, $_SESSION['id_usuario']);
		}

		header('location: giba.php');
    }

    if(isset($_POST['btn-comentar']))
    {

    	$comentario = addslashes($_POST['texto']);
    	if(isset($_SESSION['id_master'])){
    		$c->inserirComentario($_SESSION['id_master'], $comentario);
    	}elseif(isset($_SESSION['id_usuario'])){
    		$c->inserirComentario($_SESSION['id_usuario'], $comentario);
    	}

    	
    	header('location: giba.php');


    }	


?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Giba - A lenda do vôlei</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
	<link rel="stylesheet" href="footer.css">
	<link href="css/index.css" rel="stylesheet">
    
	<link rel="shortcut icon" type="image/jpg" href="img/pngfind.com-goat-png-520451.png"/>
	<style>
/* FORMULARIO */

h2{
	text-align: center;
	font-family: inherit;
	line-height: 80px;
	margin-bottom: 10px;
}



form img{
	width: 30px;
	display: block;
	float: left;
	padding: 10px;
}

textarea{
	border: none;
	background-color: whitesmoke;
	border-radius: 14px;
	height: 100px;
	width: 85%;
	padding: 7px;
	font-size: 12pt;
	margin: 9px;
	font-family: Arial, Helvetica, sans-serif;
	outline: none;
	display: block;
	float: left;
	
}

input[type="submit"] {
	font-family: Arial Black, Helvetica, sans-serif;
	width: 150px;
	height: 42px;
	margin-left: 50px;
	background: blue;
	border-radius: 35px;
	border: 2px solid whitesmoke;
	color: white;
	cursor: pointer;
	display: block;
	float: left;
	text-align:center;
}

input[type="submit"]:hover{
	background: navy;
	margin-right: 185px;
	color: whitesmoke;
}

.area-comentario{
	box-sizing: border-box;
	border-bottom: 1px solid gray;
	clear: both;
	padding: 10px;
}

.area-comentario img{
	width: 30px;
	float: left;
	padding-right: 10px;
}

.area-comentario h3{
	float: left;
	color: #555555;
	font-size: 12pt;
	padding: 5px 10px 5px 0px;
}

.area-comentario h4{
	font-size: 10pt;
	color: rgba(0,0,0,.6);
	line-height: 30px;
}

.area-comentario h4 a{
	margin-left: 2%; 
	color: black;
	text-decoration: none;
	
}

.area-comentario p{
	line-height: 25px;
}




 </style>

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
						<a class="nav-link" href="galeria.html">Galeria</a>
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
				<img alt="..." class="d-block w-100" src="https://conteudo.imguol.com.br/2012/08/22/giba-1345674189209_1920x1080.jpg">
				
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="https://e.imguol.com/esporte/volei/2011/08/24/giba-participa-de-treinamento-da-selecao-brasileira-em-saquarema-rj-1314212234914_1920x1080.jpg">
				
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="https://conteudo.imguol.com.br/2012/08/12/giba-e-substituido-por-dante-no-final-do-terceiro-set-da-partida-entre-brasil-e-russia-1344779076410_1920x1080.jpg">
				
			
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="https://media-manager.noticiasaominuto.com.br/1920/naom_5a876ce4f4044.jpg">
				
			</div>
			
		</div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
	</div><br><br><br><br>
	
    

	<style>
  div {
    text-align: center;
  }
</style>

<div>
	<h1><span>Gilberto Amauri Godoy Filho</span></h1><br>

	
	

   

	<p class="texto">Multicampeão pela Seleção Brasileira, um dos melhores jogadores de todos os tempos e membro do Hall da Fama… 
		Estamos falando de Giba!

O ex-camisa 7 do Brasil construiu uma das carreiras mais brilhantes no voleibol mundial. Superou problemas de saúde na infância e 
mostrou que, mesmo com “apenas” 1,90m de altura, poderia ser um dos maiores atacantes da história.

Giba encerrou sua carreira em 2014, mas tem o nome marcado para sempre no voleibol. 

Fique com a gente para relembrar todas as conquistas do ponteiro!	</p>

	<img src="https://th.bing.com/th/id/OIP.N24YFfJZVlOdxOkEazrDHgHaFE?pid=ImgDet&rs=1" 
            alt="image" height="300" width="400"/>
   <img src="https://th.bing.com/th/id/OIP._qkMryylCLhWY9cRdOhI_AHaFK?pid=ImgDet&rs=1" alt="" width=392>
   <img src="https://th.bing.com/th/id/R.599a67383519231f07aea719d9f043c9?rik=3%2b7f4nPurIpwwQ&riu=http%3a%2f%2fs2.glbimg.com%2fovN1JHzWXVWfzb-NGQ9mqPjxKlH4P6KDONtTvebggzObMnU75ROwVEZS857O4LCG%2fs.glbimg.com%2fes%2fge%2ff%2foriginal%2f2011%2f07%2f07%2fvol_giba2_fivb.jpg&ehk=7TMBkEmhJc1cwSwQBXiwNMBRJGdxZyzwT7tVakqhUQI%3d&risl=&pid=ImgRaw&r=0" alt="" width=433>

    <p class="texto">
	Gilberto Amaury Godoy Filho, conhecido em todo o mundo pelo apelido Giba, é um ex-jogador de vôlei. Nascido em Londrina, em 23 de 
	dezembro de 1976, ele é considerado um dos maiores atletas da história do voleibol.

Em 10 de novembro de 2018, Giba entrou para o Hall da Fama do Vôlei, em Holyoke, nos Estados Unidos.

O ponteiro foi o 14º brasileiro a integrar o Hall da Fama do Vôlei. Antes dele, foram homenageados: Emanuel, Fofão, Renan Dal Zotto, 
Bebeto de Freitas, Nalbert, Sandra Pires, Adriana Behar, Shelda, Maurício Lima, Ana Moser, Carlos Arthur Nuzman, Bernard e Jackie Silva.

Com a camisa do Brasil, o ex-número 7 venceu todas as competições possíveis.

	</p>



    <p class="texto">Pela Seleção Brasileira, Giba conquistou três mundiais, a medalha de ouro nos Jogos Olímpicos de Atenas-2004 e 
		duas pratas em Olimpíadas (Pequim-2008 e Londres-2012), dois ouros e dois bronzes em Copas do Mundo.
		O ponteiro levou ainda três ouros em Copas dos Campeões; oito ouros, duas pratas e dois bronzes na Liga Mundial; um ouro, 
		uma prata e um bronze em Jogos Pan-Americanos; e oito ouros em Sul-Americanos.
 

	</p>

    <p class="texto"> Além das medalhas olímpicas, Giba conquistou inúmeros títulos em outras competições importantes, como a 
		Copa do Mundo, a Liga Mundial de Vôlei e o Campeonato Mundial. Ele também foi eleito o Melhor Jogador do Mundo em três 
		ocasiões (2004, 2006 e 2007) pela Federação Internacional de Voleibol (FIVB).

	</p>

	<h4><span>Como começou no vôlei</span></h4>
	<img src="https://th.bing.com/th/id/OIP.be14JX_5f8IqtfyLAHsWQAHaFj?w=264&h=199&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="" width="370">
	
	
	<p class="texto"> Ainda nos primeiros meses de vida, Giba precisou superar uma leucemia. Aos 11 anos, sofreu um acidente em 
		Londrina e precisou levar 150 pontos no braço. Depois dos problemas de saúde, ele se mudou para Curitiba, onde começou a jogar 
		vôlei aos 15 anos.

A primeira equipe da carreira de Giba foi o Círculo Militar do Paraná.

Em 1996, ele deixou seu estado natal para jogar pelo Chapecó. O ponteiro defendeu também Olympikus, Suzano e Minas, antes de ter sua primeira experiência no exterior. 

Giba jogou na Itália entre 2001 e 2007, pelas equipes do Ferrara e do Cuneo.	</p>

	<p class="texto"> O sucesso no voleibol italiano foi sucedido por duas temporadas na Rússia. O retorno ao Brasil aconteceu 
		em 2009, para defender o Pinheiros. A equipe patrocinada pela Sky não conquistou os esperados títulos, e Giba se transferiu 
		para o Cimed.

Em 2012, o camisa 7 da Seleção Brasileira voltou ao exterior, naquela oportunidade para defender o Drean/Bolívar, da Argentina.

O último time de Giba no Brasil foi o Vôlei Taubaté. Em 2014, ele ainda jogou pelo Al Nasr, em Dubai, antes de encerrar sua carreira.


	</p>

	
	<h4><span>História na seleção</span></h4>
	<img src="https://th.bing.com/th/id/OIP.D4dhsUWBYAbEcFtRz--4UAAAAA?w=264&h=176&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="" width="385">
	<img src="https://th.bing.com/th/id/OIP.vzN7XlUlTQlaWrhluxwEuAHaEc?w=303&h=182&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="" width="426">
	
	<p class="texto">
	Giba foi convocado para a Seleção Brasileira principal pela primeira vez em 1995 pelo técnico José Roberto Guimarães. 
	O ponteiro foi chamado para defender a equipe nacional mesmo sem ainda participar de times profissionais. 

Na sua primeira competição pela Seleção Brasileira, Giba conquistou o título do Sul-Americano.

Mais tarde, com a troca de comando na seleção e a entrada de Bernardinho, Giba se consolidou como um dos principais nomes do time 
nacional.
	</p>

	<p class="texto">
	O camisa 7 conquistou todos os títulos possíveis e foi eleito o melhor jogador do mundo após o título do Campeonato Mundial de 
	2006, com vitória sobre a Polônia. 

Entre os prêmios individuais, ele já havia sido apontado o melhor jogador dos Jogos Olímpicos de Atenas, em 2004, depois de ajudar o 
Brasil a conquistar a medalha de ouro.

Nas duas Olimpíadas seguintes, em Pequim e Londres, o ponteiro conquistou duas medalhas de ouro. Ele tem também três títulos mundiais
 e 8 conquistas da Liga Mundial.

Segundo o próprio Giba, ele conquistou 39 medalhas em 45 competições disputadas pela Seleção Brasileira.

</p>

  

   <h4><span>Livro de Giba</span></h4>
   <img src="https://th.bing.com/th/id/OIP.0E65hzfxjQrFmsgZldumrwHaFj?w=247&h=185&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="" width=314>   
   <img src="https://th.bing.com/th/id/OIP.gzEtGYkX8oZCoPE9evBiUQHaIZ?w=163&h=185&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="" width="207">
   <img src="https://th.bing.com/th/id/OIP.4PCUsLdU6Jfo1-12kxjFDwHaE8?pid=ImgDet&rs=1" alt="" width="353">
   <img src="https://uploads.metropoles.com/wp-content/uploads/2015/11/29073021/251115DF-giba-010-300x200.jpg" alt="" width="353">
   <p class="texto">
   Um dos maiores jogadores do voleibol brasileiro, Giba conquistou três medalhas nos Jogos Olímpicos e foi capitão da Seleção 
   Brasileira. Nesta autobiografia, ele relata sua trajetória até as conquistas.

Em parceria com o jornalista Luiz Paulo Montes, Giba fala sobre seu diagnóstico de leucemia aos quatro meses de idade, de sua relação 
com a família e de um acidente, aos 11 anos, que o levou a 150 pontos no braço.

Giba relata também os momentos emocionantes de sua carreira e comenta episódios polêmicos como sua suspensão devido a um exame 
antidoping, na Itália, em 2003, que detectou o uso de maconha.

Em seu prefácio, o técnico José Roberto Guimarães, que levou o jogador para a seleção brasileira, recomenda: “Não fuja do encontro 
com um dos maiores ídolos do esporte brasileiro”.
   </p>

   

   

  <iframe width="560" height="315" src="https://www.youtube.com/embed/QPC47kwh1Xs" title="YouTube video player" 
	frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
	allowfullscreen></iframe>
		


	<h4><span>Doping</span></h4>
   <img src="https://s2-ge.glbimg.com/Ci9iFLNqoEair_LCMH4l2qiCxLU=/0x0:3000x2431/984x0/smart/filters:strip_icc()/s.glbimg.com/es/ge/f/original/2019/09/20/gettyimages-149506582.jpg" alt="" width=323>   
   <img src="https://th.bing.com/th/id/OIP.eCwPEPzKwowgtFVelwQC3gHaFP?w=248&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="" width="360">
   
   <p class="texto">
   Considerado um dos melhores jogadores de vôlei da história, Giba testou positivo, em dezembro de 2002, para a substância cannabis 
   sativa (popularmente conhecida como maconha). Na época, o atleta defendia o Ferrara, um clube italiano, e foi punido com oito jogos
    de suspensão pela Federação Italiana de Vôlei. Assim, Giba acabou ficando cerca de dois meses fora das quadras. Essa pena foi 
	considerada bastante branda, já que ele poderia pegar até dois anos de suspensão pelas regras da Agência Mundial Antidoping (WADA).
	“Depois do dopping, fui seis vezes o melhor jogador do mundo”, diz Giba, ao “Metrópoles”
Em biografia, ex-jogador não omite doping de maconha e espera direcionar fãs para que não cometam o mesmo erro.
Giba disse que o doping foi uma mudança em sua vida. Depois do doping eu fui eleito seis vezes o melhor jogador do mundo.

Na ocasião eu tive que decidir: ou eu enfiava a cabeça no buraco ou levantava e assumia o erro que tinha feito
Sou humano e também posso errar, basta não persistir no erro. Sábio é aquele que aprende com o erro dos outros. 
Espero que quem ler o livro ou acompanhou o episódio não cometa o mesmo erro.

  </p>

  <h4><span>Aposentadoria</span></h4>
 
  <img src="https://th.bing.com/th/id/OIP.D6fhBFh_KW4v_5QTxuKlbQAAAA?w=268&h=183&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="" width="380">
   
   <p class="texto">
   Como em toda jornada, chegou o momento em que Giba precisou se despedir das quadras. Sua aposentadoria oficial aconteceu em 2018, 
   encerrando uma trajetória esportiva brilhante que durou mais de duas décadas. Embora seja difícil para qualquer fã ou entusiasta 
   do vôlei ver um ícone se despedir, Giba fez questão de deixar um legado duradouro.
  </p>
  <p class="texto">
  Após a aposentadoria, Giba manteve seu envolvimento com o esporte que tanto ama. Ele se tornou embaixador do vôlei brasileiro, 
  dedicando-se a promover o esporte em todo o país e inspirar a próxima geração de jogadores. Sua influência transcende as quadras, 
  e seu compromisso em compartilhar seus conhecimentos e experiências é uma demonstração de seu caráter e amor pelo esporte.

Além de sua atuação como embaixador, Giba também se envolveu em projetos sociais e iniciativas de desenvolvimento esportivo. 
Ele compreende a importância do esporte na vida das pessoas e usa sua posição para fazer a diferença na sociedade. Sua postura 
humilde, determinação e dedicação ao esporte servem como exemplos inspiradores para atletas em todo o mundo.

A aposentadoria do Giba marca o fim de uma era notável, mas seu impacto e legado permanecerão vivos no mundo do vôlei. Sua 
história de sucesso, conquistas e contribuições para o esporte serão lembradas por gerações futuras. Giba personifica a paixão, o 
talento e a excelência do vôlei brasileiro, 
  </p>

  <iframe width="560" height="315" src="https://www.youtube.com/embed/xFmGWZJoHro" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	<?php
				if(!isset($_SESSION['id_usuario']))
				{ ?>
					<h2>Comentários</h2>

		<?php 	}else
				{ ?>
					<h2>Deixe um comentário:</h2> <?php
				} 


			?>

			<?php

				if(isset($_SESSION['id_usuario']) or isset($_SESSION['id_master']))
				{ ?>
					<form action="" method="POST">
						<img src="img/icone-usuario.png" alt="">
						<textarea name="texto" placeholder="Participe da discussão"></textarea>
						<input type="submit" value="Publicar comentario" name="btn-comentar">
					</form>
			<?php } 

			?>

			<?php 
				if(count($coments) > 0) //se tive comentarios do bd
				{
					foreach ($coments as $v)
					{ ?>
						<div class="area-comentario">
							<img src="img/icone-usuario.png">
							<h3><?php echo $v['nome_pessoa']; ?></h3>
							<h4><?php 
									$data = new DateTime($v['dia']);
									echo $data->format('d/m/y');
									echo " - ";
									echo $v['horario'];
								 ?> 
								 <?php
								 if(isset($_SESSION['id_usuario']))
								 {
								 	if($_SESSION['id_usuario'] == $v['pk_id_usuario'])
								 	{ ?>
								 		<a href="giba.php?id_exc= <?php echo $v['id']; ?>">Excluir</a></h4>
							<?php 	}
								 }elseif(isset($_SESSION['id_master']))
									{ ?>
										<a href="giba.php?id_exc= <?php echo $v['id']; ?>">Excluir</a></h4>
							<?php	}
								 ?>
							
							<p><?php echo $v['comentario']; ?></p>
						</div>
			<?php 	}
				}else
				{
					echo "Ainda não há comentarios";
				}
			?>

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
	
   
    <footer>
        <p>Copyright &copy; 2023  All Rights Reserved.</p>
    </footer>
	<script src="js/bootstrap.bundle.min.js"></script> 
</body>
</html>