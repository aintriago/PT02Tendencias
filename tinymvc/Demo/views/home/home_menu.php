<?php
IncludeOnReady("home_menu_onReady");
?>
<h2>Acciones</h2>
<?php 
	if(isset($view_calendario) and $view_calendario)
	{
	echo '<button id="backCaledarButton">Volver</button>';
	echo '<button id="saveAndExitButton">Guardar</button>';
	} else {
	echo '<button id="newEventButton">Nuevo Usuario</button>';		
	}
?>




<br/><br/>