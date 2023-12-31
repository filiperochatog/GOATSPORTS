<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}

		body{
			font-family: Arial, Helvetica, sans-serif, Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
			background: linear-gradient(65deg, rgb(0, 0, 0) 40%, rgb(214, 175, 0) 60%);		
		}

		form{
			width: 350px;
			margin: 60px auto 10px auto;
			background: white;
			padding: 25px;
			box-shadow: 1px 1px 10px rgba(0,0,0,.3);
			display: table;
		}

		input{
			display: block;
			width: 95%;
			height: 30px;
			font-size: 11pt;
			color: rgba(0,0,0,.3);
			padding: 5px;
			margin-bottom: 15px;
			outline: none;
		}

		h1{
			font-size: 11pt;
			padding: 10px;
			font-weight: normal;
			text-align: center;
			margin-bottom: 30px;
			background-color: lightblue;
		}

		input[type="submit"] {
			width: 100px;
			height: 40px;
			cursor: pointer;
			background: lightblue;
			color: #fff;
			border: none;
			float: right;
			box-shadow: 1px 1px 4px rgba(0,0,0,.4);
		}

		label{
			display: block;
		}

		.mensagem{
			text-align: center;
			background: white;
			border: 1px solid rgba(0,0,0,.3);
			padding: 15px;
			
		}

		.container {
			height: 150px;
			width: 150px;
  			margin-left: 90px;}


	</style>
<form method="POST">
		<img class="container" src="img/gt12.png" alt="">
		<h1>Cadastre-se</h1>
		<label for="nome">Nome:</label>
		<input type="text" name="nome" id="nome">
		<label for="email">Email:</label>
		<input type="email" name="email" autocomplete="off" id="email">
		<label for="senha">Senha:</label>
		<input type="password" name="senha" id="senha">
		<label for="confsenha">Confimar sua senha:</label>
		<input type="password" name="confsenha" id="confsenha">


		<input type="submit" name="btn-entrar" value="Cadastrar">
	</form>


</head>
<body>



<?php

if(isset($_POST['senha'])){

	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);
	$confSenha = addslashes($_POST['confsenha']);

	if(!empty($nome) and !empty($email) and !empty($senha) and !empty($confSenha)){

		if ($senha == $confSenha) {
			require_once 'classes/usuarios.php';
			$us = new Usuario("projeto_comentarios", "localhost", "root", "");
			if($us->Cadastrar($nome,$email,$senha)){ ?>
             <br><br>
			 
				<p class="mensagem">Cadastro feito com sucesso! <a href="entrar.php">Acesse já!</a></p>
				
				
				
				
				

			<?php
			}else{ ?>

				<p class="mensagem">Email já cadastrado!</p>

			<?php
			}
		}else{ ?>

			<p class="mensagem">Senha não confere!</p>
			
		<?php
		}
			
	}else{ ?>

		<p class="mensagem">Preenchar todos os os Campos!</p>

	 <?php
	}

}

?>