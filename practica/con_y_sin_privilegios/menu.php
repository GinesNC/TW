<div id="menus">



        <div id="enlaces_secciones" class="mod-menu_secciones">

        <ul>
          <li class="tipo2 item-first_level"><a target="_blank" class="first" href="index.php?secc=monitor">info del monitor.</a></li>
          <ul> <li class="tipo1 item-second_level first-child"><a href="index.php?secc=gestion_recursos">manejar monitor</a></li> </ul>
          <li class="tipo2 item-first_level"><a> Recursos </a></li>

            <ul>
              <li class="tipo1 item-second_level first-child"><a href="index.php?secc=crear_recurso">Crear correccion.</a></li>
              <li class="tipo1 item-second_level"><a href="index.php?secc=modificarRecurso">Modificar recurso.</a></li>
              <li class="tipo1 item-second_level"><a href="index.php?secc=finalizar_recurso">finalizar recurso.</a></li>

            </ul>
            <?php if ($_SESSION['priv_admin']) {
              echo '<li class="tipo2 item-first_level"><a href="index.php?secc=usuarios" >Usuarios.</a></li>
              <ul>
                 <li class="tipo1 item-second_level first-child"><a href="index.php?secc=registro">Alta.</a></li>
      				 <li class="tipo1 item-second_level first-child"><a href="index.php?secc=modificarDatos">modificacion.</a></li>
             <li class="tipo1 item-second_level first-child"><a href="index.php?secc=eliminarUsuario">eliminar.</a></li>
            </ul>';
            }
              else echo '<li class="tipo1 item-second_level first-child"><a href="index.php?secc=modificarDatos">modificacion.</a></li>';

            ?>


            	<li class="tipo2 item-first_level"><a href="index.php?secc=cerrar_sesion"> Cerrar sesion </a></li>


      	</ul>
      			      </div>



    </div>
    <div id="menus">
    	<div id="enlaces_secciones" class="mod-menu_secciones">

      <ul>





    	</ul>
    			      </div>

    </div>
