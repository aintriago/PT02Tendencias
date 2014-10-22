<?php
class Test_Model extends TinyMVC_Model
{
    function get_test()
    {
	    $this->db->query('select * from test');
	    while($row = $this->db->next())
	      $results[] = $row;
	    return $results; 
    }
    function get_usuarios()
    {
	    $this->db->query('select * from usuario');
	    while($row = $this->db->next())
	      $results[] = $row;
	    return $results;         
    }
    function new_usuario($nombre,$mail,$fecha_nacimiento,$password)
    {
        return $this->db->insert('usuario',array('nombre'=>$nombre,'mail'=>$mail,'fecha_nacimiento' => $fecha_nacimiento,'password' => $password));
    }
    function get_calendario($start,$end)
    {
    	$this->db->query('select calendario_id as id ,calendario_tittle as title ,calendario_color as color ,calendario_start as start ,calendario_end as end from calendario where calendario_start > "'.$start.' 00:00:00" and calendario_end < "'.$end.' 00:00:00"');
    	while($row = $this->db->next())
    		$results[] = $row;
    	return $results;
    }
    function new_event($title,$color,$start,$tstart,$end,$tend)
    {
    	$ini = $start." ".$tstart;
    	$fin = $end." ".$tend;
    	return $this->db->insert('calendario',array('calendario_tittle'=>$title,'calendario_color'=>$color,'calendario_start' => $ini,'calendario_end' => $fin));
    }
    function del_event($id)
    {
    	$this->db->where('calendario_id',$id); // setup query conditions (optional)
    	return $this->db->delete('calendario');
    }
}
