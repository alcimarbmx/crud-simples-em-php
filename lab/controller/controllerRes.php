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
		$hr = $hr."$value";
} 

	$turno = $_REQUEST['turno'];
}
	$btn = $_REQUEST['btn'];

	$query = "";
	$pag = "";
	/*
	INSERT INTO `agendados` (`id`, `data`, `horarios`, `turno`, `fk_user`, `fk_lab`) VALUES ('12', '12/12/2018', '1', 'noite', '2016', '24');
	*/

	/*
		SELECT data, turno, horario FROM reserva WHERE data='2018-06-16' AND turno='Manhã' AND horario='12';		
	*/




	switch ($btn) {
		case "inserir":
			$res =  mysqli_query($conn, "SELECT * FROM reserva WHERE fk_codigo='$codLab' AND data='$data' AND turno='$turno' AND horario='$hr'");
			if(! mysqli_num_rows($res)):
				$query = "INSERT INTO reserva(fk_matricula, fk_codigo, data, horario, turno, reservado_em) VALUES ('$codUser', '$codLab', '$data', '$hr', '$turno', NOW())";
				$pag = "listarRes";

			else:
				//$query = "";
				$pag = "reservarLab";
				
			endif;
			break;
		case "deletar":
		$id = $_REQUEST['id'];
			$query = "DELETE FROM reserva WHERE id=$id";
			$pag = "listarRes";
			break;
		/*
		case "atualizar":
			$query = "UPDATE  agendados SET nome = '$nomeUser', funcao = '$funUser' WHERE matricula = '$codUser'";
			$pag = "listarUser";
			break;
		*/
		case "cancelar":
			$pag = "listarRes";
			header("refresh: 0; url=../view/$pag.php");
			break;
	}
	//if(!empty($query)){
	$operacao = mysqli_query($conn, $query);

	if($operacao):?>
		<script>alert("Operação bem sucedida!")</script>
	<?php 
		header("refresh: 0; url=../view/$pag.php");
	else:
		header("refresh: 0; url=../view/$pag.php");
	endif;
//}
	
	
	?>
	