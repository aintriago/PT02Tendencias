<?php
IncludeOnReady("planificacion_menu_onReady");
?>

<h2>Filtros</h2>
<table>
  <tr>
    <td>
    	<?=get_select($lista_prof_data,"Planificacion_Prof_Select","ID_USUARIO","NOMBRE_USUARIO",180);?>
   	</td>
  </tr>
  <tr>
    <td>
    	<?=get_select($lista_nivel_data,"Planificacion_Nivel_Select","ID_NIVEL","NOMBRE_NIVEL",180);?>
	</td>
  </tr>
  <tr>
    <td>
       	<?=get_select($lista_asig_data,"Planificacion_Asignatura_Select","ID_ASIGNATURA","NOMBRE_ASIGNATURA",180);?>
	</td>
  </tr>
</table>
<br/>
<h2>Acciones</h2>
<button id="CrearUnidadButton">Crear Unidad</button>
<button id="ImportarUnidadButton">Importar</button>
<br/>
<br/>