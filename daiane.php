<?php
	session_start();
	require_once 'classes/comentarios.php';
	$c = new Comentario("projeto_comentarios","localhost","root","");
	$coments = $c->buscarComentarios();


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

		header('location: daiane.php');
    }

    if(isset($_POST['btn-comentar']))
    {

    	$comentario = addslashes($_POST['texto']);
    	if(isset($_SESSION['id_master'])){
    		$c->inserirComentario($_SESSION['id_master'], $comentario);
    	}elseif(isset($_SESSION['id_usuario'])){
    		$c->inserirComentario($_SESSION['id_usuario'], $comentario);
    	}

    	
    	header('location: daiane.php');


    }	


?>





<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Daiane dos Santos - A lenda da ginástica</title>
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
				<img alt="..." class="d-block w-100" src="https://todosnegrosdomundo.com.br/wp-content/uploads/2021/07/Daiane-dos-Santos.jpeg">
				
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="https://diariodonordeste.verdesmares.com.br/image/contentid/policy:1.2972813:1596326438/DS1.jpg?f=16x9&$p$f=70548ab">
				
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="https://sportbuzz.uol.com.br/media/uploads/daiane-dos-santos-competindo.png">
				
			
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="https://conteudo.imguol.com.br/2012/07/29/daiane-dos-santos-faz-seus-exercicios-na-eliminatoria-individual-e-por-equipes-da-ginastica-artistica-1343552678298_1920x1080.jpg">
				
			</div>
			
		</div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
	</div><br><br><br><br>
	
    


	<h1><span>Daiane Garcia dos Santos</span></h1><br>

	<style>
  div {
    text-align: center;
  }
</style>

<div>
<iframe width="560" height="315" src="https://www.youtube.com/embed/81hloMXvdmM" title="YouTube video player" frameborder="0" 
	allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
</iframe>

</div>
			
	

   

	<p class="texto">Dayane dos Santos é uma ex-ginasta artística brasileira que nasceu em 20 de junho de 1985, na cidade de 
		São Paulo, Brasil. Ela é reconhecida como a primeira ginasta brasileira a conquistar uma medalha em uma competição mundial 
		de ginástica artística.

 

	</p>

	

    
	

    <p class="texto">
	A história de Dayane dos Santos no esporte começou quando ela tinha apenas cinco anos de idade. Ela se destacou rapidamente 
	por sua flexibilidade, força e habilidades acrobáticas impressionantes. Com o apoio de sua família e treinadores, Dayane 
	começou a treinar intensivamente para se tornar uma ginasta de alto nível.

Em 2001, aos 16 anos, Dayane fez história ao se tornar a primeira ginasta brasileira a conquistar uma medalha em um campeonato 
mundial. Ela ganhou a medalha de bronze no exercício de solo no Campeonato Mundial de Ginástica Artística, realizado em Ghent, 
na Bélgica. Essa conquista foi um marco importante para a ginástica brasileira e abriu portas para o reconhecimento internacional 
do talento brasileiro nesse esporte.


	</p>



    <p class="texto">

 

	</p>

    <p class="texto"> Nos anos seguintes, Dayane dos Santos continuou a competir em diversos eventos internacionais, 
		representando o Brasil com excelência. Ela se especializou no exercício de solo, demonstrando uma combinação 
		impressionante de acrobacias, graciosidade e expressão artística. Sua rotina no solo era caracterizada por movimentos 
		explosivos, giros rápidos e combinações únicas.

Em 2003, Dayane conquistou mais uma medalha de bronze no exercício de solo no Campeonato Mundial de Ginástica Artística, 
em Anaheim, nos Estados Unidos. Ela também participou dos Jogos Olímpicos de Atenas, em 2004, onde alcançou a final no exercício 
de solo, terminando em oitavo lugar.
A carreira de Dayane dos Santos foi marcada por muitas conquistas e recordes. Ela se tornou a primeira ginasta sul-americana a 
ganhar uma medalha em um campeonato mundial e também a primeira a vencer uma etapa da Copa do Mundo de Ginástica Artística.
	</p>

	<h4><span>Medalha de bronze em de 2001</span></h4>
	<style>
  div {
    text-align: center;
  }
</style>

<div>
<img src="https://th.bing.com/th/id/OIP.bqgxisQZjRdGO63-7uRRDgHaE8?w=242&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="">

