<?php

/**
 * default.php
 *
 * default application controller
 *
 * @package		TinyMVC
 * @author		Monte Ohrt
 */

class Secc3_Controller extends TinyMVC_Controller
{
  function index()
  {
    $this->load->model('Test_Model','page');
    $this->view->assign('Usuarios',$this->page->get_usuarios());
    $this->view->display('templates/includes');
    $this->view->display('secc3/secc3_view');
  }
  function secc4()
  {
  	$this->view->display('templates/includes');
  	$this->view->display('secc4/secc4_view');
  }
  function calendario_feed()
  {
  	$this->load->model('Test_Model','page');
  	$this->view->assign('Calendarios',$this->page->get_calendario($this->params['start'],$this->params['end']));
  	$this->view->display('secc4/secc4_feed');
  }
  function calendario_newform()
  {
  	$this->view->display('modal/newEventForm');
  }
}

?>
