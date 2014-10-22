<?php

/**
 * default.php
 *
 * default application controller
 *
 * @package		TinyMVC
 * @author		Monte Ohrt
 */

class Home_Controller extends TinyMVC_Controller
{
  function load_Home()
  {
	if(isset($_SESSION["Valid"]) AND ($_SESSION["Valid"]===TRUE))
	{
		$this->load->model('Demo_Model','Demo');
		if($this->Demo->Login($_SESSION["User"],$_SESSION["Pass"])){
			$this->view->display('templates/includes');
			$this->view->display('home/home_view');
		}
		else {
			$this->view->assign('login_status',TRUE);
			$this->view->display('login/login');
		}	
	}
	else {
		$this->view->assign('login_status',TRUE);
		$this->view->display('login/login');
	}
  }
  function calendario_feed()
  {
  		$this->load->model('Demo_Model','Demo');
  		$res = $this->Demo->loadCalendar($_SESSION["User"],$this->params['start'],$this->params['end']);
  		$this->view->assign('Calendarios',$res);
  		$this->view->display('home/home_feed');
  }
  function newEvent()
  {
  		$this->view->display('templates/includes');
  		$this->view->assign('new_event',TRUE);
  		$this->view->display('home/home_view');
  }
  function addEvent()
  {
  	
  }
  function loadEvent()
  {
  	echo "test".$this->params['id'].$this->params['desc'];
  }
  
}

?>
