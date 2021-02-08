<?php 
	session_start();
	unset($_SESSION['alunoLogado']);
	header("Location: home.php");
 ?>