</div>

	<p class="texto"> A medalha de bronze conquistada por Dayane dos Santos no Campeonato Mundial de Ginástica Artística de 2001 foi 
		um marco significativo em sua carreira e também para a ginástica brasileira. O evento ocorreu em Ghent, na Bélgica, e Dayane 
		competiu no exercício de solo, demonstrando suas habilidades excepcionais nessa modalidade. A performance de Dayane no solo 
		durante esse campeonato foi impressionante. Ela combinou acrobacias desafiadoras, graciosidade e expressão artística em sua 
		rotina. Sua coreografia, que combinava movimentos técnicos com elementos de dança, cativou a plateia e os juízes.
		Com seu desempenho excepcional, Dayane dos Santos conquistou a medalha de bronze no exercício de solo, tornando-se a primeira 
		ginasta brasileira a ganhar uma medalha em um campeonato mundial de ginástica artística. Essa conquista histórica abriu caminho 
		para que o Brasil fosse reconhecido internacionalmente no esporte e inspirou futuros ginastas brasileiros a alcançarem níveis 
		elevados de excelência.

	</p>

	<p class="texto"> A medalha de bronze no Campeonato Mundial de 2001 foi um marco importante na carreira de Dayane dos Santos 
		e confirmou seu talento e dedicação à ginástica artística. Além disso, a conquista demonstrou que as ginastas brasileiras 
		podiam competir em alto nível em um esporte dominado por países tradicionais na ginástica. A performance de Dayane dos Santos 
		nesse campeonato e sua conquista da medalha de bronze são lembradas como momentos históricos para o esporte brasileiro. Sua 
		dedicação, talento e pioneirismo abriram caminho para que novos atletas brasileiros sonhassem em alcançar o sucesso na ginástica 
		artística, levando o nome do Brasil a patamares cada vez mais altos nessa modalidade.
	</p>


	

	<h4><span>Medalha de bronze em 2003</span></h4>
	<style>
  div {
    text-align: center;
  }
</style>
<div>
<img src="https://th.bing.com/th/id/OIP.E6u-oCnbJF8YddL0PpSnmgHaFA?w=266&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="">
</div>
 
	<p class="texto">
	Na competição em Anaheim, Daiane dos Santos apresentou uma rotina excepcional no exercício de solo, combinando acrobacias 
	poderosas, graciosidade e expressão artística. Sua performance impressionou os juízes e a plateia presente, resultando na 
	conquista da medalha de bronze.</p>

	<p class="texto">
	Essa conquista foi histórica para Daiane e para a ginástica brasileira. Ela se tornou a primeira ginasta brasileira a
	 ganhar uma medalha no exercício de solo em um Campeonato Mundial de Ginástica Artística. A medalha de bronze reforçou a posição 
	 de Daiane como uma das principais ginastas do mundo na modalidade de solo.
	</p>

   <p class="texto"> A conquista de Daiane dos Santos no Campeonato Mundial de 2003 em Anaheim destacou sua habilidade técnica, força 
	e talento artístico. Ela provou ser uma competidora formidável em um esporte altamente competitivo, solidificando seu nome como 
	uma das grandes ginastas de solo da época.
   </p>

   <p class="texto">
   A medalha de bronze de Daiane dos Santos no exercício de solo no Campeonato Mundial de Ginástica Artística de 2003 em Anaheim é 
   um marco importante em sua carreira e contribuiu para seu legado no esporte. Sua conquista inspirou e motivou gerações futuras de 
   ginastas brasileiros, mostrando que o Brasil também pode competir no mais alto nível da ginástica artística mundial.
   </p>

   <h4><span>Medalha de ouro em 2003</span></h4>
   <style>
  div {
    text-align: center;
  }
</style>

<div>
<img src="https://th.bing.com/th/id/OIP.u5lmrs6VXxB-4ACUjFCYFAHaEK?pid=ImgDet&rs=1" alt="">
</div>

   <p class="texto">
   Daiane dos Santos é conhecida por suas habilidades excepcionais no exercício de solo, e em 2003 ela conquistou uma medalha de 
   ouro nessa modalidade na etapa da Copa do Mundo de Ginástica Artística realizada em Paris, França.Nessa competição, Daiane 
   apresentou uma rotina impressionante, combinando acrobacias desafiadoras, graciosidade e expressão artística. Sua performance 
   no solo cativou a plateia e impressionou os juízes, resultando na conquista da medalha de ouro.


   </p>

   <p class="texto">
   Essa vitória na etapa da Copa do Mundo de 2003 em Paris foi um momento significativo para Daiane dos Santos. Ela demonstrou 
   sua habilidade técnica e sua capacidade de competir em alto nível internacionalmente. A conquista também contribuiu para 
   consolidar seu nome como uma das melhores ginastas de solo do mundo na época.

