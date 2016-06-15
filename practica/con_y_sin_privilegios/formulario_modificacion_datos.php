	<?php echo include('con_y_sin_privilegios/menu.php'); ?>
<div id="pagina">
<h1 id="titulo_pagina"><span class="texto_titulo">Informacion del admin</span></h1>
<div id="contenido" class="sec_interior">
<div class="content_doku">


<div style="text-align:left">
  <div class="content_doku">



      <form action="base_datos/modificar_usuario.php" method="POST">



				Nombre:<br>

				<input type="text" name="nombre" id="nombre" value="<?php if ($_SESSION['priv_admin']) echo ""; else echo  $_SESSION['nombre'];?>"
				placeholder="Nombre" style="border: 1px solid #000; "
				required pattern=".{1,}" title="1 o mas letras"/><br><br>

				Apellidos:<br>

				<input type="text" name="apellidos" id="apellidos" value="<?php if ($_SESSION['priv_admin']) echo ""; else echo $_SESSION['apellidos'];?>"
				placeholder="Apellido1 ..." style="border: 1px solid #000; "
				required pattern=".{1,}" title="1 o mas letras"/>  <br><br>

				DNI:<br>

				<input type="text" name="dni" id="dni" value="<?php if ($_SESSION['priv_admin']) echo ""; else echo $_SESSION['dni'];?>"
				placeholder="000000000X" style="border: 1px solid #000; "
				required pattern="[0-9]{8}[A-Z]{1}" title="8 números seguidos de una letra en mayúscula."/> <br><br>

				Correo electrónico:<br>

				<input type="text" name="correo" id="correo" value="<?php if ($_SESSION['priv_admin']) echo ""; else echo $_SESSION['email'];?>"
				placeholder="usuario@ejemplo.com" style="border: 1px solid #000;"
				required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="El usuario, seguido de un @ y el dominio"/> <br><br>

				usuario: <br>
				<input type="text" name="user" value="<?php if ($_SESSION['priv_admin']) echo ""; else  echo $_SESSION['user'];?>"
				placeholder="Nombre" style="border: 1px solid #000; "
				required pattern=".{1,}" title="1 o mas letras"/><br><br>
				contraseña:<br>
				<input type="password" name="pass1"
				placeholder="contraseña" style="border: 1px solid #000; "
				required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="minimo 8 con numeros, mayúsculas y minúsculas"/><br><br>
				repetir contraseña:<br>
				<input type="password" name="pass2"
				placeholder="repetir contraseña" style="border: 1px solid #000; "
				required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="minimo 8 con numeros, mayúsculas y minúsculas"/><br><br>


          <?php if ($_SESSION['priv_admin'])
            echo 'id del usuario:
            <input type="text" name="id" placeholder="codigo" style="border: 1px solid #000;"><br><br>
						Privilegios administrador:<br>

						<input type="radio" name="priv_admin" value=0 checked> NO <br>
						<input type="radio" name="priv_admin" value=1> SI <br><br>';

						?>




  				<input type="submit" value="Registrar">



      </form>

  	<br><br>




    	    </div>

</div>
</div>
</div>
</div>
