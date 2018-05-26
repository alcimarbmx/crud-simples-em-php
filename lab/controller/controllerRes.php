<?php
//include 'conect.php';
	//recebe valores do usuario
include_once 'conexao.php';
if(!empty($_REQUEST['matricula'])){
	//$nomeUser = $_REQUEST['nomeUser'];
	$codUser = $_REQUEST['matricula'];
	//$nomeLab = $_REQUEST['nomeLab'];
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
	/*
	INSERT INTO `agendados` (`id`, `data`, `horarios`, `turno`, `fk_user`, `fk_lab`) VALUES ('12', '12/12/2018', '1', 'noite', '2016', '24');
	*/
	switch ($btn) {
		case "inserir":
			$query = "INSERT INTO reserva(fk_matricula, fk_codigo, data, horario, turno, reservado_em) VALUES ('$codUser', '$codLab', '$data', '$hr', '$turno', NOW())";
			$pag = "reservarLab";
			break;
		case "deletar":
		$id = $_REQUEST['id'];
			$query = "DELETE FROM reserva WHERE id=$id";
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
	
	
	?>
	