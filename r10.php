<?php
	session_start();
	require_once 'classes/comentarios3.php';
	$c = new Comentario("projeto_comentarios","localhost","root","");
	$coments = $c->buscarComentarios3();


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

		header('location: r10.php');
    }

    if(isset($_POST['btn-comentar']))
    {

    	$comentario = addslashes($_POST['texto']);
    	if(isset($_SESSION['id_master'])){
    		$c->inserirComentario($_SESSION['id_master'], $comentario);
    	}elseif(isset($_SESSION['id_usuario'])){
    		$c->inserirComentario($_SESSION['id_usuario'], $comentario);
    	}

    	
    	header('location: r10.php');


    }	


?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Ronaldinho - o Bruxo</title>
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
				<img alt="..." class="d-block w-100" src="https://portaldoatleticano.com.br/wp-content/uploads/2022/12/Ronaldinho-pode-virar-ator.jpg">
				
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="https://wallpapers.com/images/hd/champion-ronaldinho-gaucho-isgvlqrl5roki3qf.jpg">
				
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="https://www.tribunapr.com.br/wp-content/uploads/sites/74/2020/03/18174937/80622a88f75368f1aa62854f444e53d1.jpg">
				
			
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="https://www.ofutebolero.com.br/__export/1627672514862/sites/elfutboleromx/img/2021/07/30/naom_58a89193030d9_1.jpg_1800405350.jpg">
				
			</div>
			
		</div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
	</div><br><br><br><br>
	
    


	<h1><span>Ronaldo de Assis Moreira</span></h1><br>

	

	
	

   

	<p class="texto">Ronaldo de Assis Moreira, mais conhecido como Ronaldinho Gaúcho ou simplesmente Ronaldinho, nasceu no
        dia 21 de março de 1980 em Porto Alegre-RS. Na infância, a sua principal diversão era brincar com a bola de futebol,
         junto dos seus melhores amigos. Mesmo criança já mostrava habilidades com a bola no pé, entao logo aos sete anos 
         começou a jogar na escola de futebol infantil do Grêmio.  Entre seus ídolos, além do seu irmão Assis que também era jogador 
         profissional, encontram-se 
         Rivaldo e Ronaldo (com os quais ganhou a Copa do Mundo FIFA de 2002), Valdo, Romário, Zico, Rivellino, Maradona e Pelé

	</p>

	<p class="texto">
	Aos oito anos seu pai morreu, e ele recebeu apoio de sua mãe, da sua irmã, e dali em diante passou a enxergar seu irmão mais velho como 
	figura paterna
	</p>

		

			<style>
  div {
    text-align: center;
  }
</style>

<div>
<img src="https://veja.abril.com.br/wp-content/uploads/2017/01/ronaldinho-gaucc81cho-crianca.png?w=1024&resize=1200,800" alt="image" width="600" >

</div>

	<h4 class="r491"><span class="r49">Grêmio</span></h4>
		

    <p class="texto">
	A carreira profissional de Ronaldinho iniciou-se no time do Grêmio, tendo como seu primeiro treinador Sebastião Lazaroni.
	Em 1997 ganhou o título Sub-17 jogando pelo time. Sua primeira aparição como profissional ocorreu em 1998, na Copa Libertadores da América, 
	onde logo sua habilidade e seu grande domínio de bola começaram a ser notados pelos clubes.
	</p>

	<p class="texto">
	Além da consagração no jogo contra a Seleção Venezuelana pela Copa América com um gol que ficou marcado pela narração de Galvão Bueno
	que na euforia de ver o gol do jovem Ronaldinho gritou "olha o que ele fez, olha o que ele fez..." também brilhou nas finais do Campeonato Gaúcho de 1999,
	 quando fez o gol do título para o Grêmio contra o Internacional, além de, audaciosamente, ter realizado dribles fantásticos sobre o capitão 
	 do tetracampeonato de 1994, Dunga. Sua atuação nessa final foi um importante fator para sua convocação à Seleção Brasileira pelo então 
	 técnico Vanderlei Luxemburgo. Um fato curioso sobre a convocação é que Ronaldinho só foi convocado depois que o técnico da Seleção cortou 
	 Edílson Capetinha da equipe por ter provocado e se envolvido em uma briga pelo Corinthians, na final do Campeonato Paulista contra o Palmeiras.
	</p>
	
	<div class="video-wrapper">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/HYNREKY5z4Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	</div>		


    <p class="texto">Disputou 141 partidas e marcou 68 gols pelo Grêmio, contando partidas oficiais e amistosos. 
		Até hoje ele é a maior revelação da história do time Gaúcho. Sobre Ronaldinho, 
		o ex-zagueiro gremista Scheidt não poupou elogios: "Eu vi o Ronaldinho crescer e se tornar profissional no Grêmio. 
		Estava lá em 1998 e todos no clube falavam que ele seria craque um dia. Ele tinha até um tratamento diferenciado. 
		Já mostrava habilidade com a bola nos pés, mas ainda faltava a experiência.""

	</p>

	

	<style>
  		div {
    	text-align: center;
  			}
	</style>

