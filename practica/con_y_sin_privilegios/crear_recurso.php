
	<?php echo include('con_y_sin_privilegios/menu.php'); ?>
<div id="pagina">
      <h1 id="titulo_pagina"><span class="texto_titulo">Crear recurso:</span></h1>
      <div id="contenido" class="sec_interior">
	<div class="content_doku">



    <form action="base_datos/creacion_recurso.php" method="POST">



        Correccion del examen:<br>

        <input type="text" name="nombreRecurso" placeholder="Examen" style="border: 1px solid #000; "
				required pattern=".{1,}" title="Nombre del recurso"/><br><br>

        fecha:<br>

        <input type="date" name="fecha" placeholder="YYYY-MM-DD" style="border: 1px solid #000;"
				required  step="1" min="<?php echo date("Y-m-d");?>" max="2016-12-31" value="<?php echo date("Y-m-d");?>"/><br><br>

				hora inicio<br>

        <input type="text" name="hinicio" placeholder="00:00" style="border: 1px solid #000;"
				required pattern="(0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9]){1}" title="HH:MM"/><br><br>


				hora fin<br>

        <input type="text" name="hfin" placeholder="00:00" style="border: 1px solid #000;"
				required pattern="(0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9]){1}" title="HH:MM"/><br><br>

				Despacho:<br>

        <input type="text" name="despacho" placeholder="X00-0" style="border: 1px solid #000;"
				required pattern="[A-Z]{1}[0-9]{2}(-[0-4]{1})" title="Despacho-planta"/><br><br>

				codigo:<br>

        <input type="text" name="id" placeholder="aaa" style="border: 1px solid #000;"
				required pattern="[a-z]{3,}" title="mas de tres letras minúsculas"/><br><br>

				<input type="submit" value="Crear recurso" style=" background-color: #243349; color:white; ">



    </form>

	<br><br>




  	    </div>
	  </div>
	</div>
