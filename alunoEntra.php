<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login Aluno</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background-color: lightblue">
	
	<?php include 'includes/menu.php' ?>

	<div class="form-group" style="width: 30%; text-align: center; margin-left: 35%;">
		<img src="nhaa.png" class="rounded mx-auto d-block" alt="..." width="150px" height="150px" style="margin-bottom: 3%;">
		<form action="entrarAluno.php" method="POST" class="">
			<div class="form-group">
				<label for="login">Usuário:</label>
				<input type="text" name="matricula" class="form-control">	
			</div>

			<div class="form-group">
				<label for="senha">Senha:</label>
				<input type="password" name="senhaAluno" class="form-control">
			</div>

			<div class="form-grou">
				<input type="submit" name="entrarAluno.php" value="Entrar" class="btn btn-danger btn-block btn-lg">	
			</div>
		</form>	
	</div>
	

	<?php include 'includes/footer.php' ?>
</body>
</html>