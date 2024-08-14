<?php
namespace system\support;

class Template {
  private \Twig\Environment $twig;

  public function __construct(string $file)
  {
    $loader = new \Twig\Loader\FilesystemLoader($file);
    $this->twig = new \Twig\Environment($loader);
  }

  public function renderizar(string $view, array $data) {
    return $this->twig->render($view, $data);
  }
}

