<!DOCTYPE html>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Gestor de citas Softville</title>
		<?php
			include_once '../Compartido/RevisarPermisos.php';
			session_start();
			manejarUsuarioNoLogeado();
			include_once '../Compartido/navbar.php';
			if (empty($_SESSION['anticsrf'])) {
				$_SESSION['anticsrf'] = bin2hex(random_bytes(32));
			}
			$anticsrf = $_SESSION['anticsrf'];
		?>
			<link rel="stylesheet" href="../Compartido/colores.css"/>
			<link rel="stylesheet" href="consultar-citas.css"/>
	</head>
	<body>
		<header>
    		<h1 id="titulo" style='margin-bottom:3.5%;'>Usted ha ingresado al sistema</h1>	
		</header>
		<script
			src="https://code.jquery.com/jquery-3.3.1.min.js"
			integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			crossorigin="anonymous">
		</script>
	</body>
</html>