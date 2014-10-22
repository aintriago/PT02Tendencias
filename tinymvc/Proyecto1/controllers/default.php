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
  	$this->view->display('templates/includes');
    $this->view->display('home/home_view');
  }
}

?>
