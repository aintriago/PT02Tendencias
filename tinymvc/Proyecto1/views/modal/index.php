<?php
IncludeOnReady("modal_onReady");
?>
<form method="GET" action="/Proyecto1/mantenedor/adduser" onsubmit="return validateForm();" >
<table>
    <tbody>
        <tr><td>Nombre<td><td><input id="nombre" name="nombre" type="text"><td></tr>
        <tr><td>Mail<td><td><input id="mail" name="mail" type="text"><td></tr>
        <tr><td>Fecha Nacimiento<td><td><input id="fecnac" name="fecnac" type="text"><td></tr>
        <tr><td>Password<td><td><input id="clave" name="clave" type="password"><td></tr>
    </tbody>
</table>
    <center><input id="submit_form" type="submit" value="Submit" /></center>
</form>
