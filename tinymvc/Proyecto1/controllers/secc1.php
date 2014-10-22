<?php

/**
 * default.php
 *
 * default application controller
 *
 * @package		TinyMVC
 * @author		Monte Ohrt
 */

class Secc1_Controller extends TinyMVC_Controller
{
  function index()
  {
    $this->load->model('Test_Model','page');
    $this->view->assign('Menu',$this->page->get_test());
    $this->view->display('templates/includes');
    $this->view->display('secc1/secc1_view');
  }
}

?>
