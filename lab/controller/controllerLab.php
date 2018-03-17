<?php
	include('conexao.php');
	$lab = new conecta();
	$nomeLab = $_REQUEST['nome'];
	$codLab = $_REQUEST['codigo'];
	
	$btn = $_REQUEST['btn'];

	$query = "";
	$pag = "";
	switch ($btn) {
		case "inserir":
			$query = "INSERT INTO lab (codigo, nome) VALUES ('$codLab', '$nomeLab')";
			$pag = "inserirLab";
			break;
		case "deletar":
			$query = "DELETE FROM lab WHERE codigo='$codLab'";
			$pag = "listarLab";
			break;
		case "atualizar":
			$query = "UPDATE lab SET nome='$nomeLab' WHERE codigo ='$codLab'";
			$pag = "listarLab";
			break;
		case "cancelar":
			header("refresh: 0; url=../view/listarLab.php");
			break;
			}
if(!empty($query)){
	$operacao = $lab->consult($query);
	if($operacao){ 
		?>
		<script>alert("Operação bem sucedida!")</script>
		<?php 
		header("refresh: 0; url=../view/$pag.php");
	}else{ ?>
		<script>alert("Operação mal sucedida! Tente novamente.")</script>
	<?php 
		header("refresh: 0; url=../view/$pag.php");
	}
}
	//mysqli_close($conn);
	//header("refresh: 0; url=inicio.php");
	?>