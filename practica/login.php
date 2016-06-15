<div id="menus">



  <form class="widget_loginform" action="base_datos/comprobacion_datos.php" method="post">
    <span>Acceso identificado</span>
<div id="login_form_widget" class="mod-buttons fieldset login_form login_form_widget">

<label id="login_widget" for="ilogin_widget" class="login login_widget">
<span>Usuario</span>
<input name="nombreUsuario" id="ilogin_widget" value="usuario..." onfocus="javascript:if(this.value='usuario...') this.value='';return true;" type="text">
</label>
<label id="password_widget" for="ipassword_widget" class="password password_widget">
<span>Contraseña</span>
<input name="contrasena" id="ipassword_widget" type="password">
</label>

<label id="enviar_login_widget" for="submit_login_widget" class="enviar_login enviar_login_widget">
<input src="" alt="" name="submit" id="submit_login_widget" class="image-enviar" type="image">
</label>
<span id="login_error_widget"> </span>
 <font size=4 face="verdana" color="orange" >
   <?php print_r($_SESSION['error']); ?>
 </font>

</div>
</form>
  </div>
