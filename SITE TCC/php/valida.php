<?php
session_start();
include_once("conexao.php");
$acessar = filter_input(INPUT_POST, 'acessar', FILTER_SANITIZE_STRING);
if($acessar){
	$usu_email = filter_input(INPUT_POST, 'usu_email', FILTER_SANITIZE_STRING);
	$usu_senha = filter_input(INPUT_POST, 'usu_senha', FILTER_SANITIZE_STRING);
	echo "$usu_email - $usu_senha";
	if((!empty($usu_email)) AND (!empty($usu_senha))){
		$result_usuario = "SELECT usu_nome, usu_email, usu_senha FROM usuario WHERE usu_email='$usu_email' LIMIT 1";
		$resultado_usuario = mysqli_query($sql, $result_usuario);
		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			if(password_verify($usu_senha, $row_usuario['usu_senha'])){
				$_SESSION['id'] = $row_usuario['usu_id'];
				$_SESSION['nome'] = $row_usuario['usu_nome'];
				$_SESSION['email'] = $row_usuario['usu_email'];
				header("Location: login.php");
			}else{
				$_SESSION['msg'] = "<texto>Senha incorreta!</texto>";
				header("Location: login.php");
			}
		}
	}else{
		$_SESSION['msg'] = "<texto>Usuario incorreto!</texto>";
		header("Location: login.php");
	}
}else{
	$_SESSION['msg'] = "<texto>Página não encontrada</texto>";
	header("Location: login.php");
}