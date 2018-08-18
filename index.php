<?php session_start();

if (isset($_SESSION['usuario'])) {
	header('location: contenido.php');
}

require('config.php');

$errores = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$usuario = $_POST['usuario'];
	$pass = $_POST['pass'];
	$pass = md5($pass);

	if(empty($usuario) OR empty($pass)){
		$errores .= 'No has ingresado todos los datos';
	} else {
		if($usuario != $user['usuario'] OR $pass != $user['pass']){
			$errores .= 'Datos incorrectos';
		}
	}

	if(!$errores){
		$_SESSION['usuario'] = $usuario;
		header('location: contenido.php');
	}

}

require('views/index.view.php');

?>