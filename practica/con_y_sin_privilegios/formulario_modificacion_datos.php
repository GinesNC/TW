<?php echo include('administrador/menu_admin.php'); ?>
<div id="pagina">
<h1 id="titulo_pagina"><span class="texto_titulo">Informacion del admin</span></h1>
<div id="contenido" class="sec_interior">
<div class="content_doku">


<div style="text-align:left">
  <div class="content_doku">



      <form action="base_datos/modificar_usuario.php" method="POST">



          Nombre:<br>

          <input type="text" name="nombre" placeholder="Nombre" style="border: 1px solid #000; "><br><br>

  				Apellidos:<br>

          <input type="text" name="apellidos" placeholder="Apellido1 ..." style="border: 1px solid #000; "><br><br>

  				DNI:<br>

          <input type="text" name="dni" placeholder="000000000X" style="border: 1px solid #000; "><br><br>

          Correo electrónico:<br>

          <input type="text" name="correo" placeholder="usuario@ejemplo.com" style="border: 1px solid #000;"><br><br>

  				usuario:

          contraseña:

          repetir contraseña:

          id del usuario:
          <input type="text" name="id" placeholder="codigo" style="border: 1px solid #000;"><br><br>


  				<input type="submit" value="Registrar">



      </form>

  	<br><br>




    	    </div>

</div>
</div>
</div>
</div>
