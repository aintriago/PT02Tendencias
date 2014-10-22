<?php

/**
 * default.php
 *
 * default application controller
 *
 * @package		TinyMVC
 * @author		Monte Ohrt
 */

class Planificacion_Controller extends TinyMVC_Controller
{
  function load_Home()
  {
  	if(isset($_SESSION["Valid"]) AND ($_SESSION["Valid"]===TRUE))
	{
		$this->load->model('Demo_Model','login');
	    if($this->login->Login($_SESSION["User"],$_SESSION["Pass"]))
		{
			$this->view->display('templates/includes');
			if(isset($this->params['User'])){
				if(trim($this->params['User']) === "TODOS")
				{
					$Usuario = "";
				} else {
					$Usuario = $this->params['User'];
				}
			} else {
				$Usuario = $_SESSION["User"];
			}
			$Asignatura = (isset($this->params['Asignatura']))?$this->params['Asignatura']:0;
			$Nivel = (isset($this->params['Nivel']))?$this->params['Nivel']:0;
			$this->load->model('Demo_Model','login');
			$this->view->assign('planificacion_data',$this->login->loadPlanificacion($Asignatura,$Usuario,$Nivel));
			$this->view->assign('lista_prof_data',$this->login->loadListaProfesores());
			$this->view->assign('lista_nivel_data',$this->login->loadListaNiveles());
			$this->view->assign('lista_asig_data',$this->login->loadListaAsignaturas());
			$this->view->display('planificacion/planificacion_view');
		}
		else {
			$this->view->display('login/login_includes');
			$this->view->assign('login_status',TRUE);
			$this->view->display('login/login');
		}
	}
	else {
		$this->view->display('login/login_includes');
		$this->view->assign('login_status',TRUE);
		$this->view->display('login/login');
	}
  }
  function get()
  {
  	
  		$this->view->display('planificacion/planificacion_data');
  }
  function loadClases()
  {
  	$this->view->assign('planificacion_ind',TRUE);
  	$this->view->display('planificacion/planificacion_view');
  }
}

?>
