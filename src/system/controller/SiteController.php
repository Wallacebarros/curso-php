<?php
namespace system\controller;

use system\controller\Controller;
 
class SiteController extends Controller{

  public function __construct()
  {
    parent::__construct('templates/site/views');
  }

  public function index():void{
    echo $this->template->renderizar('index.html', [
      'title'=>'Title test'
    ]);
  }
}
