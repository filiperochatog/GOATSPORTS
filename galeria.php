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
	<title>Galeria - Fotos das lendas do esporte brasileiro</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
	<link rel="stylesheet" href="footer.css">
	<link rel="stylesheet" href="css/fotos.css">
	
	<link href="css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="css/fotos.css">
    
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
		</nav><br><br>

		<h4 class="galo1"><span class="galo">Ayrton Senna</span></h4>



    <section id="gallerya">
        <img id="img1" src="https://senna.com/wp-content/uploads/2015/08/66P_007-DIA-DA-INFANCIA-AYRTON-SENNA-860x430.jpg" alt="">
        <img id="img1" src="https://senna.com/wp-content/uploads/2015/08/60KT_024-DIA-DA-INFANCIA-AYRTON-SENNA-860x430.jpg" alt="">
        <img id="img1" src="https://senna.com/wp-content/uploads/2016/12/kart1.jpg" alt="">
		<img id="img1" src="https://s2-ge.glbimg.com/Lx7H2YnmUkNw1CPYJI-Bv6ZliIM=/1200x/smart/filters:cover():strip_icc()/s.glbimg.com/es/ge/f/original/2014/02/23/senna.jpg" alt="">
		<img id="img1" src="https://carro.blog.br/wp-content/uploads/2021/05/Ayrton-Senna-Formula-Ford.jpg" alt="">


		<img id="img1" src="https://senna.com/wp-content/uploads/2015/08/60KT_F001-DIA-DA-INFANCIA-AYRTON-SENNA-300x220.jpg" alt="">
		<img id="img1" src="https://s2-ge.glbimg.com/gk9_VCUigq9uEKLApQTID71gBcY=/0x0:2000x1414/984x0/smart/filters:strip_icc()/s.glbimg.com/es/ge/f/original/2014/04/26/81av_n006__a5_-_foto_familia_1.jpg" alt="">
		<img id="img1" src="https://s2-ge.glbimg.com/LuR-5Ea0MgOodRcHR8caYoODX5M=/0x0:640x405/984x0/smart/filters:strip_icc()/s.glbimg.com/es/ge/f/original/2013/07/26/senna1981f_1.jpg" alt="">
		<img id="img1" src="https://3.bp.blogspot.com/-STZV5krUCFs/U5eyTKegrSI/AAAAAAAAWnc/9oo1n-BNW1I/s1600/tumblr_ms7wunFYWT1s0rjbno1_500.jpg" alt="">
		<img id="img1" src="https://s2-ge.glbimg.com/21dDHjTDU6Z7qgCg-daQxFhIsBQ=/141x49:916x527/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_bc8228b6673f488aa253bbcb03c80ec5/internal_photos/bs/2020/l/C/asTQdMSFGfONSYgETFBQ/senna-fford2000.jpg" alt="">
		<img id="img1" src="https://senna.com/wp-content/uploads/2016/01/williams83-1.jpg" alt="">
		
		<img id="img1" src="https://womotor.files.wordpress.com/2013/05/senna-f3-inglesa.jpg" alt="">
		<img id="img1" src="https://contosdaf1.files.wordpress.com/2014/07/senna1984inglaterra15.jpg" alt="">
		<img id="img1" src="https://p2.trrsf.com/image/fget/cf/1200/1200/middle/images.terra.com/2021/09/10/senna-tentando-melhorar-seu-tempo-nos-treinos-de-san-marino,-sem-sucesso-(fonte_-twitter-@flmig75).jpg" alt="">
		<img id="img1" src="https://conteudo.imguol.com.br/c/esporte/2014/03/24/030684---ayrton-senna-durante-o-gp-de-monaco-de-1984-seu-primeiro-podio-na-f1-pela-equipe-toleman-1395698200211_900x506.jpg" alt="">
		<img id="img1" src="https://i.pinimg.com/originals/46/81/cb/4681cb0d1db393d1912bdc2e98c73582.jpg" alt="">
		<img id="img1" src="https://upload.wikimedia.org/wikipedia/commons/c/c3/1985_European_GP_Senna.jpg" alt="">		
		<img id="img1" src="https://1.bp.blogspot.com/-C4q06rW_SH4/XaJKgvjWL8I/AAAAAAABCSo/eZ5ZXVWJDFkqy0TMmHMQUfsgX4fE1L-dwCKgBGAsYHg/s1600/87por_018.jpg" alt="">
		<img id="img1" src="https://s2.glbimg.com/vAhzhXu2qDaAzxSGd7W-xebSPpA=/0x0:620x413/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_cf9d035bf26b4646b105bd958f32089d/internal_photos/bs/2020/9/q/t4pzL1ThAmDQVfUb8h9w/2017-03-21-senna01.jpg" alt="">
		<img id="img1" src="https://sidspecialstore.com.br/wp-content/uploads/2022/10/senna-1titulo.webp" alt="">
		<img id="img1" src="https://s2-ge.glbimg.com/ZE3VRxP6EhJYLRw_8xW5DgGXKyY=/0x0:1600x900/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_bc8228b6673f488aa253bbcb03c80ec5/internal_photos/bs/2020/K/F/acWbaSSjKYb0yn2Z1Bfw/senna-prost-japao-1990.jpg" alt="">
		<img id="img1" src="https://www.rbsdirect.com.br/imagesrc/25410416.jpg?w=1200&h=630&a=c&version=1575255600" alt="">
		<img id="img1" src="https://f.i.uol.com.br/fotografia/2023/03/21/1679436575641a2b1fd0fc0_1679436575_3x2_md.jpg" alt="">
		<img id="img1" src="https://s2-ge.glbimg.com/ratx4JAnjWnGB2FytdWlldkLWHk=/0x0:5304x3536/1008x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_bc8228b6673f488aa253bbcb03c80ec5/internal_photos/bs/2020/D/N/fzDWkUSxWq0rw5Mh3Ctw/gettyimages-811388480.jpg" alt="">
		<img id="img1" src="https://s2-ge.glbimg.com/3kvkrnBbnCVaxI66bMeSbcTKXNs=/0x99:690x435/600x0/smart/filters:gifv():strip_icc()/s.glbimg.com/es/ge/f/original/2016/06/06/ayrtonsenna_1993_ae_edugarcia.jpg" alt="">
		<img id="img1" src="https://1.bp.blogspot.com/-F-5cQ5yBrBI/YRkjbaDa1CI/AAAAAAAAAzw/ICpcz343xwslroKBDF8A5Yggp2vDHjptwCPcBGAsYHg/s1000/ayrton-senna-estoril-1985%25281%2529.jpg" alt="">
		<img id="img1" src="https://formulatotal.files.wordpress.com/2010/08/07_porsche_956_joest_racing.jpg" alt="">
		<img id="img1" src="https://s2-ge.glbimg.com/MpMQ06tMDchVvDibwhyy9sjn9b0=/0x15:1923x1304/984x0/smart/filters:strip_icc()/s.glbimg.com/es/ge/f/original/2014/11/05/1266942_1.jpg" alt="">
		<img id="img1" src="https://ogimg.infoglobo.com.br/in/24997665-9dc-1e9/FT1086A/35613176_SCRio-de-Janeiro-RJ-04-11-2010-Cenas-do-documentario-SennaAyrton-Senna-at-the-GP.jpg" alt="">
		<img id="img1" src="https://upload.wikimedia.org/wikipedia/commons/f/f2/Incidente_di_Ayrton_Senna_a_Imola_1994_-_01.jpg" alt="">
	</section>

	<h4 class="galo1"><span class="galo">Ronaldinho Gaúcho</span></h4>

	<section id="gallerya">
        <img id="img1" src="data:image/jpeg;base64,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" alt="">
        <img id="img1" src="https://www.rbsdirect.com.br/imagesrc/25731573.jpg?w=700" alt="">
        <img id="img1" src="https://a.espncdn.com/photo/2021/0215/r815266_1296x729_16-9.jpg" alt="">
		<img id="img1" src="https://sismf.museudofutebol.org.br/anexos/imagem/515923/w:640/h:640/c:0" alt="">

		<img id="img1" src="https://blogs.correiobraziliense.com.br/dribledecorpo/wp-content/uploads/sites/15/2021/01/Pochettino-e-R10-e1609699715328-1024x649.jpg" alt="">
		<img id="img1" src="https://assets.goal.com/v3/assets/bltcc7a7ffd2fbf71f5/blt6514ceadfe5151bc/60dedfb7c64a06233d268bd8/e2b7206cf38259fa5b4b340816691b6b8630c6dd.jpg?auto=webp&format=pjpg&width=3840&quality=60" alt="">
		<img id="img1" src="https://www.lance.com.br/galerias/wp-content/uploads/2019/10/Ronaldinho.jpg" alt="">
		<img id="img1" src="https://i0.statig.com.br/bancodeimagens/dz/vu/ei/dzvuei176qsn8cmdj4wn37dnz.jpg" alt="">
		<img id="img1" src="https://igamingbrazil.com/wp-content/uploads/2020/03/AGclub7-Lan%C3%A7a-Modalidade-Especial-e-levanta-Quest%C3%A3o-sobre-Ronaldinho-Ga%C3%BAcho.jpg" alt="">

		<img id="img1" src="https://diariogaucho.rbsdirect.com.br/imagesrc/7605883.jpg?w=620" alt="">
		<img id="img1" src="https://media.gazetadopovo.com.br/2008/12/52141417b8dd030167373989ee0ec4be-gpMedium.jpg" alt="">
		<img id="img1" src="https://media.gazetadopovo.com.br/2009/02/29c1c6acf81f14c7aa1ad34c1dda2e42-gpLarge.jpg" alt="">
		<img id="img1" src="https://jpimg.com.br/uploads/2017/04/I_20110814_194002.jpg" alt="">

		<img id="img1" src="https://i1.r7.com/data/files/2C95/948E/37A3/523E/0137/A3A0/697F/3123/Ronaldinho.jpg" alt="">
		<img id="img1" src="https://conteudo.imguol.com.br/c/esporte/d1/2018/02/23/ronaldinho-gaucho-no-atletico-mg-1519398291316_v2_4x3.jpg" alt="">
		<img id="img1" src="https://pbs.twimg.com/media/DTsP7e8XcAATRmI.jpg" alt="">
		<img id="img1" src="https://cdn.resfu.com/media/img_news/goal_ronaldinho-gaucho-brasil-x-england-2002-world-cup_x14h8rq92fqj116cq6j2b4wpw.jpg?size=1200x&lossy=1" alt="">

		<img id="img1" src="https://images.futebolinterior.com.br/2021/05/0002050537935_img.jpg" alt="">
		<img id="img1" src="https://conteudo.imguol.com.br/blogs/132/files/2015/03/gaucho-queretaro.jpg" alt="">
		<img id="img1" src="https://cdn.espn.com.br/image/wide/622_17ab9e6d-66dc-3184-97fe-bb8e89bfa093.png" alt="">
		<img id="img1" src="https://cdn.espn.com.br/image/wide/622_782b9752-00d5-3217-9fb9-22931995ce00.jpg" alt="">
		<img id="img1" src="https://jpimg.com.br/uploads/2017/04/2472413294-depois-de-um-ano-no-queretaro-ronaldinho-volta-ao-brasil-para-tentar-conquistar-o-brasileiro-com-o-f.jpg" alt="">		
	</section>


	<h4 class="galo1"><span class="galo">Giba</span></h4>

	<section id="gallerya">
        <img id="img1" src="https://www.dialethoseventos.com.br/assets-custom/img/palestrantes/giba-volei-28042023-105144.jpg" alt="">
        <img id="img1" src="https://p2.trrsf.com/image/fget/cf/1200/1600/middle/images.terra.com/2014/08/01/giba-olimpiada-2012-getty.jpg" alt="">
        <img id="img1" src="https://img.r7.com/images/2013/10/04/12_09_41_806_file?dimensions=460x305&&&&resize=460x305&crop=2144x1422+163+311" alt="">
		<img id="img1" src="https://static.cdn.pleno.news/2019/08/giba-demonstra-preocupacao-com-reacao-russa-na-final-do-volei-masculino-1344780933883_1920x1254-1024x669.jpg" alt="">
		<img id="img1" src="https://conteudo.imguol.com.br/blogs/161/files/2017/09/Giba.jpg" alt="">
		<img id="img1" src="https://www.esportelandia.com.br/wp-content/uploads/2019/12/giba.jpg" alt="">
		<img id="img1" src="https://tesejuridica.com.br/wp-content/uploads/2020/12/giba-prisao.jpg" alt="">
		<img id="img1" src="https://www.rbsdirect.com.br/imagesrc/17801593.jpg?w=700" alt="">
		<img id="img1" src="https://lncimg.lance.com.br/cdn-cgi/image/width=3840,height=undefined,quality=75/uploads/2017/10/25/59f0fa124ec34.jpeg alt="">
		<img id="img1" src="https://dol.com.br/img/Artigo-Destaque/620000/giba-ponta-e-capitao-do-brasil-ataca-bola-do-fundo_00621151_0_.jpg?xid=1415801" alt="">
		<img id="img1" src="https://classic.exame.com/wp-content/uploads/2016/09/size_960_16_9_giba-volei.jpg?quality=70&strip=info&w=960" alt="">
		<img id="img1" src="https://zybproducoes.com.br/wp-content/uploads/2021/06/giba1-1.webp" alt="">

		<img id="img1" src="https://www.bandab.com.br/wp-content/uploads/2017/01/Giba-Divulga%C3%A7%C3%A3o-FIVB.jpg" alt="">
		<img id="img1" src="https://static-wp-tor15-prd.torcedores.com/wp-content/uploads/2018/07/Giba-1.jpg" alt="">
		<img id="img1" src="https://i.pinimg.com/originals/3b/79/59/3b79596ca211cd60f4133fd8c587b8bb.jpg" alt="">

	</section>

	<h4 class="galo1"><span class="galo">Daiane dos Santos</span></h4>

	<section id="gallerya">
        <img id="img1" src="https://diariogaucho.rbsdirect.com.br/imagesrc/7231789.jpg?w=600" alt="">
        <img id="img1" src="https://atribunaregional.com.br/wp-content/uploads/2022/04/Daiane-dos-Santos-1024x576.jpeg" alt="">
        <img id="img1" src="https://lncimg.lance.com.br/cdn-cgi/image/width=3840,height=undefined,quality=75/uploads/2018/03/07/5aa01fc642c1e.jpeg" alt="">
		<img id="img1" src="https://diariodonordeste.verdesmares.com.br/image/contentid/policy:1.2972813:1596326438/Daiane-dos-Santos.jpg?f=default&$p$f=54d080c" alt="">
		<img id="img1" src="https://p2.trrsf.com/image/fget/cf/940/0/images.terra.com/2022/04/14/daiane008-uvenp5vi21ww.112803" alt="">
		<img id="img1" src="https://www.onumulheres.org.br/wp-content/uploads/2019/08/28DAIAN4.jpg" alt="">
		<img id="img1" src="https://arte.estadao.com.br/capitu/dist/images/daiane-dos-santos-1110x596.jpg" alt="">
		<img id="img1" src="https://www.onumulheres.org.br/wp-content/uploads/2019/08/24GYNAR2.jpg" alt="">
		<img id="img1" src="https://atribunaregional.com.br/wp-content/uploads/2022/04/saiane-dos-santos.webp" alt="">
		<img id="img1" src="https://www.cob.org.br/pt/img/galeria_foto_imagem/imagem/7391/grande/" alt="">

		<img id="img1" src="https://mpcrio.com/wp-content/uploads/2021/12/Daiane-dos-Santos-01.jpg" alt="">
		<img id="img1" src="https://www.onumulheres.org.br/wp-content/uploads/2019/08/27DAIANE.jpg" alt="">
		<img id="img1" src="https://palestrasdesucesso.com.br/?attachment_id=21340" alt="">

	</section>


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