<div>
<img src="https://assets.goal.com/v3/assets/bltcc7a7ffd2fbf71f5/bltb6e63690e7fc812c/60dec387214545245b4fc04d/da4ec4b3792962ecaa6ee78b5458fdbf5afb7c2b.jpg?auto=webp&format=pjpg&width=3840&quality=60" alt="image" width="600" >

</div>

    <p class="texto"> O PSV Eindhoven já tinha levado Romário e Ronaldo rumo ao sucesso na Europa. Cabia a Ronaldinho Gaúcho 
		(como passara a ser chamado pela imprensa brasileira para diferenciá-lo de Ronaldo, à época ainda chamado de "Ronaldinho", 
		na Seleção Brasileira) a tarefa de seguir os mesmos passos dos craques, quando o clube francês Paris Saint-Germain fez uma proposta 
		de 7 milhões de euros pelo jogador.
		Mas, com o craque na equipe, o Grêmio tinha aumentado a venda de camisas, bilhetes e lugares-cativos no estádio; assim, recusou a proposta,
		tendo recusado também posteriormente as recebidas de empresários italianos de 60 milhões e de 75 milhões de reais do Leeds United, da 
		Inglaterra.
	</p>


	<p class="texto">			
	O clube gaúcho conseguiu segurar o jogador até 2001, quando o contrato ia só até fevereiro daquele ano e a família, juntamente com o jogador, 
	decidiram que estava na hora de ir para a Europa. Enquanto as propostas continuavam a chegar ao clube, o Grêmio insistia em manter Ronaldinho 
	no clube, fazendo questão de, inclusive, colocar uma faixa no Estádio Olímpico Monumental dizendo que o craque não estava à venda. Sem o aval 
	do clube, o jogador assina um pré-contrato às escondidas e parte para o Paris Saint-Germain sem o Grêmio obter qualquer compensação pelo seu 
	passe, mesmo tendo dito que adoraria ficar no clube neste mesmo período em que já tinha assinado o pré-contrato com o Paris Saint-Germain. 
	Tal disputa faz com que Ronaldinho seja visto como o maior prejudicado perante o clube e a torcida, tendo-se iniciado uma longa batalha 
	judicial entre o Grêmio e o clube francês, o que deixa Ronaldinho parado durante meses, voltando a jogar só em agosto, 
	pelo Paris Saint-Germain
	</p>

	<h4 class="psg1"><span class="psg">Paris Saint-Germain</span></h4>

	<div class="seninha2">
				<img id="senna17" src="img/psg.svg.png">
	
		
		<p class="texto2">
		Durante sua passagem pelo Paris Saint-Germain, Ronaldinho teve problemas com o treinador Luis Fernández, 
		pois este alegava que Ronaldinho estava frequentando demais a vida noturna parisiense, e deixando o futebol de lado. 
		Ele desenvolveu uma reputação de obter desempenho brilhante contra as maiores equipes, mas de não jogar bem contra as equipes pequenas.
		</p>
	</div>

	<p class="texto"> Depois da Copa do Mundo FIFA de 2002, tendo demonstrado o seu valor no cenário internacional, o interesse dos grandes clubes
		 aumentou. Em 2003, Ronaldinho deixou claro que queria deixar o PSG, pois lá não havia conquistado títulos importantes. Após várias 
		 propostas de clubes europeus, inclusive de equipes como o Manchester United, quem acabou levando o craque brasileiro foi o Barcelona.
	</p>

	
	
	<style>
  div {
    text-align: center;
  }
</style>

<div>
<img  src="https://trivela.com.br/wp-content/uploads/2023/05/Ronaldinho-PSG-1920x1080.jpg" alt="image" height="50" width="500">

