<?php 

	session_start();

	$_SESSION['loginAluno'] = $loginAluno = isset($_POST['matricula']) ? $_POST['matricula']: "";
	$_SESSION['senhaAluno'] = $senhaAluno = isset($_POST['senhaAluno']) ? $_POST['senhaAluno']: "";

	if($loginAluno != "" || $loginAluno != null and $senhaAluno != "" || $senhaAluno != null) {
		$_SESSION['alunoLogado'] = true;
		header("Location: pagdoAluno.php");
	}else {
		header("Location: alunoEntra.php");
	}

 ?>