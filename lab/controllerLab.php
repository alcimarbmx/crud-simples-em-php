<?php
	include('conexao.php');
	
	$nomeLab = $_REQUEST['nome'];
	$codLab = $_REQUEST['codigo'];
	
	$btn = $_REQUEST['btn'];

	$query = "";

	switch ($btn) {
		case "inserir":
			$query = "INSERT INTO lab (codigo, nome) VALUES ('$codLab', '$nomeLab')";
			break;
		case "deletar":
			$query = "DELETE FROM lab WHERE codigo='$codLab'";
			break;
		case "atualizar":
			$query = "UPDATE lab SET nome='$nomeLab' WHERE codigo ='$codLab'";
			break;
		case "cancelar":
			header("refresh: 0; url=listarLab.php");
			break;
			}
if(!empty($query)){
	$operacao = mysqli_query($conn, $query);
	if($operacao){ 
		?>
		<script>alert("Operação bem sucedida!")</script>
		<?php 
header("refresh: 0; url=inicio.php");
	}else{ ?>
		<script>alert("Operação mal sucedida! Tente novamente.")</script>
	<?php }
}
	mysqli_close($conn);
	//header("refresh: 0; url=inicio.php");
	?>