</div>

		
<h4 class="barca1"><span class="barca">Barcelona</span></h4>

	<div class="seninha2">
				<img id="barca" src="img/FCBarcelona.svg.webp">
 
		<p class="texto2">
		No dia 19 de julho de 2003, o presidente do Barcelona, Joan Laporta, adquiriu o passe de Ronaldinho por 21 milhões de euros. 
		Ronaldinho disse também ter assinado com o Barcelona em vez do Manchester United por sua amizade com o ex-executivo da Nike no 
		Brasil e em Barcelona, o então vice-presidente encarregado de esportes, Sandro Rosell.
		</p>
	</div>

		<p class="texto">
		Ao assinar com o Barcelona, Ronaldinho seguiu os passos de vários ilustres jogadores que tiveram carreiras bem sucedidas no clube, 
		como Evaristo de Macedo, Romário, Ronaldo e Rivaldo.

		Logo o Barcelona promoveu um amistoso para mostrar sua nova contratação e o clube escolhido foi o Milan. Em sua estreia, 
		Ronaldinho ajudou seu time marcando um gol na vitória por 2–0. Durante a temporada 2003–04, sua primeira no clube, suas jogadas 
		levaram o Barcelona a terminar em 2° lugar no Campeonato Espanhol.
		</p>

		<p class="texto">
		Mas foi na temporada 2004–05 que o craque se consagrou realizando jogadas fantásticas, conquistando o Campeonato Espanhol e a 
		Supercopa da Espanha, além do título de Melhor Jogador do Mundo pela FIFA, rapidamente se tornando um dos maiores ídolos do clube.
		</p>
	
		

			<style>
  div {
    text-align: center;
  }
</style>

<div>
<img  src="https://www.lance.com.br/galerias/wp-content/uploads/2019/10/Ronaldinho.jpg" alt="image" height="50" width="500">

</div>

		<p class="texto">
		Na temporada seguinte, a de 2005–06, repetiu o feito conquistando novamente o Campeonato Espanhol. Nesta temporada, 
		ficou marcado por sua atuação no jogo contra o Real Madrid, o chamado El Clásico, realizado em 19 de novembro de 2005.
		Ronaldinho marcou duas vezes e foi o grande destaque da vitória por 3–0 na casa do adversário, o Estádio Santiago Bernabéu. 
		Após seu segundo gol na partida, marcado após uma belíssima jogada em que passou por vários adversários antes de concluir com 
		extrema precisão, ele foi aplaudido de pé pelos torcedores merengues presentes ao Bernabéu. O jogo ficou marcado principalmente 
		por isto, pelo fato do Real historicamente ser o grande arquirrival do Barça. Nesta temporada, ainda conquistou os títulos da Liga 
		dos Campeões da UEFA e, novamente, da Supercopa da Espanha
		</p>

   <p class="texto"> No dia 29 de março de 2006, um estudo apontou Ronaldinho como o jogador de maior valor comercial no mundo, 
	deixando para trás dois ingleses: David Beckham e Wayne Rooney. Sua imagem foi avaliada em 47 milhões de euros, a de Beckham, 
	44,9 milhões e a de Rooney, 43,7 milhões.
   </p>


   <p class="texto">
   Atuou em seu 200° jogo pelo Barcelona numa partida contra o Osasuna, em 3 de fevereiro de 2008. No entanto, 
   sua campanha de 2007-08 como um todo foi marcada por contusões, e uma lesão muscular na perna direita em 3 de abril prematuramente 
   terminou com a sua temporada
   </p>

   <style>
  div {
    text-align: center;
  }
</style>

<div>
<img  src="https://cdn.espn.com.br/image/wide/622_b316c96b-f6b5-3491-b0ee-9559e6178740.jpg" alt="image" height="50" width="500">

</div>
	
   <p class="texto">
   Em 19 de maio, Laporta afirmou que Ronaldinho precisava de "um novo desafio", alegando que ele precisava de um novo clube para que pudesse 
   reviver sua carreira. O empresário Thaksin Shinawatra, proprietário do Manchester City, confirmou em 6 de junho que estava interessado 
   em contratá-lo.
   </p>

 
	
	<p class="texto">
	Ronaldinho e seu companheiro de Barcelona, Lionel Messi, protagonizaram um amistoso contra o racismo na Venezuela, 
	em 28 de junho de 2008, que terminou em um empate por 7–7. Ronaldinho marcou dois gols e ainda deu duas assistências no que seria sua
	 última partida como jogador do Barcelona.
   </p>

   

   <h4 class="milan1"><span class="milan">Milan</span></h4>

   <div class="seninha2">
				<img id="milan" src="img/milan-logo-1.png">

   		<p class="texto2">
  		 Em julho de 2008, Ronaldinho recusou uma oferta de 25,5 milhões de euros do Manchester City e acabou se transferindo para o 
		 Milan por 18,5 milhões de euros, num contrato de cinco anos, com um salário em torno de 6,5 milhões de libras por ano. Com o número 10 
		 já ocupado por Clarence Seedorf, ele selecionou a 80 como número na camisa, já que 1980 foi seu ano de nascimento.
		 Teve uma atuação apagada no dia 14 de setembro, contra o Genoa, pelo Campeonato Italiano. Na ocasião ele foi titular ao lado de Kaká e 
		 Shevchenko, mas não impediu a derrota por 2–0. Viria a marcar seu primeiro gol pelo clube dias depois, numa vitória por 1–0 sobre a 
		 Internazionale no dia 28 de setembro 
   		</p>

   </div>

   		<p class="texto">
		   Ele terminou sua primeira temporada no Milan com 10 gols marcados em 36 partidas. Após um bom começo de temporada, acabou, no fim, 
		   figurando entre os reservas, terminando sua primeira temporada de forma decepcionante.
		</p>

		<style>
  div {
    text-align: center;
  }
