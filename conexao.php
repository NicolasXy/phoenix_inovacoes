<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "db_contact";
	$port = 3306;
	
	//Criar a conexão
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

	if(mysqli_connect_error()):
		echo "Erro na conexão: " . mysqli_connect_error();
	endif
?>