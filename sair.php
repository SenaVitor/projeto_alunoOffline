<?php 
	session_start();
	unset($_SESSION['logado']);
	header("Location: home.php");
 ?>