A medalha de ouro de Daiane dos Santos na etapa da Copa do Mundo de Ginástica Artística de 2003 em Paris é um exemplo notável de 
seu talento e dedicação à ginástica artística. Ela continuou a ser uma influência inspiradora para futuras gerações de ginastas 
brasileiros, deixando um legado duradouro no esporte.
   </p>

   
  <h4><span>Medalha de ouro em 2004</span></h4>
  <style>
  div {
    text-align: center;
  }
</style>

<div>
<img src="https://th.bing.com/th/id/OIP.iuS4nwnN_WwLB_CUJjdATAHaGy?w=175&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="">
</div>

  <p class="texto">
  Na competição em Paris, Daiane dos Santos demonstrou suas habilidades excepcionais no exercício de solo. Ela apresentou uma rotina 
  envolvente, combinando acrobacias impressionantes, movimentos de dança cativantes e uma expressão artística marcante.

Sua performance foi brilhante e conquistou a admiração dos juízes e do público presente. Com uma execução precisa e uma 
apresentação cheia de energia, Daiane conquistou a medalha de ouro, tornando-se campeã na etapa da Copa do Mundo de 2004 em Paris.


  </p>

  <p class="texto">
  Essa conquista foi mais um marco importante na carreira de Daiane dos Santos. A vitória em uma etapa da Copa do Mundo de Ginástica
   Artística é um feito significativo, demonstrando seu domínio da modalidade de solo e sua capacidade de competir no mais alto nível.

A medalha de ouro de Daiane dos Santos na etapa da Copa do Mundo de 2004 em Paris reforçou seu status como uma das melhores ginastas 
de solo do mundo na época. Sua técnica, sua graciosidade e sua presença no palco a tornaram uma ginasta admirada e respeitada 
internacionalmente.

Essa conquista inspirou e motivou jovens ginastas brasileiros, mostrando que o Brasil também pode alcançar o sucesso no cenário 
global da ginástica artística. Daiane dos Santos deixou um legado duradouro como uma das maiores ginastas brasileiras de todos os 
tempos, e sua conquista em Paris certamente faz parte dessa história de sucesso.

<h4><span>Suspensa por 5 meses</span></h4>
  <style>
  div {
    text-align: center;
  }
</style>

<div>
<img src="https://th.bing.com/th/id/OIP.fRZIuCPnm81of8zAT6QNkQHaD4?w=342&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="">
<img src="https://th.bing.com/th/id/OIP.BA58YNIQ8PDxfRuxXsm5aAHaFn?w=261&h=197&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="" width=312>
</div>

  <p class="texto">
  A ginasta Daiane dos Santos foi considerada culpada da acusação de doping por furosemida. 
  Na manhã do dia 29 de janeiro de 2010, a Federação Internacional de Ginástica divulgou em seu site que a atleta ficará cinco meses 
  afastada das competições.
  A ginasta foi flagrada em um exame antidoping feito fora de competição, em julho do ano passado. O teste de Daiane, que 
  treinava no Clube Pinheiros, apontou a presença da substância proibida furosemida, usada para controlar o peso (diurético). No 
  dia 30 de outubro, o resultado foi divulgado e o caso repercutiu imediatamente em todo o Brasil.

Na ocasião, o coordenador da ginástica do Pinheiros, Raimundo Blanco, admitiu estranheza sobre a possibilidade de Daiane ter
 utilizado uma substância proibida. "Não entendo. Ela não teria motivo para usar essa substância pois está em fase de recuperação, 
 sem estar competindo", limitou-se a dizer Raimundo.
  </p>
  <p class="texto">
  O advogado de Daiane, Cristiano Caus, pretendia absolver sua cliente baseado no artigo 10.4 das normas antidoping da 
  entidade máxima da ginástica mundial. O argumento foi que a atleta teria feito uso de um remédio com substância proibida 
  (no caso a furosemida) "em um tratamento estético, e não para ter vantagem nas competições".
  A substância furosemida é um diurético proibido pela Agência Mundial Antidoping (Wada, em inglês), pois a mesma pode ser 
  utilizada para mascarar o consumo de outras substâncias dopantes. Além disso, também pode ser empregada para a redução de peso, 
  em decorrência da perda de água no organismo
  </p>




  <h4><span>Movimento criado pela Daiane dos Santos</span></h4>
  <style>
  div {
    text-align: center;
  }
</style>

<div>
<iframe width="560" height="315" src="https://www.youtube.com/embed/5ujRDIeRX_Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>

  <p class="texto">
  Daiane dos Santos ficou famosa por realizar um movimento inovador e icônico no solo da ginástica artística conhecido como 
  "duplo twist carpado". Esse movimento foi criado e popularizado por Daiane durante sua carreira.

