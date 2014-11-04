<div id="header">
    <h1>Sistema Predictivo Consumo Retail</h1>
    <h2>Falabella</h2>
<?php
$Seccion = (isset($Seccion))?$Seccion:"home";
echo get_menu($Seccion);
?>
<div id="dialogViewPerfil" title="Perfil de usuario" style="display: none"></div>
<p id="layoutdims">Usuario : <strong id="header_username"><?=$_SESSION["User"];?></strong> | <a href="#" onclick="Module.header_verperfil_click();">Ver Perfil</a> | <a href="/Demo/login/logout" >Salir</a></p>
</div>