!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Ayrton Senna - A lenda do automobilismo</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
	<link rel="stylesheet" href="footer.css">
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
						<a class="nav-link" href="galeria.html">Galeria</a>
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
				<img alt="..." class="d-block w-100" src="https://cdn2.tfx.company/images/clickwallpapers-Ayrton%20Senna-img8.jpg">
				
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="https://gamerview.uai.com.br/wp-content/uploads/2018/04/1no7W6dOZpFI8d8EX3WdCU52sSh.jpg">
				
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="https://cdn2.tfx.company/images/clickwallpapers-Ayrton%20Senna-img10.jpg">
				
			
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="https://cdn.wallpapersafari.com/98/99/ODIb67.jpg">
				
			</div>
			
		</div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
	</div><br><br><br><br>
	
    


	<h1><span>Ayrton Senna da Silva</span></h1><br>

	

	
	

   

	<p class="texto">Dia 21 de março de 1960 Um dia normal para maior parte da população, e, porém um dia muito especial para o 
                Sr. Milton e a dona Neyde, pois foi naquele dia que nascia o bebê que eles carinhosamente nomearam de Ayrton Senna da Silva. 
                Apesar de que o Sr. Milton ter alguns plaons para seu novo filho, eles não imaginavam que ele se tornaria um dos 
                maiores brasileiros de todos os tempos. Seu pai, um entusiasta do automobilismo, logo aos 4 anos, já montou um Kart, com acredite 
                se quiser, um motor de cortador de grama para Ayton. Aos 9 eles já dirigia seu mini jipe pelas estradas das fazendas do pai. 

	</p>

			<div class="seninha">
				<img id="senna1" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Ayrton_Senna_-_3_Years_Old.jpg/330px-Ayrton_Senna_-_3_Years_Old.jpg">
			  
				<img id="senna2" src="https://sp-ao.shortpixel.ai/client/to_webp,q_lossless,ret_img/https://senna.com/wp-content/uploads/2015/08/60KT_024-DIA-DA-INFANCIA-AYRTON-SENNA-860x430.jpg" >
			  
				<img id="senna3" src="https://sp-ao.shortpixel.ai/client/to_webp,q_lossless,ret_img/https://senna.com/wp-content/uploads/2015/08/60KT_F001-DIA-DA-INFANCIA-AYRTON-SENNA-300x220.jpg" >
			</div>
		

    <p class="texto">
				Começar a competir no kart acabaria sendo inevitável para Ayrton, então logo aos 13 anos, começou a competir profissionalmente.
				Logo em sua primeira corrida em julho de 1973, foi onde conseguiu sua primeira vitória, no Kartódromo de Interlagos,
				que hoje leva seu nome. Infelizmente o título mundial de kart, foi o único que o brasileiro não conquistou, sendo vice em 1979, 
				terminando com a mesma quantidade de pontos do 2º colocado e 1980.
	</p>



    <p class="texto">Foi logo em 1981 que ele deu início a sua carreira em monopostos na europa, na Fórmula Ford 1600, onde foi
				campeão com 12 vitórias em 20 corridas, disputando pela equipe Ralf Firman. Após o fim da temporada de corridas, Ayrton encontrava-se 
				em um dilema: apesar do seu sucesso imediato na temporada, não conseguiu novos patrocinadores, e por isso não conseguiria se manter 
				na Europa. Por causa dos perigos que vinham com as disputas de corridas, sua família não o apoiava integralmente. Por isso,
				decidiu adiar seu sonho abandonar por hora o automobilismo e administrar uma loja de material de construção montada pelo pai.
				Porém, já no ano seguinte em fevereiro de 1982, decidiu voltar à Europa e continuar sua carreira. Dando sequência aos seus títulos, 
				em 1982 foi campeão da Formula Ford 2000, com 22 vitórias em 27 corridas, dessa vez pela Dennis Rushen. 

	</p>

	<div class="seninha">
				<img id="senna5" src="https://senna.com/wp-content/uploads/2016/12/kart1.jpg">
			  
				<img id="senna7" src="https://s2-ge.glbimg.com/gk9_VCUigq9uEKLApQTID71gBcY=/0x0:2000x1414/984x0/smart/filters:strip_icc()/s.glbimg.com/es/ge/f/original/2014/04/26/81av_n006__a5_-_foto_familia_1.jpg" >
			
				<img id="senna8" src="https://s2-ge.glbimg.com/LuR-5Ea0MgOodRcHR8caYoODX5M=/0x0:640x405/984x0/smart/filters:strip_icc()/s.glbimg.com/es/ge/f/original/2013/07/26/senna1981f_1.jpg">
			</div>

    <p class="texto"> Em 1983, seu último ano fora da Fórmula 1 Senna venceu a Fórmula 3 Inglesa com treze vitórias em 21 corridas, 
				com uma sequencia impressionante de 9 vitórias consecutivas, pela equipe de Dick Bennetts, depois de uma disputa com o 
				inglês Martin Brundle, que corria pela equipe de Eddie Jordan. O campeonato dessa temporada gerou uma controvérsia 
				envolvendo o piloto inglês. Ele foi acusado por todos os pilotos de ter utilizado um carro fora das especificações do 
				regulamento, conseguindo assim se aproximar de Ayrton na segunda metade do campeonato. O recurso impetrado pelos pilotos 
				foi julgado em novembro de 1983 pelo tribunal do Royal Automobile Club e o inglês foi condenado por unanimidade.
	</p>


	<div class="seninha">
				<img id="senna9" src="https://2.bp.blogspot.com/--dOkAcYy9OI/UiJ8D8BPmiI/AAAAAAAAN1k/CdHNzreZk4Q/s1600/Senna-F3-Veja.jpg">
			  
				<img id="senna10" src="https://womotor.files.wordpress.com/2013/05/senna-f3-inglesa.jpg" >
			  
				<img id="senna11" src="https://senna.com/wp-content/uploads/2016/12/formula-3-1.jpg" > 
	</div>


	<p class="texto">			
				Ainda em 1983 realizou seus primeiros testes com um carro de Fórmula 1. Primeiro com a Williams, o piloto bateu o recorde da pista 
				de Donington Park até então. Em poucas voltas, Senna já tinha igualado o tempo de Jonathan Palmer, piloto de testes da Williams, 
				em 1:01:700. Nas 83 voltas que deu, atingiu o recorde de 1:00:500. Também realizou testes para a McLaren, onde impressionou 
				Ron Dennis, chefe de equipe da mesma. Mesmo com a concorrência de outros dois pilotos convidados para os testes, o inglês 
				Martin Brundle e o alemão Stefan Bellof, Senna foi o mais rápido dos três em Silverstone.
	</p>

	<p class="texto"> Senna atraiu a atenção de diversas equipes como a Williams, McLaren, Brabham e Toleman. Ao contrário do que 
			   se imagina, seu compatriota Nelson Piquet não se opôs à sua contratação pela Brabham. Porém a Parmalat, quem patrocinava a equipe, 
			   tinha mais interesse em ter um piloto italiano na equipe do que dois brasileiros, influenciando na decisão da equipe em contratar 
		       o piloto italiano Teo Fabi, em vez de Ayrton para a temporada. Assim, das três remanescentes, apenas a equipe Toleman ofereceu a 
	     	   ele um carro para disputar o campeonato do ano de 1984. E dali em diante sua vida nunca mais seria a mesma.
	</p><br>

	<div class="seninha">
				<img id="senna13" src="https://s.glbimg.com/es/ge/f/original/2013/07/19/ayrtonsenna04.jpg">
			  
				<img id="senna14" src="https://4.bp.blogspot.com/-P44iEbfPGUE/WEXrJYvp8LI/AAAAAAAAJmo/VzWPFlKBadIR54CnXeIBJK70L37vf--HgCLcB/s1600/sennabrabham_one.jpg" >
			  
				<img id="senna15" src="https://s2-ge.glbimg.com/6fpk4r_e3CssnmZuf-vhlW1qNRo=/0x0:600x349/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_bc8228b6673f488aa253bbcb03c80ec5/internal_photos/bs/2019/2/z/f3ewe7SLuQ3ztE3JMllg/c5m7bmtwqaer4kw.jpg" >
	</div>
			

	<h4><span>Toleman 1985</span></h4>

	<div class="seninha2">
				<img id="senna17" src="img/toleman.png">
	
		
		<p class="texto2">
			   Senna marcou seu primeiro ponto no campeonato mundial de pilotos logo no segundo grande prêmio que disputou, em Kyalami na África
			   do Sul. Ele repetiu o resultado duas semanas depois, no Grande Prêmio da Bélgica, disputado no circuito de Zolder. Uma semana 
			   depois, o piloto brasileiro não conseguiu tempo para o Grande Prêmio de San Marino, em Imola. Tal fato aconteceu devido a um 
			   desentendimento entre a equipe Toleman e a fábrica italiana de pneus Pirelli.
		</p>
	</div>

	<p class="texto"> Um curioso caso fora da fórmula 1 que envolve Senna, aconteceu uma semana antes do GP de Mônaco foi quando em 1994, 
		um evento organizado pela mercedes para a reinauguração do circuito de Nürburgring, que veio com layout muito menor que o lendário 
		Nordschleife. Então para isso a marca alemã organizou uma corrida com vários pilotos famosos como Denny Hulme, John Surtees, Phil Hill 
		e Stirling Moss. Também tinha a presença de alguns pilotos ainda na ativa como  Keke Rosberg e Jacques Laffite. Emerson Fittipaldi 
		também foi convidado, mas Por causa das 500 Milhas de Indianápolis, Fittipaldi não puderam estar presentes. Então para seu lugar, 
		foi convidado um jovem piloto ja formula 1, Ayrton Senna. Todos correriam com o mesmo carro, uma Mercedes 190E 2.3 de 16 válvulas e 4 
		cilindros, preparado pela inglesa Cosworth. Surpreendendo a muitos, essa corrida teve um vencedor inesperado. Com uma tocada agressiva, 
		Senna venceu a corrida com pouco mais de um segundo de vantagem para o austríaco Niki Lauda, que acabou sagrando-se campeão naquela 
		temporada da F1, pela McLaren.
	</p>

	
		<div class="imgg">
			<iframe width="500" height="336" src="https://www.youtube.com/embed/THOfSETvirQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
			<img id="imagem" src="https://4.bp.blogspot.com/-GaUvRYH3GSU/Ug5GiZ-NhqI/AAAAAAAADfw/kwtWMZA8RUs/s1600/190E_23_16V_senna_vitoria_Nurburgring_2.jpg" height="300" width="550">
		</div>	

	<p class="texto">
			No GP de Mônaco, seu desempenho jogou os holofotes para si chamando atenção das demais equipes. Classificou-se em 13º no grid de largada,
			e fez um rápido progresso através das estreitas ruas de Monte Carlo. Na volta 19, passou Niki Lauda, que estava em segundo, 
			e começou a ameaçar o líder Alain Prost, e continuou por várias voltas lutando pelo primeiro lugar com seu limitado Toleman. 
			A esta altura já chovia muito no circuito e a corrida foi interrompida na volta 31 por razões de segurança. Senna chegou a 
			comemorar a vitória ultrapassando Alain Prost a poucos metros da linha de chegada, mas, nesses casos, o regulamento mandava 
			considerar as colocações da volta anterior e, ainda, por ter sido interrompida com menos da metade da corrida, os pontos deveriam 
			ser computados pela metade. Senna ainda ganharia dois pódios naquele ano - terceiro no Grande Prêmio da Grã-Bretanha, em 
			Brands Hatch, e no GP de Portugal, em Estoril. E graças ao seu desempenho, já no ano seguinte ele se transferiria, para outra equipe
			a Lotus. 
	</p>

	<div class="seninha">
				<img id="senna21" src="https://www.autoracing.com.br/wp-content/uploads/2018/03/f1-senna-toleman-monaco-730.jpg">
			  
				<img id="senna22" src="https://i.pinimg.com/originals/ce/3f/e5/ce3fe5ec2f066e6916ead91fa198a828.jpg" >
			  
				<img id="senna23" src="https://www.grandprix247.com/wp-content/uploads/2018/03/tmk0228fe27.jpg" >
			
	</div>

	<p class="texto">
	Ainda em 1984, Senna tomou parte nos 1000 km de Nürburgring, onde pilotou o Porsche 956, correndo em parceria com Henri Pescarolo e
	 Stefan Johansson. Apesar de ser sua estreia nesse tipo de competição, Ayrton Senna conseguiu fazer a melhor volta em três oportunidades 
	 durante a corrida, tanto em pista seca como em condições de chuva, além de marcar o sétimo melhor tempo, embaixo de chuva. Somados os 
	 tempos dos três pilotos, a equipe largou em nono lugar. No final, a equipe de Ayrton terminou em oitavo lugar sendo prejudicada por um 
	 problema que obrigou o carro a ficar parado durante 17 minutos, aproximadamente oito voltas.
	</p>

	<p class="texto">	
	 A equipe acreditava na época que sem o referido problema, o carro chegaria em terceiro lugar. Esta corrida, juntamente com a Corrida
	 dos Campeões de Nurburgring, foram as únicas vezes em que Senna correu em carros com cockpit fechado.
	</p>

	<div class="vid1">
   		<iframe width="560" height="315" src="https://www.youtube.com/embed/-HTBee7GDe0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
   </div>

	<h4><span>Lotus 1986-1987</span></h4>

	<div class="seninha2">
				<img id="senna18" src="https://i.pinimg.com/originals/66/62/4c/66624c52a52286d6b5befc6ccbcaeb21.jpg">
 
		<p class="texto2">
			Na Lotus, em 1985, ele tinha como parceiro o italiano Elio De Angelis. Senna largou em quarto na sua primeira corrida pela nova 
			equipe na abertura da temporada no Brasil, no circuito de Jacarepaguá, no Rio de Janeiro, mas abandonou a prova devido a problemas 
			elétricos. Na segunda corrida do ano, o GP de Portugal, disputado no Autódromo do Estoril, em 21 de abril de 1985, conseguiu sua 
			primeira vitória na Fórmula 1, largando na pole position sob pesada chuva. Naquele ano conseguiu 2 vitórias, 6 pódios e 7 poles.
		</p>
	</div>

		<p class="texto">
			Graças ao seu excelente desempenho nos treinos e ao motor Renault, Senna passaria a ser o "rei das pole positions". Encerraria o ano 
			com uma corrida marcante no GP da Austrália, quando repetiu um feito de seu ídolo Gilles Villeneuve e pilotou um bom tempo sem o bico 
			do carro, saindo várias vezes da pista mas mantendo a segunda posição. O carro mais uma vez não aguentou o esforço e Senna abandonou a 
			corrida. Senna terminou a temporada em 4º lugar no Campeonato Mundial de Pilotos.
		</p>

		<p class="texto">
			Naquele ano conseguiu 2 vitórias, 6 pódios e 7 poles.
		</p>
	
		<div class="seninha">
				<img id="senna24" src="https://s2.glbimg.com/r8vAxWc670L49NOjLxRZKDQ5vrw=/0x0:699x400/690x395/s.glbimg.com/es/ge/f/original/2014/03/19/lotus_senna_1985_blog.jpg">

				<img id="senna25" src="https://senna.com/wp-content/uploads/2016/12/portuguese.jpg">

				<img id="senna26" src="https://d3ugyf2ht6aenh.cloudfront.net/stores/002/592/542/products/lotus-0821-c8737130fc1dc17bd816688679461249-1024-1024.jpg">


			</div>

		<p class="texto">
			Em 1986, a Lotus escolheu o escocês Johnny Dumfries como parceiro, com o aval de Senna, que vetou o inglês Derek Warwick sob a 
			alegação de que a Lotus não tinha condições de manter carros competitivos para dois pilotos de ponta ao mesmo tempo. A nova Lotus 
			98T mostrou ser mais confiável em 1986 e a temporada começou bem para Senna, que terminou em segundo na corrida vencida pelo também 
			brasileiro Nelson Piquet, no GP do Brasil em Jacarepaguá.
		</p>

   <p class="texto"> Reconhecendo estar com um carro inferior aos da Williams e McLaren, Senna passou a adotar uma estratégia de não parar para 
	trocar pneus, buscando ficar na frente dos adversários o maior tempo possível. Com essa tática, ele passou a liderar o campeonato pela 
	primeira vez na carreira, depois de vencer o GP da Espanha, em Jerez de la Frontera.  no qual bateu a Williams de Nigel Mansell por 0,014s - 
	uma das menores diferenças de chegada da história da F1
   </p>

   <p class="texto">
	Todavia, a liderança do campeonato não foi mantida por 
	muito tempo, já que Senna abandonou diversas outras corridas por problemas mecânicos. A caça ao primeiro título mundial acabou sendo uma luta 
	entre Prost e sua McLaren-TAG e a dupla Piquet e Mansell da Williams-Honda, terminando com Prost se consagrando bi-campeão. 
   </p>

   <div class="seninha">
				<img id="senna27" src="https://projetomotor.com.br/wp-content/uploads/2021/01/Senna-Mansell-Jerez-86.jpg">

				<img id="senna28" src="https://1.bp.blogspot.com/-StmfRI4KLJo/WG0F-ZvEwUI/AAAAAAAAM-Q/iDYdHRJIhCAEw0CCfb_H4umsfO3-TyUIwCLcB/s1600/espanha%2B1986%2B%25282%2529.jpg">

				<img id="senna29" src="https://senna.com/wp-content/uploads/2016/12/espanha-86.jpg">
	</div>
	
   <p class="texto">
   Na Hungria, um circuito ainda mais travado (onde as ultrapassagens são mais difíceis), Senna repetiu uma vez mais a estratégia, 
   naquela mesma corrida. Naquele dis tivemos uma das disputas mais insanas da formula 1 ate hoje. Senna e Piquet, disputavam o 1º lugar na 
   corrida, com Senna em primeiro, Senna batalhou como pucos para manter a liderança, mas na volta 55 Piquet tentou uma manobra ousada 
   e conseguiu assumir a ptimeira colocação. Ultrapassagem essa que até hoje é considerada a maior ultrapassagem da formula 1
   de todos os tempos
   </p>

   <div class="vid1">
   		<iframe width="560" height="315" src="https://www.youtube.com/embed/AgrWsd5QXF0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
   </div>
   
	
	<p class="texto">
   O ano de 1987 veio com muitas promessas de dias melhores. A Lotus tinha um novo patrocinador, o Camel, e o mesmo poder dos motores 
   Honda das Williams depois que a Renault decidira se retirar do esporte. Depois de um começo lento, Senna ganhou duas corridas em seguida: 
   o prestigioso GP de Mônaco (a primeira do recorde de seis vitórias no principado) e o GP dos Estados Unidos em Detroit, também pelo segundo ano 
   seguido, e mais uma vez chegou à liderança do campeonato. Naquele momento, a Lotus 99T Honda parecia ser mais ou menos igual aos ótimos 
   Williams-Honda, mais uma vez pilotados por Piquet e Mansell. Mas, apesar da performance do 99T, que usava a tecnologia da suspensão ativa, 
   as Williams FW11B de Nelson Piquet e Nigel Mansell eram ainda os carros a serem batidos.Ele acabou classificado em terceiro na colocação final, 
   com 57 pontos, com uma pole e oito pódios, duas vitórias. Essa temporada marcou uma reviravolta na carreira de
   Senna depois de ele ter construído uma profunda relação com a Honda, que lhe rendeu grandes dividendos. Ayrton foi contratado pela McLaren, 
   que acertou com a Honda o fornecimento de motores V6 Turbo para 1988.
   </p>

   <div class="seninha">
				<img id="senna30" src="https://cdn.artphotolimited.com/images/5bec49f59592db3119aba76c/1000x1000/ayrton-senna-monaco-1987.jpg">
				
				<img id="senna31" src="https://aventurasnahistoria.uol.com.br/media/_versions/personagem/senna_87_widemd.jpg">

				<img id="senna32" src="https://upload.wikimedia.org/wikipedia/commons/b/b0/Lotus_99T_front-left_2012_Autosport_International.jpg">
	</div>

   <h4><span>McLaren 1988-1993</span></h4>

   <div class="seninha2">
				<img id="senna19" src="img/mclaren.png">

   		<p class="texto2">
  		 Em 1988, as McLaren-Honda ostentavam os números 11 e 12, desta vez com a dupla Alain Prost e Ayrton Senna. Um dos principais 
		 momentos da temporada de 1988 aconteceu em Mônaco. Durante o quali, Ayrton fez a pole position com uma vantagem de 1:427s 
		 para Alain Prost.  Ayrton liderava com uma margem de quase 1 minuto para o segundo colocado, o francês Alain Prost. No entanto,  
		 acabou batendo na 66ª volta, dando a vitória ao adversário francês. 
   		</p>

   </div>

   		<p class="texto">
  			 No GP do Japão, Senna, que largava na pole, não conseguiu 
		 	largar e caiu para 17ª posição. Entretanto, já nas primeiras voltas, Ayrton ultrapassou oito adversários. Na 28º volta, Senna 
		 	ultrapassou Prost e terminou ao final da prova com 13 segundos de vantagem para o francês, conquistando finalmente
			após 5 anos na categoria seu 1º título mundial.
		</p>

	<p class="texto">
		Logo após o primeiro título mundial, Senna participou do especial de Roberto Carlos na TV Globo afirmando que, nas últimas voltas
		 do GP do Japão, o qual lhe garantiu o título com uma vitória, ele teve uma visão do que ele achava ser Deus.
	</p>

	<div class="seninha">
				<img id="senna30" src="https://senna.com/wp-content/uploads/2016/12/japanese-1.jpg">
				
				<img id="senna31" src="https://cdn-5.motorsport.com/images/amp/6DlxE7G6/s1000/f1-japanese-gp-1988-podium-win.jpg">

				<img id="senna32" src="https://jpimg.com.br/uploads/2017/04/523462193-ayrton-senna-comemora-o-seu-terceiro-titulo-da-formula-1-em-suzuka-no-japao.jpg">
	</div>

			<p class="texto">
		Senna pilotou a McLaren MP4/5 em 1989. Nesse ano, a rivalidade entre ele e Alain Prost se intensificou, notadamente a partir do 
		GP do Japão, mantendo-se entre as temporadas de 1990 e 1991.
	</p>

   		<p class="texto">
   		No GP de Mônaco de 1989, Ayrton novamente abriu uma vantagem sobre o francês acima de 50 segundos, alcançando a vitória desta vez. 
  		Senna disse, logo após a prova, que seu carro tinha perdido as duas primeiras marchas e, por conta disso, precisou mudar sua forma de 
   		pilotagem.
   		</p>
   

   <p class="texto">
   A briga pelo campeonato teve seu capítulo final no circuito de Suzuka, no Japão. Ayrton Senna chegou com 60 pontos “válidos” 
   (apenas os 11 melhores resultados contavam): tinha vencido seis vezes na temporada. Prost tinha vencido apenas quatro, mas possuía 76. 
   O francês teve uma temporada mais regular com seis 2º lugares, enquanto Senna tinha abandonado em cinco corridas. Por isso, 
   Senna tinha que descontar 16 pontos nas duas últimas provas. Ele precisava da vitória e ainda torcia por tropeços do companheiro de equipe.