</style>

<div>
<img  src="https://diariogaucho.rbsdirect.com.br/imagesrc/7605883.jpg?w=600" alt="image" height="50" width="500">

</div>

	<p class="texto">
	Sua segunda temporada não começou com uma nota elevada. Depois de um tempo, reencontrou sua forma e tornou-se indiscutivelmente 
	o melhor jogador do Milan na temporada. Ele mudou seu papel de lateral a uma função ofensiva.

	No dia 10 de dezembro de 2009, foi eleito o futebolista da década pela revista inglesa World Soccer,
 	ficando à frente de jogadores como Lionel Messi e Ronaldo
	</p>



			<p class="texto">
			Um mês depois, no dia 10 de janeiro de 2010, marcou dois gols contra a Juventus, selando uma vitória por 3–0 para os Rossoneri.
			No jogo seguinte contra o Siena, em 17 de janeiro, marcou seu primeiro hat-trick pelo Milan, quando converteu um pênalti, 
			marcou de cabeça e fechou o placar com um chutaço, a 30 metros de distância.
	</p>

   		<p class="texto">
   		No dia 13 de abril, terminou a temporada como líder de assistências na Serie A, com um total de 13. Uma nota negativa foi que 
		ele perdeu três pênaltis na temporada 2009–10.
   		</p>
   

   <p class="texto">
   Insatisfeito com o banco de reservas no Milan, Ronaldinho manifestou interesse em voltar a atuar no Brasil para ficar mais 
   perto da convocação para a Copa do Mundo FIFA de 2014. Ainda com contrato em vigor, o vice-presidente do clube italiano Adriano Galliani 
   admitiu negociar o jogador com clubes brasileiros e logo surgiu o nome do Grêmio, seu ex-clube, como um dos possíveis destinos do craque. 
   Palmeiras e Flamengo também buscavam contratar o jogador, que negociava com todos ao mesmo tempo. Após semanas de muitas especulações e 
   negociações arrastadas, e após o próprio Ronaldinho declarar que "se dependesse de mim, já estaria no Grêmio", o Grêmio desistiu de 
   contratar o jogador, mesmo após ter preparado uma festa para recebê-lo e comemorar o acordo no Estádio Olímpico junto à torcida do clube.
   </p>

   <style>
	div {
    text-align: center;
  }
</style>

<div>
<img  src="https://calciopedia.com.br/wp-content/uploads/2018/01/ac-milan-v-lecce-serie-a-scaled.jpeg" alt="image" height="50" width="500">

</div>

   <p class="texto">
   Dias depois foi a vez do Palmeiras desistir de negociar com Ronaldinho, onde seu irmão e empresário, Assis, foi duramente 
   criticado por fazer leilão com o jogador e por ter afirmado que a transação estava fechada com o clube e não cumprir com o acordo. 
   Com o caminho livre, Ronaldinho fechou a negociação com o rubro-negro da Gávea, causando grande felicidade aos torcedores cariocas.
   </p>

   <p class="texto">
   "Já imagino essa torcida no estádio lotado. Eles podem esperar o máximo de mim. Voltei para o Brasil e vim jogar no Flamengo para dar isso."

   
   </p>

   <h4 class="fla1"><span class="fla">Flamengo</span></h4>

   <div class="seninha2">
			<img id="fla" src="img/Flamengo-RJ_(BRA).png">
			
			<p class="texto2">No dia 10 de janeiro de 2011, foi confirmado como jogador do Flamengo e, segundo seus amigos mais 
				próximos, ele sempre manifestou o desejo de jogar com a camisa do clube. Assinou um contrato de quatro 
				anos com a equipe carioca.

				A apresentação de Ronaldinho foi realizada dia 12 de janeiro de 2011 no Estádio da Gávea, onde o jogador foi recebido por
 				mais de 20 mil torcedores, juntamente com a presidente Patrícia Amorim. 
			</p>
		</div>


   <p class="texto">
   A torcida foi ao delírio quando o craque se pronunciou pela primeira vez vestindo a camisa do Flamengo. No mesmo dia da 
   apresentação do jogador, fotos revelaram o valor da multa contratual do craque: 400 milhões de reais.
   </p>


   <style>
	div {
    text-align: center;
  }
