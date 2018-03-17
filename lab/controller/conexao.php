<?php

class conecta{	
	private $host;
	private $user;
    private $pass;
    private $bd;
	private $conn;
        //Metodos
        function __construct(){
            $this->host = "localhost";
            $this->user = "root";
            $this->pass = "";
            $this->bd = "laboratorio";

            $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->bd); 
		}
		
	function consult($query){	
		return mysqli_query($this->conn, $query);
	}
}
		
		
		//$conn = @mysqli_connect("localhost", "root", "", "laboratorio") or die("Erro: ".mysqli_connect_error());	
			
		
	//$conn = @mysqli_connect("localhost", "root", "", "laboratorio") or die("Erro: ".mysqli_connect_error());

	//$conn = mysqli_connect("localhost", "root", "", "laboratorio");

	?>
	