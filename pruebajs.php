<!DOCTYPE html>
<html>
<script type="text/javascript" src="generar_usuario_pass.js"></script>
<body>

<p>This example calls a function which performs a calculation, and returns the result:</p>
user::
<script type="text/javascript">
var aux=generarUser("Gines","Navarrete","26501500A");
//document.write(aux);
</script>
pass::
<script type="text/javascript">
document.write(generarContr(8));
document.write(aux);

</script>

<?php
  $prueba = '<script type="text/javascript">
    var aux=generarContr(8);
    document.writeln(aux);
    </script>';
$a=  $prueba;
    echo "aaaaaaaaaaaaaaaaaa". $a."aaaaaaaaaaaaaaaaaa";
?>


<p>tamClave</p>
</body>
</html>
