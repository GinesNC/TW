<?php echo include('con_y_sin_privilegios/menu.php'); ?>

<div id="pagina">
<h1 id="titulo_pagina"><span class="texto_titulo">Informacion del admin</span></h1>
<div id="contenido" class="sec_interior">
<div class="content_doku">


<div style="text-align:left">
  <div class="content_doku">



      <form action="base_datos/registro.php" method="POST">

          Nombre:<br>

          <input type="text" name="nombre" id="nombre"
          placeholder="Nombre" style="border: 1px solid #000; "
          required pattern=".{1,}" title="1 o mas letras"/><br><br>

  				Apellidos:<br>

          <input type="text" name="apellidos" id="apellidos"
          placeholder="Apellido1 ..." style="border: 1px solid #000; "
          required pattern=".{1,}" title="1 o mas letras"/>  <br><br>

  				DNI:<br>

          <input type="text" name="dni" id="dni"
          placeholder="000000000X" style="border: 1px solid #000; "
          required pattern="[0-9]{8}[A-Z]{1}" title="8 números seguidos de una letra en mayúscula."/> <br><br>

          Correo electrónico:<br>

          <input type="text" name="correo" id="correo"
          placeholder="usuario@ejemplo.com" style="border: 1px solid #000;"
          required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="El usuario, seguido de un @ y el dominio"/> <br><br>


  				Privilegios administrador:<br>

        	<input type="radio" name="priv_admin" value=0 checked> NO <br>
  				<input type="radio" name="priv_admin" value=1> SI <br><br>

          id del usuario:
          <input type="text" name="id" placeholder="codigo" style="border: 1px solid #000;"
          required pattern="[A-Z]{4}[0-9]{2}[A-Z]{1}" title="Dos primeras letras del nombre, dos primeras del primer apellido y las 3 ultimas del dni."/> <br><br>

          User: **
          <br>
          passwd: ****
          <br>

          **Mismos que id.<br>
          ***Se genera sola.



          <input type="submit" value="Registrar">



      </form>

  	<br><br>




    	    </div>

</div>



</div>
</div>
</div>
