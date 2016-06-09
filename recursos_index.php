<?php
        //conexión base de datos.
            $link = mysqli_connect("localhost","root","puen20") or die("<h2>No se encuentra el servidor</h2>");
            $db=mysqli_select_db($link,"tw_practica") or die ("<h2>Error de conexion</h2>");



            //$sql = "SHOW TABLES";

          $result= mysqli_query($link,"SHOW TABLES") or die ("<h2>Error......</h2>");

          while ($table = mysqli_fetch_array($result)) {
             echo ($table[0] . "<br>");

          }

      // output data of each row

          //echo $sql;


    //  echo "0 results";
    $link->close();

        ?>
