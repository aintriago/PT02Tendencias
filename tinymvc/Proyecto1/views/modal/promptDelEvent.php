<?php
IncludeOnReady("promptDelEvent_onReady");
?>
<p> Eliminar el registro?</p>
<form method="post" action="/Proyecto1/mantenedor/delevent">
	<input type="hidden" id="id" name="id" value="<?php echo $IdEvent;?>" />
	<input id="submit_form_del_event" type="submit" value="Eliminar" style="display: none" />
</form>	 