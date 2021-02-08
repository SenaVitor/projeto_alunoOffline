<?php
	session_start();
 ?>

<?php 
 	if(isset($_SESSION['logado'])):
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Contato</title>
	<meta charset="utf-8">
	<style type="text/css">

		body {
			background-color: rgba(0, 255, 0, 0.5);
		}

		.nav1 {
			background-color: rgba(0, 0, 255, 0.5);
			border-radius: 10px;
			padding: 5px;
			text-align: right;
		}
		.ul1 li {
			font-size: 22px;
			display: inline-block;
			margin-left: 2%;
		}

		#logar {
			margin-right: 50px;
		}

		.ul1 li a {
			text-decoration: none;
			color: white;
			font-family: century gothic;
			transition: all 0.5s ease;
		}

		.ul1 li a:hover {
			transition: all 0.5s ease;
			color: black;
		}

		#logo {
			cursor: default;
			font-size: 60px;
			margin-top: 15%;
			text-align: center;
			font-family: century gothic;
			color: black;
			font-weight: bolder;
			transition: all 0.5s ease;
		}

		#logo:hover {
			transition: all 0.5s ease;
			color: gray;
		}

		#footer {
			margin-top: 20%;
			position: relative;
			background-color: rgba(0, 0, 0, 0.8);
			text-align: center;
			border-radius: 5px;
			padding: 1px;
		}

		#footer p {
			font-family: century gothic;
			color: white;
		}
	</style>
</head>
<body>
	<nav class="nav1">
		<ul class="ul1">
			<li><a href="principal.php">Principal</a></li>
			<li><a href="ajuda.php">Ajuda</a></li>
			<li id="logar"><a href="sair.php">Sair</a></li>
		</ul>
	</nav>
	<h1>Arroz</h1>
</body>
</html>

<?php 
  	else:
 ?>

 <!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Contato</title>
	<meta charset="utf-8">
	<style type="text/css">

		body {
			background-color: rgba(0, 255, 0, 0.5);
		}

		.nav1 {
			background-color: rgba(0, 0, 255, 0.5);
			border-radius: 10px;
			padding: 5px;
			text-align: right;
		}
		.ul1 li {
			font-size: 22px;
			display: inline-block;
			margin-left: 2%;
		}

		#logar {
			margin-right: 50px;
		}

		.ul1 li a {
			text-decoration: none;
			color: white;
			font-family: century gothic;
			transition: all 0.5s ease;
		}

		.ul1 li a:hover {
			transition: all 0.5s ease;
			color: black;
		}

		#logo {
			cursor: default;
			font-size: 60px;
			margin-top: 15%;
			text-align: center;
			font-family: century gothic;
			color: black;
			font-weight: bolder;
			transition: all 0.5s ease;
		}

		#logo:hover {
			transition: all 0.5s ease;
			color: gray;
		}

		#footer {
			margin-top: 20%;
			position: relative;
			background-color: rgba(0, 0, 0, 0.8);
			text-align: center;
			border-radius: 5px;
			padding: 1px;
		}

		#footer p {
			font-family: century gothic;
			color: white;
		}
	</style>
</head>
<body>
	<nav class="nav1">
		<ul class="ul1">
			<li><a href="home.php">Início</a></li>
			<li><a href="ajuda.php">Ajuda</a></li>
			<li id="logar"><a href="login.php">Login</a></li>
		</ul>
	</nav>
	Pão
</body>
</html>

<?php 
	endif;
 ?>