O duplo twist carpado consiste em uma série de acrobacias em que o ginasta realiza um salto com uma rotação dupla completa no ar, 
enquanto mantém o corpo dobrado no formato de "carpado" (joelhos e quadris flexionados). Essa combinação de rotação e posição do 
corpo cria um visual impressionante e desafiador.
  </p>
  <p class="texto">
  Daiane dos Santos foi a primeira ginasta a realizar com sucesso esse movimento em competições internacionais. Sua execução 
  consistente e sua capacidade de realizar o duplo twist carpado com precisão e elegância contribuíram para sua reputação como 
  uma das melhores ginastas de solo do mundo.

O duplo twist carpado de Daiane dos Santos se tornou uma marca registrada de sua rotina e inspirou outras ginastas a tentarem 
executar esse movimento. Sua inovação e contribuição para a ginástica artística brasileira e mundial são reconhecidas e admiradas 
até hoje.
  
  </p>


  <h4><span>Racismo</span></h4>
  <style>
  div {
    text-align: center;
  }
</style>

<div>
	<img src="https://s2-g1.glbimg.com/wdZfp-nIo81adB-EkhzIy39Hh0E=/0x0:1000x1000/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2021/z/V/6W4epaQhepaPYGXYKN0Q/prancheta-8-20.jpg" alt="" width="330">
</div>

  <p class="texto">
 Ela enfrentou situações de racismo ao longo de sua carreira como ginasta. Como uma das poucas atletas negras em um esporte 
 predominantemente branco, Daiane teve que lidar com comentários racistas, discriminação e preconceito ao longo de sua trajetória.
 “Acho que não existe uma pessoa preta que não tenha sofrido racismo na vida. O que acontece é que muitas pessoas não entendem o que 
 estão passando, não sabem diagnosticar", disse a atleta!
 Daiane narrou ainda situações como origem social que elevaram a discriminação contra ela, inclusive por pessoas da seleção. 

“Comigo, houve situações na seleção, nos clubes, de pessoas que não queriam ficar perto, que não queriam usar o mesmo banheiro!
 Aquele tipo de coisa que nos faz pensar: opa, voltamos à segregação. Banheiros para brancos e banheiros para pessoas de cor. Teve 
 muito isso dentro da seleção. E além da questão da raça, tem a questão de vir do sul, de não ser do centro do país, de ter origem 
 humilde. Ou seja: ela é tudo o que a gente não queria aqui!”
Essas formas de discriminação incluíam insultos racistas direcionados a ela nas redes sociais, comentários depreciativos sobre sua
 aparência física e até mesmo o tratamento diferenciado por parte de juízes em competições internacionais.

    </p>
  <p class="texto">
  Apesar dessas adversidades, Daiane mostrou uma incrível força e resiliência ao longo de sua carreira. Ela continuou a se 
  destacar por sua excelência técnica, habilidade artística e carisma, superando as dificuldades enfrentadas.

Daiane dos Santos não apenas se tornou uma inspiração para muitos jovens atletas, mas também levantou discussões importantes 
sobre racismo no esporte. Ela contribuiu para aumentar a conscientização sobre a necessidade de combater o racismo e promover 
a igualdade e a inclusão no ambiente esportivo.

É fundamental reconhecer e combater o racismo enfrentado por atletas como Daiane dos Santos, e continuar trabalhando para criar um 
ambiente esportivo mais justo, diverso e inclusivo para todos.
  </p>
  <h4><span>Fim da carreira</span></h4>
  <style>
  div {
    text-align: center;
  }
</style>

<div>
<img src="https://th.bing.com/th/id/OIP.Y5fyoroOLSXcLvl1ssABnQHaDm?w=327&h=170&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="">
<img src="https://th.bing.com/th/id/OIP.B_XHBbyqaoYI8B9qbEMz5gHaEo?w=226&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="" width=278>
</div>

  <p class="texto">
  Em 31 de agosto de 2012, anunciou oficialmente a sua aposentadoria do esporte, depois de descobrir uma lesão grave no joelho esquerdo.
  Sua última participação foi nos jogos olímpicos de Londres, em 2012, quando não conseguiu ir além da fase eliminatória. Logo depois a atleta, que defendia o clube Pinheiros, declarou o fim de sua carreira. Com futuro indefinido, Daiane manifestou sua vontade de continuar no esporte atuando em cargos de gestão e declarou que não tem interesse em se tornar técnica.

  </p>

  		
  
 
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
									  <a href="daiane.php?id_exc= <?php echo $v['id']; ?>">Excluir</a></h4>
						 <?php 	}
							  }elseif(isset($_SESSION['id_master']))
								 { ?>
									 <a href="daiane.php?id_exc= <?php echo $v['id']; ?>">Excluir</a></h4>
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