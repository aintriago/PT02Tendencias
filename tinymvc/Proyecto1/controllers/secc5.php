<?php

/**
 * default.php
 *
 * default application controller
 *
 * @package		TinyMVC
 * @author		Monte Ohrt
 */

class Secc5_Controller extends TinyMVC_Controller
{
  function index()
  {
    $this->view->display('templates/includes');
    $this->view->display('secc5/secc5_view');
  }
}

?>
