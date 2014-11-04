<?php
IncludeOnReady("home_new_onReady");
?>
<!-- Column 2 start -->
<h2>Agregar Usuario</h2>
<form id="Home_New_Event_Form" method="POST" action="/<?=TMVC_MYAPPNAME;?>/home/addEvent">
<table>
	<tr>
		<td><b>Rut Usuario:</b></td>
		<td><input type="text" id="Home_New_Title" /></td>		
	</tr>
	<tr>
		<td><b>Nombre Usuario:</b></td>
		<td><input type="text" id="Home_New_Start" /></td>	
	</tr>
	<tr>
		<td><b>Clave Usuario:</b></td>
		<td><input type="text" id="Home_New_Start" /></td>		
	</tr>
	<tr>
		<td><b>Fecha Nacimiento:</b></td>
		<td><input type="text" id="Home_New_Fin" /></td>		
	</tr>
	<tr>
		<td><b>N&uacute;mero Celular:</b></td>
		<td><input type="text" id="Home_New_Fin" /></td>		
	</tr>
	<tr>
		<td><b>Tipo Usuario:</b></td>
		<td><?=get_select(array(),"Home_New_Tipo",NULL,NULL,150)?>			
	</tr>	
</table>
<input id="" type="submit" value="Go" style="display: none" />
</form> 
 
