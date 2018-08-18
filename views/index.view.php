<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login en PHP</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Raleway:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	

	<div class="container">
		
		<div class="form-login">
			<h2 class="titulo">Iniciar sesión</h2>
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<input type="text" name="usuario" placeholder="Usuario">
				<input type="password" name="pass" placeholder="Contraseña">
				<?php if (!empty($errores)): ?>
					<div class="alert-danger"><li><?php echo $errores; ?></li></div>
				<?php endif ?>
				<button type="submit">Ingresar</button>
			</form>

		</div>

	</div>

</body>
</html>