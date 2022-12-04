<?php

	if(isset($_POST['acessar'])) {

		include_once('conexao.php');

		$name = $_POST['name'];
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];

		$name = filter_input(INPUT_POST, 'name',
		FILTER_SANITIZE_SPECIAL_CHARS);

		$usuario = filter_input(INPUT_POST, 'usuario',
		FILTER_SANITIZE_EMAIL);

		$result = mysqli_query($conexao, "INSERT INTO usuario(usu_codigo,usu_nome,usu_email,usu_senha) VALUES (NULL,'$name','$usuario',MD5 ('$senha'))");
	}
	
?>