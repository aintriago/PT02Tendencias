<?php
class Demo_Model extends TinyMVC_Model
{
    function Login($User,$Pass)
    {
    	$this->db->query("Call Login('".$User."','".$Pass."');");
	    $row = $this->db->next();
	    return ($row["returnValue"]>=1)?true:false;
    }
    function loadCalendar($User,$ini,$fin)
    {
    	$this->db->query("Call loadCalendar('".$User."','".$ini."','".$fin."');");
    	$results = array();
    	while($row = $this->db->next())
    		$results[] = $row;
    	return $results;
    }
    function loadPerfil($User)
    {
    	$this->db->query("Call loadPerfil('".$User."');");
    	$row = $this->db->next();
    	return $row;
    }
    function updUsuario($Campo,$User,$Valor)
    {
    	$this->db->query("Call updUsuario('".$Campo."','".$User."','".$Valor."');");
    }
    function loadPlanificacion($Asignatura,$Usuario,$Nivel)
    {
    	$this->db->query("Call loadPlanificacion('".$Usuario."',".$Asignatura.",".$Nivel.");");
    	$results = array();
    	while($row = $this->db->next())
    		$results[] = $row;
    	return $results;
    }
    function loadListaProfesores()
    {
    	$this->db->query("Call loadListaProfesores();");
    	$results = array();
    	while($row = $this->db->next())
    		$results[] = $row;
    	return $results;
    }
    function loadListaNiveles()
    {
    	$this->db->query("Call loadListaNiveles();");
    	$results = array();
    	while($row = $this->db->next())
    		$results[] = $row;
    	return $results;
    }
    function loadListaAsignaturas()
    {
    	$this->db->query("Call loadListaAsignaturas();");
    	$results = array();
    	while($row = $this->db->next())
    		$results[] = $row;
    	return $results;
    }
}
