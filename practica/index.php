<!DOCTYPE html>
<html lang="es" >
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="shortcut icon" href="http://decsai.ugr.es/decsai.ico" type="image/vnd.microsoft.icon">
		<link rel="icon" href="http://decsai.ugr.es/decsai.ico" type="image/vnd.microsoft.icon">
		<link rel="stylesheet" id="css-style" type="text/css" href="decsai/style-ugr.css" media="all">

		<script type="text/javascript" src="../validar_datos.js"></script>
		<style>
			.error {color: #FF0000;}
	</style>
</head>
	<body>
	<div id="contenedor_margenes" class="">
		<?php
/*<<<<<<< HEAD

=======
					include 'tiempo.php';
>>>>>>> origin/master*/
					error_reporting( error_reporting() & ~E_NOTICE );

					session_start();

					if(isset($_GET['secc']))
							$selecc = $_GET['secc'];
					else
							$selecc = 'index';

					if($selecc!= "monitor")
						include '../cabecera.php';

			?>

<div id="general">
			<?php
							switch ($selecc){
									case "index":
											include('principal.php');
									break;
									case "usuario":
											include "con_y_sin_privilegios/registrado.php";
									break;

									case "monitor":
											include "con_y_sin_privilegios/infomonitor_decsai.html";
									break;
									case "registro":
											include "administrador/registro_de_usuarios.php";
									break;
									case "usuarios":
											include "administrador/lista_usuarios.php";
									break;
									case "crear_recurso":
											include "con_y_sin_privilegios/crear_recurso.php";
									break;
									case "finalizar_recurso":
											include "con_y_sin_privilegios/borrar_recurso.php";
									break;
									case "modificarDatos":
											include "con_y_sin_privilegios/formulario_modificacion_datos.php";
									break;
									case "eliminarUsuario":
											include "con_y_sin_privilegios/eliminar_usuario.php";
									break;
									case "gestion_recursos":
											include "con_y_sin_privilegios/manejo_colas.php";
									break;
									case "cerrar_sesion":
											// remove all session variables

											session_unset();

											// destroy the session
											session_destroy();
											include "principal.php";
									break;

								}
					?>

				</div>

				<?php
				if($selecc!= "monitor")
					include '../footer.php'; ?>

		</div>
    </body></html>
