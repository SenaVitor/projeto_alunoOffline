<?php
	session_start();
 ?>

<?php 
 	if(isset($_SESSION['professorLogado'])):
 ?>

<!DOCTYPE html>
<html>
<head lang="pt-br">
	<title>Tabela de Notas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
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
<body  style="background-color: lightblue">
	
	<nav class="navbar navbar-dark bg-primary">
		<a href="home.php" class="h1a"><h1>AlunoOffline.com</h1></a>
		<ul class="nav justify-content-end">
			<li class="nav-item">
				<a class="btn btn-danger" href="sairProfessor.php">Sair</a>
			</li>
		</ul>
	</nav>

	<?php
			
		$nomeAluno = isset($_POST['nomeAluno']) ? $_POST['nomeAluno']: "";

		$n1Mat = isset($_POST['mat1']) ? $_POST['mat1']: "";
		$n2Mat = isset($_POST['mat2']) ? $_POST['mat2']: "";
		$n3Mat = isset($_POST['mat3']) ? $_POST['mat3']: "";
		$mMat = ($n1Mat+$n2Mat+$n3Mat)/3;
		$mMat = number_format($mMat, 2, '.', '');

		$n1F = isset($_POST['fisi1']) ? $_POST['fisi1']: "";
		$n2F = isset($_POST['fisi2']) ? $_POST['fisi2']: "";
		$n3F = isset($_POST['fisi3']) ? $_POST['fisi3']: "";
		$mF = ($n1F+$n2F+$n3F)/3;
		$mF = number_format($mF, 2, '.', '');

		$n1POO = isset($_POST['POO1']) ? $_POST['POO1']: "";
		$n2POO = isset($_POST['POO2']) ? $_POST['POO2']: "";
		$n3POO = isset($_POST['POO3']) ? $_POST['POO3']: "";
		$mPOO = ($n1POO+$n2POO+$n3POO)/3;
		$mPOO = number_format($mPOO, 2, '.', '');

		if (
			$n1Mat != "" || $n1Mat != null and $n2Mat != "" || $n2Mat != null and $n3Mat != "" || $n3Mat != null and
			$n1F != "" || $n1F != null and $n2F != "" || $n2F != null and $n3F != "" || $n3F != null and
			$n1POO != "" || $n1POO != null and $n2POO != "" || $n2POO != null and $n3POO != "" || $n3POO != null and
			$nomeAluno != "" || $nomeAluno != null
		) :

	?>
		
	<table class="form-group lead" style="width: 50%; text-align: center; margin-left: 33%;">	
		<img src="professor.png" class="rounded mx-auto d-block" alt="..." width="150px" height="150px" style="margin-bottom: 3%; margin-top: 1%;">
		<th class="lead" style=""><h3>Aluno:</h3></th>
		<th class="lead" style="text-align: center;"><h3><?php echo "$nomeAluno"; ?></h3></th>
	</table>
	

	<table class="form-group" style="width: 50%; text-align: center; margin-left: 25%;">	

		<tr class="">		
			<th class="table-dark lead" >Matéria</th>
			<th class="table-dark lead">Nota 1</th>
			<th class="table-dark lead">Nota 2</th>		
			<th class="table-dark lead">Nota 3</th>
			<th class="table-dark lead">Média</th>
		</tr>

		<tr class="">	
			<td class="">Matemática</td>
			<td class=""><?php echo "$n1Mat"?></td>
			<td class=""><?php echo "$n2Mat"?></td>
			<td class=""><?php echo "$n3Mat"?></td>
			<td class=""><?php echo "$mMat"?></td>
		</tr>

		<tr>	
			<td class="">Física</td>
			<td class=""><?php echo "$n1F"?></td>
			<td class=""><?php echo "$n2F"?></td>
			<td class=""><?php echo "$n3F"?></td>
			<td class=""><?php echo "$mF"?></td>
		</tr>

		<tr>	
			<td class="">Programação Orientada a Objetos</td>
			<td class=""><?php echo "$n1POO"?></td>
			<td class=""><?php echo "$n2POO"?></td>
			<td class=""><?php echo "$n3POO"?></td>
			<td class=""><?php echo "$mPOO"?></td>
		</tr>	
			
	</table>

	<hr style="border-width: 2px; background-color: black; margin-top: 4%;">

	<?php include 'includes/footer.php' ?>

<?php

	else:

?>

	<div class="form-group" style="width: 30%; text-align: center; margin-left: 35%;">
		<img src="nhaa.png" class="rounded mx-auto d-block" alt="..." width="150px" height="150px" style="margin-bottom: 3%;">
		<form action="pagdoProfessor.php" method="POST">
				
			<div class="form-group">
				<label for="nome">Nome do Aluno:</label>
				<input class="form-control" type="text" name="nomeAluno" placeholder="Nome do Aluno">
			</div>

			<div class="form-group">
				<label for="notas">Notas de Matemática:</label>
				<input class="form-control" type="text" name="mat1" placeholder="Nota 1">
				<input class="form-control" type="text" name="mat2" placeholder="Nota 2">
				<input class="form-control" type="text" name="mat3" placeholder="Nota 3">
			</div>
			
			<div class="form-group">
				<label for="notas">Notas de Física:</label>
				<input class="form-control" type="text" name="fisi1" placeholder="Nota 1">
				<input class="form-control" type="text" name="fisi2" placeholder="Nota 2">
				<input class="form-control" type="text" name="fisi3" placeholder="Nota 3">
			</div>
				
			<div class="form-group">
				<label for="notas">Notas de Programação Orientada a Objetos:</label>
				<input class="form-control" type="text" name="POO1" placeholder="Nota 1">
				<input class="form-control" type="text" name="POO2" placeholder="Nota 2">
				<input class="form-control" type="text" name="POO3" placeholder="Nota 3">
			</div>

			<div class="form-group">
				<input class="btn btn-danger btn-block btn-lg" type="submit" name="salvarNotas" value="Enviar Notas">
				<script type="text/javascript">
					alert("Preencha todos os campos corretamente!");
				</script>
			</div>
		</form>
	</div>

	<?php include 'includes/footer.php' ?>


<?php

	endif;
	
?>

	</body>
	</html>

<?php 
  	else:
 ?>

 	<h1>Página restrita ao professor!</h1>

<?php 
	endif;
 ?>