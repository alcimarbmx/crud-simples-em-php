<?php 
	session_start();
	if(isset($_SESSION['user'])):
		//session_destroy();
		unset($_SESSION['user']);
		unset($_SESSION['mat']);

		header("Location: ../inicio.php");
	endif;
?>