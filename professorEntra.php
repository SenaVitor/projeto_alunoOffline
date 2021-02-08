<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login Professor</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body style="background-color: lightblue">
	
	<?php include 'includes/menu.php' ?>

	<div class="form-group" style="width: 30%; text-align: center; margin-left: 35%; margin-top: 1%;">
		<img src="professor.png" class="rounded mx-auto d-block" alt="..." width="140px" height="140px" style="margin-bottom: 3%;">
		<form action="entrarProfessor.php" method="POST">
			<div class="form-group">
				<label for="login">Usuário:</label>
				<input type="text" name="loginProfessor" class="form-control">
			</div>

			<div class="form-group">
				<label for="senha">Senha:</label>
				<input type="password" name="senhaProfessor" class="form-control">
			</div>

			<div class="form-group">
				<input type="submit" name="entrarProfessor.php" value="Entrar" class="btn btn-danger btn-block btn-lg">	
			</div>
		</form>	
	</div>

	<?php include 'includes/footer.php' ?>

</body>
</html>