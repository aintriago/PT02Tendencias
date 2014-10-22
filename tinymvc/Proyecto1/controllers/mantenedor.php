<?php

/**
 * default.php
 *
 * default application controller
 *
 * @package		TinyMVC
 * @author		Monte Ohrt
 */

class Mantenedor_Controller extends TinyMVC_Controller
{
  function index()
  {
    $this->view->display('modal/index');
  }
  function adduser()
  {
      $this->load->model('Test_Model','page');
      if($this->page->new_usuario($this->params['nombre'],$this->params['mail'],$this->params['fecnac'],$this->params['clave']))
      {
        $this->view->assign('Usuarios',$this->page->get_usuarios());
        $this->view->display('secc3/secc3_view');
      }    
  }
  function addevent()
  {
 		$this->load->model('Test_Model','casa');
 		if($this->casa->new_event($this->params['title'],$this->params['color'],$this->params['ini'],$this->params['tini'],$this->params['fin'],$this->params['tfin']))
 		{
 			$this->view->display('templates/includes');
 			$this->view->display('secc4/secc4_view');
 		}
  	
  }
  function prompt_del()
  {
  	$this->view->assign('IdEvent',$this->params['id']);
  	$this->view->display('modal/promptDelEvent');
  }
  function delevent()
  {
  	$this->load->model('Test_Model','casa');
  	if($this->casa->del_event($this->params['id']));
  	{
  		$this->view->display('templates/includes');
  		$this->view->display('secc4/secc4_view');
  	}
  }
}

?>
