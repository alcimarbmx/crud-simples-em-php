create schema laboratorio;

	use laboratorio;

	create table usuario(
		matricula int primary key,
		nome varchar(100),
		funcao varchar(30)
		);
	
	create table lab(
		codigo int primary key,
		nome varchar(100)
		);