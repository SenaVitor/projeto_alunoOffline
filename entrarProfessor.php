<?php 

	session_start();

	$loginProfessor = isset($_POST['loginProfessor']) ? $_POST['loginProfessor']: "";
	$senhaProfessor = isset($_POST['senhaProfessor']) ? $_POST['senhaProfessor']: "";

	if($loginProfessor != "" || $loginProfessor != null and $senhaProfessor != "" || $senhaProfessor != null) {
		$_SESSION['professorLogado'] = true;
		header("Location: pagdoProfessor.php");
	}else {
		header("Location: professorEntra.php");
	}


 ?>