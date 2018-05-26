<?php
/*
$conectando = new conecta();
$query = "";

$conectando->consulta($query);
*/

$host = "localhost";
$user = "root";
$pass = "";
$bd = "laboratorio3";

    $conn = @mysqli_connect($host, $user, $pass, $bd) or die("Erro de conexão: ".mysqli_connect_error());

    mysqli_set_charset($conn, "utf8");




/*
	$host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "laboratorio3";
    

    $conn =  mysqli_connect($host, $user, $pass, $bd);


if($conn){}
	else{
	echo "Error: ".mysqli_connect_errno($conn);
	}
		
	function consulta($query){	

		return mysqli_query($conn, $query);

	}

*/
?>
	