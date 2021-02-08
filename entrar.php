<?php 

	session_start();

	$loginProfessor = isset($_POST['loginProfessor']) ? $_POST['loginProfessor']: "";
	$senhaProfessor = isset($_POST['senhaProfessor']) ? $_POST['senhaProfessor']: "";

	$loginAluno = isset($_POST['matricula']) ? $_POST['matricula']: "";
	$senhaAluno = isset($_POST['senhaAluno']) ? $_POST['senhaAluno']: "";

	if($loginAluno == "admin" and $senhaAluno == "123456") {
		$_SESSION['logado'] = true;
		header("Location: principal.php");
	}else {
		header("Location: alunoEntra");
	}

	if($loginProfessor == "admin" and $senhaProfessor == "5678") {
		$_SESSION['logado'] = true;
		header("Location: principal.php");
	}else {
		header("Location: professorEntra")
	}


 ?>