<?php
	$title = "Entrar";

	require_once 'includes/header.php';
	require_once '../controller/conexao.php';


	if(!empty($_SESSION)):
		header("location: inicio.php");
	else:
		if(isset($_POST['btn_login'])):

			$email = mysqli_escape_string($conn, $_POST['email']);
			$matricula = mysqli_escape_string($conn, $_POST['matricula']);

			$sql = "SELECT nome, matricula FROM usuario WHERE email='$email' AND matricula='$matricula'";
			$res = mysqli_query($conn, $sql);
			if(mysqli_num_rows($res) > 0):
				$linha = mysqli_fetch_array($res);
				$_SESSION['user'] = $linha['nome'];
				$_SESSION['mat'] = $linha['matricula'];
				header("location: inicio.php");
		endif;
	endif;
endif;
?>
<link rel="stylesheet" type="text/css" href="../css/signin.css">

<div class="text-center">
<form class="form-group" action="" method="post">

	<div class="form-inline">
		<input class="form-control" type="email" name="email" id="email" placeholder="Entre com seu e-mail">
	</div><br>

	<div class="form-inline">
		<input class="form-control" type="password" name="matricula" id="matricula" placeholder="Matrícula">
	</div><br>

	<div class="btn btn-large">
		<button class="btn btn-primary" type="submit" name="btn_login" id="btn_login">Entrar</button>
	</div>

</form>
</div>

<?php
	require_once 'includes/footer.php';
?>
