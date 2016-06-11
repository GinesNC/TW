
	<?php echo include('sin_privilegios/menu_registrado.php'); ?>
<div id="pagina">
      <h1 id="titulo_pagina"><span class="texto_titulo">Crear recurso:</span></h1>
      <div id="contenido" class="sec_interior">
	<div class="content_doku">



    <form action="base_datos/creacion_recurso.php" method="POST">



        Correccion del examen<br>

        <input type="text" name="nombreRecurso" placeholder="Examen" style="border: 1px solid #000; "><br><br>

        fecha:<br>

        <input type="text" name="fecha" placeholder="00/00/0000" style="border: 1px solid #000;"><br><br>

				hora inicio<br>

        <input type="text" name="hinicio" placeholder="00:00" style="border: 1px solid #000;"><br><br>

				hora fin<br>

        <input type="text" name="hfin" placeholder="00:00" style="border: 1px solid #000;"><br><br>

				Despacho:<br>

        <input type="text" name="despacho" placeholder="AAAAAA" style="border: 1px solid #000;"><br><br>

				<input type="submit" value="Crear recurso" style=" background-color: #243349; color:white; ">



    </form>

	<br><br>




  	    </div>
	  </div>
	</div>
