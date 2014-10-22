<?php 
IncludeOnReady("newevent_onReady");
?>
<form method="POST" action="/Proyecto1/mantenedor/addevent" >
<table>
    <tbody>
        <tr><td>Titulo<td><td><input id="title" name="title" type="text"><td></tr>
        <tr><td>Color<td><td><input id="color" name="color" type="text"><td></tr>
        <tr><td>Fecha de Inicio<td><td><input id="ini" name="ini" type="text"><td></tr>
        <tr><td>Hora de Inicio<td><td><input id="tini" name="tini" type="text"><td></tr>
        <tr><td>Fecha de Fin<td><td><input id="fin" name="fin" type="text"><td></tr>
        <tr><td>Hora de Fin<td><td><input id="tfin" name="tfin" type="text"><td></tr>
    </tbody>
</table>
    <center><input id="submit_form" type="submit" value="Submit" /></center>
</form>