</style>

<div>
<img  src="https://diariogaucho.rbsdirect.com.br/imagesrc/11635482.jpg?w=620" alt="image" height="50" width="500">

</div>


	<p class="texto">Em sua estreia pelo Brasileirão marcou um gol e deu a assistência para outro, na vitória por 4–0 sobre o Avaí. 
		Seu primeiro hat-trick (três gols na mesma partida) pelo Flamengo veio no jogo contra o Santos em plena Vila Belmiro. Após o 
		mandante fazer 3–0 ainda no primeiro tempo, Ronaldinho foi fundamental na virada histórica daquele jogo, com Ronaldinho e Neymar
		dando um show a parte, com um golaço do menino Ney, driblando vários jogadores e marcando o gol (gol esse que ganhou o prêmio Puskas 
		de 2011 - premiação que elege o gol mais bonito do ano), e também a lendária
		cobrança de falta de Ronaldinho por baixo da barreira,e também marcando o gol. fazendo com que o jogo terminasse 5-4 para o Flamengo.
	</p>

	<div class="video-container">

	
	<iframe width="560" height="315" src="https://www.youtube.com/embed/YOW_Dql9dyY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>		

		
		<iframe width="560" height="315" src="https://www.youtube.com/embed/moKF34zcSsI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>		
	</div>
	
	<p class="texto">
	Em 30 de outubro ocorreu o tão esperado reencontro entre Ronaldinho Gaúcho e o clube que o formou. Empurrado por uma torcida que lotou o 
	estádio Olímpico e passou o jogo todo vaiando o atleta, o Tricolor Gaúcho venceu o Flamengo por 4–2, de virada. Mais do que um confronto 
	entre dois times que disputavam o Brasileirão, o jogo se tornou um duelo entre a torcida gremista e Ronaldinho Gaúcho, que voltava ao estádio 
	no qual se criou, dez anos depois de ter trocado o clube pelo Paris Saint-Germain e um ano depois de preferir o time carioca ao gaúcho quando
	 retornou ao Brasil.

Como não perdoaram as duas atitudes do jogador, que consideram "traições", os gremistas vaiaram o craque no momento em que ele pisou o gramado
 do Olímpico, a cada vez que ele tocava na bola e também quando deixou o campo. Além disso, portaram faixas pequenas, em suas mãos, com as 
 inscrições "pilantra" e "mercenário" e cédulas fictícias de R$ 3 com a imagem do jogador
	</p>

	<style>
	div {
    text-align: center;
  }
</style>

<div>
<img  src="https://s.glbimg.com/es/ge/f/300x230/2011/10/30/ronaldinho_jogo_ae_60.jpg" alt="image" height="50" width="500">

</div>

	


  <p class="texto">
  A crise entre o Flamengo e Ronaldinho começou quando a Traffic deixou de cumprir acordo verbal pelo qual seria responsável 
  pelo pagamento de parte do salário do jogador. A partir deste momento, os salários do jogador deixaram de ser pagos em dia, 
  apesar da promessa do clube de que arcaria com os custos.

Em 23 de maio de 2012, o irmão e empresário Assis foi à loja Fla Concept e pegou 40 itens, a maioria camisas oficiais, 
e se recusou a pagar alegando que o clube deveria valores muito maiores ao seu irmão
  </p>

  <p class="texto">Após um ano e cinco meses jogando no Flamengo, Ronaldinho encerrou seu vínculo com o clube em 31 de
	 maio de 2012, pedindo cerca de 40 milhões de reais de valores atrasados. O jogador conseguiu a tutela antecipada alegando 
	 que, apesar dos salários estarem sendo pagos, os valores de direitos de imagem também deveriam ser considerados referentes
	  ao vínculo trabalhista, e o não-pagamento destes seria suficiente para que fosse pedida a anulação do vínculo.
	Ronaldinho marcou 28 gols em 74 jogos com a camisa do Flamengo.
			</p>

  <p class="texto">

  <h4 class="galo1"><span class="galo">Atlético Mineiro</span></h4>

  		<div class="seninha2">
			<img id="galo" src="img/Atletico_mineiro_galo.png">
			
			<p class="texto2">Quando Ronaldinho rescindiu seu contrato com o Flamengo, Cuca, técnico do Atlético, assim que soube da 
				notícia fez uma ligação para o presidente atleticano Alexandre Kalil dizendo que "o nosso camisa 10 saiu do Flamengo". 
				Kalil, que estava no Rio de Janeiro para contratar outro jogador, marcou então uma reunião com Assis, irmão e agente do 
				jogador e Ronaldinho. Na conversa ficou acertado que Ronaldinho se apresentaria e começaria as atividades no dia seguinte.
				Sem alarde e com muita expectativa, principalmente pelas informações que a mídia passava de que o jogador já estaria acertado 
				com o Atlético, criou-se um clima de expectativa em torno do clube, e no dia 4 de junho de 2012 o jogador acertou com o clube
				 mineiro e começou suas atividades.
			</p>
		</div>

		<p class="texto">
		Devido a entraves com a liberação da documentação de Ronaldinho, o mesmo não pôde estrear no jogo contra o Bahia que era válido pela 
		3º rodada do Campeonato Brasileiro. Em entrevista, Kalil culparia a Federação de Futebol do estado do Rio de Janeiro por isso, chegando
		 a fazer a seguinte declaração: Já imaginávamos isso da Federação Carioca. Mas não é um balde de água fria não, ele (Ronaldinho) sabia
		  que não ia jogar. A sua estreia foi em 10 de junho, no Pacaembu, contra o Palmeiras, usando em sua camisa o número 49, já que o 
		  Atlético já tinha Guilherme inscrito com a camisa 10.
		  A escolha do número se deveu a uma homenagem à sua mãe, nascida no ano de 1949 e que travava uma batalha contra um câncer de 
		  mama recém descoberto.
		</p>

		<style>
	div {
    text-align: center;
  }
