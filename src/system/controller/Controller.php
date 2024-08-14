<?php
namespace system\controller;

use system\support\Template;

class Controller {
  protected Template $template;

  public function __construct(string $file)
  {
    $this->template = new Template($file);
  }
}
