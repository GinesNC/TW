<div id="menus">
	<form class="widget_loginform" action="base_datos/apuntarse_recurso.php" method="post">
Apuntarse a recurso
<div id="login_form_widget" class="mod-buttons fieldset login_form login_form_widget">

<label id="login_widget" for="ilogin_widget" class="login login_widget">
<span>Nombre:</span>
<input name="nombre" id="ilogin_widget" placeholder="Nombre" type="text">
</label>
<label id="login_widget" for="ilogin_widget" class="login login_widget">
<span>DNI:</span>
<input name="dni" id="ilogin_widget" required pattern="[0-9]{8}[A-Z]{1}" title="8 números seguidos de una letra en mayúscula." type="text"/>
</label>
<label id="login_widget" for="ilogin_widget" class="login login_widget">
<span>ID recurso:</span> <span style="color:orange">****** En minusculas. ******</span>
<input name="nombreRecurso" id="ilogin_widget" required pattern=".{3,}" title="mas de 3 letras en minuscula" type="text">
</label>
<br><br>
<input type="submit" value="Registrar">


</div>
</form>
</div>
