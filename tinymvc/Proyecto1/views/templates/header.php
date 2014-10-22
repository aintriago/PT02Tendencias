<div id="header">
    <h1>Template1</h1>
    <h2>Template de aplicacion</h2>
<?php
$Seccion = (isset($Seccion))?$Seccion:"home";
echo get_menu($Seccion);
?>
<p id="layoutdims">usuario : <strong>admin</strong> | <a href="#">ver perfil</a></p>
</div>