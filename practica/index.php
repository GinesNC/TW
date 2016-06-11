<!DOCTYPE html>
<html lang="es" >
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="shortcut icon" href="http://decsai.ugr.es/decsai.ico" type="image/vnd.microsoft.icon">
		<link rel="icon" href="http://decsai.ugr.es/decsai.ico" type="image/vnd.microsoft.icon">
		<link rel="stylesheet" id="css-style" type="text/css" href="decsai/style-ugr.css" media="all">
</head>
	<body>
	<div id="contenedor_margenes" class="">
		<?php
					session_start();
					if(isset($_GET['secc']))
							$selecc = $_GET['secc'];
					else
							$selecc = 'index';
					include '../cabecera.php';

			?>

<div id="general">
			<?php
							switch ($selecc){
									case "index":
											include('principal.php');
									break;
									case "administrador":
											include "administrador/registrado_admin.php";
									break;
									case "profesional":
											include "sin_privilegios/registrado_sin_admin.php";
									break;
									case "monitor":
											include "con_y_sin_privilegios/infomonitor_decsai.html";
									break;
									case "registro":
											include "administrador/registro_de_usuarios.php";
									break;
									case "crear_recurso":
											include "con_y_sin_privilegios/crear_recurso.php";
									break;
									case "finalizar_recurso":
											include "con_y_sin_privilegios/borrar_recurso.php";
									break;
								}
					?>

				</div>

				<?php include '../footer.php'; ?>

		</div>
    </body></html>
