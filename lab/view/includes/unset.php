<?php
	session_start();
	if(isset($_SESSION['user'])):
		unset($_SESSION['user']);
		unset($_SESSION['mat']);
		session_destroy();

		header("Location: ../inicio.php");
	endif;
?>
