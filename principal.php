

      <div id="general">
        <?php
          //poner un if, para que si la seion esta abierta muestre el menu correspondiente y si no el login.
          if($_SESSION['logueado'])
            if($_SESSION['priv_admin'])
              include "menu_admin.php";
            else
              include "menu_registrado.php";
          else
              include "login.php";
        ?>
    <div id="pagina">
  <h1 id="titulo_pagina"><span class="texto_titulo">Correcciones disponibles:</span></h1>
  <div id="contenido" class="sec_interior">
<div class="content_doku">


<div style="text-align:center">
<?php echo include('../recursos_index.php'); ?>

</div>



    </div>
</div>
</div>
  </div>



<div id="lateral_doku">
  <div class="content_doku content_doku_display">
    <div class="content_doku">
    </div>
  </div>
</div>


<script src="decsai/urchin.js" type="text/javascript"></script>
<script type="text/javascript">_uacct = "UA-2290740-1";urchinTracker();</script>