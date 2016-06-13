<?php echo include('con_y_sin_privilegios/menu.php'); ?>
				<div id="pagina">
      <h1 id="titulo_pagina"><span class="texto_titulo">Eliminar recurso:</span></h1>
      <div id="contenido" class="sec_interior">
	<div class="content_doku">



    <form action="base_datos/eliminar_recurso.php" method="POST">



        Correccion del examen a eliminar<br>

        <input type="text" name="nombreUsuario" placeholder="Examen" style="border: 1px solid #000; "><br><br>



				<input type="submit" value="borrar" style=" background-color: #243349; color:white; ">



    </form>

	<br><br>




  	    </div>
	  </div>
	</div>
