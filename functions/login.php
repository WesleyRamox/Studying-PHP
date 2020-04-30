<?php
session_start();
include('../config/conexao.php');
 
if(empty($_POST['usuario']) && empty($_POST['senha'])) {
	header('Location: ../index.php');
	$_SESSION['msg_error'] = "Error: Enter a username and password";
	exit();
} elseif(empty($_POST['usuario'])) {
	header('Location: ../index.php');
	$_SESSION['msg_error'] = "Error: Enter a username";
	exit();
} elseif(empty($_POST['senha'])) {
	header('Location: ../index.php');
	$_SESSION['msg_error'] = "Error: Enter a password";
	exit();
}

 
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
 
$query = "select * from usuarios where usuario = '{$usuario}' and senha = md5('{$senha}')";
 
$result = mysqli_query($conexao, $query);
 
$row = mysqli_num_rows($result);
 
if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: ../panel/painel.php');
	$_SESSION['msg_login'] = "Success: Successfully logged in";
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: ../index.php');
	$_SESSION['msg_error'] = "Error: User does not exist";

	exit();
}