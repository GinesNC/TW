<?php echo include('con_y_sin_privilegios/menu.php'); ?>
<div id="pagina">
<h1 id="titulo_pagina"><span class="texto_titulo">Informacion del admin</span></h1>
<div id="contenido" class="sec_interior">
<div class="content_doku">


<div style="text-align:left">
  <div class="content_doku">



      <form action="base_datos/registro.php" method="POST">



          Nombre:<br>

          <input type="text" name="nombre" placeholder="Nombre" style="border: 1px solid #000; "><br><br>

  				Apellidos:<br>

          <input type="text" name="apellidos" placeholder="Apellido1 ..." style="border: 1px solid #000; "><br><br>

  				DNI:<br>

          <input type="text" name="dni" placeholder="000000000X" style="border: 1px solid #000; "><br><br>

          Correo electrónico:<br>

          <input type="text" name="correo" placeholder="usuario@ejemplo.com" style="border: 1px solid #000;"><br><br>

  				Privilegios administrador:<br>

        	<input type="radio" name="priv_admin" value=0 checked> NO <br>
  				<input type="radio" name="priv_admin" value=1> SI <br><br>

          id del usuario:
          <input type="text" name="id" placeholder="codigo" style="border: 1px solid #000;"><br><br>

          User: **
          <br>
          passwd: **
          <br>

          **Mismos que id. Se cambian en el primer inicio de sesion.          



          <input type="submit" value="Registrar">



      </form>

  	<br><br>




    	    </div>

</div>



</div>
</div>
</div>
