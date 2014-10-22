<?php
IncludeOnReady("home_new_onReady");
?>
<!-- Column 2 start -->
<h2>Agregar Evento</h2>
<form id="Home_New_Event_Form" method="POST" action="/<?=TMVC_MYAPPNAME;?>/home/addEvent">
<table>
	<tr>
		<td><b>Titulo:</b></td>
		<td><input type="text" id="Home_New_Title" /></td>		
	</tr>
	<tr>
		<td><b>Tipo:</b></td>
		<td><?=get_select(array(),"Home_New_Tipo",NULL,NULL,150)?>		
	</tr>
	<tr>
		<td><b>Comienzo:</b></td>
		<td><input type="text" id="Home_New_Start" /></td>		
	</tr>
	<tr>
		<td><b>Fin:</b></td>
		<td><input type="text" id="Home_New_Fin" /></td>		
	</tr>
</table>
<b>Descripcion: </b><br/>
<textarea id="Home_New_Description" >
</textarea>
<input id="" type="submit" value="Go" style="display: none" />
</form> 
 
