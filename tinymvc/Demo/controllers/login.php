<?php

/**
 * login.php
 *
 * default application controller
 *
 * @package		TinyMVC
 * @author		DL
 */

class Login_Controller extends TinyMVC_Controller
{
  function Login()
  {
  		if(isset($this->params['User']) and isset($this->params['Pass']))
  		{
	  		$this->load->model('Demo_Model','login');
	  		if($this->login->Login($this->params['User'],$this->params['Pass'])){
	  			$_SESSION["User"]=$this->params['User'];
	  			$_SESSION["Pass"]=$this->params['Pass'];
	  			$_SESSION["Valid"]=TRUE;
	  			$this->view->display('templates/includes');
	 			$this->view->display('home/home_view');
	  		} else{
	  			$this->view->display('login/login_includes');
	  			$this->view->assign('login_status',TRUE);
	  			$this->view->display('login/login');
	  		}
  		} else {
  			$this->view->display('login/login_includes');
  			$this->view->assign('login_status',TRUE);
  			$this->view->display('login/login');
  		}
  }
  function logout()
  {
  	if(isset($_SESSION["Valid"]))
  		unset($_SESSION["Valid"]);
  	if(isset($_SESSION["User"]))
  		unset($_SESSION["User"]);
  	if(isset($_SESSION["Pass"]))
  		unset($_SESSION["Pass"]);
  	$this->view->display('login/login_includes');
  	$this->view->display('login/login');
  }
}
?>
