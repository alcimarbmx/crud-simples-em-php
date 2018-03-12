<?php
include 'conexao.php';

	//recebe valores do usuario

if(!empty($_REQUEST['nomeUser'])){
	$nomeUser = $_REQUEST['nomeUser'];
	$codUser = $_REQUEST['matricula'];
	$nomeLab = $_REQUEST['nomeLab'];
	$codLab = $_REQUEST['codigo'];
	$data = $_REQUEST['data'];
	$hr = "";
	foreach($_REQUEST['horario'] as $key => $value){
	//$horarios[$key] = $value;
	$hr = $hr."$value,";
} 

	$turno = $_REQUEST['turno'];
}
	$btn = $_REQUEST['btn'];

	$query = "";
	$pag = "";
	switch ($btn) {
		case "inserir":
			$query = "INSERT INTO agendados(nomeUser, codUser, nomeLab, codLab, data, horarios, turno) VALUES (
    '$nomeUser', '$codUser', '$nomeLab', '$codLab', '$data', '$hr', '$turno')";
			$pag = "reservarLab";
			break;
		case "deletar":
		$id = $_REQUEST['id'];
			$query = "DELETE FROM agendados WHERE id=$id";
			$pag = "listarRes";
			break;
		/*case "atualizar":
			$query = "UPDATE  agendados SET nome = '$nomeUser', funcao = '$funUser' WHERE matricula = '$codUser'";
			$pag = "listarUser";
			break;*/
		case "cancelar":
			$pag = "listarRes";
			header("refresh: 0; url=../view/$pag.php");
			break;
	}
	if(!empty($query)){
	$operacao = mysqli_query($conn, $query);

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
	mysqli_close($conn);
	
	?>
	