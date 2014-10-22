<?php

/**
 * default.php
 *
 * default application controller
 *
 * @package		TinyMVC
 * @author		Monte Ohrt
 */

class Perfil_Controller extends TinyMVC_Controller
{
  function index()
  {
  	$this->load->model('Demo_Model','login');
  	$this->view->display('templates/includes');
  	$this->view->assign('User_Data',$this->login->loadPerfil($this->params['User']));
  	$this->view->display('perfil/perfil_view');
  }
  function done()
  {
  	if(isset($_SESSION["Valid"]) and $_SESSION["Valid"]===TRUE)
  	{
  	$this->load->model('Demo_Model','login');
  	$this->login->updUsuario($this->params['Tag'],$_SESSION["User"],$this->params['Value']);
  	$this->view->display('perfil/perfil_done');
  	}
  	else {
  		echo "deslogear!";
  	}
  }
}

?>
