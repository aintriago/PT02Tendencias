<?php
IncludeOnReady("perfil_main_onReady");
?>
<!-- Column 2 start -->
<h2>Datos de la cuenta</h2>
<input type="hidden" id="Perfil_Id_Usuario" value="<?=$User_Data["NOMBRE_USUARIO"];?>"/>

<br />
<table>
	<tr>
		<td>Usuario</td>
		<td colspan="3"><b><?=$User_Data["NOMBRE_USUARIO"];?></b></td>
	</tr>
	<tr>
		<td>Tipo de Usuario</td>
		<td colspan="3"><b><?=$User_Data["TIPO_USUARIO"];?></b></td>
	</tr>
</table>

<h2>Datos del usuario</h2>
<table>
	<tr>
		<td>Rut</td>
		<td><input id="Perfil_Rut_Usuario" value="<?=$User_Data["RUT_USUARIO"];?>" disabled="disabled" /></td>
		<td><button id="Perfil_Rut_Usuario_Button">Editar</button></td>
		<td><div id="Perfil_Rut_Usuario_Status"><img src="/Demo/images/1413624403_11-128.png" width="15" height="15" style="visibility: hidden;"  /></div></td>
	</tr>		
	<tr>
		<td>Fecha de Nacimiento</td>
		<td><input type="text" id="Perfil_Fecha_Nacimiento" value="<?=$User_Data["FECHA_NACIMIENTO"];?>" disabled="disabled" /></td>
		<td><button id="Perfil_Fecha_Nacimiento_Button">Editar</button></td>
		<td><div id="Perfil_Fecha_Nacimiento_Status"><img src="/Demo/images/1413624403_11-128.png" width="15" height="15" style="visibility: hidden;"  /></div></td>
	</tr>		
	
	<tr>
		<td>Telefono Celular</td>
		<td><input type="text" id="Perfil_Telefono_Celular" value="<?=$User_Data["NRO_CELULAR"];?>" disabled="disabled" /></td>
		<td><button id="Perfil_Telefono_Celular_Button">Editar</button></td>
		<td><div id="Perfil_Telefono_Celular_Status"><img src="/Demo/images/1413624403_11-128.png" width="15" height="15" style="visibility: hidden;"  /></div></td>
	</tr>
	<tr>
		<td>Correo electronico</td>
		<td><input type="text" id="Perfil_Mail" value="<?=$User_Data["CORREO"];?>" disabled="disabled" /></td>
		<td><button id="Perfil_Mail_Button">Editar</button></td>
		<td><div id="Perfil_Mail_Status"><img src="/Demo/images/1413624403_11-128.png" width="15" height="15" style="visibility: hidden;"  /></div></td>
	</tr>
</table>