</style>

<div>
<img  src="https://imgsapp.mg.superesportes.com.br/app/noticia_126420360808/2012/10/06/231069/20121006202711726189i.jpg" alt="image" height="50" width="500">

</div>
	

  <p class="texto">
  Ao fim da partida, a qual o Atlético venceu por 1–0, Ronaldinho foi muito elogiado pela crítica esportiva por ter apresentado 
  boa movimentação, passes precisos e boas jogadas; ali começava uma sequência de bons jogos que faria. Segundo enquetes realizadas 
  por portais esportivos, a maioria dos brasileiros, independente de preferência clubística, gostaria de ver Ronaldinho com a camisa 
  10 da Seleção Brasileira novamente Em 23 de junho de 2012, na vitória por 5–1 diante do Náutico marcou seu primeiro gol
   defendendo a equipe atleticana.
   
  </p>

  <p class="texto">
  Contra o Figueirense, Ronaldinho conseguiu realizar seu primeiro hat-trick pelo galo; nesse dia foi permitido 
  a ele se ausentar da partida, pois ficou sabendo pouco antes do início da partida que seu padrasto havia morrido, mas mesmo assim
  decidiu jogar o jogo. Em uma cena 
  emocionante, ao marcar o primeiro dos três gols seus nessa partida que terminou 6–0 para o Atlético e ele participou diretamente 
  em cinco gols, ele se curva e começa a chorar.
   
  </p>

  <div class="video-wrapper">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/QW4QccE5i40" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	</div>

  <p class="texto">
  Ao fim do ano de 2012 havia muitas especulações sobre sua permanência no clube mineiro. Graças ao bom futebol apresentado, 
  muitos clubes brasileiros e até mesmo do exterior queriam contar com sua presença em 2013, porém no dia 28 de novembro de 2012 o 
  presidente atleticano Alexandre Kalil confirmou por meio de sua conta no Twitter que ele ficaria no clube por mais uma temporada, 
  usando de brincadeira para isso ao dizer "Vocês queriam. Ele ficou!"
   
  </p>

  <p class="texto">
  Pela Libertadores, ele chamou atenção principalmente na primeira fase, denominada fase-de-grupos, onde foi peça chave para 
  que o Atlético pudesse conseguir cinco vitórias e uma derrota apenas nos seis jogos, dando assistências, marcando gols antológicos e 
  gerando polêmicas por algumas declarações.

