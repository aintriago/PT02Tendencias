<?php

/**
 * default.php
 *
 * default application controller
 *
 * @package		TinyMVC
 * @author		Monte Ohrt
 */

class Default_Controller extends TinyMVC_Controller
{
  function index()
  {
  	$this->view->display('login/login_includes');
  	$this->view->display('login/login');
  }
}

?>
