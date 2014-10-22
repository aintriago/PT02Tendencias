<?php
//AGREGAR FUNCIONES AQUI//
function get_menu($Seccion)
{
	switch($Seccion)
	{
		case "home":
			$Home = '<a href="#" class="active"><span>Home</span></a>';
			$secc1 = '<a href="/Demo/planificacion/load_Home"><span>Planificacion</span></a>';
			break;
		case "planificacion":
			$Home = '<a href="/Demo/Home/load_Home"><span>Home</span></a>';
			$secc1 = '<a href="#" class="active"><span>Planificacion</span></a>';
			break;
	}
	return "<ul><li>".$Home."</li><li>".$secc1."</li></ul>";
}

function get_select($data,$Id,$ColumnaId,$ColumnaValue,$width)
{
	$value = "<select id='".$Id."' style='width:".$width."px'>";
	$value .="<option></option>";
	foreach ($data as $obj)
	{
		$value .= '<option value="'.$obj[$ColumnaId].'">'.$obj[$ColumnaValue].'</option>';
	}
	$value .= "</select>";
	return $value;	    		
}

?>
