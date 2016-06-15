<?php
        session_start();
        //conexión base de datos.

            $link = mysqli_connect("localhost","root","puen20") or die("<h2>No se encuentra el servidor</h2>");
            $db=mysqli_select_db($link,"tw_practica") or die ("<h2>Error de conexion</h2>");


            $id_prof=$_SESSION['id'];
            //$sql = "SHOW TABLES";
            if($_GET['secc']=="index")
                  $sql = "SELECT * from recursos_activos ORDER BY fecha ASC";
            else{
            if($_SESSION['priv_admin']){
              $sql = "SELECT * from recursos_activos ORDER BY fecha ASC";
            }
            else{
              $sql = "SELECT * from recursos_activos WHERE id_prof='$id_prof' ORDER BY fecha ASC";
            }
          }
          $result = $link->query($sql);
          echo "<table>";
echo "<tr>";
echo "<th>id</th>";
echo "<th>nombre</th>";
echo "<th>fecha</th>";
echo "<th>hora inicio - hora fin</th>";
echo "<th>despacho</th>";

echo "</tr>";

          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<tr>
         <td align='right'> $row[id] </td>
         <td> $row[nombre] </td>
         <td> $row[fecha] </td>
         <td> $row[hora_inicio] - $row[hora_fin] </td>
         <td> $row[despacho] </td>

         </tr>";
}
echo "</table>";




        } else {
    echo "0 results";
}

      // output data of each row

          //echo $sql;


    //  echo "0 results";
    $link->close();

        ?>
