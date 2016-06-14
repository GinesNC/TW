<?php echo include('con_y_sin_privilegios/menu.php'); ?>
				<div id="pagina">
      <h1 id="titulo_pagina"><span class="texto_titulo">Eliminar Usuario:</span></h1>
      <div id="contenido" class="sec_interior">
	<div class="content_doku">

		<div class="listaRecursos">
		  <?php echo include('base_datos/usuarios.php'); ?>
		</div>

    <form action="base_datos/borrar_usuario.php" method="POST">



        Usuario a eliminar: <br>
				<span class="error">**ID del usuario. </span><br>

        <input type="text" name="id"
				placeholder="ID" style="border: 1px solid #000; "
				required pattern="[A-Z]{4}[0-9]{2}[A-Z]{1}" title="Dos primeras letras del nombre, dos primeras del primer apellido y las 3 ultimas del dni."/> <br><br>



				<input type="submit" value="borrar" style=" background-color: #243349; color:white; ">



    </form>

	<br><br>




  	    </div>
	  </div>
	</div>
