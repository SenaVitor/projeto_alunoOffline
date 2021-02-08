<?php
	session_start();
 ?>

 <?php 
 	if(isset($_SESSION['alunoLogado'])):
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Aluno</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript"></script>
	<style type="text/css">
		.h1a {
			color: black;
			text-decoration: none;
			transition: all 0.5s ease;
			font-family: century gothic;
		}

		.h1a:hover {
			text-decoration: none;
			transition: all 0.5s ease;
			color: lightyellow;
		}
	</style>
</head>
<body style="background-color: lightblue">

	<nav class="navbar navbar-dark bg-primary">
		<a href="home.php" class="h1a"><h1>AlunoOffline.com</h1></a>
		<ul class="nav justify-content-end">
			<li class="nav-item">
				<a class="btn btn-danger" href="sairAluno.php">Sair</a>
			</li>
		</ul>
	</nav>

	<?php
		

		$n1Mat = 10;
		$n2Mat = 7;
		$n3Mat = 9;
		$mMat = ($n1Mat+$n2Mat+$n3Mat)/3;
		$mMat = number_format($mMat, 2, '.', '');

		$n1F = 9;
		$n2F = 5;
		$n3F = 6;
		$mF = ($n1F+$n2F+$n3F)/3;
		$mF = number_format($mF, 2, '.', '');

		$n1POO = 10;
		$n2POO = 10;
		$n3POO = 10;
		$mPOO = ($n1POO+$n2POO+$n3POO)/3;
		$mPOO = number_format($mPOO, 2, '.', '');

	?>	

	<table class="form-group lead" style="width: 50%; text-align: center; margin-left: 33%; margin-top: 9%;">
			<th class="lead" style=""><h3>Aluno:</h3></th>
			<th class="lead" style="text-align: center;"><h3><?php echo $_SESSION['loginAluno'] ?></h3></th>
	</table>

	<table class="form-group" style="width: 50%; text-align: center; margin-left: 25%;">	

		<tr class="">		
			<th class="table-dark lead"><center>Matéria</center></th>
			<th class="table-dark lead"><center>Nota 1</center></th>
			<th class="table-dark lead"><center>Nota 2</center></th>		
			<th class="table-dark lead"><center>Nota 3</center></th>
			<th class="table-dark lead"><center>Média</center></th>
		</tr>
		
		<tr class="">	
			<td class=""><center>Matemática</center></td>
			<td class=""><center><?php echo "$n1Mat"?></center></td>
			<td class=""><center><?php echo "$n2Mat"?></center></td>
			<td class=""><center><?php echo "$n3Mat"?></center></td>
			<td class=""><center><?php echo "$mMat"?></center></td>
		</tr>

		<tr>	
			<td class=""><center>Física</center></td>
			<td class=""><center><?php echo "$n1F"?></center></td>
			<td class=""><center><?php echo "$n2F"?></center></td>
			<td class=""><center><?php echo "$n3F"?></center></td>
			<td class=""><center><?php echo "$mF"?></center></td>
		</tr>

		<tr>	
			<td class=""><center>Programação Orientada a Objetos</center></td>
			<td class=""><center><?php echo "$n1POO"?></center></td>
			<td class=""><center><?php echo "$n2POO"?></center></td>
			<td class=""><center><?php echo "$n3POO"?></center></td>
			<td class=""><center><?php echo "$mPOO"?></center></td>
		</tr>		

	</table>

	<hr style="border-width: 2px; background-color: black; margin-top: 4%;">

	<?php include 'includes/footer.php' ?>
</body>
</html>

<?php

	else:

?>

	<h1>Página restrita ao aluno!</h1>

<?php 

	endif;

 ?>