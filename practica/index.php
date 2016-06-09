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
											include('../principal.php');
									break;
									case "administrador":
											include "registrado_admin.php";
									break;
									case "profesional":
											include "registrado_sin_admin.php";
									break;
									case "monitor":
											include "infomonitor_decsai.html";
									break;
									case "registro":
											include "registro_de_usuarios.php";
									break;
									case "crear_recurso":
											include "crear_recurso.php";
									break;
									case "finalizar_recurso":
											include "borrar_recurso.php";
									break;
									case "registrar":
											include "./vista/registrar.php";
									break;
									case "comprobarHabitacion":
											include "./controlador/comprobar.php";
											break;
									case "presupuesto":
											include "./controlador/controladorPresupuesto.php";
											break;
									case "carro":
											include "./controlador/controladorVistaCarro.php";
											break;
									default:
											include "./vista/presentacion.php";
									break;
							}
					?>

				</div>
		</div>
    </body></html>