Ayrton fez a sua parte nos treinos. Fez a pole com 1min38seg04, obtendo quase 2 segundos de vantagem para o francês, uma eternidade 
na Fórmula 1.Na largada, Prost tracionou melhor e fez a primeira curva na frente, com Ayrton em segundo. A diferença entre os dois durante 
mais de 40 voltas foi praticamente no visual: era uma corrida à parte dos demais, assim como foi durante toda a temporada.
   </p>

   <p class="texto">
   Na 47a volta, Senna armou o bote na chicane antes da entrada da reta dos boxes, colocando sua McLaren por dentro da curva, mas o francês 
   acabou “fechando” a porta antes mesmo da tomada da primeira perna da chicane. Ambos se tocaram. Alain Prost ficou de fora. Ayrton Senna 
   pediu ajuda dos fiscais de pista para retornar a prova e voltou à pista.
   </p>

   <p class="texto">
   Os cartolas da Fórmula 1, no entanto, ratificaram a punição ao brasileiro que acabou nem subindo ao pódio.

Segundo o artigo 56 do código disciplinar da F-1 em 1989, caso um carro ficasse parado no meio da pista, os comissários poderiam removê-lo 
para um local seguro e, se o piloto conseguisse fazer o motor voltar a funcionar (como Senna), o piloto poderia voltar a prova. A irregularidade 
apontada foi justamente o corte da chicane por Senna após a batida, os carros de Senna e Prost ficaram posicionados fora do traçado e, como o 
brasileiro não voltou para a pista no mesmo ponto onde saiu, foi desclassificado. Com Prost se consagrando tri-campeão
   </p>

   <div class="seninha">
				<img id="senna33" src="https://s2-ge.glbimg.com/yDiS7aW62rzvWQmC1Wd0buyaytM=/0x0:3072x2064/600x0/smart/filters:gifv():strip_icc()/s.glbimg.com/es/ge/f/original/2018/04/23/gettyimages-1917479.jpg">
				
				<img id="senna34" src="https://s2-ge.glbimg.com/VEmqKum_ggns_6JUHyAT_bgmFV0=/186x0:1834x1024/924x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_bc8228b6673f488aa253bbcb03c80ec5/internal_photos/bs/2020/j/c/YwTL9rSNuBrqK4gCfeog/senna-prost-1989.jpg">

				<img id="senna35" src="https://cdn-5.motorsport.com/images/mgl/0mbJrZA2/s700/alain-prost-mclaren-ayrton-sen-1.jpg">
	</div>

   <p class="texto">
   Em 1990, no mesmo circuito e com os dois pilotos novamente disputando o título mundial, dessa vez, Prost pilotanto pela Ferrari. Senna tirou a 
   pole de Prost. A Ferrari de Prost fez uma largada melhor e pulou à frente da McLaren de Senna, que antes mesmo da largada havia declarado que 
   não permitiria uma ultrapassagem de Prost. Na primeira curva, Senna tocou a roda traseira de sua McLaren na Ferrari de Alain Prost a 270 km/h, 
   levando os dois carros para fora da pista, se "vingando", do acontecido do ano anterior. Ao contrário de 89, desta vez o abandono dos 
   pilotos deu a Senna o seu segundo título mundial. Neste ano, Senna conquistou o título mesmo com um equipamento inferior ao da Ferrari, notadamente 
   a partir do meio da temporada.

   A temporada de 1990 reservou um momento inusitado na história da Fórmula 1. Em setembro daquele ano, durante o GP de Monza, na Itália, Senna fez uma 
   aposta com o chefe de equipe Ron Dennis. O chefe da McLaren não acreditava na vitória de Ayrton dentro da casa da Ferrari. O brasileiro decidiu propor 
   uma aposta com Ron: caso conseguisse a vitória, ele ganharia o carro do triunfo de presente. Além de ter vencido a corrida, Senna fez a pole position, 
   marcou a volta mais rápida da prova e liderou de ponta a ponta, conseguindo o famoso Grand Slam.
   </p>

   <div class="seninha">
				<img id="senna36" src="https://s2-ge.glbimg.com/yDiS7aW62rzvWQmC1Wd0buyaytM=/0x0:3072x2064/600x0/smart/filters:gifv():strip_icc()/s.glbimg.com/es/ge/f/original/2018/04/23/gettyimages-1917479.jpg">
				
				<img id="senna37" src="https://pbs.twimg.com/media/EtLnJLEXEAApMxp.jpg">

				<img id="senna38" src="https://cdn-1.motorsport.com/static/img/amp/600000/640000/645000/645100/645167/s6_595214/f1-japanese-gp-1990-alain-prost-ferrari-and-ayrton-senna-mclaren-collide-in-the-first-corn.jpg">
	</div>

	<p class="texto">O GP Brasil de 1991 marcou a primeira vitória de Ayrton Senna em sua terra natal pilotando um Fórmula 1. Aliado a isso, 
	o fato de a corrida ter possuído um final dramático, com a perda de quase todas as marchas de sua McLaren e o consequente desgaste físico 
	acima do normal, fazendo com que ele não conseguisse sair do carro sozinho, fez dessa corrida uma das mais lembradas da carreira do piloto 
	brasileiro.

	Logo após a bandeirada final, a comunicação de rádio da equipe foi aberta na TV, no exato momento em que Ayrton gritava, 
	em parte pela vitória inédita como também pelas dores que sentia devido ao desgaste da corrida. Ainda na pista, em seguida à 
	conquista inédita de Senna, os fiscais de pista comemoravam a vitória do brasileiro com pulos e abraços	
	</p>
	
	<p class="texto">
	Logo após a conquista do tricampeonato mundial de Fórmula 1 em 1991, Senna foi recebido com honras militares e de estadista na sua chegada 
	na capital paulista. Primeiro, o avião no qual ele aportou em São Paulo foi acompanhado, no trecho final da viagem, por caças da Força Aérea 
	Brasileira. Logo após, recebeu da então prefeita Luiza Erundina, a chave da cidade. Em seguida, desfilou em carro aberto pelas ruas da cidade.
	 A princípio, a carreata seria feita em um caminhão do Corpo de Bombeiros, porém, com a negativa do próprio Ayrton, ele terminou desfilando em 
	 um carro conversível particular. A enorme quantidade de pessoas e automóveis aglomerados acabou por prejudicar o trânsito da cidade, além de 
	 ocasionar um acidente envolvendo cinco carros
	</p>

	
		<div class="seninha">
				<img id="senna39" src="https://start.youse.com.br/wp-content/uploads/2019/11/image_Easy-Resize.com-1.jpg">
				
				<img id="senna40" src="https://projetomotor.com.br/wp-content/uploads/2020/10/Senna-mclaren-honda-1991-DESTAQUE.jpg">

				<img id="senna41" src="https://s2-ge.glbimg.com/ratx4JAnjWnGB2FytdWlldkLWHk=/0x0:5304x3536/1008x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_bc8228b6673f488aa253bbcb03c80ec5/internal_photos/bs/2020/D/N/fzDWkUSxWq0rw5Mh3Ctw/gettyimages-811388480.jpg">
	
		</div>

  <p class="texto">
  Senna demorou muito a decidir o que fazer em 1993 e chegou ao final do ano sem ser contratado por nenhuma equipe. Ele sentiu que os carros da McLaren não seriam 
  competitivos, especialmente depois que a Honda resolveu se retirar da F1 no final de 1992, e não poderia ir para a Williams enquanto Prost estivesse por lá, pois 
  o contrato dele proibia a equipe de ter Senna como seu parceiro. Ron Dennis, chefe da McLaren, estava tentando assegurar um fornecimento de motores Renault V10 para 
  1993. Com a recusa da Renault, a McLaren foi obrigada a pegar os motores Ford V8 como um cliente comum. Dessa forma, a McLaren recebeu versões de motores mais velhas 
  do que os clientes preferenciais da Ford, como a Benetton. Mas mesmo assim, terminou o campeonato com o vice-campeonato.
  </p>

  		<div class="seninha">
				<img id="senna42" src="https://sp-ao.shortpixel.ai/client/to_webp,q_lossless,ret_img/https://senna.com/wp-content/uploads/2014/02/92PT_117-860x430.jpg">

				<img id="senna43" src="https://s2-ge.glbimg.com/7kpfyhq9chjsx77DZ0ddjcvxjUE=/0x0:4227x2790/924x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_bc8228b6673f488aa253bbcb03c80ec5/internal_photos/bs/2020/p/Z/flUq6fSzm5BCrBw8RG9Q/senna-mexico-1992c.jpg">

				<img id="senna44" src="https://www.razaoautomovel.com/wp-content/uploads/2022/01/mclambo-senna.jpeg">
		</div>

  <p class="texto">

  <h4><span>Williams 1994</span></h4>

  		<div class="seninha2">
			<img id="senna20" src="img/williams.svg.png">
			
			<p class="texto2">Senna já havia tentado entrar para a Williams em 1993, mas foi impedido por Prost, que vetou seu nome. Ayrton Senna se ofereceu para pilotar por nada, pois seu desejo 
			era fazer parte da vencedora equipe Williams-Renault, mas foi impedido por uma cláusula no contrato do francês que impedia o brasileiro de entrar para a equipe
			Porém, essa cláusula não se estenderia até 1994, o que fez Prost se retirar das corridas um ano antes de vencer seu contrato, preferindo isso a ter seu principal rival 
			como companheiro de equipe. 
			</p>
		</div>

		<p class="texto">
		Em 1994, Senna finalmente assinou com a equipe Williams-Renault. Senna agora estava na equipe que havia ganho os dois campeonatos 
			anteriores com um veículo muito superior aos demais.
			A primeira corrida da temporada 1994 foi no Brasil, disputada em Interlagos, quando Senna fez a pole. Na corrida, Senna assumiu a ponta, mas Michael Schumacher com a 
			Benetton tomou a liderança depois de passar Ayrton Senna nos boxes na volta 21. Senna, determinado a vencer no Brasil, perdeu o controle de sua Williams, rodou na 
			curva da Junção, ficando parado na zebra e abandonando a prova na volta 5
		</p>

		<div class="seninha">
				<img id="senna42" src="https://s2-ge.glbimg.com/MpMQ06tMDchVvDibwhyy9sjn9b0=/0x15:1923x1304/984x0/smart/filters:strip_icc()/s.glbimg.com/es/ge/f/original/2014/11/05/1266942_1.jpg">

				<img id="senna43" src="https://uploads.vrum.com.br/2023/05/de026e92-auto-sport-senn-56212-741x417.jpg">

				<img id="senna44" src="https://cdn.bonitoinforma.com.br/img/social/1200/1200/dn_noticia/2013/10/F1-Imola-Ayrton-Senna-sur-Williams-Renault-FW16-avant-son-accident-fatal.jpg">
	
		</div>
	

  <p class="texto">
   Dia 1º de Maio de 1994, chegamos ao fatídico GP de San Marino, em Ímola. após varias discussões se o GP deveria acontecer ou não, devido ao fato de Rubens Barrichello
   ter sofrido um acidentee gravissimo e Roland Ratzenberger ter falecido naquele final de semana. O GP ainda aconteceu e Senna fez a pole. Na corrida
   Senna rapidamente fez a terceira melhor volta da corrida, seguido por Michael Schumacher.
   Senna iniciara o que seria a sua última volta na F1; ele entrou na curva Tamburello e perdeu o controle do carro devido a uma barra de direção quebrada, seguindo reto 
   e chocando-se violentamente contra o muro de concreto. A telemetria mostrou que Senna, ao notar o descontrole do carro, ainda conseguiu, nessa fração de segundo, 
   reduzir a velocidade de cerca de 300 km/h para cerca de 200 km/h. Os oficiais de pista chegaram à cena do acidente e, ao perceber a gravidade, só puderam esperar a 
   equipe médica. Por um momento a cabeça de Senna se mexeu levemente, e o mundo, que assistia pela TV, imaginou que ele estivesse bem, mas esse movimento havia sido 
   causado por um profundo dano cerebral. Senna foi removido de seu carro pelo Professor Sid Watkins, neurocirurgião de renome mundial pertencente aos quadros da 
   Comissão Médica e de Segurança da Fórmula 1 e chefe da equipe médica da corrida, e recebeu os primeiros socorros ainda na pista, ao lado de seu carro destruído, 
   antes de ser levado de helicóptero para o Hospital Maggiore de Bolonha onde, poucas horas depois, foi declarado morto.
   
  </p>


  <div class="vid1">
   		<iframe width="560" height="315" src="https://www.youtube.com/embed/x9znf-lpg4Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
   </div>
		

	<section class="contact-area" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="contact-content text-center">
                        <a href="#"><img src="img/GS.png" alt="logo"></a>
                        <p>"O passado se torna eterno: celebrando as lendas do esporte brasileiro, o legado que nunca se apaga."</p>
                        <div class="hr"></div>
                        <h6>Av. Maria de Paula Santana, 3815.</h6>
                        <h6>031995589642<span>|</span>0000000000</h6>
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