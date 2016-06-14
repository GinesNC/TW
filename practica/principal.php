

      <div id="general">
        <?php
          //poner un if, para que si la seion esta abierta muestre el menu correspondiente y si no el login.
          if($_SESSION['logueado'])
            include "con_y_sin_privilegios/menu.php";

          else
              include "login.php";
        ?>
    <div id="pagina">
  <h1 id="titulo_pagina"><span class="texto_titulo">Correcciones disponibles:</span></h1>
  <div id="contenido" class="sec_interior">
    <div class="content_doku">


<div style="text-align:center">

    <div class="listaRecursos">
      <?php echo include('base_datos/recursos_index.php'); ?>
    </div>


<!--
<form class="widget_loginform" action="base_datos/apuntarse_recurso.php" method="post">

  Nombre:
  <input type="text" name="nombre" placeholder="Nombre" style="border: 1px solid #000; ">

  DNI:

  <input type="text" name="dni" placeholder="00000000X" style="border: 1px solid #000; ">

  Codigo Recurso:

  <input type="text" name="nombreRecurso" placeholder="AAAAAA" style="border: 1px solid #000; ">
  <input type="submit" value="Apuntarse">

</form>*/
-->
</div>



    </div>
</div>


</div>
<?php include 'alumnos.php'; ?>
  </div>




<div id="lateral_doku">
  <div class="content_doku content_doku_display">
    <div class="content_doku">
    </div>
  </div>
</div>


<script src="decsai/urchin.js" type="text/javascript"></script>
<script type="text/javascript">_uacct = "UA-2290740-1";urchinTracker();</script>
