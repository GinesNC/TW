<?php
        //conexión base de datos.
        $link = mysqli_connect("localhost","ejercicio_pw","pass_ejercicio_pw") or die("<h2>No se encuentra el servidor</h2>");
        $db=mysqli_select_db($link,"75932436y") or die ("<h2>Error de conexion</h2>");


            //$sql = "SHOW TABLES";

          $sql = "SELECT * from usuarios";
          $result = $link->query($sql);
          echo "<table>";
echo "<tr>";
echo "<th>id</th>";
echo "<th>nombre</th>";
echo "<th>usuario</th>";
echo "<th>privilegios</th>";
echo "<th>correo</th>";
echo "<th>clave</th>";

echo "</tr>";

          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<tr>
         <td align='right'> $row[id] </td>
         <td> $row[nombre] </td>
         <td> $row[user] </td>
         <td> $row[priv_admin]</td>
         <td> $row[correo] </td>
         <td> $row[passwd] </td>

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
