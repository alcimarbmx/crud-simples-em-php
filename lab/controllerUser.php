<?php
include ('conexao.php');
	//$conn = mysqli_connect("localhost", "root", "", "laboratorio") or die("Erro: ".mysqli_connect_error());
	
	//recebe valores do usuario
	$nomeUser = $_REQUEST['nome'];
	$codUser = $_REQUEST['matricula'];
	$funUser = $_REQUEST['funcao'];

	//recebe valores do laboratorio
	/*
	$nomeLab = $_POST['nome'];
	$codLab = $_POST['codigo'];
	*/
	$btn = $_REQUEST['btn'];

	$query = "";
	$pag = "";
	switch ($btn) {
		case "inserir":
			$query = "INSERT INTO usuario (nome, matricula, funcao) VALUES ('$nomeUser', '$codUser', '$funUser')";
			$pag = "inserirUser";
			break;
		case "deletar":
			$query = "DELETE FROM usuario WHERE matricula='$codUser'";
			$pag = "listarUser";
			break;
		case "atualizar":
			$query = "UPDATE  usuario SET nome = '$nomeUser', funcao = '$funUser' WHERE matricula = '$codUser'";
			$pag = "listarUser";
			break;
		case "cancelar":
			$pag = "listarUser";
			header("refresh: 0; url=$pag.php");
			break;
	}
	if(!empty($query)){
	$operacao = mysqli_query($conn, $query);

	if($operacao){ 
		?>
		<script>alert("Operação bem sucedida!")</script>
		<?php 
		header("refresh: 0; url=$pag.php");
	}else{ ?>
		<script>alert("Operação mal sucedida! Tente novamente.")</script>
	<?php 
		header("refresh: 0; url=$pag.php");
	}
}
	mysqli_close($conn);
	
	?>
	