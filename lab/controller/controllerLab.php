<?php
	//include 'conect.php';
	include_once 'conexao.php';
	session_start();
	$nomeLab = mysqli_escape_string($conn, $_REQUEST['nome']);
	$codLab = mysqli_escape_string($conn, $_REQUEST['codigo']);
	
	$btn = mysqli_escape_string($conn, $_REQUEST['btn']);

	$query = "";
	$pag = "";
	switch ($btn) {
		case "inserir":
			$query = "INSERT INTO laboratorio (codigo, nome) VALUES ('$codLab', '$nomeLab')";
			$pag = "inserirLab";
			break;
		case "deletar":
			$query = "DELETE FROM laboratorio WHERE codigo='$codLab'";
			$pag = "listarLab";
			break;
		case "atualizar":
			$query = "UPDATE laboratorio SET nome='$nomeLab' WHERE codigo ='$codLab'";
			$pag = "listarLab";
			break;
		case "cancelar":
			header("refresh: 0; url=../view/listarLab.php");
			break;
			}
			if(isset($_SESSION['user']) && isset($_SESSION['mat'])):
				if(!empty($query)):
					$operacao = mysqli_query($conn, $query);
				endif;

				if($operacao): 
					?>
					<script>alert("Operação bem sucedida!")</script>
					<?php 
					header("refresh: 0; url=../view/$pag.php");
					else: ?>
					<script>alert("Operação mal sucedida! Tente novamente.")</script>
				<?php 
					header("refresh: 0; url=../view/$pag.php");
					endif;
				
			else:
				?>
					<script>alert("Você não tem autorização! Faça seu login.")</script>
			<?php
				header('location: ../view/login.php');
			endif;
	//mysqli_close($conn);
	//header("refresh: 0; url=inicio.php");
	?>