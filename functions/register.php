<?php
session_start();
include('../config/conexao.php');
 
if(empty($_POST['username']) || empty($_POST['password'])) {
	header('Location: ../signup');
	$_SESSION['msg_error'] = "Error: Enter a username and password";
    exit();
}

// ESCAPANDO SQL INJECTION NOS INPUTS
$username = mysqli_real_escape_string($conexao, trim($_POST['username']));
$password = mysqli_real_escape_string($conexao, trim($_POST['username']));

// 
$sql = "select count(*) as total from usuarios where usuario = '$username'";

$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
    $_SESSION['msg_error'] = "Error: User already exists";
    header('Location: ../signup');
    exit;
}

$sql = "INSERT INTO usuarios (usuario, senha) VALUES ('{$username}', MD5('{$password}'))";

if($conexao->query($sql) === TRUE) {
    $_SESSION['msg_register'] = "Success: User Created";
    header('Location: ../signup');

    exit();
}

// if(mysqli_affected_rows($conexao) > 0) {
//     $_SESSION['msg_register'] = "Success: User Created";
// 	header('Location: ../signup');
// 	exit();
// } else {
// 	header('Location: ../signup');
// 	$_SESSION['msg_error'] = "Error: Error creating user";
// 	exit();
// }