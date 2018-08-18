<?php session_start();

if(!isset($_SESSION['usuario'])){
	header('Location: index.php');
}


echo "<h1>" . $_SESSION['usuario'] . "</h1>" . "<br>";
echo "<a href='salir.php'>Salir</a>";

?>