No primeiro jogo que foi contra o São Paulo em 13 de fevereiro de 2013, foi protagonista por participar de um lance além de curioso, 
raro no futebol: o Atlético possuía a cobrança de lateral, somente esperava a saída dos médicos de campo e a autorização do árbitro. Enquanto isso, Ronaldinho foi até o goleiro são-paulino 
Rogério Ceni para beber água, ficando apenas os dois na área do time paulistano. Quando o árbitro estava prestes a autorizar a cobrança, 
Ronaldinho foi andando para o lado e Marcos Rocha que fez a cobrança de lateral para ele, que mesmo muito a frente do último marcador, não 
estava impedido já que no futebol, não existe impedimento na cobrança de lateral. Ronaldinho dominou e passou para Jô marcar o que seria o 
primeiro gol do time alvinegro.
   
  </p>
  
  <div class="video-wrapper">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/1fc8PkhYzQg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>	</div>

	<p class="texto">
	No jogo seguinte, contra o Arsenal de Sarandí, o Atlético venceria novamente por 5–2 e Ronaldinho voltaria a fazer a diferença, 
	além de ter sido elogiado por participar ativamente do jogo, marcou dois gols, um numa cobrança de pênalti que Luan havia sofrido 
	e o outro foi aos 13 do segundo tempo, um gol, sendo esse o quarto, antológico, onde encobre o goleiro do time argentino jogando 
	a bola no ângulo.
   
  </p>	
  
  <div class="video-wrapper">
  	<iframe width="560" height="315" src="https://www.youtube.com/embed/qoAFvZVj9AA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>

  <p class="texto">
  Ronaldinho acabou sendo um dos principais nomes na conquista da Copa Libertadores da América pelo Atlético, 
  apesar de não ter cobrado pênalti na decisão contra o Olimpia, já que o Olímpia perdeu a primeira e a quarta 
  cobrança, e Ronaldinho seria o quinto cobrador atleticano. Com a conquista deste título, Ronaldinho acabou se 
  consagrando ao ajudar o Atlético a ir para o Mundial de Clubes da FIFA, entrando também no seleto grupo de jogadores 
  que foram campeões da Copa do Mundo, da Liga dos Campeões da UEFA e da Libertadores da América.</p>

  <p class="texto">No dia 28 de julho de 2014 foi anunciada a saída de Ronaldinho do Atlético. 
	A decisão da saída do camisa 10 foi decidida após uma reunião entre a diretoria alvinegra e o
	irmão e empresário do jogador, Assis. O último jogo de Ronaldinho pelo clube foi contra o Lanús, 
	pelo segundo jogo da Recopa Sul-Americana, em que o Galo se consagrou campeão. Foi um total de 
	88 jogos e de 28 gols, e conquistou a Copa Libertadores de 2013, o Campeonato Mineiro de 2013 e a 
	Recopa Sul-Americana.</p>

	<h4 class="quer1"><span class="quer">Querétaro</span></h4>

	<div class="seninha2">
			<img id="queretano" src="img/queretaro-fc-logo-1.png">

		<p class="texto2">No dia 5 de setembro de 2014, Ronaldinho assinou com o Querétaro Fútbol Club, time do México, 
		por dois anos. Seu novo time coincidentemente tem o apelidado de "Gallos Blancos", mesmo animal mascote do Atlético-MG, 
		seu ex-clube</p>
		</div>

		<p class="texto">Em comunicado oficial postado na madrugada de 20 de junho em sua conta no Instagram, o veterano craque 
			brasileiro anunciou sua despedida do clube. Ronaldinho deixou o futebol mexicano após nove meses de contrato, 32 partidas 
			e oito gols assinalados. Ele foi peça importante durante a campanha do vice-campeonato do Clausura Mexicano. Na final, 
			os Gallos Blancos acabaram caindo para o Santos Laguna, perdendo por 5–3 no agregado. Em jogos oficiais, Ronaldinho 
			jogou 29 vezes, em que ganhou 14, empatou 3 e perdeu 12, sofrendo 8 cartões amarelos e nenhum vermelho, tendo marcado oito gols.
		</p>
		<p class="texto">
			Arturo Villanueva, presidente administrativo do time, fez um balanço sobre sua passagem:

			“ele tomou cervejas? sim, tomou. Ele teve problemas de disciplina? sim, teve. Mas não dizem tudo. Eu me pergunto por que a 
			imprensa não diz que, durante 90% do torneio, ele foi o líder em assistências. Não dizem que uma jogada dele no último 
			minuto nos colocou na Liguilla. Nem dizem que dois gols dele nos levaram para uma semifinal</p>
  

			<style>
	div {
    text-align: center;
  }
</style>

<div>
<img  src="https://jpimg.com.br/uploads/2017/04/2020926662-ronaldinho-gaucho-no-queretaro.jpg" alt="image" height="50" width="500">

</div>
  
<h4 class="flu1"><span class="flu">Fluminense</span></h4>

<div class="seninha2">
			<img id="flu" src="img/logo-fluminense-4096.png">

<p class="texto2">
Após deixar o Querétaro e passar por um período de negociações com diversos clubes, Ronaldinho acertou a sua ida para o 
Fluminense. Ele foi anunciado e apresentado no dia 11 de julho de 2015, recebendo a camisa 10 do clube carioca.

Em junho, Eurico Miranda chegou a anunciar em entrevista coletiva que o Vasco estava 90% fechado com o craque. 
Dias depois, o presidente do clube turco Antalyaspor afirmou que estava próximo de acertar com o jogador.
Um dia após o presidente Peter Siemsen confirmar as negociações e a imprensa brasileira já noticiar o acerto, 
finalmente o jogador assinou contrato com o Fluminense</p>
</div>

