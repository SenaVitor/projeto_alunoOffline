<?php 
	session_start();
	unset($_SESSION['professorLogado']);
	header("Location: home.php");
 ?>