<p class="texto"> Ronaldinho estreou pelo Fluminense no dia 1 de agosto, contra o Grêmio, sendo recebido com "mosaico 3D" 
	pela torcida tricolor. O Fluminense venceu o jogo por 1–0 e alcançou a terceira colocação do Campeonato Brasileiro.</p>

<p class="texto">Após mais de dois anos sem assinar contrato profissional com uma equipe, o irmão de Ronaldinho confirmou que o 
jogador havia se aposentado</p>



<style>
	div {
    text-align: center;
  }
</style>

<div>
<img  src="https://static-wp-tor15-prd.torcedores.com/wp-content/uploads/2018/01/Ronaldinho-Gaucho-Fluminense-FC.jpg" alt="image" height="50" width="500">

</div>

<h4 class="bra1"><span class="bra">Seleção Brasileira</span></h4>

<div class="seninha2">
			<img id="brasil" src="img/logo-selecao-brasileira-brasil-4096.png">

<p class="texto2">
Na Copa do Mundo FIFA de 2002, Ronaldinho teve relevância na conquista do quinto título brasileiro em Copas do Mundo ao 
marcar um gol de falta contra a Inglaterra na vitória de virada por 2–1 do Brasil, pelas quartas-de-final em Shizuoka, no Japão.

Alguns avaliam que o goleiro inglês David Seaman falhou no referido lance. Após o gol, Ronaldinho fez uma falta grave em um 
jogador inglês e foi expulso, não participando do jogo da semifinal contra a Turquia, na cidade japonesa de Saitama. 
A competição terminou com a Seleção Canarinho vencendo a Alemanha na final por 2-0 com dois gols de Ronaldo Fenômeno, e
se consagrando a única seleção a ser pentacampeã do mundo</p>
</div>

<div class="video-wrapper">
  
<iframe width="560" height="315" src="https://www.youtube.com/embed/usWov__lh-4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>

<p class="texto"> O melhor jogador da Europa e do mundo era a maior promessa brasileira para a Copa do Mundo FIFA de 2006, 
	realizada na Alemanha. Porém, demonstrou um futebol aquém do que se esperava e recebeu várias críticas dos torcedores brasileiros. 
	Fãs do futebol do craque alegaram que Ronaldinho foi prejudicado pelo esquema tático da Seleção Brasileira. Ronaldinho jogava de 
	atacante no Barcelona, sem grandes preocupações defensivas. Porém, por determinação do então técnico da Seleção Brasileira, 
	Carlos Alberto Parreira, Ronaldinho atuou durante o Mundial de 2006 como um meia-atacante, mais afastado da área e tendo que 
	participar defensivamente. O único jogo em que ele atuou na mesma posição em que jogava no Barcelona foi na partida contra a França, 
	e mesmo assim Ronaldinho teve um péssimo desempenho, chegando inclusive a tropeçar na bola</p>

<p class="texto">Sua última partida pela seleção principal antes da Copa de 2010 aconteceu durante as eliminatórias. 
	Foi no jogo entre Brasil e Peru, no Beira-Rio, onde o Brasil venceu por 3–0; ele entrou no intervalo e não 
	participou de nenhum gol.

Muitas eram as expectativas sobre a convocação da Seleção para a Copa do Mundo FIFA de 2010. Dos que não vinham sendo 
chamados recentemente, Ronaldinho era um dos jogadores mais pedidos pela população brasileira e por profissionais.

Porém, no dia 11 de maio, apenas apareceu na lista suplente de Dunga, que consiste na lista de jogadores para
substituir outros em caso de lesão ou alguma ocorrência até o início da Copa. E acabou ficando fora da copa</p>

<p class="texto">
O retorno ocorreu meses depois da Copa, no dia 29 de outubro, quando foi chamado por Mano Menezes para o amistoso contra a 
Argentina dia 17 de novembro. Ronaldinho foi titular na partida, mas não pôde evitar a derrota por 1–0 para os arquirrivais argentinos.</p>

<style>
	div {
    text-align: center;
  }
</style>

<div>
<img  src="https://f.i.uol.com.br/fotografia/2018/06/14/15290200555b22fe979e556_1529020055_3x2_md.jpg" alt="image" height="50" width="500">

</div>

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
								 		<a href="r10.php?id_exc= <?php echo $v['id']; ?>">Excluir</a></h4>
							<?php 	}
								 }elseif(isset($_SESSION['id_master']))
									{ ?>
										<a href="r10.php?id_exc= <?php echo $v['id']; ?>">Excluir</a></h4>
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